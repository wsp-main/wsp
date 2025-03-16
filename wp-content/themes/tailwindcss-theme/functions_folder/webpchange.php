<?php
// 画像をアップロード時に自動でWebPに変換
function convert_image_to_webp($image_data) {
    // 画像のパスを取得
    $image_path = $image_data['file'];

    // 拡張子をチェック
    $file_type = wp_check_filetype($image_path);
    
    // 対応している画像形式のみ処理
    if (in_array($file_type['ext'], ['jpg', 'jpeg', 'png'])) {
        // WebP形式の画像のパスを決定
        $webp_path = str_replace(array('.jpg', '.jpeg', '.png'), '.webp', $image_path);
        
        // WebP画像がすでに存在するか確認
        if (file_exists($webp_path)) {
            error_log("WebPファイルは既に存在します: " . $webp_path);
            return $image_data; // 既存ファイルがある場合は処理を終了
        }

        // 画像リソースを作成
        if ($file_type['ext'] === 'png') {
            $image = imagecreatefrompng($image_path);
        } else {
            $image = imagecreatefromjpeg($image_path);
        }

        // エラーチェック
        if ($image === false) {
            error_log("画像リソースの作成に失敗しました: " . $image_path);
            return $image_data;
        }

        // 画像のサイズに基づいて圧縮率を設定
        list($width, $height) = getimagesize($image_path);
        $quality = get_webp_quality_based_on_size($width, $height);

        // WebP形式に変換して保存 (品質を指定、0-100で設定可能)
        if (!imagewebp($image, $webp_path, $quality)) {
            error_log("WebP形式への変換に失敗しました: " . $webp_path);
        } else {
            error_log("WebPファイルを生成しました: " . $webp_path);
        }

        // メモリを解放
        imagedestroy($image);
    }
    return $image_data;
}
add_filter('wp_generate_attachment_metadata', 'convert_image_to_webp');

// 画像のサイズに基づいて圧縮率を決定する関数
function get_webp_quality_based_on_size($width, $height) {
    // 例として、大きい画像ほど圧縮率を高く、小さい画像には高品質を適用
    $max_dimension = max($width, $height);

    if ($max_dimension > 2000) {
        return 70;  // 大きい画像は70%
    } elseif ($max_dimension > 1000) {
        return 80;  // 中サイズの画像は80%
    } else {
        return 90;  // 小さい画像は90%
    }
}

// 非同期で画像を変換する関数 (WordPressの非同期APIを使用)
function async_convert_images_to_webp() {
    $attachments = get_posts(array(
        'post_type'      => 'attachment',
        'post_mime_type' => array('image/jpeg', 'image/png'),
        'numberposts'    => -1,
    ));

    foreach ($attachments as $attachment) {
        // 各画像を非同期でWebPに変換
        wp_remote_post(admin_url('admin-ajax.php?action=convert_image_to_webp_async'), array(
            'body' => array('attachment_id' => $attachment->ID),
            'timeout' => 0.01, // 非同期で実行するため短いタイムアウトを設定
        ));
    }
}
add_action('wp_ajax_convert_image_to_webp_async', 'convert_image_to_webp_async_handler');

// 非同期リクエストを処理するハンドラー
function convert_image_to_webp_async_handler() {
    $attachment_id = intval($_POST['attachment_id']);
    $image_data = wp_get_attachment_metadata($attachment_id);
    
    if ($image_data) {
        convert_image_to_webp($image_data);
    }
    wp_die(); // 非同期処理を終了
}

// 管理画面にWebP設定オプションを追加
function add_webp_settings_to_admin() {
    add_options_page(
        'WebP設定',           // ページタイトル
        'WebP設定',           // メニュータイトル
        'manage_options',      // 権限
        'webp-settings',       // メニュー名
        'render_webp_settings_page'  // 表示する関数
    );
}
add_action('admin_menu', 'add_webp_settings_to_admin');

// WebP設定ページを表示する関数
function render_webp_settings_page() {
    ?>
    <div class="wrap">
        <h1>WebP設定</h1>
        <form method="post" action="options.php">
            <?php
            settings_fields('webp_settings_group');
            do_settings_sections('webp-settings');
            submit_button();
            ?>
        </form>
    </div>
    <?php
}

// 設定の初期化
function initialize_webp_settings() {
    register_setting('webp_settings_group', 'webp_quality');
    
    add_settings_section(
        'webp_settings_section',
        'WebP画像変換設定',
        null,
        'webp-settings'
    );
    
    add_settings_field(
        'webp_quality_field',
        'WebP画像の品質 (0-100)',
        'render_webp_quality_field',
        'webp-settings',
        'webp_settings_section'
    );
}
add_action('admin_init', 'initialize_webp_settings');

// WebP品質フィールドをレンダリング
function render_webp_quality_field() {
    $value = get_option('webp_quality', 80); // デフォルト品質を80に設定
    echo '<input type="number" name="webp_quality" value="' . esc_attr($value) . '" min="0" max="100">';
}
