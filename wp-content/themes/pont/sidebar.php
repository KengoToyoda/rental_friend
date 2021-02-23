
            <!-- ranking -->
            <div class="ranking_content">
              
              <!-- <h2 class="pont">美容師ランキング</h2> -->
              <?php if ( is_active_sidebar('main-sidebar') ) : ?>
                <ul>
                  <a href="<?php the_permalink(); ?>">
                  <?php dynamic_sidebar('main-sidebar'); ?>
                  </a>
                </ul>
              <?php endif; ?>
              <div class="container_see_all_btn">
                <a href="" class="pont">ランキング一覧を見る</a>
              </div>
              
            </div>
            <!-- ここまでsidebar.php -->
   



         
        