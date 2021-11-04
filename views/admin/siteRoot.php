<?php

    if(!isset($_SESSION['email'])){
        header("Location: http://kebabcidayi.com/index.php?url=login");
    }
    else{
?>
<div class="row">
            <div class=" col-sm-12 text-center">
                <h2 class="adminTitle">* * * Admin Paneli * * *</h2>
                <h6 class="adminTitle">- <?php echo 'Hoşgeldiniz &nbsp'.$_SESSION['email']?> -</h6>
                <a href="index.php?url=atmaca"class="btn btn-primary destroySession">ADMIN ANASAYFA</a>
                <a href="index.php?url=logout"class="btn btn-primary destroySession">OTURUMU KAPAT</a>
            </div>
 </div>
<div class="row text-center adminForm">
  <h3 class="adminTitle">* * * Site Ayarları * * *</h3>
    <div class="col-sm-8 col-sm-offset-2">
        <form action="controller/adminSetDataDb/setData.php" method="POST" enctype="multipart/form-data" class="m-5">
          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label kebapEkle">Seo Anahtar Kelimeler</label>
            <input type="text" class="form-control dataEntry" required="required" placeholder="Seo için Anahtar Kelime Yazınız" name="anahtarkelime" id="exampleInputEmail1" aria-describedby="emailHelp">
            <div id="emailHelp" class="form-text"></div>
          </div>
          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label kebapEkle">Yazar</label>
            <input type="text" class="form-control dataEntry" required="required" name="yazar" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Yazar İsmi Ekleyiniz">
            <div id="emailHelp" class="form-text"></div>
          </div>   
          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label kebapEkle">Açıklama</label>
            <input type="text" class="form-control dataEntry" required="required" name="aciklama" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Açıklama Ekleyiniz">
            <div id="emailHelp" class="form-text"></div>
          </div>  
          <button type="submit" name="ayar_ekle" class="btn btn-primary dataAdd">Ekle</button>
        </form>
    </div>
</div>
<?php 
}

?>