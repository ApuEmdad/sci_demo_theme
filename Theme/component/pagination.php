                <!-- Paginatin -->
                <div class="donation-pagi text-center col-lg-12">
                    <div class="row">
                        <div class="col-lg-12">
                            <nav aria-label="navigation">
                                <ul class="pagination">
                                    <li class="page-item"><a class="page-link" href="#"><i class="fas fa-angle-double-left"></i></a></li>
                                    <?php
                                    $page_count = 3; // Set the total number of pages you need
                                    $current_page = 1; // Set current page number
                                    for ($i = 1; $i <= $page_count; $i++) {
                                        $activeClass = ($i === $current_page) ? 'active' : '';
                                        echo '<li class="page-item ' . $activeClass . '"><a class="page-link" href="#">' . $i . '</a></li>';
                                    }
                                    ?>
                                    <li class="page-item"><a class="page-link" href="#"><i class="fas fa-angle-double-right"></i></a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
                <!-- End Paginatin -->