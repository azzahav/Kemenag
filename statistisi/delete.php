<?php
// include database connection file
include_once("../config.php");

// Get id from URL to delete that user
$id_pimpinan = $_GET['id_pimpinan'];


// Delete user row from table based on given id_pengguna
$result = mysqli_query($mysqli, "DELETE FROM pimpinan WHERE id_pimpinan=$id_pimpinan");
header("Location:./pimpinan.php");
?>
