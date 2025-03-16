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
