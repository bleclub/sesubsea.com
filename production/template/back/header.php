<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href="<?php echo $baseUrl; ?>/assets/admin/css/bootstrap.min.css">
    <!-- Font -->
    <link rel="stylesheet" href="<?php echo $baseUrl; ?>/assets/admin/css/fonts-style.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?php echo $baseUrl; ?>/assets/admin/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- daterange picker -->
    <link rel="stylesheet" href="<?php echo $baseUrl; ?>/assets/admin/plugins/daterangepicker/daterangepicker-bs3.css">
    <!-- iCheck for checkboxes and radio inputs -->
    <link rel="stylesheet" href="<?php echo $baseUrl; ?>/assets/admin/plugins/iCheck/all.css">
    <!-- Bootstrap Color Picker -->
    <link rel="stylesheet" href="<?php echo $baseUrl; ?>/assets/admin/plugins/colorpicker/bootstrap-colorpicker.min.css">
    <!-- Bootstrap time Picker -->
    <link rel="stylesheet" href="<?php echo $baseUrl; ?>/assets/admin/plugins/timepicker/bootstrap-timepicker.min.css">
    <!-- Select2 -->
    <link rel="stylesheet" href="<?php echo $baseUrl; ?>/assets/admin/plugins/select2/select2.min.css">
    <link rel="stylesheet" href="<?php echo $baseUrl; ?>/assets/admin/css/jquery.dataTables.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?php echo $baseUrl; ?>/assets/admin/dist/css/AdminLTE.min.css">
     <!-- Custom -->
  	<link rel="stylesheet" href="<?php echo $baseUrl; ?>/assets/admin/css/custom.css">
    <!-- AdminLTE Skins. We have chosen the skin-blue for this starter
          page. However, you can choose any other skin. Make sure you
          apply the skin class to the body tag so the changes take effect.
    -->
    <link rel="stylesheet" href="<?php echo $baseUrl; ?>/assets/admin/dist/css/skins/skin-red-light.css">
  
    <link rel="mask-icon" href="<?php echo $baseUrl;?>/assets/favicon/favicon_sesubsea.svg" color="#000000">
    <link rel="icon" type="image/x-icon" class="js-site-favicon" href="<?php echo $baseUrl;?>/assets/favicon/favicon_sesubsea.png">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
 <title><?php echo $title; ?></title>
  <!--
  BODY TAG OPTIONS:
  =================
  Apply one or more of the following classes to get the
  desired effect
  |---------------------------------------------------------|
  | SKINS         | skin-blue                               |
  |               | skin-black                              |
  |               | skin-purple                             |
  |               | skin-yellow                             |
  |               | skin-red                                |
  |               | skin-green                              |
  |---------------------------------------------------------|
  |LAYOUT OPTIONS | fixed                                   |
  |               | layout-boxed                            |
  |               | layout-top-nav                          |
  |               | sidebar-collapse                        |
  |               | sidebar-mini                            |
  |---------------------------------------------------------|
  -->
        
    </head>
	<body class="hold-transition skin-red-light sidebar-mini">
    <div class="wrapper">

      <!-- Main Header -->
      <header class="main-header">

        <!-- Logo -->
        <a href="<?php echo $baseUrl; ?>" class="logo">
          <!-- mini logo for sidebar mini 50x50 pixels -->
          <span class="logo-mini"><b>C</b>MS</span>
          <!-- logo for regular state and mobile devices -->
          <span class="logo-lg"><b>Admin</b>CMS</span>
        </a>

        <!-- Header Navbar -->
        <nav class="navbar navbar-static-top" role="navigation">
          <!-- Sidebar toggle button-->
          <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
          </a>
          <!-- Navbar Right Menu -->
          <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
              <!-- User Account Menu -->
              <li class="dropdown user user-menu">
                <!-- Menu Toggle Button -->
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <!-- The user image in the navbar-->
                  <img src="<?php echo $baseUrl; ?>/upload/profile/<?php echo $_SESSION[_ss . 'profilePic']; ?>" class="user-image" alt="User Image">
                  <!-- hidden-xs hides the username on small devices so only the image appears. -->
                  <span class="hidden-xs" style="text-transform:capitalize;"><?php echo $_SESSION[_ss . 'username']; ?></span>
                </a>
                <ul class="dropdown-menu">
                  <!-- The user image in the menu -->
                  <li class="user-header">
                    <img src="<?php echo $baseUrl; ?>/upload/profile/<?php echo $_SESSION[_ss . 'profilePic']; ?>" class="img-circle" alt="User Image">
                    <p style="text-transform:capitalize;">
                      <?php echo $_SESSION[_ss . 'username']; ?>
                      <small>Level: <?php echo $_SESSION[_ss . 'levelaccess']; ?></small>
                    </p>
                  </li>
                  <!-- Menu Body
                  <li class="user-body">
                    <div class="col-xs-4 text-center">
                      <a href="#">Followers</a>
                    </div>
                    <div class="col-xs-4 text-center">
                      <a href="#">Sales</a>
                    </div>
                    <div class="col-xs-4 text-center">
                      <a href="#">Friends</a>
                    </div>
                  </li> -->
                  <!-- Menu Footer-->
                  <li class="user-footer">
                    <div class="pull-left">
                      <a href="<?php echo $baseUrl; ?>/back/user/edit/<?php echo $_SESSION[_ss . 'id']; ?>" class="btn btn-default btn-flat">Profile</a>
                      
                    </div>
                    <div class="pull-right">
                      <a href="<?php echo $baseUrl; ?>/back/user/changepass/<?php echo $_SESSION[_ss . 'id']; ?>" class="btn btn-default btn-flat">Change Password</a>
                    </div>
                  </li>
                </ul>
              </li>
              <!-- Control Sidebar Toggle Button -->
              <li>
                <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
              </li>
            </ul>
          </div>
        </nav>
      </header>
      
	<!-- Left side column. contains the logo and sidebar -->
      <aside class="main-sidebar">

        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">

          <!-- Sidebar user panel (optional) -->
          <div class="user-panel">
            <div class="pull-left image">
              <img src="<?php echo $baseUrl; ?>/upload/profile/<?php echo $_SESSION[_ss . 'profilePic']; ?>" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
              <p><?php echo $_SESSION[_ss . 'fullname']; ?></p>
              <!-- Status -->
              <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
              <a href="<?php echo $baseUrl; ?>/back/user/logout"><i class="fa fa-power-off text-danger"></i>Sign out</a>
            </div>
          </div>

          <!-- search form (Optional)
          <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
              <input type="text" name="q" class="form-control" placeholder="Search...">
              <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i></button>
              </span>
            </div>
          </form>
          <!-- /.search form -->
	
          <!-- Sidebar Menu -->
          <ul class="sidebar-menu">
            <li class="header">Main Menu</li>
            <!-- Optionally, you can add icons to the links -->
            <li class="<?php echo @$menu_home; ?>"><a href="<?php echo $baseUrl; ?>/back/home">
              <i class="fa fa-link"></i> <span>Home</span></a>
            </li>
             <li class="<?php echo @$menu_about; ?>"><a href="<?php echo $baseUrl; ?>/back/content/index/about">
              <i class="fa fa-link"></i> <span>Project Into</span></a>
            </li>
            <li class="<?php echo @$menu_product; ?>"><a href="<?php echo $baseUrl; ?>/back/product">
              <i class="fa fa-link"></i> <span>Porject Concept</span></a>
            </li>
            <li class="<?php echo @$menu_herblist; ?>"><a href="<?php echo $baseUrl; ?>/back/herblist">
              <i class="fa fa-link"></i> <span>สมุนไพร</span></a>
            </li>
            <li class="<?php echo @$menu_news; ?>"><a href="<?php echo $baseUrl; ?>/back/news">
              <i class="fa fa-link"></i> <span>ข่าวอัพเดท</span></a>
            </li>
            <li class="<?php echo @$menu_event; ?>"><a href="<?php echo $baseUrl; ?>/back/event">
              <i class="fa fa-link"></i> <span>กิจกรรม</span></a>
            </li>
             <li class="<?php echo @$menu_article; ?>"><a href="<?php echo $baseUrl; ?>/back/article">
              <i class="fa fa-link"></i> <span>บทความ</span></a>
            </li>
            <?php /* <li class="<?php echo @$menu_event; ?>"><a href="<?php echo $baseUrl; ?>/back/event">
              <i class="fa fa-link"></i> <span>Event</span></a>
            </li>  */ ?>
            <li class="<?php echo @$menu_career; ?>"><a href="<?php echo $baseUrl; ?>/back/career">
              <i class="fa fa-link"></i> <span>ตำแหน่งงาน</span></a>
            </li>
            <li class="<?php echo @$menu_media; ?>"><a href="<?php echo $baseUrl; ?>/back/media">
              <i class="fa fa-link"></i> <span>จัดการรูปภาพ</span></a>
            </li>
            
            <!-- <li class="<?php //echo @$menu_contact; ?>"><a href="<?php echo $baseUrl; ?>/back/enquiry">
              <i class="fa fa-link"></i> <span>Enquiry</span></a>
            </li> -->
            <?php /*<li class="<?php echo @$menu_enquiry; ?>"><a href="<?php echo $baseUrl; ?>/back/home">
              <i class="fa fa-link"></i> <span>Enquiry</span></a>
            </li> --> */?>
           
          </ul><!-- /.sidebar-menu -->
        
          
        </section>
        <!-- /.sidebar -->
      </aside>
      
