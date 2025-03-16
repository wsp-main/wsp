<?php get_header(); ?>
<main class="m-0 p-0 relative z-10">
    <!-- タブボタン -->
	<div class="flex border-b-4 border-font2">
  <button class="tab-btn py-2 md:py-6 w-1/2 text-center font-bold bg-font2 text-white text-small md:text-large" data-tab="tab1" aria-label="ホームページ制作">
    <img src="<?php echo get_template_directory_uri(); ?>/img/cost/cost_website/icon_web.svg"
         class="mx-auto w-6 md:w-10 pb-2 md:pb-4"
         data-default="icon_web.svg"
         data-selected="icon_web2.svg" loading="lazy" width="100%" height="100%" draggable="false">
    ホームページ制作
  </button>
  <button class="tab-btn py-2 md:py-6 w-1/2 text-center font-bold bg-clr2 text-primary text-small md:text-large" data-tab="tab2" aria-label="ECサイト制作">
    <img src="<?php echo get_template_directory_uri(); ?>/img/cost/cost_website/icon_cart.svg"
         class="mx-auto w-6 md:w-10 pb-2 md:pb-4"
         data-default="icon_cart.svg"
         data-selected="icon_cart2.svg" loading="lazy" width="100%" height="100%" draggable="false">
    ECサイト制作
  </button>
</div>

<!---------------------------------------------------------
タブ1コンテンツ
------------------------------------------------------------->
	<div class="tab-content" id="tab1">
<!---------------------------------------------------------
ホームページ制作プラン
------------------------------------------------------------->
		<section class="bg-clr2 py-20 md:py-32">
			<h2 class="w-11/12 md:w-2/3 mx-auto pb-32 md:pb-40 lg:pb-52 font-bold text-large sm:text-xl md:text-xxl text-center bg-[url('../img/icon_bar.svg')] bg-no-repeat bg-center md:bg-contain">ホームページ制作プラン</h2>
			<div class="container mx-auto flex items-center justify-center">
				<div class="grid grid-cols-1 md:grid-cols-3 gap-8 w-full">

					<div class="w-full bg-white shadow">
						<div class="w-full bg-primary">
							<p class="text-center font-bold text-white py-4 md:py-10 text-regular sm:text-large lg:text-xl">会社概要プラン</p>
						</div>
						<div class="px-6 py-4">
							<p class="w-full py-2 text-small leading-loose border-b-4 border-clr2">簡易的な名刺代わりのホームページが欲しい方におススメ！スモールスタートでホームページを作って用途に合わせて徐々に大きく育てることで効果が出やすくなります。</p>
							<div class="grid grid-cols-3 gap-2 w-full py-2 border-b-4 border-clr2">
								<p class="col-span-2 text-small">ページ数</p>
								<p class="col-span-1 text-small text-center">3ページ</p>
							</div>
							<div class="grid grid-cols-3 gap-2 w-full py-2 border-b-4 border-clr2">
								<p class="col-span-2 text-small">デザイン</p>
								<p class="col-span-1 text-small text-center">オリジナル</p>
							</div>
							<div class="grid grid-cols-3 gap-2 w-full py-2 border-b-4 border-clr2">
								<p class="col-span-2 text-small flex items-center">モバイル対応</p>
								<p class="col-span-1 bg-[url('../img/cost/cost_website/icon_maru.svg')] bg-no-repeat bg-center bg-contain"></p>
							</div>
							<div class="grid grid-cols-3 gap-2 w-full py-2 border-b-4 border-clr2">
								<p class="col-span-2 text-small flex items-center">コアウェブバイタル</p>
								<p class="col-span-1 bg-[url('../img/cost/cost_website/icon_maru.svg')] bg-no-repeat bg-center bg-contain"></p>
							</div>
							<div class="grid grid-cols-3 gap-2 w-full py-2 border-b-4 border-clr2">
								<p class="col-span-2 text-small flex items-center">更新機能</p>
								<p class="col-span-1 bg-[url('../img/cost/cost_website/icon_batsu.svg')] bg-no-repeat bg-center bg-contain"></p>
							</div>
							<div class="grid grid-cols-3 gap-2 w-full py-2 border-b-4 border-clr2">
								<p class="col-span-2 text-small flex items-center">お問い合わせフォーム</p>
								<p class="col-span-1 bg-[url('../img/cost/cost_website/icon_batsu.svg')] bg-no-repeat bg-center bg-contain"></p>
							</div>
							<div class="grid grid-cols-3 gap-2 w-full py-2 border-b-4 border-clr2">
								<p class="col-span-2 text-small flex items-center">SEO最適化</p>
								<p class="col-span-1 bg-[url('../img/cost/cost_website/icon_sankaku.svg')] bg-no-repeat bg-center bg-contain"></p>
							</div>
							<div class="grid grid-cols-3 gap-2 w-full py-2 border-b-4 border-clr2">
								<p class="col-span-2 text-small flex items-center">Googleマップ登録</p>
								<p class="col-span-1 bg-[url('../img/cost/cost_website/icon_batsu.svg')] bg-no-repeat bg-center bg-contain"></p>
							</div>
							<div class="grid grid-cols-3 gap-2 w-full py-2 border-b-4 border-clr2">
								<p class="col-span-2 text-small">納期</p>
								<p class="col-span-1 text-small text-center">20日</p>
							</div>
							<div class="grid grid-cols-3 gap-2 w-full py-2 border-b-4 border-clr2">
								<p class="col-span-3 text-small text-center text-clr1 font-bold">制作オプション有料</p>
							</div>
							<p class="text-clr1 font-bold text-xl text-center pt-6 pb-4">¥100,000</p>
						</div>
					</div>

					<div class="w-full bg-white shadow">
						<div class="w-full bg-clr3">
							<p class="text-center font-bold text-white py-4 md:py-10 text-regular sm:text-large lg:text-xl">営業支援プラン</p>
						</div>
						<div class="px-6 py-4">
								<p class="w-full py-2 text-small leading-loose border-b-4 border-clr2">営業ツールとしての集客を期待できるプラン！SEO対策などの検索順位の対応もしっかり行いコアウェブバイタルは平均90以上を目指して構築いたします！中規模サイトにおススメ！
								</p>
								<div class="grid grid-cols-3 gap-2 w-full py-2 border-b-4 border-clr2">
									<p class="col-span-2 text-small">ページ数</p>
									<p class="col-span-1 text-small text-center">5ページ</p>
								</div>
								<div class="grid grid-cols-3 gap-2 w-full py-2 border-b-4 border-clr2">
									<p class="col-span-2 text-small">デザイン</p>
									<p class="col-span-1 text-small text-center">オリジナル</p>
								</div>
								<div class="grid grid-cols-3 gap-2 w-full py-2 border-b-4 border-clr2">
									<p class="col-span-2 text-small flex items-center">モバイル対応</p>
									<p class="col-span-1 bg-[url('../img/cost/cost_website/icon_maru.svg')] bg-no-repeat bg-center bg-contain"></p>
								</div>
								<div class="grid grid-cols-3 gap-2 w-full py-2 border-b-4 border-clr2">
									<p class="col-span-2 text-small flex items-center">コアウェブバイタル</p>
									<p class="col-span-1 bg-[url('../img/cost/cost_website/icon_maru.svg')] bg-no-repeat bg-center bg-contain"></p>
								</div>
								<div class="grid grid-cols-3 gap-2 w-full py-2 border-b-4 border-clr2">
									<p class="col-span-2 text-small flex items-center">更新機能</p>
									<p class="col-span-1 bg-[url('../img/cost/cost_website/icon_maru.svg')] bg-no-repeat bg-center bg-contain"></p>
								</div>
								<div class="grid grid-cols-3 gap-2 w-full py-2 border-b-4 border-clr2">
									<p class="col-span-2 text-small flex items-center">お問い合わせフォーム</p>
									<p class="col-span-1 bg-[url('../img/cost/cost_website/icon_maru.svg')] bg-no-repeat bg-center bg-contain"></p>
								</div>
								<div class="grid grid-cols-3 gap-2 w-full py-2 border-b-4 border-clr2">
									<p class="col-span-2 text-small flex items-center">SEO最適化</p>
									<p class="col-span-1 bg-[url('../img/cost/cost_website/icon_maru.svg')] bg-no-repeat bg-center bg-contain"></p>
								</div>
								<div class="grid grid-cols-3 gap-2 w-full py-2 border-b-4 border-clr2">
									<p class="col-span-2 text-small flex items-center">Googleマップ登録</p>
									<p class="col-span-1 bg-[url('../img/cost/cost_website/icon_maru.svg')] bg-no-repeat bg-center bg-contain"></p>
								</div>
								<div class="grid grid-cols-3 gap-2 w-full py-2 border-b-4 border-clr2">
									<p class="col-span-2 text-small">納期</p>
									<p class="col-span-1 text-small text-center">30日</p>
								</div>
								<div class="grid grid-cols-3 gap-2 w-full py-2 border-b-4 border-clr2">
									<p class="col-span-3 text-small text-center text-clr1 font-bold">制作オプション一部無料</p>
								</div>
								<p class="text-clr1 font-bold text-xl text-center pt-6 pb-4">¥200,000</p>
						</div>
					</div>

					<div class="w-full bg-white shadow">
						<div class="w-full bg-primary">
							<p class="text-center font-bold text-white py-4 md:py-10 text-regular sm:text-large lg:text-xl">集客アッププラン</p>
						</div>
						<div class="px-6 py-4">
								<p class="w-full py-2 text-small leading-loose border-b-4 border-clr2">SEO対策、MEO対策、ページスピード改善、制作オプション全てに対応した集客に特化したプラン！コアウェブバイタルも平均95以上を目標としているので、検索順位も上位に入りやすくなります！
								</p>
								<div class="grid grid-cols-3 gap-2 w-full py-2 border-b-4 border-clr2">
									<p class="col-span-2 text-small">ページ数</p>
									<p class="col-span-1 text-small text-center">6ページ</p>
								</div>
								<div class="grid grid-cols-3 gap-2 w-full py-2 border-b-4 border-clr2">
									<p class="col-span-2 text-small">デザイン</p>
									<p class="col-span-1 text-small text-center">オリジナル</p>
								</div>
								<div class="grid grid-cols-3 gap-2 w-full py-2 border-b-4 border-clr2">
									<p class="col-span-2 text-small flex items-center">モバイル対応</p>
									<p class="col-span-1 bg-[url('../img/cost/cost_website/icon_maru.svg')] bg-no-repeat bg-center bg-contain"></p>
								</div>
								<div class="grid grid-cols-3 gap-2 w-full py-2 border-b-4 border-clr2">
									<p class="col-span-2 text-small flex items-center">コアウェブバイタル</p>
									<p class="col-span-1 bg-[url('../img/cost/cost_website/icon_maru2.svg')] bg-no-repeat bg-center bg-contain"></p>
								</div>
								<div class="grid grid-cols-3 gap-2 w-full py-2 border-b-4 border-clr2">
									<p class="col-span-2 text-small flex items-center">更新機能</p>
									<p class="col-span-1 bg-[url('../img/cost/cost_website/icon_maru2.svg')] bg-no-repeat bg-center bg-contain"></p>
								</div>
								<div class="grid grid-cols-3 gap-2 w-full py-2 border-b-4 border-clr2">
									<p class="col-span-2 text-small flex items-center">お問い合わせフォーム</p>
									<p class="col-span-1 bg-[url('../img/cost/cost_website/icon_maru2.svg')] bg-no-repeat bg-center bg-contain"></p>
								</div>
								<div class="grid grid-cols-3 gap-2 w-full py-2 border-b-4 border-clr2">
									<p class="col-span-2 text-small flex items-center">SEO最適化</p>
									<p class="col-span-1 bg-[url('../img/cost/cost_website/icon_maru2.svg')] bg-no-repeat bg-center bg-contain"></p>
								</div>
								<div class="grid grid-cols-3 gap-2 w-full py-2 border-b-4 border-clr2">
									<p class="col-span-2 text-small flex items-center">Googleマップ登録</p>
									<p class="col-span-1 bg-[url('../img/cost/cost_website/icon_maru2.svg')] bg-no-repeat bg-center bg-contain"></p>
								</div>
								<div class="grid grid-cols-3 gap-2 w-full py-2 border-b-4 border-clr2">
									<p class="col-span-2 text-small">納期</p>
									<p class="col-span-1 text-small text-center">40日</p>
								</div>
								<div class="grid grid-cols-3 gap-2 w-full py-2 border-b-4 border-clr2">
									<p class="col-span-3 text-small text-center text-clr1 font-bold">制作オプションほぼ無料</p>
								</div>
								<p class="text-clr1 font-bold text-xl text-center pt-6 pb-4">¥320,000</p>
						</div>
					</div>
				</div>
			</div>
		</section>
