<?php
   session_start();
   include('config.php');
   
   $id_pengguna = isset($_GET['id_pengguna']) ? $_GET['id_pengguna'] : null;

   $user_check = $_SESSION['login'];
   
   $ses_sql = mysqli_query($mysqli,"SELECT * FROM pengguna WHERE nip = '$user_check'");
   
   while ($row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC)){
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
      $login_session12 = $row['password'];
      $login_session13 = $row['tgl_lahir'];
      $login_session14 = $row['email'];
      $login_session15 = $row['alamat'];
   }   
   if(!isset($_SESSION['login'])){
      $url = "cek_login.php";
         echo '<script type="text/javascript">';
        echo 'window.location.href="'.$url.'";';
        echo '</script>';
        exit;
      die();
   }
?>