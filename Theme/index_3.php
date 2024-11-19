<!-- Start Header -->
<?php
$page = 'home';
include 'layout/header.php';
?>
<!-- End Header -->

<!-- Start Banner 
    ============================================= -->
<?php include 'slider/slider_3.php' ?>

<!-- End Banner -->

<!-- Start Target Area 
============================================= -->
<?php include 'component/mission_2.php' ?>

<!-- End Target Area -->

<!-- Start Causes 
    ============================================= -->
<?php include 'component/donation_slider.php' ?>

<!-- End Wide Causes Area -->

<!-- Start Stay With Us Area 
    ============================================= -->
<?php include 'component/what_we_do_3.php' ?>

<!-- End Stay With Us Area -->

<!-- Start Event Area 
    ============================================= -->
<?php include 'component/events.php' ?>
<!-- End Event Area -->

<!-- Start Our Mission 
    ============================================= -->
<?php include 'component/mission.php' ?>

<!-- End Our Mission -->

<!-- Start Testimonials 
    ============================================= -->
<?php
$bg = 'bg-gray';
include 'content/pages/home/testimonials.php'
?>

<!-- End Testimonials Area -->

<!-- Start Blog 
    ============================================= -->
<?php
$title = true;
include 'component/blogs.php' ?>=

<!-- End Blog Area -->

<!-- Start Footer 
    ============================================= -->

<?php include 'layout/footer.php'; ?>
<!-- End Footer -->