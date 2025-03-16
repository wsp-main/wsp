<?php
// HTMLブロックを変数に格納
$MainText = <<<HTML
<div class="py-4 md:py-10 text-center">
    <h3 class="font-bold text-regular md:text-xl md:font-zen">
        <span class="text-font2">低価格</span>で<span class="text-font1">集客と訴求効果</span>を追求したホームページを提供
    </h3>
</div>
<div class="p-4 md:p-4 text-center">
    <h2 class="font-extrabold text-large md:text-xxl md:font-zen">
        東北限定!<br>
        <span class="text-font1">ホームページ集客応援</span>プラン
    </h2>
</div>
<div class="p-4 md:p-4 text-center bg-no-repeat bg-center bg-contain lazy-load-bg bg-[url('../startup-lp-parts/images/support.svg')]">
    <p class="text-regular md:text-large">フリーランスと地場企業の協業</p>
</div>
HTML;
$AreaText = <<<HTML
            <div class="bg-clr3 text-white text-center w-full md:w-5/6 mx-auto">
              <p class="py-2 md:py-4">東北エリア限定</p>
            </div>
            <div class="p-2 md:p-2 text-center">
              <h3 class="font-bold text-small sm:text-regular md:text-large">東北での起業・独立を応援します。</h3>
            </div>
            <div class="flex items-center justify-center w-full mx-auto py-2 w-full md:w-5/6">
                <div class="grid grid-cols-2 sm:grid-cols-2 md:grid-cols-3 gap-4 w-full">
                    <div class="bg-primary text-white border p-2 md:p-4 text-center">
                      <p>宮城県</p>
                    </div>
                    <div class="bg-primary text-white border p-2 md:p-4 text-center">
                      <p>青森県</p>
                    </div>
                    <div class="bg-primary text-white border p-2 md:p-4 text-center">
                        <p>岩手県</p>
                    </div>
                    <div class="bg-primary text-white border p-2 md:p-4 text-center">
                        <p>山形県</p>
                    </div>
                    <div class="bg-primary text-white border p-2 md:p-4 text-center">
                        <p>秋田県</p>
                    </div>
                    <div class="bg-primary text-white border p-2 md:p-4 text-center">
                        <p>福島県</p>
                    </div>
                </div>
            </div>
HTML;

// 金額に格納
$priceArea = <<<HTML
<p class="text-xl md:text-[80px] font-extrabold text-secondary line-through">350,000円</p>
<p class="text-xxl md:text-[100px] font-black text-font1">99,000円～</p>
HTML;
?>
<!-- メインビューエリア -->
<div class="bg-clr2 ">
  <div class="bg-no-repeat bg-right-top bg-shalf md:bg-[url('../startup-lp-parts/images/coding.svg')] ">
    <div class="container mx-auto py-4 md:py-10 ">
        <div class="bg-white mx-auto my-10 bg-opacity-80 z-50 p-2 md:p-20">
            <?php echo $MainText; ?>
            <div class="p-2 md:p-2 text-center">
              <p class="text-small inline-block font-bold"><span class="bg-clr3 text-white py-2 px-4 mx-4 inline-block">製作費</span>全5ページ</p>
              <?php echo $priceArea; ?>
            </div>
            <?php echo $AreaText; ?>
        </div>
        <div class="p-4 md:p-4 text-center">
          <h3 class="font-bolder text-large md:text-xl text-font1">制作内容</h3>
        </div>
        <div class="flex items-center justify-center w-11/12 md:w-5/6 mx-auto">
            <div class="grid grid-cols-2 md:grid-cols-3 gap-4 w-full ">
                <div class="bg-clr1 shadow flex flex-col h-full rounded-full p-2 md:p-4 text-center relative items-center justify-between h-full">
                    <p class="text-small md:text-regular text-white">ご相談無料</p>
                </div>
                <div class="bg-clr1 shadow flex flex-col h-full rounded-full p-2 md:p-4 text-center relative items-center justify-between h-full">
                    <p class="text-small md:text-regular text-white">SEO対策</p>
                </div>
                <div class="bg-clr1 shadow flex flex-col h-full rounded-full p-2 md:p-4 text-center relative items-center justify-between h-full">
                    <p class="text-small md:text-regular text-white">MEO対策</p>
                </div>
                <div class="bg-clr1 shadow flex flex-col h-full rounded-full p-2 md:p-4 text-center relative items-center justify-between h-full">
                    <p class="text-small md:text-regular text-white">モバイルフレンドリー</p>
                </div>
                <div class="bg-clr1 shadow flex flex-col h-full rounded-full p-2 md:p-4 text-center relative items-center justify-between h-full">
                    <p class="text-small md:text-regular text-white">投稿システム無料</p>
                </div>
                <div class="bg-clr1 shadow flex flex-col h-full rounded-full p-2 md:p-4 text-center relative items-center justify-between h-full">
                    <p class="text-small md:text-regular text-white">コアウェブバイタル対応</p>
                </div>
            </div>
        </div>
        <div class="container mx-auto py-4 md:py-10 ">
          <div class="h-full w-full">
              <p class="text-small md:text-large text-white bg-font2 md:bg-custom-gradient rounded-full border border-4 border-white shadow transition duration-300 hover:bg-hclr1 tracking-wider">
              <a href="#contact-form" class="text-small md:text-large h-full py-4 md:py-8 flex items-center justify-center font-bold w-full transition-opacity duration-300 hover:opacity-75">
              お問い合わせ・ご相談はこちら
              </a></p>
          </div>
        </div>
    </div>
  </div>
</div>
<!-- ホームページをこれから作る人　成果の上がらないホームページで悩んでいる人へ -->
<div class="title1 bg-primary text-white">
	<div class="container mx-auto text-large md:text-xl py-6 text-center">
    <h2 class="font-bold text-small md:text-large">ホームページをこれから作る人<br />
    成果の上がらないホームページで悩んでいる人へ</h2>
	</div>
</div>
<div class="triangle-wrapper1">
<div class="triangle-down-center"></div>
</div>

<div class="container mx-auto text-center py-10">
	<p class="text-small md:text-regular">企業や個人事業主にとって、ホームページは集客のためのコーポレートサイトやブランドサイト、商品を売るためのECショップ、情報発信の場として活用されます。<br /><br />
  しかし、ホームページの価格には大きな差があることをご存じですか？<br /><br />
  無料で制作できるホームページ制作ツールがある一方で、数百万円もかかるホームページ制作会社も存在します。この差はなぜ生まれるのでしょうか？<br /><br />
  それは、ホームページに予算をかけることでそのホームページが会社のためにより大きな貢献をするからです。ここでいう「貢献」とは、売り上げのアップや集客の増加を指します。<br /><br />
  予算をかけることで、ホームページがビジネスの成功にどれだけ寄与するかが変わってくるのです。<br /><br />
  しかし、起業したばかりの企業や個人事業主にとっては、予算が限られているため、どうしても低価格の制作会社に依頼するしかない状況が多いです。<br /><br />
  低価格のホームページ制作会社は「作って終わり」の文化が強く、ホームページから集客や売り上げアップを狙えるところはほぼありません。<br /><br />
  「低価格のホームページでも集客や売り上げアップにつなげるにはどうしたら良いのだろう？」<br /><br />
  と悩める方であれば、私たちの提案するサービスはあなたの事業を押し上げることができます。</p>
