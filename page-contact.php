<!-- 固定ページ：お問い合わせページを実装する場合に使用 -->
<!-- 管理画面より、slug名「contact」で固定ページを投稿 -->
<!-- 実装の参考：https://wp-master.club/view-contact-form7 -->
<?php get_header(); ?>
<main class="main">

  <section class="contact__subpage">
    <div class="wrapper">
      <div class="title__wrapper">
        <h2 class="section__title">CONTACT</h2>
        <p class="sub__title">お問い合わせ</p>
      </div>
      <?php if (have_posts()) : ?>
      <?php while (have_posts()) : the_post();?>

      <?php the_content(); ?>
      <?php endwhile; ?>
      <?php endif; ?>
    </div>
  </section>
</main>
<?php get_footer(); ?>