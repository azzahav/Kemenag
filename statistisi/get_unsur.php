<?php
	include '../config.php';

	echo "<option value=''>Pilih Unsur</option>";

	$query = "SELECT * FROM data_unsur ORDER BY unsur ASC";
	$dewan1 = $mysqli->prepare($query);
	$dewan1->execute();
	$res1 = $dewan1->get_result();
	while ($row = $res1->fetch_assoc()) {
		echo '<option  name="unsur" value=" '.$row['id_unsur'].' " label=" '.$row['unsur'].' " >' . $row['unsur'] . '</option>';  
	}
?>
