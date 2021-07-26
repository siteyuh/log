<?php

/*
index.php
*/

?>
<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php wp_title( '|', true, 'right' );
    bloginfo( 'name' );?></title>
  <link rel="stylesheet" href="/assets/main.css">
</head>

<body>
  <main class="thecontent">
    <div class="wrapper">
      <div class="page">
        <?php
        if( have_posts() ):
          while( have_posts() ):the_post();
            
            echo '<section class="post">';
            echo '<header class="date">'.get_the_date().' '.get_the_time().'</header>';
            the_content();
            echo '</section>';
          endwhile;
          $big = 9999999999;
          $arg = array(
            'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
            'current' => max( 1, get_query_var( 'paged' ) ),
            'total'   => $wp_query->max_num_pages,
            'prev_text' => '&lsaquo; 新しい投稿',
            'next_text' => '古い投稿 &rsaquo;'
          );
          echo '<aside class="page">';
          echo paginate_links( $arg );
          echo '</aside>';
        endif;
        ?>
      </div>
      <?php
      /* 無限スクロール https://firstlayout.net/install-infinite-scroll-in-wordpress/ */
      get_template_part( 'inc/infinite-scroll' );
      ?>
    </div>
  </main>
  <?php get_template_part( 'inc/overlay-menu' ); ?>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script src="https://unpkg.com/infinite-scroll@4/dist/infinite-scroll.pkgd.min.js"></script>
  <script src="/assets/main.js"></script>
</body>

</html>