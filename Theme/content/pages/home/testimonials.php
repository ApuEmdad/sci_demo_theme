<div class="testimonials-area carousel-shadow default-padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2">
                <div class="site-heading text-center">
                    <h5>Testimonials</h5>
                    <h2>
                        What people say <br> About Poora
                    </h2>
                    <div class="heading-divider"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="testimonial-items testimonial-carousel owl-carousel owl-theme">
                    <?php
                    for ($i = 0; $i < 3; $i++) {
                        include 'component/testimonial_card.php';
                    }
                    ?>

                </div>
            </div>
        </div>
    </div>
</div>