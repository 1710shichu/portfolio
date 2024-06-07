<?php get_header(); ?>

    <main>
      <section id="top-image" >
        <!-- <img src="images/index/top-acsess.jpg" alt="表紙"> -->
        <img src="<?php echo get_template_directory_uri(); ?>/images/index/top-acsess.jpg" alt="表紙">
      </section>
      
      <section id="acsess-acsess">
        <h2>ACSESS</h2>
        <div class="acsess-gmap">
          <iframe class="gmap-iframe" src="
          https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d6480.088766780489!2d139.3868434!3d35.7005254!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6018e1c743fe7b3f%3A0xfd0ad5aca7a67c7!2z5pit5ZKM5YWs5ZySIOmZuOS4iuertuaKgOWgtA!5e0!3m2!1sja!2sjp!4v1716802525562!5m2!1sja!2sjp"
          width="500" height="400" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
          </iframe>
        </div>
        <div class="acsess-map">
          <!-- <img src="images/acsess-map.png" alt=""> -->
          <img src="<?php echo get_template_directory_uri(); ?>/images/acsess-map.png" alt="">
        </div>
      </section>

      <section id="acsess-clinicinfo">
        <div class="clinicinfo">
          <h2>
            CLINIC INFO
          </h2>
          <div class="adress-map">
            <ul>
              <li>
                <dl>
                  <dt>医院名</dt>
                  <dd>エメラルド動物病院</dd>
                </dl>
              </li>
              <li>
                <dt>住所</dt>
                <dd>〒196-0033<br>
                  東京都昭島市東町５丁目２−１１−４３                
                </dd>
              </li>
              <li>
                <dt>ご予約・お問い合わせ</dt>
                <dd>0120-123-4567                
                </dd>
              </li>
              <li>
                <dt>診療科目</dt>
                <dd>一次診療 / 予約医療
                </dd>
              </li>
              <li>
                <dt>診療時間</dt>
                <dd>9:00～12:00 / 16:00～20:00
                </dd>
              </li>
            </ul>
            </dt>
          </div>
        </div>
      </section>
      <section>
        <div id="acsess-info">
          <h3>初めてご来院される方は、事前にご連絡お願いいたします。</h3>
          <p>当院は予約優先性となっております。<br>
            予約は必須ではありませんが、お待ちいただく時間の短縮と診療の質の向上のため予約優先性となっております。<br>
            救急対応や治療の内容・病状により順番が前後する場合がありお待ちいただくことがあります。<br>
            お時間に余裕をもってご来院ください。<br>
            ご理解のほどよろしくお願いいたします。
          </p>
        </div>
      </section>
  <?php get_footer(); ?>