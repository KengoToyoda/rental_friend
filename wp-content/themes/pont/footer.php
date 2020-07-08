</div> <!-- container end --> <!-- ここからfooter php -->
      <!-- footer -->
      <footer>
        <div class="footer_content">
          <div class="footer_inner">
            <div class="footer_block">
              <h2 class="pont">施術別で美容師を探す</h2>
              <ul>
                <li><a href="" alt="">カット</a></li>
                <li><a href="" alt="">トリートメント</a></li>
                <li><a href="" alt="">カラー</a></li>
                <li><a href="" alt="">ヘアアレンジ</a></li>
              </ul>
            </div>
            <div class="footer_block">
              <h2 class="pont">人気カタログから美容師を探す</h2>
              <ul>
                <li><a href="" alt="">ショート</a></li>
                <li><a href="" alt="">ボブ</a></li>
                <li><a href="" alt="">ミディアム</a></li>
                <li><a href="" alt="">ロング</a></li>
                <li><a href="" alt="">ヘアアレンジ</a></li>
                <li><a href="" alt="">エクステ</a></li>
              </ul>
            </div>
            <div class="footer_block">
              <h2 class="pont">人気カラーから美容師を探す</h2>
              <ul>
                <li><a href="" alt="">グレージュ</a></li>
                <li><a href="" alt="">ベージュ</a></li>
                <li><a href="" alt="">ピンク</a></li>
                <li><a href="" alt="">アッシュ</a></li>
                <li><a href="" alt="">ラベンダー</a></li>
                <li><a href="" alt="">暗髪カラー</a></li>
              </ul>
            </div>
            <div class="footer_block">
              <h2 class="pont">Pont hairとは</h2>
              <ul>
                <li><a href="<?php echo get_permalink(33); ?>" alt="pont hairとは">Pontとは</a></li>
                <li><a href="" alt="運営会社">運営会社：株式会社〇〇</a></li>
                <li><a href="<?php echo get_permalink(44); ?>" alt="お問い合わせ">お問い合わせ</a></li>
                <li><a href="<?php echo get_permalink(3); ?>" alt="プライバシーポリシー">プライバシーポリシー</a></li>
                <li><a href="" alt="美容師一覧">美容師一覧</a></li>
                <li><a href="<?php echo get_permalink(31); ?>" alt="美容師の方はこちら">美容師の方はこちら</a></li>
              </ul>
            </div>
          </div>
          <div class="copyright fm">
            <p>Copyright © 2020 株式会社〇〇 All rights reserved.</p>
          </div>
        </div>
      </footer>
    </section>
    <script>
      $(document).ready(function(){
        $('.slider').bxSlider({
          moveSlides:1,
          slideWidth: 320,
          touchEnabled:true,
          minSlides:2,
          maxSlides:5,
          auto:true,
          infiniteLoop:true,
          responsive:true,
        });
      });
      jQuery(document).ready(function(){
        $('.bx-wrapper').css('max-width','100%');
        $('.bx-viewport').css('height','400px');
        $('.list_item').css('width','200px');
      });
    </script>
    <?php wp_footer(); ?>
  </body>
</html>
