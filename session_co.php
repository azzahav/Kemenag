<?php
   session_start();
   include('config.php');
   
   $user_check = $_SESSION['login'];
   
   $ses_sql = mysqli_query($mysqli,"select nama,role from pengguna where nip = '$user_check'");
   
   $row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
   
   $login_session = $row['nama'];
   
   if(!isset($_SESSION['login'])){
      $url = "cek_login.php";
         echo '<script type="text/javascript">';
        echo 'window.location.href="'.$url.'";';
        echo '</script>';
        exit;
      die();
   }
?>