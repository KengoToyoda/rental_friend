<?php get_header(); ?>
      <section class="wrapper">
      <?php get_template_part('template-parts/breadcrumb'); ?>
      <?php if ( have_posts() ) : ?>
        <?php while ( have_posts() ) : the_post(); ?>
        <div class="single_hairstyle">
          <div class="styel_pc">
            <?php $pic = get_field('pic'); $pic_url = $pic['sizes']['large']; ?><img src="<?php echo $pic_url; ?>" alt="ヘアスタイル写真" class="img">
            <div class="hashtag">
              <?php the_field('tag'); ?>
            </div>
          </div>
          <ul>
            <li>
              <h3>スタイルポイント</h3>
              <?php the_content(); ?>
            </li>
            <li>
              <h3>スタイルデータ</h3>
              <table class="style_data">
                <tbody>
                  <tr>
                  <th>style</th>
                  <td><?php the_field('style_name'); ?></td>
                  </tr>
                  <tr>
                  <th>price</th>
                  <td><?php the_field('price'); ?></td>
                  </tr>
                  <tr>
                  <th>time</th>
                  <td><?php the_field('time'); ?></td>
                  </tr>
                  <tr>
                </tbody>
              </table>
            </li>
            <li>
              <h3>担当スタッフ</h3>
              <table class="style_data">
                <tbody>
                  <tr>
                  <th>name</th>
                  <td><?php the_field('stylist'); ?></td>
                  </tr>
                  <tr>
                  <th>shop</th>
                  <td><?php the_field('shop'); ?></td>
                  </tr>
                  <tr>
                  <th>place</th>
                  <td><?php the_field('place'); ?></td>
                  </tr>
                  <th>introduction</th>
                  <td ><a class="to_intro_page">紹介ページはこちら</a></td>
                  </tr>
                </tbody>
              </table>
            </li>
          </ul>
          
        <?php endwhile; ?>
      <?php endif; ?>
        </div>
      </section>
    <?php get_template_part('hair_style'); ?>
<?php get_footer(); ?>



