<?php
// include database connection file
include_once("../config.php");

// Get id from URL to delete that user
$id_rekap = $_GET['id_rekap'];


// Delete user row from table based on given id_pengguna
$result = mysqli_query($mysqli, "DELETE FROM rekap_harian WHERE id_rekap=$id_rekap");
header("Location:./detail-rekap.php");
?>
