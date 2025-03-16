document.addEventListener('DOMContentLoaded', function() {
    // ポップアップ1要素
    const popupTrigger = document.getElementById('popup-trigger');
    const popup = document.getElementById('popup');
    const closeButton = document.getElementById('close-popup');
  
    // ポップアップ2要素
    const additionalPopupTrigger = document.getElementById('additional-popup-trigger');
    const additionalPopup = document.getElementById('additional-popup');
    const closeAdditionalButton = document.getElementById('close-additional-popup');
  
    // ポップアップ1の表示制御（存在する場合のみ）
    if (popupTrigger && popup && closeButton) {
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
    }
  
    // ポップアップ2の表示制御（存在する場合のみ）
    if (additionalPopupTrigger && additionalPopup && closeAdditionalButton) {
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
    }
  });
  