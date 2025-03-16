<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- Open Graph タグ -->
    <meta property="og:image" content="<?php echo get_template_directory_uri(); ?>/startup-lp-parts/images/logo.svg" />
    <meta property="og:title" content="仙台ウェブサービスプランニング（WEB SERVICE PLANNING）" />
    <meta property="og:description" content="東北地域で起業、開業されているかたのWEBに関する収益最大化を目指します。" />
    <meta property="og:url" content="https://web-service-planning.com/startup-lp/" />
    <meta property="og:type" content="website" />
    <meta property="og:site_name" content="仙台ウェブサービスプランニング（WEB SERVICE PLANNING）" />

    <!-- Google Fonts 遅延読み込み -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <script>
      window.onload = function() {
        var link = document.createElement('link');
        link.rel = 'stylesheet';
        link.href = 'https://fonts.googleapis.com/css2?family=Zen+Maru+Gothic:wght@500&display=swap';
        document.head.appendChild(link);
      };
    </script>
    <noscript>
      <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Zen+Maru+Gothic:wght@500&display=swap">
    </noscript>

    <!-- CSSファイルの遅延読み込み -->
    <link rel="preload" href="<?php echo get_template_directory_uri(); ?>/startup-lp-parts/css/lp-style.min.css" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <noscript>
      <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/startup-lp-parts/css/lp-style.min.css">
    </noscript>

    <!-- Favicon とロゴのプリロード -->
    <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/images/favicon.ico" type="image/x-icon">
    <link rel="preload" href="<?php echo get_template_directory_uri(); ?>/startup-lp-parts/images/logo.svg" as="image" type="image/svg+xml">
  
    <?php wp_head(); ?>

    <!-- Google Tag Manager -->
    <script defer>
      (function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start': new Date().getTime(), event:'gtm.js'});
      var f=d.getElementsByTagName(s)[0], j=d.createElement(s), dl=l!='dataLayer'?'&l='+l:''; 
      j.async=true; j.src='https://www.googletagmanager.com/gtm.js?id='+i+dl; f.parentNode.insertBefore(j,f);
      })(window,document,'script','dataLayer','GTM-TJXNC494');
    </script>
    <!-- End Google Tag Manager -->
</head>

<body>
<!-- Google Tag Manager (noscript) -->
<noscript>
  <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-TJXNC494" height="0" width="0" style="display:none;visibility:hidden"></iframe>
</noscript>
<!-- End Google Tag Manager (noscript) -->

<!-- ヘッダーエリア -->
<header class="sticky top-0 flex flex-col md:flex-row items-center justify-between shadow bg-white z-40">
    <div class="logo h-full mb-4 md:mb-0 flex items-center justify-center w-full md:w-auto">
    <a href="<?php echo home_url(); ?>" class="h-full flex items-center">
        <img src="<?php echo get_template_directory_uri(); ?>/startup-lp-parts/images/logo.svg" alt="仙台ウェブサービスプランニング（WEB SERVICE PLANNING）" class="h-16 px-2 md:px-0" width="80%" height="100%" draggable="false">
  </a>
      </div>
      <a href="<?php echo esc_url( home_url( '/startup-lp/#contact-form' ) ); ?>" class="bg-font2 md:bg-custom-gradient text-white w-full md:w-72 h-12 md:h-full py-4 md:py-8 flex items-center justify-center transition-opacity duration-300 hover:opacity-75 tracking-wider font-bold">
    無料お見積もりはこちら
</a>

</header>

<main>
<!-- メインコンテンツ -->
