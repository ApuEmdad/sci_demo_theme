<div class="wedo-area inc-shadow carousel-shadow bg-gray default-padding-top">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="thumb">
                    <img src="assets/img/about/1.jpg" alt="Thumb">
                    <a href="https://www.youtube.com/watch?v=owhuBrGIOsE" class="popup-youtube light video-play-button item-center">
                        <i class="fa fa-play"></i>
                    </a>
                    <div class="overlay">
                        <div class="fun-fact">
                            <div class="timer" data-to="35" data-speed="2000"></div>
                            <span class="medium">Years of Foundation</span>
                        </div>
                        <div class="fun-fact">
                            <div class="timer" data-to="678" data-speed="5000"></div>
                            <span class="medium">Monthly donors</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 info">
                <h5>What we do</h5>
                <h2 class="area-title">We Donate to charity causes around the world.</h2>
                <p>
                    Continual say suspicion provision you neglected sir curiosity unwilling. Simplicity end themselves increasing led day sympathize yet. General windows effects not are drawing man garrets.
                </p>
                <ul class="wedo-carousel owl-carousel owl-theme">
                    <?php for ($i = 1; $i <= 4; $i++) { ?>
                        <li>
                            <?php include 'service_card.php' ?>

                        </li>
                    <?php } ?>
                </ul>
            </div>
        </div>
    </div>
</div>