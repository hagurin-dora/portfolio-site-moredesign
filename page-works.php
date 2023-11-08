<!-- 固定ページ：実績一覧ページ -->
<!-- 管理画面より、slug名「works」で固定ページを投稿 -->
<!-- 実装の参考：https://shogo-log.com/setup-pagenation/ -->
<?php get_header(); ?>
<main class="main">
  <section class="works__subpage">
    <div class="wrapper">
      <div class="title__wrapper">
        <h2 class="section__title">WORKS</h2>
        <p class="sub__title">制作サイト一覧</p>
      </div>

      <div class="works__list">
        <?php
          $paged = (get_query_var('paged'))
          ? get_query_var('paged') : 1;
          $the_query = new WP_Query( array(
          'post_status' => 'publish',
          'paged' => $paged,
          'posts_per_page' => 6, // 表示件数
          'orderby'     => 'date',
          'order' => 'ASC',
          'post_type' => 'post'
          ) );
  
  
        if ($the_query->have_posts()) :?><?php
            while ($the_query->have_posts()) : $the_query->the_post();?>

        <div class="works__list-item">
          <a href="<?php the_permalink(); ?>"> <img src="<?php the_field("site_image");?>" alt=""> </a>
          <h3 class="list-item__title">
            <?php the_title(); ?>
          </h3>
        </div>
        <?php endwhile;?><?php endif; ?>
        <!-- <div class=" works__list-item">
          <a href=" #">
            <img src="http://myportfolio.local/wp-content/themes/WP_format/assets/img/pages/works/Mockup2_img_pc.png"
              alt="Sneakers">
          </a>
          <h3 class="list-item__title">Sneakers</h3>
        </div>
        <div class="works__list-item">
          <a href="#">
            <img src="http://myportfolio.local/wp-content/themes/WP_format/assets/img/pages/works/Mockup3_img_pc.png"
              alt="Furniture Design">
          </a>
          <h3 class="list-item__title">Furniture Design</h3>
        </div>
        <div class="works__list-item">
          <a href="#">
            <img src="http://myportfolio.local/wp-content/themes/WP_format/assets/img/pages/works/Mockup4_img_pc.png"
              alt="Coffee Shop">
          </a>
          <h3 class="list-item__title">Coffee Shop</h3>
        </div> -->

      </div>
      <div class=" works__list-pagination">
        <?php
          if(function_exists('wp_pagenavi')) {
            wp_pagenavi(array('query' => $the_query));
          }?>

        <?php wp_reset_postdata(); ?>
        <!-- <li class="pagination__prev"><a href="#"></a></li>
        <li class="page-number">1</li>
        <li class="pagination__next"><a href="#"></a></li> -->
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