<?php get_header(); ?>
  <div class="pc_flex">
    <div class="pc_left_block">
      <section class="wrapper">
        <div class="archive_eyecatch">
          <h2 class="pont">
          <?php single_cat_title(); ?>モデル　×　ponthair
          </h2>
        </div>
        <?php get_template_part('template-parts/breadcrumb'); ?>
        <div class="archive_inner">
          <div class="archive_content">
            <ul>
              <?php if ( have_posts() ) : ?>
                <?php while ( have_posts() ) : the_post(); ?>
                  <!-- archivep pageのテンプレート作成 ヘアカタログにも使用する -->
                  <?php get_template_part('template-parts/loop' , 'archive') ?>
                <?php endwhile; ?>
              <?php endif; ?>
            </ul>
            <div class="container_see_all_btn">
              <a href="" class="pont">
                もっと見る
              </a>
            </div>
          </div>    
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