</div>
<?php
// コンテンツのカードを生成する関数
function render_price_card($title, $price, $features, $usage) {
    echo <<<HTML
    <div class="bg-white border p-4 border-4 flex flex-col">
        <div class="text-center flex-grow">
            <h3 class="font-bold text-small md:text-large pt-4">$title</h3>
            <p class="font-bold text-large text-font1 py-2">$price</p>
        </div>
        <ul class="list-none flex flex-col py-2 flex-grow text-left">
HTML;

    // 各機能リストを出力
    foreach ($features as $feature) {
        echo <<<HTML
        <li class="list-icon1 text-small py-1">$feature</li>
HTML;
    }

    echo <<<HTML
        </ul>
        <div class="text-center flex-grow">
            <h4 class="font-bold pt-2 text-regular">適した用途</h4>
        </div>
        <p class="flex-grow text-small text-left">$usage</p>
    </div>
HTML;
}
?>
<div class="container mx-auto text-center py-10">
    <div class="flex items-center justify-center">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-4 w-full px-4">
            <?php
            // カードのデータを配列で定義
            $price_cards = [
                [
                    "title" => "低価格帯の制作会社",
                    "price" => "~50万円",
                    "features" => [
                        "テンプレートデザイン",
                        "基本的な機能のみを備えたページ",
                        "制作期間が比較的短い",
                        "SEO対策は基本的に行わない"
                    ],
                    "usage" => "個人事業者などの情報発信のみに活用する、集客等を求めない運用"
                ],
                [
                    "title" => "中価格帯の制作会社",
                    "price" => "50~200万円",
                    "features" => [
                        "カスタムデザインやブランディングを考慮",
                        "レスポンシブデザイン（モバイル対応）",
                        "データベース連携や基本的な動的要素の組み込み",
                        "SEO対策を考慮した構造"
                    ],
                    "usage" => "中小企業や個人事業主向けのオンラインプレゼンスの強化"
                ],
                [
                    "title" => "高価格帯の制作会社",
                    "price" => "200万円～",
                    "features" => [
                        "カスタムデザイン、高度なブランディングの統合",
                        "複雑な機能や大規模なデータベースの組み込み",
                        "カスタム開発や高度なセキュリティ対策",
                        "高度なユーザーエクスペリエンスやアニメーションの組み込み"
                    ],
                    "usage" => "企業やブランド向けの高度なオンラインプラットフォーム構築"
                ]
            ];

            // 各カードをループで出力
            foreach ($price_cards as $card) {
                render_price_card($card['title'], $card['price'], $card['features'], $card['usage']);
            }
            ?>
        </div>
    </div>
</div>





<!-- あなたがホームページに求めるものは？  -->
<div class="p-4 md:p-10 text-center pt-20 md:pt-32">
  <h3 class="font-bold text-small sm:text-large md:text-xl text-font1">あなたがホームページに求めるものは？</h3>
</div>

<div class="p-4 md:p-10 text-center">
  <p class="w-5/6 md:w-full mx-auto font-bold text-small sm:text-regular md:text-large">一つでも当てはまれば私たちの提案がお客様の悩みを解決できるかもしれません！</p>
</div>

<div class="bg-clr2 p-4 md:p-10 mx-auto w-10/12 md:w-3/4 my-10">
	<p class="with-vertical-bar my-4 pl-10 font-bold text-small md:text-regular">検索で上位表示させたい</p>
	<p class="with-vertical-bar my-4 pl-10 font-bold text-small md:text-regular">特定地域での認知度を上げたい</p>
	<p class="with-vertical-bar my-4 pl-10 font-bold text-small md:text-regular">ホームページが欲しいがどこに依頼すればよいか悩んでいる</p>
</div>

<!-- 検索で上位表示させたい -->
<div class="bg-clr2  relative">
  <div class="title1 bg-primary text-white">
      <h2 class="container mx-auto font-bold text-small sm:text-regular md:text-large py-6 text-left">検索で上位表示させたい</h2>
  </div>

  <div class="relative">
    <div class="triangle-right-left absolute inset-0 z-10"></div>

    <div class="container mx-auto py-4 md:py-6 md:py-20 relative z-20">
      <div class="bg-white w-full mx-auto bg-opacity-80 z-30 py-10">
        <div class="p-4 md:p-10 text-center">
          <p class="font-bold text-small md:text-large">ホームページを検索で上位に表示させるために必要なこと</p>
        </div>
        <div class="p-4 md:p-10 text-center">
          <p class="text-small md:text-regular">一般的に言われているホームページ制作会社ではヒアリングのあとすぐにデザインや開発業業務に入ります。<br /><br />
          そのため「ホームページを制作する」ことが目的になってしまい効果的なホームページを運用することができません。<br /><br />
          ホームページは制作しただけでは検索順位の上位に表示させることができません。<br /><br />
          サイト設計段階から<br /><br />
          どのようなキーワードで表示させたいか？<br /><br />
          ページ構成はどうするか？<br /><br />
          SEO対策で何ができるか？<br /><br />
          など検討する要素は沢山あります。<br /><br />
          さらに効果的な運用には定期的な更新やサイトの分析を行う必要があります。<br /><br />
          SENDAI WEB SERVICE PLANNING（仙台ウェブサービスプランニング）では検索時の上位表示を最初から狙って構築していきます。<br /><br />
          東北地域のホームページ制作会社でコンセプト設計や競合調査、SEOまで意識してヒアリングや構築を行うところはほぼありません。<br /><br />
          我々は公開後もホームページの目的に合わせて、より良い提案をクライアントと繰り返しながら「意味のあるホームページ」を作り上げていきます。</p>
        </div>
      </div>
    </div>
  </div>

  <div class="p-4 md:p-10 text-center pt-20 md:pt-32">
    <h3 class="font-bold text-small sm:text-regular md:text-xl ">制作前の事前準備</h3>
  </div>

  <?php
// グリッドアイテムを生成する関数
function render_grid_item($title, $description, $index) {
    // 偶数か奇数かで背景色を変更
    $bg_color = ($index % 2 === 0) ? 'bg-secondary' : 'bg-primary';
    
    echo <<<HTML
    <div class="$bg_color text-white border-white border-4 py-20 md:py-32 text-center flex items-center justify-center relative group">
        <p class="font-bold">$title</p>
        <div class="absolute left-0 right-0 bottom-0 top-0 bg-white text-black p-2 opacity-0 group-hover:opacity-90 group-hover:bottom-0 transform translate-y-full group-hover:translate-y-0 transition-all duration-300 text-small flex items-center justify-center">
            $description
        </div>
    </div>
HTML;
}
?>
<div class="grid grid-cols-1 md:grid-cols-5">
    <?php
    // タイトルと説明を配列で定義
    $grid_items = [
        ["title" => "ターゲットの選定", "description" => "特定のユーザー層に向けたコンテンツやデザインを最適化することで、訪問者が求める情報を迅速に提供し、ユーザーに合わせたサービスを提供することで、コンバージョン率向上やリピーター増加が期待できます。"],
        ["title" => "コンセプトの共有", "description" => "コンセプトの共有は、お客様とが同じ目標に向かって進むために重要です。明確なコンセプトは、統一感のあるデザインやメッセージを生み出し、ユーザーの信頼を獲得しやすくします。"],
        ["title" => "競合調査", "description" => "市場での自社の位置を把握し、他社の強みと弱みを理解するために必要です。競合分析により、自社のSEO戦略を強化し、差別化ポイントを見つけることができます。"],
        ["title" => "キーワード選定", "description" => "検索エンジンでの上位表示を目指すための基本です。適切なキーワードを選定し、コンテンツに組み込むことで、トラフィックの増加とターゲットユーザーの獲得が期待できます。"],
        ["title" => "SWOT分析", "description" => "自社の強み、弱み、機会、脅威を明確にするためのツールです。SEO戦略の最適化や、競争力のあるコンテンツ制作に役立ち、ビジネスの成長をサポートします。"]
    ];

    // 各アイテムをループで出力
    foreach ($grid_items as $index => $item) {
        render_grid_item($item['title'], $item['description'], $index);
    }
    ?>
</div>



</div>



