
<footer class="fade-in-on-scroll">


	<section class="py-20 bg-clr2 mt-20">
		<h2 class=" container mx-auto font-bold text-large md:text-xxl text-center">ウェブサービスプランニングができる事</h2>
		<div class=" container mx-auto flex items-center justify-center pt-20 md:pt-32">
			<div class="grid grid-cols-2 md:grid-cols-4 gap-4 w-full">
				
			<?php
			// リスト項目をカテゴリごとに多次元配列で定義
			$grouped_services = [
				'ホームページ制作' => [
					'コーポレートサイト',
					'ブランドサイト',
					'メディアサイト',
					'求人ホームページ',
					'LPサイト',
					'ECサイト',
					'各種ホームページ運用'
				],
				'WEBコンサルティング' => [
					'SEO対策',
					'MEO対策',
					'WEBマーケティング',
					'WEB広告運用',
					'アクセス解析・改善提案',
					'SNS運用',
					'ドローン撮影'
				],
				'デザイン' => [
					'ロゴデザイン',
					'キャラクターデザイン',
					'WEBデザイン',
					'名刺デザイン',
					'チラシデザイン',
					'看板・設置物デザイン',
					'その他販促物デザイン'
				],
				'システム開発' => [
					'WEBシステム開発',
					'アプリケーション開発',
					'DX提案'
				]
			];
			?>
				<?php foreach ($grouped_services as $category => $services) : ?>
					<div class="w-full py-10 text-center pl-2 sm:pl-6 md:pl-10">
						<h3 class="mb-10 font-bold text-small sm:text-regular md:text-large text-left"><?php echo esc_html($category); ?></h3>
						<ul class="leading-loose">
						<?php foreach ($services as $service) : ?>
							<li class="text-gray-700 text-left text-small md:text-regular">
								<?php echo esc_html($service); ?>
							</li>
						<?php endforeach; ?>
						</ul>
						
					</div>	
					<?php endforeach; ?>
			</div>
		</div>
		<p class=" container mx-auto font-bold text-regular md:text-xl text-center py-20">お困りのことがあればなんでもご相談ください！<br>
		私たちはお客様の悩みを解決する方法を知っています！</p>
		<div class="w-11/12 sm:w-2/3 lg:w-2/5 text-center mx-auto">
			<a href="<?php echo home_url('/contact'); ?>" class="text-center text-white bg-primary w-full inline-block hover:bg-opacity-80  transition-colors">
				<span class="border border-2 border-white  py-6 p-2 block m-4 font-bold text-regular md:text-large">
				ご相談はお気軽に
				</span>
			</a>
		</div>
	</section>

	<section class="w-full md:w-2/3 mx-auto py-10 grid grid-cols-1 sm:grid-cols-2 gap-4 bg-white">
		<h3 class="font-bold text-regular md:text-xl text-center flex items-center justify-center">LINEでもお気軽にご相談下さい！</h3>
		<img src="<?php echo get_template_directory_uri(); ?>/img/line_qr.webp" alt="仙台ウェブサービスプランニング（WEB SERVICE PLANNING）" class="w-1/3 mx-auto" loading="lazy" width="100%" height="100%" draggable="false">
	</section>



	<div class="logo h-full flex items-center justify-center w-full bg-primary py-24">
		<a href="<?php echo home_url(); ?>" class="h-full flex items-center p-2">
			<img src="<?php echo get_template_directory_uri(); ?>/img/logo.svg" alt="仙台ウェブサービスプランニング（WEB SERVICE PLANNING）" class="h-12" loading="lazy" width="100%" height="100%" draggable="false">
		</a>
	</div>

	<div class="text-center bg-clr2 text-x-small sm:text-small py-4">
		&copy; <?php echo date_i18n( 'Y' );?> - <?php echo get_bloginfo( 'name' );?>
	</div>
</footer>


<?php wp_footer(); ?>
</body>
</html>