<!---------------------------------------------------------
ホームページ制作プラン　ここまで
------------------------------------------------------------->
<!---------------------------------------------------------
各項目の説明
------------------------------------------------------------->
		<div class="flex items-center justify-center bg-clr2 pb-20 md:pb-32">
			<div class="grid grid-cols-1 md:grid-cols-2 md:grid-cols-4 gap-8 container mx-auto">
				<div class="w-full bg-white shadow p-4">
					<h3 class="py-2 text-center font-bold bg-primary text-white">ページ数</h3>
					<p class="leading-loose py-2 text-small">最初から作成可能なページの数です。TOPページは必ず含まれるのでTOPページを除いたページ数の分だけ好きなページを作成できます。</p>
				</div>
				<div class="w-full bg-white shadow p-4">
					<h3 class="py-2 text-center font-bold bg-primary text-white">デザイン</h3>
					<p class="leading-loose py-2 text-small">競合他社との差別化や強みを最大限活かすために、オリジナルのデザインで提案いたします。</p>
				</div>
				<div class="w-full bg-white shadow p-4">
					<h3 class="py-2 text-center font-bold bg-primary text-white">モバイル対応</h3>
					<p class="leading-loose py-2 text-small">サイト内の各コンテンツはスマートフォンやタブレットで最も可読性の高い、見やすいデザインに再配置して表示します。</p>
				</div>
				<div class="w-full bg-white shadow p-4">
					<h3 class="py-2 text-center font-bold bg-primary text-white">ページ速度改善</h3>
					<p class="leading-loose py-2 text-small">コアウェブバイタルというGoogleの指標に沿って、構築することでより速くホームページを表示し、SEOにも強いサイトを構築します。</p>
				</div>
				<div class="w-full bg-white shadow p-4">
					<h3 class="py-2 text-center font-bold bg-primary text-white">更新機能</h3>
					<p class="leading-loose py-2 text-small">WordPressというシステムで構築し、会社の新着情報やブログなどを発信できるようにしてSEO強化や情報発信力を高めます。</p>
				</div>
				<div class="w-full bg-white shadow p-4">
					<h3 class="py-2 text-center font-bold bg-primary text-white">お問い合わせフォーム</h3>
					<p class="leading-loose py-2 text-small">電話以外のお問い合わせを持ち、メールでもお問い合わせ可能にすることで集客や問い合わせに強いホームぺージを作ります。</p>
				</div>
				<div class="w-full bg-white shadow p-4">
					<h3 class="py-2 text-center font-bold bg-primary text-white">SEO最適化</h3>
					<p class="leading-loose py-2 text-small">特定のキーワードで上位表示するように内部SEO対策を施したり、構造化を正しく行うことで評価を上げて検索上位表示に貢献します。</p>
				</div>
				<div class="w-full bg-white shadow p-4">
					<h3 class="py-2 text-center font-bold bg-primary text-white">Googleマップ登録</h3>
					<p class="leading-loose py-2 text-small">Googleマップへの登録及びホームページとの正しい情報の整理までを行います。これによりGoogleマップでの検索上位表示やSEOに関係なく検索上位表示が可能になります。</p>
				</div>
			</div>
		</div>
