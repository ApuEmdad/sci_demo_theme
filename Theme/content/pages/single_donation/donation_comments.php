<div class="comments">
    <div class="comments-area">
        <div class="comments-title">
            <h4>
                5 comments
            </h4>
            <!-- Start Donation Comments -->
            <?php for ($i = 0; $i < 3; $i++) {
                include 'donation_comment.php';
            } ?>
            <!-- End Donation Comments -->

        </div>
        <!-- Start Donation Form -->
        <?php include 'donation_form.php' ?>

        <!-- End Donation Form -->

    </div>
</div>