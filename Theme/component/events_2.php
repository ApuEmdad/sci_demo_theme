<div class="event-area carousel-shadow default-padding bg-gray">
    <!-- Fixed Shape -->
    <div class="shape-bottom-left">
        <img src="assets/img/shape/8.png" alt="Shape">
    </div>
    <!-- Fixed Shape -->
    <div class="container">
        <div class="heading-left">
            <div class="row">
                <div class="col-lg-6 left-info">
                    <h5>Upcoming Events</h5>
                    <h2>
                        Join to our upcoming event and get involved
                    </h2>
                </div>
                <div class="col-lg-6 right-info">
                    <p>
                        Everything melancholy uncommonly but solicitude inhabiting projection off. Connection stimulated estimating excellence an to impression.
                    </p>
                    <a class="btn circle btn-md btn-gradient wow fadeInUp" href="#">View All <i class="fas fa-angle-right"></i></a>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="event-items event-carousel owl-carousel owl-theme">
            <?php for ($i = 0; $i < 3; $i++) {
                include 'event_card_2.php';
            } ?>
        </div>
    </div>
</div>