<!---------------------------------------------------------
下三角
------------------------------------------------------------->
		<div class="triangle-wrapper3"></div>
<!---------------------------------------------------------
製作オプション
------------------------------------------------------------->
		<section class=" fade-in-on-scroll bg-white">
			<h2 class="font-bold text-large sm:text-xl md:text-xxl text-center">制作オプション</h2>
			<div class="container mx-auto flex items-center justify-center py-20 md:py-32">
				<div class="grid grid-cols-1 md:grid-cols-2 gap-8 w-full">
				<div class="w-full bg-white">
						<h3 class="bg-clr2 py-4 text-center font-bold">環境構築</h3>
						<div class="grid grid-cols-3 gap-2 w-full py-4 border-b-4 border-clr2">
							<p class="col-span-2 text-small">他社所有サーバー利用</p>
							<p class="col-span-1 text-small text-right font-bold">+¥30,000</p>
						</div>
						<div class="grid grid-cols-3 gap-2 w-full py-4 border-b-4 border-clr2">
							<p class="col-span-2 text-small">他社所有ドメイン利用</p>
							<p class="col-span-1 text-small text-right font-bold">+¥20,000</p>
						</div>
						<div class="grid grid-cols-3 gap-2 w-full py-4 border-b-4 border-clr2">
							<p class="col-span-2 text-small">ドメイン移管</p>
							<p class="col-span-1 text-small text-right font-bold">+¥15,000</p>
						</div>
						<div class="grid grid-cols-3 gap-2 w-full py-4 border-b-4 border-clr2">
							<p class="col-span-2 text-small">メールサーバー移管</p>
							<p class="col-span-1 text-small text-right font-bold">+¥50,000</p>
						</div>
						<div class="grid grid-cols-3 gap-2 w-full py-4 border-b-4 border-clr2">
							<p class="col-span-2 text-small">メールアドレス移管</p>
							<p class="col-span-1 text-small text-right font-bold">+¥1,000/1人</p>
						</div>
					</div>
					<div class="w-full bg-white">
						<h3 class="bg-clr2 py-4 text-center font-bold">ページ制作</h3>
						<div class="grid grid-cols-3 gap-2 w-full py-4 border-b-4 border-clr2">
							<p class="col-span-2 text-small">ページ追加(1P)</p>
							<p class="col-span-1 text-small text-right font-bold">¥20,000</p>
						</div>
						<div class="grid grid-cols-3 gap-2 w-full py-4 border-b-4 border-clr2">
							<p class="col-span-2 text-small">コンテンツ追加</p>
							<p class="col-span-1 text-small text-right font-bold">¥5,000</p>
						</div>
						<div class="grid grid-cols-3 gap-2 w-full py-4 border-b-4 border-clr2">
							<p class="col-span-2 text-small">お問い合わせフォーム追加(5項目)</p>
							<p class="col-span-1 text-small text-right font-bold">¥20,000</p>
						</div>
						<div class="grid grid-cols-3 gap-2 w-full py-4 border-b-4 border-clr2">
							<p class="col-span-2 text-small">お問い合わせ項目追加</p>
							<p class="col-span-1 text-small text-right font-bold">¥4,000</p>
						</div>
						<div class="grid grid-cols-3 gap-2 w-full py-4 border-b-4 border-clr2">
							<p class="col-span-2 text-small">デザイン変更（1P）</p>
							<p class="col-span-1 text-small text-right font-bold">¥20,000</p>
						</div>
					</div>
					<div class="w-full bg-white">
						<h3 class="bg-clr2 py-4 text-center font-bold">リッチコンテンツ</h3>
						<div class="grid grid-cols-3 gap-2 w-full py-4 border-b-4 border-clr2">
							<p class="col-span-2 text-small">追従ヘッダー</p>
							<p class="col-span-1 text-small text-right font-bold">¥5,000</p>
						</div>
						<div class="grid grid-cols-3 gap-2 w-full py-4 border-b-4 border-clr2">
							<p class="col-span-2 text-small">リッチメニュー</p>
							<p class="col-span-1 text-small text-right font-bold">¥15,000</p>
						</div>
						<div class="grid grid-cols-3 gap-2 w-full py-4 border-b-4 border-clr2">
							<p class="col-span-2 text-small">追従コンテンツ</p>
							<p class="col-span-1 text-small text-right font-bold">¥15,000</p>
						</div>
						<div class="grid grid-cols-3 gap-2 w-full py-4 border-b-4 border-clr2">
							<p class="col-span-2 text-small">TOPへ戻るボタン</p>
							<p class="col-span-1 text-small text-right font-bold">¥3,000</p>
						</div>
						<div class="grid grid-cols-3 gap-2 w-full py-4 border-b-4 border-clr2">
							<p class="col-span-2 text-small">動画・アニメーション追加</p>
							<p class="col-span-1 text-small text-right font-bold">¥20,000</p>
						</div>
						<div class="grid grid-cols-3 gap-2 w-full py-4 border-b-4 border-clr2">
							<p class="col-span-2 text-small">ポップアップ表示</p>
							<p class="col-span-1 text-small text-right font-bold">¥20,000</p>
						</div>
					</div>
					<div class="w-full bg-white">
						<h3 class="bg-clr2 py-4 text-center font-bold">制作オプション</h3>
						<div class="grid grid-cols-3 gap-2 w-full py-4 border-b-4 border-clr2">
							<p class="col-span-2 text-small">ファビコン作成</p>
							<p class="col-span-1 text-small text-right font-bold">¥5,000</p>
						</div>
						<div class="grid grid-cols-3 gap-2 w-full py-4 border-b-4 border-clr2">
							<p class="col-span-2 text-small">Googleマップ登録</p>
							<p class="col-span-1 text-small text-right font-bold">¥50,000</p>
						</div>
						<div class="grid grid-cols-3 gap-2 w-full py-4 border-b-4 border-clr2">
							<p class="col-span-2 text-small">追加投稿機能</p>
							<p class="col-span-1 text-small text-right font-bold">¥50,000</p>
						</div>
						<div class="grid grid-cols-3 gap-2 w-full py-4 border-b-4 border-clr2">
							<p class="col-span-2 text-small">ページスピード改善（CWV90以上）</p>
							<p class="col-span-1 text-small text-right font-bold">¥40,000/1P</p>
						</div>
						<div class="grid grid-cols-3 gap-2 w-full py-4 border-b-4 border-clr2">
							<p class="col-span-2 text-small">SNS連携（X,Facebook）</p>
							<p class="col-span-1 text-small text-right font-bold">¥15,000</p>
						</div>
						<div class="grid grid-cols-3 gap-2 w-full py-4 border-b-4 border-clr2">
							<p class="col-span-2 text-small">SNS連携(Instagram)</p>
							<p class="col-span-1 text-small text-right font-bold">¥30,000</p>
						</div>
					</div>
					
				</div>
			</div>
		</section>
