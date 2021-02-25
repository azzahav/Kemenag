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
        $masa_kerja = $_POST['masa_kerja'];
        $unit_kerja = $_POST['unit_kerja'];
        $role = $_POST['role'];
        $password = $_POST['password'];
        $email = $_POST['email'];
        $alamat = $_POST['alamat'];
        $tgl_lahir = $_POST['tgl_lahir'];


        // include database connection file
        include_once("config.php");

        // Insert user data into table
        $result = mysqli_query($mysqli, "INSERT INTO pengguna(nama,nip,no_seri_kapreg,tempat_tanggal_lahir,jenis_kelamin,pendidikan,pangkat,jabatan,masa_kerja,unit_kerja,role,password,email,alamat,tgl_lahir) VALUES('$nama','$nip','$no_seri_kapreg','$tempat_tanggal_lahir','$jenis_kelamin','$pendidikan','$pangkat','$jabatan','$masa_kerja','$unit_kerja','$role','$password','$email','$alamat','$tgl_lahir')");

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
                    <div class="col-xl-8 col-10 d-flex justify-content-center">
                        <div class="card bg-authentication rounded-0 mb-0">
                            <div class="row m-0">
                                <div class="col-lg-6 d-lg-block d-none text-center align-self-center pl-0 pr-3 py-0">
                                    <img src="./app-assets/images/pages/kemenag10.png" alt="branding logo">
                                </div>
                                <div class="col-lg-6 col-12 p-0">
                                    <div class="card rounded-0 mb-0 p-2">
                                        <div class="card-header pt-100 pb-1">
                                            <div class="card-title">
                                                <h2 class="mb-0">Register</h2>
                                            </div>
                                        </div>
                                        <div class="card-content">
                                            <div class="card-body pt-0">
                                                <form  action="auth-register.php"  method="post"  name="form3">
                                                
                                                <div class="form-group">
                                                    <label for="nip">NIP</label>
                                                    <input onkeypress="validate(event)" id="nip" min="0" maxlength="19" type="number" class="form-control" name="nip" placeholder="Ex : 432523543634" autofocus="" required>
                                                            </div>

                                                <div class="form-group">
                                                    <label for="name">Nama</label>
                                                    <input id="name" type="text" class="form-control" placeholder="Ex : Didik Hariyanto" name="nama" required>
                                                            </div>

                                                <div class="row">
                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <label for="inputPlace">Tempat Lahir</label>
                                                            <input id="inputPlace" type="text" class="form-control" placeholder="Mojokerto" name="tempat_tanggal_lahir" required>
                                                                            </div>

                                                    </div>
                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <label for="inputDate">Tanggal Lahir</label>
                                                            <input id="inputDate" type="date" class="form-control"  name="tgl_lahir" required>
                                                                            </div>
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label for="serialCard">Nomor Seri Kartu Pegawai</label>
                                                    <input id="serialCard" placeholder="Ex : D43F52334" type="text" class="form-control" name="no_seri_kapreg" required>
                                                            </div>

                                                <div class="form-group">
                                                    <label for="inputGender">Jenis Kelamin</label>
                                                    <select id="inputGender" name="jenis_kelamin" class="form-control">
                                                        <option value="Laki-Laki">Laki-Laki</option>
                                                        <option value="Perempuan">Perempuan</option>
                                                    </select>
                                                            </div>
                                                <div class="form-group">
                                                    <label for="pendidikan">Pendidikan</label>
                                                    <input id="pendidikan" type="text" placeholder="S1-Teknik Komputer" class="form-control"  name="pendidikan" required>
                                                </div>

                                                <div class="form-group">
                                                    <label for="pangkat">Pangkat</label>
                                                    <input id="pangkat" type="text" placeholder="Ex : Penata / III/c / 1 Oktober 2019" class="form-control" name="pangkat" required>
                                                            </div>

                                                <div class="form-group">
                                                    <label for="address">Alamat</label>
                                                    <input id="address" type="text" placeholder="Ex : Jl Empu tantular No.45 Sooko Mojokerto" class="form-control"  name="alamat" required>
                                                            </div>

                                                <div class="form-group">
                                                    <label for="email">Email</label>
                                                    <input id="email" type="email" placeholder="Ex : didik@kemenag.go.id" class="form-control" name="email" required>
                                                            </div>

                                                <div class="form-group">
                                                    <label for="masa_kerja">Masa Kerja</label>
                                                    <select class="custom-select form-control" id="location2" name="masa_kerja" required>
                                                                <option value="Lama">Lama</option>
                                                                <option value="Baru">Baru</option>
                                                            </select>

                                                            </div>

                                                <div class="form-group">
                                                <label for="inputName">Unit Kerja</label>
                                                <input type="text" id="inputName" class="form-control" name="unit_kerja" placeholder="ex : Biro Humas Data dan Informasi" required>
                                                        
                                                    </div>


                                                <div class="form-group">
                                                    <label for="pkPosition">Jabatan Statistisi</label>
                                                    <select class="custom-select form-control" id="location1" name="jabatan" required>
                                                                <option value="Statistisi Muda">Statistisi Muda</option>
                                                                <option value="Statistisi Madya">Statistisi Madya</option>
                                                            </select>
                                                            </div>

                                                <div class="form-group">
                                                    <label for="pkPosition">Status</label>
                                                    <select class="custom-select form-control" id="location1" name="role" required> 
                                                        <option value="Statistisi">Statistisi</option>
                                                        <option value="Penilai">Penilai</option>
                                                        <option value="Admin">Admin</option>
                                                    </select>
                                                </div>

                                                <div class="form-group">
                                                    <label for="password">Password</label>
                                                    <input id="password" type="password" class="form-control" name="password" required>
                                                            </div>

                                                <div class="form-group no-margin">
                                                    <button type="submit" class="btn btn-primary btn-block" name="Submit" value="Add" onclick="return confirm('Yakin Sudah Terisi Semua?')">
                                                        Daftar
                                                    </button>
                                                </div>
                                                <div class="margin-top20 text-center">
                                                    <a  href="auth-login.php"  class="btn btn-outline-primary btn-block" >Login</a>
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