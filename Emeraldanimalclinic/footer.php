<footer>
    <div class="footer-info">
    <div id="footer-left">
      <ul>
        <li id="footer-logo">
        <!-- <a href="index.html"> -->
        <a href="<?php echo home_url(); ?>">
          <!-- <img src="/images/logo.png" alt="トップページに戻る"></a> -->
          <img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" alt="トップページに戻る"></a>
        </li>
        <li id="footer-adress">
          <!-- <img src="images/adress.png" alt="住所と電話番号"></a> -->
          <img src="<?php echo get_template_directory_uri(); ?>/images/adress.png" alt="住所と電話番号"></a>
          <!-- <p class=footer-reserve> -->
            <a class="a-reserve" href="">予約</a>
          <!-- </p> -->
        </li>
      </ul>
      <!-- <a href=""><img src="images/reserve.png" alt="予約へ"></a> -->
    </div>
    <div id="footer-right">
      <!-- <img id="footer-day" src="images/day.png" alt="診療日時"> -->
      <img id="footer-day" src="<?php echo get_template_directory_uri(); ?>/images/day.png" alt="診療日時">
    </div>
   </div>
   <p class="copy"><small>© エメラルド動物病院</small>
   </p>
  </footer>

  <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
  <!-- <script src="script.js"></script> -->
  <!-- <script src="script.js"></script> -->
  <script src="<?php echo get_template_directory_uri(); ?>/script.js"></script>

  <!-- slickの読み込み -->
  <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js">    
  </script>
    <?php wp_footer(); ?>
</body>
</html>