<!---------------------------------------------------------
定期運用保守
------------------------------------------------------------->
		<section class="bg-clr2 py-20 md:py-32">
			<h2 class="w-11/12 md:w-2/3 mx-auto pb-32 md:pb-40 lg:pb-52 font-bold text-large sm:text-xl md:text-xxl text-center bg-[url('../img/icon_bar.svg')] bg-no-repeat bg-center md:bg-contain">定期運用保守</h2>
			<div class="container mx-auto flex items-center justify-center">
				<div class="grid grid-cols-1 md:grid-cols-3 gap-8 w-full">
					<div class="w-full bg-white shadow">
						<div class="w-full bg-primary">
							<p class="text-center font-bold text-white py-4 md:py-10 text-regular sm:text-large lg:text-xl">スポットサポート</p>
						</div>
						<div class="px-6 py-4">
								<p class="w-full py-2 text-small leading-loose border-b-4 border-clr2">最低限の維持費のみで運用は自社で行う場合におススメ！ただし、更新を依頼する場合はオプション費用が発生し少し割高になります。</p>
								<div class="grid grid-cols-3 gap-2 w-full py-2 border-b-4 border-clr2">
									<p class="col-span-2 text-small flex items-center">サーバー管理</p>
									<p class="col-span-1 bg-[url('../img/cost/cost_website/icon_maru.svg')] bg-no-repeat bg-center bg-contain"></p>
								</div>
								<div class="grid grid-cols-3 gap-2 w-full py-2 border-b-4 border-clr2">
									<p class="col-span-2 text-small flex items-center">ドメイン管理</p>
									<p class="col-span-1 bg-[url('../img/cost/cost_website/icon_maru.svg')] bg-no-repeat bg-center bg-contain"></p>
								</div>
								<div class="grid grid-cols-3 gap-2 w-full py-2 border-b-4 border-clr2">
									<p class="col-span-2 text-small flex items-center">セキュリティ対策</p>
									<p class="col-span-1 bg-[url('../img/cost/cost_website/icon_sankaku.svg')] bg-no-repeat bg-center bg-contain"></p>
								</div>
								<div class="grid grid-cols-3 gap-2 w-full py-2 border-b-4 border-clr2">
									<p class="col-span-2 text-small flex items-center">死活監視</p>
									<p class="col-span-1 bg-[url('../img/cost/cost_website/icon_batsu.svg')] bg-no-repeat bg-center bg-contain"></p>
								</div>
								<div class="grid grid-cols-3 gap-2 w-full py-2 border-b-4 border-clr2">
									<p class="col-span-2 text-small flex items-center">定期バックアップ</p>
									<p class="col-span-1 bg-[url('../img/cost/cost_website/icon_batsu.svg')] bg-no-repeat bg-center bg-contain"></p>
								</div>
								<div class="grid grid-cols-3 gap-2 w-full py-2 border-b-4 border-clr2">
									<p class="col-span-2 text-small flex items-center">メールサーバー</p>
									<p class="col-span-1 bg-[url('../img/cost/cost_website/icon_batsu.svg')] bg-no-repeat bg-center bg-contain"></p>
								</div>
								<div class="grid grid-cols-3 gap-2 w-full py-2 border-b-4 border-clr2">
									<p class="col-span-2 text-small flex items-center">メールアドレス</p>
									<p class="col-span-1 bg-[url('../img/cost/cost_website/icon_batsu.svg')] bg-no-repeat bg-center bg-contain"></p>
								</div>
								<div class="grid grid-cols-3 gap-2 w-full py-2 border-b-4 border-clr2">
									<p class="col-span-2 text-small flex items-center">無料更新枠</p>
									<p class="col-span-1 bg-[url('../img/cost/cost_website/icon_batsu.svg')] bg-no-repeat bg-center bg-contain"></p>
								</div>
								<p class="text-clr1 font-bold text-xl text-center pt-6 pb-4">¥10,000</p>
						</div>

					</div>
					<div class="w-full bg-white shadow">
						<div class="w-full bg-clr3">
							<p class="text-center font-bold text-white py-4 md:py-10 text-regular sm:text-large lg:text-xl">定期管理サポート</p>
						</div>
						<div class="px-6 py-4">
								<p class="w-full py-2 text-small leading-loose border-b-4 border-clr2">定期的なホームページの更新を検討している方におススメ！セキュリティ面もしっかり対応し、何かあったときも迅速に対応可能！</p>
								<div class="grid grid-cols-3 gap-2 w-full py-2 border-b-4 border-clr2">
									<p class="col-span-2 text-small flex items-center">サーバー管理</p>
									<p class="col-span-1 bg-[url('../img/cost/cost_website/icon_maru.svg')] bg-no-repeat bg-center bg-contain"></p>
								</div>
								<div class="grid grid-cols-3 gap-2 w-full py-2 border-b-4 border-clr2">
									<p class="col-span-2 text-small flex items-center">ドメイン管理</p>
									<p class="col-span-1 bg-[url('../img/cost/cost_website/icon_maru.svg')] bg-no-repeat bg-center bg-contain"></p>

								</div>
								<div class="grid grid-cols-3 gap-2 w-full py-2 border-b-4 border-clr2">
									<p class="col-span-2 text-small flex items-center">セキュリティ対策</p>
									<p class="col-span-1 bg-[url('../img/cost/cost_website/icon_maru.svg')] bg-no-repeat bg-center bg-contain"></p>

								</div>
								<div class="grid grid-cols-3 gap-2 w-full py-2 border-b-4 border-clr2">
									<p class="col-span-2 text-small flex items-center">死活監視</p>
									<p class="col-span-1 bg-[url('../img/cost/cost_website/icon_maru.svg')] bg-no-repeat bg-center bg-contain"></p>

								</div>
								<div class="grid grid-cols-3 gap-2 w-full py-2 border-b-4 border-clr2">
									<p class="col-span-2 text-small flex items-center">定期バックアップ</p>
									<p class="col-span-1 bg-[url('../img/cost/cost_website/icon_maru.svg')] bg-no-repeat bg-center bg-contain"></p>

								</div>
								<div class="grid grid-cols-3 gap-2 w-full py-2 border-b-4 border-clr2">
									<p class="col-span-2 text-small flex items-center">メールサーバー</p>
									<p class="col-span-1 bg-[url('../img/cost/cost_website/icon_maru.svg')] bg-no-repeat bg-center bg-contain"></p>

								</div>
								<div class="grid grid-cols-3 gap-2 w-full py-2 border-b-4 border-clr2">
									<p class="col-span-2 text-small flex items-center">メールアドレス</p>
									<p class="col-span-1 text-small text-center">10人</p>
								</div>
								<div class="grid grid-cols-3 gap-2 w-full py-2 border-b-4 border-clr2">
									<p class="col-span-2 text-small flex items-center">無料更新枠</p>
									<p class="col-span-1 text-small text-center">¥5,000無料</p>
								</div>
								<p class="text-clr1 font-bold text-xl text-center pt-6 pb-4">¥15,000</p>
						</div>
					</div>
					<div class="w-full bg-white shadow">
						<div class="w-full bg-primary">
							<p class="text-center font-bold text-white py-4 md:py-10 text-regular sm:text-large lg:text-xl">しっかり安心サポート</p>
						</div>
						<div class="px-6 py-4">
								<p class="w-full py-2 text-small leading-loose border-b-4 border-clr2">セキュリティから死活監視、頻繁な更新まで全てお任せ！会社のホームページにもしものことがあってもしっかりデータを保存してスグに対応できます！</p>
								<div class="grid grid-cols-3 gap-2 w-full py-2 border-b-4 border-clr2">
									<p class="col-span-2 text-small flex items-center">サーバー管理</p>
									<p class="col-span-1 bg-[url('../img/cost/cost_website/icon_maru.svg')] bg-no-repeat bg-center bg-contain"></p>
								</div>
								<div class="grid grid-cols-3 gap-2 w-full py-2 border-b-4 border-clr2">
									<p class="col-span-2 text-small flex items-center">ドメイン管理</p>
									<p class="col-span-1 bg-[url('../img/cost/cost_website/icon_maru.svg')] bg-no-repeat bg-center bg-contain"></p>
								</div>
								<div class="grid grid-cols-3 gap-2 w-full py-2 border-b-4 border-clr2">
									<p class="col-span-2 text-small flex items-center">セキュリティ対策</p>
									<p class="col-span-1 bg-[url('../img/cost/cost_website/icon_maru2.svg')] bg-no-repeat bg-center bg-contain"></p>
								</div>
								<div class="grid grid-cols-3 gap-2 w-full py-2 border-b-4 border-clr2">
									<p class="col-span-2 text-small flex items-center">死活監視</p>
									<p class="col-span-1 bg-[url('../img/cost/cost_website/icon_maru2.svg')] bg-no-repeat bg-center bg-contain"></p>
								</div>
								<div class="grid grid-cols-3 gap-2 w-full py-2 border-b-4 border-clr2">
									<p class="col-span-2 text-small flex items-center">定期バックアップ</p>
									<p class="col-span-1 bg-[url('../img/cost/cost_website/icon_maru2.svg')] bg-no-repeat bg-center bg-contain"></p>
								</div>
								<div class="grid grid-cols-3 gap-2 w-full py-2 border-b-4 border-clr2">
									<p class="col-span-2 text-small flex items-center">メールサーバー</p>
									<p class="col-span-1 bg-[url('../img/cost/cost_website/icon_maru.svg')] bg-no-repeat bg-center bg-contain"></p>
								</div>
								<div class="grid grid-cols-3 gap-2 w-full py-2 border-b-4 border-clr2">
									<p class="col-span-2 text-small flex items-center">メールアドレス</p>
									<p class="col-span-1 text-small text-center">30人</p>
								</div>
								<div class="grid grid-cols-3 gap-2 w-full py-2 border-b-4 border-clr2">
									<p class="col-span-2 text-small flex items-center">無料更新枠</p>
									<p class="col-span-1 text-small text-center">¥8,000無料</p>
								</div>
								<p class="text-clr1 font-bold text-xl text-center pt-6 pb-4">¥25,000</p>
						</div>
					</div>
				</div>
			</div>
		</section>
		<div class="triangle-wrapper3"></div>
