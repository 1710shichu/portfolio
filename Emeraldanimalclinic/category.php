<?php get_header(); ?> 

    <main>
      <section id="top-image" >
        <img src="<?php echo get_template_directory_uri(); ?>/images/index/top-news.png" alt="表紙">
      </section>
       <section id="news">
        <h2>NEWS</h2>
          <div class="clearfix">
             <div class="news-top">
                <table class="news-table">

                <?php if(have_posts()) : ?>
                
                <?php while(have_posts()) : the_post(); ?>
                  <tr>
                    <td class=news-tdimg>
                      <img class="news-img" src="<?php echo get_template_directory_uri(); ?>/images/icon.png" alt="rogo">
                    </td>
                    <td>
                      <!-- <span class="news-date">2024年4月24日</span> -->
                      <span class="news-date"><?php echo get_the_date('Y/m/d'); ?></span>
                      <!-- <span class="news-title">5月の診察予定＆獣医師勤務表</span> -->
                      <span class="news-title">
                      <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                      </span>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <!-- 空セル -->
                    </td>
                    <td>
                      <p class="news-topic">
                      <?php echo wp_trim_words( get_the_content() ,100,'...'); ?>
                      </p>
                    </td>
                  </tr>
                  <?php endwhile; ?>
                  <?php endif; ?>
                </table>
                
              </div>

          <?php get_sidebar() ?>
       
            
          </div>  
        </section>
    </main>

<?php get_footer(); ?>