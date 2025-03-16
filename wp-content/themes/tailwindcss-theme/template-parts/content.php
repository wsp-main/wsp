<div class="container mx-auto py-8">
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
        <?php if ( have_posts() ) : ?>
            <?php while ( have_posts() ) : the_post(); ?>
                <article id="post-<?php the_ID(); ?>" <?php post_class( 'bg-white p-6 shadow rounded-lg' ); ?>>
                    <!-- 記事タイトル -->
                    <h2 class="text-2xl font-bold mb-4">
                        <a href="<?php echo esc_url( get_permalink() ); ?>" class="text-gray-800 hover:text-blue-500">
                            <?php the_title(); ?>
                        </a>
                    </h2>
                    
                    <!-- 投稿日 -->
                    <time datetime="<?php echo get_the_date( 'c' ); ?>" class="text-sm text-gray-600 block mb-2">
                        <?php echo get_the_date(); ?>
                    </time>
                    
                    <!-- 抜粋 -->
                    <div class="text-gray-700">
                        <?php the_excerpt(); ?>
                    </div>
                </article>
            <?php endwhile; ?>
        <?php else : ?>
            <p class="col-span-3 text-center text-gray-500">記事がありません。</p>
        <?php endif; ?>
    </div>
</div>
