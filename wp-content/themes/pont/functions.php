<?php 

#サイト上部にwordpressのheader部分が出るのを防ぐ
add_filter( 'show_admin_bar', '__return_false' );

#ページごとに違うtitleを表示する
add_theme_support('title-tag');

#アイキャッチ画像を使用可能にする
add_theme_support('post-thumbnails');

function load_script(){
  wp_enqueue_script('jquery');
}
add_action('init', 'load_script');

#カスタムメニュー機能を使用可能にする
add_theme_support('menus');

// ウィジェットを追加
function my_theme_widgets_init() {
  register_sidebar( array(
    'name' => 'Main Sidebar',
    'id' => 'main-sidebar',
  ) );
}
add_action( 'widgets_init', 'my_theme_widgets_init' );

// スラッグ名自動生成
function auto_post_slug( $slug, $post_ID, $post_status, $post_type ) {
  if ( preg_match( '/(%[0-9a-f]{2})+/', $slug ) ) {
  $slug = utf8_uri_encode( $post_type ) . '-' . $post_ID;
  }
  return $slug;
  }
  add_filter( 'wp_unique_post_slug', 'auto_post_slug', 10, 4 );