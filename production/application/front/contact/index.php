<!-- Header Section -->
<?php
    $title = 'Contact Us - Se Subsea';
    $description = 'Se Subsea';
    $keywords = 'Se Subsea';

	$menu_contact = "active"; // Menu selected
    require 'template/front/header.php';
	// require 'controllers/front/home_page.php';
?>


<META name="robots" content="index,follow">
<!-- Additional stylesheert or script -->



<?php require 'template/front/menu.php'; ?>
<!-- Content Section -->
<!-- Page Title
============================================= -->
<section id="page-title" class="page-title-parallax page-title-dark" style="background-image: url('<?php echo $baseUrl; ?>/assets/images/about/about_top_bg.jpg'); background-size: cover; background-position: center center;" data-stellar-background-ratio="0.4">
    <div class="container-fluid clearfix">
        <h1>Contact Us</h1>
        <!-- <span>Overview</span> -->
        <ol class="breadcrumb">
            <li><a href="<?php echo $baseUrl."/".$lang; ?>">Home</a></li>
            <li class="active"><a href="#">Contact Us</a></li>
        </ol>
    </div>
<div class="overlay"></div>
</section><!-- #page-title end -->

<!-- Content
		============================================= -->
        <section id="content" class="content_page">
         <div class="content-wrap">
            <div class="container clearfix">
                    <!-- Post Content -->
                    <div class="row">
                        <div class="col-sm-5">
                            <div class="margin_bottom"><img src="<?php echo $baseUrl; ?>/assets/images/about/about_img01.jpg" alt="" class="img-responsive"></div>
                            <div class="margin_bottom"><img src="<?php echo $baseUrl; ?>/assets/images/about/about_img02.jpg" alt="" class="img-responsive"></div>
                        </div>
                        <!-- Entry Content
                        ============================================= -->
                        <div class="col-sm-7">
                            <div class="logo margin_top pull-left"><img src="<?php echo $baseUrl; ?>/assets/images/sesubsea_logo.svg" title="Se Subsea"  alt="Se Subsea" class="img-responsive"></div>
                            <p> &nbsp;</p>
                            <p> &nbsp;</p>
                            <p>
                            SE SUBSEA PTE LTD.<br>
                            103 Irrawaddy Rd, #02-07 Singapore 329566<br>
                            <br>T: +65 6224 0181<br>F: +65 6224 0102<br>E: info@sesubsea.com</p>
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