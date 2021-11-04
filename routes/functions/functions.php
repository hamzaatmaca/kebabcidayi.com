<?php
	function showPage($src,$values){
		include './controller/adminGetDataDb/getData.php';
		include './views/partials/header.php';
		include './views/partials/nav.php';
		include './views/partials/add/_membersPartial.php';
		include $src;
		include './views/partials/footer.php';
	}

	function showAdmin($src,$values){
		include './controller/adminGetDataDb/getData.php';
		include './views/partials/header.php';
		include './views/partials/nav.php';
		include $src;
		include './views/partials/footer.php';
	}

?>