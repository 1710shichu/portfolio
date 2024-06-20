<!DOCTYPE html>
<html lang="js">
<head>
  <meta charset="UTF-8">
  <meta name="description" content="Emeral動物病院は地域に寄り添う">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>EmeraldAnimalClinic</title>
  <!-- slickの読み込み -->
  <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css">
  <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css">
  
  <!-- <link rel="stylesheet" href="style.css"> -->
  <!-- <link rel="stylesheet" href="css/style.css"> -->
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/style.css">
 
  <?php wp_head(); ?>
</head>
<body>
  <!-- ヘッダー -->
  <header>
    <!-- ロゴ -->
    <div id="header-top">
      <div id="header-top-left">
        <!-- <a href="index.html" id="header-logo"><img src="images/logo.png" alt="トップページに戻る"></a> -->
       <a href="<?php echo home_url(); ?>" id="header-logo"><img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" alt="トップページに戻る"></a>
       <!-- <img id="header-adress" src="images/adress.png" alt="住所と電話番号"> -->
       <img id="header-adress" src="<?php echo get_template_directory_uri(); ?>/images/adress.png" alt="住所と電話番号">
      </div>
      <div id="header-top-right"></div>
      <a href="" class="a-reserve" alt="予約へ">予約</a>
    </div>
    <!-- PC用ナビゲーション -->
    <img id="menu-sp" src="<?php echo get_template_directory_uri(); ?>/images/button-menu.png" alt="ナビゲーションを開く" onclick="document.getElementById('nav-pc').style.display = 'block'">
  <nav id="nav-pc">
    <img id="close" src="<?php echo get_template_directory_uri(); ?>/images/button-batsu.png" alt="ナビを閉じる" onclick="document.getElementById('nav-pc').style.display = 'none'">
    <a class="home" href="<?php echo home_url(); ?>">ホーム</a>
    <a class="greet" href="<?php echo home_url(); ?>/greet">当院について</a>
    <a class="guide" href="<?php echo home_url(); ?>/guide">診療案内</a>
    <a class="news" href="<?php echo home_url(); ?>/category/news">お知らせ</a>
    <a class="contact" href="<?php echo home_url(); ?>/contact">問い合わせ</a>
    <a class="acsess" href="<?php echo home_url(); ?>/acsess">アクセス</a>
  </nav>
 
<!--   
  <nav id=nav-sp>
     <a class="menu" href="<?php echo home_url(); ?>">ホーム</a> 
     <a class="menu" href="<?php echo home_url(); ?>/greet">当院について</a>
     <a class="menu" href="<?php echo home_url(); ?>>/guide">診療案内</a>
     <a class="menu" href="<?php echo home_url(); ?>/category/news">お知らせ</a>
     <a class="menu" href="<?php echo home_url(); ?>/contact">問い合わせ</a>
     <a class="menu" href="<?php echo home_url(); ?>/acsess">アクセス</a>
  </nav> -->
    </header>