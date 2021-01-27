<?php
// mengaktifkan session pada php
session_start();

// menghubungkan php dengan koneksi database
include 'config.php';

// menangkap data yang dikirim dari form login
$nip = $_POST['nip'];
$password = $_POST['password'];


// menyeleksi data user dengan nip dan password yang sesuai
$login = mysqli_query($mysqli,"SELECT * FROM pengguna WHERE nip='$nip' and password='$password'");
// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($login);

// cek apakah nip dan password di temukan pada database
if($cek > 0){
  $_SESSION['login']=$nip;
 $data = mysqli_fetch_assoc($login);
 // cek jika user login sebagai admin
 if($data['role']=="admin"){

  // buat session login dan nip
  $_SESSION['nip'] = $nip;
  $_SESSION['role'] = "admin";
  // alihkan ke halaman dashboard admin
  header("location:admin/app-user-view.php");

 // cek jika user login sebagai pegawai
 }else if($data['role']=="penilai"){
  // buat session login dan nip
  $_SESSION['nip'] = $nip;
  $_SESSION['role'] = "penilai";
  // alihkan ke halaman dashboard pegawai
  header("location:penilai/app-user-view.php");

}else if($data['role']=="statistisi"){
	// buat session login dan nip
	$_SESSION['nip'] = $nip;
	$_SESSION['role'] = "statistisi";
	// alihkan ke halaman dashboard pegawai
	header("location:statistisi/app-user-view.php");
 }else{

  // alihkan ke halaman login kembali
 header("location:auth-login.php?pesan=gagal");
 } 
}else{
header("location:auth-login.php?pesan=gagal");
}

?>