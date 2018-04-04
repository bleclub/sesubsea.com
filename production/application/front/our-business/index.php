<!-- Header Section -->
<?php
    $title = 'What we do - Se Subsea';
    $description = 'Se Subsea';
    $keywords = 'Se Subsea';

	$menu_ourbu = "active"; // Menu selected
    require 'template/front/header.php';
	// require 'controllers/front/home_page.php';
?>


<META name="robots" content="index,follow">
<!-- Additional stylesheert or script -->



<?php require 'template/front/menu.php'; ?>
<!-- Content Section -->
<!-- Page Title
============================================= -->
<section id="page-title" class="page-title-parallax page-title-dark" style="background-image: url('<?php echo $baseUrl; ?>/assets/images/our_business/our_business_bg_top01.jpg'); background-size: cover; background-position: center center;" data-stellar-background-ratio="0.4">
    <div class="container-fluid clearfix">
        <h1>What we do</h1>
        <span>Our Business</span>
        <ol class="breadcrumb">
            <li><a href="<?php echo $baseUrl."/".$lang; ?>">Home</a></li>
            <li><a href="<?php echo $baseUrl."/".$lang; ?>/our-business">Our Business</a></li>
            <li class="active">What we do</li>
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
                        <li class="active"><a href="#">What We Do</a></li>
                        <li><a href="<?php echo $baseUrl."/".$lang; ?>/our-business/our-assets">Our Assets</a></li>
                        <li><a href="<?php echo $baseUrl."/".$lang; ?>/our-business/csr">Giving Back(CSR)</a></li>
                        <li><a href="<?php echo $baseUrl."/".$lang; ?>/our-business/qhsse">QHSSE</a></li>
                    </ul>
                </div>

                <div class="col-sm-9">
                    <!-- Post Content -->
                    <div class="row">
                        <!-- Entry Content
                        ============================================= -->
                        <div class="col-sm-12 margin_top">
                            <!-- <div class="margin_bottom width50"><img src="<?php //echo $baseUrl; ?>/assets/images/local_type.svg" alt="" class="img-responsive"></div>-->
                            <!-- <p class="text-uppercase"><strong>Local dedication global standards</strong></p> -->
                            <p>We have dedicated local partners with global marine and offshore construction experience. Together, SE Subsea undertakes and delivers marine and T&I projects associated with SURF and Conventional Pipelay Installations. </p>
                            <p>SE Subsea is an experienced company that can provide offshore Pipeline / SURF construction, project management, marine management , welding programs and subsea component fabrication services.</p>
                            <p>&nbsp;</p>
                            <p class="text-uppercase"><strong>SE Subsea delivers, with distinction.</strong></p>
                            <div class="row">
                                <div class="margin_top col-sm-6"><img src="<?php echo $baseUrl; ?>/assets/images/our_business/our_business_img01.jpg" alt="" class="img-responsive"></div>
                                <div class="margin_top col-sm-6"><img src="<?php echo $baseUrl; ?>/assets/images/our_business/our_business_img02.jpg" alt="" class="img-responsive"></div>
                                <div class="margin_top col-sm-6"><img src="<?php echo $baseUrl; ?>/assets/images/our_business/our_business_img06.jpg" alt="" class="img-responsive"></div>
                                <div class="margin_top col-sm-6"><img src="<?php echo $baseUrl; ?>/assets/images/our_business/our_business_img07.jpg" alt="" class="img-responsive"></div>
                            </div>
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