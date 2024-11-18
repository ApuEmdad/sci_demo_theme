<div class="col-lg-4 sidebar">
    <aside>
        <div class="item">
            <div class="progress-box">
                <p>Raised : $6,230 <span class="float-right">Goal : $8,400</span></p>
                <div class="progress">
                    <div class="progress-bar" role="progressbar" data-width="87"></div>
                </div>
                <span>Fund collect : 87%</span>
            </div>
        </div>
        <div class="item">
            <h4>Select Ammount</h4>
            <form action="#">
                <ul>
                    <li>
                        <button type="button" class="form-btn active">$10</button>
                    </li>
                    <li>
                        <button type="button" class="form-btn inactive">$25</button>
                    </li>
                    <li>
                        <button type="button" class="form-btn inactive">$50</button>
                    </li>
                    <li>
                        <button type="button" class="form-btn inactive">$100</button>
                    </li>
                </ul>
                <input class="form-control" id="custom-ammount" name="custom-ammount" placeholder="Custom Ammount" type="text">
                <button type="submit" name="submit" id="submit">
                    Donate Now
                </button>
            </form>
        </div>
        <div class="item">
            <h4>Recent Donation</h4>
            <!-- Donator Starts -->
            <?php for ($i = 0; $i < 3; $i++) {
                include 'donator.php';
            } ?>

            <!-- Donator Ends -->

            <a href="#">View All <i class="fas fa-angle-right"></i></a>
        </div>
    </aside>
</div>