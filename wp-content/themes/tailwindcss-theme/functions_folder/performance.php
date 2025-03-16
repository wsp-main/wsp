<?php
// 絵文字スクリプトを無効化
remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('wp_print_styles', 'print_emoji_styles');

function minify_html_output($buffer) {
    // 圧縮処理：余計な空白、改行、コメントを削除
    $search = array(
        '/\>[^\S ]+/s',     // タグの後の不要な空白や改行
        '/[^\S ]+\</s',     // タグの前の不要な空白や改行
        '/(\s)+/s',         // 複数の空白を1つにする
        '/<!--(.|\s)*?-->/' // HTMLコメントを削除
    );

    $replace = array(
        '>',
        '<',
        '\\1',
        ''
    );

    return preg_replace($search, $replace, $buffer);
}

function start_html_minify_buffering() {
    ob_start('minify_html_output');
}

function end_html_minify_buffering() {
    ob_end_flush();
}

// ページの生成前後でバッファリングを開始/終了
add_action('wp', 'start_html_minify_buffering');
add_action('shutdown', 'end_html_minify_buffering');


function dequeue_gutenberg_styles() {
    // Gutenberg用のブロックスタイルを完全に解除
    wp_dequeue_style( 'wp-block-library' );
    wp_deregister_style( 'wp-block-library' );

    // Gutenbergのテーマ用追加スタイルも完全に解除
    wp_dequeue_style( 'wp-block-library-theme' );
    wp_deregister_style( 'wp-block-library-theme' );
}
add_action( 'wp_enqueue_scripts', 'dequeue_gutenberg_styles', 100 );

function remove_block_library_css() {
    global $wp_styles;

    // wp-block-libraryに関連するすべてのスタイルを削除
    foreach( $wp_styles->registered as $style ) {
        if( strpos( $style->handle, 'wp-block-library' ) !== false ) {
            wp_dequeue_style( $style->handle );
            wp_deregister_style( $style->handle );
        }
    }
}
add_action( 'wp_enqueue_scripts', 'remove_block_library_css', 100 );

add_action( 'wp_enqueue_scripts', 'dequeue_gutenberg_styles', 999 );

