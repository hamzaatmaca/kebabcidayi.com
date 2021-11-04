<?php 
include 'database/db.php';

/**************** GET DATA FOR SITE ROOT ************************/

$data = $db->prepare("SELECT * FROM site_root ORDER BY id Desc limit 1;");
$data ->execute();

while($row = $data->fetch(PDO::FETCH_ASSOC)){
	$anahtarkelime = $row["anahtarkelime"];
	$yazar=$row["yazar"];
	$aciklama=$row["aciklama"];

}

/**************** GET DATA FOR SITE ROOT ************************/

?>
