<?php get_header(); ?>
<main class="m-0 p-0 relative z-10">
	<div class="py-20 md:py-32 bg-clr4">
		<?php
		// 最新記事を取得するクエリ
		$paged = get_query_var('paged') ? get_query_var('paged') : 1; // 現在のページ番号
		$args = array(
			'posts_per_page' => 9, // 表示件数
			'orderby'        => 'date', // 日付順
			'order'          => 'DESC', // 降順
			'paged'          => $paged, // ページ番号
		);
		$query = new WP_Query($args);

		if ($query->have_posts()) : ?>
			<div class="grid grid-cols-2 md:grid-cols-3 gap-6 py-32">
				<?php while ($query->have_posts()) : $query->the_post(); ?>
					<?php
					// サムネイルURLを取得（なければデフォルト画像）
					$thumbnail_url = get_the_post_thumbnail_url(get_the_ID(), 'large') ?: get_template_directory_uri() . '/img/post_sample.svg';
					?>
					<article id="post-<?php the_ID(); ?>" 
						<?php post_class('text-white shadow h-40 md:h-[320px] relative overflow-hidden transition-transform duration-300 ease-in-out hover:scale-105 hover:z-10'); ?>>
						
						<!-- サムネイル画像 -->
                         <a href="<?php echo esc_url(get_permalink()); ?>">
						<img src="<?php echo esc_url($thumbnail_url); ?>" 
							alt="<?php echo esc_attr(get_the_title()); ?>" 
							class="object-cover w-full h-full" loading="lazy" draggable="false">
                        </a>
						<a href="<?php echo esc_url(get_permalink()); ?>" class="text-primary h-full block w-full hover:opacity-80 transition-colors">
							<!-- 投稿日とタイトルを含む部分 -->
							<div class="absolute bottom-0 left-0 w-full bg-white bg-opacity-70 p-2 sm:p-4">
								<!-- 投稿日 -->
								<time datetime="<?php echo get_the_date('c'); ?>" class="text-xx-small sm:text-small block">
									<?php echo get_the_date(); ?>
								</time>
								
								<!-- 記事タイトル -->
								<h3 class="text-xx-small sm:text-small md:text-regular font-bold mt-2">
									<?php
									$title = get_the_title();
									$max_length = wp_is_mobile() ? 15 : 25;
									echo esc_html(mb_strlen($title) > $max_length ? mb_substr($title, 0, $max_length) . '…' : $title);
									?>
								</h3>
								
								<p class="text-right pr-10 bg-[url('../img/icon11.svg')] bg-no-repeat bg-right bg-contain text-xx-small sm:text-small">詳しくみる</p>
							</div>
						</a>
					</article>
				<?php endwhile; ?>
			</div>
    </div>
	    <!-- ページネーション -->
		<div class="mt-8 flex justify-center">
        <ul class="flex space-x-4 p-4">
            <?php
            $links = paginate_links(array(
                'total'        => $query->max_num_pages,
                'current'      => $paged,
                'format'       => '?paged=%#%',
                'show_all'     => false,
                'type'         => 'array',
                'prev_text'    => __('&laquo; Previous'),
                'next_text'    => __('Next &raquo;'),
                'before_page_number' => '<span class="">',
                'after_page_number' => '</span>',
            ));

            if ($links) {
                // "最初へ"リンク
                if ($paged > 1) {
                    echo '<li class="transition-colors duration-300 ease-in-out px-3 py-1 bg-primary rounded text-white hover:bg-white hover:text-primary"><a href="' . esc_url(get_pagenum_link(1)) . '" class="">最初へ</a></li>';
                }

                foreach ($links as $link) {
                    // 現在のページ番号を判定してクラスを追加
                    if (strpos($link, 'current') !== false) {
                        echo '<li class=" px-3 py-1 rounded text-primary">' . $link . '</li>';
                    } else {
                        echo '<li class="transition-colors duration-300 ease-in-out px-3 py-1 bg-primary rounded text-white hover:bg-white hover:text-primary">' . $link . '</li>';
                    }
                }

                // "最後へ"リンク
                if ($paged < $query->max_num_pages) {
                    echo '<li class="transition-colors duration-300 ease-in-out px-3 py-1 bg-primary rounded text-white hover:bg-white hover:text-primary"><a href="' . esc_url(get_pagenum_link($query->max_num_pages)) . '" class="">最後へ</a></li>';
                }
            }
            ?>
        </ul>
    </div>
	</div>



<?php else : ?>
    <p class="text-center text-gray-500">記事がありません。</p>
<?php endif; ?>

<?php
// グローバル変数を復元
wp_reset_postdata();
?>
<?php
get_footer();
?>