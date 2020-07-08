
  <li id="post-<?php the_ID(); ?>" <?php post_class('loop_style_item'); ?>>
    <a href="<?php the_permalink(); ?>">
      <div class="loop_style_inner">
        <?php the_post_thumbnail('medium'); ?>
        <div class="loop_style_title fg">
          <?php the_title(); ?>
        </div>
      </div>
      <div class="sentence">
          <?php the_excerpt(); ?> 
      </div>
    </a>
  </li>
