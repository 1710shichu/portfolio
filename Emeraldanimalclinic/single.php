 <?php get_header(); ?>
 <main>
      <section id="top-image" >
        <!-- <img src="images/index/top-contact.png" alt="表紙"> -->
        <img src="<?php echo get_template_directory_uri(); ?>/images/index/top-news.png" alt="表紙">
      </section>

      <section id="news">
        <h2>NEWS</h2>
          
          <?php if(have_posts()) :?>
            <?php while (have_posts()) : the_post() ; ?>

          <div class="clearfix">
             <div class="news-top">
               <!-- <p class="entry-date">2025年3月26日</p> -->
               <p class="entry-date"><?php echo post_custom('date') ?></p>
               <!-- <h3 class="entry-title">【フィラリア予防】【狂犬病予防接種】の時期になります</h3> -->
               <h3 class="entry-title"><?php the_title(); ?></h3>
               <div class="entry-content">
                <!-- <p>
                  今年は、3月に入ってから肌寒い日が続き桜の開花が遅れていますが、<br>
                  春はもうそこまで来ていますね。<br>
                  春は、一年で一番大事な予防のシーズン、狂犬病ワクチン接種、フィラリア、<br>
                  ノミ・マダニの予防対策は欠かせません。<br>
                当院では、2024年のフィラリア健診は狂犬病予防と合わせて、<br>
                4月1日（月）から開始いたします。
                </p> -->
                <p><?php the_content(); ?>
                </p>
                
                <p>
                  <!-- <img class="news-photo" src="images/index/20240326.jpg" alt="イヌがのぞいている"> -->
                  <?php
                      if(has_post_thumbnail()):
                          the_post_thumbnail();
                      endif;
                      ?>
                  <!-- <img class="news-photo" src="<?php echo get_template_directory_uri(); ?>/images/index/20240326.jpg" alt="イヌがのぞいている"> -->
                </p>
              
               </div>
               <div class="next_prev_page_link clearfix">
                <ul>
                  <li class="prev">
                    <a href="">前の記事へ</a>
                  </li>
                </ul>
               </div>
             </div>
        <?php endwhile; ?>
        <?php endif; ?>
        
            <aside class="news-aside">
              <div>
                <h3>ARCHIVE
                  <span>月別アーカイブ</span>
                </h3>
                <ul>
                  <li><a href="">2024年4月</a></li>
                  <li><a href="">2024年3月</a></li>
                  <li><a href="">2024年2月</a></li>
                  <li><a href="">2024年1月</a></li>
                </ul>
              </div>
            </aside>
          </div>  
        </section>

        <?php get_footer(); ?>