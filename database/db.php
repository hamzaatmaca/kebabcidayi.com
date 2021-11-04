<?php
try{
	$db = new PDO("mysql:host=localhost;dbname=kebapci",'root','');
	$db->exec("SET NAMES utf8");
	/*echo 'DB Connection is Succesfull';*/
}
catch(PDOExpception $err){
	echo $err->getMessage();
}

?>