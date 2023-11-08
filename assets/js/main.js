'use strict';

{
// --ハンバーガーメニュー--
  const mask = document.getElementById('hamburger__mask');
  const span1 = document.querySelectorAll('span')[0];
  const span2 = document.querySelectorAll('span')[1];
  const span3 = document.querySelectorAll('span')[2];
  const hamburger = document.getElementById('hamburger-icon');
  const hamburger_list = document.getElementById('hamburger__list');
  const logo = document.getElementById('header__logo');

  hamburger.addEventListener('click', () => {
    mask.classList.toggle('active');
    span1.classList.toggle('active');
    span2.classList.toggle('active');
    span3.classList.toggle('active');
    hamburger.classList.toggle('active');
    hamburger_list.classList.toggle('active');
    logo.classList.toggle('active');
  });
}

{
  // --スライダー--
  const swiper = new Swiper(".swiper", {
    // // slidesPerView: 3,/* スライドの表示枚数 */
    // loop: true, //繰り返し指定
    // spaceBetween: 40,
    // centeredSlides: true, //スライダーの最初と最後に余白を追加せずスライドが真ん中に配置される
    // centeredSlidesBounds: true, //アクティブなスライドを中央に配置

    // ページネーションが必要なら追加
    pagination: {
      el: ".swiper-pagination",
      type: "bullets",
      clickable: "clickable"
    },
    effect: "coverflow",
    grabCursor: true,
    centeredSlides: true,
    slidesPerView: "1",

    coverflowEffect: {
    rotate: 50,
    stretch: 0,
    depth: 100,
    modifier: 1,
    slideShadows: false
    },

    // ナビボタンが必要なら追加
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev"
    },

    breakpoints: {
      768: {
        slidesPerView: "2",
      },
    }

    // // スライドの表示枚数
    // slidesPerView: 1,
    // // スライドの横幅・高さ
    // // width: 240,
    // // height: 180,

    // breakpoints: {
    //   // スライドの表示枚数：1000px以上の場合
    //   1000: {
    //     slidesPerView: 3,
    //   },
    //   //  スライドの画像横幅、高さ : 1250px以上の場合
    //   // 1250: {
    //   //   width: 352,
    //   //   height: 235,
    //   // },
    // }
  });
}

// --フェードインアニメーション--
{
  let fadeContsLeft = document.querySelectorAll('.fadeInBefore');

  window.addEventListener('scroll', () => {

    for (let i = 0; i < fadeContsLeft.length; i++){
      const rect = fadeContsLeft[i].getBoundingClientRect().top;
      const scroll = window.pageYOffset || document.documentElement.scrollTop;
      const offset = rect + scroll;
      const windowHeight = window.innerHeight; // 現在のブラウザの高さ
      if (scroll > offset - windowHeight + 150) {
        fadeContsLeft[i].classList.add('scroll-in');
      }
    }
  });
}
