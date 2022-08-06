<?php

function add_css_files() {
  //スタイルシートの読み込み
  //wp_enqueue_style( 'bootstrap-grid', get_template_directory_uri() . 'css/bootstrap-grid.min.css', "", '5.0.2' );
  wp_enqueue_style( 'bootstrap.min', get_template_directory_uri() . '/css/bootstrap.min.css', "", '5.0.2' );
  wp_enqueue_style( 'style', get_template_directory_uri() . '/style.css', "", '20210729' );

}
//アクションフック（wp_enqueue_scripts）への登録
add_action('wp_enqueue_scripts', 'add_css_files');

function add_js_files() {
    // WordPress本体のjquery.jsを読み込まない
    //wp_deregister_script('jquery');

    wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/js/bootstrap.bundle.min.js', array( 'jquery' ) );

}
# 記事読み込み

//アクションフック（wp_enqueue_scripts）への登録
add_action('wp_enqueue_scripts', 'add_js_files');

//画像のトリミング処理

add_theme_support('post-thumbnails');
add_image_size( 'img750', 750, 750, true );
add_image_size( 'img190', 190, 106, true );
add_image_size( 'img250', 250, 250, true );
add_image_size( 'img288', 288, 162, true );
add_image_size( 'img608', 608, 348, true );



