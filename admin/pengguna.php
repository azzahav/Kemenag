    <?php 
    error_reporting(0);
    include('../session_co.php');
    session_start();
    if( !isset($_SESSION['login'])){
    header('location:../auth-login.php');
    }
        // Check If form submitted, insert form data into users table.
    if(isset($_POST['Submit'])) {
        $nama = $_POST['nama'];
        $nip = $_POST['nip'];
        $no_seri_kapreg = $_POST['no_seri_kapreg'];
        $tempat_tanggal_lahir = $_POST['tempat_tanggal_lahir'];
        $jenis_kelamin = $_POST['jenis_kelamin'];
        $pendidikan = $_POST['pendidikan'];
        $pangkat = $_POST['pangkat'];
        $jabatan = $_POST['jabatan'];
        $masa_kerja = $_POST['pendidikan'];
        $unit_kerja = $_POST['unit_kerja'];
        $role = $_POST['role'];
        $email = $_POST['email'];
        $alamat = $_POST['alamat'];


        // include database connection file
        include_once("../config.php");

        // Insert user data into table
        $result = mysqli_query($mysqli, "INSERT INTO pengguna(nama,nip,no_seri_kapreg,tempat_tanggal_lahir,jenis_kelamin,pendidikan,pangkat,jabatan,masa_kerja,unit_kerja,role,email,alamat) VALUES('$nama','$nip','$no_seri_kapreg','$tempat_tanggal_lahir','$jenis_kelamin','$pendidikan','$pangkat','$jabatan','$masa_kerja','$unit_kerja','$role','$email','$alamat')");

        // Show message when user added
       
        header("location: pengguna.php",  true,  301 );  exit;
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
    <title>Kelola Pengguna</title>
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
                            <li class=" nav-item"><a href="./app-user-view.php"><i class="feather icon-home"></i><span class="menu-title" data-i18n="Dashboard">Profil Admin</span></a>
                            <ul class="menu-content">
                                <li><a href="app-user-view.php"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="View">View Profil</span></a>
                                </li>
                                <li><a href="./app-user-edit.php?nip=<?php echo $login_session2; ?>"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="View">Edit Profil</span></a>
                                </li>
                            </ul>
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
                <div class="content-header-left col-md-9 col-12 mb-2">
                    <div class="row breadcrumbs-top">
                        <div class="col-12">
                            <h2 class="content-header-title float-left mb-0">Admin</h2>
                            <div class="breadcrumb-wrapper col-12">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="app-user-view.php">Home</a>
                                    </li>
                                    <li class="breadcrumb-item active">Data Pengguna
                                    </li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>

            <div class="content-body">
                <!-- Data list view starts -->
                <section id="data-list-view" class="data-list-view-header">
                    <!-- DataTable starts -->
                    <div class="table-responsive">
                        <table class="table data-list-view">
                            <thead>
                                <tr>
                                    
                                    <th>No</th>
                                    <th>NIP</th>
                                    <th>Nama</th>
                                    <th>No Seri</th>
                                    <th>Pangkat</th>
                                    <th>Jabatan</th>
                                    <th>Unit Kerja</th>
                                    <th>Role</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php 
                               // Create database connection using config file
                                
                                include_once("../config.php");

                                // Fetch all users data from database
                                $result = mysqli_query($mysqli, "SELECT * FROM pengguna ORDER BY id_pengguna ASC");

                                while($user_data = mysqli_fetch_array($result)) {  

                                ?>
                                <tr>
                                     <td></td>
                                    <td><?php echo $user_data['nip']; ?></td>
                                    <td><?php echo $user_data['nama']; ?></td>
                                    <td><?php echo $user_data['no_seri_kapreg']; ?></td>
                                    <td><?php echo $user_data['pangkat']; ?></td>
                                    <td><?php echo $user_data['jabatan']; ?></td>
                                    <td><?php echo $user_data['unit_kerja']; ?></td>
                                    <td><?php echo $user_data['role']; ?></td>
                                    <td class="product-action">

                                        <a href="./pengguna-edit.php?id_pengguna=<?php echo $user_data['id_pengguna']; ?>" class="feather icon-edit"></a>
                                        <a class="feather icon-trash" href="delete.php?id_pengguna=<?php echo $user_data['id_pengguna']; ?>"></a>
                                        
                                    </td>
                                </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                    <!-- DataTable ends -->
                                        
                <!-- Data list view end -->
                        
                    <!-- add new sidebar starts -->
                    <div class="add-new-data-sidebar">
                        <div class="overlay-bg"></div>
                        <div class="add-new-data">
                        
                            <div class="div mt-2 px-2 d-flex new-data-title justify-content-between">
                                <div>
                                    <h4 class="text-uppercase">ADD DATA</h4>
                                </div>
                                <div class="hide-data-sidebar">
                                    <i class="feather icon-x"></i>
                                </div>
                            </div>
                            <div class="data-items pb-3">
                                <div class="data-fields px-2 mt-3">
                                    <div class="row" >
                                    <form  action=""  method="post" class="col-sm-12 data-field-col" name="form4" >
                                        <div class="col-sm-12 data-field-col">
                                            <label for="data-name">Nama</label>
                                            <input type="text" class="form-control" name="nama" placeholder="Muhammad Iskandar" required>
                                        </div>
                                        <div class="col-sm-12 data-field-col">
                                            <label for="data-name">NIP</label>
                                            <input onkeypress="validate(event)" id="nip" min="0" maxlength="19" type="number" class="form-control" name="nip" placeholder="Ex : 432523543634" autofocus="">
                                        </div>
                                        <div class="col-sm-12 data-field-col">
                                            <label for="data-name">No Seri Kartu Pegawai</label>
                                            <input type="text" class="form-control" name="no_seri_kapreg" placeholder="614/KEP/KARPEG/2020" required>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <div class="col-sm-12 data-field-col">
                                                    <label for="inputPlace">Tempat Lahir</label>
                                                    <input id="inputPlace" type="text" class="form-control" placeholder="Mojokerto" name="tempat_tanggal_lahir">
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="col-sm-12 data-field-col">
                                                    <label for="inputDate">Tanggal Lahir</label>
                                                    <input id="inputDate" type="date" class="form-control"  name="tgl_lahir">
                                                </div>
                                             </div>
                                        </div>
                                        <div class="col-sm-12 data-field-col">
                                            <label for="address">Alamat</label>
                                            <input id="address" type="text" placeholder="Ex : Jl Empu tantular No.45 Sooko Mojokerto" class="form-control"  name="alamat">
                                        </div>

                                        <div class="col-sm-12 data-field-col">
                                            <label for="email">Email</label>
                                            <input id="email" type="email" placeholder="Ex : didik@kemenag.go.id" class="form-control" name="email">
                                        </div>
                                        <div class="col-sm-12 data-field-col">
                                            <label for="data-category"> Jenis Kelamin </label>
                                            <select class="form-control" id="data-category" name="jenis_kelamin">
                                                <option value="Laki-Laki">Laki-Laki</option>
                                                <option value="Perempuan">Perempuan</option>
                                            </select>
                                        </div>
                                        <div class="col-sm-12 data-field-col">
                                            <label for="data-name">Pendidikan</label>
                                            <input type="text" class="form-control" name="pendidikan" placeholder="S1 - Matematika" required>
                                        </div>
                                        <div class="col-sm-12 data-field-col">
                                            <label for="data-name">Pangkat</label>
                                            <input type="text" class="form-control" name="pangkat" placeholder="Penata / III/c / 1 Oktober 2019" required>
                                        </div>
                                        <div class="col-sm-12 data-field-col">
                                            <label for="data-status">Masa Kerja</label>
                                            <select class="form-control" id="data-status" name="masa_kerja">
                                                <option value="Lama">Lama</option>
                                                <option value="Baru">Baru</option>
                                            </select>
                                        </div>
                                        <div class="col-sm-12 data-field-col">
                                            <label for="data-price">Unit Kerja</label>
                                            <input type="text" class="form-control" name="unit_kerja" placeholder="Biro Humas Data dan Informasi">
                                        </div>
                                        <div class="col-sm-12 data-field-col">
                                                    <label for="pkPosition">Jabatan Statistisi</label>
                                                    <select class="custom-select form-control" id="location1" name="jabatan">
                                                                <option value="Statistisi Muda">Statistisi Muda</option>
                                                                <option value="Statistisi Madya">Statistisi Madya</option>
                                                            </select>
                                                            </div>

                                                <div class="col-sm-12 data-field-col">
                                                    <label for="pkPosition">Status</label>
                                                    <select class="custom-select form-control" id="location1" name="role">
                                                        <option value="Statistisi">Statistisi</option>
                                                        <option value="Penilai">Penilai</option>
                                                        <option value="Admin">Admin</option>
                                                    </select>
                                                </div>

                                                <div class="col-sm-12 data-field-col">
                                                    <label for="password">Password</label>
                                                    <input id="password" type="password" class="form-control" name="password">
                                                            </div>
                                        <div class="add-data-footer d-flex justify-content-around px-3 mt-2">
                                            <div class="add-data-btn">
                                            <button type="submit" name="Submit" value="Add"  class="btn btn-primary float-right btn-inline mb-50">Register</a>
                                            </div>
                                        </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
                    <!-- add new sidebar ends -->
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