<div class="event-area carousel-shadow default-padding bg-gray">
    <!-- Fixed Shape -->
    <div class="shape-bottom-left">
        <img src="assets/img/shape/8.png" alt="Shape">
    </div>
    <!-- Fixed Shape -->
    <?php include 'event_title.php' ?>
    <div class="container">
        <div class="event-items event-carousel owl-carousel owl-theme">
            <?php for ($i = 0; $i < 3; $i++) {
                include 'event_card_2.php';
            } ?>
        </div>
    </div>
</div>