<!---------------------------------------------------------
運用保守オプション
------------------------------------------------------------->		
		<section class=" fade-in-on-scroll bg-white">
			<h2 class="font-bold text-large sm:text-xl md:text-xxl text-center">運用保守オプション</h2>
			<div class="container mx-auto flex items-center justify-center py-20 md:py-32">
				<div class="grid grid-cols-1 md:grid-cols-2 gap-8 w-full">
					<div class="w-full bg-white">
						<h3 class="bg-clr2 py-4 text-center font-bold">運用オプション</h3>
						<div class="grid grid-cols-3 gap-2 w-full py-4 border-b-4 border-clr2">
							<p class="col-span-2 text-small">ドメイン管理（.jp,.co.jp）</p>
							<p class="col-span-1 text-small text-right font-bold">¥3,000/月</p>
						</div>
						<div class="grid grid-cols-3 gap-2 w-full py-4 border-b-4 border-clr2">
							<p class="col-span-2 text-small">メールアドレス追加（1件）</p>
							<p class="col-span-1 text-small text-right font-bold">¥500/月</p>
						</div>
						<div class="grid grid-cols-3 gap-2 w-full py-4 border-b-4 border-clr2">
							<p class="col-span-2 text-small">修正・更新（1時間）</p>
							<p class="col-span-1 text-small text-right font-bold">¥2,500/月</p>
						</div>
					</div>
					<div class="w-full bg-white">
						<h3 class="bg-clr2 py-4 text-center font-bold">セキュリティオプション</h3>
						<div class="grid grid-cols-3 gap-2 w-full py-4 border-b-4 border-clr2">
							<p class="col-span-2 text-small">定期バックアップ（1回/毎日）</p>
							<p class="col-span-1 text-small text-right font-bold">¥2,000/月</p>
						</div>
						<div class="grid grid-cols-3 gap-2 w-full py-4 border-b-4 border-clr2">
							<p class="col-span-2 text-small">定期バックアップ（1回/毎週）</p>
							<p class="col-span-1 text-small text-right font-bold">¥1,000/月</p>
						</div>
						<div class="grid grid-cols-3 gap-2 w-full py-4 border-b-4 border-clr2">
							<p class="col-span-2 text-small">セキュリティ対策強化</p>
							<p class="col-span-1 text-small text-right font-bold">¥3,000/月</p>
						</div>
						<div class="grid grid-cols-3 gap-2 w-full py-4 border-b-4 border-clr2">
							<p class="col-span-2 text-small">死活監視追加</p>
							<p class="col-span-1 text-small text-right font-bold">¥1,000/月</p>
						</div>
					</div>
					<div class="w-full bg-white">
						<h3 class="bg-clr2 py-4 text-center font-bold">スポット対応</h3>
						<div class="grid grid-cols-3 gap-2 w-full py-4 border-b-4 border-clr2">
							<p class="col-span-2 text-small">WordPressアップデート対応</p>
							<p class="col-span-1 text-small text-right font-bold">¥60,000/1回</p>
						</div>
						<div class="grid grid-cols-3 gap-2 w-full py-4 border-b-4 border-clr2">
							<p class="col-span-2 text-small">プラグインアップデート対応</p>
							<p class="col-span-1 text-small text-right font-bold">¥30,000/1回</p>
						</div>
						<div class="grid grid-cols-3 gap-2 w-full py-4 border-b-4 border-clr2">
							<p class="col-span-2 text-small">ハッキング・障害復旧作業</p>
							<p class="col-span-1 text-small text-right font-bold">¥200,000~</p>
						</div>
						
					</div>
					<div class="w-full bg-white">
						<h3 class="bg-clr2 py-4 text-center font-bold">アクセス解析</h3>
						<div class="grid grid-cols-3 gap-2 w-full py-4 border-b-4 border-clr2">
							<p class="col-span-2 text-small">Goolgeアナリティクス導入</p>
							<p class="col-span-1 text-small text-right font-bold">¥5,000</p>
						</div>
						<div class="grid grid-cols-3 gap-2 w-full py-4 border-b-4 border-clr2">
							<p class="col-span-2 text-small">アクセス解析レポート</p>
							<p class="col-span-1 text-small text-right font-bold">¥40,000</p>
						</div>
						<div class="grid grid-cols-3 gap-2 w-full py-4 border-b-4 border-clr2">
							<p class="col-span-2 text-small">Googleマップ解析レポート</p>
							<p class="col-span-1 text-small text-right font-bold">¥30,000</p>
						</div>
						
					</div>
				</div>
			</div>
		</section>
<!---------------------------------------------------------
その他ご提案
------------------------------------------------------------->				
		<section class=" fade-in-on-scroll bg-white mx-auto">
			<h2 class="font-bold text-large text-white lg:text-xl text-center py-6 bg-font2">その他のご提案</h2>

			<p class="leading-loose container text-regular text-center mx-auto pt-20">ホームページを活用してより効果の高い集客を実現するには、常にPDCAを回して改善を続けていくことが大切です。<br>しかし、PDCAを行うには専門の知識と多岐に渡る調査が必要となり、正しくPDCAを回している企業は多くありません。私たちはWEBマーケティングのスキルとWEBコンサルティングのスキルを活用してお客様の変わりにホームページ改善提案や集客力向上のための施策を定期的に行っていきます。<br>まずは3ヶ月試してみてその効果を実感してみてください。</p>
			<div class="container mx-auto flex items-center justify-center py-20 md:py-32">
				<div class="grid grid-cols-1 md:grid-cols-2 gap-8 w-full">
					<div class="w-full bg-white">
						<h3 class="bg-clr2 py-4 text-center font-bold">WEBマーケティング</h3>
						<div class="grid grid-cols-3 gap-2 w-full py-4 border-b-4 border-clr2">
							<p class="col-span-2 text-small">Googleマップ上位表示施策（MEO）</p>
							<p class="col-span-1 text-small text-right font-bold">¥30,000/月（最低3ヶ月）</p>
						</div>
						<div class="grid grid-cols-3 gap-2 w-full py-4 border-b-4 border-clr2">
							<p class="col-span-2 text-small">コンテンツマーケティング(SEO)</p>
							<p class="col-span-1 text-small text-right font-bold">¥60,000/月（最低3ヶ月）</p>
						</div>
						<div class="grid grid-cols-3 gap-2 w-full py-4 border-b-4 border-clr2">
							<p class="col-span-2 text-small">SNSマーケティング</p>
							<p class="col-span-1 text-small text-right font-bold">¥50,000/月（最低3ヶ月）</p>
						</div>
					</div>
					<div class="w-full bg-white">
						<h3 class="bg-clr2 py-4 text-center font-bold">WEBコンサルティング</h3>
						<div class="grid grid-cols-3 gap-2 w-full py-4 border-b-4 border-clr2">
							<p class="col-span-2 text-small">ホームページ改善・集客提案</p>
							<p class="col-span-1 text-small text-right font-bold">¥35,000/月（最低3ヶ月）</p>
						</div>
						<div class="grid grid-cols-3 gap-2 w-full py-4 border-b-4 border-clr2">
							<p class="col-span-2 text-small">ホームページ改善・集客提案＆改善作業</p>
							<p class="col-span-1 text-small text-right font-bold">¥150,000/月（最低3ヶ月）</p>
						</div>
					</div>
				</div>
			</div>
		</section>
	</div>

