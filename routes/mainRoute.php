<?php
include 'functions/functions.php';
include 'controller/controller.php';

	if(!empty($_GET["url"])){
		$url = $_GET["url"];
		switch ($url) {
			case 'home':
				home();
				break;
			case 'kebaplar':
				kebaplar();
				break;
			/*case 'izgaralar':
				izgaralar();
				break;*/
			case 'uyeol':
				uyeol();
				break;
			case 'iletisim':
				iletisim();
				break;
			case 'atmaca':
				admin();
				break;
			case 'siteroot':
				siteRoot();
				break;
			case 'login':
				login();
				break;
			case 'logout':
				logout();
				break;
			case 'mesaj':
				mesaj();
				break;
			case 'layout':
				layout();
				break;
			default:
				hata();

		}
	}
	else{
		home();
	}
?>