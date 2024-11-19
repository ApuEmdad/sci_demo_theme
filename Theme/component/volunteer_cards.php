<div class="volunteer-area default-padding bottom-less">
    <?php if (isset($title) && $title) {
        include 'volunteer_title.php';
    } ?>

    <div class="container">
        <div class="volunteer-items text-center">
            <div class="row">
                <?php for ($i = 0; $i <= 2; $i++) { ?>
                    <?php include 'volunteer_card.php' ?>
                <?php } ?>
            </div>
        </div>
    </div>