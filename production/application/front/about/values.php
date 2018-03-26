<!-- Header Section -->
<?php
    $title = 'Our History - Se Subsea';
    $description = 'Se Subsea';
    $keywords = 'Se Subsea';

	$menu_about = "active"; // Menu selected
    require 'template/front/header.php';
	// require 'controllers/front/home_page.php';
?>


<META name="robots" content="index,follow">
<!-- Additional stylesheert or script -->



<?php require 'template/front/menu.php'; ?>
<!-- Content Section -->
<!-- Page Title
============================================= -->
<section id="page-title" class="page-title-parallax page-title-dark" style="background-image: url('<?php echo $baseUrl; ?>/assets/images/about/about_top_bg04.jpg'); background-size: cover; background-position: center center;" data-stellar-background-ratio="0.4">
    <div class="container-fluid clearfix">
        <h1>Our Values</h1>
        <span>About Us</span>
        <ol class="breadcrumb">
            <li><a href="<?php echo $baseUrl."/".$lang; ?>">Home</a></li>
            <li><a href="<?php echo $baseUrl."/".$lang; ?>/about">About Us</a></li>
            <li class="active">Our Values</li>
        </ol>
    </div>
<div class="overlay"></div>
</section><!-- #page-title end -->

<!-- Content
		============================================= -->
        <section id="content" class="content_page">
         <div class="content-wrap">
            <div class="container-fluid clearfix">
                
                <div class="col-sm-3 sub_menupage">
                    <ul>
                        <li><a href="<?php echo $baseUrl."/".$lang; ?>/about" >Overview</a></li>
                        <li><a href="<?php echo $baseUrl."/".$lang; ?>/about/our-history">Our History</a></li>
                        <li><a href="<?php echo $baseUrl."/".$lang; ?>/about/vision-mission" >Vision and Mission</a></li>
                        <li class="active"><a href="#">Values</a></li>
                    </ul>
                </div>

                <div class="col-sm-9">
                        <!-- Post Content -->
                        <div class="row">
                            <!-- Entry Content
                            ============================================= -->
                            <div class="col-sm-6">
                                <div class="margin_bottom"><img src="<?php echo $baseUrl; ?>/assets/images/about/about_img01.jpg" alt="" class="img-responsive"></div>
                                <p class="text-uppercase"><strong>Integrity</strong></p>
                                <p>We will apply the highest standard of business ethics and integrity, in compliance with local and international rules and regulations</p>

                            </div>
                            <div class="col-sm-6 margin_bottom">
                                <div class="margin_bottom"><img src="<?php echo $baseUrl; ?>/assets/images/about/about_img02.jpg" alt="" class="img-responsive"></div>
                                <p class="text-uppercase"><strong>Quality, Health, Safety, Security and Environment</strong></p>
                                <p>At SE Subsea, safety and quality is part of our DNA. Our commitment to QHSSE is at the heart of all our business activities.</p>

                            </div>

                        </div>

                         <div class="row">
                            <!-- Entry Content
                            ============================================= -->
                            <div class="col-sm-6">
                                <div class="margin_bottom"><img src="<?php echo $baseUrl; ?>/assets/images/about/about_img03.jpg" alt="" class="img-responsive"></div>
                                <p class="text-uppercase"><strong>Social Responsibility and Mutual Respect</strong></p>
                                <p>We embrace social responsibility and value relationships with  all our Stakeholders and Communities, wherever we operate.</p>

                            </div>
                            <div class="col-sm-6 margin_bottom">
                            
                                <div class="margin_bottom"><img src="<?php echo $baseUrl; ?>/assets/images/about/about_img04.jpg" alt="" class="img-responsive"></div>
                                <p class="text-uppercase"><strong>Operational Excellence</strong></p>
                                <p>We perform with reliability and predictability. We strive for excellence and deliver with distinction.</p>

                            </div>
                            
                        </div>

                         <div class="row">
                            <!-- Entry Content
                            ============================================= -->
                            <div class="col-sm-12">
                                <div class="margin_bottom"><img src="<?php echo $baseUrl; ?>/assets/images/about/about_img05.jpg" alt="" class="img-responsive"></div>
                                <p class="text-uppercase"><strong>Teamwork</strong></p>
                                <p>We value teamwork and are dedicated to delivering successful results together with all our Clients and Stakeholders.</p>
                                <!-- <div class="logo margin_top"><img src="<?php //echo $baseUrl; ?>/assets/images/sesubsea_logo.svg" title="Se Subsea"  alt="Se Subsea" class="img-responsive"></div> -->
                            </div>
                            
                        </div>
                </div>
            </div>
        </div>
</section>


<?php //require 'template/front/submenu.php'; ?>



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