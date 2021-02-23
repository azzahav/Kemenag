<?php
include "../config.php";
error_reporting(0);
include('../session_co.php');
// include database connection file
session_start();
if( !isset($_SESSION['login'])){
    header('location:../auth-login.php');
}
?>
<!DOCTYPE html>
<html>
<body>
                            
    <?php
    $id_rekap = isset($_GET['id_rekap']) ? $_GET['id_rekap'] : null;
    $result = mysqli_query($mysqli, "SELECT * FROM rekap_harian WHERE id_rekap LIKE '%".$id_rekap."%'");
    $user_data  = mysqli_fetch_array($result);
    ?>
    <hr>
    <b>Bukti Kegiatan :</b> <?php echo $user_data['nama'];?> | <a href='detail-rekap.php'> Kembali </a>
    <hr>
    <embed src="../file/<?php echo $user_data['unggah_bukti'];?>" type="application/pdf" width="1300" height="800" >
                                
</body>
</html>