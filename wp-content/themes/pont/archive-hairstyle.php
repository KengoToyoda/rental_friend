<?php get_header(); ?>
    <?php get_search_form(); ?>
      <section class="wrapper">
      <?php get_template_part('template-parts/breadcrumb'); ?>
        <h2 class="fg flex_header">
          人気のスタイル
        </h2>
        <div class="loop_style">
          <h3 class="pont">ボブスタイル</h3>
          <ul>
            <?php if ( have_posts() ) : ?>
              <?php while ( have_posts() ) : the_post(); ?>
                <?php get_template_part('template-parts/loop' , 'hairstyle') ?>
              <?php endwhile; ?>
            <?php endif; ?>
          </ul>  
        </div>
      </section>
    <?php get_template_part('hair_style'); ?>
<?php get_footer(); ?>



