<!-- Header Section -->
<?php
    $title = 'Overview - Se Subsea';
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
<section id="page-title" class="page-title-parallax page-title-dark" style="background-image: url('<?php echo $baseUrl; ?>/assets/images/about/about_top_bg.jpg'); background-size: cover; background-position: center center;" data-stellar-background-ratio="0.4">
    <div class="container-fluid clearfix">
        <h1>Overview</h1>
        <span>About Us</span>
        <ol class="breadcrumb">
            <li><a href="<?php echo $baseUrl."/".$lang; ?>">Home</a></li>
            <li><a href="#">About Us</a></li>
            <li class="active">Overview</li>
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
                        <li class="active"><a href="#" >Overview</a></li>
                        <li><a href="<?php echo $baseUrl."/".$lang; ?>/about/our-history">Our History</a></li>
                        <li><a href="<?php echo $baseUrl."/".$lang; ?>/about/vision-mission" >Vision and Mission</a></li>
                        <li><a href="<?php echo $baseUrl."/".$lang; ?>/about/values">Values</a></li>
                    </ul>
                </div>
                <div class="col-sm-9">
                    <!-- Post Content -->
                    <div class="row">
                        <div class="col-sm-5">
                            <div class="margin_bottom"><img src="<?php echo $baseUrl; ?>/assets/images/about/about_img01.jpg" alt="" class="img-responsive"></div>
                            <div class="margin_bottom"><img src="<?php echo $baseUrl; ?>/assets/images/about/about_img02.jpg" alt="" class="img-responsive"></div>
                        </div>
                        <!-- Entry Content
                        ============================================= -->
                        <div class="col-sm-7">
                        <p>SE Subsea is evolving into an exciting company with a mission: to deliver integrated offshore construction and marine solutions to meet the changing needs of our clients in the Energy and Offshore Industry across the globe.  Backed by an impeccable track record, SE Subsea undertakes and delivers marine solutions and T&I projects associated with SURF and Conventional pipelay installations.</p>
                        <p>To bring cost-effective solutions to our clients, SE Subsea is investing in people, ideas and assets to drive our mission. We have acquired the Star Centurion – a deepwater construction and pipelay vessel to strengthen our technical capabilities to  offer a wider range of services when required.</p>
                        <p>Operating within a challenging industry, SE Subsea is committed to protecting the health and safety of all persons involved with its activities, and thus achieving a safe and incident free workplace, with high standards of environmental responsibility and pollution prevention.</p>
                        <p>&nbsp;</p>
                        <p class="text-uppercase"><strong>SE Subsea delivers, with distinction.</strong></p>
                            <!-- <p>We have and continue to serve the Ghanaian and African oil and gas industry with distinction. Today, SE Subsea is evolving into an exciting company with a mission: to deliver integrated [offshore construction and] marine solutions to meet the changing needs of our clients in the Energy and Offshore Industry across the globe.</p>
                            <p>Backed by an impeccable track record, SE Subsea undertakes and delivers marine and T&I projects associated with SURF, Floaters & Moorings, Heavy-lift and Conventional pipelay installations.</p>
                            <p>This range of services, underpinned by a fleet of modern subsea construction and installation vessels and specialized equipment, enables SE Subsea to deliver cost-effective solutions to meet individual client needs.</p>
                            <p>Operating within a challenging industry, SE Subsea is committed to protecting the health and safety of all persons involved with its activities, and thus achieving a safe and incident free workplace, with high standards of environmental responsibility and pollution prevention.</p>
                            <p>SE Subsea delivers, with distinction.</p> -->
                            <div class="logo margin_top"><img src="<?php echo $baseUrl; ?>/assets/images/sesubsea_logo.svg" title="Se Subsea"  alt="Se Subsea" class="img-responsive"></div>
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