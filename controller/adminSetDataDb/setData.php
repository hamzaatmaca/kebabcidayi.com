<?php
session_start();
ob_start();
include '../../database/db.php';
include '../../security/security.php';

/**************** SET DATA FOR SITE ROOT ************************/

if(isset($_POST['ayar_ekle'])){
		$anahtarkelime = security($_POST['anahtarkelime']);
		$yazar = security($_POST['yazar']);
		$aciklama = security($_POST['aciklama']);
		$add = $db->prepare("INSERT INTO site_root SET  
			anahtarkelime=?,
			yazar=?,
			aciklama=?
			");
		$insert = $add->execute(array($anahtarkelime,$yazar,$aciklama,));
		if($insert){
			echo 'DB SAVED';
			header("Location: http://localhost/frontapp/index.php?url=siteroot&status=success");
		}else{
			echo 'Upppss!!';
		}
	}
	
/**************** SET DATA FOR SITE ROOT ************************/

/**************** SET DATA FOR LOGIN ****************************/
if(isset($_POST['personcontrol'])){
	$email=security($_POST['email']);
	$password=security($_POST['password']);

	$query = $db->prepare("SELECT * FROM admin where email=? and password=?");
	$query->execute(array($email,$password));
	$run = $query->fetch();

	if($run){
		$_SESSION['email'] = $email;
		echo $_SESSION['email'];
		header("Location: http://localhost/frontapp/index.php?url=atmaca");
	}
	else{
		header("Location: http://localhost/frontapp/index.php?url=login");
	}
}
/**************** SET DATA FOR LOGIN ****************************/
?>

<?php 

ob_end_flush();
/**************** İLETİSİM **************************************/
if(isset($_POST['iletisim'])){
	$isim = security($_POST['isim']);
	$email = security($_POST['email']);
	$mesaj = security($_POST['mesaj']);

	$ekle = $db->prepare("INSERT INTO mesaj SET
		isim =?,
		email=?,
		mesaj=?
		");
	$insert=$ekle->execute(array($isim,$email,$mesaj,));
	if($insert){
			echo 'DB SAVED';
			header("Location: http://localhost/frontapp/index.php?url=iletisim&status=success");
		}else{
			echo 'Upppss!!';
		}
}

/**************** İLETİSİM **************************************/

/******************** DELETE ALL MESSAGE **************************/
if(isset($_GET['delete'])){
		$delete = $db->exec("DELETE  FROM mesaj ");
		if($delete){
			echo 'DB SAVED';
			header("Location: http://localhost/frontapp/index.php?url=mesaj&status=success");
		}else{
			echo 'Upppss!!';
			header("Location: http://localhost/frontapp/index.php?url=mesaj&status=success");
		}
	}

?>


