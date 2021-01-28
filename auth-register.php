<?php 
    error_reporting(0);
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


        // include database connection file
        include_once("config.php");

        // Insert user data into table
        $result = mysqli_query($mysqli, "INSERT INTO pengguna(nama,nip,no_seri_kapreg,tempat_tanggal_lahir,jenis_kelamin,pendidikan,pangkat,jabatan,masa_kerja,unit_kerja,role) VALUES('$nama','$nip','$no_seri_kapreg','$tempat_tanggal_lahir','$jenis_kelamin','$pendidikan','$pangkat','$jabatan','$masa_kerja','$unit_kerja','$role')");

        // Show message when user added
       
        header("location: auth-login.php",  true,  301 );  exit;
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
    <title>Register Page</title>
    <link rel="apple-touch-icon" href="./app-assets/images/ico/apple-icon-120.png">
    <link rel="shortcut icon" type="image/x-icon" href="./app-assets/images/ico/kemenag.png">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600" rel="stylesheet">

    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="./app-assets/vendors/css/vendors.min.css">
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
    <!-- END: Page CSS-->

    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="./assets/css/style.css">
    <!-- END: Custom CSS-->

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
                    <div class="col-xl-90 col-100 d-flex justify-content-center">
                        <div class="card bg-authentication rounded-0 mb-0">
                            <div class="row m-0">
                                <div class="col-lg-90 col-100 p-0">
                                    <div class="card rounded-0 mb-0 p-2">
                                    
                                        <div class="card-header pt-50 pb-1">
                                            <div class="card-title">
                                                <h2 class="mb-0">Create Account</h2>
                                            </div>
                                        </div>
                                        <p class="px-2">Fill the below form to create a new account.</p>
                                        <div class="card-content">
                                            <div class="card-body pt-0">
                                                <form  action="auth-register.php"  method="post"  name="form3">
                                                <div class="col-100">
                                                    <label for="inputName">Nama</label>
                                                    </div>
                                                    <div class="form-label-group">
                                                        <input type="text" id="inputName" class="form-control" name="nama" placeholder="Nama : ex Budi Haryanto" required>
                                                        <label for="inputName">Nama</label>
                                                    </div>
                                                    <div class="col-100">
                                                    <label for="inputName">NIP</label>
                                                    </div>
                                                    <div class="form-label-group">
                                                        <input type="angka" id="inputName" class="form-control" name="nip" placeholder="NIP : ex 1923781234578" required>
                                                        <label for="inputName">NIP</label>
                                                    </div>
                                                    <div class="col-100">
                                                    <label for="inputName">No Seri Kapreg</label>
                                                    </div>
                                                    <div class="form-label-group">
                                                        <input type="angka" id="inputName" class="form-control" name="no_seri_kapreg" placeholder="No Seri Kapreg : ex 614/KEP/KARPEG/2010" required>
                                                        <label for="inputName">No Seri Kapreg</label>
                                                    </div>
                                                    <div class="col-100">
                                                    <label for="inputName">Tempat, Tanggal Lahir</label>
                                                    </div>
                                                    <div class="form-label-group">
                                                        <input type="text" id="inputName" class="form-control" name="tempat_tanggal_lahir" placeholder="ex Sukabumi, 08 Maret 1972" required>
                                                        <label for="inputName">Tempat, Tanggal Lahir</label>
                                                    </div>
                                                    <div class="col-100">
                                                    <label for="inputName">Jenis Kelamin</label>
                                                        <div class="form-group row">  
                                                            <div class="col-md-8">
                                                            <select class="custom-select form-control" id="location1" name="jenis_kelamin">
                                                                <option value="Laki-Laki">Laki-Laki</option>
                                                                <option value="Perempuan">Perempuan</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    </div>
                                                    <div class="col-100">
                                                    <label for="inputName">Pendidikan</label>
                                                    </div>
                                                    <div class="form-label-group">
                                                        <input type="text" id="inputName" class="form-control" name="pendidikan" placeholder="ex : S1 Statistika" required>
                                                        <label for="inputName">Pendidikan</label>
                                                    </div>
                                                    <div class="col-100">
                                                    <label for="inputName">Pangkat</label>
                                                    </div>
                                                    <div class="form-label-group">
                                                        <input type="text" id="inputName" class="form-control" name="pangkat" placeholder="ex : Penata / III/c / 1 Oktober 2016" required>
                                                        <label for="inputName">Pangkat</label>
                                                    </div>
                                                    <div class="col-100">
                                                    <label for="inputName">Jabatan</label>
                                                        <div class="form-group row">  
                                                            <div class="col-md-8">
                                                            <select class="custom-select form-control" id="location1" name="jabatan">
                                                                <option value="Muda">Muda</option>
                                                                <option value="madya">madya</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    </div>
                                                    <div class="col-100">
                                                    <label for="inputName">Masa Kerja</label>
                                                        <div class="form-group row">  
                                                            <div class="col-md-8">
                                                            <select class="custom-select form-control" id="location1" name="masa_kerja">
                                                                <option value="Lama">Lama</option>
                                                                <option value="Baru">Baru</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    </div>
                                                    <div class="col-100">
                                                    <label for="inputName">Unit Kerja</label>
                                                    </div>
                                                    <div class="form-label-group">
                                                        <input type="text" id="inputName" class="form-control" name="unit_kerja" placeholder="ex : Biro Humas Data dan Informasi" required>
                                                        <label for="inputName">Unit Kerja</label>
                                                    </div>
                                                    <div class="col-100">
                                                    <label for="inputName">Role</label>
                                                        <div class="form-group row">  
                                                            <div class="col-md-8">
                                                            <select class="custom-select form-control" id="location1" name="role">
                                                                <option value="Statistisi">Statistisi</option>
                                                                <option value="Penilai">Penilai</option>
                                                                <option value="Admin">Admin</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <div class="col-12">
                                                            <fieldset class="checkbox">
                                                                <div class="vs-checkbox-con vs-checkbox-primary">
                                                                    <input type="checkbox" checked>
                                                                    <span class="vs-checkbox">
                                                                        <span class="vs-checkbox--check">
                                                                            <i class="vs-icon feather icon-check"></i>
                                                                        </span>
                                                                    </span>
                                                                    <span class=""> I accept the terms & conditions.</span>
                                                                </div>
                                                            </fieldset>
                                                        </div>
                                                    </div>
                                                    <a href="auth-login.php" class="btn btn-outline-primary float-left btn-inline mb-50">Login</a>
                                                    <button type="submit" name="Submit" value="Add"  class="btn btn-primary float-right btn-inline mb-50">Register</a>
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
    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Theme JS-->
    <script src="./app-assets/js/core/app-menu.js"></script>
    <script src="./app-assets/js/core/app.js"></script>
    <script src="./app-assets/js/scripts/components.js"></script>
    <!-- END: Theme JS-->

    <!-- BEGIN: Page JS-->
    <!-- END: Page JS-->

</body>
<!-- END: Body-->

</html>