<!-- Start Header -->
<?php
$page = 'home';
include 'layout/header.php';
?>
<!-- End Header -->

<!-- Start Banner 
    ============================================= -->
<?php include 'slider/slider.php' ?>
<!-- End Banner -->

<!-- Star About Area
  ============================================= -->
<?php include 'component/about_area_2.php' ?>
<!-- End About Area -->

<!-- Start What We Do 
    ============================================= -->
<?php include 'component/what_we_do.php' ?>
<!-- End What We Do -->


<!-- Start Our Mission 
    ============================================= -->
<?php include 'component/mission.php' ?>
<!-- End Our Mission -->

<!-- Start Causes 
    ============================================= -->
<?php $bg = 'bg-gray';
include 'content/pages/home/recent_causes.php' ?>
<!-- End Causes -->

<!-- Start Volunteer 
    ============================================= -->
<?php include 'content/pages/home/become_volunteer.php' ?>
<!-- End Volunteer -->

<!-- Start Event Area 
    ============================================= -->
<?php include 'component/events_2.php' ?>

<!-- End Event Area -->

<!-- Start Donation 
    ============================================= -->
<?php include 'content/pages/home/donation_2.php' ?>

<!-- End Donation Area -->

<!-- Start Testimonials 
    ============================================= -->
<?php $bg = 'bg-gray';
include 'content/pages/home/testimonials.php' ?>

<!-- End Testimonials Area -->

<!-- Start Gallery 
    ============================================= -->
<?php include 'content/pages/home/gallery.php' ?>

<!-- End Gallery Area -->

<!-- Start Blog 
    ============================================= -->
<?php include 'component/blogs.php' ?>

<!-- End Blog Area -->

<!-- Start Footer 
    ============================================= -->

<?php include 'layout/footer.php'; ?>
<!-- End Footer -->