<div class="we-do-area half-bg default-padding bottom-less bg-gray">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2">
                <div class="site-heading text-center">
                    <h5>What we do</h5>
                    <h2>
                        We Donate to charity causes <br> around the world.
                    </h2>
                    <div class="heading-divider"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="wedo-items text-center">
            <div class="row">

                <?php
                // Define an array of items
                $items = [
                    [
                        'icon' => 'flaticon-water-bottle',
                        'title' => 'Water Delivery',
                        'description' => 'Always length letter adieus add number moment she. Promise few compass.'
                    ],
                    [
                        'icon' => 'flaticon-pharmacy',
                        'title' => 'Medicine Help',
                        'description' => 'Always length letter adieus add number moment she. Promise few compass.'
                    ],
                    [
                        'icon' => 'flaticon-planet-earth',
                        'title' => 'Save Plants',
                        'description' => 'Always length letter adieus add number moment she. Promise few compass.'
                    ],
                    [
                        'icon' => 'flaticon-home',
                        'title' => 'We Build & Create',
                        'description' => 'Always length letter adieus add number moment she. Promise few compass.'
                    ]
                ];

                // Loop through each item and output HTML
                foreach ($items as $item) { ?>
                    <!-- Single Item -->
                    <div class="single-item col-lg-3 col-md-6">
                        <div class="item">
                            <?php include 'service_card.php' ?>
                        </div>
                    </div>
                    <!-- End Single Item -->
                <?php } ?>

            </div>
        </div>
    </div>
</div>