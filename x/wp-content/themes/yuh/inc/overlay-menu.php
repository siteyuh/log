<aside class="menu">
  <button class="toggle-menu" onclick="toggle_menu()"><img src="https://motebody.siteyuh.com/assets/menu.svg" alt="open menu"></button>
  <div id="menu_win" style="display:none;">
    <div class="close" onclick="close_menu()"><img src="https://motebody.siteyuh.com/assets/close.svg" alt="close menu"></div>
    <?php get_search_form(); ?>
    <div class="tag">
      <h3 class="menu_title">Tag</h3>
      <p>
      <?php
        wp_tag_cloud( 'smallest=8&largest=20' );
      ?>
      </p>
    </div>
    <p class="sep">
      <a href="/">Show All</a>
      <a href="/q/" target="_blank">アンケートに協力してください</a>
    </p>
  </div>
</aside>