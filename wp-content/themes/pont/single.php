<?php get_header(); ?>


        <section class="single_page_wrap">
        <?php if ( have_posts() ) : ?>
             <?php while (have_posts() ) : the_post(); ?>
              <article id="post-<?php the_ID(); ?>" <?php post_class('single_article'); ?>>
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
                
                <div class="single_inner">
                    <div class="single_sentense">
                      <a name="profile">
                        <?php the_category(); ?>
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
          <?php get_template_part('hair_style'); ?>
        </section>
  
<?php get_footer(); ?>