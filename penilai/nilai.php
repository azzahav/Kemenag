<?php
    error_reporting(0);
   include('../session_co.php');
    if( !isset($_SESSION['login'])){
        header('location:../auth-login.php');
    }
    if(isset($_POST['update']))
{   
    $nip = isset($_POST['nip']) ? $_POST['nip'] : '';
    $id_rekap = isset($_POST['id_rekap']) ? $_POST['id_rekap'] : '';
    $angka_kredit = isset($_POST['angka_kredit']) ? $_POST['angka_kredit'] : '';
    $volume_kegiatan = isset($_POST['volume_kegiatan']) ? $_POST['volume_kegiatan'] : '';
    $status = isset($_POST['status']) ? $_POST['status'] : '';
    $jumlah_kredit = $volume_kegiatan*$angka_kredit;
    $total_nilai = $jumlah_kredit*$angka_kredit;

    // update user data
    $result = mysqli_query($mysqli, "UPDATE rekap_harian SET angka_kredit='$angka_kredit',  volume_kegiatan='$volume_kegiatan', status='$status', jumlah_kredit='$jumlah_kredit', total_nilai='$total_nilai' WHERE id_rekap LIKE '%".$id_rekap."%'");

    // Redirect to homepage to display updated user in list
    header("Location: ./data-list-rekap.php");
}
?>
<?php
// Display selected user data based on id
// Getting id from url
$id_rekap = isset($_GET['id_rekap']) ? $_GET['id_rekap'] : null;

// Fetech user data based on id

