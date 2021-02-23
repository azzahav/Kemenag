<?php
	include '../config.php';
	$data_unsur = $_POST['data_unsur'];

	echo "<option value=''>Pilih Sub Unsur</option>";

	$query = "SELECT * FROM data_subunsur WHERE id_unsur=? ORDER BY sub_unsur ASC";
	$dewan1 = $mysqli->prepare($query);
	$dewan1->bind_param("i", $data_unsur);
	$dewan1->execute();
	$res1 = $dewan1->get_result();
	while ($row = $res1->fetch_assoc()) {
		echo '<option  name="sub_unsur" value=" '.$row['id_subunsur'].' " label=" '.$row['sub_unsur'].' " >' . $row['sub_unsur'] . '</option>';  
	}
?>