<!-- 検索で上位表示させたい -->
<div class="bg-clr2  relative">
  <div class="title1 bg-primary text-white">
      <h2 class="container mx-auto font-bold text-small sm:text-regular md:text-large py-6 text-left">特定地域での認知度を上げたい</h2>
  </div>

  <div class="relative">
    <div class="triangle-right-left absolute inset-0 z-10"></div>

    <div class="container mx-auto py-4 md:py-10 relative z-20">
      <div class="bg-white w-full mx-auto bg-opacity-80 z-30 py-10">
        <div class="p-4 md:p-10 text-center">
          <p class="font-bold text-small md:text-large">Googleマップ最適化で店舗情報を発信していますか？</p>
        </div>
        <div class="p-4 md:p-10 text-center ">
          <p class="text-small md:text-regular">Googleマップによる検索はもはや一般的な方法です。<br /><br />
          特定のお店を探しているユーザーはGoogleマップ経由で距離、店舗情報、レビューを評価しています。<br /><br />
          しかし、Googleマップを正しく運用していないと提供できる情報量にかなりの差が出てきます。<br /><br />
          このGoogleマップを正しく運用する施策をGoogleマップ最適化（MEO）と呼びます。<br /><br />
          一般的なMEOの料金体系は表示順位に応じて料金が発生し、大体\30,000~\60,000/月が相場です。<br /><br />
          さらに仙台含めた東北エリアでこのMEOに詳しい会社はほぼありません。<br /><br />
          それらの理由からあまり提案内容として含まれてこなかったのが現状です。<br /><br />
          SENDAI WEB SERVICE PLANNING（仙台ウェブサービスプランニング）ではこのMEO対策を標準で対応させていただきます。<br /><br />
          MEO対策を行うと、検索順位とは関係なく、ブラウザの上位に表示させることが可能になりますのでユーザーの認知・流入にとても効果的です！</p>
        </div>
        <!--<div class="grid grid-cols-1 md:grid-cols-2 gap-4 px-4">
          <div class="bg-therd text-white border-white border-4 py-20 text-center flex items-center justify-center">
            <p class="font-bold">SEO対策のみの場合</p>
          </div>
          <div class="bg-therd text-white border-white border-4 py-20 text-center flex items-center justify-center">
            <p class="font-bold">MEO対策した場合</p>
          </div>
        </div>-->
      </div>
    </div>
</div>

<!-- ホームページが欲しいがどこに依頼すればよいか悩んでいる -->
<div class="bg-clr2  relative">
  <div class="title1 bg-primary text-white">
      <h2 class="container mx-auto font-bold text-small sm:text-regular md:text-large py-6 text-left">ホームページが欲しいがどこに依頼すればよいか悩んでいる</h2>
  </div>
  <div class="relative">
        <div class="triangle-right-left absolute inset-0 z-10"></div>
        <div class="container mx-auto py-4 md:py-6 relative z-20">
            <div class="bg-white w-full mx-auto bg-opacity-80 z-30 py-10">
                <div class="p-4 md:p-10 text-center">
                  <p class="font-bold text-small md:text-large">そのホームページ制作会社で本当に大丈夫？<br />成果を生み出せないホームページ制作会社の特徴</p>
                </div>
                <?php
                // コンテンツのカードを生成する関数
                function render_content_card($image_src, $alt_text, $title, $description) {
                    echo <<<HTML
                    <div class="bg-clr2 shadow flex flex-col">
                        <div class="px-4 py-2 md:py-10 text-center flex flex-col items-center justify-center flex-grow">
                            <img src="$image_src" alt="$alt_text" class="w-20" loading="lazy" width="100%" height="100%" draggable="false">>
                            <p class="font-bold text-small md:text-large pt-4">$title</p>
                        </div>
                        <div class="p-4 flex-grow flex items-start border-t-4 border-white">
                            <p class="w-full mx-auto text-small md:text-regular">$description</p>
                        </div>
                    </div>
                HTML;
                }
                ?>
                <div class="flex items-center justify-center grid grid-cols-1 md:grid-cols-3 gap-4 w-full px-4">
                    <?php
                    // コンテンツのデータを配列で定義
                    $content_data = [
                        [
                            "image_src" => get_template_directory_uri() . "/startup-lp-parts/images/no_good.svg",
                            "alt_text" => "ホームページはオリジナルデザインがウリ",
                            "title" => "オリジナルデザインがウリ",
                            "description" => "低価格でオリジナルデザインを前面に出しているホームページ制作会社は要注意！見た目はきれいでも、検索に引っかからなければ誰も見てくれません！"
                        ],
                        [
                            "image_src" => get_template_directory_uri() . "/startup-lp-parts/images/no_good.svg",
                            "alt_text" => "ホームページの制作料金・内容の記載がない",
                            "title" => "制作料金・内容の記載がない",
                            "description" => "記載の料金で何をしてくれるのかわからないと、依頼する側も不安になります。あとでできる・できないという話になるとストレスが溜まります。"
                        ],
                        [
                            "image_src" => get_template_directory_uri() . "/startup-lp-parts/images/no_good.svg",
                            "alt_text" => "ホームページが短納期",
                            "title" => "短納期",
                            "description" => "お客様の要望を聞いてしっかりしたHPを構築するには1ヶ月では短すぎます。また、短納期で作られたHPはほぼ使いまわしなので、検索順位に影響を与えません。"
                        ]
                    ];

                    // 各コンテンツカードをループで表示
                    foreach ($content_data as $content) {
                        render_content_card($content['image_src'], $content['alt_text'], $content['title'], $content['description']);
                    }
                    ?>
                </div>
            </div>
        </div>
  </div>

<!-- これらの悩みはすべて解決できます！ -->
<div class="bg-white  relative py-20 text-center">
<h2 class="font-bold text-regular sm:text-large md:text-xxl">これらの悩みは<span class="text-font1">すべて解決</span>できます！</h2>
</div>

