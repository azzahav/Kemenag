<?php
include_once("../config.php");

    if($_POST['rowid']) {
        $id = isset($_POST['rowid']) ? $_POST['rowid'] : '';
        // mengambil data berdasarkan id
        $sql = "SELECT t1.id_rekap, t1.butir_kegiatan, t1.uraian_kegiatan, t1.volume_kegiatan, t1.angka_kredit, t1.satuan_hasil, t2.unsur, t3.sub_unsur 
        FROM rekap_harian as t1 LEFT JOIN data_unsur as t2 ON t1.unsur=t2.id_unsur LEFT JOIN data_subunsur as t3 on t1.sub_unsur=t3.id_subunsur WHERE id_rekap LIKE '%".$id_rekap."%'
        ";
        $result = $mysqli->query($sql);
  // If yes, then foreach() will iterate over it.
  foreach ($result as $baris) { ?>
    <table class="table">
        <tr>
            <td>Uraian Kegiatan</td>
            <td>:</td>
            <td><?php echo $baris['uraian_kegiatan']; ?></td>
        </tr>
        <tr>
            <td>Butir Kegiatan</td>
            <td>:</td>
            <td><?php echo $baris['butir_kegiatan']; ?></td>
        </tr>
        <tr>
            <td>Unsur</td>
            <td>:</td>
            <td><?php echo $baris['unsur']; ?></td>
        </tr>
    </table>
<?php 

}
}
    
$mysqli->close();
?>  