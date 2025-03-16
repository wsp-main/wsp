
</main>

<footer class="bg-primary w-full">
		<div class="container mx-auto py-32">
		<img src="<?php echo get_template_directory_uri(); ?>/startup-lp-parts/images/logo.svg" alt="仙台ウェブサービスプランニング（WEB SERVICE PLANNING）" class="w-full" loading="lazy" width="100%" height="100%" draggable="false">
		</div>
	<div class="bg-white mx-auto text-center text-gray-500 py-2">
		&copy; <?php echo date_i18n( 'Y' );?> - <?php echo get_bloginfo( 'name' );?>
	</div>
</footer>

</div>

<!-- 受注件数表示エリア -->
 <!-- 受注管理用ファイル -->
 <?php require get_template_directory() . '/startup-lp-parts/parts/current_value.php'; ?>
 <!-- TOPスクロールボタン -->
 <button id="scrollToTop" class="fixed bottom-0 right-0 py-4 px-6 bg-font2 md:bg-custom-gradient text-white rounded-sm shadow-lg transition-opacity duration-300 ease-in-out opacity-0 z-50 transition-opacity duration-300 hover:opacity-75">
    TOP<br />↑
</button>

<?php wp_footer(); ?>
</body>
</html>
