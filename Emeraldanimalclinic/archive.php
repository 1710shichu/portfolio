<?php get_header(); ?>
    <main>
      <section id="top-image" >
      <img src="<?php echo get_template_directory_uri(); ?>/images/index/top-news.png" alt="表紙">
      </section>
       <section id="news"> 
        <h2>NEWS</h2>
          <div class="clearfix">
             <div class="news-top">
               
                <h2 class="contents-header_title"><?php the_archive_title(); ?></h2>
                <table class="news-table">
                
                <?php if ( have_posts()) : ?>
                  <?php while ( have_posts()) : the_post(); ?>
                  <!-- 繰り返したい内容　ここから -->
                
                <tr>
                    <td>
                      <a href="<?php the_permalink(); ?>">
                          <?php
                            $image_id = get_post_thumbnail_id();
                            //アイキャッチ画像のURLを取得
                            $image_url = wp_get_attachment_image_src($image_id, true);
                            if(has_post_thumbnail()):
                          ?>
                          <div class="thumb"><img src="<?php echo $image_url[0]; ?>" alt=""></div>
                          <?php endif; ?>
                     </td>
                    <td>
                      <!-- <span><time datetime="<?php the_time( 'Y-m-d' ); ?>"><?php the_time( 'Y.m.d' ); ?></time></span> -->
                      <span class="news-date"><?php echo get_the_date('Y/m/d'); ?></span>

                       <span><a href="<?php the_permalink(); ?>">
                        <?php the_title(); ?>
                       </a></span>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <!-- 空セル -->
                    </td>
                    <td>
                      <p class="news-topic">
                    </p>
                    </td>
                  </tr>
                  
                  </tr>
                <?php endwhile; ?>
                </table>
                    <?php else : ?>
                      <p>まだ投稿はありません。</p>
                    <?php endif; ?>
             </div>
            
             <?php get_sidebar() ?>
       
          </div>  
        </section>
    </main>

<?php get_footer(); ?>