<?php 

#サイト上部にwordpressのheader部分が出るのを防ぐ
add_filter( 'show_admin_bar', '__return_false' );

#ページごとに違うtitleを表示する
add_theme_support('title-tag');

#アイキャッチ画像を使用可能にする
add_theme_support('post-thumbnails');