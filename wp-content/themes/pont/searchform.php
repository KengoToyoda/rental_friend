<section class="service_wrap">
  <div class="top_model_reserve pont">
    <div class="top_model_reserve_inner">
      <h2 >施術別で美容師を探す</h2>
      <form method="get" action="<?php echo home_url('/'); ?>" class="search_container">
        <input type="text" name="s" value="<?php the_search_query(); ?>"  placeholder="　キーワード検索">
        <i type="submit" class="fas fa-search search_icon"></i>
      </form>
      <ul class="fg">
        <li class="cut"><a href="">カット</a></li>
        <li class="color"><a href="">カラー</a></li>
        <li class="treatment"><a href="">トリートメント</a></li>
        <li class="hairarenge"><a href="">ヘアアレンジ</a></li>
      </ul>
    </div>
  </div>
</section>