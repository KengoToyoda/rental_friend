<li id="post-<?php the_ID(); ?>" <?php post_class(''); ?>>
  <a href="<?php the_permalink(); ?>">
    <div class="dresser_info">
      <?php the_post_thumbnail('array(80,80), dresser_photo'); ?>
      <div class="dresser_info_detail fg">
        <?php the_title(); ?>
      </div>
    </div>
    <div class="sentence">
        <?php the_content(); ?> 
    </div>
  </a>
  </li>