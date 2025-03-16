<?php 
// wp-contentやwp-includesディレクトリ内のPHPファイルへの直接アクセスを制限
function block_direct_php_access() {
    if (stripos($_SERVER['REQUEST_URI'], '/wp-content/') !== false || stripos($_SERVER['REQUEST_URI'], '/wp-includes/') !== false) {
        wp_die('このページにアクセスする権限がありません。');
    }
}
add_action('init', 'block_direct_php_access');

// WordPressのバージョン情報を削除
remove_action('wp_head', 'wp_generator');

// プラグインバージョン情報の削除
function remove_version_from_plugins() {
    return '';
}
add_filter('the_generator', 'remove_version_from_plugins');

// ログインエラーメッセージを非表示にする
add_filter('login_errors', function() {
    return 'ログイン情報が正しくありません。';
});

// 特定のREST APIエンドポイントへのアクセスを制限
add_filter('rest_authentication_errors', function($result) {
    if (!empty($result)) {
        return $result;
    }

    // ユーザーエンドポイントを非ログインユーザーに対して制限
    if (strpos($_SERVER['REQUEST_URI'], '/wp-json/wp/v2/users') !== false) {
        if (!is_user_logged_in()) {
            return new WP_Error('rest_forbidden', 'REST APIはログイン後に使用できます。', array('status' => 401));
        }
    }

    return $result;
});

// ファイル編集機能を無効化
define('DISALLOW_FILE_EDIT', true);

// ユーザー名の公開を防止
add_action('template_redirect', 'disable_author_archive');
function disable_author_archive() {
    if (is_author()) {
        wp_redirect(home_url());
        exit();
    }
}

// 非公開データのREST API経由の漏洩を防止
add_filter('rest_endpoints', function ($endpoints) {
    if (isset($endpoints['/wp/v2/users'])) {
        unset($endpoints['/wp/v2/users']);
    }
    return $endpoints;
});

// JSON APIヘッダーを無効化
remove_action('wp_head', 'rest_output_link_wp_head');
remove_action('wp_head', 'wp_oembed_add_discovery_links');
remove_action('template_redirect', 'rest_output_link_header', 11);

// コメントのURLフィールドを必須にする
function require_url_field($fields) {
    $fields['url'] = '<p class="comment-form-url"><label for="url">' . __('Website') . '</label> ' .
        '<input id="url" name="url" type="text" value="" size="30" /></p>';
    return $fields;
}
add_filter('comment_form_default_fields', 'require_url_field');

// 特定のファイル拡張子のみアップロードを許可
function restrict_mime_types($mimes) {
    return array(
        'jpg|jpeg|jpe' => 'image/jpeg',
        'png' => 'image/png',
        'gif' => 'image/gif',
        'pdf' => 'application/pdf',
    );
}
add_filter('upload_mimes', 'restrict_mime_types');

// テーマ編集通知を無効化
remove_action('admin_notices', 'update_nag', 3);

// PHPバージョンを非表示にする
if (function_exists('header_remove')) {
    header_remove('X-Powered-By');
}

// テーマとプラグインの更新通知を非表示にする
add_filter('pre_site_transient_update_core', '__return_null');
add_filter('pre_site_transient_update_plugins', '__return_null');
add_filter('pre_site_transient_update_themes', '__return_null');

// 簡易的なログイン試行回数の制限
function limit_login_attempts() {
    session_start();
    if (!isset($_SESSION['login_attempts'])) {
        $_SESSION['login_attempts'] = 0;
    }

    if ($_SESSION['login_attempts'] >= 3) {
        wp_die('ログイン試行回数が多すぎます。後で再試行してください。');
    }
}
add_action('wp_login_failed', 'increment_login_attempts');
function increment_login_attempts() {
    $_SESSION['login_attempts']++;
}

add_action('wp_logout', 'reset_login_attempts');
add_action('wp_login', 'reset_login_attempts');
function reset_login_attempts() {
    $_SESSION['login_attempts'] = 0;
}

// 管理画面のセッション有効期限を30分に設定
function custom_login_session_expiration($expirein) {
    return 3600; // 30分（秒単位）
}
add_filter('auth_cookie_expiration', 'custom_login_session_expiration');

// デバッグモードを無効化
if (!defined('WP_DEBUG')) {
    define('WP_DEBUG', true);
}

if (!defined('WP_DEBUG_LOG')) {
    define('WP_DEBUG_LOG', true);
}

if (!defined('WP_DEBUG_DISPLAY')) {
    define('WP_DEBUG_DISPLAY', false);
}
@ini_set('display_errors', 0);

// 無効なリクエストをフィルタリング
function block_invalid_requests() {
    if (preg_match('/(eval\(|base64_decode\(|system\(|shell_exec\()/i', $_SERVER['REQUEST_URI'])) {
        wp_die('不正なリクエストが検出されました。');
    }
}
add_action('init', 'block_invalid_requests');

