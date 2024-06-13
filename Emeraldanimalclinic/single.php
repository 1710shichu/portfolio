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
               <h3 class="entry-title"><?php the_title(); ?></h3>
               <div class="entry-content">
              
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
                <!-- <ul>
                  <li><a href="">2024年4月</a></li>
                  <li><a href="">2024年3月</a></li>
                  <li><a href="">2024年2月</a></li>
                  <li><a href="">2024年1月</a></li>
                </ul> -->
                <ul class="archive-list">
                  <?php wp_get_archives('post_type=post&type=monthly&show_post_count=1'); ?>
                </ul>
              </div>
            </aside>
          </div>  
        </section>

        <?php get_footer(); ?>