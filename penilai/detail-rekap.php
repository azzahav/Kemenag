<?php
error_reporting(0);
include('../session_co.php');
// include database connection file
include_once("../config.php");
session_start();
if( !isset($_SESSION['login'])){
    header('location:../auth-login.php');
}
// Check if form is submitted for user update, then redirect to homepage after update
if(isset($_POST['update']))
{   
    $id_rekap = isset($_POST['id_rekap']) ? $_POST['id_rekap'] : '';
    $status = isset($_POST['status']) ? $_POST['status'] : '';
    // update user data
    $result = mysqli_query($mysqli, "UPDATE rekap_harian SET status='$status' WHERE id_rekap LIKE '%".$id_rekap."%'");

    // Redirect to homepage to display updated user in list
    header("Location: detail-rekap.php");
}
?>
<?php
// Display selected user data based on id
// Getting id from url
$id_rekap = isset($_GET['id_rekap']) ? $_GET['id_rekap'] : null;

// Fetech user data based on id

$result = mysqli_query($mysqli, "SELECT * FROM rekap_harian WHERE id_rekap LIKE '%".$id_rekap."%'");

while($user_data = mysqli_fetch_array($result))
{
    $id_rekap =$user_data ['id_rekap'];
    $status = $user_data ['status'];
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
    <title>Detail Kegiatan</title>
    <link rel="apple-touch-icon" href="../app-assets/images/ico/apple-icon-120.png">
    <link rel="shortcut icon" type="image/x-icon" href="../app-assets/images/ico/kemenag.png">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600" rel="stylesheet">

    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="../app-assets/vendors/css/vendors.min.css">
    <link rel="stylesheet" type="text/css" href="../app-assets/vendors/css/forms/spinner/jquery.bootstrap-touchspin.css">
    <link rel="stylesheet" type="text/css" href="../app-assets/vendors/css/extensions/swiper.min.css">
    <link rel="stylesheet" type="text/css" href="../app-assets/vendors/css/animate/animate.css">
    <link rel="stylesheet" type="text/css" href="../app-assets/vendors/css/extensions/toastr.css">
    <link rel="stylesheet" type="text/css" href="../app-assets/vendors/css/forms/spinner/jquery.bootstrap-touchspin.css">
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
    <link rel="stylesheet" type="text/css" href="../app-assets/css/pages/app-ecommerce-details.css">
    <link rel="stylesheet" type="text/css" href="../app-assets/css/plugins/extensions/toastr.css">
    <!-- END: Page CSS-->

    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="../assets/css/style.css">
    <!-- END: Custom CSS-->

</head>
<!-- END: Head-->

<!-- BEGIN: Body-->

<body class="vertical-layout vertical-menu-modern semi-dark-layout 2-columns ecommerce-application navbar-floating footer-static  " data-open="click" data-menu="vertical-menu-modern" data-col="2-columns" data-layout="semi-dark-layout">

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
    <!-- BEGIN: Main Menu-->
    <div class="main-menu menu-fixed menu-dark menu-accordion menu-shadow" data-scroll-to-active="true">
        <div class="navbar-header">
            <ul class="nav navbar-nav flex-row">
                <li class="nav-item mr-auto"><a class="navbar-brand" href="app-user-view.php">
                        <h2 class="brand-text mb-0">DUPAK ONLINE</h2>
                    </a></li>
                <li class="nav-item nav-toggle"><a class="nav-link modern-nav-toggle pr-0" data-toggle="collapse"><i class="feather icon-x d-block d-xl-none font-medium-4 primary toggle-icon"></i><i class="toggle-icon feather icon-disc font-medium-4 d-none d-xl-block collapse-toggle-icon primary" data-ticon="icon-disc"></i></a></li>
            </ul>
        </div>
        <div class="shadow-bottom"></div>
        <div class="main-menu-content">
            <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
                <li class=" navigation-header"><span>Tim Penilai</span>
                </li>
                <li class=" nav-item"><a href="./app-user-view.php"><i class="feather icon-home"></i><span class="menu-title" data-i18n="Dashboard">Pemohon</span></a>
                </li>
                <li class=" nav-item"><a href="./data-list-rekap.php"><i class="feather icon-server"></i><span class="menu-title" data-i18n="Colors">Rekap Kegiatan Statistisi</span></a>
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
                <div class="content-header-left col-md-9 col-12 mb-2">
                    <div class="row breadcrumbs-top">
                        <div class="col-12">
                            <h2 class="content-header-title float-left mb-0">Rekap Details</h2>
                            <div class="breadcrumb-wrapper col-12">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="./data-list-rekap.php">Home</a>
                                    </li>
                                    <li class="breadcrumb-item active">Details
                                    </li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content-body">
                <!-- app ecommerce details start -->
                <section class="app-ecommerce-details">
                <div class="table-primary">
                        <table class="table data-list-view">
                            <thead>
                                <tr>
                                    <th></th>
                                    
                                    <th>Nama</th>
                                    <th>NIP</th>
                                    <th>Bukti Kegiatan</th>
                                    <th>Menilai</th>
                                    <th>Total Nilai</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php 
                               // Create database connection using config file
                                error_reporting(0);
                                include_once("../config.php");

                                // Fetch all users data from database
                                $result = mysqli_query($mysqli, "SELECT * FROM rekap_harian ORDER BY id_rekap ASC");

                                while($user_data = mysqli_fetch_array($result)) {  

                                ?>
                                <tr>
                                <td></td>
                                    
                                    <td><?php echo $user_data['nama']; ?></td>
                                    <td><?php echo $user_data['nip']; ?></td>
                                    <td><a href="view.php?id_rekap=<?php echo $user_data['id_rekap'];?>">Lihat File</a></td>
                                    <td>
                                    <div class="chip chip-warning" >
                                        <a class="chip-text" href="./nilai.php?id_rekap=<?php echo $user_data['id_rekap']; ?>">Nilai</a>
                                    </div>
                                    </td>
                                    <td><?php echo $user_data['total_nilai']; ?></td>
                                    <td><?php echo $user_data['status']; ?></td>
                                   <?php } ?>  
                            </tbody>
                        </table>
                    </div>
                    <div class="table table-bordered border-primary">
                        <table class="table data-list-view">
                            <thead>
                            <tr>
                                    <th></th>
                                    <th>No.</th>
                                    <th>Unsur</th>
                                    <th>Sub Unsur</th>
                                    <th>Butir Kegiatan</th>
                                    <th>Uraian Kegiatan</th>
                                    <th>Satuan Hasil</th>
                                    <th>Angka Kredit</th>
                                    <th>Volume Kegiatan</th>
                                    <th>Jumlah Angka Kredit</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php 
                               // Create database connection using config file
                                error_reporting(0);
                                include_once("../config.php");
                                $no = 1;
                                // Fetch all users data from database
                                $result = mysqli_query($mysqli, "SELECT * FROM rekap_harian ");

                                while($user_data = mysqli_fetch_array($result)) {  

                                ?>
                                <tr>
                                <td></td>
                                    <td><?php echo $no++;?></td>
                                    <td><?php echo $user_data['unsur']; ?></td>
                                    <td><?php echo $user_data['sub_unsur']; ?></td>
                                    <td><?php echo $user_data['butir_kegiatan']; ?></td>
                                    <td><?php echo $user_data['uraian_kegiatan']; ?></td>
                                    <td><?php echo $user_data['satuan_hasil']; ?></td>
                                    <td><?php echo $user_data['angka_kredit']; ?> </td>
                                    <td><?php echo $user_data['volume_kegiatan']; ?></td>
                                    <td><?php echo $user_data['jumlah_kredit']; ?></td>
                                </tr>
                                <?php } ?>
                                
                            </tbody>
                        </table>
                    </div>
                    <div class="modal fade text-left" id="kepo" tabindex="-1" role="dialog" aria-labelledby="myModalLabel33" aria-hidden="true">
                                                <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h4 class="modal-title" id="myModalLabel33">Ubah Nilai </h4>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <form name="update" method="post" action="">
                                                            <div class="modal-body">
                                                                <label>Angka Kredit </label>
                                                                <div class="input-group">
                                                                    <input type="number" class="touchspin"  name="angka_kredit" class="form-control" value="<?php echo $angka_kredit;?>">
                                                                </div>
                                                            </div>
                                                            <div class="modal-footer">
                                                            <input type="hidden"  name="id_rekap" value="<?php echo $_GET['id_rekap'];?>">
			                                                <input type="submit" class="btn btn-primary glow mb-1 mb-sm-0 mr-0 mr-sm-1" name="update" value="Update"></input>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                </section>
                <!-- app ecommerce details end -->
            </div>
        </div>
    </div>
    <!-- END: Content-->

    <div class="sidenav-overlay"></div>
    <div class="drag-target"></div>

    <!-- BEGIN: Footer-->
    <footer class="footer footer-static footer-light">
        <p class="clearfix blue-grey lighten-2 mb-0"><span class="float-md-left d-block d-md-inline-block mt-25">COPYRIGHT &copy; 2020<a class="text-bold-800 grey darken-2" target="_blank">Biro, Humas, dan Data</a>All rights Reserved</span><span class="float-md-right d-none d-md-block">Hand-crafted & Made with<i class="feather icon-heart pink"></i></span>
            <button class="btn btn-primary btn-icon scroll-top" type="button"><i class="feather icon-arrow-up"></i></button>
        </p>
    </footer>
    <!-- END: Footer-->


    <!-- BEGIN: Vendor JS-->
    <script src="../app-assets/vendors/js/vendors.min.js"></script>
    <!-- BEGIN Vendor JS-->

    <!-- BEGIN: Page Vendor JS-->
    <script src="../app-assets/vendors/js/forms/spinner/jquery.bootstrap-touchspin.js"></script>
    <script src="../app-assets/vendors/js/forms/spinner/jquery.bootstrap-touchspin.js"></script>
    <script src="../app-assets/vendors/js/extensions/swiper.min.js"></script>
    <script src="../app-assets/vendors/js/extensions/toastr.min.js"></script>
    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Theme JS-->
    <script src="../app-assets/js/core/app-menu.js"></script>
    <script src="../app-assets/js/core/app.js"></script>
    <script src="../app-assets/js/scripts/components.js"></script>
    <!-- END: Theme JS-->

    <!-- BEGIN: Page JS-->
    <script src="../app-assets/js/scripts/pages/app-ecommerce-details.js"></script>
    <script src="../app-assets/js/scripts/forms/number-input.js"></script>
    <script src="../app-assets/js/scripts/extensions/toastr.js"></script>
    <!-- END: Page JS-->

</body>
<!-- END: Body-->

</html>