<?php get_header(); ?>

    <main>
      <section id="top-image" >
        <!-- <img src="images/index/top-greet.jpg" alt="表紙"> -->
        <img src="<?php echo get_template_directory_uri(); ?>/images/index/top-greet.jpg" alt="表紙">
      </section>
      <section class="greet-title">
        <div>
          <div id="greet-h2">
            <h2>GREET</h2>
          </div>
          <div id="greet-box">
            <div id="greet-img">
              <!-- <img src="images/index/greet-greeting.jpg" alt="犬と猫が向かい合う"> -->
              <img src="<?php echo get_template_directory_uri(); ?>/images/index/greet-greeting.jpg" alt="犬と猫が向かい合う">
            </div>
            <div class="greet-exp">
              <p>
                当院は地域の獣医療の一角を担う一員として、<br>
                飼い主様と動物が<br>
                できる限りの時間を快適で楽しい暮らしができるますよう、<br>
                お手伝いいたしす。<br>
                日々の定期健診、<br>
                予防接種から食事管理、<br>
                動物との共同生活で生じた思わぬトラブルなど、<br>
                皆様のお困りごと、お悩みを<br>
                なんでもお伺いいたします。<br>
                皆様の幸せの一助になれば幸いです。
              </p>
            </div>
          </div>
        </div>
      </section>
      <section class="greet-title-p">
        <div>
          <div>
            <h2>POLICY</h2>
          </div>
          <div>
            <div class="greet-policy-exp">
              <div id="greet-policy-exp-01">
                <h3>01</h3>
                <h4>
                  最良で、最適な診療を目指して
                </h4>
              </div>
              <div>
                <p>
                  日々進歩する検査や治療、その多くの選択肢の中から獣医師は動物にとって最適な治療法を選択いたします
                </p>
              </div>
            </div>
            
            <div class="greet-policy-exp">
              <div id="greet-policy-exp-02">
                <h3>02</h3>
                <h4>
                  ひとりひとりに合った、安全でやさしい治療を
                </h4>
              </div>
              <div class="greet-policy-p">
                <p>
                  病状だけでなく、その子の性格、生活週間、飼い主様とのご関係を鑑みて、ベストな治療を探ります。
                </p>
              </div>
            </div>
            
            <div class="greet-policy-exp">
              <div id="greet-policy-exp-03">
                <h3>03</h3>
                <h4>
                  飼い主様の不安を取り除くインフォームドコンセント
                </h4>
              </div>
              <div>
                <p>
                  動物も不安ですが、多くの飼い主様ももちろん不安を抱えて来院されます。
                  検査、治療、当病院の事わかっていただいたうえで、安心して共に治療に取り組んでまいりましょう。
                </p>
              </div>
            </div>
         </div>
        </div>
      </section>
      <section class="greet-title">
        <div>
          <div>
            <h2>CLINIC PHOTO</h2>
          </div>
          <div id="clinicphoto">
            <ul class="cp-img">
             <ul>
                <!-- <li><img src="images/index/CLINICPHOTO/uketuke.jpg" alt=""></li> -->
                <li><img src="<?php echo get_template_directory_uri(); ?>/images/index/CLINICPHOTO/uketuke.jpg" alt=""></li>
                <li><h3>受付</h3></li>
              </ul>
             <ul>
              <!-- <li><img src="images/index/CLINICPHOTO/shinsatsushitsu.png" alt=""></li> -->
              <li><img src="<?php echo get_template_directory_uri(); ?>/images/index/CLINICPHOTO/shinsatsushitsu.png" alt=""></li>
              <li><h3>診察室</h3></li>
             </ul>
             <ul>
              <!-- <li><img src="images/index/CLINICPHOTO/chiryoshitsu.png" alt=""></li> -->
              <li><img src="<?php echo get_template_directory_uri(); ?>/images/index/CLINICPHOTO/chiryoshitsu.png" alt=""></li>
              <li><h3>治療検査室</h3></li>
             </ul>
            </ul>

            <ul class="cp-img2">
              <ul>
                <!-- <li><img src="images/index/CLINICPHOTO/xray.jpg" alt=""></li> -->
                <li><img src="<?php echo get_template_directory_uri(); ?>/images/index/CLINICPHOTO/xray.jpg" alt=""></li>
                <li><h3>レントゲン</h3></li>
              </ul>
              <ul>
                <!-- <li><img src="images/index/CLINICPHOTO/echo.png" alt=""></li> -->
                <li><img src="<?php echo get_template_directory_uri(); ?>/images/index/CLINICPHOTO/echo.png" alt=""></li>
                <li><h3>超音波</h3></li>
              </ul>
             <ul>
              <!-- <li><img src="images/index/CLINICPHOTO/nyuin.png" alt=""></li> -->
              <li><img src="<?php echo get_template_directory_uri(); ?>/images/index/CLINICPHOTO/nyuin.png" alt=""></li>
              <li><h3>入院室</h3></li>
              </ul>
            </ul>
          </div>
        </div>
      </section>

<?php get_footer(); ?>