<div class="event-area carousel-shadow default-padding bottom-less bg-gray">
    <div class="container">
        <div class="event-grid-items">
            <?php for ($i = 0; $i < 3; $i++) {
                include 'component/event_card.php';
            } ?>

        </div>
    </div>
    <?php include 'component/pagination.php' ?>
</div>