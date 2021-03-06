<?php
error_reporting(0);
// include database connection file
include_once("../config.php");
session_start();
if( !isset($_SESSION['login'])){
    header('location:../auth-login.php');
}
// Check if form is submitted for user update, then redirect to homepage after update
if(isset($_POST['update']))
{   
    $id_pimpinan = isset($_POST['id_pimpinan']) ? $_POST['id_pimpinan'] : '';
    $nip = isset($_POST['nip']) ? $_POST['nip'] : '';
    $nama = isset($_POST['nama']) ? $_POST['nama'] : '';
    $pangkat_golongan = isset($_POST['pangkat_golongan']) ? $_POST['pangkat_golongan'] : '';
    $jabatan = isset($_POST['jabatan']) ? $_POST['jabatan'] : '';
    $unit_kerja = isset($_POST['unit_kerja']) ? $_POST['unit_kerja'] : '';

    // update user data
    $result = mysqli_query($mysqli, "UPDATE pimpinan SET nip='$nip',nama='$nama',pangkat_golongan='$pangkat_golongan',jabatan='$jabatan',unit_kerja='$unit_kerja' WHERE id_pimpinan LIKE '%".$id_pimpinan."%'");

    // Redirect to homepage to display updated user in list
    header("Location: ./pimpinan.php");
}
?>
<?php
// Display selected user data based on id
// Getting id from url
$id_pimpinan = isset($_GET['id_pimpinan']) ? $_GET['id_pimpinan'] : null;

// Fetech user data based on id

$result = mysqli_query($mysqli, "SELECT * FROM pimpinan WHERE id_pimpinan LIKE '%".$id_pimpinan."%'");