// Hotlinkingの防止 (GTMプレビュー時のみ有効)
function block_hotlinking() {
    // GTMのプレビューモードかどうかを確認
    if (isset($_GET['_gtm_debug'])) {
        $referrer = $_SERVER['HTTP_REFERER'];
        if (!empty($referrer) && strpos($referrer, home_url()) === false) {
            wp_die('Direct access to media is not allowed.');
        }
    }
}
add_action('template_redirect', 'block_hotlinking');



// 環境に応じたIP制限
function restrict_login_page_access() {
    $allowed_ips = array();

    // ローカル環境の場合
    if (strpos($_SERVER['SERVER_NAME'], 'localhost') !== false || $_SERVER['REMOTE_ADDR'] === '127.0.0.1' || $_SERVER['REMOTE_ADDR'] === '::1') {
        // ローカルIPアドレスを許可
        $allowed_ips[] = $_SERVER['REMOTE_ADDR'];
    } else {
        // 本番環境の許可されたIPアドレスを追加
        $allowed_ips[] = '60.73.142.109'; // 既存のIPアドレス
        $allowed_ips[] = '221.188.65.157'; // 新しく追加するIPアドレス
    }

    // 許可されたIP以外からのアクセスをブロック
    if (!in_array($_SERVER['REMOTE_ADDR'], $allowed_ips)) {
        wp_die('このページにアクセスする権限がありません。');
    }
}
add_action('login_init', 'restrict_login_page_access');



// wp-login.phpへのアクセスをブロックし、wsp_loginへのリダイレクトまたは404エラーを返す
function block_wp_login_access() {
    global $pagenow;

    // ログアウト後、wsp_loginにリダイレクト
    if ($pagenow == 'wp-login.php' && isset($_GET['loggedout']) && $_GET['loggedout'] == 'true') {
        wp_redirect(home_url('/wsp_login'));
        exit();
    }

    // ログインページへのアクセスをブロック（ログイン以外の操作は404）
    if ($pagenow == 'wp-login.php' && $_SERVER['REQUEST_METHOD'] == 'GET' && !isset($_GET['action'])) {
        wp_die('404 Not Found');
    }
}
add_action('init', 'block_wp_login_access');

// wsp_loginに対するリクエストをwp-login.phpにマップする
function redirect_to_custom_login() {
    if (strpos($_SERVER['REQUEST_URI'], 'wsp_login') !== false) {
        require_once ABSPATH . 'wp-login.php';
        exit();
    }
}
add_action('init', 'redirect_to_custom_login');

// wp-adminへのアクセスを制限し、ログインしていないユーザーをブロック
function restrict_wp_admin_access() {
    if (strpos($_SERVER['REQUEST_URI'], '/wp-admin') !== false && !is_user_logged_in()) {
        wp_die('このページにアクセスする権限がありません。');
    }
}
add_action('init', 'restrict_wp_admin_access');


// シークレット質問と答えを設定
function custom_login_authentication() {
    ?>
    <p>
        <label for="auth_question"><?php _e('暗唱番号を入力してください'); ?></label>
        <input type="text" name="auth_question" id="auth_question" class="input" value="" size="8" />
    </p>
    <?php
}
add_action('login_form', 'custom_login_authentication');

// シークレット質問の答えをチェック
function check_custom_login_authentication($user, $username, $password) {
    // 正しい答えを設定
    $correct_answer = '553696';

    if (isset($_POST['auth_question']) && strtolower(trim($_POST['auth_question'])) !== strtolower($correct_answer)) {
        // 誤った答えの場合、エラーを返す
        return new WP_Error('authentication_failed', __('認証に失敗しました。'));
    }

    return $user;
}
add_filter('authenticate', 'check_custom_login_authentication', 30, 3);

// 認証失敗時のエラーメッセージをカスタマイズ
function custom_auth_error_message($error) {
    if (isset($_GET['auth_question']) && $_GET['auth_question'] === 'failed') {
        return __('シークレット質問の答えが正しくありません。');
    }
    return $error;
}
add_filter('login_errors', 'custom_auth_error_message');

// Emojisの無効化
remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('wp_print_styles', 'print_emoji_styles');

// Embed機能の無効化
function disable_embeds_code_init() {
    remove_action('rest_api_init', 'wp_oembed_register_route');
    remove_filter('oembed_dataparse', 'wp_filter_oembed_result', 10);
    remove_action('wp_head', 'wp_oembed_add_discovery_links');
    remove_action('wp_head', 'wp_oembed_add_host_js');
    add_filter('embed_oembed_discover', '__return_false');
    remove_filter('oembed_dataparse', 'wp_filter_oembed_result', 10);
    remove_filter('pre_oembed_result', 'wp_filter_pre_oembed_result', 10);
}
add_action('init', 'disable_embeds_code_init', 9999);

add_action('init', 'start_session', 1);
function start_session() {
    if(!session_id()) {
        session_start();
    }
}