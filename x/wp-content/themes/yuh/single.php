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
      <?php
      the_content();
      ?>
    </div>
  </main>
  <?php get_template_part( 'inc/overlay-menu' ); ?>
  <script src="/assets/main.js"></script>
</body>
</html>