<?php
// include database connection file
include_once("../config.php");

// Get id from URL to delete that user
$id_pengguna = $_GET['id_pengguna'];


// Delete user row from table based on given id_pengguna
$result = mysqli_query($mysqli, "DELETE FROM pengguna WHERE id_pengguna=$id_pengguna");
header("Location:./pengguna.php");

?>
