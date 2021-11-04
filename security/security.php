<?php 
function security($Deger){
	$BoslukSil = trim($Deger);
	$TaglariTemizle = strip_tags($BoslukSil);
	$EtkisizYap = htmlspecialchars($TaglariTemizle);
	$sonuc = $EtkisizYap;
	return $sonuc;
}
function filter($x){
	$bosluksil = trim($x);
	$taglaritemizle =strip_tags($bosluksil);
	$etkisizyap = htmlspecialchars($taglaritemizle);
	$sontemizlik = rakam($etkisizyap);
	$sonuc = $sontemizlik;
	return $sonuc;
}

?>