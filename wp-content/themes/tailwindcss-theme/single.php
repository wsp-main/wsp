<?php get_header(); ?>

<div class="w-11/12 sm:w-2/3 mx-auto py-20 sm:py-32">
    <style>
        /* --- 目次のスタイル --- */
        .toc-container {
            background-color: #f1f1f1; /* 目次の背景色 */
            padding: 16px;
            width: 60%;
            margin: 0 auto 32px;
        }

        .toc-container h2 {
            font-weight: bold;
            font-size: 1.2rem; /* 目次タイトルのフォントサイズ */
            margin-bottom: 10px;
        }

        .toc-container ul {
            list-style: none;
            padding-left: 0;
        }

        .toc-container > ul > li {
            padding: 6px 0; /* 各目次項目の上下余白 */
            margin-bottom: 6px;
            border-bottom: 1px solid #C2C1C1;
        }
		.toc-container > ul > li ul li {
            padding: 6px 0; /* 各目次項目の上下余白 */
            margin-bottom: 6px;
        }
		.toc-container li ul {
            padding-left: 10px; /* h3 の小項目の階層を示すインデント */
        }


        .toc-container li a {
            text-decoration: none;
        }

        .toc-container li a:hover {
            text-decoration: underline; /* ホバー時の下線 */
        }

        /* --- 記事本文のスタイル --- */
        .article-content > h2 {
            font-weight: bold;
            font-size: 1.85rem; /* h2 のフォントサイズ */
            padding: 2rem 0 0.6rem;
            margin-bottom: 0.6rem;
            margin-top:2.5rem;
            border-bottom: 4px solid #3D2784;
        }

        .article-content > h3 {
            font-weight: bold;
            font-size: 1.5rem; /* h3 のフォントサイズ */
            padding: 1.5rem 0 0.6rem 1.5rem;
            margin-top:1rem;
            margin-bottom: 0.6rem;
            border-bottom: 2px solid #F1F1F1;
            position: relative;
        }

        .article-content h3:before {
            content: "■";
            color: #A299C0;
            margin-right: 8px;
            position: absolute;
            left: 0;
        }
        .article-content ul {
            margin:2rem;
        }
        .article-content ul li {
            margin-bottom:1rem;
        }
        .article-content p {
            font-size: 1.2rem; /* 段落のフォントサイズ */
            padding: 10px 0;
            line-height: 1.6; /* 段落の行間 */
        }

        /* --- レスポンシブ対応 (スマートフォン用) --- */
        @media (max-width: 768px) {
            .toc-container {
                width: 100%;
            }

            .toc-container h2 {
                font-size: 1rem; /* 目次タイトルのフォントサイズ */
            }

            .toc-container li a {
                font-size: 0.85rem;
            }

            .article-content > h2 {
                font-size: 1.2rem; /* h2 のフォントサイズ */
            }

            .article-content > h3 {
                font-size: 1rem; /* h3 のフォントサイズ */
            }

            .article-content p {
                font-size: 1rem; /* 段落のフォントサイズ */
            }
        }
    </style>

