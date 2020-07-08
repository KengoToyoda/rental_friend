<?php get_header(); ?>
    <div class="pc_flex">
      <div class="pc_left_block">
        <section class="wrapper">
          <?php if ( have_posts() ) : ?>
            <?php while (have_posts() ) : the_post(); ?>
              <article id="post-<?php the_ID(); ?>" <?php post_class( 'airticle'); ?>>
                <div class="single_header">
                  <ul>
                    <li>
                      <?php the_post_thumbnail('array(80,80), single_header_img'); ?>
                    </li>
                    <li class="single_header_dresser pont"><?php the_title(); ?></li>
                  </ul>
                </div>
                <nav class="single_nav">
                  <ul>
                    <li><a href="#profile">プロフィール</a></li>
                    <li><a href="#photo_garary">フォトギャラリー</a></li>
                    <li><a href="">レビュー</a></li>
                    <li><a href="">予約</a></li>
                  </ul>
                </nav>
                <?php get_template_part('template-parts/breadcrumb'); ?>
                <div class="single_inner">
                    <div class="single_sentense">
                      <a name="profile">
                        <div class="dresser_attribute">
                          <?php the_category(); ?>
                          <time class="" datetime="<?php the_time('Y-m-d'); ?>"><?php the_time('Y年m月d日'); ?></time>
                        </div>
                        <?php the_content(); ?>
                      </a>
                    </div>
                </div>
              </article>
            <?php endwhile; ?>
          <?php endif; ?>
          <div class="single_photo">
            <a name="photo_garary">
              <h2 class="pont">〇〇のフォトギャラリー</h2>
              <ul>
                <li><a href="">
                  <img src="images/hair_style/ash_color.jpeg">
                  <p>アッシュカラー</p>
                </a></li>
                <li><a href="">
                  <img src="images/hair_style/ash_color.jpeg">
                  <p>アッシュカラー</p>
                </a></li>
                <li><a href="">
                  <img src="images/hair_style/ash_color.jpeg">
                  <p>アッシュカラー</p>
                </a></li>
                <li><a href="">
                  <img src="images/hair_style/ash_color.jpeg">
                  <p>アッシュカラー</p>
                </a></li>
              </ul>
            </a>
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