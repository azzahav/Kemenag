<?php
session_start();
if (isset($_SESSION['login'])) {
    echo"<script>alert('Yuk Balik Yuk');document.location.href=''</script>";
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
    <title>Login-DUPAK</title>
    <link rel="apple-touch-icon" href="./app-assets/images/ico/apple-icon-120.png">
    <link rel="shortcut icon" type="image/x-icon" href="./app-assets/images/ico/kemenag.png">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600" rel="stylesheet">

    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="./app-assets/vendors/css/vendors.min.css">
    <link rel="stylesheet" type="text/css" href="./app-assets/vendors/css/animate/animate.css">
    <link rel="stylesheet" type="text/css" href="../app-assets/vendors/css/extensions/toastr.css">
    <!-- END: Vendor CSS-->

    <!-- BEGIN: Theme CSS-->
    <link rel="stylesheet" type="text/css" href="./app-assets/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="./app-assets/css/bootstrap-extended.css">
    <link rel="stylesheet" type="text/css" href="./app-assets/css/colors.css">
    <link rel="stylesheet" type="text/css" href="./app-assets/css/components.css">
    <link rel="stylesheet" type="text/css" href="./app-assets/css/themes/dark-layout.css">
    <link rel="stylesheet" type="text/css" href="./app-assets/css/themes/semi-dark-layout.css">

    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css" href="./app-assets/css/core/menu/menu-types/vertical-menu.css">
    <link rel="stylesheet" type="text/css" href="./app-assets/css/core/colors/palette-gradient.css">
    <link rel="stylesheet" type="text/css" href="./app-assets/css/pages/authentication.css">
    <link rel="stylesheet" type="text/css" href="../app-assets/css/plugins/extensions/toastr.css">
    <!-- END: Page CSS-->

</head>
<!-- END: Head-->

<!-- BEGIN: Body-->

<body class="vertical-layout vertical-menu-modern semi-dark-layout 1-column  navbar-floating footer-static bg-full-screen-image  blank-page blank-page" data-open="click" data-menu="vertical-menu-modern" data-col="1-column" data-layout="semi-dark-layout">
    <!-- BEGIN: Content-->

    <div class="app-content content">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper">
            <div class="content-header row">
            </div>
            <div class="content-body">
                <section class="row flexbox-container">
                    <div class="col-xl-8 col-11 d-flex justify-content-center">
                        <div class="card bg-authentication rounded-0 mb-0">
                            <div class="row m-0">
                                <div class="col-lg-6 d-lg-block d-none text-center align-self-center px-1 py-0">
                                    <img src="./app-assets/images/pages/kemenag10.png" alt="branding logo">
                                </div>
                                <div class="col-lg-6 col-12 p-0">
                                    <div class="card rounded-0 mb-0 px-2">
                                        <div class="card-header pb-1">
                                            <div class="card-title">
                                                <h4 class="mb-0">Login</h4>
                                            </div>
                                        </div>
                                        <p class="px-2">Welcome back, please login to your account.</p>
                                        <div class="card-content">
                                        <?php 
                                                    if(isset($_GET['pesan'])){
                                                        if($_GET['pesan'] == "gagal"){ ?>
                                                                    <div class="alert alert-danger no-border alert-dismissible bg-danger bg-lighten-2 " role="alert"  style="color: #fff !important;">
                                                                        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                                                        <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
                                                                        <strong>Login Gagal!</strong> Username / Password Salah
                                                                    </div>
                                                            <?php        
                                                        }else if($_GET['pesan'] == "logout"){
                                                            ?>
                                                                    <div class="alert alert-danger no-border alert-dismissible bg-success bg-lighten-2" role="alert"  style="color: #fff !important;">
                                                                        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                                                        <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
                                                                        <strong>Berhasil</strong> Logout!!
                                                                    </div>
                                                            <?php        
                                                        }else if($_GET['pesan'] == "belum_login"){
                                                            echo "Anda harus login untuk mengakses halaman admin";
                                                        }
                                                    }
                                                    ?>
                                            <div class="card-body pt-1">
                                                <form method="post" action="cek_login.php">
                                                    <fieldset class="form-label-group form-group position-relative has-icon-left">
                                                        <input type="number" class="form-control"  name="nip"  id="user-name" placeholder="Masukkan nip" required autofocus>
                                                        <div class="form-control-position">
                                                            <i class="feather icon-user"></i>
                                                        </div>
                                                        <label for="user-name">NIP</label>
                                                    </fieldset>

                                                    <fieldset class="form-label-group position-relative has-icon-left">
                                                        <input type="password" class="form-control" name="password" id="user-password" placeholder="Masukkan Password" required autofocus>
                                                        <div class="form-control-position">
                                                            <i class="feather icon-lock"></i>
                                                        </div>
                                                        <label for="user-password">Password</label>
                                                    </fieldset>
                                                    <div class="form-group d-flex justify-content-between align-items-center">
                                                        <div class="text-left">
                                                            <fieldset class="checkbox">
                                                                <div class="vs-checkbox-con vs-checkbox-primary">
                                                                    <input type="checkbox">
                                                                    <span class="vs-checkbox">
                                                                        <span class="vs-checkbox--check">
                                                                            <i class="vs-icon feather icon-check"></i>
                                                                        </span>
                                                                    </span>
                                                                    <span class="">Remember me</span>
                                                                </div>
                                                            </fieldset>
                                                        </div>
                                                    </div>
                                        <div class="login-footer">
                                            <div class="footer-btn d-inline">
                                                <a href="auth-register.php" class="btn btn-outline-primary float-left btn-inline">Register</a>
                                                <button type="submit" class="btn btn-primary float-right btn-inline" name="btnlogin">Login</button>
                                            </div>
                                        </div>
                                        </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

            </div>
        </div>
    </div>
    <!-- END: Content-->



    <!-- BEGIN: Vendor JS-->
    <script src="./app-assets/vendors/js/vendors.min.js"></script>
    <!-- BEGIN Vendor JS-->

    <!-- BEGIN: Page Vendor JS-->
    <script src="../app-assets/vendors/js/extensions/toastr.min.js"></script>
    <script src="./app-assets/vendors/js/extensions/polyfill.min.js"></script>
    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Theme JS-->
    <script src="./app-assets/js/core/app-menu.js"></script>
    <script src="./app-assets/js/core/app.js"></script>
    <script src="./app-assets/js/scripts/components.js"></script>
    <!-- END: Theme JS-->

    <!-- BEGIN: Page JS-->
    <script src="../app-assets/js/scripts/extensions/toastr.js"></script>
    <!-- END: Page JS-->

</body>
<!-- END: Body-->

</html>