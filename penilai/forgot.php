<?php

//panggil my$mysqli database
include "../config.php";

//enkripsi inputan password lama
$password_lama = isset($_POST['pass_lama']) ? $_POST['pass_lama'] : '';

//panggil nip
$nip = isset($_POST['nip']) ? $_POST['nip'] : '';

//uji jika password lama sesuai
$tampil = mysqli_query($mysqli, "SELECT * FROM pengguna WHERE 
                                nip = '$nip' and password = '$password_lama'");
$data = mysqli_fetch_array($tampil);
//jika data ditemukan, maka password sesuai
if ($data) {
    //uji jika password baru dan konfirmasi password sama
    $password_baru = $_POST['pass_baru'];
    $konfirmasi_password = $_POST['konfirmasi_pass'];

    if ($password_baru == $konfirmasi_password) {
        //proses ganti password
        //enkripsi password baru
        $pass_ok = $konfirmasi_password;
        $ubah = mysqli_query($mysqli, "UPDATE pengguna set password = '$pass_ok'  
                                        WHERE id_pengguna = '$data[id_pengguna]' ");
        if ($ubah) {
            echo "<script>alert('Password anda berhasil diubah, silahkan logout untuk menguji password baru anda.!');document.location='./app-user-view.php'</script>";
        }
    } else {
        echo "<script>alert('Maaf, Password Baru & Konfirmasi password yang anda inputkan tidak sama!');document.location='./app-user-view.php'</script>";
    }
} else {
    echo "<script>alert('Maaf, Password lama anda tidak sesuai/tidak terdaftar!');document.location='./app-user-view.php'</script>";
}