while($user_data = mysqli_fetch_array($result))
{
    $id_pimpinan =$user_data ['id_pimpinan'];
    $nip = $user_data ['nip'];
    $nama = $user_data ['nama'];
    $pangkat_golongan=$user_data ['pangkat_golongan'];
    $jabatan=$user_data ['jabatan'];
    $unit_kerja=$user_data ['unit_kerja'];
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
    <title>Edit Kelola Pimpinan</title>
    <link rel="apple-touch-icon" href="../app-assets/images/ico/apple-icon-120.png">
    <link rel="shortcut icon" type="image/x-icon" href="../app-assets/images/ico/kemenag.png">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600" rel="stylesheet">

    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="../app-assets/vendors/css/vendors.min.css">
    <link rel="stylesheet" type="text/css" href="../app-assets/vendors/css/tables/datatable/datatables.min.css">
    <link rel="stylesheet" type="text/css" href="../app-assets/vendors/css/file-uploaders/dropzone.min.css">
    <link rel="stylesheet" type="text/css" href="../app-assets/vendors/css/tables/datatable/extensions/dataTables.checkboxes.css">
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
    <link rel="stylesheet" type="text/css" href="../app-assets/css/plugins/file-uploaders/dropzone.css">
    <link rel="stylesheet" type="text/css" href="../app-assets/css/pages/data-list-view.css">
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
                            <li class="nav-item d-none d-lg-block"><a class="nav-link bookmark-star"><i class="ficon feather icon-star warning"></i></a>
                                <div class="bookmark-input search-input">
                                    <div class="bookmark-input-icon"><i class="feather icon-search primary"></i></div>
                                    <input class="form-control input" type="text" placeholder="Explore Vuexy..." tabindex="0" data-search="template-list">
                                    <ul class="search-list search-list-bookmark"></ul>
                                </div>
                                <!-- select.bookmark-select-->
                                <!--   option Chat-->
                                <!--   option email-->
                                <!--   option todo-->
                                <!--   option Calendar-->
                            </li>
                        </ul>
                    </div>
                    <li class="dropdown dropdown-user nav-item ">      				
                        <a class="dropdown-toggle nav-link dropdown-user-link section_userinfo" href="#" data-toggle="dropdown">
                            <span class="avatar avatar-online">
                            <img src="https://sso.undip.ac.id/assets/app/images/user.png" style="max-width: 50px;" alt="foto"><i></i></span>
                            <span class="user-name" style="margin-bottom: 1rem;" >  <?php echo $login_session; ?></span></a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a class="dropdown-item menu_changepass" href="#"><i class="ft-unlock"></i> Ganti Password</a>
                                    <a class="dropdown-item menu_logout" href="../logout.php" onclick="return confirm('Yakin Mau Logout??')"><i class="ft-power"></i> Logout</a>
                                </div>
                                                
                    </li>
                </div>
            </div>
        </div>
    </nav>
    <ul class="main-search-list-defaultlist-other-list d-none">
        <li class="auto-suggestion d-flex align-items-center justify-content-between cursor-pointer"><a class="d-flex align-items-center justify-content-between w-100 py-50">
                <div class="d-flex justify-content-start"><span class="mr-75 feather icon-alert-circle"></span><span>No results found.</span></div>
            </a></li>
    </ul>
    <!-- END: Header-->


    <!-- BEGIN: Main Menu-->
    <div class="main-menu menu-fixed menu-dark menu-accordion menu-shadow" data-scroll-to-active="true">
        <div class="navbar-header">
            <ul class="nav navbar-nav flex-row">
                <li class="nav-item mr-auto"><a class="navbar-brand" href="../html/ltr/vertical-menu-template-semi-dark/index.html">
                <div class="logo" href="../app-assets/images/ico/kemenag.png"></div>
                        <h2 class="brand-text mb-0">DUPAK ONLINE</h2>
                    </a></li>
                <li class="nav-item nav-toggle"><a class="nav-link modern-nav-toggle pr-0" data-toggle="collapse"><i class="feather icon-x d-block d-xl-none font-medium-4 primary toggle-icon"></i><i class="toggle-icon feather icon-disc font-medium-4 d-none d-xl-block collapse-toggle-icon primary" data-ticon="icon-disc"></i></a></li>
            </ul>
        </div>
        <div class="shadow-bottom"></div>
        <div class="main-menu-content">
            <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
                <li class=" nav-item"><a href="index.html"><i class="feather icon-home"></i><span class="menu-title" data-i18n="Dashboard">Admin</span><span class="badge badge badge-warning badge-pill float-right mr-2">2</span></a>
                    <ul class="menu-content">
                        <li class="active"><a href="./pengguna.php"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="Analytics">Kelola Pengguna</span></a>
                        </li>
                        <li><a href="./pimpinan.php"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="eCommerce">Kelola Pimpinan</span></a>
                        </li>
                    </ul>
                </li>

        </div>
    </div>
    <!-- END: Main Menu-->


    <!-- EDIT Content -->
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
                                        <a class="nav-link d-flex align-items-center" id="account-tab"  aria-controls="account">
                                            <i class="feather icon-user mr-25"></i><span class="d-none d-sm-block">Edit Data Pimpinan</span>
                                        </a>
                                    </li>
                                    </ul>
    <form name="update" method="post" action="./pimpinan-edit.php">
        <div class="row">
        <div class="col-12 col-sm-6">
        <div class="form-group">
        <div class="controls">
        <label>Nama</label>
    <input type="text" class="form-control" name="nama" value="<?php echo $nama;?>">
    </div>
    </div>
        <div class="form-group">
        <div class="controls">
        <label>NIP</label>
    <input type="text" class="form-control" name="nip" value="<?php echo $nip;?>">
    </div>
    </div>
        <div class="form-group">
        <div class="controls">
        <label>Pangkat/Golongan Ruang</label>
    <input type="text" class="form-control" name="pangkat_golongan" value="<?php echo $pangkat_golongan;?>">
    </div>
    </div>
    </div>

    <div class="col-12 col-sm-6">
    <div class="form-group">
        <div class="controls">
        <label>Jabatan</label>
    <input type="text" class="form-control" name="jabatan" value="<?php echo $jabatan;?>">
    </div>
    </div>
    <div class="form-group">
    <div class="controls">
        <label>Unit Kerja</label>
    <input type="text" class="form-control" name="unit_kerja" value="<?php echo $unit_kerja;?>">
    </div>
    </div>
    </div>
   
    <div class="col-12 d-flex flex-sm-row flex-column justify-content-end mt-1">
        <input type="hidden"  name="id_pimpinan" value="<?php echo $_GET['id_pimpinan'];?>">
        <input type="submit" class="btn btn-primary glow mb-1 mb-sm-0 mr-0 mr-sm-1" name="update" value="Update"></input>
        <button type="reset" class="btn btn-outline-danger" href="pimpinan.php">Cancel</button>
    </div>
    </div>
    </form>
    </div>
   </section> 
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
    <script src="../app-assets/vendors/js/extensions/dropzone.min.js"></script>
    <script src="../app-assets/vendors/js/tables/datatable/datatables.min.js"></script>
    <script src="../app-assets/vendors/js/tables/datatable/datatables.buttons.min.js"></script>
    <script src="../app-assets/vendors/js/tables/datatable/datatables.bootstrap4.min.js"></script>
    <script src="../app-assets/vendors/js/tables/datatable/buttons.bootstrap.min.js"></script>
    <script src="../app-assets/vendors/js/tables/datatable/dataTables.select.min.js"></script>
    <script src="../app-assets/vendors/js/tables/datatable/datatables.checkboxes.min.js"></script>
    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Theme JS-->
    <script src="../app-assets/js/core/app-menu.js"></script>
    <script src="../app-assets/js/core/app.js"></script>
    <script src="../app-assets/js/scripts/components.js"></script>
    <!-- END: Theme JS-->

    <!-- BEGIN: Page JS-->
    <script src="../app-assets/js/scripts/ui/data-list-view.js"></script>
    <!-- END: Page JS-->

</body>
<!-- END: Body-->

</html>