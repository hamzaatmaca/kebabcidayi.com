<?php 

session_start();
ob_start();
error_reporting(E_ALL);

	include './database/db.php';
	include './routes/mainRoute.php';

ob_end_flush();
?>
