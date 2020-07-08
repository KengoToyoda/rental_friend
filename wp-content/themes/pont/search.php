<?php get_header(); ?> 
  <div class="pc_flex">
    <div class="pc_left_block">
          <section class="wrapper">
            <h2 class="fg flex_header">
              サイト内検索結果
            </h2>
            <?php get_template_part('template-parts/breadcrumb'); ?>
            <div class="flex_inner">
              <h3 class="search_word">「<?php the_search_query(); ?>の検索結果」</h3>
              <ul>
                <?php if ( have_posts() ) : ?>
                  <?php while ( have_posts() ) : the_post(); ?>
                    <?php get_template_part('template-parts/loop' , 'archive') ?>
                  <?php endwhile; ?>
                <?php else :?>
                  <div class="search_nosentence">
                      <p>検索結果はありませんでした</p>
                  </div>
                <?php endif; ?>
              </ul>
            </div>
          </section>
      <?php get_template_part('hair_style'); ?>
    </div>
    <div class="pc_right_block">
      <?php get_sidebar(); ?>  
      <?php get_template_part('aside'); ?> 
    </div>
  </div>
<?php get_footer(); ?>



