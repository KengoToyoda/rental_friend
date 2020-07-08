<?php get_header(); ?> 
  <div class="pc_flex">
    <div class="pc_left_block">
          <section class="flex_page">
            <h2 class="fg flex_header">
              404 NOT FOUND
              <span>ERROR</span>
            </h2>
            <?php get_template_part('template-parts/breadcrumb'); ?>
            <div class="archive_inner">
              <div class="error_sentence">
                <p>お探しんのページが見つかりません</p>
                <p>申し訳ございませんが<a href="<?php echo home_url('/'); ?>">こちらのリンク</a>からトップページにお戻りください</p>
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



