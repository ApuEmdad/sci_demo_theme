<div class="causes-area bg-gray default-padding">
    <div class="container">
        <div class="causes-items">
            <div class="row">
                <?php
                for ($i = 0; $i < 4; $i++) { ?>
                    <div class="single-item col-lg-4 col-md-6">
                        <?php include 'component/donation_card_2.php'; ?>
                    </div>
                <?php } ?>

            </div>
            <!-- Paginatin -->
            <?php include 'component/pagination.php'; ?>
            <!-- End Paginatin -->
        </div>
    </div>
</div>