<?php
/**
 * INDEX
 *
 * @package WordPress
 * @subpackage St_Andrews_v1
 *
 */
get_header();
?>
        <div class="pc_flex">
          <div class="pc_left_block">
            <!-- 検索フォーム -->
            <?php get_search_form(); ?>
            <!-- article_wrap -->
            <section class="airticle_wrap">
              <!-- 新着美容師 -->
              <div class="slider_content">
                <a name="new_dresser">
                <h2 class="pont">
                  新規掲載の美容師
                </h2>
                <div class="slider_inner">
                  <ul class="slider_dresser_list slider">
                  <!-- 記事のループを作成 -->
                  <?php if ( have_posts() ) : ?>
                    <?php while ( have_posts() ) : the_post(); ?>
                      <li id="post-<?php the_ID(); ?>" <?php post_class('list_item'); ?>>
                        <a href="<?php the_permalink(); ?>">
                          <div class="dresser_info">
                          <?php the_post_thumbnail('medium'); ?>
                            <div class="dresser_info_detail fg">
                              <?php the_title(); ?>
                            </div>
                          </div>
                          <div class="dresser_attribute">
                            <?php the_category(); ?>
                            <time class="" datetime="<?php the_time('Y-m-d'); ?>"><?php the_time('Y年m月d日'); ?></time>
                          </div>
                          <?php the_excerpt(); ?>
                        </a>
                      </li>
                    <?php endwhile; ?>
                  <?php endif; ?>
                  </ul>
                </div>
                <div class="container_see_all_btn">
                  <a href="<?php echo get_category_link(2); ?>" class="pont">新規掲載の美容師を全て見る</a>
                </div>
              </div>
              </a>
            </section> <!-- article_wrap end -->
            <!-- hair_style -->
            <?php get_template_part('hair_style'); ?>
            <?php get_template_part('aside'); ?>
          </div> <!-- pc_left_block end -->
          <div class="pc_right_block"> <!-- ここからsidebar.php -->
            <?php get_sidebar(); ?>  
          </div> <!-- pc_right_block end -->  
        </div> <!-- pc_flex end --> 
      <?php get_footer(); ?>
