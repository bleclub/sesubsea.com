<!-- Header Section -->
<?php
    $title = 'Our Assets - Se Subsea';
    $description = 'Se Subsea';
    $keywords = 'Se Subsea';

	$home_selected = "active"; // Menu selected
    require 'template/front/header.php';
	// require 'controllers/front/home_page.php';
?>


<META name="robots" content="index,follow">
<!-- Additional stylesheert or script -->



<?php require 'template/front/menu.php'; ?>
<!-- Content Section -->
<!-- Page Title
============================================= -->
<section id="page-title" class="page-title-parallax page-title-dark" style="background-image: url('<?php echo $baseUrl; ?>/assets/images/our_business/our_business_bg_top02.jpg'); background-size: cover; background-position: center center;" data-stellar-background-ratio="0.4">
    <div class="container clearfix">
        <h1>Our Business</h1>
        <span>Our Assets</span>
        <ol class="breadcrumb">
            <li><a href="#">Home</a></li>
            <li><a href="#">Our Business</a></li>
            <li class="active">Our Assets</li>
        </ol>
    </div>
<div class="overlay"></div>
</section><!-- #page-title end -->

<!-- Content
		============================================= -->
        <section id="content">
         <div class="content-wrap">
            <div class="container clearfix">
                <!-- Post Content -->
                <div class="row">
                    <!-- Entry Content
                    ============================================= -->
                    <div class="col-sm-12 margin_top">
                        <div class="margin_bottom width50"><img src="<?php echo $baseUrl; ?>/assets/images/assets_type.png" alt="" class="img-responsive"></div>                        
                        <p>The S-Lay pipeline installation vessel, SE Centurion, enhances SE Subsea’s solutions and capabilities for both shallow and deepwater.</p>
                        <p>Key features include:</p>
                        <ul>  
                            <li>Loa 146,5m, B 30,0m</li>
                            <li>Coated pipe up to OD 42in</li>
                            <li>3 x 135mT tensioners @ A&R winch 450mT</li>
                            <li>6500mT pipe storage capacity</li>
                            <li>90m Stinger, adjustable radius 70m to 300m</li>
                            <li>Main Crane: 300mT @ 15-16 m, Seastate 1-2, Optional 300m block travel at single line</li>
                            <li>Pipe Transfer Crane: 35mT at 30 m radius, Seastate 5-6</li>
                            <li>DP Class 2</li>
                            <li>Accommodation for 239 pax (105 double and 10 single cabins</li>
                            <li>Transit speed 13 knots</li>
                        </ul>
                        <div class="row">
                            <div class="margin_top col-sm-6"><img src="<?php echo $baseUrl; ?>/assets/images/our_business/our_business_img04.jpg" alt="" class="img-responsive"></div>
                            <div class="margin_top col-sm-6"><img src="<?php echo $baseUrl; ?>/assets/images/our_business/our_business_img05.jpg" alt="" class="img-responsive"></div>
                        </div>
                        <!-- <div class="logo margin_top"><img src="<?php //echo $baseUrl; ?>/assets/images/sesubsea_logo.svg" title="Se Subsea"  alt="Se Subsea" class="img-responsive"></div> -->
                    </div>
                </div>
            </div>
        </div>
</section>

<?php require 'template/front/submenu.php'; ?>




<!-- Video Section -->
<!-- <section id="video_section">
    <div class="wrapper">
        <div class="overlay"></div>
        <video class="video" poster="<?php echo $baseUrl; ?>/assets/video/poster_video.jpg">
            <source src="<?php echo $baseUrl; ?>/assets/video/corporate_video.mp4" type="video/mp4" />
        </video>
        <div class="playpause"></div>
    </div>
</section> -->

<!-- End Content -->

<!-- Footer Section -->
<?php require 'template/front/footer.php'; ?>


<script src="<?php echo $baseUrl; ?>/assets/js/plugins.js"></script>
<script src="<?php echo $baseUrl; ?>/assets/js/functions.js"></script>


</body>
</html>