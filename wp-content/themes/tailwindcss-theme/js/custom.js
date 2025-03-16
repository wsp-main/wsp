/**
 * メニューの開閉処理
 */
jQuery(document).ready(function ($) {
  // メニューを開くボタン
  $('#menuToggle').on('click', function () {
    $('#dynamicMenu').fadeIn(300); // フェードインで表示
  });

  // メニューを閉じるボタン
  $('#menuClose').on('click', function () {
    $('#dynamicMenu').fadeOut(300); // フェードアウトで非表示
  });
});

/**
 * スクロールで要素を表示
 */
jQuery(document).ready(function ($) {
  $(window).on('scroll', function () {
    $('.fade-in-on-scroll').each(function () {
      const scrollTop = $(window).scrollTop();
      const elementOffset = $(this).offset().top;
      const windowHeight = $(window).height();

      // 要素が画面内に入ったらふわっと表示
      if (scrollTop > elementOffset - windowHeight + 100) {
        $(this).removeClass('hidden').css({
          opacity: 1,
          transform: 'translateY(0)'
        });
      }
    });
  });
});

/**
 * タブ切り替え処理
 */
jQuery(document).ready(function ($) {
  const $tabButtons = $('.tab-btn');
  const $tabContents = $('.tab-content');

  // 初期状態の設定
  $('.tab-btn[data-tab="tab1"]').addClass('bg-font2 text-white');
  $('.tab-btn[data-tab="tab2"]').addClass('bg-clr2 text-primary');

  // 画像の切り替え処理
  function updateTabIcons() {
    $tabButtons.each(function () {
      const $button = $(this);
      const $img = $button.find('img');
      const isActive = $button.hasClass('bg-font2');

      if ($img.length) {
        const currentSrc = $img.attr('src');
        const basePath = currentSrc.substring(0, currentSrc.lastIndexOf('/') + 1);
        const newFileName = isActive ? $img.data('selected') : $img.data('default');
        $img.attr('src', `${basePath}${newFileName}`);
      }
    });
  }

  // タブボタンクリックイベント
  $tabButtons.on('click', function () {
    const $button = $(this);

    // ボタンのスタイルリセット
    $tabButtons.removeClass('bg-font2 text-white').addClass('text-primary bg-clr2');

    // クリックされたボタンのスタイル変更
    $button.removeClass('bg-clr2 text-primary').addClass('bg-font2 text-white');

    // 全コンテンツを非表示
    $tabContents.addClass('hidden');

    // 対応するコンテンツを表示
    const tabId = $button.data('tab');
    const $targetContent = $(`#${tabId}`);
    if ($targetContent.length) {
      $targetContent.removeClass('hidden');
    }

    // 画像を更新
    updateTabIcons();
  });

  // 初期状態で画像を更新
  updateTabIcons();
});

document.addEventListener("DOMContentLoaded", function () {
  const lazyBackgrounds = document.querySelectorAll('[data-bg]');

  lazyBackgrounds.forEach(function (element) {
      const observer = new IntersectionObserver(
          function (entries, observer) {
              entries.forEach(function (entry) {
                  if (entry.isIntersecting) {
                      const bgUrl = element.getAttribute('data-bg');
                      if (bgUrl) {
                          element.style.backgroundImage = `url('${bgUrl}')`;
                          element.removeAttribute('data-bg');
                      }
                      observer.unobserve(entry.target);
                  }
              });
          },
          { rootMargin: '0px 0px 200px 0px' }
      );

      observer.observe(element);
  });
});