<!-- 東北限定！ホームページ集客応援プラン -->
<div class="bg-primary py-10">
    <div class="container mx-auto py-4 md:py-10 ">
        <div class="bg-white mx-auto my-10 bg-opacity-80 z-50 p-2 md:p-4 md:p-10 md:p-20">
            <?php echo $MainText; ?>
            <div class="p-2 md:p-2 text-center">
            <?php echo $priceArea; ?>
            </div>
            <div class="p-2 md:p-2 text-center">
                <p class="font-bold text-small md:text-large">全5ページ</p>
                <p class="font-bold text-small">（内訳：TOP、会社概要、記事一覧、記事詳細、お問い合わせ）</p>
            </div>
            <?php
                // サービスカードを生成するテンプレート関数
                function render_service_card($title, $description) {
                    echo <<<HTML
                    <div class="shadow flex flex-col items-center justify-center text-center">
                        <p class="w-full block bg-font1 font-bold text-white text-small md:text-large py-4">$title</p>
                        <p class="w-full mx-auto text-small p-4 bg-white border border-8 border-font1 flex-grow flex flex-col">$description</p>
                    </div>
                HTML;
                }
            ?>

            <div class="flex items-center justify-center py-10">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4 w-full md:w-5/6 mx-auto">
                    <?php
                    // 各サービスのデータ
                    $services = [
                        [
                            "title" => "SEO対策で検索順位向上",
                            "description" => "ホームページ内部の要素を最適化し、検索順位の向上を目指します。キーワード最適化、URL構造最適化、内部リンク構造、ページ閲覧性向上、SSL対応、コーディング最適化など様々な観点からSEO対策を行います。"
                        ],
                        [
                            "title" => "コアウェブバイタル最適化",
                            "description" => "Googleが推奨する検索順位を決定するための評価基準に則ってホームページの構築を行います。ページの表示速度。アクションを起こした時の反応速度、ブラウザごとのレイアウトのずれに配慮したデザイン、構築を行います。"
                        ],
                        [
                            "title" => "スマホ対応でだれでも見やすく",
                            "description" => "インターネット利用者のほとんどがスマートフォンでの利用者のため、モバイルファーストを重視してよりスマートフォンで見やすい、利用しやすいホームページの構築を目指します。"
                        ],
                        [
                            "title" => "マップ対策もお任せ",
                            "description" => "Googleマイビジネスの登録から、情報設定、写真設定、営業日、休業日設定などすべての設定を行います。検索順位による別途費用請求は行いません。Googleマップによる集客や検索向上を目指します。"
                        ],
                        [
                            "title" => "自社による投稿機能",
                            "description" => "自社で更新できる機能を取り入れ、ホームページ公開後も定期的な情報発信を行えるようにいたします。新鮮な情報を即座にユーザーに届けることで集客の足掛かりとなります。"
                        ],
                        [
                            "title" => "ご相談は無料",
                            "description" => "ホームページを作るまでに必要な競合調査や強み・弱みの発掘など効果的なホームページにするにはどうすれば良いかしっかりご提案いたします。契約するまでは一切費用はいただきません。"
                        ]
                    ];

                    // 各サービスカードを出力
                    foreach ($services as $service) {
                        render_service_card($service['title'], $service['description']);
                    }
                    ?>
                </div>
            </div>

            <div class="p-4 md:p-10 text-center">
              <p class="font-bold text-small md:text-large hidden md:block">※　追加オプションでホームページのカスタマイズも可能です！<span class=""></span><a href="<?php echo home_url('/cost/cost_website'); ?>" class="text-font1 cursor-pointer" target="_blank">詳しくはこちら→</a></p>
            </div>
            <?php echo $AreaText; ?>
        </div>


    <!-- 東北限定！ホームページ集客応援プランのここが凄い -->
    <?php
      // セクションごとのタイトルと説明を出力するテンプレート関数
      function render_section($title, $description) {
          echo <<<HTML
          <div class="py-4 text-left pt-10">
              <h4 class="img-icon2 bg-left bg-no-repeat bg-contain font-bold text-small md:text-large text-white pl-10 md:pl-16">$title</h4>
          </div>
          <p class="text-small md:text-regular bg-white p-4 my-4 text-left">$description</p>
      HTML;
      }
      ?>

      <div class="py-10 text-center">
          <h3 class="font-bold text-white py-10 text-small sm:text-regular md:text-large md:text-xl bg-right bg-no-repeat bg-contain md:pr-16 md:img-icon1">
              ホームページ集客応援プランのここが凄い
          </h3>

          <?php
          // 各セクションのデータ
          $sections = [
              [
                  "title" => "MEO（Googleマップ最適化）でGoogleマップからの集客もできる！",
                  "description" => "Googleマップで情報を最適化し、地元の顧客にアピールするための戦略の一環として利用します。特に地元のユーザーにビジネスを見つけやすくするのでビジネスの評判を向上させ、ポジティブなレビューを強調することで信頼性を高めます。店舗型のお客様に対し最も効果的なご提案をいたします。"
              ],
              [
                  "title" => "写真素材・原稿作成も任せられて制作時の負担が少ない！",
                  "description" => "写真撮影、原稿作成については基本的に料金はいただきません。私たちは可能な限り自分たちで撮影できる部分については自分たちで撮影していきます。どうしても撮影が難しい場所や商品については別途ご用意していただきます。原稿に関してもこちらで仮原稿を作成し、その上で必要な部分については修正をお願いする形をとっているため、お客様の作業負担を減らすことができます。"
              ],
              [
                  "title" => "ユーザビリティに配慮したサステナブルデザイン",
                  "description" => "ウェブ開発者やデザイナーが技術的な側面と環境への責任を結びつけ、持続可能性を考慮してサステナブルデザインを提唱しています。これにより、ウェブサイトがより効果的かつ環境に配慮したものとなり、同時にユーザーエクスペリエンスも向上します。ページの読み込み速度やリソースの最適化を通じて、エネルギーの効率的な利用を図ります。"
              ],
              [
                  "title" => "コアウェブバイタルを意識したSEO対策で検索順位＆集客に効果的！",
                  "description" => "SEOには内部SEO対策、外部SEO対策と呼ばれるものがあり、さらに内部SEO対策にもGoogleの公開している評価基準に沿ったいくつもの対策があります。私たちはキーワードなどの一般的なSEO対策の他、構造化の適正評価、ページスピード評価といったコア・ウェブ・バイタルといったものに配慮した構築を行います。"
              ],
              [
                  "title" => "自社で更新可能な仕組みで情報発信が楽！",
                  "description" => "ホームページは作成するだけではその効果を最大限発揮できません。その理由は継続的なホームページの更新と情報発信がGoogleの検索順位に影響するからです。私たちは情報発信をお客様で容易にできるようにWordPressで構築します。情報発信を積極的に行って自分のホームページの順位をぐんぐん上げていきましょう！"
              ]
          ];

          // 各セクションを出力
          foreach ($sections as $section) {
              render_section($section['title'], $section['description']);
          }
          ?>
      </div>

    </div>
</div>

<div class="triangle-wrapper2">
  <div class="triangle-down-center-full-width"></div>
</div>


    <!-- 東北限定！ホームページ集客応援プランをおすすめしたい方 -->

  <div class="p-4 md:p-10 text-center pt-20 md:pt-32">
    <h3 class="font-bold text-regular md:text-xl ">プランをおすすめしたい方</h3>
  </div>
  <?php
function render_card($title, $image_url, $description) {
    echo <<<HTML
    <div class="bg-white shadow flex flex-col">
        <div class="bg-primary px-4 py-4 md:py-10 text-center flex flex-col items-center justify-center flex-grow md:min-h-[350px]">
            <p class="font-bold text-white text-small md:text-regular pb-4">$title</p>
            <div class="h-24 md:h-44 w-full bg-no-repeat bg-center bg-contain lazy-load-bg bg-[url('$image_url')]"></div>
        </div>
        <div class="p-4 flex-grow flex items-start md:min-h-[230px]">
            <p class="w-full mx-auto text-small md:text-regular">$description</p>
        </div>
    </div>
HTML;
}
?>
<div class="bg-[url('../startup-lp-parts/images/recommend_shop.svg')] bg-[url('../startup-lp-parts/images/recommend_company.svg')] bg-[url('../startup-lp-parts/images/recommend_seo.svg')] bg-[url('../startup-lp-parts/images/recommend_money.svg')] bg-[url('../startup-lp-parts/images/recommend_site.svg')] bg-[url('../startup-lp-parts/images/recommend_customer.svg')]" ></div>
<div class="container mx-auto py-4 md:py-10">
    <div class="flex items-center justify-center grid grid-cols-1 md:grid-cols-2 gap-4 w-full px-4">
        <?php
        render_card(
            '個人事業主として起業・独立される方',
            '../startup-lp-parts/images/recommend_shop.svg',
            '設立当初は事業の周知が大事になってきます。低コストかつSEOに配慮したホームページで設立初期は情報発信を積極的に行うことで、ユーザーへ店舗を知ってもらいやすくなります。'
        );

        render_card(
            '社員数1~50人の小～中規模の企業',
            '../startup-lp-parts/images/recommend_company.svg',
            '東北に拠点を構える中小企業は地元に貢献したい、社会活動を支えたいとの想いから経営している所も多いです。そうした企業に対し、地場企業の魅力やメリットを最大限アピールすることができます。'
        );

        render_card(
            'SEOを意識したホームページが欲しい方',
            '../startup-lp-parts/images/recommend_seo.svg',
            '低コストでもSEOに配慮した構築を求める声は多数あります。内部SEOまでは対応しますがコアウェブバイタルまでは行わない会社ばかりですが、私たちはしっかりしたSEO対策を行います。'
        );

        render_card(
            'コストパフォーマンスを求める方',
            '../startup-lp-parts/images/recommend_money.svg',
            '他社のホームページ制作会社より低価格で高品質、さらには集客やSEO検索上位まで意識したコストパフォーマンス最強のホームページプランです。まさにスタートアップにはおすすめ！'
        );

        render_card(
            'WEBに関わる業務をすべてお任せしたい方',
            '../startup-lp-parts/images/recommend_site.svg',
            'お客様の中にはホームページやインターネット関係のことはよくわからないという方がいらっしゃいます。そんな悩みにこたえるために社員を一人雇うよりも安くWEB全般の対応をさせていただきます。'
        );

        render_card(
            'ホームページからの集客や販売に力を入れたい方',
            '../startup-lp-parts/images/recommend_customer.svg',
            '他社の制作会社では作ったら運用保守費用を貰ってほぼ放置するというのが一般的です。私たちはホームページを作ってからが本番だと考えているので、その後の集客力向上や販売促進を目的とした運用提案を行っていきます。'
        );
        ?>
    </div>
