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
                <div class="slider_inner ">
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
                          <ul>
                          <?php the_category(); ?>
                          <?php the_excerpt(); ?>
                          </ul>
                        </a>
                      </li>
                    <?php endwhile; ?>
                  <?php endif; ?>
                  </ul>
                </div>
              </div>
              </a>
            </section> <!-- article_wrap end -->
            <!-- hair_style -->
            <?php get_template_part('hair_style'); ?>
            <?php get_template_part('aside'); ?>
          </div>
        <?php get_sidebar(); ?>    
      <?php get_footer(); ?>