$result = mysqli_query($mysqli, "SELECT t1.butir_kegiatan, t1.uraian_kegiatan, t1.volume_kegiatan, t1.angka_kredit, t1.satuan_hasil, t2.unsur, t3.sub_unsur 
FROM rekap_harian as t1 LEFT JOIN data_unsur as t2 ON t1.unsur=t2.id_unsur LEFT JOIN data_subunsur as t3 on t1.sub_unsur=t3.id_subunsur WHERE id_rekap LIKE '%".$id_rekap."%'
");

while($user_data = mysqli_fetch_array($result))
{
    $nip =$user_data ['nip'];
    $id_rekap =$user_data ['id_rekap'];
    $angka_kredit = $user_data ['angka_kredit'];
    $status = $user_data ['status'];
    $unsur = $user_data ['unsur'];
    $sub_unsur = $user_data ['sub_unsur'];
    $butir_kegiatan = $user_data ['butir_kegiatan'];
    $uraian_kegiatan = $user_data ['uraian_kegiatan'];
    $satuan_hasil = $user_data ['satuan_hasil'];
    $volume_kegiatan = $user_data ['volume_kegiatan'];
    $jumlah_kredit = $volume_kegiatan*$angka_kredit;
    $total_nilai = $jumlah_kredit*$angka_kredit;
    
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
    <title>Nilai</title>
    <link rel="apple-touch-icon" href="../app-assets/images/ico/apple-icon-120.png">
    <link rel="shortcut icon" type="image/x-icon" href="../app-assets/images/ico/kemenag.png">
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
                <li class=" nav-item"><a href="./app-user-view.php"><i class="feather icon-home"></i><span class="menu-title" data-i18n="Dashboard">Profil Penilai</span></a>
                <ul class="menu-content">
                     <li><a href="app-user-view.php"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="View">View Profil</span></a>
                        </li>
                        <li><a href="./app-user-edit.php?nip=<?php echo $login_session2; ?>"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="View">Edit Profil</span></a>
                        </li>
                    </ul>
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
            </div>
            <div class="content-body">
            <div class="alert alert-primary">
                    <i class="feather icon-info mr-1"></i> Informasi Lebih Lanjut
                </div>
                <!-- users edit start -->
                <section id="content-types">
                <div class="row">
                <div class="col-xl-6 col-md-6 col-sm-12">
                            <div class="card collapse-icon accordion-icon-rotate">
                                <div class="card-body border-primary">
                                    <div class="accordion" id="accordionExample" data-toggle-hover="true">
                                        <div class="collapse-margin">
                                            <div class="card-header" id="headingOne" data-toggle="collapse" role="button" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                                <span class="lead collapse-title collapsed text-primary">
                                                   Unsur Kegiatan
                                                </span>
                                            </div>

                                            <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                                                <div class="card-body">
                                                <?php echo $unsur; ?>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="collapse-margin">
                                            <div class="card-header" id="headingTwo" data-toggle="collapse" role="button" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                <span class="lead collapse-title collapsed text-primary">
                                                   Sub Unsur Kegiatan
                                                </span>
                                            </div>
                                            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                                                <div class="card-body">
                                                <?php echo $sub_unsur; ?>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="collapse-margin">
                                            <div class="card-header" id="headingThree" data-toggle="collapse" role="button" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                                <span class="lead collapse-title text-primary">
                                                   Butir Kegiatan
                                                </span>
                                            </div>
                                            <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                                                <div class="card-body">
                                                <?php echo $butir_kegiatan; ?>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="collapse-margin">
                                            <div class="card-header" id="headingFour" data-toggle="collapse" role="button" data-target="#collapseFour" aria-expanded="true" aria-controls="collapseFour">
                                                <span class="lead collapse-title text-primary">
                                                   Uraian Kegiatan
                                                </span>
                                            </div>
                                            <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionExample">
                                                <div class="card-body">
                                                <?php echo $uraian_kegiatan; ?>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="collapse-margin">
                                            <div class="card-header" id="headingThree" data-toggle="collapse" role="button" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                                <span class="lead collapse-title text-primary">
                                                   Bukti Kegiatan
                                                </span>
                                            </div>
                                            <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                                                <div class="card-body">
                                                <a  class="" data-toggle="tooltip" data-placement="top" title="Lihat File PDF" href="view.php?id_rekap=<?php echo $user_data['id_rekap'];?>">Lihat File</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="collapse-margin">
                                            <div class="card-header" id="headingFive" data-toggle="collapse" role="button" data-target="#collapseFour" aria-expanded="true" aria-controls="collapseFour">
                                                <span class="lead collapse-title text-primary">
                                                  Angka Kredit
                                                </span>
                                            </div>
                                            <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionExample">
                                                <div class="card-body">
                                                <?php echo $angka_kredit; ?>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="collapse-margin">
                                            <div class="card-header" id="headingsix" data-toggle="collapse" role="button" data-target="#collapseFour" aria-expanded="true" aria-controls="collapseFour">
                                                <span class="lead collapse-title text-primary">
                                                  Volume Kegiatan
                                                </span>
                                            </div>
                                            <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionExample">
                                                <div class="card-body">
                                                <?php echo $volume_kegiatan; ?>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="collapse-margin">
                                            <div class="card-header" id="headingseven" data-toggle="collapse" role="button" data-target="#collapseFour" aria-expanded="true" aria-controls="collapseFour">
                                                <span class="lead collapse-title text-primary">
                                                  Total Nilai Kegiatan
                                                </span>
                                            </div>
                                            <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionExample">
                                                <div class="card-body">
                                                <?php echo $total_nilai; ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    </div>
                        <div class="col-xl-6 col-md-6 col-sm-12">
                            <div class="card">
                                <div class="card-content border-primary">
                                    <div class="card-body">
                                        <h4 class="card-title">Feedback Form</h4>
                                    </div>
                                    <div class="card-body">
                                        <form name="update" method="post" action="">
                                            <div class="form-body">
                                                <div class="form-group">
                                                <div >
                                                    <span>Angka Kredit</span>
                                                </div>
                                                    <input class="form-control" name="angka_kredit" value="<?php echo $angka_kredit;?>">
                                                </div>

                                                <div class="form-group">
                                                <div >
                                                    <span>Volume Kegiatan</span>
                                                </div>
                                                    <input class="form-control" name="volume_kegiatan" value="<?php echo $volume_kegiatan;?>">
                                                </div>

                                                <div class="form-group">
                                                <div >
                                                    <span>Status Nilai</span>
                                                </div>
                                                    <select class="form-control" name="status" required>
                                        <option value="">Please Select</option>
                                                <?php
                                                    $query = mysqli_query($mysqli, "SELECT * FROM tabel_status ORDER BY status");
                                                    while ($row = mysqli_fetch_array($query)) { ?>
 
                                                    <option value="<?php echo $row['id_status']; ?>">
                                                        <?php echo $row['status']; ?>
                                                    </option>
 
                                                <?php } ?>
                                        </select>
                                                </div>
                                            </div>

                                            <div class="form-actions">
                                            <input type="hidden"  name="id_rekap" value="<?php echo $_GET['id_rekap'];?>">
                                            <input type="submit" class="btn btn-primary glow mb-1 mb-sm-0 mr-0 mr-sm-1" name="update" value="Update"></input>
                                            <a type="reset" class="btn btn-danger" href="data-list-rekap.php">Cancel</a>
                                            </div>
                                        </form>
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