</div>


    <!-- 東北限定！ホームページ集客応援プランに最適な業種 -->
  <div class="title1 bg-primary text-white">
	<div class="container mx-auto text-large md:text-xl py-10 text-center">
    <h2 class="font-bold text-small sm:text-regular md:text-large">東北限定！ホームページ集客応援プラン<div class="hidden md:inline-block"><br /></div>に最適な業種</h2>
	</div>
</div>
<div class="triangle-wrapper1-gray">
<div class="triangle-down-center"></div>
</div>
<div class="container mx-auto py-4 md:py-10 ">
    <div class="p-4 md:p-10 text-center pt-20 md:pt-32">
      <h3 class="font-bold text-regular md:text-xl ">様々な業種のホームページ制作実績があります</h3>
    </div>
     <p class="text-center text-small md:text-regular">これまでのホーページ製作は個人から民間企業、自治体に関わるものもあります。<br />きっとクライアントの業種にマッチする提案ができるでしょう。</p>
      </div>




      <div class="flex items-center justify-center min-h-screen">
    <div class="grid grid-cols-2 md:grid-cols-3 w-full">
        <div class="bg-secondary text-center py-4 md:py-10">
            <div class="bg-shalf h-20 md:h-32 bg-no-repeat bg-center md:bg-contain lazy-load-bg bg-[url('../startup-lp-parts/images/Industry_company2.svg')]"></div>
            <p class="font-bold text-white text-regular md:text-large pt-6">企業コーポレート</p>
        </div>
        <div class="bg-therd text-center py-4 md:py-10">
            <div class="bg-shalf h-20 md:h-32 bg-no-repeat bg-center md:bg-contain lazy-load-bg bg-[url('../startup-lp-parts/images/Industry_house1.svg')]"></div>
            <p class="font-bold text-secondary text-regular md:text-large pt-6">不動産・土地</p>
        </div>
        <div class="bg-therd md:bg-secondary text-center py-4 md:py-10">
            <div class="bg-shalf h-20 md:h-32 bg-no-repeat bg-center md:bg-contain lazy-load-bg bg-[url('../startup-lp-parts/images/Industry_profession1.svg')] md:bg-[url('../startup-lp-parts/images/Industry_profession2.svg')]"></div>
            <p class="font-bold text-secondary md:text-white text-regular md:text-large pt-6">士業</p>
        </div>
        <div class="bg-secondary md:bg-therd text-center py-4 md:py-10">
            <div class="bg-shalf h-20 md:h-32 bg-no-repeat bg-center md:bg-contain lazy-load-bg bg-[url('../startup-lp-parts/images/Industry_dental2.svg')] md:bg-[url('../startup-lp-parts/images/Industry_dental1.svg')]"></div>
            <p class="font-bold text-white md:text-secondary text-regular md:text-large pt-6">歯科医院</p>
        </div>
        <div class="bg-secondary text-center py-4 md:py-10">
            <div class="bg-shalf h-20 md:h-32 bg-no-repeat bg-center md:bg-contain lazy-load-bg bg-[url('../startup-lp-parts/images/Industry_clinic2.svg')]"></div>
            <p class="font-bold text-white text-regular md:text-large pt-6">治療院・整骨院</p>
        </div>
        <div class="bg-therd text-center py-4 md:py-10">
            <div class="bg-shalf h-20 md:h-32 bg-no-repeat bg-center md:bg-contain lazy-load-bg bg-[url('../startup-lp-parts/images/Industry_medicine1.svg')]"></div>
            <p class="font-bold text-secondary text-regular md:text-large pt-6">薬局</p>
        </div>
        <div class="bg-therd md:bg-secondary text-center py-4 md:py-10">
            <div class="bg-shalf h-20 md:h-32 bg-no-repeat bg-center md:bg-contain lazy-load-bg bg-[url('../startup-lp-parts/images/Industry_kindergarten1.svg')] md:bg-[url('../startup-lp-parts/images/Industry_kindergarten2.svg')]"></div>
            <p class="font-bold text-secondary md:text-white text-regular md:text-large pt-6">幼稚園・保育園</p>
        </div>
        <div class="bg-secondary md:bg-therd text-center py-4 md:py-10">
            <div class="bg-shalf h-20 md:h-32 bg-no-repeat bg-center md:bg-contain lazy-load-bg bg-[url('../startup-lp-parts/images/Industry_school2.svg')] md:bg-[url('../startup-lp-parts/images/Industry_school1.svg')]"></div>
            <p class="font-bold text-white md:text-secondary text-regular md:text-large pt-6">塾・習い事</p>
        </div>
        <div class="bg-secondary text-center py-4 md:py-10">
            <div class="bg-shalf h-20 md:h-32 bg-no-repeat bg-center md:bg-contain lazy-load-bg bg-[url('../startup-lp-parts/images/Industry_eat2.svg')]"></div>
            <p class="font-bold text-white text-regular md:text-large pt-6">飲食業</p>
        </div>
        <div class="bg-therd text-center py-4 md:py-10">
            <div class="bg-shalf h-20 md:h-32 bg-no-repeat bg-center md:bg-contain lazy-load-bg bg-[url('../startup-lp-parts/images/Industry_jym1.svg')]"></div>
            <p class="font-bold text-secondary text-regular md:text-large pt-6">パーソナルジム</p>
        </div>
        <div class="bg-therd md:bg-secondary text-center py-4 md:py-10">
            <div class="bg-shalf h-20 md:h-32 bg-no-repeat bg-center md:bg-contain lazy-load-bg bg-[url('../startup-lp-parts/images/Industry_beauty1.svg')] md:bg-[url('../startup-lp-parts/images/Industry_beauty2.svg')]"></div>
            <p class="font-bold text-secondary md:text-white text-regular md:text-large pt-6">美容院・エステ</p>
        </div>
        <div class="bg-secondary md:bg-therd text-center py-4 md:py-10">
            <div class="bg-shalf h-20 md:h-32 bg-no-repeat bg-center md:bg-contain lazy-load-bg bg-[url('../startup-lp-parts/images/Industry_civil2.svg')] md:bg-[url('../startup-lp-parts/images/Industry_civil1.svg')]"></div>
            <p class="font-bold text-white md:text-secondary text-regular md:text-large pt-6">土木・建築</p>
        </div>
    </div>
</div>







    <!-- 東北限定！ホームページ集客応援プランはどんな人が契約できる？ -->


    <div class="py-20 bg-white">
