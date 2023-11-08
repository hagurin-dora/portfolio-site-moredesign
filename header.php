<!-- ヘッダーパーツ -->
<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon"
    href="https://moredesign2023.com/wp-content/themes/WP_format/assets/img/common/MoreDesign_favicon.png">
  <!-- <title>More Design | WebデザイナーAkinobuのポートフォリオサイトです</title>
  <meta name="description" content="愛知県を拠点にWebサイトの制作を行っております。Webサイト制作を通じてお客様の持つ夢や目標の実現を目指します。"> -->
  <title><?php echo bloginfo('name'); ?></title>
  <meta name="description" content="<?php bloginfo('description'); ?>">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css">
  <script src=" https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>

  <?php wp_head(); ?>
</head>

<body>
  <header class="header">
    <div class="header__wrapper">
      <div class="site__title">
        <a href="<?php echo esc_url(home_url('/')); ?>" class=" header__logo" id="header__logo">More Design</a>
      </div>
      <nav class="header__nav">
        <ul class="header-list">
          <li class="header-list__item"><a href="<?php echo esc_url(home_url('/service/')); ?>">SERVICE</a></li>
          <li class="header-list__item"><a href="<?php echo esc_url(home_url('/works/')); ?>">WORKS</a></li>
          <li class="header-list__item"><a href="<?php echo esc_url(home_url('/contact/')); ?>">CONTACT</a></li>
        </ul>
      </nav>
      <div class="hamburger-icon" id="hamburger-icon">
        <span class="hamburger-icon__line"></span>
        <span class="hamburger-icon__line"></span>
        <span class="hamburger-icon__line"></span>
      </div>
    </div>

    <div class="hamburger__mask" id="hamburger__mask">
      <nav class="hamburger__nav">
        <ul class="hamburger__list" id="hamburger__list">
          <li class="hamburger__item"><a href="<?php echo esc_url(home_url('/service/')); ?>">SERVICE</a></li>
          <li class="hamburger__item"><a href="<?php echo esc_url(home_url('/works/')); ?>">WORKS</a></li>
          <li class="hamburger__item"><a href="<?php echo esc_url(home_url('/contact/')); ?>">CONTACT</a></li>
        </ul>
      </nav>
    </div>
  </header>