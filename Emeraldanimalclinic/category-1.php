<?php get_header(); ?>
   
    <main>
      <section id="top-image" >
        <img src="images/index/top-news.png" alt="表紙">
      </section>
       <section id="news">
        <h2>NEWS</h2>
          <div class="clearfix">
             <div class="news-top">
              <?php if(have_posts()) : ?>
                
                <?php while(have_posts()) : the_post(); ?>
                <div class="news_posts_small">
                  <div class="row">
                    <div class="col-lg-2 col-md-2 col-sx-12">
                      <div class="calendar_news_border">
                       <div class="calendar_news_border_1">
                        <div class="calendar_month">
                          <?php echo get_post_time('F'); ?>
                        </div>
                        <div class="calendar_day">
                          <span>
                            <?php echo get_the_date('d'); ?>
                          </span>
                        </div>
                      </div>
                     </div>
                     <div class="calendar_hour"></div>
                    </div>
                    <div class="col-lg-10 col-md-10 col-sx-12">
                      <div class="news_post_small_title">
                        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                      </div>
                      <div class="news_post_meta">
                        <ul>
                          <li>
                            <?php echo wp_trim_words( get_the_content() ,100,'...'); ?>
                          </li>
                        </ul>
                      </div>
                      <div class="read_continue">
                        <button><a href="<?php the_permalink(); ?>" class="text-white">詳細を見る</a>
                        </button>
                      </div>
                    </div>
                    </div>
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
    </main>

 <?php get_footer(); ?>