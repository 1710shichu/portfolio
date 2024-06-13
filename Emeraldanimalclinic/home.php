<?php get_header(); ?>

  <main>
  <div class=slidermax>
    <?php xo_slider( 16 ); ?>
    </div>
  <div class=slidermin>
   <?php xo_slider( 98 ); ?>
  </div>
    
    
    <section id="carousel-section">
      
       
      </div>
    </section>   
    <!-- お知らせ -->
    <section id="index-news">
      <div id="news-main">
        <h2>NEWS</h2>
        <a id="news-a" href="<?php echo home_url(); ?>/category/news">>一覧を見る</a>
        
        <div id="news-message">
          
          <?php
           $args = array(
            'post_type' =>'post',
            'category_name' => 'news',
            'posts_per_page' =>3,
           );
  
           $posts = get_posts($args);
           ?>

           <?php foreach($posts as $post): ?>
           <?php setup_postdata($post); ?>
          <ul>
            <li>
                <!-- aタグで投稿記事へのリンク作成 -->
              <a href="<?php echo get_permalink(); ?>">
                  <!-- 日付を出力する -->
              <span>
                <?php echo get_the_date(); ?>
              </span>
              </a>

              <a href="<?php the_permalink(); ?>">
              <?php the_title(); ?></a>
              
            </li>
          </ul>
            <?php endforeach; ?>
            <?php wp_reset_postdata();?>

        </div>
         
      </div>
    </section>
          


      </div>
    </section>
    

     
<!-- 対象動物 -->
    <section id="index-whichanimals">
      <!-- <div id="whichanimals-main"> -->
        <h2 class="whichanimals-h2">WHICH ANIMALS</h2>
        <div class="whichanimals-img">
          <div id="whichanimals-one">
            <!-- <img src="images/index/animals-dog.jpg" alt="犬"> -->
            <img src="<?php echo get_template_directory_uri(); ?>/images/index/animals-dog.jpg" alt="犬">
            <h3>DOG</h3>
            <h4>イヌ</h4>
          </div>
          <div id="whichanimals-one">
            <!-- <img src="images/index/animals-cat.jpg" alt="猫"> -->
            <img src="<?php echo get_template_directory_uri(); ?>/images/index/animals-cat.jpg" alt="猫">
            <h3>CAT</h3>
            <h4>猫</h4>
          </div>
          <div id="whichanimals-one">
            <!-- <img src="images/index/animals-rat.jpg" alt="ゲッ歯類"> -->
            <img src="<?php echo get_template_directory_uri(); ?>/images/index/animals-rat.jpg" alt="ゲッ歯類">
            <h3>RAT&RABBIT</h3>
            <h4>げっ歯類＆ウサギ</h4>
          </div>
          <div id="whichanimals-one">
            <!-- <img src="images/index/animals-bird.jpg" alt="鳥類"> -->
            <img src="<?php echo get_template_directory_uri(); ?>/images/index/animals-bird.jpg" alt="鳥類">
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
          <!-- <td><img src="images/index/medical1.png" alt="予防医療"></td> -->
          <td><img src="<?php echo get_template_directory_uri(); ?>/images/index/medical1.png" alt="予防医療"></td>
          <!-- <td><img src="images/index/medical2.png" alt="健康診断"></td> -->
          <td><img src="<?php echo get_template_directory_uri(); ?>/images/index/medical2.png" alt="健康診断"></td>
          <!-- <td><img src="images/index/medical3.png" alt="夜間緊急"></td> -->
          <td><img src="<?php echo get_template_directory_uri(); ?>/images/index/medical3.png" alt="夜間緊急"></td>
          <!-- <td><img src="images/index/medical4.png" alt="往診"></td> -->
          <td><img src="<?php echo get_template_directory_uri(); ?>/images/index/medical4.png" alt="往診"></td>
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
 <?php get_footer(); ?>
 