<?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?>
    <!-- タイトル -->
            <h1 class="text-large md:text-xl lg:text-xxl pt-20 pb-10">
                <?php the_title(); ?>
            </h1>
             <!-- カテゴリ名 -->
             <div class="">
                <p class="bg-secondary px-4 py-2  inline-block text-white"><?php the_category(', '); ?></p>
            </div>

            <!-- タグ -->
            <div class="py-2">
                <?php if (get_the_tags()) : ?>
                <ul class="flex flex-wrap gap-2">
                    <?php the_tags('<li class="bg-font2 text-white px-3 py-1 rounded-full text-sm">', '</li><li class="bg-font2 text-white px-3 py-1 rounded-full text-sm">', '</li>'); ?>
                </ul>
            <?php endif; ?>
            </div>
            <!-- サムネイル -->
            <div class="w-full mb-10">
                <?php if (has_post_thumbnail()) : ?>
                    <?php the_post_thumbnail('full', ['class' => 'w-full']); ?>
                <?php else : ?>
                    <img src="<?php echo get_template_directory_uri() . '/img/post_sample.svg'; ?>" alt="仙台のホームページ製作は仙台ウェブサービスプランニング" class="w-full">
                <?php endif; ?>
            </div>
           
        <?php
        // 記事本文の目次用 ID を生成
        add_filter('the_content', function ($content) {
            $indexH2 = 1; // h2 用インデックス
            $indexH3 = 1; // h3 用インデックス
            $lastH2Index = 0; // 最後の h2 の番号を追跡

            // h2, h3 にユニークな ID と項番を付与
            $content = preg_replace_callback(
                '/<(h[23])(.*?)>(.*?)<\/\1>/',
                function ($matches) use (&$indexH2, &$indexH3, &$lastH2Index) {
                    $level = $matches[1];
                    if ($level === 'h2') {
                        $id = 'heading-' . $indexH2;
                        $lastH2Index = $indexH2;
                        $indexH3 = 1; // 新しい h2 が始まるたびに h3 をリセット
                        $number = $indexH2++ . '.';
                        return "<h2{$matches[2]} id=\"{$id}\">{$number} {$matches[3]}</h2>";
                    } elseif ($level === 'h3') {
                        $id = 'subheading-' . $lastH2Index . '-' . $indexH3;
                        $number = $lastH2Index . '-' . $indexH3++ . '.';
                        return "<h3{$matches[2]} id=\"{$id}\">{$number} {$matches[3]}</h3>";
                    }
                },
                $content
            );

            // 目次を生成
            preg_match_all('/<h2.*?id="(.*?)".*?>(\d+\.\s.*)<\/h2>|<h3.*?id="(.*?)".*?>(\d+-\d+\.\s.*)<\/h3>/', $content, $matches, PREG_SET_ORDER);

            if (!empty($matches)) {
                echo '<div class="toc-container">';
                echo '<h2>目次</h2>';
                echo '<ul>';
                $currentH2 = false; // 現在の h2 の状態を追跡

                foreach ($matches as $match) {
                    if (!empty($match[1])) {
                        // 新しい h2 を開始
                        if ($currentH2) {
                            echo '</ul></li>'; // 前の h2 を閉じる
                        }
                        echo "<li><a href=\"#{$match[1]}\">{$match[2]}</a>";
                        echo '<ul>'; // h3 用のネストを開始
                        $currentH2 = true;
                    } elseif (!empty($match[3])) {
                        // h3 の目次項目
                        echo "<li><a href=\"#{$match[3]}\">{$match[4]}</a></li>";
                    }
                }

                // 最後の h2 を閉じる
                if ($currentH2) {
                    echo '</ul></li>';
                }
                echo '</ul>';
                echo '</div>';
            }

            return $content;
        });
        ?>


<!-- 記事本文 -->
<div class="article-content">
    <?php
    // 記事本文を取得
    $content = apply_filters('the_content', get_the_content());

    // 正規表現で <p>...</p> を探して処理
    $content = preg_replace_callback(
        '/<p>(.*?)<\/p>/s', // <p> タグで囲まれたテキストをキャプチャ
        function ($matches) {
            // 「。」が含まれている場合、文章を「。」で分割して再構築
            if (strpos($matches[1], '。') !== false) {
                $split = preg_split('/。(?!$)/u', $matches[1]); // 「。」で分割（末尾の「。」は含める）
                // 分割した文章を <p>...</p> 形式に再構築
                return '<p>' . implode('。</p><p>', $split) . '</p>';
            }
            // 「。」が含まれていない場合はそのまま返す
            return $matches[0];
        },
        $content
    );

    // 変換後の内容を出力
    echo $content;
    ?>
</div>
</article>
    <?php endwhile; ?>
<?php endif; ?>

</div>

<?php get_footer(); ?>
