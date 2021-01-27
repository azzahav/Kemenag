<?php
   session_start();
   include('config.php');
   
   $user_check = $_SESSION['login'];
   
   $ses_sql = mysqli_query($mysqli,"select nama,nip,no_seri_kapreg,unit_kerja,role,tempat_tanggal_lahir,jenis_kelamin,pendidikan,pangkat,jabatan,masa_kerja from pengguna where nip = '$user_check'");
   
   $row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
   
   $login_session = $row['nama'];
   $login_session2 = $row['nip'];
   $login_session3 = $row['no_seri_kapreg'];
   $login_session4 = $row['unit_kerja'];
   $login_session5 = $row['role'];
   $login_session6 = $row['tempat_tanggal_lahir'];
   $login_session7 = $row['jenis_kelamin'];
   $login_session8 = $row['pendidikan'];
   $login_session9 = $row['pangkat'];
   $login_session10 = $row['jabatan'];
   $login_session11 = $row['masa_kerja'];
   
   if(!isset($_SESSION['login'])){
      $url = "cek_login.php";
         echo '<script type="text/javascript">';
        echo 'window.location.href="'.$url.'";';
        echo '</script>';
        exit;
      die();
   }
?>