<!---------------------------------------------------------
タブ2コンテンツ
------------------------------------------------------------->
	<div class="tab-content hidden bg-clr2" id="tab2">
<!---------------------------------------------------------
ECサイト構築プラン
------------------------------------------------------------->
<section class="bg-clr2 py-20 md:py-32">
			<h2 class="w-11/12 md:w-2/3 mx-auto pb-32 md:pb-40  lg:pb-52 font-bold text-large sm:text-xl md:text-xxl text-center bg-[url('../img/icon_bar.svg')] bg-no-repeat bg-center md:bg-contain">ECサイト構築プラン</h2>
			<div class="container mx-auto flex items-center justify-center">
				<div class="grid grid-cols-1 md:grid-cols-2 gap-8 w-full">
					<div class="w-full bg-white shadow">
						<div class="w-full bg-clr3">
							<p class="text-center font-bold text-white py-4 md:py-10 text-regular sm:text-large lg:text-xl">カラーミーショッププラン</p>
						</div>
						<div class="px-6 py-4">
							<p class="w-full py-2 text-small leading-loose border-b-4 border-clr2">初心者でも簡単にネットショップを始められるサービスです。商品登録や注文管理が分かりやすく、デザインもテンプレートで手軽に整えられます。サーバー管理やセキュリティの心配も不要で、小規模から中規模のお店にぴったりです。</p>
							<div class="grid grid-cols-3 gap-2 w-full py-2 border-b-4 border-clr2">
								<p class="col-span-2 text-small">ページ数</p>
								<p class="col-span-1 text-small text-center">9ページ</p>
							</div>
							<div class="grid grid-cols-3 gap-2 w-full py-2 border-b-4 border-clr2">
								<p class="col-span-2 text-small">デザイン</p>
								<p class="col-span-1 text-small text-center">テンプレート</p>
							</div>
							<div class="grid grid-cols-3 gap-2 w-full py-2 border-b-4 border-clr2">
								<p class="col-span-2 text-small flex items-center">初期費用</p>
								<p class="col-span-1 text-small text-center">¥3,300~</p>
							</div>
							<div class="grid grid-cols-3 gap-2 w-full py-2 border-b-4 border-clr2">
								<p class="col-span-2 text-small flex items-center">サービス利用費</p>
								<p class="col-span-1 text-small text-center">¥5,000~</p>
							</div>
							<div class="grid grid-cols-3 gap-2 w-full py-2 border-b-4 border-clr2">
								<p class="col-span-2 text-small flex items-center">ブログ更新機能</p>
								<p class="col-span-1 bg-[url('../img/cost/cost_website/icon_batsu.svg')] bg-no-repeat bg-center bg-contain"></p>
							</div>
							<div class="grid grid-cols-3 gap-2 w-full py-2 border-b-4 border-clr2">
								<p class="col-span-2 text-small flex items-center">拡張性</p>
								<p class="col-span-1 bg-[url('../img/cost/cost_website/icon_sankaku.svg')] bg-no-repeat bg-center bg-contain"></p>
							</div>
							<div class="grid grid-cols-3 gap-2 w-full py-2 border-b-4 border-clr2">
								<p class="col-span-2 text-small flex items-center">セキュリティ</p>
								<p class="col-span-1 bg-[url('../img/cost/cost_website/icon_maru2.svg')] bg-no-repeat bg-center bg-contain"></p>
							</div>
							<div class="grid grid-cols-3 gap-2 w-full py-2 border-b-4 border-clr2">
								<p class="col-span-2 text-small flex items-center">扱いやすさ</p>
								<p class="col-span-1 bg-[url('../img/cost/cost_website/icon_maru2.svg')] bg-no-repeat bg-center bg-contain"></p>
							</div>
							<div class="grid grid-cols-3 gap-2 w-full py-2 border-b-4 border-clr2">
								<p class="col-span-2 text-small flex items-center">商品登録</p>
								<p class="col-span-1 text-small text-center">5商品まで無料対応</p>
							</div>
							
							<p class="text-clr1 font-bold text-xl text-center pt-6 pb-4">¥450,000</p>
						</div>
					</div>
					<div class="w-full bg-white shadow">
						<div class="w-full bg-primary">
							<p class="text-center font-bold text-white py-4 md:py-10 text-regular sm:text-large lg:text-xl">WordPressプラン</p>
						</div>
						<div class="px-6 py-4">
							<p class="w-full py-2 text-small leading-loose border-b-4 border-clr2">ネットショップだけでなく、ブログ機能も一緒に使えるのが魅力です。お店の情報発信や集客につなげたい人におすすめです。また、自由にデザインや機能を追加できるので、特別な機能が必要なお店や大規模なお店作りにも向いています。</p>
							<div class="grid grid-cols-3 gap-2 w-full py-2 border-b-4 border-clr2">
								<p class="col-span-2 text-small">ページ数</p>
								<p class="col-span-1 text-small text-center">9ページ</p>
							</div>
							<div class="grid grid-cols-3 gap-2 w-full py-2 border-b-4 border-clr2">
								<p class="col-span-2 text-small">デザイン</p>
								<p class="col-span-1 text-small text-center">テンプレート</p>
							</div>
							<div class="grid grid-cols-3 gap-2 w-full py-2 border-b-4 border-clr2">
								<p class="col-span-2 text-small flex items-center">初期費用</p>
								<p class="col-span-1 text-small text-center">なし</p>
							</div>
							<div class="grid grid-cols-3 gap-2 w-full py-2 border-b-4 border-clr2">
								<p class="col-span-2 text-small flex items-center">サービス利用費</p>
								<p class="col-span-1 text-small text-center">なし</p>
							</div>
							<div class="grid grid-cols-3 gap-2 w-full py-2 border-b-4 border-clr2">
								<p class="col-span-2 text-small flex items-center">ブログ更新機能</p>
								<p class="col-span-1 bg-[url('../img/cost/cost_website/icon_maru2.svg')] bg-no-repeat bg-center bg-contain"></p>
							</div>
							<div class="grid grid-cols-3 gap-2 w-full py-2 border-b-4 border-clr2">
								<p class="col-span-2 text-small flex items-center">拡張性</p>
								<p class="col-span-1 bg-[url('../img/cost/cost_website/icon_maru.svg')] bg-no-repeat bg-center bg-contain"></p>
							</div>
							<div class="grid grid-cols-3 gap-2 w-full py-2 border-b-4 border-clr2">
								<p class="col-span-2 text-small flex items-center">セキュリティ</p>
								<p class="col-span-1 bg-[url('../img/cost/cost_website/icon_sankaku.svg')] bg-no-repeat bg-center bg-contain"></p>
							</div>
							<div class="grid grid-cols-3 gap-2 w-full py-2 border-b-4 border-clr2">
								<p class="col-span-2 text-small flex items-center">扱いやすさ</p>
								<p class="col-span-1 bg-[url('../img/cost/cost_website/icon_sankaku.svg')] bg-no-repeat bg-center bg-contain"></p>
							</div>
							<div class="grid grid-cols-3 gap-2 w-full py-2 border-b-4 border-clr2">
								<p class="col-span-2 text-small flex items-center">商品登録</p>
								<p class="col-span-1 text-small text-center">5商品まで無料対応</p>
							</div>
							<p class="text-clr1 font-bold text-xl text-center pt-6 pb-4">¥550,000</p>
						</div>
					</div>
				</div>
			</div>
		</section>
