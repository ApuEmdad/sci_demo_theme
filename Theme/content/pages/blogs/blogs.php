<div class="blog-area default-padding bottom-less">
    <div class="container">
        <div class="blog-items">
            <div class="row">
                <?php for ($i = 0; $i < 6; $i++) {
                    include 'component/blog_card.php';
                } ?>
            </div>
        </div>
    </div>
    <?php include 'component/pagination.php'; ?>
</div>