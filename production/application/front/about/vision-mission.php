<!-- Header Section -->
<?php
    $title = 'Our Vision & Mission - Se Subsea';
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
<section id="page-title" class="page-title-parallax page-title-dark" style="background-image: url('<?php echo $baseUrl; ?>/assets/images/about/about_top_bg03.jpg'); background-size: cover; background-position: center center;" data-stellar-background-ratio="0.4">
    <div class="container-fluid clearfix">
        <h1>Our Vision and Mission</h1>
        <span>About Us</span>
        <ol class="breadcrumb">
            <li><a href="<?php echo $baseUrl."/".$lang; ?>">Home</a></li>
            <li><a href="<?php echo $baseUrl."/".$lang; ?>/about">About Us</a></li>
            <li class="active">Our Vision and Mission</li>
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
                        <li class="active"><a href="#" >Vision and Mission</a></li>
                        <li><a href="<?php echo $baseUrl."/".$lang; ?>/about/values">Values</a></li>
                    </ul>
                </div>

                <div class="col-sm-9">
                        <!-- Post Content -->
                        <div class="row">
                            <!-- Entry Content
                            ============================================= -->
                            <div class="col-sm-12 ">
                                <p class="margin_bottom text-uppercase"><strong>We have a Vision – to be the preferred marine contractor recognised by our clients worldwide.</strong></p>
                                <p>We will achieve our Vision with our Mission – To deliver integrated offshore construction and marine solutions to meet the changing needs of our clients in the Energy and Offshore Industry across the globe.</p>
                                <p>&nbsp;</p>
                                <p class="text-uppercase"><strong>SE Subsea delivers, with distinction.</strong></p>
                                <!-- <div class="logo margin_top"><img src="<?php //echo $baseUrl; ?>/assets/images/sesubsea_logo.svg" title="Se Subsea"  alt="Se Subsea" class="img-responsive"></div> -->
                                <div><img src="<?php echo $baseUrl; ?>/assets/images/about/about_img01.jpg" alt="" class="img-responsive"></div>
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