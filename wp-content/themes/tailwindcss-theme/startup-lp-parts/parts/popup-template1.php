<!--ポップアップ１-->
<div id="template1-popup" class="fixed inset-0 bg-gray-800 bg-opacity-50 flex items-center justify-center hidden transition-opacity duration-500 opacity-0 z-50">
  <div class="relative bg-white p-4 md:p-8 rounded-lg w-11/12 md:w-10/12 mx-auto h-5/6">
    <h2 class="text-small md:text-2xl font-bold mb-4 text-center">WEB SERVICE PLANNING（ウェブサービスプランニング）とは？</h2>
    <div class="overflow-hidden overflow-y-auto px-2 md:px-10 h-5/6 w-full">
        <h3 class="font-bold text-small md:text-regular text-left border-b-4 border-font2 py-2 mb-2">概要</h3>
        <p class="text-small md:regular mb-4">WEB SERVICE PLANNING（ウェブサービスプランニング）の創立者は本業でWEBコンサルやホームページ制作を行っております。そのため法人でも個人事業主でもありません。あくまでも副業としてスタートしています。職業柄、様々な業種の方とのつながりがあり、そのほとんどが副業、フリーランスなど個人ながら精力的に活動されている人たちです。さらにはそのような働き方に共感していただいた企業との繋がりもでき、現在はサイドビジネスメンバーやフリーランスと地場企業様との協業によって成り立つチームとなりました。様々な人たちの知見とスキルによってホームページ制作に関わらず、様々な角度からお客様の課題を解決いたします。</p>
        <h3 class="font-bold text-small md:text-regular text-left border-b-4 border-font2 py-2 mb-2">対応可能な分野</h3>
        <?php
            // 各サービス項目を生成する関数
            function render_service_item($title) {
                echo <<<HTML
                <div class="bg-white flex flex-col h-full border border-2 border-font2 text-center items-center justify-center">
                    <p class="font-bold text-small py-4">$title</p>
                </div>
            HTML;
            }
            ?>
            <div class="flex items-center justify-center py-2 md:py-10">
                <div class="grid grid-cols-2 md:grid-cols-3 gap-4 w-full">
                    <?php
                    // サービス内容のデータを配列で定義
                    $services = [
                        "ホームページ制作",
                        "WEBコンサルティング",
                        "WEBマーケティング",
                        "WEB広告運用代行",
                        "システム開発",
                        "アプリケーション開発",
                        "ロゴデザイン",
                        "名刺デザイン",
                        "チラシデザイン",
                        "販促物デザイン",
                        "各種DTPデザイン",
                        "各種グラフィックデザイン",
                        "イラストデザイン",
                        "オンライン研修",
                        "WEB事業立ち上げ支援"
                    ];

                    // サービス項目をループで出力
                    foreach ($services as $service) {
                        render_service_item($service);
                    }
                    ?>
                </div>
            </div>
            <h3 class="font-bold text-small md:text-regular text-left border-b-4 border-font2 py-2 mb-2">料金について</h3>
            <p class="text-small md:regular mb-4">WEB SERVICE PLANNING（ウェブサービスプランニング）の主体はサイドビジネスやフリーランスメンバーです。そのため企業に依頼するより遥かに安価な値段で提案することが可能です。しかも現役でその道の会社に勤めているメンバーも多く、常に最新の技術をインプットするため普通のフリーランスよりも知識量もスキルも圧倒的に高いです。また、企業に依頼する場合は我々は仲介料（マージン料）などは上乗せしません。それは本業が在る為、複数の収入があるので敢えてお客様に利益追求をしなくても食べていけるためです。</p>

            <h3 class="font-bold text-small md:text-regular text-left border-b-4 border-font2 py-2 mb-2">参加メンバー</h3>
            <p class="text-small md:regular mb-4">創設者：WEBコンサル・ホームページ制作会社勤務 Nさん(10年)<br />
            イラスト担当：某仙台情報誌デザイナー兼イラストレーター(10年) Tさん<br />
            システム開発：システム開発会社勤務(5年) Hさん<br />
            ホームページ制作会社/フランチャイズ事業：<a href="https://oneder-circle.com/" target="_blank">oneder circle株式会社様</a><br />
            DTPデザイン、販促物デザイン印刷：<a href="https://www.sendai-design-dindia.com/" target="_blank">有限会社dindia様</a><br />
            </p>

        <p class="text-small md:regular">ウェブサービスプランニングでは副業・フリーランスと企業の良い面だけをしっかり引き継ぎ、よりお客様にとって付加価値の高いものを提供していきます。仙台の「フリーランスと企業の新しい協業体制」を実現し、皆様にご満足いただける環境とサービスを提案いたします。</p>
    </div>
    <button id="close-popup" class="absolute top-0 right-0 transform translate-x-1/2 -translate-y-1/2 bg-red-500 text-white w-8 h-8 rounded-full flex items-center justify-center">×</button>
  </div>
</div>
