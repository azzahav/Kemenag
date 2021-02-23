<?php
error_reporting(0);
include('../session_co.php');
session_start();
if( !isset($_SESSION['login'])){
    header('location:../auth-login.php');
}

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
    <title>Profil</title>
    <link rel="apple-touch-icon" href="../app-assets/images/ico/apple-icon-120.png">
    <link rel="shortcut icon" type="image/x-icon" href="../app-assets/images/pages/kemenag10.png">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600" rel="stylesheet">

    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="../app-assets/vendors/css/vendors.min.css">
    <link rel="stylesheet" type="text/css" href="../app-assets/vendors/css/extensions/toastr.css">
    <link rel="stylesheet" type="text/css" href="../app-assets/vendors/css/animate/animate.css">
    <link rel="stylesheet" type="text/css" href="../app-assets/vendors/css/extensions/sweetalert2.min.css">
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
    <link rel="stylesheet" type="text/css" href="../app-assets/css/pages/app-user.css">
    <link rel="stylesheet" type="text/css" href="../app-assets/css/plugins/extensions/toastr.css">
    <!-- END: Page CSS-->

    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="../assets/css/style.css">
    <!-- END: Custom CSS-->

</head>
<!-- END: Head-->

<!-- BEGIN: Body-->

<body class="vertical-layout vertical-menu-modern semi-dark-layout 2-columns  navbar-floating footer-static  " data-open="click" data-menu="vertical-menu-modern" data-col="2-columns" data-layout="semi-dark-layout">

    <!-- BEGIN: Header-->
    <nav class="header-navbar navbar-expand-lg navbar navbar-with-menu floating-nav navbar-light navbar-shadow">
        <div class="navbar-wrapper">
            <div class="navbar-container content">
                <div class="navbar-collapse" id="navbar-mobile">
                    <div class="mr-auto float-left bookmark-wrapper d-flex align-items-center">
                        <ul class="nav navbar-nav">
                            <li class="nav-item mobile-menu d-xl-none mr-auto"><a class="nav-link nav-menu-main menu-toggle hidden-xs" href="#"><i class="ficon feather icon-menu"></i></a></li>
                        </ul>
                        <ul class="nav navbar-nav">
                            <li class="nav-item d-none d-lg-block"><img src="../app-assets/images/pages/kemenag25.png"><a class="h4"> KEMENTERIAN AGAMA RI</a>
                            </li>
                        </ul>
                    </div>
                        <a class="dropdown-toggle nav-link dropdown-user-link section_userinfo" href="#" data-toggle="dropdown">
                            <span class="avatar avatar-online">
                            <img src="https://sso.undip.ac.id/assets/app/images/user.png" style="max-width: 45px;" alt="foto"><i></i></span>
                            <span class="user-name" style="margin-bottom: 1rem;" >  <?php echo $login_session; ?></span></a>
                                <div class="dropdown-menu dropdown-menu-right">
                                <a class="dropdown-item"><i class="feather icon-user"></i> <?php echo $login_session5; ?></a>
                                <div class="dropdown-divider"></div><a class="dropdown-item menu_changepass" href="#" data-toggle="modal" data-target="#inlineForm"><i class="feather icon-unlock"></i> Ganti Password</a>
                                <a class="dropdown-item menu_logout" href="../logout.php" onclick="return confirm('Yakin Mau Logout??')"><i class="feather icon-power"></i> Logout</a>   
                                </div>                   
                    </li>
                </div>
            </div>
        </div>
    </nav>
    <!-- END: Header-->
    <!-- Modal -->
    <div class="modal fade text-left" id="inlineForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel33" aria-hidden="true" >
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
            <div class="modal-content">
            <div class="modal-header">
               <h4 class="modal-title" id="myModalLabel33">Ganti Password </h4>
               <button type="button" class="close" data-dismiss="modal" aria-label="Close">
               <span aria-hidden="true">&times;</span>
               </button>
            </div>
            <form action="./forgot.php" method="post">
            <input type="hidden" name="nip" value="<?= $_SESSION['nip'] ?>">
                <div class="modal-body">
                    <label>Password Lama: </label>
                  <div class="form-group">
                      <input type="password" class="form-control" name="pass_lama" required>
                  </div>

                    <label>Password Baru: </label>
                  <div class="form-group">
                      <input type="password" class="form-control" name="pass_baru" required>
                  </div>

                    <label>Konfirmasi Password: </label>
                   <div class="form-group">
                        <input type="password" class="form-control" name="konfirmasi_pass" required>
                   </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Proses</button>
                </div>
            </form>
            </div>
        </div>
    </div>


    <!-- BEGIN: Main Menu-->
    <div class="main-menu menu-fixed menu-dark menu-accordion menu-shadow" data-scroll-to-active="true">
        <div class="navbar-header">
            <ul class="nav navbar-nav flex-row">
                <li class="nav-item mr-auto"><a class="navbar-brand" href="app-user-view.php">
                        <div class="logo" href="../app-assets/images/ico/kemenag.png"></div>
                        <h2 class="brand-text mb-0">DUPAK ONLINE</h2>
                    </a></li>
                <li class="nav-item nav-toggle"><a class="nav-link modern-nav-toggle pr-0" data-toggle="collapse"><i class="feather icon-x d-block d-xl-none font-medium-4 primary toggle-icon"></i><i class="toggle-icon feather icon-disc font-medium-4 d-none d-xl-block collapse-toggle-icon primary" data-ticon="icon-disc"></i></a></li>
            </ul>
        </div>
        <div class="shadow-bottom"></div>
        <div class="main-menu-content">
        <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
                            <li class=" navigation-header"><span>Tim Admin</span>
                            </li>
                            <li class=" nav-item"><a href="./app-user-view.php"><i class="feather icon-home"></i><span class="menu-title" data-i18n="Dashboard">Pemohon</span></a>
                            </li>
                            <li class=" nav-item"><a href="./pengguna.php"><i class="feather icon-server"></i><span class="menu-title" data-i18n="Colors">Kelola Pengguna</span></a>
                            </li>
                        </ul>
