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
            <li class="active">Contact Us</li>
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
                            <!-- SE SUBSEA PTE LTD.<br> -->
                            <p class="text-uppercase"><strong>Singapore Office</strong></p>
                            <p>103 Irrawaddy Rd, #02-06 <br>Singapore 329566</p><hr><br>
                            <p class="text-uppercase"><strong>Thailand Office</strong></p>
                            <p>Rajanakarn Building, 19th Floor, 3 South Sathorn Road,
                            <br>Yannawa, Sathorn, Bangkok 10120 Thailand</p><hr><br>
                            <p class="text-uppercase"><strong>Houston Office</strong></p>
                            <p>709 E 17th St. <br>Houston, TX 77008</p><hr><br>
                            <p class="text-uppercase"><strong>Accra Office</strong></p>
                            <p>Capital Place Block B 1st Floor 11 Patrice <br>Lumumba Road Airport Residential Areaaccra - Ghana</p>
                            <p>T: +65 6224 0181<br>F: +65 6224 0102<br>E: <a href="mailto:info@sesubsea.com">info@sesubsea.com</a></p>

                            <!-- <section id="google-map" class="gmap bottommargin"></section> -->
                        </div>
                    </div>
            </div>
        </div>
</section>


<!-- End Content -->

<!-- Footer Section -->
<?php require 'template/front/footer.php'; ?>


<script src="<?php echo $baseUrl; ?>/assets/js/plugins.js"></script>
<script src="<?php echo $baseUrl; ?>/assets/js/functions.js"></script>


<script type="text/javascript" src="http://maps.google.com/maps/api/js?key=AIzaSyAMqlLhPWhb309_PTzLhAnzwJkMSPIEnXY"></script>
<script type="text/javascript" src="<?php echo $baseUrl; ?>/assets/js/jquery.gmap.js"></script>

<script type="text/javascript">

    $('#google-map').gMap({

        address: '13.721017,100.529084',
        maptype: 'ROADMAP',
        zoom: 17,
        markers: [
            {
                address: "13.721017,100.529084",
                html: '<div style="width: 300px;"><h4 style="margin-bottom: 8px; font-size: 18px; color: #f42534;">Se Subsea Co., Ltd.</h4><p style="text-align:left;">Rajanakarn Building, 19th Floor, 3 South Sathorn Road, Yannawa, Sathorn, Bangkok 10120 Thailan</p></div>',
                icon: {
                    image: "<?php echo $baseUrl; ?>/assets/images/map-icon-red.png",
                    iconsize: [32, 39],
                    iconanchor: [32,39]
                }
            }
        ],
        doubleclickzoom: false,
        controls: {
            panControl: true,
            zoomControl: true,
            mapTypeControl: true,
            scaleControl: false,
            streetViewControl: false,
            overviewMapControl: false
        }

    });

</script><!-- Google Map End -->

</body>
</html>