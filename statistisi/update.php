<?php
if(isset($_POST['Submit'])) {
    $id_master = $_POST['id_master'];
    $nama = $_POST['nama'];
    $nip = $_POST['nip'];
    $unsur = $_POST['unsur'];
    $sub_unsur = $_POST['sub_unsur'];
    $butir_kegiatan = $_POST['butir_kegiatan'];
    $uraian_kegiatan = $_POST['uraian_kegiatan'];
    $volume_kegiatan = $_POST['volume_kegiatan'];
    $angka_kredit = $_POST['angka_kredit'];
    $satuan_hasil = $_POST['satuan_hasil'];
    $tanggal = $_POST['tanggal'];
    $jumlah_kredit = $volume_kegiatan*$angka_kredit;
    $total_nilai = $jumlah_kredit*$angka_kredit;

    include_once("../config.php");
    
    $result = mysqli_query($mysqli, "INSERT INTO rekap_harian_master (nama,nip,unsur,sub_unsur,butir_kegiatan,uraian_kegiatan,volume_kegiatan,angka_kredit,satuan_hasil,tanggal,jumlah_kredit,total_nilai) VALUES ('$nama','$nip','$unsur','$sub_unsur','$butir_kegiatan','$uraian_kegiatan','$volume_kegiatan','$angka_kredit','$satuan_hasil','$tanggal','$jumlah_kredit','$total_nilai')");
    
    header("location: detail-rekap.php",  true,  301 );  exit;
    }
?>