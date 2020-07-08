<?php get_header(); ?> 
  <div class="pc_flex">
    <div class="pc_left_block">
      <?php if ( have_posts() ) : ?>
        <?php while ( have_posts() ) : the_post(); ?>
          <section class="wrapper">
            <h2 class="fg flex_header">
              <?php the_title(); ?> 
              <span><?php echo strtoupper ($post->post_name); ?></span>
            </h2>
            <?php get_template_part('template-parts/breadcrumb'); ?>
            <main class="flex_inner">
            <?php the_content(); ?>
            </main>
          </section>
        <?php endwhile; ?>
      <?php endif; ?>
      <?php get_template_part('hair_style'); ?>
    </div>
    <div class="pc_right_block">
      <?php get_sidebar(); ?>  
      <?php get_template_part('aside'); ?> 
    </div>
  </div>
<?php get_footer(); ?>



