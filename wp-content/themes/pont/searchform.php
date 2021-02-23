<section class="service_wrap">
  <div class="top_model_reserve pont">
    <div class="top_model_reserve_inner">
      <h2 >施術別で美容師を探す</h2>
      <form method="get" action="<?php echo home_url('/'); ?>" class="search_container">
        <input type="text" name="s" value="<?php the_search_query(); ?>"  placeholder="キーワード検索">
        <i type="submit" class="fas fa-search search_icon"></i>
      </form>
      <ul class="fg">
        <li class="cut"><a href="<?php echo get_category_link(22); ?>">カット</a></li>
        <li class="color"><a href="<?php echo get_category_link(23); ?>">カラー</a></li>
        <li class="treatment"><a href="<?php echo get_category_link(24); ?>">トリートメント</a></li>
        <li class="hairarenge"><a href="<?php echo get_category_link(25); ?>">ヘアアレンジ</a></li>
      </ul>
    </div>
  </div>
</section>
<section class="search_form sp" ,include="form-input-select()">
      <div class="wrap">
        <select name="" required class="fg search_form_block">
          <option value="" hidden>スタイルから探す</option>
          <option value="all">全て</option>
          <option value="short-t">半袖Tシャツ</option>
          <option value="long-t">長袖Tシャツ</option>
          <option value="short-p">半ズボン</option>
          <option value="long-p">長ズボン</option>
        </select>
      </div>
    </section>