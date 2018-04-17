
</head>
<body>
	<div id="main">
		<section class="header_top">
			<div class="container-fluid">

				<div class="row">
					<div class="col-md-12">
						<header class="header">
							<div class="inner">
								<a href="#menu" class="nav-bars">
										<img src="<?php echo $baseUrl; ?>/assets/images/nav-icon.svg" class="img-responsive" alt="Collapsable Navbar">
								</a>

								<!-- Mobile Menu -->
								<nav id="menu">
									<header class="major">
										<a href="<?php echo $baseUrl."/".$lang; ?>"><img src="<?php echo $baseUrl; ?>/assets/images/sesubsea_logo.svg" title="Se Subsea"  alt="Se Subsea" class="img-responsive"></a>
									</header>
									<ul>
										<li><a href="<?php echo $baseUrl."/".$lang; ?>">HOME</a></li>
										<li>
											<span id="tg_menu01">ABOUT US</span>
											<i id="tg_m1" class="fa fa-angle-down fa-2x"></i>											
											<ul class="sub-menu" id="sub-menu1">
												<li><a href="<?php echo $baseUrl."/".$lang; ?>/about">Overview</a></li>	
												<li><a href="<?php echo $baseUrl."/".$lang; ?>/about/our-history">Our History</a></li>
												<li><a href="<?php echo $baseUrl."/".$lang; ?>/about/vision-mission">vision & mission </a></li>
												<li><a href="<?php echo $baseUrl."/".$lang; ?>/about/values">values</a></li>
											</ul>
										</li>
										<li>
											<span id="tg_menu02">OUR BUSINESS</span>
											<i id="tg_m2" class="tg_m fa fa-angle-down fa-2x"></i>
											<ul class="sub-menu" id="sub-menu2">
												<li><a href="<?php echo $baseUrl."/".$lang; ?>/our-business">What we do</a></li>	
												<li><a href="<?php echo $baseUrl."/".$lang; ?>/our-business/our-assets">Our Assets</a></li>	
												<li><a href="<?php echo $baseUrl."/".$lang; ?>/our-business/csr">Giving Back(CSR)</a></li>	
												<li><a href="<?php echo $baseUrl."/".$lang; ?>/our-business/qhsse">QHSSE</a></li>	
											</ul>
										</li>
										<li>
											<span id="tg_menu03">OUR PROJECTS</span>
											<i id="tg_m3" class="tg_m fa fa-angle-down fa-2x"></i>
											<ul class="sub-menu" id="sub-menu3">
												<li><a href="<?php echo $baseUrl."/".$lang; ?>/our-projects">Track record</a></li>	
												<li><a href="<?php echo $baseUrl."/".$lang; ?>/our-projects/where-we-operate">Where we operate</a></li>	
											</ul>
										</li>
										<!-- <li><a href="#">MEDIA</a></li> -->
										<!-- <li><a href="#">OUR PEOPLE</a></li> -->
										<li><a href="<?php echo $baseUrl."/".$lang; ?>/contact">CONTACT US</a></li>
									</ul>
									<ul class="social-icon">
										<li><a href="#" class="fa fa-facebook fa-2x"></a></li>
										<li><a href="#" class="fa fa-twitter fa-2x"></a></li>
										<li><a href="#" class="fa fa-instagram fa-2x"></a></li>
										<li><a href="#" class="fa fa-youtube fa-2x"></a></li>
										<li><a href="#" class="fa fa-envelope fa-2x"></a></li>
										<li><a href="#" class="fa fa-phone fa-2x"></a></li>
									</ul>
								</nav>
								<a href="<?php echo $baseUrl."/".$lang; ?>" class="logo">
									<img src="<?php echo $baseUrl; ?>/assets/images/sesubsea_logo.svg" alt="Se Subsea" title="Se Subsea" class="img-responsive">
								</a>

								<!-- Desktop Main menu -->
								<div class="main-menu">
									<ul>
										<li><a href="<?php echo $baseUrl."/".$lang; ?>" class="<?php echo @$menu_home; ?>">HOME</a></li>
										<li>
											<a href="#"  class="<?php echo @$menu_about; ?>">ABOUT US</a>
											<i class="fa fa-angle-down fa-2x"></i>											
											<ul class="sub-menu">
												<li><a href="<?php echo $baseUrl."/".$lang; ?>/about">Overview</a></li>	
												<li><a href="<?php echo $baseUrl."/".$lang; ?>/about/our-history">Our History</a></li>	
												<li><a href="<?php echo $baseUrl."/".$lang; ?>/about/vision-mission">vision & mission </a></li>
												<li><a href="<?php echo $baseUrl."/".$lang; ?>/about/values">values</a></li>
											</ul>
										</li>
										<li>
											<a href="#"  class="<?php echo @$menu_ourbu; ?>">OUR BUSINESS</a>
											<i class="fa fa-angle-down fa-2x"></i>											
											<ul  class="sub-menu">
												<li><a href="<?php echo $baseUrl."/".$lang; ?>/our-business">What we do</a></li>	
												<li><a href="<?php echo $baseUrl."/".$lang; ?>/our-business/our-assets">Our Assets</a></li>	
												<li><a href="<?php echo $baseUrl."/".$lang; ?>/our-business/csr">Giving Back(CSR)</a></li>	
												<li><a href="<?php echo $baseUrl."/".$lang; ?>/our-business/qhsse">QHSSE</a></li>	
											</ul>
										</li>
										<li>
											<a href="#"  class="<?php echo @$menu_ourproj; ?>">OUR PROJECTS</a>
											<i class="fa fa-angle-down fa-2x"></i>	
											<ul class="sub-menu">
												<li><a href="<?php echo $baseUrl."/".$lang; ?>/our-projects">Track record</a></li>	
												<li><a href="<?php echo $baseUrl."/".$lang; ?>/our-projects/where-we-operate">Where we operate</a></li>	
											</ul>
										</li>
										<!-- <li><a href="#" class="<?php //echo @$menu_media; ?>">MEDIA</a></li> -->
										<!-- <li><a href="#" class="<?php //echo @$menu_ourprop; ?>">OUR PEOPLE</a></li> -->
										<li><a href="<?php echo $baseUrl."/".$lang; ?>/contact"  class="<?php echo @$menu_contact; ?>">CONTACT US</a></li>
									</ul>
								</div>

							</div>
						</header>								
					</div>
				</div>

			</div>
		</section>