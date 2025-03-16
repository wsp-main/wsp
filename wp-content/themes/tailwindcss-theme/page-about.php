<?php get_header(); ?>
<main class="m-0 p-0 relative z-10">
    <!-- Hero Section -->
    <div class="py-20 md:py-32 bg-clr2">
        <div class="container mx-auto">
            <div class="logo h-full flex items-center justify-center">            
                <img src="<?php echo get_template_directory_uri(); ?>/img/logo.svg" 
                     alt="仙台ウェブサービスプランニング（WEB SERVICE PLANNING）" 
                     class="h-12" loading="lazy" width="100%" height="100%" draggable="false">
            </div>
            <h1 class="font-bold text-center py-10 text-large xs:text-xl md:text-xxl">仙台ウェブサービスプランニングとは？</h1>
            <p class="leading-loose text-center py-6 md:py-12 w-full md:w-1/2 mx-auto">
                WEB SERVICE PLANNING(仙台ウェブサービスプランニング)は、東北地方の企業およびフリーランスが協業することで実現した総合支援型サービスです。
                <br><br>
                規制に縛られない提案内容や金額交渉、自由な意思でお客様に寄り添った形で最適なサービスを提供します。
                <br><br>
                東北地域限定、受注件数制限を設けることで、柔軟な行動力と専門的なスキルを最大限に発揮し、「利益より最高のサービスを」を実現します。
            </p>
        </div>
    </div>

    <!-- Feature Section -->
    <section class="py-20 md:py-32 fade-in-on-scroll">
    <p class="container mx-auto font-bold text-regular md:text-large text-center">他社と比べるとよくわかる！</p>
    <h2 class="container  mx-auto font-bold text-font1 text-large xs:text-xl md:text-xxl text-center">ウェブサービスプランニングの魅力！</h2>

        <div class="container mx-auto flex items-center justify-center pt-20 md:pt-32">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8 w-full">
                <!-- Reusable Feature Block -->
                <?php 
                $features = [
                    [
                        "title" => "東北地域を中心とした地方活性化型サービス",
                        "description" => "仙台ウェブサービスプランニングは、東北6県（青森、秋田、岩手、宮城、山形、福島）の地域企業や商店を応援します。地元の魅力を発信し、課題に寄り添いながら地域活性化を目指します。地域特性に合わせた支援で、お客様と共に成長し、東北全体を盛り上げるパートナーとして貢献します。"
                    ],
                    [
                        "title" => "受注件数を制限してお客様にしっかり寄り添う",
                        "description" => "毎月の受注件数をあえて制限することで、一人ひとりのお客様と丁寧に向き合います。お客様の魅力を深く理解し、それを適切にユーザーに届けるため、効率性よりも質を重視。漏れなく価値を伝え、ファンを増やすことで、長期的な成長に繋がる支援を行います。"
                    ],
                    [
                        "title" => "多彩な人材の協力があるからできる総合支援",
                        "description" => "ホームページ制作に加え、チラシ、名刺、動画撮影、広告運用、ロゴデザインなど、多方面から集客を支援。各分野の専門家と連携し、複数の手法を組み合わせた戦略的な提案で、集客からブランド構築まで総合的にサポートします。"
                    ],
                    [
                        "title" => "柔軟な行動力と妥協しない品質担保",
                        "description" => "フリーランスの強みを活かし、柔軟で迅速な対応が可能です。一人ひとりのニーズに寄り添いながら、企業基準の品質で安心感を提供。「早さ」だけでなく「確かさ」を追求し、地方特有の魅力を活かした高品質なサービスを実現します。"
                    ],
                ];

                foreach ($features as $feature): ?>
                    <div class="w-full py-10">
                        <h3 class="pb-28 md:pb-32 mb-0 md:mb-10 font-bold text-regular md:text-large text-center bg-[url('../img/icon_bar.svg')] bg-no-repeat bg-center md:bg-contain">
                            <?= esc_html($feature['title']); ?>
                        </h3>
                        <p class=" text-small md:text-regular leading-loose tracking-wider">
                            <?= esc_html($feature['description']); ?>
                        </p>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- Capabilities Section -->
    <section class="py-20 md:py-32 fade-in-on-scroll bg-primary">
        <h2 class="container mx-auto font-bold text-large xs:text-xl md:text-xxl text-center text-white">仙台ウェブサービスプランニングができること</h2>
        <p class="container mx-auto text-regular md:text-large text-center text-white py-24">紙媒体からホームページ、システム開発、アプリ開発、DX提案までお客様の悩みをなんでも解決します。</p>

        <div class="container mx-auto flex items-center justify-center py-t md:pt-14">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4 w-full">
                <?php 
                $capabilities = [
                    [
                        "title" => "ホームページ制作",
                        "description" => "集客に特化した設計で、SEOやMEOなど多面的な手法を駆使し、成果を追求します。ページスピードやコアウェブバイタルも改善します。",
                    ],
                    [
                        "title" => "WEBコンサルティング",
                        "description" => "データ分析を基に集客や売上の課題を解決。SEO、広告運用、SNS活用など最適な手法を提案します。",
                    ],
                    [
                        "title" => "各種デザイン",
                        "description" => "チラシ、名刺、ロゴ、マンガ制作、ドローン撮影まで幅広く対応。紙媒体とデジタルの両方でブランド価値を高めます。",
                    ],
                    [
                        "title" => "システム開発",
                        "description" => "PHPやLaravelを用いた業務管理システムやDX提案で効率化を支援。課題解決と生産性向上を実現します。",
                    ],
                ];

                foreach ($capabilities as $capability): ?>
                    <div class="w-full p-4 text-center bg-white">
                        <div class="border-4 border-primary p-4">
                            <h3 class="mb-4 font-bold text-large"><?= esc_html($capability['title']); ?></h3>
                            <p class="text-regular leading-normal tracking-wider"><?= esc_html($capability['description']); ?></p>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

	<section class="py-20 md:py-32 fade-in-on-scroll">
		<h2 class="font-bold text-large xs:text-xl md:text-xxl text-center">パートナー</h2>
		<div class="container mx-auto flex items-center justify-center pt-14">
		<div class="grid grid-cols-1 md:grid-cols-2 md:gap-8 w-full">
    <?php
    $profiles = [
        [
			'rank' => 1,
            'display' => 1,
            'image' => get_template_directory_uri() . '/img/about/partner/partner_img1.webp',
            'alt' => 'WEBコンサルティングプロフィール 1',
            'title' => 'WEBコンサル・WEBディレクション',
            'name' => 'TAKA（フリーランス・代表）',
            'description' => '仙台を拠点に活動するフリーランスのWEBコンサルタント兼WEBディレクター。長年システム会社で民間、官公庁含めた数々の案件実績があります。ホームページ制作から運用、そして売上アップにつながる戦略的なWEBコンサルティングまで幅広くサポートしています。',
            'social_links' => [
                ['url' => 'https://web-service-planning.com', 'icon' => get_template_directory_uri() . '/img/about/sns_icon1.svg'],
                ['url' => 'https://x.com/wsp_sendai', 'icon' => get_template_directory_uri() . '/img/about/sns_icon2.svg'],
				['url' => 'https://www.instagram.com/wsp_sendai/', 'icon' => get_template_directory_uri() . '/img/about/sns_icon3.svg'],
                ['url' => 'https://www.facebook.com/profile.php?id=100076228665751', 'icon' => get_template_directory_uri() . '/img/about/sns_icon4.svg'],
            ],
        ],
        [
			'rank' => 2,
            'display' => 1,
            'image' => get_template_directory_uri() . '/img/about/partner/yoshida.svg',
            'alt' => 'イラストレータプロフィール',
            'title' => 'イラストレーター',
            'name' => 'YOSHIDA（フリーランス）',
            'description' => 'イラストデザイナー、やわらかいタッチのイラストが得意でキャラクターデザインや漫画作成なども手がけている。某雑誌の編集リーダーとしても活躍。',
            'social_links' => [
                ['url' => '', 'icon' => get_template_directory_uri() . '/img/about/sns_icon1.svg'],
                ['url' => '', 'icon' => get_template_directory_uri() . '/img/about/sns_icon2.svg'],
				['url' => '', 'icon' => get_template_directory_uri() . '/img/about/sns_icon3.svg'],
                ['url' => '', 'icon' => get_template_directory_uri() . '/img/about/sns_icon4.svg'],
            ],
        ],
		[
			'rank' => 4,
            'display' => 1,
            'image' => get_template_directory_uri() . '/img/about/partner/oneder.webp',
            'alt' => 'WWEBディレクション・フロントエンジニアプロフィール',
            'title' => 'WEBディレクション・フロントエンジニア',
            'name' => 'Oneder Circle株式会社（法人）',
            'description' => 'WEB事業の他、人材紹介、介護、プロモーション活動など幅広く活動する仙台の企業。東北全域に支店を持つ。',
            'social_links' => [
                ['url' => 'https://oneder-circle.com/', 'icon' => get_template_directory_uri() . '/img/about/sns_icon1.svg'],
                ['url' => 'https://x.com/onedercircleWeb', 'icon' => get_template_directory_uri() . '/img/about/sns_icon2.svg'],
				['url' => 'https://www.instagram.com/onedercircle_official/', 'icon' => get_template_directory_uri() . '/img/about/sns_icon3.svg'],
                ['url' => 'https://www.facebook.com/profile.php?id=100057154732501', 'icon' => get_template_directory_uri() . '/img/about/sns_icon4.svg'],
            ],
        ],
		[
			'rank' => 5,
            'display' => 1,
            'image' => get_template_directory_uri() . '/img/about/partner/dindia.webp',
            'alt' => 'DTPデザイン・ドローン撮影プロフィール',
            'title' => 'DTPデザイン・ドローン撮影',
            'name' => '有限会社dindia(法人)',
            'description' => 'チラシデザイン、名刺デザイン他、ドローンによる動画撮影、キッズドローンスクールなども手がける仙台の広告会社。',
            'social_links' => [
                ['url' => 'https://www.sendai-design-dindia.com/', 'icon' => get_template_directory_uri() . '/img/about/sns_icon1.svg'],
                ['url' => '', 'icon' => get_template_directory_uri() . '/img/about/sns_icon2.svg'],
				['url' => 'https://www.instagram.com/drone_school_flyve/', 'icon' => get_template_directory_uri() . '/img/about/sns_icon3.svg'],
                ['url' => 'https://www.facebook.com/dindia.sendai/?locale=ja_JP', 'icon' => get_template_directory_uri() . '/img/about/sns_icon4.svg'],
            ],
		],
    ];

	    // ランクで並べ替え
		usort($profiles, function ($a, $b) {
			return $a['rank'] - $b['rank']; // ランクの昇順
		});
    ?>

    <?php foreach ($profiles as $profile): ?>
        <?php if ($profile['display'] === 1): // 表示フラグが1の場合のみ表示 ?>
        <div class="w-full p-4 text-center bg-white shadow-md border-2 border-clr2">
            <!-- プロフィール画像 -->
            <div class="w-60 h-60 rounded-full overflow-hidden mx-auto my-8">
                <img src="<?= esc_url($profile['image']) ?>" 
                     alt="<?= esc_attr($profile['alt']) ?>" 
                     class="w-full h-full object-contain w-auto" loading="lazy" width="100%" height="100%" draggable="false">
            </div>
            <!-- プロフィール詳細 -->
            <h3 class="mb-2 font-bold text-regular xs:text-large text-center"><?= esc_html($profile['title']) ?></h3>
            <p class="mb-4 text-center text-small font-medium"><?= esc_html($profile['name']) ?></p>
            <p class="text-small leading-normal tracking-wider text-center"><?= esc_html($profile['description']) ?></p>
            <!-- SNSリンク -->
            
            <div class="grid grid-cols-4 gap-4 w-2/3 sm:w-1/3 mx-auto py-4">
                <?php foreach ($profile['social_links'] as $link): ?>
                    <?php if (!empty($link['url'])): // URLが空でない場合のみ表示 ?>
                    <a href="<?= esc_url($link['url']) ?>" class="block" target="_blank">
                        <img src="<?= esc_url($link['icon']) ?>" 
                             alt="SNS Icon" 
                             class="w-full h-auto transition-opacity hover:opacity-80" loading="lazy" width="100%" height="100%" draggable="false">
                    </a>
                    <?php endif; ?>
                <?php endforeach; ?>
            </div>
            
        </div>
        <?php endif; ?>
    <?php endforeach; ?>
</div>


		</div>
	</section>

				</main>


<?php
get_footer();