<!---------------------------------------------------------
各項目の説明
------------------------------------------------------------->
		<div class="flex items-center justify-center py-20 md:py-32">
			<div class="grid grid-cols-1 md:grid-cols-2 md:grid-cols-4 gap-8 container mx-auto">
				<div class="w-full bg-white shadow p-4">
					<h3 class="py-2 text-center font-bold bg-primary text-white">ページ数</h3>
					<p class="leading-loose py-2 text-small">ECサイトに必要とされるページを対象に作成します。<br><span class="text-xx-small leading-none">（TOP/商品一覧/商品詳細/カテゴリ一覧/お問い合わせ/特定商取引法に基づく表示/プライバシーポリシー/カートページ/利用規約）</span>
					</p>
				</div>
				<div class="w-full bg-white shadow p-4">
					<h3 class="py-2 text-center font-bold bg-primary text-white">デザイン</h3>
					<p class="leading-loose py-2 text-small">各プラン共にECサイトに最も適したテンプレートと提供しているので、テンプレートを利用して価格を抑えます。会社に併せたテンプレートの改修は可能です。</p>
				</div>
				<div class="w-full bg-white shadow p-4">
					<h3 class="py-2 text-center font-bold bg-primary text-white">初期費用</h3>
					<p class="leading-loose py-2 text-small">カラーミーショップは別会社が提供するサービスの為、初期費用を個別に支払って頂きます。</p>
				</div>
				<div class="w-full bg-white shadow p-4">
					<h3 class="py-2 text-center font-bold bg-primary text-white">サービス利用費</h3>
					<p class="leading-loose py-2 text-small">カラーミーショップは別会社が提供するサービスの為、サービス利用費を個別に支払って頂きます。</p>
				</div>
				<div class="w-full bg-white shadow p-4">
					<h3 class="py-2 text-center font-bold bg-primary text-white">ブログ更新機能</h3>
					<p class="leading-loose py-2 text-small">WordPressというシステムで構築し、会社の新着情報やブログなどを発信できるようにしてSEO強化や情報発信力を高めます。</p>
				</div>
				<div class="w-full bg-white shadow p-4">
					<h3 class="py-2 text-center font-bold bg-primary text-white">拡張性</h3>
					<p class="leading-loose py-2 text-small">それぞれ、必要な機能ごとに得意、不得意があるため用途に合わせて拡張します。</p>
				</div>
				<div class="w-full bg-white shadow p-4">
					<h3 class="py-2 text-center font-bold bg-primary text-white">セキュリティ</h3>
					<p class="leading-loose py-2 text-small">カラーミーショップは別途サーバーを必要としないため、セキュリティ面では安全です。顧客管理の必要があるため安全性の高いサービスが好まれます。</p>
				</div>
				<div class="w-full bg-white shadow p-4">
					<h3 class="py-2 text-center font-bold bg-primary text-white">商品登録</h3>
					<p class="leading-loose py-2 text-small">販売予定の商品を特定の数だけ、構築時に登録いたします。残りの商品は別途オプション契約いただくか、個別で登録頂きます。</p>
				</div>
			</div>
		</div>
<!---------------------------------------------------------
下三角
------------------------------------------------------------->
		<div class="triangle-wrapper3"></div>
<!---------------------------------------------------------
製作オプション
------------------------------------------------------------->
		<section class=" fade-in-on-scroll bg-white">
			<h2 class="font-bold text-large sm:text-xl md:text-xxl text-center">制作オプション</h2>
			<div class="container mx-auto flex items-center justify-center py-20 md:py-32">
				<div class="grid grid-cols-1 md:grid-cols-3 gap-8 w-full">
					<div class="w-full bg-white">
						<h3 class="bg-clr2 py-4 text-center font-bold">環境構築</h3>
						<div class="grid grid-cols-3 gap-2 w-full py-4 border-b-4 border-clr2">
							<p class="col-span-2 text-small">他社所有サーバー利用</p>
							<p class="col-span-1 text-small text-right font-bold">+¥30,000</p>
						</div>
						<div class="grid grid-cols-3 gap-2 w-full py-4 border-b-4 border-clr2">
							<p class="col-span-2 text-small">他社所有ドメイン利用</p>
							<p class="col-span-1 text-small text-right font-bold">+¥20,000</p>
						</div>
						<div class="grid grid-cols-3 gap-2 w-full py-4 border-b-4 border-clr2">
							<p class="col-span-2 text-small">ドメイン移管</p>
							<p class="col-span-1 text-small text-right font-bold">+¥15,000</p>
						</div>
					</div>
					<div class="w-full bg-white">
						<h3 class="bg-clr2 py-4 text-center font-bold">ページ制作</h3>
						<div class="grid grid-cols-3 gap-2 w-full py-4 border-b-4 border-clr2">
							<p class="col-span-2 text-small">ページ追加(1P)</p>
							<p class="col-span-1 text-small text-right font-bold">¥25,000</p>
						</div>
						<div class="grid grid-cols-3 gap-2 w-full py-4 border-b-4 border-clr2">
							<p class="col-span-2 text-small">コンテンツ追加</p>
							<p class="col-span-1 text-small text-right font-bold">¥5,000</p>
						</div>
						<div class="grid grid-cols-3 gap-2 w-full py-4 border-b-4 border-clr2">
							<p class="col-span-2 text-small">お問い合わせフォーム追加(5項目)</p>
							<p class="col-span-1 text-small text-right font-bold">¥20,000</p>
						</div>
						<div class="grid grid-cols-3 gap-2 w-full py-4 border-b-4 border-clr2">
							<p class="col-span-2 text-small">お問い合わせ項目追加</p>
							<p class="col-span-1 text-small text-right font-bold">¥4,000</p>
						</div>
					</div>
					<div class="w-full bg-white">
						<h3 class="bg-clr2 py-4 text-center font-bold">制作オプション</h3>
						<div class="grid grid-cols-3 gap-2 w-full py-4 border-b-4 border-clr2">
							<p class="col-span-2 text-small">バナー作成</p>
							<p class="col-span-1 text-small text-right font-bold">¥5,000</p>
						</div>
						<div class="grid grid-cols-3 gap-2 w-full py-4 border-b-4 border-clr2">
							<p class="col-span-2 text-small">多言語対応</p>
							<p class="col-span-1 text-small text-right font-bold">¥50,000</p>
						</div>
						<div class="grid grid-cols-3 gap-2 w-full py-4 border-b-4 border-clr2">
							<p class="col-span-2 text-small">商品登録</p>
							<p class="col-span-1 text-small text-right font-bold">¥2,000/1商品</p>
						</div>
						<div class="grid grid-cols-3 gap-2 w-full py-4 border-b-4 border-clr2">
							<p class="col-span-2 text-small">SNS連携（Instagram,Facebook）</p>
							<p class="col-span-1 text-small text-right font-bold">¥45,000</p>
						</div>
					</div>
				</div>
			</div>
		</section>
