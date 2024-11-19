<div class="event-area carousel-shadow default-padding bg-gray">
    <div class="container">
        <div class="event-items event-carousel owl-carousel owl-theme">
            <?php for ($i = 0; $i < 3; $i++) {
                include 'component/event_card_2.php';
            } ?>
        </div>
    </div>
    <?php include 'component/pagination.php' ?>
</div>