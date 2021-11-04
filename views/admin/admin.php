<?php

    if(!isset($_SESSION['email'])){
        header("Location: http://kebabcidayi.com/index.php?url=login");
    }
    else{
?>
<div class="section-seperator">
    <div class="content-md container">
        <div class="row">
            <div class=" col-sm-12 text-center">
                <h2 class="adminTitle">* * * Admin Paneli * * *</h2>
                <h6 class="adminTitle">- <?php echo 'Hoşgeldiniz &nbsp'.$_SESSION['email']?> -</h6>
                <a href="index.php?url=atmaca"class="btn btn-primary destroySession">ADMIN ANASAYFA</a>
                <a href="index.php?url=logout"class="btn btn-danger destroySession">OTURUMU KAPAT</a>
            </div>
        </div>
        <div class="row">
            <div class=" col-md-12 text-center">
              <ul class="list-group">
                <li class="list-group-item"><a href="index.php?url=siteroot" class="adminLink"><i class="fas fa-cogs"></i> Site Ayarları</a></li>
                <li class="list-group-item"><a href="index.php?url=mesaj" class="adminLink"><i class="fas fa-envelope-open-text"></i> Mesajlar</a></li>
              </ul>
          </div>
      </div>
  </div>
</div>
<?php 
}

?>


