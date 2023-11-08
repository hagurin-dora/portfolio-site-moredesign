<!-- トップページを読み込む -->
<!-- index.phpにも同じ内容を書くことを推奨 -->
<?php get_header(); ?>
<main class="main">
  <div class="fv">
    <div class="fv__wrapper">
      <h1 class="fv__site-title">More Design</h1>
      <p class="fv__text">Web制作を通じて「夢」や「目標」を実現する</p>
      <p class="fv__small-text">Webデザイナー/WebコーダーAkinobuの<br>
        ポートフォリオサイト
      </p>
    </div>
  </div>
  <section class="service">
    <div class="wrapper">
      <div class="title__wrapper">
        <h2 class="section__title">SERVICE</h2>
        <p class="sub__title">提供できるサービス</p>
      </div>
      <ul class="service__menu fadeInBefore fadeInAfter scroll-In">
        <li class="service__item">
          <div class="service__img">
            <img src="http://moredesign2023.com/wp-content/themes/WP_format/assets/img/common/webdesign_img.png"
              alt="webdesign">
          </div>
          <h3 class="service__text">01.Webデザイン</h3>
          <p class="service__subtext">下層ページのあるコーポレートサイトや1ページ完結型のランディングページを制作いたします。
            お客様のご要望を丁寧にヒアリングし、目的に適ったサイトを制作いたします。</p>
        </li>
        <li class="service__item">
          <div class="service__img">
            <img src="http://moredesign2023.com/wp-content/themes/WP_format/assets/img/common/coding_img.png"
              alt="coding">
          </div>
          <h3 class="service__text">02.コーディング</h3>
          <p class="service__subtext">お客様から頂いたデータを元に丁寧なコーディングで実装いたします。
            デザインカンプはAdobe XD、Illustratorなどのデータで承ります。</p>
        </li>
        <li class="service__item">
          <div class="service__img">
            <img src="http://moredesign2023.com/wp-content/themes/WP_format/assets/img/common/wordpress_img.png"
              alt="wordpress">
          </div>
          <h3 class="service__text">03.WordPress</h3>
          <p class="service__subtext">
            WordPressを利用することによってお客様ご自身でのWebサイトの運用が可能となります。更新頻度の高いブログサイトなどにオススメです。既存のWebサイトのWordPressへの移行もおこなっております。
          </p>
        </li>
      </ul>
      <!-- <div class="button"> -->
      <a href="<?php echo esc_url(home_url('/service/')); ?>" class="button">
        <!-- <span> -->
        <p>サービスの流れはこちら</p>
        <!-- </span> -->
      </a>
      <!-- </div> -->
    </div>
  </section>
  <section class="works">
    <div class="wrapper">
      <div class="title__wrapper">
        <h2 class="section__title">WORKS</h2>
        <p class="sub__title">制作したサイト</p>
      </div>

      <!-- スライダーのコンテナ -->
      <div class="container">
        <div class="swiper">
          <!-- 必要に応じたwrapper -->
          <div class="swiper-wrapper">
            <!-- スライド -->
            <div class="swiper-slide"><img
                src="http://moredesign2023.com/wp-content/themes/WP_format/assets/img/common/Mockup1_img.png"
                alt=" ホームページサイトの画像">
            </div>
            <div class=" swiper-slide"><img
                src="http://moredesign2023.com/wp-content/themes/WP_format/assets/img/common/Mockup2_img.png"
                alt="ホームページサイトの画像">
            </div>
            <div class="swiper-slide"><img
                src="http://moredesign2023.com/wp-content/themes/WP_format/assets/img/common/Mockup3_img.png"
                alt="ホームページサイトの画像">
            </div>
            <div class="swiper-slide"><img
                src="http://moredesign2023.com/wp-content/themes/WP_format/assets/img/common/Mockup4_img.png"
                alt="ホームページサイトの画像">
            </div>
          </div>
        </div>
        <!-- 必要に応じてページネーション -->
        <div class="swiper-pageWrap">
          <div class="swiper-pagination">
            <span class="swiper-pagination-bullet"></span>
            <span class="swiper-pagination-bullet"></span>
            <span class="swiper-pagination-bullet"></span>
            <span class="swiper-pagination-bullet"></span>
          </div>
        </div>
        <!-- 必要に応じてナビボタン -->
        <div class="swiper-navWrap">
          <div class="swiper-button-prev"></div>
          <div class="swiper-button-next"></div>
        </div>
      </div>

      <a href="<?php echo esc_url(home_url('/works/')); ?>" class="button">
        <p>
          制作サイト一覧
        </p>
      </a>
    </div>
  </section>
  <section class="about">
    <div class="wrapper">
      <div class="title__wrapper">
        <h2 class="section__title">サイト制作者紹介</h2>
        <p class="sub__title">私について</p>
      </div>
      <div class="about__profile">
        <div class="about__img">
          <img src="http://moredesign2023.com/wp-content/themes/WP_format/assets/img/pages/about/my_face_logo.png"
            alt="サイト制作者の画像" class="fadeInBefore fadeInAfter scroll-In">
          <!-- <img src="" alt=" サイト制作者の画像"> -->
        </div>
        <div class="about__text fadeInBefore fadeInAfter scroll-In">
          <p>はじめまして。</p>
          <p>愛知県名古屋市でWeb
            デザイナーとして活動している
            Akinobuと申します。</p>
          <p>Webサイトの制作を通じてお客様の
            「夢」や「目標」に近づく
            お手伝いをします。</p>
          <p>サイト制作やその他些細なことでもお気軽に
            ご相談下さい。</p>
        </div>
      </div>
    </div>
  </section>
  <section class="contact">
    <div class="wrapper">
      <div class="title__wrapper">
        <h2 class="section__title">CONTACT</h2>
        <p class="sub__title">お問い合わせ</p>
      </div>
      <div class="contact__text">
        <p>お仕事のご相談、ご質問は以下の</p>
        <p>お問い合わせフォームよりお願いいたします。</p>
        <p>些細なことでもかまいません。</p>
        <p>まずはお気軽にお問い合わせを</p>
      </div>
      <a href="<?php echo esc_url(home_url('/contact/')); ?>" class="button">
        <p>お問い合わせ一覧</p>
      </a>
    </div>
  </section>
</main>
<?php get_footer(); ?>