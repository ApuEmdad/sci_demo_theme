<div class="banner-area inc-indicator content-less text-large">
    <div id="bootcarousel" class="carousel text-light slide carousel-fade animate_text" data-ride="carousel">

        <!-- Indicators for slides -->
        <div class="carousel-indicator">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <ol class="carousel-indicators">
                            <li data-target="#bootcarousel" data-slide-to="0" class="active"></li>
                            <li data-target="#bootcarousel" data-slide-to="1"></li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <!-- Wrapper for slides -->
        <div class="carousel-inner carousel-zoom">
            <?php for ($i = 0; $i < 2; $i++) { ?>
                <div class="carousel-item <?php echo $i === 0 ? 'active' : ''; ?>">
                    <div class="slider-thumb bg-cover" style="background-image: url(../../assets/img/banner/9.jpg);"></div>
                    <div class="box-table">
                        <div class="box-cell shadow dark">
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-9">
                                        <div class="content">
                                            <h2 data-animation="animated slideInRight">Join with us and <strong>save the world</strong></h2>
                                            <p data-animation="animated slideInLeft">
                                                Numerous ladyship so raillery humoured goodness received an. So narrow formal length my
                                                highly longer afford oh. Tall neat he make.
                                            </p>
                                            <a data-animation="animated fadeInUp" class="btn circle btn-light effect btn-md" href="#">Discover More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php } ?>

        </div>


        <!-- End Wrapper for slides -->

    </div>
</div>