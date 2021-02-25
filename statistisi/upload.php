<?php
include '../config.php';
$limit = 10 * 1024 * 1024;
$ekstensi =  array('unggah_bukti');
$jumlahFile = count($_FILES['unggah_bukti']['name']);

for($x=0; $x<$jumlahFile; $x++){
	$namafile = $_FILES['unggah_bukti']['name'][$x];
	$tmp = $_FILES['unggah_bukti']['tmp_name'][$x];
	$tipe_file = pathinfo($namafile, PATHINFO_EXTENSION);
	$ukuran = $_FILES['unggah_bukti']['size'][$x];	
	if($ukuran > $limit){
		header("location:index.php?alert=gagal_ukuran");		
	}else{
		if(!in_array($tipe_file, $ekstensi)){
			header("location:index.php?alert=gagal_ektensi");			
		}else{		
			move_uploaded_file($tmp, 'file/'.date('d-m-Y').'-'.$namafile);
			$x = date('d-m-Y').'-'.$namafile;
			mysqli_query($koneksi,"INSERT INTO rekap_harian VALUES(NULL, '$x')");
		}
	}
}