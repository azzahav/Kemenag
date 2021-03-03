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
    <title>Rekap Kegiatan Harian</title>
    <link rel="apple-touch-icon" href="../app-assets/images/ico/apple-icon-120.png">
    <link rel="shortcut icon" type="image/x-icon" href="../app-assets/images/ico/kemenag.png">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600" rel="stylesheet">

    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="../app-assets/vendors/css/vendors.min.css">
    <link rel="stylesheet" type="text/css" href="../app-assets/vendors/css/extensions/toastr.css">
    <link rel="stylesheet" type="text/css" href="../app-assets/vendors/css/forms/spinner/jquery.bootstrap-touchspin.css">
    <link rel="stylesheet" type="text/css" href="../app-assets/vendors/css/extensions/sweetalert2.min.css">
    <!-- END: Vendor CSS-->

    <!-- BEGIN: Theme CSS-->
    <link rel="stylesheet" type="text/css" href="../app-assets/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="../app-assets/css/bootstrap-extended.css">
    <link rel="stylesheet" type="text/css" href="../app-assets/css/colors.css">
    <link rel="stylesheet" type="text/css" href="../app-assets/css/components.css">
    <link rel="stylesheet" type="text/css" href="../app-assets/css/themes/dark-layout.css">
    <link rel="stylesheet" type="text/css" href="../app-assets/css/themes/semi-dark-layout.css">
    <script src="../aset/js/jquery.min.js"></script>

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
                <li class=" nav-item"><a href="app-user-view.php"><i class="feather icon-home"></i><span class="menu-title" data-i18n="Dashboard">Profil Statistisi</span></a>
                <ul class="menu-content">
                        <li><a href="app-user-view.php"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="View">View Profil</span></a>
                        </li>
                        <li><a href="./edit-data-pribadi.php?nip=<?php echo $login_session2; ?>"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="View">Edit Profil</span></a>
                        </li>
                    </ul>
                </li>
                <li class=" navigation-header"><span>Statistisi</span>
                </li>
                <li class=" nav-item"><a href="./rekap-kegiatan-harian.php"><i class="feather icon-circle"></i><span class="menu-title" data-i18n="Rekap Kerja Harian">Input Kegiatan Harian</span></a>
                </li>
                <li class=" nav-item"><a href="./detail-rekap.php"><i class="feather icon-list"></i><span class="menu-title" data-i18n="Rekap Kerja Harian">Rekap Kegiatan Harian</span></a>
                </li>
                <li class=" navigation-header"><span>Pimpinan</span>
                </li>
                <li class=" nav-item"><a href="./pimpinan.php"><i class="feather icon-circle"></i><span class="menu-title" data-i18n="Rekap Kerja Harian">Kelola Pimpinan</span></a>
                </li>
            </ul>
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
                <div class="content-header-left col-md-9 col-12 mb-2">
                    <div class="row breadcrumbs-top">
                        <div class="col-12">
                            <h2 class="content-header-title float-left mb-0">Statistisi</h2>
                            <div class="breadcrumb-wrapper col-12">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="./app-user-view.php">Home</a>
                                    </li>
                                    <li class="breadcrumb-item active">Rekap Kegiatan Harian Statistisi
                                    </li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content-body">
                
                <!-- Basic Inputs start -->
                <section id="basic-input" >
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Rekap Kegiatan Harian</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                    
                                    <form class="form form-horizontal"  action="./detail-rekap.php" method="post"  name="form" enctype="multipart/form-data">
                                                    <div class="col-12">
                                                        <div class="form-group row">
                                                            <div class="col-md-4">
                                                                <span>Nama</span>
                                                            </div>
                                                            <div class="col-md">
                                                                <div class="position-relative">
                                                                <input class="form-control" readonly name="nama" value="<?php echo $login_session; ?>"> </input>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="form-group row">
                                                            <div class="col-md-4">
                                                                <span>NIP</span>
                                                            </div>
                                                            <div class="col-md">
                                                                <div class="position-relative">
                                                                <input class="form-control" readonly onkeypress="validate(event)" id="nip" min="0" maxlength="19" type="number" class="form-control" name="nip" value="<?php echo $login_session2; ?>"> </input>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="form-group row">
                                                            <div class="col-md-4">
                                                                <span>Unsur</span>
                                                            </div>
                                                            <div class="col-md-8">
                                                            <select class="form-control" id="data_unsur" name="unsur">
                                                                <option value=""> </option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="form-group row">
                                                            <div class="col-md-4">
                                                                <span>Sub Unsur</span>
                                                            </div>
                                                            <div class="col-md-8">
                                                            <select class="form-control" id="data_subunsur" name="sub_unsur">
                                                                <option value=""></option>
                                                            </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="form-group row">
                                                            <div class="col-md-4">
                                                                <span>Butir kegiatan</span>
                                                            </div>
                                                            <div class="col-md-8">
                                                            <select class="custom-select form-control" name="butir_kegiatan" onchange='changeValue(this.value)' id="data_butir" >
                                                            <option value=""></option>

                                                            </select>
                                                        </div>
                                                    </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="form-group row">
                                                            <div class="col-md-4">
                                                                <span>Uraian kegiatan</span>
                                                            </div>
                                                            <div class="col-md">
                                                                <div class="position-relative">
                                                                <textarea class="form-control" id="pass-icon" rows="3" placeholder="Uraian Kegiatan" name="uraian_kegiatan" required autofocus></textarea>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="form-group row">
                                                            <div class="col-md-4">
                                                                <span for="quantity">Volume kegiatan</span>
                                                            </div>
                                                            <div class="col-md">
                                                                <div class="input-group">
                                                                <input name="volume_kegiatan" type="number" class="touchspin" value="0" ></input>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="form-group row">
                                                            <div class="col-md-4">
                                                                <span >Angka Kredit</span>
                                                            </div>
                                                            <div class="col-md">
                                                                <div class="position-relative">
                                                                <input class="form-control" readonly name="angka_kredit" type="text" id="angka_kredit" required autofocus></input>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="form-group row">
                                                            <div class="col-md-4">
                                                                <span>Satuan kegiatan</span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="position-relative">
                                                                    <input type="text" id="pass-icon" class="form-control" name="satuan_hasil" placeholder="Satuan Hasil" required autofocus>
                                                                    
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="form-group row">
                                                            <div class="col-md-4">
                                                                <span>Tanggal kegiatan</span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="position-relative">
                                                                    <input type="date" id="pass-icon" class="form-control" name="tanggal" placeholder="Tanggal" required autofocus>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>   
                                                    <div class="col-12">
                                                        <div class="form-group row">
                                                            <div class="col-md-4">
                                                                <span>Unggah Bukti</span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="position-relative">
                                                                <input  id="inputGroupFile01" name="unggah_bukti"  type="file" class="form-control-file" multiple required autofocus>
                                                            </div>
                                                            </div>
                                                        </div>
                                                    </div>   
                                                    <div class="col-md-8 offset-md-4" >
                                                    <button type="success" name="Submit" value="Add" class="btn btn-primary mb-2" id="position-top-end">Submit</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                        <script type="text/javascript">
                                            $(document).ready(function(){
                                                $.ajax({
                                                    type: 'POST',
                                                    url: "get_unsur.php",
                                                    cache: false, 
                                                    success: function(msg){
                                                    $("#data_unsur").html(msg);
                                                    }
                                                });

                                                $("#data_unsur").change(function(){
                                                var data_unsur = $("#data_unsur").val();
                                                    $.ajax({
                                                        type: 'POST',
                                                        url: "get_subunsur.php",
                                                        data: {data_unsur: data_unsur},
                                                        cache: false,
                                                        success: function(msg){
                                                        $("#data_subunsur").html(msg);
                                                        }
                                                    });
                                                });

                                                $("#data_subunsur").change(function(){
                                                var data_subunsur = $("#data_subunsur").val();
                                                    $.ajax({
                                                        type: 'POST',
                                                        url: "get_butir.php",
                                                        data: {data_subunsur: data_subunsur},
                                                        cache: false,
                                                        success: function(msg){
                                                        $("#data_butir").html(msg);
                                                        }
                                                    });
                                                });
                                            });
                                        </script>       
                                
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Basic Inputs end -->

                
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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- BEGIN Vendor JS-->

    <!-- BEGIN: Page Vendor JS-->
    <script src="../app-assets/vendors/js/extensions/toastr.min.js"></script>
    <script src="../app-assets/vendors/js/forms/spinner/jquery.bootstrap-touchspin.js"></script>
    <script src="../app-assets/vendors/js/extensions/sweetalert2.all.min.js"></script>
    <script src="../app-assets/vendors/js/extensions/polyfill.min.js"></script>
    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Theme JS-->
    <script src="../app-assets/js/core/app-menu.js"></script>
    <script src="../app-assets/js/core/app.js"></script>
    <script src="../app-assets/js/scripts/components.js"></script>
    <script src="../aset/js/jquery-chained.min.js"></script>
    <!-- END: Theme JS-->

    <!-- BEGIN: Page JS-->
    <script src="../app-assets/js/scripts/pages/app-user.js"></script>
    <script src="../app-assets/js/scripts/extensions/toastr.js"></script>
    <script src="../app-assets/js/scripts/forms/number-input.js"></script>
    <script src="../app-assets/js/scripts/extensions/sweet-alerts.js"></script>
    <!-- END: Page JS-->

</body>
<!-- END: Body-->

</html>