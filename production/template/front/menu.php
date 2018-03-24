
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

								<!-- Menu -->
								<nav id="menu">
									<header class="major">
										<a href="<?php echo $baseUrl."/".$lang; ?>"><img src="<?php echo $baseUrl; ?>/assets/images/sesubsea_logo.svg" title="Se Subsea"  alt="Se Subsea" class="img-responsive"></a>
									</header>
									<ul>
										<li><a href="<?php echo $baseUrl."/".$lang; ?>">HOME</a></li>
										<li><a href="<?php echo $baseUrl."/".$lang; ?>/about">ABOUT US</a></li>
										<li><a href="<?php echo $baseUrl."/".$lang; ?>/our-business">OUR BUSINESS</a></li>
										<li><a href="<?php echo $baseUrl."/".$lang; ?>/our-projects">OUR PROJECTS</a></li>
										<!-- <li><a href="#">MEDIA</a></li> -->
										<li><a href="#">OUR PEOPLE</a></li>
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

								<div class="main-menu">
									<ul>
										<li><a href="<?php echo $baseUrl."/".$lang; ?>" class="<?php echo @$menu_home; ?>">HOME</a></li>
										<li><a href="<?php echo $baseUrl."/".$lang; ?>/about"  class="<?php echo @$menu_about; ?>">ABOUT US</a></li>
										<li><a href="<?php echo $baseUrl."/".$lang; ?>/our-business"  class="<?php echo @$menu_ourbu; ?>">OUR BUSINESS</a></li>
										<li><a href="<?php echo $baseUrl."/".$lang; ?>/our-projects"  class="<?php echo @$menu_ourproj; ?>">OUR PROJECTS</a></li>
										<!-- <li><a href="#" class="<?php //echo @$menu_media; ?>">MEDIA</a></li> -->
										<li><a href="#" class="<?php echo @$menu_ourprop; ?>">OUR PEOPLE</a></li>
										<li><a href="<?php echo $baseUrl."/".$lang; ?>/contact"  class="<?php echo @$menu_contact; ?>">CONTACT US</a></li>
									</ul>
								</div>

							</div>
						</header>								
					</div>
				</div>

				



				<!-- <div class="row">
					<div id="search" class="alt">
						<form method="post" action="#">
							<input name="query" id="query" placeholder="Search" type="text" class="form-control">
						</form>
					</div>
				</div> -->

			</div>
		</section>