<?php get_header(); ?>
<main class="m-0 p-0 relative z-10">
	<div class="py-20 md:py-32">
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                <div class="w-11/12 md:w-2/3 mx-auto text-left py-10" id="contact-form-area-main">
                    <?php the_content(); ?>
                </div>
            <?php endwhile; endif; ?>
    </div>

<?php
get_footer();
?>