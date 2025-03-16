<?php
/**
 * Theme setup and initialization.
 */
function tailpress_setup() {
    // タイトルタグのサポート
    add_theme_support('title-tag');

    // メニューの登録
    register_nav_menus([
        'primary' => __('Primary Menu', 'tailpress'),
    ]);

    // HTML5マークアップのサポート
    add_theme_support('html5', [
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
    ]);

    // ロゴやサムネイル、幅広のアライメントなどのサポート
    add_theme_support('custom-logo');
    add_theme_support('post-thumbnails');
    add_theme_support('align-wide');
}
add_action('after_setup_theme', 'tailpress_setup');

/**
 * Enqueue theme assets (CSS and JavaScript).
 */
function tailpress_enqueue_scripts() {
    $theme = wp_get_theme();

    // スタイルシートを読み込み
    wp_enqueue_style('tailpress-style', get_stylesheet_uri(), [], $theme->get('Version'));
    wp_enqueue_style('tailpress', get_stylesheet_directory_uri() . '/css/app.min.css', [], $theme->get('Version'));

    // JavaScriptをフッターで遅延読み込み
    wp_enqueue_script('tailpress', get_stylesheet_directory_uri() . '/js/app.min.js', [], time(), true);
}
add_action('wp_enqueue_scripts', 'tailpress_enqueue_scripts');

/**
 * Enqueue jQuery.
 */
function enqueue_jquery() {
    if (!is_admin()) { // 管理画面以外でのみ実行
        wp_deregister_script('jquery'); // デフォルトのjQueryを解除
        wp_register_script('jquery', includes_url('/js/jquery/jquery.min.js'), [], '3.7.1', true); // フッターに追加
        wp_enqueue_script('jquery');
    }
}
add_action('wp_enqueue_scripts', 'enqueue_jquery');

/**
 * Enqueue custom scripts.
 */
function enqueue_custom_script() {
    wp_enqueue_script('custom', get_template_directory_uri() . '/js/custom.min.js', ['jquery'], null, true);
}
add_action('wp_enqueue_scripts', 'enqueue_custom_script');

/**
 * Disable jQuery Migrate.
 */
function disable_jquery_migrate($scripts) {
    if (!is_admin() && isset($scripts->registered['jquery'])) {
        $jquery_dependencies = $scripts->registered['jquery']->deps;
        $scripts->registered['jquery']->deps = array_diff($jquery_dependencies, ['jquery-migrate']);
    }
}
add_action('wp_default_scripts', 'disable_jquery_migrate');

/**
 * 特定の固定ページでのみ Snow Monkey Forms のスクリプトとスタイルを読み込む
 */
function enqueue_snow_monkey_forms_on_specific_page() {
    // 固定ページ「contact」でのみ読み込む
    if (is_page('contact','startup-lp')) { 
        wp_enqueue_script(
            'snow-monkey-forms-app', 
            plugins_url('src/js/app.js', 'snow-monkey-forms'), 
            ['jquery'], 
            '1.0.0', 
            true
        );
    }
}
add_action('wp_enqueue_scripts', 'enqueue_snow_monkey_forms_on_specific_page');

/**
 * Add custom classes to menu items.
 */
function tailpress_nav_menu_add_li_class($classes, $item, $args, $depth) {
    if (isset($args->li_class)) {
        $classes[] = $args->li_class;
    }
    if (isset($args->{"li_class_$depth"})) {
        $classes[] = $args->{"li_class_$depth"};
    }
    return $classes;
}
add_filter('nav_menu_css_class', 'tailpress_nav_menu_add_li_class', 10, 4);

/**
 * Add custom classes to submenu items.
 */
function tailpress_nav_menu_add_submenu_class($classes, $args, $depth) {
    if (isset($args->submenu_class)) {
        $classes[] = $args->submenu_class;
    }
    if (isset($args->{"submenu_class_$depth"})) {
        $classes[] = $args->{"submenu_class_$depth"};
    }
    return $classes;
}
add_filter('nav_menu_submenu_css_class', 'tailpress_nav_menu_add_submenu_class', 10, 3);



/**
 * Add meta description dynamically.
 */
function add_meta_description() {
    $description = get_bloginfo('description'); // デフォルトの説明
    if (is_home() || is_front_page()) {
        $description = get_bloginfo('description');
    } elseif (is_single() || is_page()) {
        global $post;
        $description = has_excerpt($post->ID) ? get_the_excerpt($post->ID) : get_bloginfo('description');
    }
    echo '<meta name="description" content="' . esc_attr($description) . '">' . "\n";
}
add_action('wp_head', 'add_meta_description');

/**
 * Include popup templates.
 */
function enqueue_popup_templates() {
    if (!wp_is_mobile()) {
        require get_template_directory() . '/startup-lp-parts/parts/popup-template2.php'; // PC用
    }
    require get_template_directory() . '/startup-lp-parts/parts/popup-template1.php'; // 常に読み込み
}
add_action('wp_footer', 'enqueue_popup_templates');

/**
 * Utility function for asset versioning.
 */
function tailpress_asset($path) {
    return wp_get_environment_type() === 'production' ?
        get_stylesheet_directory_uri() . '/' . $path :
        add_query_arg('time', time(), get_stylesheet_directory_uri() . '/' . $path);
}
/**
 * メインビジュアルをプリリロードしておくための記述
 */
function preload_images_with_fallback() {
    // ページごとのプリロード対象画像を定義
    $preload_images = [
        'about' => '../img/mv_about_sp.svg',
        'website' => '../img/mv_service_sp.svg',
        'cost_website' => '../img/mv_cost_sp.svg',
        'blog' => '../img/mv_post_sp.svg',
        'contact' => '../img/mv_contact_sp.svg',
    ];

    // トップページ用画像をデバイスごとに定義
    $top_page_images = [
        'mobile' => '../img/mv_top_sp.svg',
        'desktop' => '../img/mv_top.svg',
    ];

    // 現在のページスラッグを取得
    if (is_front_page() || is_home()) {
        // トップページの処理
        echo '<link rel="preload" href="' . esc_url(get_template_directory_uri() . '/' . ltrim($top_page_images['mobile'], '/')) . '" as="image" media="(max-width: 768px)" type="image/svg+xml">';
        echo '<link rel="preload" href="' . esc_url(get_template_directory_uri() . '/' . ltrim($top_page_images['desktop'], '/')) . '" as="image" media="(min-width: 769px)" type="image/svg+xml">';
    } else {
        // 他のページの処理
        $current_page_slug = get_post_field('post_name', get_post());
        if (array_key_exists($current_page_slug, $preload_images)) {
            $image_path = $preload_images[$current_page_slug];
            echo '<link rel="preload" href="' . esc_url(get_template_directory_uri() . '/' . ltrim($image_path, '/')) . '" as="image" type="image/svg+xml">';
        }
    }
}
add_action('wp_head', 'preload_images_with_fallback');



/**
 * Include additional functionality.
 */
// WebP画像変換
require_once get_template_directory() . '/functions_folder/webpchange.php';
// パフォーマンス改善
require_once get_template_directory() . '/functions_folder/performance.php';
// セキュリティ関連
require_once get_template_directory() . '/functions_folder/security.php';
