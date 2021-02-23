<?php
	include '../config.php';
	$data_subunsur = $_POST['data_subunsur'];
 
	echo "<option value=''>Pilih Butirrr</option>";
 
	$query = "SELECT * FROM data_butir WHERE id_subunsur=? ORDER BY butir_kegiatan ASC";
	$result = mysqli_query($mysqli, "select * from data_butir");  
	$jsArray = "var prdName = new Array();\n";
	$dewan1 = $mysqli->prepare($query);
	$dewan1->bind_param("i", $data_subunsur);
	$dewan1->execute();
	$res1 = $dewan1->get_result();
	while ($row = $res1->fetch_assoc()) {
		echo '<option name="butir_kegiatan"  value="' . $row['butir_kegiatan'] . '">' . $row['butir_kegiatan'] . '</option>';  
		$jsArray .= "prdName['" . $row['butir_kegiatan'] . "'] = {angka_kredit:'" . addslashes($row['angka_kredit']) . "'};\n";
	}
?>
 <script type="text/javascript"> 
 <?php echo $jsArray; ?>
 function changeValue(id){
 document.getElementById('angka_kredit').value = prdName[id].angka_kredit;
 };
 </script>