<div class="p-4 md:p-10 text-center">
    <h4 class="font-bold text-small sm:text-regular md:text-large border-b-4 border-font2 inline leading-8 md:leading-normal">東北限定！ホームページ集客応援プランはどんな人が契約できる？</h4>
  </div>

  <div class="container mx-auto p-4">
    <div class="border-t-8 border-b-8 border-primary my-10 bg-white">
        <div class="grid grid-cols-1 md:grid-cols-3 md:gap-4">
            <div class="md:col-span-2 bg-white py-2 md:py-10 px-10">
              <h4 class="text-center md:text-left font-bold text-large md:text-xl py-4"><span class="text-font2">東北</span>限定</h4>
              <div class="py-2 block md:hidden">
                <div class=" bg-no-repeat bg-center bg-contain h-32 md:h-full lazy-load-bg  bg-[url('../startup-lp-parts/images/target2.svg')]"></div>
              </div>
                <p class="text-small md:text-regular">ホームページ制作は地域に差が出るものではないため、全国からクライアントを募る方が相談も多くなります。しかし、私自身が宮城県の出身ということもあり、東北で独立・起業される方へ最大限の手助けをしたいという想いから東北限定にしております。是非、東北で起業、独立、会社経営される方は私にもお手伝いをさせてください！</p>
            </div>
            <div class="md:col-span-1 bg-white py-2 md:p-6 hidden md:block">
              <div class=" bg-no-repeat bg-center bg-contain h-32 md:h-full lazy-load-bg  bg-[url('../startup-lp-parts/images/target2.svg')]"></div>
            </div>
        </div>
    </div>

    <div class="border-t-8 border-b-8 border-primary my-10 bg-white">
        <div class="grid grid-cols-1 md:grid-cols-3 md:gap-4">
            <div class="md:col-span-1 bg-white py-2 md:p-6 hidden md:block">
              <div class=" bg-no-repeat bg-center bg-contain h-32 md:h-full lazy-load-bg  bg-[url('../startup-lp-parts/images/target1.svg')]"></div>
            </div>

            <div class="md:col-span-2 bg-white py-2 md:py-10 px-10">
            <h4 class="text-center md:text-left font-bold text-large md:text-xl py-4">毎月<span class="text-font1">3</span>社限定</h4>
            <div class="py-2 block md:hidden">
              <div class=" bg-no-repeat bg-center bg-contain h-32 md:h-full lazy-load-bg  bg-[url('../startup-lp-parts/images/target1.svg')]"></div>
            </div>
                <p class="text-small md:text-regular">WEBの仕事を通してクライアントと接するうちに感じたことは、「もっとクライアントに寄り添いたい」との想いでした。<br />
                そのため、フリーランスでの活動では多くのクライアントを抱え込まず、なるべく一人ひとりに寄り添った仕事をしていきたいとの考えから毎月限定3社とさせていただいております。</p>
            </div>
        </div>
    </div>
</div>


</div>

    <!--こんなサービスを提供しているWEBSERVICPLANNINGとは？-->
    <div class="bg-primary py-10 md:py-20">
  <div class="container mx-auto py-10 bg-white hover:opacity-50">
    <a href="<?php echo home_url('/about'); ?>" target="_blank" id="popup-trigger" class="text-center cursor-pointer w-full text-center">
      <span class="font-bold text-large md:text-xl text-center block">こんなサービスを提供している</span>
        <img src="<?php echo get_template_directory_uri(); ?>/startup-lp-parts/images/logo.svg" class="w-5/6 mx-auto" alt="仙台ウェブサービスプランニング（WEB SERVICE PLANNING）" loading="lazy" width="100%" height="100%" draggable="false">
        <span class="font-bold text-center block">とは？</span>
      </a>
  </div>
</div>

    <!--運用サポートプランも充実-->
<div class="bg-clr2">
  <div class="container mx-auto py-4 md:py-10 ">
    <div class="p-4 md:p-10 text-center">
      <h3 class="font-bold text-regular md:text-large bg-white shadow-md p-4">運用サポートプランも充実</h3>
    </div>

    <div class="p-4 md:p-10 text-center">
      <h4 class="font-bold text-small md:text-xl ">運用方法に合わせた様々な運用サポートプランを用意しています。</h4>
    </div>

    <div class="p-4 md:p-10 text-center">
      <p class="text-small md:text-regular">ホームページは作ったらそれで終わりではありません。<br /><br />

      キーワードの妥当性や効果測定というのは公開後に運用してみないとわからず、これらを怠ると意味のないホームページになってしまいます。<br /><br />

      丁寧にPDCAサイクルを回しながら改善していくと、より集客力が高く収益性の高いホームページに
      ブラッシュアップされます。<br /><br />

      また、ホームページは存在しているだけで費用が発生します。<br /><br />

      ドメイン費用やサーバー費用、利用するツールによっては利用料なども毎月発します。<br /><br />

      毎月のランニングコストが負担になることはよく承知しているためしっかりご説明をさせていただいた上でご検討下さい。</p>
    </div>


    <div class="p-4 md:p-10 text-center">
      <h4 class="font-bold text-small md:text-xl text-font1">共通サポート内容</h4>
    </div>

    <?php
// サービスカードを生成する関数
function render_support_card($title, $note = '') {
    echo <<<HTML
    <div class="bg-white shadow flex flex-col h-full">
        <div class="relative p-4 text-center flex flex-col items-center justify-between h-full">
            <p class="font-bold text-small md:text-regular">$title</p>
            <span class="absolute bottom-0 text-small">$note</span>
        </div>
    </div>
HTML;
}
?>
<div class="flex items-center justify-center">
    <div class="grid grid-cols-2 md:grid-cols-4 gap-4 w-full">
        <?php
        // 各カードの情報を配列で定義
        $services = [
            ["title" => "修正・更新いつでも無料"],
            ["title" => "SSL対応", "note" => "(弊社所有サーバーの場合)"],
            ["title" => "ドメイン管理・運用"],
            ["title" => "WEBサーバー管理・運用"],
            ["title" => "メール・LINEサポート"],
            ["title" => "サイトセキュリティ対応"],
            ["title" => "サイトバックアップ対応"],
            ["title" => "メールアカウント設定対応"]
        ];

        // 各サービスカードを出力
        foreach ($services as $service) {
            $title = $service['title'];
            $note = isset($service['note']) ? $service['note'] : '';
            render_support_card($title, $note);
        }
        ?>
    </div>
</div>

  </div>

  <?php
// プランの詳細を生成する関数
function render_plan($title, $plan_name, $price, $content_before, $content_main, $content_after) {
    return <<<HTML
    <div class="bg-white shadow flex flex-col h-full">
        <div class="bg-primary px-4 py-4 text-center flex flex-col items-center justify-center">
            <p class="font-bold text-white text-small md:text-small pb-4 min-h-10 md:min-h-20">$title</p>
            <p class="font-bold text-white text-regular md:text-large pb-4">$plan_name</p>
            <div class="bg-white text-center py-2 w-full">
                <p class="text-font1 font-bold text-large">$price</p>
            </div>
        </div>
        <div class="p-4 flex-grow flex items-start">
            <p class="w-full mx-auto text-small">$content_before$content_main$content_after</p>
        </div>
    </div>
    HTML;
}

// 共通のコンテンツ
$content_main = "メールサーバー管理<br>";
$content_a_main = "Googlemap更新<br>アクセス解析ツール導入<br>";
$content_b_main = $content_a_main . "電話サポート<br>サーバー死活監視<br>";

// 各プランの内容を定義
$plan_a = render_plan(
    'ランニング費用を安く済ませたい方', 
    'ベーシックプラン', 
    '15,000円/月', 
    "メールアカウント管理（+5件）<br>ファイル転送容量(30M)<br>", 
    $content_a_main, 
    "無料更新枠(1時間/月)<br>追加開発費用割引(5%)<br>"
);

$plan_b = render_plan(
    'ホームページからの成果を重視したい方', 
    'ベーシックプラン', 
    '30,000円/月', 
    "メールアカウント管理（+20件）<br>ファイル転送容量(100M)<br>", 
    $content_b_main, 
    "バックアップ（毎週）<br>WordPressアップデート対応<br>無料更新枠(1時間/月)<br>追加開発費用割引(10%)<br>"
);

$plan_c = render_plan(
    '売上向上のための改善提案他、リスクにしっかり備えたい方', 
    'オリジナルプラン', 
    '45,000円/月', 
    "メールアカウント管理（+30件）<br>ファイル転送容量(300M)<br>", 
    $content_b_main, 
    "バックアップ（毎日）<br>WordPressアップデート対応<br>無料更新枠(2時間/月)<br>追加開発費用割引(15%)<br>"
);
?>

