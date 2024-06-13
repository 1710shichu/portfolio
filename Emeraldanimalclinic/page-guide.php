<?php get_header(); ?>

    <main>
      <section id="top-image" >
        <!-- <img src="images/index/top-guide.jpg" alt="表紙"> -->
        <img src="<?php echo get_template_directory_uri(); ?>/images/index/top-guide.jpg" alt="表紙">
      </section>

      <section id="animals"> 
        <h2 class="index-h2">ANIMALS</h2>
        <div>
          <div class="animals-left">
             <div>
                <!-- <img class=animals-photo src="images/index/WELCOMETO/dogcut.png" alt="キャバリア"> -->
                <img class=animals-photo src="<?php echo get_template_directory_uri(); ?>/images/index/WELCOMETO/dogcut.png" alt="キャバリア">
                <div class="animals-explain">
                 <h2 class="animals-h3dog">DOG</h2>
                </div>
             </div>
             <div>
                <!-- <img class="animals-photo" src="images/index/WELCOMETO/ratcut.png" alt="ラット"> -->
                <img class="animals-photo" src="<?php echo get_template_directory_uri(); ?>/images/index/WELCOMETO/ratcut.png" alt="ラット">
                <div class="animals-explain">
                  <h2 class="animals-h3rat">RAT＆RABITTO</h2>
                  <p class="animals-one">げっ歯類<br>
                    ハムスター・シマリス・ラット・フェレット・ハリネズミ</p>
                  <p class="animals-one">小型草食動物<br>
                       ウサギ・モルモット・デグー</p>
                </div>
             </div>
           </div>

          <div class="animals-right">
             <div>
                <!-- <img class=animals-photo src="images/index/WELCOMETO/catcut.png" alt=""> -->
                <img class=animals-photo src="<?php echo get_template_directory_uri(); ?>/images/index/WELCOMETO/catcut.png" alt="">
                <div class="animals-explain">
                 <h2 class="animals-h3cat">CAT</h2>
              </div>
            </div>
            <div>
                <!-- <img class="animals-photo" src="images/index/WELCOMETO/birdcut.png" alt="ラット"> -->
                <img class="animals-photo" src="<?php echo get_template_directory_uri(); ?>/images/index/WELCOMETO/birdcut.png" alt="ラット">
                <div class="animals-explain">
                  <h2 class="animals-h3bird">BIRD</h2>
                  <p class="animals-one">セキセイインコ・オカメインコ・文鳥・ウロコインコ・ウズラ</p>
                </div>
             </div>
          </div>
        </div>

      <section id="welcometo-top">
        <h2>WELCOME TO</h2>
        <div class="my_container">
          <div class="way_boxbox01">
            <p class="way_number">01</p>
            <!-- <img src="images/index/WELCOMETO/01.png" width="200" height="250" alt="ご予約可能"> -->
            <img src="<?php echo get_template_directory_uri(); ?>/images/index/WELCOMETO/01.png" width="200" height="250" alt="ご予約可能">
          </div>
          <div class="way_boxbox02">
            <p class="way_number">02</p>
            <!-- <img src="images/index/WELCOMETO/02.png" width="200" height="250" alt="問診表記入"> -->
            <img src="<?php echo get_template_directory_uri(); ?>/images/index/WELCOMETO/02.png" width="200" height="250" alt="問診表記入">
          </div>
          <div class="way_boxbox03">
            <p class="way_number">03</p>
            <!-- <img src="images/index/WELCOMETO/03.png" width="200" height="250" alt="検査診断"> -->
            <img src="<?php echo get_template_directory_uri(); ?>/images/index/WELCOMETO/03.png" width="200" height="250" alt="検査診断">
          </div>
          <div class="way_boxbox04">
            <p class="way_number">04</p>
            <!-- <img src="images/index/WELCOMETO/04.png" width="200" height="250" alt="お支払い"> -->
            <img src="<?php echo get_template_directory_uri(); ?>/images/index/WELCOMETO/04.png" width="200" height="250" alt="お支払い">
          </div>
        </div>
        <ul>
          <li>
            <div class="way_box01_responsive">
              <p class="way_number">01</p>
              <!-- <img src="images/index/WELCOMETO/smf/01.png"  alt="ご予約可能"> -->
              <img src="<?php echo get_template_directory_uri(); ?>/images/index/WELCOMETO/smf/01.png"  alt="ご予約可能">
            </div>
            <h4>ご予約</h4>
            <p>web・お電話にて<br>
              ご予約承っております</p>
          </li>
          <li>
            <div class="way_box02_responsive">
              <p class="way_number">02</p>
              <!-- <img src="images/index/WELCOMETO/smf/02.png" width="200" height="250" alt="問診表記入"> -->
              <img src="<?php echo get_template_directory_uri(); ?>/images/index/WELCOMETO/smf/02.png" width="200" height="250" alt="問診表記入">
            </div>
            <h4>受診・問診</h4>
            <p>初診時は問診票に<br>
              ご記入ください</p>
          </li>
          <li>
            <div class="way_box03_responsive">
              <p class="way_number">03</p>
              <!-- <img src="images/index/WELCOMETO/03.png" width="200" height="250" alt="問診表記入"> -->
              <img src="<?php echo get_template_directory_uri(); ?>/images/index/WELCOMETO/03.png" width="200" height="250" alt="問診表記入">
            </div>
            <h4>検査・処置</h4>
            <p>必要に応じた<br>
              検査、処置をご提案</p>
          </li>
          <li>
            <div class="way_box04_responsive">
              <p class="way_number">04</p>
              <!-- <img src="images/index/WELCOMETO/04.png" width="200" height="250" alt="問診表記入"> -->
              <img src="<?php echo get_template_directory_uri(); ?>/images/index/WELCOMETO/04.png" width="200" height="250" alt="問診表記入">
            </div>
            <h4>お会計</h4>
            <p>お薬はこのタイミングで<br>
              お渡しします</p>
          </li>
        </ul>
      </section>
        
      </section>

      <?php get_footer(); ?>
 