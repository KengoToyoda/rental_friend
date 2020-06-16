<?php get_header(); ?>


        <section class="single_page_wrap">
          <div class="single_header">
            <ul>
              <li class="single_header_img"></li>
              <li class="single_header_dresser pont">竹沢　拡<br>joemi by um ami</li>
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
          <div class="single_inner" name>
              <div class="single_sentense">
                <a name="profile">
                  <h2>〇〇のプロフィール</h2>
                  【美容師名】<br>
                  【インスタアカウント】<br>
                  【salon】<br>
                  【場所】<br>
                  【コメント】<br>
                  【料金】<br>
                  【得意な施術】<br>
                </a>
              </div>
          </div>
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