</section>
</div>
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
            <div class="alert alert-info no-border alert-dismissible mb-2 bg-primary bg-lighten-2" role="alert" style="color: #fff !important;">
					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
						<span aria-hidden="true">×</span>
					</button>
                    <h4>Selamat datang,  <?php echo $login_session5; ?></h4></div>
                <!-- page users view start -->
                <section class="page-users-view">
                    <div class="row">
                        <!-- account start -->
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <div class="card-title">Akun</div>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="users-view-image">
                                            <img src="../app-assets/images/portrait/small/orang.png" class="users-avatar-shadow w-100 rounded mb-2 pr-2 ml-1" alt="avatar">
                                        </div>
                                        <div class="col-12 col-sm-9 col-md-6 col-lg-5">
                                            <table>
                                                <tbody>
            
                                                <tr>
                                                    <td class="font-weight-bold">NIP</td>
                                                    <td><?php echo $login_session2; ?></td>
                                                </tr>
                                                <tr>
                                                    <td class="font-weight-bold">Nama</td>
                                                    <td><?php echo $login_session; ?></td>
                                                </tr>
                                                <tr>
                                                    <td class="font-weight-bold">No Seri Karpeg</td>
                                                    <td><?php echo $login_session3; ?></td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="col-12 col-md-12 col-lg-5">
                                            <table class="ml-0 ml-sm-0 ml-lg-0">
                                            <tr>
                                                    <td class="font-weight-bold">email</td>
                                                    <td><?php echo $login_session14; ?></td>
                                                </tr>
                                                <tr>
                                                    <td class="font-weight-bold">Unit Kerja</td>
                                                    <td><?php echo $login_session4; ?></td>
                                                </tr>
                                                <tr>
                                                    <td class="font-weight-bold">Status</td>
                                                    <td><?php echo $login_session5; ?></td>
                                                </tr>
                                              
                                            </table>
                                        </div>
                                        <div class="col-12">
                                        <a href="./app-user-edit.php?nip=<?php echo $login_session2; ?>" class="btn btn-primary mr-1"><i class="feather icon-edit-1"></i> Edit</a>
                                        <button type="reset" class="btn btn-danger" id="confirm-color"><i class="feather icon-delete"></i> Delete</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- account end -->
                        <!-- information start -->
                        <div class="col-md-6 col-12 ">
                            <div class="card">
                                <div class="card-header">
                                    <div class="card-title">Informasi</div>
                                </div>
                                <div class="card-body">
                                    <table>
                                        <tr>
                                            <td class="font-weight-bold">Tanggal Lahir </td>
                                            <td><?php echo $login_session6; ?>, <?php echo $login_session13; ?></td>
                                        </tr>
                                        <tr>
                                            <td class="font-weight-bold">Alamat </td>
                                            <td><?php echo $login_session15; ?></td>
                                        </tr>
                                        <tr>
                                            <td class="font-weight-bold">Jenis Kelamin</td>
                                            <td><?php echo $login_session7; ?></td>
                                        </tr>
                                        <tr>
                                            <td class="font-weight-bold">Pendidikan</td>
                                            <td><?php echo $login_session8; ?></td>
                                        </tr>
                                        <tr>
                                            <td class="font-weight-bold">Pangkat</td>
                                            <td><?php echo $login_session9; ?></td>
                                        </tr>
                                        <tr>
                                            <td class="font-weight-bold">Jabatan</td>
                                            <td><?php echo $login_session10; ?></td>
                                        </tr>
                                        <tr>
                                            <td class="font-weight-bold">Masa Kerja</td>
                                            <td><?php echo $login_session11; ?></td>
                                        </tr> 
                                    </table>
                                </div>

                            </div>
                         
                        </div>
                        <!-- information start -->
                    </div>
                </section>
                <!-- page users view end -->

            </div>
        </div>
    </div>
    <!-- END: Content-->


    <div class="sidenav-overlay"></div>
    <div class="drag-target"></div>

   
                                        
                                          
    <!-- BEGIN: Footer-->
    <footer class="footer footer-static footer-light">
        <p class="clearfix blue-grey lighten-2 mb-0"><span class="float-md-left d-block d-md-inline-block mt-25">COPYRIGHT &copy; 2020<a class="text-bold-800 grey darken-2"  target="_blank">Biro Humas Data dan Informasi,</a>All rights Reserved</span><span class="float-md-right d-none d-md-block">Hand-crafted & Made with<i class="feather icon-heart pink"></i></span>
            <button class="btn btn-primary btn-icon scroll-top" type="button"><i class="feather icon-arrow-up"></i></button>
        </p>
    </footer>
    <!-- END: Footer-->


    <!-- BEGIN: Vendor JS-->
    <script src="../app-assets/vendors/js/vendors.min.js"></script>
    <!-- BEGIN Vendor JS-->

    <!-- BEGIN: Page Vendor JS-->
    <script src="../app-assets/vendors/js/extensions/toastr.min.js"></script>
    <script src="../app-assets/vendors/js/extensions/sweetalert2.all.min.js"></script>
    <script src="../app-assets/vendors/js/extensions/polyfill.min.js"></script>
    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Theme JS-->
    <script src="../app-assets/js/core/app-menu.js"></script>
    <script src="../app-assets/js/core/app.js"></script>
    <script src="../app-assets/js/scripts/components.js"></script>
    <!-- END: Theme JS-->

    <!-- BEGIN: Page JS-->
    <script src="../app-assets/js/scripts/pages/app-user.js"></script>
    <script src="../app-assets/js/scripts/extensions/toastr.js"></script>
    <script src="../app-assets/js/scripts/extensions/sweet-alerts.js"></script>
    <!-- END: Page JS-->

</body>
<!-- END: Body-->

</html>