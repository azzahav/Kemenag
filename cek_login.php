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

 $data = mysqli_fetch_assoc($login);

 // cek jika user login sebagai admin
 if($data['role']=="Admin"){

  // buat session login dan nip
  $_SESSION['nip'] = $nip;
  $_SESSION['role'] = "Admin";
  // alihkan ke halaman dashboard admin
  header("location:admin/pengguna.php");

 // cek jika user login sebagai pegawai
 }else if($data['role']=="Penilai"){
  // buat session login dan nip
  $_SESSION['nip'] = $nip;
  $_SESSION['role'] = "Penilai";
  // alihkan ke halaman dashboard pegawai
  header("location:penilai/app-user-view.php");

}else if($data['role']=="Statistisi"){
	// buat session login dan nip
	$_SESSION['nip'] = $nip;
	$_SESSION['role'] = "Statistisi";
	// alihkan ke halaman dashboard pegawai
	header("location:statistisi/index.php");
 }else{

  // alihkan ke halaman login kembali
 header("location:auth-login.php?pesan=gagal");
 } 
}else{
header("location:auth-login.php?pesan=gagal");
}

?>