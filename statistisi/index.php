<?php
   include('../session_co.php');
?>
<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<!-- BEGIN: Head-->
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="Vuexy admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, Vuexy admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="PIXINVENT">
    <title>Home Statistisi</title>
    <link rel="apple-touch-icon" href="../app-assets/images/ico/apple-icon-120.png">
    <link rel="shortcut icon" type="image/x-icon" href="../app-assets/images/ico/kemenag.png">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600" rel="stylesheet">

    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="../app-assets/vendors/css/vendors.min.css">
    <link rel="stylesheet" type="text/css" href="../app-assets/vendors/css/charts/apexcharts.css">
    <link rel="stylesheet" type="text/css" href="../app-assets/vendors/css/extensions/tether-theme-arrows.css">
    <link rel="stylesheet" type="text/css" href="../app-assets/vendors/css/extensions/tether.min.css">
    <link rel="stylesheet" type="text/css" href="../app-assets/vendors/css/extensions/shepherd-theme-default.css">
    <!-- END: Vendor CSS-->

    <!-- BEGIN: Theme CSS-->
    <link rel="stylesheet" type="text/css" href="../app-assets/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="../app-assets/css/bootstrap-extended.css">
    <link rel="stylesheet" type="text/css" href="../app-assets/css/colors.css">
    <link rel="stylesheet" type="text/css" href="../app-assets/css/components.css">
    <link rel="stylesheet" type="text/css" href="../app-assets/css/themes/dark-layout.css">
    <link rel="stylesheet" type="text/css" href="../app-assets/css/themes/semi-dark-layout.css">

    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css" href="../app-assets/css/core/menu/menu-types/vertical-menu.css">
    <link rel="stylesheet" type="text/css" href="../app-assets/css/core/colors/palette-gradient.css">
    <link rel="stylesheet" type="text/css" href="../app-assets/css/pages/dashboard-analytics.css">
    <link rel="stylesheet" type="text/css" href="../app-assets/css/pages/card-analytics.css">
    <link rel="stylesheet" type="text/css" href="../app-assets/css/plugins/tour/tour.css">
    <!-- END: Page CSS-->

    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="../assets/css/style.css">
    <!-- END: Custom CSS-->

</head>
<!-- END: Head-->

<!-- BEGIN: Body-->

<body class="vertical-layout vertical-menu-modern semi-dark-layout 2-columns  navbar-floating footer-static  " data-open="click" data-menu="vertical-menu-modern" data-col="2-columns" data-layout="semi-dark-layout">

    <!-- BEGIN: Header-->
    <nav class="header-navbar navbar-expand-md navbar navbar-with-menu navbar-static-top navbar-light navbar-border fixed-top" aria-hidden="true" data-nav="brand-center">
        <div class="navbar-wrapper">
          <div class="navbar-header" style="width: 315px;">
            <ul class="nav navbar-nav flex-row">
              <li class="nav-item mobile-menu d-md-none mr-auto"><a class="nav-link nav-menu-main menu-toggle hidden-xs" href="#"><i class="ft-menu font-large-1"></i></a></li>
              <li class="nav-item"><a class="navbar-brand" href="https://sso.undip.ac.id/pages/dashboard"><img class="brand-logo" alt="robust admin logo" src="">
                  <h3 class="brand-text">Universitas Diponegoro</h3></a></li>
                	                <li class="nav-item d-md-none"><a class="nav-link open-navbar-container collapsed" data-toggle="collapse" data-target="#navbar-mobile" style="padding-top: 16px;" aria-expanded="false"><i class="fa
	                fa-ellipsis-v"></i></a></li>
                            </ul>
          </div>
          <div class="navbar-container container-fluid center-layout">
            <div class="navbar-collapse collapse" id="navbar-mobile" style="">
              <ul class="nav navbar-nav mr-auto float-left">
                <!-- <li class="nav-item d-none d-md-block"><a class="nav-link nav-menu-main menu-toggle hidden-xs" href="#"><i class="ft-menu">         </i></a></li> -->
                <!-- <li class="nav-item nav-search"><a class="nav-link nav-link-search" href="#"><i class="ficon ft-search"></i></a>
                  <div class="search-input">
                    <input class="input" type="text" placeholder="Explore Robust...">
                  </div>
                </li> -->
              </ul>
	            					<ul class="nav navbar-nav float-right">
	                    <li class="dropdown dropdown-notification nav-item" id="notifContainer" style="display: none;">
		                    <a class="nav-link nav-link-label customizer3-toggle" href="#"><i class="ficon ft-bell"></i>
			                    <span class="badge badge-pill badge-default badge-danger badge-default badge-up notifCount1">0</span>
		                    </a>
	                    </li>
