<?php 
// koneksi database
include '../config.php';
 
// menangkap data yang di kirim dari form
$unsur = $_POST['unsur'];
$sub_unsur = $_POST['sub_unsur'];
$butir_kegiatan = $_POST['butir_kegiatan'];
$uraian_kegiatan = $_POST['uraian_kegiatan'];
$satuan_hasil = $_POST['satuan_hasil'];
$tanggal = $_POST['tanggal'];

 
// update data ke database
mysqli_query($mysqli,"update rekap_harian set unsur='$unsur', sub_unsur='$sub_unsur', butir_kegiatan='$butir_kegiatan', uraian_kegiatan='$uraian_kegiatan', satuan_hasil='$satuan_hasil', tanggal='$tanggal' where id_rekap='$id_rekap'");
 
// mengalihkan halaman kembali ke index.php
header("location:./index.php");
 
?>