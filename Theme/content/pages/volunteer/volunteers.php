<div class="volunteer-area default-padding bottom-less">
    <div class="container">
        <div class="volunteer-items text-center">
            <div class="row">
                <?php for ($i = 0; $i <= 2; $i++) { ?>
                    <?php include 'component/volunteer_card.php' ?>
                <?php } ?>
            </div>
        </div>
    </div>
    <?php include 'component/pagination.php' ?>
</div>