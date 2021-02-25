<?php
error_reporting(0);
include('../session_co.php');
// include database connection file
session_start();
if( !isset($_SESSION['login'])){
    header('location:../auth-login.php');
}

// Check if form is submitted for user update, then redirect to homepage after update
if(isset($_POST['update']))
{   
    $id_pengguna = isset($_POST['id_pengguna']) ? $_POST['id_pengguna'] : '';
    $nip = isset($_POST['nip']) ? $_POST['nip'] : '';
    $nama = isset($_POST['nama']) ? $_POST['nama'] : '';
    $no_seri_kapreg = isset($_POST['no_seri_kapreg']) ? $_POST['no_seri_kapreg'] : '';
    $pendidikan = isset($_POST['pendidikan']) ? $_POST['pendidikan'] : '';
    $pangkat = isset($_POST['pangkat']) ? $_POST['pangkat'] : '';
    $jabatan = isset($_POST['jabatan']) ? $_POST['jabatan'] : '';
    $unit_kerja = isset($_POST['unit_kerja']) ? $_POST['unit_kerja'] : '';
    $role = isset($_POST['role']) ? $_POST['role'] : '';
    $email = isset($_POST['email']) ? $_POST['email'] : '';
    $tgl_lahir = isset($_POST['tgl_lahir']) ? $_POST['tgl_lahir'] : '';
    $alamat = isset($_POST['alamat']) ? $_POST['alamat'] : '';
    $masa_kerja = isset($_POST['masa_kerja']) ? $_POST['masa_kerja'] : '';

    // update user data
    $result = mysqli_query($mysqli, "UPDATE pengguna SET nama='$nama',no_seri_kapreg='$no_seri_kapreg',pendidikan='$pendidikan',pangkat='$pangkat',jabatan='$jabatan',unit_kerja='$unit_kerja',role='$role',email='$email',tgl_lahir='$tgl_lahir',alamat='$alamat',masa_kerja='$masa_kerja' WHERE nip LIKE '%".$nip."%'");

    // Redirect to homepage to display updated user in list
    header("Location: ./app-user-view.php");
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
    <title>Edit Profil</title>
    <link rel="apple-touch-icon" href="../app-assets/images/ico/apple-icon-120.png">
    <link rel="shortcut icon" type="image/x-icon" href="../app-assets/images/ico/kemenag.png">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600" rel="stylesheet">

    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="../app-assets/vendors/css/vendors.min.css">
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
                <li class=" nav-item"><a href="./rekap-kegiatan-harian.php"><i class="feather icon-circle"></i><span class="menu-title" data-i18n="Rekap Kerja Harian">Rekap Kegiatan Harian</span></a>
                </li>
                <li class=" nav-item"><a href="./edit-rekap-kegiatan.php"><i class="feather icon-edit-1"></i><span class="menu-title" data-i18n="Rekap Kerja Harian">Ubah Rekap Kegiatan Harian</span></a>
                </li>
                <li class=" nav-item"><a href="./detail-rekap.php"><i class="feather icon-list"></i><span class="menu-title" data-i18n="Rekap Kerja Harian">List Rekap</span></a>
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
            </div>
            <div class="content-body">
                <!-- users edit start -->
                <section class="users-edit">
                    <div class="card">
                        <div class="card-content">
                            <div class="card-body">
                                <ul class="nav nav-tabs mb-3" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link d-flex align-items-center active" id="account-tab" data-toggle="tab" href="#account" aria-controls="account" role="tab" aria-selected="true">
                                            <i class="feather icon-user mr-25"></i><span class="d-none d-sm-block">Account</span>
                                        </a>
                                    </li>
                                </ul>
                                <div class="tab-content">
                                    <div class="tab-pane active" id="account" aria-labelledby="account-tab" role="tabpanel">
                                        <!-- users edit media object start -->
                                        <div class="media mb-2">
                                            <a class="mr-2 my-25" href="#">
                                                <img src="../app-assets/images/portrait/small/orang.png" alt="users avatar" class="users-avatar-shadow rounded" height="90" width="90">
                                            </a>
                                            <div class="media-body mt-50">
                                                <h4 class="media-heading"><?php echo $login_session; ?></h4>
                                                <h7 class="media-heading"><?php echo $login_session5?></h7>
                                            </div>
                                        </div>
                                        <!-- users edit media object ends -->
                                        <!-- users edit account form start -->
                                        <form name="update_user" method="post" action="">
                                            <div class="row">
                                                <div class="col-12 col-sm-6">
                                                    <div class="form-group">
                                                        <div class="controls">
                                                            <label>NIP</label>
                                                            <input type="text" class="form-control" name="nip" value="<?php echo $login_session2;?>">
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="controls">
                                                            <label>Name</label>
                                                            <input type="text" class="form-control" name="nama" value="<?php echo $login_session;?>">
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="controls">
                                                            <label>E-mail</label>
                                                            <input type="email" class="form-control" name="email" value="<?php echo $login_session14;?>">
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="controls">
                                                            <label>No Seri Karpeg</label>
                                                            <input type="text" class="form-control" name="no_seri_kapreg" value="<?php echo $login_session3;?>">
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="controls">
                                                            <label>Unit Kerja</label>
                                                            <input type="text" class="form-control" name="unit_kerja" value="<?php echo $login_session4;?>">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-12 col-sm-6">

                                                    <div class="form-group">
                                                        <label>Jabatan</label>
                                                        <select class="form-control" name="jabatan" value="<?php echo $login_session10;?>">
                                                        <option value="Statistisi Muda">Statistisi Muda</option>
                                                                <option value="Statistisi Madya">Statistisi Madya</option>
                                                        </select>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Status</label>
                                                        <select class="form-control" name="role" value="<?php echo $login_session5;?>">
                                                        <option value="Statistisi">Statistisi</option>
                                                        <option value="Penilai">Penilai</option>
                                                        <option value="Admin">Admin</option>
                                                        </select>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Masa Kerja</label>
                                                        <input type="text" class="form-control" name="masa_kerja" value="<?php echo $login_session11;?>">
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Pendidikan</label>
                                                        <input type="text" class="form-control" name="pendidikan" value="<?php echo $login_session8;?>">
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Pangkat</label>
                                                        <input type="text" class="form-control" name="pangkat" value="<?php echo $login_session9;?>">
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Alamat</label>
                                                        <input type="text" class="form-control" name="alamat" value="<?php echo $login_session15;?>">
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Tanggal Lahir</label>
                                                        <input type="date" class="form-control" name="tgl_lahir" value="<?php echo $login_session13;?>">
                                                    </div>
                                                </div>
                                                
                                                <div class="col-12 d-flex flex-sm-row flex-column justify-content-end mt-1">
                                                    <input type="hidden"  name="nip" value="<?php echo $_GET['nip'];?>">
                                                    <input type="submit" class="btn btn-primary glow mb-1 mb-sm-0 mr-0 mr-sm-1" name="update" value="Update"></input>
                                                    <a type="reset" href="app-user-view.php" class="btn btn-outline-danger">Cancel</a>
                                                </div>
                                            </div>
                                        </form>
                                        <!-- users edit account form ends -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- users edit ends -->

            </div>
        </div>
    </div>
    <!-- END: Content-->

    <div class="sidenav-overlay"></div>
    <div class="drag-target"></div>

    <!-- BEGIN: Footer-->
    <footer class="footer footer-static footer-light">
        <p class="clearfix blue-grey lighten-2 mb-0"><span class="float-md-left d-block d-md-inline-block mt-25">COPYRIGHT &copy; 2020<a class="text-bold-800 grey darken-2" href="https://1.envato.market/pixinvent_portfolio" target="_blank">Pixinvent,</a>All rights Reserved</span><span class="float-md-right d-none d-md-block">Hand-crafted & Made with<i class="feather icon-heart pink"></i></span>
            <button class="btn btn-primary btn-icon scroll-top" type="button"><i class="feather icon-arrow-up"></i></button>
        </p>
    </footer>
    <!-- END: Footer-->


    <!-- BEGIN: Vendor JS-->
    <script src="../app-assets/vendors/js/vendors.min.js"></script>
    <!-- BEGIN Vendor JS-->

    <!-- BEGIN: Page Vendor JS-->
    <script src="../app-assets/vendors/js/forms/select/select2.full.min.js"></script>
    <script src="../app-assets/vendors/js/forms/validation/jqBootstrapValidation.js"></script>
    <script src="../app-assets/vendors/js/pickers/pickadate/picker.js"></script>
    <script src="../app-assets/vendors/js/pickers/pickadate/picker.date.js"></script>
    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Theme JS-->
    <script src="../app-assets/js/core/app-menu.js"></script>
    <script src="../app-assets/js/core/app.js"></script>
    <script src="../app-assets/js/scripts/components.js"></script>
    <!-- END: Theme JS-->

    <!-- BEGIN: Page JS-->
    <script src="../app-assets/js/scripts/pages/app-user.js"></script>
    <script src="../app-assets/js/scripts/navs/navs.js"></script>
    <!-- END: Page JS-->

</body>
<!-- END: Body-->

</html>