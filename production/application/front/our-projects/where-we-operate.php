<!-- Header Section -->
<?php
    $title = 'Our Projects - Se Subsea';
    $description = 'Se Subsea';
    $keywords = 'Se Subsea';

	$menu_ourproj = "active"; // Menu selected	
    require 'template/front/header.php';
	// require 'controllers/front/home_page.php';
?>


<META name="robots" content="index,follow">
<!-- Additional stylesheert or script -->



<?php require 'template/front/menu.php'; ?>
<!-- Content Section -->
<!-- Page Title
============================================= -->
<section id="page-title" class="page-title-parallax page-title-dark" style="background-image: url('<?php echo $baseUrl; ?>/assets/images/bg/bg_top04.jpg'); background-size: cover; background-position: center center;" data-stellar-background-ratio="0.4">
    <div class="container-fluid clearfix">
        <h1>Where We Operate</h1>
        <span>Our Projects</span>
        <ol class="breadcrumb">
            <li><a href="<?php echo $baseUrl."/".$lang; ?>">Home</a></li>
            <li><a href="<?php echo $baseUrl."/".$lang; ?>/our-projects">Our Projects</a></li>
            <li class="active">Where We Operate</li>
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
                            <p>We operate worldwide and in all deepwater offshore markets.</p>
                            <p>Our global footprint, combined with the technical expertise of our people, our technology and world-class assets, both on and offshore, enables us to adapt these capabilities to deliver subsea engineering services worldwide.</p>
                            <div class="margin_bottom"><img src="<?php echo $baseUrl; ?>/assets/images/our_projects/SE_Subsea_Map.png" alt="" class="img-responsive"></div>
                        </div>
                    </div>
                    <!-- <div class="row">
                        <div class="margin_bottom col-sm-6">
                                <img src="<?php //echo $baseUrl; ?>/assets/images/our_projects/our_project01.jpg" alt="" class="img-responsive">
                                <p class="margin_top text-uppercase"><strong>Completed installation of the mooring for TEN FPSO John Evans Attah Mills (USD60M+)</strong></p>
                                <ul>
                                    <li>Installation of 9 suction achors</li>
                                    <li>Pre-installation and wet storage of 9 mooring lines</li>
                                    <li>Installation and hook-up to FPSO turret</li>
                                </ul>
                        </div>
                        <div class="margin_bottom col-sm-6">
                                <img src="<?php //echo $baseUrl; ?>/assets/images/our_projects/our_project02.jpg" alt="" class="img-responsive">
                                <p class="margin_top text-uppercase"><strong>Charter of AHTS Lewek Scarlet</strong></p>
                                <ul>
                                    <li>Support to TEN FPSO John Evans Attah Mills</li>
                                </ul>
                        </div>
                    </div>
                    <div class="row">
                        <div class="margin_bottom col-sm-6">
                                <img src="<?php //echo $baseUrl; ?>/assets/images/our_projects/our_project03.jpg" alt="" class="img-responsive">
                                <p class="margin_top text-uppercase"><strong>OCTP EPIC 2 Package (~USD200M+)</strong></p>
                                <ul>
                                    <li>Transport & Installation of OCTP Subsea SURF package in 1,000M WD.</strong></li>
                                </ul>
                        </div>
                        <div class="margin_bottom col-sm-6">
                                <img src="<?php //echo $baseUrl; ?>/assets/images/our_projects/our_project04.jpg" alt="" class="img-responsive">
                                <p class="margin_top text-uppercase"><strong>OCTP EPIC 2 Package (~USD200M+)</strong></p>
                                <ul>
                                    <li>Transport & Installation of OCTP 26” Gas Export sealine from FPSO to shore</li>
                                </ul>
                        </div>
                    </div> -->

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