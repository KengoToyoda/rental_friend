<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="utf-8">
    <meta name="description" content="">
    <meta name="Keywords" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, user-scalable=no">
    <link rel="stylesheet" type="text/css" href="http://yui.yahooapis.com/3.18.1/build/cssreset/cssreset-min.css">
    <!-- <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js"></script> -->
    <link rel="stylesheet" type="text/css" href="<?= get_template_directory_uri();?>/style.css">
    <!-- bx slider -->
    <link rel="stylesheet" href="<?= get_template_directory_uri();?>/bxslider/dist/jquery.bxslider.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="<?= get_template_directory_uri();?>/bxslider/dist/jquery.bxslider.min.js"></script>
    <script src="<?= get_template_directory_uri();?>/bxslider/dist/vendor/jquery.fitvids.js"></script>
    <script src="<?= get_template_directory_uri();?>/bxslider/dist/vendor/jquery.easing.1.3.js"></script>
    <?php wp_head(); ?>
    <!-- jqueryの重複読み込みを防ぐ --> 
    <?php wp_enqueue_script('jquery');?>
  </head>
  <body <?php body_class(); ?>>
        <?php wp_body_open(); ?>
    <section class="wrap">
      <!-- header -->
      <nav class="top_header_nav pont ">
        <ul>
          <li class="pc header_nav_logo_pc"><a href=""><img src="<?= get_template_directory_uri();?>/images/title/header_title.jpeg" width="100px"></a></li>
          <li><a href="#new_dresser">新規掲載</a></li>
          <li><a href="#hair_catelog">ヘアカタログ</a></li>
          <li><a href="#ranking">ランキング</a></li>
          <li><a href="http://localhost/rental_friend/">トップページ</a></li>
          <li class="pc"><a href="" class="header_nav_pc">美容師の方はこちら</a></li>
        </ul>
      </nav>
      <!-- header eye catch-->
      <?php if ( is_home() ): ?>
      <header class="fixed-bg_sp">
        <h1>
          <a href="<?php echo home_url(); ?>">
            Pont hair
          </a>
        </h1>
      </header>
      <?php endif; ?>
      <!-- container -->
      <div class="container">  <!-- ここまでheader.php -->
