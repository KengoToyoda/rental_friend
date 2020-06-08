<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="utf-8">
    <title><?php wp_title('|', true, 'right'); bloginfo('name'); ?></title>
    <meta name="description" content="">
    <meta name="Keywords" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, user-scalable=no">
    <link rel="stylesheet" type="text/css" href="http://yui.yahooapis.com/3.18.1/build/cssreset/cssreset-min.css">
    <link rel="icon" href="images/pont_logo.png">
    <link rel="stylesheet" type="text/css" href="<?= get_template_directory_uri();?>/style.css">
    <!-- <script src="https://code.jquery.com/jquery-1.12.4.min.js" type="text/javascript"></script> -->
    <!-- bx slider -->
    <link rel="stylesheet" href="<?= get_template_directory_uri();?>/bxslider/dist/jquery.bxslider.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="<?= get_template_directory_uri();?>/bxslider/dist/jquery.bxslider.min.js"></script>
    <script src="<?= get_template_directory_uri();?>/bxslider/dist/vendor/jquery.fitvids.js"></script>
    <script src="<?= get_template_directory_uri();?>/bxslider/dist/vendor/jquery.easing.1.3.js"></script>
  </head>
  <body>
    <section class="wrap">
      <!-- header -->
      <!-- header eye catch-->
      <header class="fixed-bg">
        <h1>
          <a href="<?php echo home_url('/'); ?>">
            Pont hair
          </a>
        </h1>
      </header>
      <!-- nav -->
      <!-- <?php wp_nav_menu(); ?> -->
      <nav class="top_header_nav pont">
        <ul>
          <li class="pc header_nav_logo_pc"><a href=""><img src="images/title/header_title.jpeg" width="100px"></a></li>
          <li><a href="">美容師一覧</a></li>
          <li><a href="">新規掲載</a></li>
          <li><a href="">ランキング</a></li>
          <li><a href="">トップページ</a></li>
          <li class="pc"><a href="" class="header_nav_pc">美容師の方はこちら</a></li>
        </ul>
      </nav>
      <!-- container -->
      <div class="container">  <!-- ここまでheader.php -->
      <!-- <?php wp_head(); ?> -->
