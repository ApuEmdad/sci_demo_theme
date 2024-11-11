<div class="recent-causes-area carousel-shadow causes-area default-padding-bottom">
    <div class="container">
        <div class="heading-left">
            <div class="row">
                <div class="col-lg-6 left-info">
                    <h5>Recent Causes</h5>
                    <h2>
                        Donate to charity causes around the world.
                    </h2>
                </div>
                <div class="col-lg-6 right-info">
                    <p>
                        Everything melancholy uncommonly but solicitude inhabiting projection off. Connection stimulated estimating
                        excellence an to impression.
                    </p>
                    <a class="btn circle btn-md btn-gradient wow fadeInUp" href="#">View All <i class="fas fa-angle-right"></i></a>
                </div>
            </div>
        </div>
    </div>

    <div class="container-full">
        <div class="row">
            <div class="col-lg-12 causes-items">
                <div class="recent-causes-carousel owl-carousel owl-theme">
                    <?php for ($i = 1; $i <= 4; $i++) {
                        $cardData = [
                            'title' => "Give Education To Africa $i",
                            'description' => "This is description for card $i.",
                            'image' => "./assets/img/donation/$i.jpg"
                        ];
                    ?>

                        <?php include 'component/card.php' ?>

                    <?php } ?>

                </div>
            </div>
        </div>
    </div>
</div>