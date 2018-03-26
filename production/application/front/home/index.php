<!-- Header Section -->
<?php
    $title = 'Se Subsea';
    $description = 'Se Subsea';
    $keywords = 'Se Subsea';

	$menu_home = "active"; // Menu selected
    require 'template/front/header.php';
	// require 'controllers/front/home_page.php';
?>


<META name="robots" content="index,follow">
<!-- Additional stylesheert or script -->



<?php require 'template/front/menu.php'; ?>
<!-- Content Section -->

<!-- Section Slide Home -->
<section class="header_slide">
    <div class="container-fluid">
        <div class="row">
            <div class="">
                <div class="owl-carousel" id="header_slide">
                    <div class="slide1 bg">
                        <!-- <div class="overlay"></div> -->
                        <img src="<?php echo $baseUrl; ?>/assets/images/slider1.jpg" alt="">
                        <div class="head-text">
                            <div class="col-md-8 col-md-offset-3">
                                <h1>SAFETY IS AT THE HEART <span>OF ALL OUR OPERATIONS</span></h1>
                            </div>
                            <div class="col-md-6 col-md-offset-3">
                                <a>Explore</a>
                            </div>
                        </div>
                    </div>

                    <div class="slide2 bg">
                        <!-- <div class="overlay"></div> -->
                        <img src="<?php echo $baseUrl; ?>/assets/images/slider2.jpg" alt="">								
                        <div class="head-text">
                            <div class="col-md-8 col-md-offset-3">
                                <h1>SAFETY IS AT THE HEART <span>OF ALL OUR OPERATIONS</span></h1>									
                            </div>
                            <div class="col-md-6 col-md-offset-3">
                                <a>Explore</a>
                            </div>
                        </div>
                    </div>

                    <div class="slide3 bg">
                        <!-- <div class="overlay"></div> -->
                        <img src="<?php echo $baseUrl; ?>/assets/images/slider3.jpg" alt="">								
                        <div class="head-text">
                            <div class="col-md-8 col-md-offset-3">
                                <h1>SAFETY IS AT THE HEART <span>OF ALL OUR OPERATIONS</span></h1>										
                            </div>
                            <div class="col-md-6 col-md-offset-3">
                                <a>Explore</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php require 'template/front/submenu.php'; ?>


<!-- Video Section -->
<section id="video_section">
    <div class="wrapper">
        <div class="overlay"></div>
        <video class="video" poster="<?php echo $baseUrl; ?>/assets/video/poster_video.jpg">
            <source src="<?php echo $baseUrl; ?>/assets/video/corporate_video.mp4" type="video/mp4" />
        </video>
        <div class="playpause"></div>
    </div>
</section>

<!-- End Content -->

<!-- Footer Section -->
<?php require 'template/front/footer.php'; ?>


</body>
</html>