<!--		                <li class="dropdown dropdown-notification nav-item"><a class="nav-link nav-link-label" href="#" data-toggle="dropdown"><i class="ficon ft-mail"></i><span class="badge badge-pill badge-default badge-info badge-default badge-up">5              </span></a>-->
<!--		                  <ul class="dropdown-menu dropdown-menu-media dropdown-menu-right">-->
<!--		                    <li class="dropdown-menu-header">-->
<!--		                      <h6 class="dropdown-header m-0"><span class="grey darken-2">Messages</span></h6><span class="notification-tag badge badge-default badge-warning float-right m-0">4 New</span>-->
<!--		                    </li>-->
<!--		                    <li class="scrollable-container media-list w-100"><a href="javascript:void(0)">-->
<!--		                        <div class="media">-->
<!--		                          <div class="media-left"><span class="avatar avatar-sm avatar-online rounded-circle"><img src="--><!--?//= base_url() ?--><!--template_assets/robust/app-assets/images/portrait/small/avatar-s-19.png" alt="avatar"><i></i></span></div>-->
<!--		                          <div class="media-body">-->
<!--		                            <h6 class="media-heading">Margaret Govan</h6>-->
<!--		                            <p class="notification-text font-small-3 text-muted">I like your portfolio, let's start.</p><small>-->
<!--		                              <time class="media-meta text-muted" datetime="2015-06-11T18:29:20+08:00">Today</time></small>-->
<!--		                          </div>-->
<!--		                        </div></a><a href="javascript:void(0)">-->
<!--		                        <div class="media">-->
<!--		                          <div class="media-left"><span class="avatar avatar-sm avatar-busy rounded-circle"><img src="--><!--?//= base_url() ?--><!--template_assets/robust/app-assets/images/portrait/small/avatar-s-2.png" alt="avatar"><i></i></span></div>-->
<!--		                          <div class="media-body">-->
<!--		                            <h6 class="media-heading">Bret Lezama</h6>-->
<!--		                            <p class="notification-text font-small-3 text-muted">I have seen your work, there is</p><small>-->
<!--		                              <time class="media-meta text-muted" datetime="2015-06-11T18:29:20+08:00">Tuesday</time></small>-->
<!--		                          </div>-->
<!--		                        </div></a><a href="javascript:void(0)">-->
<!--		                        <div class="media">-->
<!--		                          <div class="media-left"><span class="avatar avatar-sm avatar-online rounded-circle"><img src="--><!--?//= base_url() ?--><!--template_assets/robust/app-assets/images/portrait/small/avatar-s-3.png" alt="avatar"><i></i></span></div>-->
<!--		                          <div class="media-body">-->
<!--		                            <h6 class="media-heading">Carie Berra</h6>-->
<!--		                            <p class="notification-text font-small-3 text-muted">Can we have call in this week ?</p><small>-->
<!--		                              <time class="media-meta text-muted" datetime="2015-06-11T18:29:20+08:00">Friday</time></small>-->
<!--		                          </div>-->
<!--		                        </div></a><a href="javascript:void(0)">-->
<!--		                        <div class="media">-->
<!--		                          <div class="media-left"><span class="avatar avatar-sm avatar-away rounded-circle"><img src="--><!--?//= base_url() ?--><!--template_assets/robust/app-assets/images/portrait/small/avatar-s-6.png" alt="avatar"><i></i></span></div>-->
<!--		                          <div class="media-body">-->
<!--		                            <h6 class="media-heading">Eric Alsobrook</h6>-->
<!--		                            <p class="notification-text font-small-3 text-muted">We have project party this saturday.</p><small>-->
<!--		                              <time class="media-meta text-muted" datetime="2015-06-11T18:29:20+08:00">last month</time></small>-->
<!--		                          </div>-->
<!--		                        </div></a></li>-->
<!--		                    <li class="dropdown-menu-footer"><a class="dropdown-item text-muted text-center" href="javascript:void(0)">Read all messages</a></li>-->
<!--		                  </ul>-->
<!--		                </li>-->
		                <li class="dropdown dropdown-user nav-item ">
			                				
				                <a class="dropdown-toggle nav-link dropdown-user-link section_userinfo" href="#" data-toggle="dropdown">
				                    <span class="avatar avatar-online">
				                      <img src="https://sso.undip.ac.id/assets/app/images/user.png" style="max-width: 50px;" alt="foto">
				                      <i></i>
				                    </span>
					                <span class="user-name" style="margin-bottom: 1rem;">Azzah Afifah Veronica</span>
				                </a>
				                <div class="dropdown-menu dropdown-menu-right">
					                <!-- <a class="dropdown-item" href="user-profile.html"><i class="ft-user"></i> Edit Profile</a>
									<a class="dropdown-item" href="email-application.html"><i class="ft-mail"></i> My Inbox</a>
									<a class="dropdown-item" href="user-cards.html"><i class="ft-check-square"></i> Task</a>
									<a class="dropdown-item" href="chat-application.html"><i class="ft-message-square"></i> Chats</a> -->
					                					                <a class="dropdown-item menu_changepass" href="https://sso.undip.ac.id/user/change_password"><i class="ft-unlock"></i> Ganti Password</a>
					                <a class="dropdown-item menu_logout" href="https://sso.undip.ac.id/sso/logout"><i class="ft-power"></i> Logout</a>
				                </div>
			                		
		                </li>
	                </ul>
	                        </div>
          </div>
        </div>
      </nav>
    <!-- END: Header-->


    <!-- BEGIN: Main Menu-->
    <div class="main-menu menu-fixed menu-dark menu-accordion menu-shadow" data-scroll-to-active="true">
        <div class="navbar-header">
            <ul class="nav navbar-nav flex-row">
                <li class="nav-item mr-auto"><a class="navbar-brand" href="./html/ltr/vertical-menu-template-semi-dark/index.html">
                <div class="logo" href="kemenag_logo.png"></div>
                        <h2 class="brand-text mb-0">Kementerian Agama RI</h2>
                    </a></li>
                <li class="nav-item nav-toggle"><a class="nav-link modern-nav-toggle pr-0" data-toggle="collapse"><i class="feather icon-x d-block d-xl-none font-medium-4 primary toggle-icon"></i><i class="toggle-icon feather icon-disc font-medium-4 d-none d-xl-block collapse-toggle-icon primary" data-ticon="icon-disc"></i></a></li>
            </ul>
        </div>
        <div class="shadow-bottom"></div>
        <div class="main-menu-content">
            <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
                <li class=" nav-item"><a href="app-user-view.php"><i class="feather icon-home"></i><span class="menu-title" data-i18n="Dashboard">Pemohon</span></a>
                </li>
                <li class=" navigation-header"><span>Statistisi</span>
                </li>
                <li class=" nav-item"><a href="./rekap-kegiatan-harian.php"><i class="feather icon-list"></i><span class="menu-title" data-i18n="Rekap Kerja Harian">Rekap Kegiatan Harian</span></a>
                </li>
                <li class=" nav-item"><a href="./edit-rekap-kegiatan.php"><i class="feather icon-list"></i><span class="menu-title" data-i18n="Rekap Kerja Harian">Ubah Rekap Kegiatan Harian</span></a>
                </li>
            </ul>
        </div>
    </div>
    <!-- END: Main Menu-->

    <!-- BEGIN: Content-->
    <div class="app-content content">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper">
            <div class="content-header row">
            </div>
            <div class="content-body">
            <div><h1>Welcome back, <?php echo $login_session; ?>!</h1></div>
            </div>
        </div>
    </div>
    <!-- END: Content-->

    <div class="sidenav-overlay"></div>
    <div class="drag-target"></div>

    <!-- BEGIN: Footer-->
    <footer class="footer footer-static footer-light">
        <p class="clearfix blue-grey lighten-2 mb-0"><span class="float-md-left d-block d-md-inline-block mt-25">COPYRIGHT &copy; 2020<a class="text-bold-800 grey darken-2" href="https://1.envato.market/pixinvent_portfolio" target="_blank">Biro Humas, Data, dan Informasi,</a>All rights Reserved</span><span class="float-md-right d-none d-md-block">Hand-crafted & Made with<i class="feather icon-heart pink"></i></span>
            <button class="btn btn-primary btn-icon scroll-top" type="button"><i class="feather icon-arrow-up"></i></button>
        </p>
    </footer>
    <!-- END: Footer-->


    <!-- BEGIN: Vendor JS-->
    <script src="../app-assets/vendors/js/vendors.min.js"></script>
    <!-- BEGIN Vendor JS-->

    <!-- BEGIN: Page Vendor JS-->
    <script src="../app-assets/vendors/js/charts/apexcharts.min.js"></script>
    <script src="../app-assets/vendors/js/extensions/tether.min.js"></script>
    <script src="../app-assets/vendors/js/extensions/shepherd.min.js"></script>
    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Theme JS-->
    <script src="../app-assets/js/core/app-menu.js"></script>
    <script src="../app-assets/js/core/app.js"></script>
    <script src="../app-assets/js/scripts/components.js"></script>
    <!-- END: Theme JS-->

    <!-- BEGIN: Page JS-->
    <script src="../app-assets/js/scripts/pages/dashboard-analytics.js"></script>
    <!-- END: Page JS-->

</body>
<!-- END: Body-->

</html>