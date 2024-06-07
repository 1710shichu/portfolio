<!DOCTYPE html>
<html lang="jS">
<head>
  <meta charset="UTF-8">
  <meta name="description" content="Emeral動物病院は地域に寄り添う">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>EmeraldAnimalClinic</title>
  <!-- <link rel="stylesheet" href="style.css"> -->
  <!-- <link rel="stylesheet" href="css/style.css"> -->
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/style.css">
 
  <!-- slickの読み込み -->
  <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css">
  <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css">
  
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
    </div>
      <!-- PC用ナビゲーション -->
      <nav id="nav-pc">
        <!-- <a class="home" href="index.html">ホーム</a> -->
        <a class="home" href="<?php echo home_url(); ?>">ホーム</a>
        <!-- <a class="greet" href="greet.html">当院について</a> -->
        <a class="greet" href="<?php echo home_url(); ?>/greet">当院について</a>
        <!-- <a class="guide" href="guide.html">診療案内</a> -->
        <a class="guide" href="<?php echo home_url(); ?>/guide">診療案内</a>
        <!-- <a class="news" href="news.html">お知らせ</a> -->
        <a class="news" href="<?php echo home_url(); ?>/category/news">お知らせ</a>
        <!-- <a class="contact" href="contact.html">問い合わせ</a> -->
        <a class="contact" href="<?php echo home_url(); ?>/contact.html">問い合わせ</a>
        <!-- <a class="acsess" href="acsess.html">アクセス</a> -->
        <a class="acsess" href="<?php echo home_url(); ?>/acsess">アクセス</a>
      </nav>
    </header>