<!-- Header Section -->
<?php
    $title = 'QHSSE - Se Subsea';
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
<section id="page-title" class="page-title-parallax page-title-dark" style="background-image: url('<?php echo $baseUrl; ?>/assets/images/bg/bg_top03.jpg'); background-size: cover; background-position: center center;" data-stellar-background-ratio="0.4">
    <div class="container-fluid clearfix">
        <h1>QHSSE</h1>
        <span>Our Business</span>
        <ol class="breadcrumb">
            <li><a href="<?php echo $baseUrl."/".$lang; ?>">Home</a></li>
            <li><a href="<?php echo $baseUrl."/".$lang; ?>/our-business">Our Business</a></li>
            <li class="active">QHSSE</li>
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
                        <li><a href="<?php echo $baseUrl."/".$lang; ?>/our-business/csr">Giving Back(CSR)</a></li>
                        <li class="active"><a href="#">QHSSE</a></li>
                    </ul>
                </div>

                <div class="col-sm-9">                        
                        <!-- Post Content -->
                        <div class="row">
                            <!-- Entry Content
                            ============================================= -->
                            <div class="col-sm-12 margin_top">
                                <!-- <div class="margin_bottom width50"><img src="<?php echo $baseUrl; ?>/assets/images/qhsse_type.svg" alt="" class="img-responsive"></div> -->
                                
                                <p class="text-uppercase"><strong>Safety, Quality, Trust - That's our DNA</strong></p>                                
                                <p>At SE Subsea we provide an “Integrated Management System” (IMS) for the management of our QHSSE and continually strive to improve its effectiveness in accordance with the requirements of the latest ISO 9001, ISO 14001, OHSAS 18001 standards, International Ship and Port Facility Security (ISPS) Code and The International Management Code for the Safe Operation of Ships and for Pollution Prevention (ISM) as applicable to our operations.</p>
                                <p>SE Subsea delivers, with distinction.</p>
                                <div class="row">
                                    <div class="margin_top col-sm-6"><img src="<?php echo $baseUrl; ?>/assets/images/our_business/safety_img01.jpg" alt="" class="img-responsive"></div>
                                    <div class="margin_top col-sm-6"><img src="<?php echo $baseUrl; ?>/assets/images/our_business/safety_img02.jpg" alt="" class="img-responsive"></div>
                                </div>
                                <div class="clearfix"></div>
                                <h2 class="margin_top text-uppercase">QHSSE Policy Statement:</h2>
                                <p class="text-uppercase"><strong>QHSSE Commitment</strong></p>
                                <p>SE Subsea is committed to the highest standards for the health and safety of our employees, customers, and contractors as well as to the protection of the environment in the communities in which we live and work.</p>

                                <p class="text-uppercase"><strong>QHSSE Management System</strong></p>
                                <p>SE Subsea’s QHSSE Integrated Management System defines the principles by which we conduct our operations worldwide.</p>

                                <p class="text-uppercase"><strong>Charters, Standards, and Accountability</strong></p>
                                <p>Management applies QHSSE Charters and standards throughout the company and holds its employees and Subcontractors accountable for compliance.</p>

                                <p class="text-uppercase"><strong>Quality</strong></p>
                                <p>The ability to secure, execute and deliver projects on time, within budget, with quality and HSSE performance that meets or exceeds our clients’ expectations is fundamental to the success of SE Subsea business activities.</p>

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