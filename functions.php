<?php

/**
 * cssやjsを読み込む
 * https://www.at-freak.jp/column/wordpress_css/
*/
function my_enqueue_styles() {
  wp_enqueue_style('ress', '//unpkg.com/ress/dist/ress.min.css', array(), false, 'all');
  // wp_enqueue_style('style', get_stylesheet_uri(), array('ress'), false, 'all');
  wp_enqueue_style('style_// name', get_template_directory_uri() . '/assets/styles/styles.css', array(), '1.0.0');
  wp_enqueue_script('script_name', get_template_directory_uri() . '/assets/js/main.js', array(), '1.0.0', true);
}
add_action('wp_enqueue_scripts', 'my_enqueue_styles');

add_filter('redirect_canonical','my_disable_redirect_canonical');
function my_disable_redirect_canonical( $redirect_url ) {
 
    if ( is_archive() ){
        $subject = $redirect_url;
        $pattern = '/\/page\//'; // URLに「/page/」があるかチェック
        preg_match($pattern, $subject, $matches);
 
        if ($matches){
        //リクエストURLに「/page/」があれば、リダイレクトしない。
        $redirect_url = false;
        return $redirect_url;
        }
    }
 
}

/**
 * アイキャッチ画像を使用可能にする
*/
add_theme_support('post-thumbnails');