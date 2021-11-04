<?php
error_reporting(0);
function home(){
	$title='Anasayfa';
	showPage('./views/site/home.php',array('title'=>$title));
}
function kebaplar(){
	$title='Kebaplar';
	showPage('./views/site/kebap.php',array('title'=>$title));
}
function izgaralar(){
	$title='Izgaralar';
	showPage('./views/site/izgara.php',array('title'=>$title));
}
function uyeol(){
	$title='Üye Ol';
	showPage('./views/site/uye.php',array('title'=>$title));
}
function iletisim(){
	$title='İletişim Bilgileri';
	if($_GET['status'] == 'success'){
    echo "<script>
          swal({
              title:'Mesaj Başarıyla İletildi',
              text:'Kapatmak için butona tıklayınız',
              icon:'success',
              button:'Kapat'
          });
    	  </script>";
  }
	showPage('./views/site/iletisim.php',array('title'=>$title));
	
	
}
function hata(){
	$title='Hata Bildirimi';
	showPage('./views/site/404.php',array('title'=>$title));
}
function layout(){
	$title='Ürünler';
	showPage('./views/site/layout.php',array('title'=>$title));

}

/*ADMIN FUNCTIONS*/
function admin(){
	$title='Admin';
	showAdmin('./views/admin/admin.php',array('title'=>$title));
}
function siteRoot(){
	$title='Site Ayarları';
	showAdmin('./views/admin/siteRoot.php',array('title'=>$title));
	
	if($_GET['status'] == 'success'){
    echo "<script>
          swal({
              title:'Başarıyla Eklendi',
              text:'Kapatmak için butona tıklayınız',
              icon:'success',
              button:'Kapat'
          });
    	  </script>";
  }

}
function login(){
	$title='Login';
	showAdmin('./views/admin/login.php',array('title'=>$title));
}
function logout(){
	$title='Logout';
	showAdmin('./views/admin/logout.php',array('title'=>$title));
}
function mesaj(){
	$title='Mesajlar';
	showAdmin('./views/admin/mesaj.php',array('title'=>$title));
	if($_GET['status'] == 'success'){
    echo "<script>
          swal({
              title:'Mesajlar Silindi',
              text:'Kapatmak için butona tıklayınız',
              icon:'success',
              button:'Kapat'
          });
    	  </script>";
  }
}

?>