<!-- HTML部分 -->
<div class="container mx-auto py-4 md:py-10">
    <div class="flex items-center justify-center">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-4 w-full px-4 h-full">
            <!-- プランA -->
            <?php echo $plan_a; ?>
            <!-- プランB -->
            <?php echo $plan_b; ?>
            <!-- プランC -->
            <?php echo $plan_c; ?>
        </div>
    </div>
</div>






    <div class="p-4 md:p-4 text-center">
      <h4 class="w-5/6 md:w-full mx-auto font-bold text-small md:text-regular ">※新規ページ作成や構成が大きく変わる作業、新規コンテンツ追加や撮影を必要とするもの、障害児復旧作業は別途費用が発生します。</h4>
    </div>
    </div>


    <div class="container mx-auto py-4 md:py-4">
      <div class="p-4 md:p-10 text-center">
        <h3 class="font-bold text-small md:text-xl ">私たちの活動を支援していただいた方限定の<span class="text-font1 cursor-pointer">特別な割引！</span></h3>
     </div>

    <div class="flex items-center justify-center">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-4 w-full px-4 h-full">
            <div class="bg-white shadow flex flex-col h-full">
                <div class="px-4 py-4 text-center flex flex-col items-center justify-center">
                <img src="<?php echo get_template_directory_uri(); ?>/startup-lp-parts/images/special_icon1.svg" alt="仙台ウェブサービスプランニングのリンク貼り付け支援" class="py-2 w-20 mx-auto h-16" loading="lazy" width="100%" height="100%" draggable="false">>
                    <p class="font-bold text-small md:text-regular md:pb-4 min-h-16 md:min-h-20">仙台ウェブサービスプランニングのリンク貼り付け支援</p>
                    <p class="text-small md:text-small md:pb-4 min-h-20 md:min-h-32">ご契約いただいたクライアントのホームページ内に私たちのホームページリンクの貼り付けを許可いただいた場合、運用保守費用を割引をいたします。</p>
                </div>
                <div class="p-4 flex flex-col items-center justify-center text-center">
                    <p class="font-bold w-full mx-auto text-small md:pb-4">運用サポートプランから永続割引</p>
                    <p class="text-font1 font-bold text-regular md:text-large">-1,000円引/月</p>
                </div>
            </div>

            <div class="bg-white shadow flex flex-col h-full">
                <div class="px-4 py-4 text-center flex flex-col items-center justify-center">
                <img src="<?php echo get_template_directory_uri(); ?>/startup-lp-parts/images/special_icon2.svg" alt="SNSによる仙台ウェブサービスプランニングの拡散・評価" class="py-2 w-20 mx-auto h-16" loading="lazy" width="100%" height="100%" draggable="false">>
                    <p class="font-bold text-small md:text-regular md:pb-4 min-h-16 md:min-h-20">SNSによる仙台ウェブサービスプランニングの拡散・評価</p>
                    <p class="text-small md:text-small md:pb-4 min-h-20 md:min-h-32">SNS等で私たちの活動を拡散していただける方には、1回の拡散につき翌月の運サポートプランを割引させていただきます。</p>
                </div>
                <div class="p-4 flex flex-col items-center justify-center text-center">
                    <p class="font-bold w-full mx-auto text-small md:pb-4">1回の拡散につき</p>
                    <p class="text-font1 font-bold text-regular md:text-large">-500円引/該当月</p>
                </div>
            </div>

            <div class="bg-white shadow flex flex-col h-full">
                <div class="px-4 py-4 text-center flex flex-col items-center justify-center">
                <img src="<?php echo get_template_directory_uri(); ?>/startup-lp-parts/images/special_icon3.svg" alt="東北地方のお客様のご紹介" class="py-2 w-20 mx-auto h-16" loading="lazy" width="100%" height="100%" draggable="false">>
                    <p class="font-bold text-small md:text-regular md:pb-4 min-h-16 md:min-h-20">お客様のご紹介</p>
                    <p class="text-small md:text-small md:pb-4 min-h-20 md:min-h-32">既に運用いただいているお客様から別のお客様をご紹介いただき、納品まで至った場合ご紹介いただいたお客様の運用サポートプランを割引させていただきます。</p>
                </div>
                <div class="p-4 flex flex-col items-center justify-center text-center">
                    <p class="font-bold w-full mx-auto text-small md:pb-4">1社ご契約につき</p>
                    <p class="text-font1 font-bold text-regular md:text-large">-10,000円引/納品月</p>
                </div>
            </div>
        </div>
    </div>


 </div>

    </div>
<!-- ホームページ制作の流れ -->
<div class="bg-white">
  <div class="title1 bg-primary text-white">
    <div class="container mx-auto text-large md:text-xl py-10 text-center">
      <h2 class="font-bold text-small sm:text-regular md:text-large">ホームページ制作の流れ</h2>
    </div>
  </div>
  <div class="triangle-wrapper1">
    <div class="triangle-down-center"></div>
  </div>

  <div class="container mx-auto py-4 md:py-10 ">
    <div class="p-4 md:p-10 text-center">
        <p class="text-small md:text-regular">SENDAI WEB SERVICE PLANNING（仙台ウェブサービスプランニング）ではお客様がホームページを通して求める成果をヒアリングし、お客様の目的に合ったご提案を行います。<br />
        お客様が気に入らなければ何度もご提案し、ご納得するまで打ち合わせを重ねます。<br />
        また、ヒアリングからご提案、デザイン、製造、公開、公開後の運用サポートまでワンストップで行うため安心してご相談いただくことができます。</p>
    </div>

    <?php
    // フローのカードを生成する関数
    function render_flow_card($step_number, $title, $description, $is_last_step = false) {
        echo <<<HTML
        <div class="my-10 bg-white">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                <div class="md:col-span-1 bg-primary p-2 md:p-4 flex items-center justify-center">
                    <p class="text-white">$step_number. $title</p>
                </div>
                <div class="md:col-span-2 bg-white py-4 px-2 md:px-10 border-4 border-clr2">
                    <p class="text-small md:text-regular">$description</p>
                </div>
            </div>
    HTML;

        // 最後のステップでない場合のみ三角形の装飾を追加
        if (!$is_last_step) {
            echo <<<HTML
            <div class="triangle-wrapper1 my-10">
                <div class="triangle-down-center2"></div>
            </div>
    HTML;
        }

        echo "</div>"; // カード全体を閉じる
    }
    ?>

    <div class="my-10">
        <?php
        // 各ステップのデータを配列で定義
        $flow_steps = [
            ["number" => "1", "title" => "お問い合わせ", "description" => "まずはホームページまたはLINEからご相談下さい。ご相談の際はどんなことに悩んでいるか詳しく記載してください。"],
            ["number" => "2", "title" => "ヒアリング", "description" => "お客様の悩み、ホームページを通した目標などを詳しくヒアリングします。また社内の見学をお願いすることもあります。"],
            ["number" => "3", "title" => "ご提案", "description" => "ヒアリングをもとにご提案書を作成し、プレゼンをさせていただきます。気に入らなければ何度でもご提案させていただきます。"],
            ["number" => "4", "title" => "契約締結", "description" => "提案書をもとに両者合意できたら契約書の締結を行います。"],
            ["number" => "5", "title" => "制作打ち合わせ", "description" => "詳細な制作内容についてヒアリングします。こちらが要件定義（どんなホームページを作るか）のもとになります。"],
            ["number" => "6", "title" => "製造・進捗報告", "description" => "打ち合わせ内容をもとに製造を進めます。一定のタイミングで進捗報告の打ち合わせをさせていただきます。"],
            ["number" => "7", "title" => "テスト", "description" => "公開前の確認作業を行います。こちらはお客様の検収期間も含まれますのでここで間違い等を洗い出します。"],
            ["number" => "8", "title" => "公開作業", "description" => "全てのテストが完了したらドメイン・サーバーを契約して公開作業を行います。"],
            ["number" => "9", "title" => "運用サポート", "description" => "公開後は運用サポートのプラン内容によって定期的にホームページのブラッシュアップを行います。これから長いお付き合いになりますがどうぞよろしくお願いします！"]
        ];

        // 各フローステップをループで表示
        $total_steps = count($flow_steps); // ステップの総数
        foreach ($flow_steps as $index => $step) {
            // 最後のステップかどうかを判定
            $is_last_step = ($index === $total_steps - 1);

            // カードを表示
            render_flow_card($step['number'], $step['title'], $step['description'], $is_last_step);
        }
        ?>
    </div>

  </div>

  </div>
