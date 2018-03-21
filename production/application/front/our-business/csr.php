<!-- Header Section -->
<?php
    $title = 'Corporate Social Responsibility(CSR) - Se Subsea';
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
<section id="page-title" class="page-title-parallax page-title-dark" style="background-image: url('<?php echo $baseUrl; ?>/assets/images/bg/bg_top01.jpg'); background-size: cover; background-position: center center;" data-stellar-background-ratio="0.4">
    <div class="container clearfix">
        <h1>Our Business</h1>
        <span>Corporate Social Responsibility(CSR)</span>
        <ol class="breadcrumb">
            <li><a href="#">Home</a></li>
            <li><a href="#">Our Business</a></li>
            <li class="active">CSR</li>
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
                        <li><a href="<?php echo $baseUrl."/".$lang; ?>/our-business">What We Do</a></li>
                        <li><a href="<?php echo $baseUrl."/".$lang; ?>/our-business/our-assets">Our Assets</a></li>
                        <li class="active"><a href="#">Giving Back(CSR)</a></li>
                        <li><a href="<?php echo $baseUrl."/".$lang; ?>/our-business/qhsse">QHSSE</a></li>
                    </ul>
                </div>

                 <div class="col-sm-9">
                    <!-- Post Content -->
                    <div class="row">
                        <div class="col-sm-5">
                                <div class="margin_bottom"><img src="<?php echo $baseUrl; ?>/assets/images/csr_icon.jpg" alt="" class="img-responsive"></div>
                        </div>
                        <!-- Entry Content
                        ============================================= -->
                        <div class="col-sm-7 margin_top">                      
                            <p text->We ensure safe operations that protect the environment and benefit local communities.</p>
                            <p>We engage stakeholders and maximize opportunities for local business, create and provide employment opportunities for the communities we operate in, and invest in community programs.</p>
                            <p>Clear communications with the local communities regarding our operations is carried out through a consultation process with advisory committees.</p>
                            <p>Public consultation open houses are held regularly in the communities of Sanzule which are near our GEL Pipeline landing Project.</p>
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