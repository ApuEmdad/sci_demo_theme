<div class="causes-area bg-gray default-padding">
    <div class="container">
        <div class="causes-items">
            <div class="row">
                <div class="col-lg-12">
                    <?php
                    for ($i = 0; $i < 3; $i++) {
                        include 'component/donation_card.php';
                    }
                    ?>
                </div>
                <?php include 'component/pagination.php'; ?>
            </div>
        </div>
    </div>
</div>