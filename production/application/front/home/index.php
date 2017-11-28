<!-- Header Section -->
<?php
    $title = 'Se Subsea';
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
                        <div class="overlay"></div>
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

                    <div class="slide3 bg">
                        <div class="overlay"></div>
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
                </div>
            </div>
        </div>
    </div>
</section>

<!-- About Section Block -->
<section id="about" class="about_page">
    <div class="container-fluid">
        <div class="col-md-6 col-sm-4">
            <div class="thumb">
            <h2 class="red">About<br><span>Us</span></h2>
            <ul class="red">
                <li><a href="#">Our Vision and Values</a></li>
                <li><a href="#">Key Differentiators</a></li>
                <li><a href="#">Current Vacancies</a></li>
                <li><a href="#">Working for Sea Subsea</a></li>
            </ul>
            <span class="thumb_overlay"></span>            
        </div>
        </div>
        <div class="col-md-6 col-sm-8">
            <div class="thumb m_right">
            <h2>Vision <br><span>and mission</span></h2>
            <img src="<?php echo $baseUrl; ?>/assets/images/img_home01.jpg" alt="">
            <ul>
                <li><a href="#">Our Vision and Values</a></li>
                <li><a href="#">Key Differentiators</a></li>
                <li><a href="#">Current Vacancies</a></li>
                <li><a href="#">Working for Sea Subsea</a></li>
            </ul>
            <span class="thumb_overlay"></span>
        </div>
        </div>
        <div class="col-md-6 col-sm-8">
        <div class="thumb">
            <h2>OUR<br><span>BUSINESS</span></h2>
            <img src="<?php echo $baseUrl; ?>/assets/images/img_home02.jpg" alt="">
            <ul>
                <li><a href="#">What We Do</a></li>
                <li><a href="#">Where We Operate</a></li>
                <li><a href="#">Our Technology</a></li>
                <li><a href="#">Our Project Track Record</a></li>
            </ul>
            <span class="thumb_overlay"></span>
        </div>
        </div>
        <div class="col-md-6 col-sm-4">
            <div class="thumb red m_right">
            <h2>Our<br><span>Projects</span></h2>
            <ul>
                <li><a href="#">Our Vision and Values</a></li>
                <li><a href="#">Key Differentiators</a></li>
                <li><a href="#">Current Vacancies</a></li>
                <li><a href="#">Working for Sea Subsea</a></li>
            </ul>
            <span class="thumb_overlay"></span>            
            </div>
        </div>
    
    </div>
    </section>


<!-- Video Section -->
<section id="video_section">
    <div class="wrapper">
        <div class="overlay"></div>
        <video class="video" poster="<?php echo $baseUrl; ?>/assets/video/poster_video.jpg" muted>
            <source src="<?php echo $baseUrl; ?>/assets/video/corporate_video.mp4" type="video/mp4" />
        </video>
        <div class="playpause"></div>
    </div>
</section>

<!-- News and Update Section  -->
<section id="update" class="update_page">
    <div class="container-fluid">
        <div class="col-sm-6">
            <div class="block_news">
                <h3>COMPANY<br><span>NEWS</span></h3>
                <ul>
                    <li>
                        <a href="#">
                            <div class="date_news">02 OCT 2017</div>
                            <div class="title_news">Se Subsea announced contracts awarded to Subsea Integration Alliance</div>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <div class="date_news">06 SEP 2017</div>
                            <div class="title_news">Se Subsea awards letter of intent for new reel-lay vessel </div>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <div class="date_news">26 JUL 2017</div>
                            <div class="title_news">Subsea 7 S.A. Announces Second Quarter 2017 Results</div>
                        </a>
                    </li>
                </ul>
                <div class="viewall"><a href="#">View all</a></div>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="block_social">
                <h3 class="red">FOLLOW<br><span>US</span></h3>
                <ul class="social-icon red">
                    <li><a href="#" class="fa fa-facebook fa-2x"></a></li>
                    <li><a href="#" class="fa fa-twitter fa-2x"></a></li>
                    <li><a href="#" class="fa fa-instagram fa-2x"></a></li>
                    <li><a href="#" class="fa fa-youtube fa-2x"></a></li>
                    <li><a href="#" class="fa fa-envelope fa-2x"></a></li>
                    <li><a href="#" class="fa fa-phone fa-2x"></a></li>
                </ul>
            </div>
        </div>
    </div>
</section>
<!-- End Content -->

<!-- Footer Section -->
<?php require 'template/front/footer.php'; ?>

<script src="<?php echo $baseUrl; ?>/assets/js/jquery-3.1.0.min.js"></script>
<script src="<?php echo $baseUrl; ?>/assets/js/bootstrap.min.js"></script>
<script src="<?php echo $baseUrl; ?>/assets/js/owl.carousel.min.js"></script>
<script src="<?php echo $baseUrl; ?>/assets/js/script.js"></script>

</body>
</html>