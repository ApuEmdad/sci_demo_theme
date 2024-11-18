<!-- Start Blog
    ============================================= -->
<div class="blog-area full-blog right-sidebar full-blog default-padding">
    <div class="container">
        <div class="blog-items">
            <div class="row">
                <div class="blog-content col-lg-8 col-md-12">
                    <div class="blog-item-box">
                        <?php for ($i = 0; $i < 3; $i++) {
                            include 'blog_summary.php';
                        } ?>
                    </div>

                    <!-- Pagination -->
                    <div class="row">
                        <?php include 'component/pagination.php'; ?>

                    </div>
                </div>
                <!-- Start Sidebar -->
                <?php include 'blogs_sidebar.php'; ?>
                <!-- End Start Sidebar -->
            </div>
        </div>
    </div>
</div>
<!-- End Blog -->