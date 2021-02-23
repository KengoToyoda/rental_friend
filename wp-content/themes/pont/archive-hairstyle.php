<?php get_header(); ?>
    <?php get_search_form(); ?>
      <section class="wrapper">
      <?php get_template_part('template-parts/breadcrumb'); ?>
        <h2 class="fg flex_header">
          人気のスタイル
        </h2>
        <!-- <?php $styles = get_terms(array('taxonomy' => 'style'));
        if ( !empty($styles) ):
          ?>
          <div class="pageNav">
            <ul>
              <?php foreach ($styles as $style): ?>
                <li><a href="<?php echo get_term_link($style); ?>"><?php echo $style->name ?></a></li>
              <?php endforeach; ?>
            </ul>
          </div>
        <?php endif; ?> -->
        <div class="loop_style">
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