</div>

<div class="bg-clr2">
  <div class="container mx-auto py-4 md:py-10 ">
    <div class="p-4 md:p-10 text-center">
      <h3 class="font-bold text-small md:text-xl ">よくあるご質問</h3>
    </div>
    <div class="p-4 md:p-10 text-center">
        <h4 class="text-small md:text-regular ">これまで仕事で関わっていただいたお客様から頂いた質問・疑問をまとめています。この中にない疑問があればお気軽にご連絡下さい。</h4>
    </div>

    <?php
    // 質問と回答を生成する関数
    function render_faq_item($question, $answer) {
        echo <<<HTML
        <div class="py-4 md:py-10">
            <p class="text-small md:text-regular font-bold border-b-4 border-font2 py-4 relative pl-16 img-icon3">$question</p>
            <p class="text-small md:text-regular py-4 relative pl-16 img-icon4">$answer</p>
        </div>
    HTML;
    }
    ?>

<div class="py-4 md:py-10">
    <?php
    // 質問と回答を配列で定義
    $faqs = [
        [
            "question" => "名刺代わりのホームページで良いのでページ数をもっと少なくしたい",
            "answer" => "TOPページ含む全5ページをプラン内で記載しておりますが、これは検索時の上位表示を考慮した最低ラインです。ホームページを最大限活用し、お客様の収益を最大限増やしていきたいので敢えて最低ラインを設けております。本来はもっとページ数を増やしてSEO対策を行った方が検索順位も上位表示しやすいですが、コストも考慮し、まずは最低ラインからのご提案とさせていただいております。3ページ程度の名刺代わりのホームページで良い場合は、検索順位に貢献できないことを納得いただいた上であれば金額麺含めて対応可能です。"
        ],
        [
            "question" => "自社で更新できる投稿機能は不要なので、金額を安くしてほしい",
            "answer" => "投稿機能を削除した分、多少料金は安価にはなりますが、すでにパッケージ化してある構成から外れて0から制作をすることになるため、大幅な減額にはなりません。TOP含む全5ページで同様のサービスを行った場合、大体−20,000円ほど減額できるかと思います。"
        ],
        [
            "question" => "ホームページの他、広告運用やWEBコンサルティングなど関連する業務も合わせてお願いしたい。",
            "answer" => "私たちは様々なスキルを持った人たちが個人、法人問わずワンチームで対応できる体制を取っております。そのためホームページ制作だけに関わらず、Google広告運用代行、改善提案、WEBコンサルティング、名刺デザイン、チラシデザイン、販促品提案、看板デザイン、その他DTPデザイン、グラフィックデザイン、システム開発、アプリケーション開発、WEB研修など多岐にわたってご提案することが可能です。ご興味があればまずはお気軽にご相談下さい！"
        ],
        [
            "question" => "更新依頼は何度でも無料なの？",
            "answer" => "はい、事前に更新範囲を両社で取り決めを行います。取り決めた範囲内であれば何度でも更新対応を無料で行います。取り決め外の部分に関しても1時間当たりまでは無料で対応いたします。ただし、構成を大きく変える場合、新たにページを追加する場合、弊社でホームページ運用とは違う分野で作業が発生する場合は別途費用が発生します。"
        ],
        [
            "question" => "アクセス解析レポートによる改善提案は可能？",
            "answer" => "はい、運用サポートプランによって解析レポートの提出及び改善提案を行います。一般的なマーケティング会社ではレポート提出と改善提案は切り分けて費用が発生したり、検索時の順位によって費用が増加したりと中々運用するにも障壁が高いと感じがちです。私たちはGoogleアナリティクス及びサーチコンソールをベースとしたアクセス解析レポート及び改善提案を行います。"
        ],
        [
            "question" => "ホームページをこれから検討したいのですがまずは相談からお願いできますか？",
            "answer" => "私たちは、東北で起業・独立して頑張っておられる方を応援したいとの気持ちからこのサービスを提供させていただいております。なので、ホームページに関わらず私たちのスキルがお客様に役立ちそうであれば、なんでもお気軽にご相談ください。他社様のホームページ制作会社の見積もり精査から今後の事業展開までなんでもご相談下されば私たちの持てるスキルを駆使して、お客様と一緒に悩みや不安を一緒に解決に導くお手伝いをいたします！"
        ],
        [
            "question" => "今のホームページの運用保守をお願いしている会社から乗り換えたいのですが可能ですか？",
            "answer" => "はい、運用保守のみの契約も可能です。実は現在運用保守をされている会社様に不満があるお客様は結構多いです。理由はやはり、更新対応が遅い、できないことが多い、の2点が理由として最も多いです。私たちはこれらの理由を前提に更新対応無料とコミュニケーションツールを提案させていただいております。ただし、その場合はホームページに記載してあるプラン・料金ではなくヒアリングをしたのちに必要な保守範囲を決めたうえで料金のご提案をさせていただきますので、多少お時間がかかることをご了承ください。"
        ],
        [
            "question" => "打ち合わせに費用は発生しますか？",
            "answer" => "基本的に契約締結までの間は打ち合わせにかかる費用は発生しません。これは私たちからお願いですが何度でも顔を合わせてお客様の仕事のことを深く知ることでより良い提案が可能になります。そのため可能な限りお客様と話しをして、見て、感じてお客様のことを知りたいと考えているため、是非何度でもお打合せをさせてください。契約後に関しては基本的に打ち合わせを行うタイミングが決まっておりますので都度タイミングに合わせてお打合せをさせていただいております。"
        ]
    ];

    // 各質問と回答をループで表示
    foreach ($faqs as $faq) {
        render_faq_item($faq['question'], $faq['answer']);
    }
    ?>
</div>

  </div>
</div>


<!-- お申込み・ご相談はこちら -->
<div class="" id="contact-form">
    <div class="title1 bg-primary text-white">
        <div class="container mx-auto md:text-xl py-6 text-center">
            <h2 class="font-bold text-small md:text-large">お申込み・ご相談はこちら</h2>
        </div>
    </div>
    <div class="triangle-wrapper1">
        <div class="triangle-down-center"></div>
    </div>

    <div class="container mx-auto py-4 md:py-10 ">
        <div class="p-4 md:p-10 text-center">
            <h3 class="font-bold text-small md:text-regular ">お申込み・ご相談はLINEまたはメールよりお問い合わせください</h3>
        </div>
        <div class="py-4 md:py-10 mx-auto w-full md:w-80">
            <div class="p-4 md:p-10 text-center">
                <h4 class="font-bold text-small md:text-xl ">公式LINE</h4>
            </div>
            <picture>
                <source srcset="<?php echo get_template_directory_uri(); ?>/img/line_qr.webp" type="image/webp">
                <img src="<?php echo get_template_directory_uri(); ?>/img/line_qr.png" alt="仙台ウェブサービスプラン二ングの公式LINEはこちら" loading="lazy" width="100%" height="100%" draggable="false">>
            </picture>
        </div>
        <div class="py-4 md:py-10 text-center" id="lp1-contact">
            <h4 class="font-bold text-small md:text-xl ">メールによるお問い合わせ</h4>
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                <div class="w-11/12 md:w-2/3 mx-auto text-left py-10" id="contact-form-area">
                    <?php the_content(); ?>
                </div>
            <?php endwhile; endif; ?>
        </div>
    </div>
</div>
