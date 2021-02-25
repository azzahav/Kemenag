<?php
error_reporting(0);
include('../session_co.php');
session_start();
if( !isset($_SESSION['login'])){
    header('location:../auth-login.php');
}

?>
<?php
include "../config.php";

//pengecekan tipe harus pdf
$tipe_file = $_FILES['unggah_bukti']['type']; //mendapatkan mime type
if ($tipe_file == "application/pdf") //mengecek apakah file tersebu pdf atau bukan
{
 $unggah_bukti = trim($_FILES['unggah_bukti']['name']);
 $id_rekap = trim($_POST['id_rekap']);
 $nama = trim($_POST['nama']);
 $nip = trim($_POST['nip']);
 $unsur = trim($_POST['unsur']);
 $sub_unsur = trim($_POST['sub_unsur']);
 $butir_kegiatan = trim($_POST['butir_kegiatan']);
 $uraian_kegiatan = trim($_POST['uraian_kegiatan']);
 $volume_kegiatan = trim($_POST['volume_kegiatan']);
 $angka_kredit = trim($_POST['angka_kredit']);
 $satuan_hasil = trim($_POST['satuan_hasil']);
 $tanggal = trim($_POST['tanggal']);
 $jumlah_kredit = $volume_kegiatan*$angka_kredit;
 $total_nilai = $jumlah_kredit*$angka_kredit;

 $sql = "INSERT INTO rekap_harian (nama,nip,unsur,sub_unsur,butir_kegiatan,uraian_kegiatan,volume_kegiatan,angka_kredit,satuan_hasil,tanggal,jumlah_kredit,total_nilai) VALUES ('$nama','$nip','$unsur','$sub_unsur','$butir_kegiatan','$uraian_kegiatan','$volume_kegiatan','$angka_kredit','$satuan_hasil','$tanggal','$jumlah_kredit','$total_nilai')";
 mysqli_query($mysqli,$sql); //simpan data judul dahulu untuk mendapatkan id

 //dapatkan id terkahir
 $query = mysqli_query($mysqli,"SELECT id_rekap FROM rekap_harian ORDER BY id_rekap DESC LIMIT 1");
 $data  = mysqli_fetch_array($query);

 //mengganti nama pdf
 $nama_baru = "file_".$data['id_rekap'].".pdf"; //hasil contoh: file_1.pdf
 $file_temp = $_FILES['unggah_bukti']['tmp_name']; //data temp yang di upload
 $folder    = "../file"; //folder tujuan

 move_uploaded_file($file_temp, "$folder/$nama_baru"); //fungsi upload
 //update nama file di database
 mysqli_query($mysqli,"UPDATE rekap_harian SET unggah_bukti='$nama_baru' WHERE id_rekap='$data[id_rekap]' ");


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
    <title> Detail Rekap Kegiatan Harian</title>
    <link rel="apple-touch-icon" href="../app-assets/images/ico/apple-icon-120.png">
    <link rel="shortcut icon" type="image/x-icon" href="../app-assets/images/ico/kemenag.png">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600" rel="stylesheet">

    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="../app-assets/vendors/css/vendors.min.css">
    <link rel="stylesheet" type="text/css" href="../app-assets/vendors/css/extensions/toastr.css">
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
                <div class="content-header-left col-md-9 col-12 mb-2">
                    <div class="row breadcrumbs-top">
                        <div class="col-12">
                            <h2 class="content-header-title float-left mb-0">Statistisi</h2>
                            <div class="breadcrumb-wrapper col-12">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="./app-user-view.php">Home</a>
                                    </li>
                                    <li class="breadcrumb-item"><a href="./rekap-kegiatan-harian.php">Statistisi</a>
                                    </li>
                                    <li class="breadcrumb-item active">Detail Rekap Kegiatan Harian Statistisi
                                    </li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content-body">
                <!-- page users view start -->
                <section class="page-users-view">
                    <div class="row">
                        <!-- account start -->
                        <div class="col-12" action="detail-rekap.php" method="post"  name="form">
                            <div class="card">
                                <div class="card-header">
                                    <div class="card-title">Detail Rekap Kegiatan</div>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                    <div class="table-responsive">
                                        <table class="table">
                                            <thead>
                                                <tr class="table-primary">
                                                    <th>Unsur</th>
                                                    <th>Sub Unsur</th>
                                                    <th>Butir Kegiatan</th>
                                                    <th>Uraian Kegiatan</th>
                                                    <th>Volume Kegiatan</th>
                                                    <th>Angka Kredit</th>
                                                    <th>Detail Kegiatan</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            
                                    <?php 
                                    $user_check = $_SESSION['login'];
                    
                                    $ses_sql = mysqli_query($mysqli,"SELECT t1.id_rekap, t1.butir_kegiatan, t1.uraian_kegiatan, t1.volume_kegiatan, t1.angka_kredit, t2.unsur, t3.sub_unsur 
                                    FROM rekap_harian as t1 LEFT JOIN data_unsur as t2 ON t1.unsur=t2.id_unsur LEFT JOIN data_subunsur as t3 on t1.sub_unsur=t3.id_subunsur WHERE nip = '$user_check'");
                                    
                                    while ($user_data = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC)){
                                    
                                        // collect value of input field
                                       
                                        $nama = $user_data['nama'];
                                        $nip = $user_data['nip'];
                                        $unsur = $user_data['unsur'];
                                        $sub_unsur = $user_data['sub_unsur'];
                                        $butir_kegiatan = $user_data['butir_kegiatan'];
                                        $uraian_kegiatan = $user_data['uraian_kegiatan'];
                                        $volume_kegiatan = $user_data['volume_kegiatan'];
                                        $angka_kredit = $user_data['angka_kredit'];
                                        $unggah_bukti = $user_data['unggah_bukti'];
                                        $tanggal = $user_data['tanggal'];
                                    ?>
                                            <tr>
                                                <td><?php echo $unsur; ?></td>
                                                <td><?php echo $sub_unsur; ?></td>
                                                <td><?php echo $butir_kegiatan; ?></td>
                                                <td><?php echo $uraian_kegiatan; ?></td>
                                                <td><?php echo $volume_kegiatan; ?></td>
                                                <td><?php echo $angka_kredit; ?></td>
                                                <td><a  class="btn btn-icon btn-primary" data-toggle="tooltip" data-placement="top" title="Lihat File PDF" href="view.php?id_rekap=<?php echo $user_data['id_rekap'];?>">Lihat File</a></td>
                                                <td> 
                                                    <a href="./edit-rekap-kegiatan.php?id_rekap=<?php echo $user_data['id_rekap']; ?>" data-toggle="tooltip" data-placement="top" title="Edit" class="btn btn-icon btn-primary"><i class="feather icon-edit-1"></i></a>
                                                    <a href="./delete-rekap.php?id_rekap=<?php echo $user_data['id_rekap']; ?>" data-toggle="tooltip" data-placement="top" title="Delete" class="btn btn-icon btn-danger" id="confirm-color"><i class="feather icon-delete"></i></a>
                                                    </td>
                                            </tr>
                                        </div>
                                            <?php
                                        }
                                    
                                ?>
                                </tbody>
                                </table>
                                                                
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- account end -->
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
    <footer class="footer fixed-bottom navbar-shadow footer-light">
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
    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Theme JS-->
    <script src="../app-assets/js/core/app-menu.js"></script>
    <script src="../app-assets/js/core/app.js"></script>
    <script src="../app-assets/js/scripts/components.js"></script>
    <!-- END: Theme JS-->

    <!-- BEGIN: Page JS-->
    <script src="../app-assets/js/scripts/pages/app-user.js"></script>
    <script src="../app-assets/js/scripts/extensions/toastr.js"></script>
    <!-- END: Page JS-->

</body>
<!-- END: Body-->

</html>