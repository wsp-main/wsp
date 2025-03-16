<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- Open Graph タグ -->
    <meta property="og:image" content="<?php echo get_template_directory_uri(); ?>/startup-lp-parts/images/logo.svg" />
    <meta property="og:title" content="仙台ウェブサービスプランニング（WEB SERVICE PLANNING）" />
    <meta property="og:description" content="東北地域で起業、開業されているかたのWEBに関する収益最大化を目指します。" />
    <meta property="og:url" content="https://web-service-planning.com" />
    <meta property="og:type" content="website" />
    <meta property="og:site_name" content="仙台ウェブサービスプランニング（WEB SERVICE PLANNING）" />

    <!-- Favicon とロゴのプリロード -->
    <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/img/favicon.ico" type="image/x-icon">
    <link rel="preload" href="<?php echo get_template_directory_uri(); ?>/img/logo.svg" as="image" type="image/svg+xml">

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
<header class="w-full relative m-0 p-0 bg-clr4">
    <!-- 固定ヘッダー -->
    <div class="fixed top-0 flex items-center justify-between shadow bg-white w-full z-40 px-4 py-6 bg-opacity-90">
        <!-- ロゴセクション -->
        <div class="logo h-full flex items-center justify-center ">
            <a href="<?php echo home_url(); ?>" class="h-full flex items-center">
                <img src="<?php echo get_template_directory_uri(); ?>/img/logo.svg" alt="仙台ウェブサービスプランニング（WEB SERVICE PLANNING）" class="h-12" loading="eager" width="100%" height="100%" draggable="false">
            </a>
        </div>

        <nav class="menu flex items-center justify-center">
            <ul class="flex items-center space-x-12 ">
                <li class="hidden xl:block">
                    <a href="<?php echo home_url("about"); ?>" class="text-primary hover:text-clr2 flex flex-col items-center transition-transform duration-300 ease-in-out transform ">
                        <span class="font-bold text-regular xl:text-large leading-tight">ABOUT</span>
                        <span class="text-sm leading-none">私たちについて</span>
                    </a>
                </li>
                <li class="hidden xl:block">
                    <a href="<?php echo home_url('/service/website'); ?>" class="text-primary hover:text-clr2 flex flex-col items-center transition-transform duration-300 ease-in-out transform">
                        <span class="font-bold text-regular xl:text-large leading-tight">SERVICE</span>
                        <span class="text-sm leading-none">事業</span>
                    </a>
                </li>
                <li class="hidden xl:block">
                    <a href="<?php echo home_url('/cost/cost_website'); ?>" class="text-primary hover:text-clr2 flex flex-col items-center transition-transform duration-300 ease-in-out transform ">
                        <span class="font-bold text-regular xl:text-large leading-tight">COST</span>
                        <span class="text-sm leading-none">料金</span>
                    </a>
                </li>
                <li class="p-2 px-4 border-l border-gray-300">
                    <!-- ハンバーガーメニュー -->
                    <button id="menuToggle" class="flex flex-col justify-between w-10 h-8 transition-transform duration-300 ease-in-out transform hover:scale-110" aria-label="メニューを開く">
                        <span class="block w-full h-1 bg-gray-700"></span>
                        <span class="block w-full h-1 bg-gray-700"></span>
                        <span class="block w-full h-1 bg-gray-700"></span>
                    </button>
                </li>
            </ul>
        </nav>
    </div>
    <!-- ダイナミックメニュー -->
    <nav id="dynamicMenu" class="fixed inset-0 bg-white z-50 hidden flex flex-col items-center justify-center">
        <!-- 右上の✕ボタン -->
        <button id="menuClose" class="absolute top-6 right-8 text-primary hover:text-clr2 focus:outline-none text-xxl font-bold" aria-label="メニューを閉じる">
            ✕
        </button>

        <!-- メニュー項目 -->
        <ul class="grid grid-cols-1 md:grid-cols-5 gap-6 text-lg md:gap-4 py-20 sm:py-64">
            <li class="md:border-r border-gray-300">
                <a href="<?php echo home_url(); ?>" class="text-primary hover:text-clr2 block text-center font-bold py-4">ホーム</a>
            </li>
            <li class="md:border-r border-gray-300">
                <a href="<?php echo home_url('/about'); ?>" class="text-primary hover:text-clr2 block text-center font-bold  py-4">私たちについて</a>
            </li>
            <li class="md:border-r border-gray-300">
                <a href="<?php echo home_url('/service/website'); ?>" class="text-primary hover:text-clr2 block text-center font-bold py-4">サービス</a>
                <!--<ul class="pt-20">
                    <li><a href="<?php echo home_url('/service/website'); ?>" class="text-gray-700 hover:text-blue-500 block px-4 py-2 text-center">ホームページ制作</a></li>
                </ul>-->
            </li>
            <li class="md:border-r border-gray-300"><a href="<?php echo home_url('/cost/cost_website'); ?>" class="text-primary hover:text-clr2 block text-center font-bold py-4">料金</a>
        </li>
            <li class="md:border-r border-gray-300">
                <a href="<?php echo home_url('/contact'); ?>" class="text-primary hover:text-clr2 block text-center font-bold py-4">無料ご相談</a>
            </li>
        </ul>
    </nav>

    <!-- メインビジュアル -->

    
    <div class="bg-primary w-full relative h-full m-0 p-0">

        <?php if (is_page('about')) : ?>
                <div class="bg-[url('../img/mv_about_sp.svg')] bg-contain bg-no-repeat bg-right-top w-full flex flex-col justify-center pt-28 lg:pt-40 pb-0 lg:pb-28">
                <!-- 説明文 -->
                    <div class="inset-0 flex flex-col justify-center">
                        <div class="container mx-auto relative my-10 lg:mt-20">
                            <div class="w-full lg:w-4/5 xl:w-1/2 mx-auto lg:mx-0 bg-white p-4 md:p-6 lg:p-10 bg-opacity-90 shadow-sm">
                                <h1 class="text-xl sm:text-xxl md:text-4xl font-bold text-center md:text-left text-primary">私たちについて</h1>
                            </div>
                        </div>
                    </div>
                </div>
        <?php elseif (is_page('website')) : ?>
            <div class="bg-[url('../img/mv_service_sp.svg')] bg-contain bg-no-repeat bg-right-top  w-full flex flex-col justify-center pt-28 md:pt-40 pb-0 lg:pb-28">
            <!-- 説明文 -->
                <div class="inset-0 flex flex-col justify-center">
                    <div class="container mx-auto relative my-10 md:my-0 md:mt-20">
                        <div class="w-full lg:w-4/5 xl:w-1/2 mx-auto lg:mx-0 bg-white p-4 md:p-6 lg:p-10 bg-opacity-90 shadow-sm">
                            <h1 class="text-xl sm:text-xxl md:text-4xl font-bold text-center md:text-left text-primary">ホームページ制作</h1>
                        </div>
                    </div>
                </div>
            </div>
            <?php elseif (is_page('cost_website')) : ?>
            <div class="bg-[url('../img/mv_cost_sp.svg')] bg-contain bg-no-repeat bg-right-top  w-full flex flex-col justify-center pt-28 md:pt-40 pb-0 lg:pb-28">
            <!-- 説明文 -->
                <div class="inset-0 flex flex-col justify-center">
                    <div class="container mx-auto relative my-10 md:my-0 md:mt-20">
                        <div class="w-full lg:w-4/5 xl:w-1/2 mx-auto lg:mx-0 bg-white p-4 md:p-6 lg:p-10 bg-opacity-90 shadow-sm">
                            <h1 class="text-xl sm:text-xxl md:text-4xl font-bold text-center md:text-left text-primary">ホームページ制作料金</h1>
                        </div>
                    </div>
                </div>
            </div>
            <?php elseif (is_page('blog') ) : ?>
            <div class="bg-[url('../img/mv_post_sp.svg')] bg-contain bg-no-repeat bg-right-top  w-full flex flex-col justify-center pt-28 md:pt-40 pb-0 lg:pb-28">
            <!-- 説明文 -->
                <div class="inset-0 flex flex-col justify-center">
                    <div class="container mx-auto relative my-10 md:my-0 md:mt-20">
                        <div class="w-full lg:w-4/5 xl:w-1/2 mx-auto lg:mx-0 bg-white p-4 md:p-6 lg:p-10 bg-opacity-90 shadow-sm">
                            <h1 class="text-xl sm:text-xxl md:text-4xl font-bold text-center md:text-left text-primary">ブログ</h1>
                        </div>
                    </div>
                </div>
            </div>
            <?php elseif (is_category()) : ?>
                <div class="bg-[url('../img/mv_post_sp.svg')] bg-contain bg-no-repeat bg-right-top w-full flex flex-col justify-center pt-28 md:pt-40 pb-0 lg:pb-28">
                    <!-- 説明文 -->
                    <div class="inset-0 flex flex-col justify-center">
                        <div class="container mx-auto relative my-10 md:my-0 md:mt-20">
                            <div class="w-full lg:w-4/5 xl:w-1/2 mx-auto lg:mx-0 bg-white p-4 md:p-6 lg:p-10 bg-opacity-90 shadow-sm">
                                <!-- カテゴリ名を動的に表示 -->
                                <h1 class="text-xl sm:text-xxl md:text-4xl font-bold text-center md:text-left text-primary">
                                    <?php single_cat_title(); ?>
                                </h1>
                            </div>
                        </div>
                    </div>
                </div>

            <?php elseif (is_singular('post')): ?>
            <div class="">
            </div>
            <?php elseif (is_page('contact')) : ?>
            <div class="bg-[url('../img/mv_contact_sp.svg')] bg-contain bg-no-repeat bg-right-top  w-full flex flex-col justify-center pt-28 md:pt-40 pb-0 lg:pb-28">
            <!-- 説明文 -->
                <div class="inset-0 flex flex-col justify-center">
                    <div class="container mx-auto relative my-10 md:my-0 md:mt-20">
                        <div class="w-full lg:w-4/5 xl:w-1/2 mx-auto lg:mx-0 bg-white p-4 md:p-6 lg:p-10 bg-opacity-90 shadow-sm">
                            <h1 class="text-xl sm:text-xxl md:text-4xl font-bold text-center md:text-left text-primary">無料ご相談</h1>
                        </div>
                    </div>
                </div>
            </div>
        <?php else : ?>
            <div class="bg-primary md:pb-0">
                <div class="bg-[url('../img/mv_top_sp.svg')] bg-contain bg-no-repeat bg-bottom w-full flex flex-col justify-center pt-28 md:pt-40 pb-40">
                        <?php
                        // アイコンリストのデータ（内容を必要に応じて変更）
                        $icon_list = [
                            '低価格',
                            'SEO最適化',
                            'MEO対応',
                            '自社で簡単更新',
                            'オリジナルデザイン',
                            'SSL対応',
                            'スマートフォン対応',
                            'コアウェブバイタル<br>対応',
                        ];
                        ?>

                        <div class="w-11/12 md:w-4/5 lg:w-2/3 mx-auto lg:mx-0 relative md:ml-10">
                            <div class="bg-white p-4 md:p-6 lg:p-10 bg-opacity-90 shadow-sm">
                                <h1 class="text-regular sm:text-large md:text-xl lg:text-3xl font-bold text-left text-font1">
                                    東北地域で１番お客様に寄り添った<br class="hidden md:block">集客・売り上げに強いホームページを提供します！
                                </h1>
                            </div>
                            <!-- アイコンリスト -->
                            <div class="mt-6 md:mt-10 mx-auto lg:mx-0 grid grid-cols-2 sm:grid-cols-3 xl:grid-cols-4 gap-2 xl:gap-4 text-center top_mv_icon">
                                <?php foreach ($icon_list as $icon_text): ?>
                                    <div class="bg-white relative flex justify-center py-2 md:py-4">
                                        <p class="font-bold text-xx-small xs:text-x-small flex items-center leading-tight">
                                            <?php echo $icon_text; ?>
                                        </p>
                                    </div>
                                <?php endforeach; ?>
                            </div>
                        </div>

                        </div>
                </div>
            </div>
        <?php endif; ?>
    </div>
</header>