<!---------------------------------------------------------
定期運用保守
------------------------------------------------------------->
		<section class="bg-clr2 py-20 md:py-32">
			<h2 class="w-11/12 md:w-2/3 mx-auto pb-32 md:pb-40 lg:pb-52 font-bold text-large sm:text-xl md:text-xxl text-center bg-[url('../img/icon_bar.svg')] bg-no-repeat bg-center md:bg-contain">定期運用保守</h2>
			<div class="container mx-auto flex items-center justify-center">
			<div class="grid grid-cols-1 md:grid-cols-2 gap-8 w-full">
				<div class="w-full bg-white shadow">
					<div class="w-full bg-primary">
						<p class="text-center font-bold text-white py-4 md:py-10 text-regular sm:text-large lg:text-xl">ECスポットサポート</p>
					</div>
					<div class="px-6 py-4">
						<p class="w-full py-2 text-small leading-loose border-b-4 border-clr2">最低限の維持費のみで運用は自社で行う場合におススメ！ただし、更新を依頼する場合はオプション費用が発生し少し割高になります。</p>
						<div class="grid grid-cols-3 gap-2 w-full py-2 border-b-4 border-clr2">
							<p class="col-span-2 text-small flex items-center">サーバー管理</p>
							<p class="col-span-1 bg-[url('../img/cost/cost_website/icon_maru.svg')] bg-no-repeat bg-center bg-contain"></p>
						</div>
						<div class="grid grid-cols-3 gap-2 w-full py-2 border-b-4 border-clr2">
							<p class="col-span-2 text-small flex items-center">ドメイン管理</p>
							<p class="col-span-1 bg-[url('../img/cost/cost_website/icon_maru.svg')] bg-no-repeat bg-center bg-contain"></p>
						</div>
						<div class="grid grid-cols-3 gap-2 w-full py-2 border-b-4 border-clr2">
							<p class="col-span-2 text-small flex items-center">商品管理</p>
							<p class="col-span-1 bg-[url('../img/cost/cost_website/icon_batsu.svg')] bg-no-repeat bg-center bg-contain"></p>
						</div>
						<div class="grid grid-cols-3 gap-2 w-full py-2 border-b-4 border-clr2">
							<p class="col-span-2 text-small flex items-center">コンテンツ更新
							<p class="col-span-1 bg-[url('../img/cost/cost_website/icon_batsu.svg')] bg-no-repeat bg-center bg-contain"></p>
						</div>
						<div class="grid grid-cols-3 gap-2 w-full py-2 border-b-4 border-clr2">
							<p class="col-span-2 text-small flex items-center">無料更新枠</p>
							<p class="col-span-1 bg-[url('../img/cost/cost_website/icon_batsu.svg')] bg-no-repeat bg-center bg-contain"></p>
						</div>
						<p class="text-clr1 font-bold text-xl text-center pt-6 pb-4">¥10,000</p>
					</div>
				</div>
				<div class="w-full bg-white shadow">
					<div class="w-full bg-primary">
						<p class="text-center font-bold text-white py-4 md:py-10 text-regular sm:text-large lg:text-xl">EC定期管理サポート</p>
					</div>
					<div class="px-6 py-4">
						<p class="w-full py-2 text-small leading-loose border-b-4 border-clr2">定期的なECサイトの更新を検討している方におススメ！商品の管理からコンテンツの修正、キャンペーンに合わせたバナー制作もサポートで対応可能！</p>
						<div class="grid grid-cols-3 gap-2 w-full py-2 border-b-4 border-clr2">
							<p class="col-span-2 text-small flex items-center">サーバー管理</p>
							<p class="col-span-1 bg-[url('../img/cost/cost_website/icon_maru.svg')] bg-no-repeat bg-center bg-contain"></p>
						</div>
						<div class="grid grid-cols-3 gap-2 w-full py-2 border-b-4 border-clr2">
							<p class="col-span-2 text-small flex items-center">ドメイン管理</p>
							<p class="col-span-1 bg-[url('../img/cost/cost_website/icon_maru.svg')] bg-no-repeat bg-center bg-contain"></p>
						</div>
						<div class="grid grid-cols-3 gap-2 w-full py-2 border-b-4 border-clr2">
							<p class="col-span-2 text-small flex items-center">商品管理</p>
							<p class="col-span-1 text-small text-center">5商品/月</p>
						</div>
						<div class="grid grid-cols-3 gap-2 w-full py-2 border-b-4 border-clr2">
							<p class="col-span-2 text-small flex items-center">コンテンツ更新
							<p class="col-span-1 text-small text-center">3時間/月</p>
						</div>
						<div class="grid grid-cols-3 gap-2 w-full py-2 border-b-4 border-clr2">
							<p class="col-span-2 text-small flex items-center">無料更新枠</p>
							<p class="col-span-1 text-small text-center">¥5,000無料</p>
						</div>
						<p class="text-clr1 font-bold text-xl text-center pt-6 pb-4">¥20,000</p>
						</div>
					</div>
				</div>
			</div>
		</section>
<!---------------------------------------------------------
下三角
------------------------------------------------------------->
		<div class="triangle-wrapper3"></div>
<!---------------------------------------------------------
製作オプション
------------------------------------------------------------->
		<section class=" fade-in-on-scroll bg-white">
			<h2 class="font-bold text-large sm:text-xl md:text-xxl text-center">運用保守オプション</h2>
			<div class="container mx-auto flex items-center justify-center py-20 md:py-32">
				<div class="grid grid-cols-1 md:grid-cols-3 gap-8 w-full">
					<div class="w-full bg-white">
						<h3 class="bg-clr2 py-4 text-center font-bold">運用オプション</h3>
						<div class="grid grid-cols-3 gap-2 w-full py-4 border-b-4 border-clr2">
							<p class="col-span-2 text-small">ドメイン管理（.jp,.co.jp）</p>
							<p class="col-span-1 text-small text-right font-bold">¥3,000/月</p>
						</div>
						
					</div>
					<div class="w-full bg-white">
						<h3 class="bg-clr2 py-4 text-center font-bold">スポット対応</h3>
						<div class="grid grid-cols-3 gap-2 w-full py-4 border-b-4 border-clr2">
							<p class="col-span-2 text-small">WordPressアップデート対応</p>
							<p class="col-span-1 text-small text-right font-bold">¥60,000/1回</p>
						</div>
						<div class="grid grid-cols-3 gap-2 w-full py-4 border-b-4 border-clr2">
							<p class="col-span-2 text-small">プラグインアップデート対応</p>
							<p class="col-span-1 text-small text-right font-bold">¥30,000/1回</p>
						</div>
						<div class="grid grid-cols-3 gap-2 w-full py-4 border-b-4 border-clr2">
							<p class="col-span-2 text-small">ハッキング・障害復旧作業</p>
							<p class="col-span-1 text-small text-right font-bold">¥200,000~</p>
						</div>
						<div class="grid grid-cols-3 gap-2 w-full py-4 border-b-4 border-clr2">
							<p class="col-span-2 text-small">コンテンツ修正・更新</p>
							<p class="col-span-1 text-small text-right font-bold">¥2,500/1時間</p>
						</div>
						<div class="grid grid-cols-3 gap-2 w-full py-4 border-b-4 border-clr2">
							<p class="col-span-2 text-small">バナー制作</p>
							<p class="col-span-1 text-small text-right font-bold">¥3,000/1枚</p>
						</div>
						<div class="grid grid-cols-3 gap-2 w-full py-4 border-b-4 border-clr2">
							<p class="col-span-2 text-small">商品登録</p>
							<p class="col-span-1 text-small text-right font-bold">¥2,000/1商品</p>
						</div>
						
					</div>
					<div class="w-full bg-white">
						<h3 class="bg-clr2 py-4 text-center font-bold">アクセス解析</h3>
						<div class="grid grid-cols-3 gap-2 w-full py-4 border-b-4 border-clr2">
							<p class="col-span-2 text-small">Goolgeアナリティクス導入</p>
							<p class="col-span-1 text-small text-right font-bold">¥5,000</p>
						</div>
						<div class="grid grid-cols-3 gap-2 w-full py-4 border-b-4 border-clr2">
							<p class="col-span-2 text-small">アクセス解析レポート</p>
							<p class="col-span-1 text-small text-right font-bold">¥40,000</p>
						</div>
						<div class="grid grid-cols-3 gap-2 w-full py-4 border-b-4 border-clr2">
							<p class="col-span-2 text-small">Googleマップ解析レポート</p>
							<p class="col-span-1 text-small text-right font-bold">¥30,000</p>
						</div>	
					</div>
				</div>
			</div>
		</section>
	</div>




<?php
get_footer();
