window.addEventListener('load', function () {
    // ナビゲーションのトグル処理
    let main_navigation = document.querySelector('#primary-menu');
    let toggleButton = document.querySelector('#primary-menu-toggle');

    // ボタンが存在する場合のみ、イベントリスナーを追加
    if (toggleButton && main_navigation) {
        toggleButton.addEventListener('click', function (e) {
            e.preventDefault();
            main_navigation.classList.toggle('hidden');
        });
    }
});


////////////////////// ポップアップ //////////////////////

document.addEventListener('DOMContentLoaded', function() {
  const popupTrigger = document.getElementById('popup-trigger');
  const additionalPopupTrigger = document.getElementById('additional-popup-trigger');
  const popup = document.getElementById('popup');
  const additionalPopup = document.getElementById('additional-popup');
  const closeButton = document.getElementById('close-popup');
  const closeAdditionalButton = document.getElementById('close-additional-popup');

  // ポップアップ1の表示制御
  popupTrigger.addEventListener('click', function() {
      popup.classList.remove('hidden');
      setTimeout(() => {
          popup.classList.remove('opacity-0');
          popup.classList.add('opacity-100');
      }, 10);
  });

  closeButton.addEventListener('click', function() {
      popup.classList.remove('opacity-100');
      popup.classList.add('opacity-0');
      setTimeout(() => {
          popup.classList.add('hidden');
      }, 500);
  });

  popup.addEventListener('click', function(event) {
      if (event.target === popup) {
          popup.classList.remove('opacity-100');
          popup.classList.add('opacity-0');
          setTimeout(() => {
              popup.classList.add('hidden');
          }, 500);
      }
  });

  // ポップアップ2の表示制御
  additionalPopupTrigger.addEventListener('click', function() {
      additionalPopup.classList.remove('hidden');
      setTimeout(() => {
          additionalPopup.classList.remove('opacity-0');
          additionalPopup.classList.add('opacity-100');
      }, 10);
  });

  closeAdditionalButton.addEventListener('click', function() {
      additionalPopup.classList.remove('opacity-100');
      additionalPopup.classList.add('opacity-0');
      setTimeout(() => {
          additionalPopup.classList.add('hidden');
      }, 500);
  });

  additionalPopup.addEventListener('click', function(event) {
      if (event.target === additionalPopup) {
          additionalPopup.classList.remove('opacity-100');
          additionalPopup.classList.add('opacity-0');
          setTimeout(() => {
              additionalPopup.classList.add('hidden');
          }, 500);
      }
  });
});
////////////////////// ポップアップ //////////////////////


////////////////////// scrollTOP //////////////////////

 // スクロールイベントを監視してボタンを表示または非表示にする
 window.addEventListener('scroll', () => {
  const scrollToTopButton = document.getElementById('scrollToTop');
  if (window.scrollY > 300) {
    scrollToTopButton.style.display = 'block';
    setTimeout(() => {
      scrollToTopButton.classList.remove('opacity-0');
      scrollToTopButton.classList.add('opacity-100');
    }, 10); // 少し遅延させることでアニメーションが適用される
  } else {
    scrollToTopButton.classList.remove('opacity-100');
    scrollToTopButton.classList.add('opacity-0');
    setTimeout(() => {
      scrollToTopButton.style.display = 'none';
    }, 300); // アニメーションの時間に合わせて遅延させる
  }
});

// ボタンをクリックしたときにトップへスクロールする関数
function scrollToTop() {
  const scrollDuration = 500; // スクロール時間を0.5秒（500ms）に設定
  const scrollStep = -window.scrollY / (scrollDuration / 15),
        scrollInterval = setInterval(() => {
    if ( window.scrollY != 0 ) {
        window.scrollBy( 0, scrollStep );
    } else clearInterval(scrollInterval); 
  }, 15);
}

document.getElementById('scrollToTop').addEventListener('click', scrollToTop);

////////////////////// scrollTOP //////////////////////
