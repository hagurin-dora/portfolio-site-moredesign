<!-- 通常投稿の個別ページ -->
<!-- 主にポートフォリオの個別詳細ページを実装 -->
<?php get_header(); ?>
<main class="main">
  <section class="works__subpage">
    <div class="wrapper">
      <div class="title__wrapper">
        <h2 class="section__title">WORKS</h2>
        <p class="sub__title">制作サイト詳細</p>
      </div>
      <?php if (have_posts()): ?>
      <?php while (have_posts()) : the_post(); ?>
      <div class="site__image"><img width="640" height="400" src=" <?php the_field('site_image'); ?>" alt=""></div>
      <h3 class="works-site__title"><?php the_field('site_title'); ?></h3>
      <dl class="work__text">
        <dt class="text__title"><?php the_field('development_language'); ?></dt>
        <dd class="text__desc"><?php the_field('development_language_used'); ?></dd>
        <dt class="text__title"><?php the_field('production_overview'); ?></dt>
        <dd class="text__desc"><?php the_field('production_overview_text'); ?></dd>
        <dt class="text__title"><?php the_field('url'); ?></dt>
        <dd class="text__desc"><a href="<?php the_field('site_url'); ?>"><?php the_field('site_url'); ?></a></dd>
        <!-- <dd class="text__desc"><?php the_field('site_url'); ?></dd> -->
      </dl>
      <ul class="post-link">
        <?php
          $link = get_field('prev_link');
          if( $link ):
            // URLを取得
            $linkUrl = $link['url'];
            // タイトルを取得
            $linkTitle = $link['title'];
            // 新しいタブで開く
            $linkTarget = $link['target'];
          ?>
        <li><a href="<?php echo esc_url( $linkUrl ); ?>"
            target="<?php echo esc_attr( $linkTarget ); ?>"><?php echo esc_html( $linkTitle ); ?>
            <span class="arrow__left">
              前へ
            </span>
          </a>
        </li>
        <?php endif; ?>
        <?php
          $link = get_field('next_link');
          if( $link ):
            // URLを取得
            $linkUrl = $link['url'];
            // タイトルを取得
            $linkTitle = $link['title'];
            // 新しいタブで開く
            $linkTarget = $link['target'];
          ?>
        <li><a href="<?php echo esc_url( $linkUrl ); ?>"
            target="<?php echo esc_attr( $linkTarget ); ?>"><?php echo esc_html( $linkTitle ); ?>
            <span class="arrow__right">
              次へ
            </span>
          </a>
        </li>
        <?php endif; ?>
      </ul>
      <?php
          $link = get_field('workspage_link');
          if( $link ):
            // URLを取得
            $linkUrl = $link['url'];
            // タイトルを取得
            $linkTitle = $link['title'];
            // 新しいタブで開く
            $linkTarget = $link['target'];
          ?>
      <div class="button"><a href="<?php echo esc_url( $linkUrl ); ?>"
          target="<?php echo esc_attr( $linkTarget ); ?>"><?php echo esc_html( $linkTitle ); ?><span>制作サイト一覧</span></a>
      </div>
      <?php endif; ?>
    </div>
    <?php endwhile; else:?>
    <?php endif; ?>
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
      <div class="button">
        <a href="#">
          <span>お問い合わせ一覧</span>
        </a>
      </div>
    </div>
  </section>
</main>
<?php get_footer(); ?>