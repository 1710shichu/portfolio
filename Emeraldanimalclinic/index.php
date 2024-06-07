<!DOCTYPE html>
<html lang="js">
<head>
  <meta charset="UTF-8">
  <meta name="description" content="Emeral動物病院は地域に寄り添う">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>EmeraldAnimalClinic</title>
  <link rel="stylesheet" href="style.css">

  <link rel="stylesheet" href="css/style.css">

  <!-- slickの読み込み -->
  <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css">
  <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css">

</head>
<body>
  <!-- ヘッダー -->
  <header>
    <!-- ロゴ -->
    <div id="header-top">
      <div id="header-top-left">
       <a href="index.html" id="header-logo"><img src="images/logo.png" alt="トップページに戻る"></a>
       <img id="header-adress" src="images/adress.png" alt="住所と電話番号">
      </div>
      <div id="header-top-right"></div>
       <a href="" class="a-reserve" alt="予約へ">予約</a>
      </div>
    </div>
      <!-- PC用ナビゲーション -->
      <nav id="nav-pc">
        <a class="home" href="index.html">ホーム</a>
        <a class="greet" href="greet.html">当院について</a>
        <a class="guide" href="guide.html">診療案内</a>
        <a class="news" href="news.html">お知らせ</a>
        <a class="contact" href="contact.html">問い合わせ</a>
        <a class="acsess" href="acsess.html">アクセス</a>
      </nav>
    </header>
  <main>
    <!-- <section id="main-visual"> -->
      <!-- <img id=calcat src="images/index/carousel1.jpg" alt="カルーセル猫"> -->
    <!-- </section> -->
    <section id="carousel-section">
      <div class="carousel">
        <div>
          <img class="carouselImg" src="images/index/carousel11.png">
        </div>
        <div>
          <img class="carouselImg" src="images/index/carousel2.jpg">
        </div>
        <div>
          <img class="carouselImg" src="images/index/carousel3.jpg">
        </div>
        <div>
          <img class="carouselImg" src="images/index/carousel4.jpg">
        </div>
       
      </div>
    </section>   
    <!-- お知らせ -->
    <section id="index-news">
      <div id="news-main">
        <h2>NEWS</h2>
        <a id="news-a" href="news.html">一覧を見る</a>
        <div id="news-message">
          <ul>
            <li>
              <span>2024年4月30日</span>
              <a href="">5月の診療予定＆獣医師勤務表</a>
            </li>
            <li>
              <span>2024年4月1日</span>
              <a href="">狂犬病予防週間開始のお知らせ</a>
            </li>
            <li>
              <span>2024年3月26日</span>
              <a href="">【フィラリア予防】【狂犬病予防接種】</a>
            </li>
          </ul>
        </div>
      </div>
    </section>
    
<!-- 対象動物 -->
    <section id="index-whichanimals">
      <!-- <div id="whichanimals-main"> -->
        <h2 class="whichanimals-h2">WHICH ANIMALS</h2>
        <div class="whichanimals-img">
          <div id="whichanimals-one">
            <img src="images/index/animals-dog.jpg" alt="犬">
            <h3>DOG</h3>
            <h4>イヌ</h4>
          </div>
          <div id="whichanimals-one">
            <img src="images/index/animals-cat.jpg" alt="猫">
            <h3>CAT</h3>
            <h4>猫</h4>
          </div>
          <div id="whichanimals-one">
            <img src="images/index/animals-rat.jpg" alt="ゲッ歯類">
            <h3>RAT&RABBIT</h3>
            <h4>げっ歯類＆ウサギ</h4>
          </div>
          <div id="whichanimals-one">
            <img src="images/index/animals-bird.jpg" alt="鳥類">
            <h3>BIRD</h3>
            <h4>鳥類</h4>
          </div>
        </div>
      <!-- </div> -->
    </section>

    <section id="index-medical">
       <h2>MEDICAL</h2>
       <table class="medical-tabel">
        <tr class="medical-tr">
          <td><img src="images/index/medical1.png" alt="予防医療"></td>
          <td><img src="images/index/medical2.png" alt="健康診断"></td>
          <td><img src="images/index/medical3.png" alt="夜間緊急"></td>
          <td><img src="images/index/medical4.png" alt="往診"></td>
        </tr>
        <tr class="medical-tr">
          <td>
            <h3 class="medical-h3">予防医療</h3>
          </td>
          <td>
            <h3 class="medical-h3">健康診断</h3>
          </td>
          <td>
            <h3 class="medical-h3">夜間緊急</h3>
          </td>
          <td>
            <h3 class="medical-h3">往診</h3>
          </td>
        </tr>
        <tr class="medical-tr">
          <td>
            <p class="medical-p">ワクチン接種<br>
              ノミ・マダニフィラリア予防<br>
              避妊去勢</p>
          </td>
          <td>
            <p class="medical-p">
              若い子なら一年に一回<br>
              シニアになったら半年に一回<br>
              健康診断</p>
          </td>
          <td>
            <p class="medical-p">
              急患の場合のみ<br>
              休診日や夜間の診療を行っています<br>
              必要に応じてお近くの救急病院に<br>
              ご案内することもあります</p>
          </td>
          <td>
            <p class="medical-p">介護や病気<br>
              飼い主様の事情で<br>
              来院が難しい場合は
              ご相談ください</p>
          </td> 
        </tr>    
      </table>
    </section>
  </main>
  <footer>
    <div class="footer-info">
    <div id="footer-left">
      <ul>
        <li id="footer-logo">
        <a href="index.html"><img src="images/logo.png" alt="トップページに戻る"></a>
        </li>
        <li id="footer-adress">
          <img src="images/adress.png" alt="住所と電話番号"></a>
          <!-- <p class=footer-reserve> -->
            <a class="a-reserve" href="">予約</a>
          <!-- </p> -->
        </li>
      </ul>
      <!-- <a href=""><img src="images/reserve.png" alt="予約へ"></a> -->
    </div>
    <div id="footer-right">
      <img id="footer-day" src="images/day.png" alt="診療日時">
    </div>
   </div>
   <p class="copy"><small>© エメラルド動物病院</small>
   </p>
  </footer>

  <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
  <script src="script.js"></script>

  <!-- slickの読み込み -->
  <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

</body>
</html>