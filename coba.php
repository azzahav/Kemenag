<?php
//fetch.php
if(isset($_POST['action']))
{
 include('./config.php');
 $output = '';
 if($_POST["action"] == 'kode_unsur')
 {
  $query = "
  SELECT state FROM data_master 
  WHERE kode_unsur = :kode_unsur 
  GROUP BY kode_subunsur
  ";
  $statement = $mysqli->prepare($query);
  $statement->execute(
   array(
    ':kode_unsur' => $_POST["query"]
   )
  );
  $result = $statement->fetchAll();
  $output .= '<option value="">Select State</option>';
  foreach($result as $row)
  {
   $output .= '<option value="'.$row["state"].'">'.$row["state"].'</option>';
  }
 }
 if($_POST["action"] == 'state')
 {
  $query = "
  SELECT city FROM country_state_city 
  WHERE state = :state
  ";
  $statement = $mysqli->prepare($query);
  $statement->execute(
   array(
    ':state' => $_POST["query"]
   )
  );
  $result = $statement->fetchAll();
  foreach($result as $row)
  {
   $output .= '<option value="'.$row["city"].'">'.$row["city"].'</option>';
  }
 }
 echo $output;
}
?>