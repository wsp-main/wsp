<?php include get_template_directory() . '/startup-lp-parts/header.php'; ?>

<div class="container my-8 mx-auto h-screen">
    <iframe id="pdf-frame" 
            src="<?php echo esc_url(get_template_directory_uri()); ?>/img/plan3.pdf#toolbar=0" 
            width="100%" 
            height="100%" 
            style="border:none;" 
            loading="lazy" 
            title="PDF Document">
    </iframe>
</div>

<script>
    // iframeの高さを調整
    document.getElementById('pdf-frame').addEventListener('load', function() {
        this.style.height = this.contentWindow.document.documentElement.scrollHeight + 'px';
    });
</script>

<?php include get_template_directory() . '/startup-lp-parts/footer.php'; ?>
