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
      <h3 class="adminTitle">* * * Mesajlar * * *<br><br>
        <form method="GET" action="controller/adminSetDataDb/setData.php">
        <button type="submit" name="delete" class="btn btn-danger">Tüm Mesajları Sil</button>
        </form>
     </h3>

     <?php 

     /**************** GET DATA FOR İLETİSİM *************************/
     $i = 0;
     $veri = $db->prepare("SELECT * FROM mesaj");
     $veri ->execute();
     while($ro = $veri->fetch(PDO::FETCH_ASSOC)){
        $isim = $ro['isim'];
        $email = $ro['email'];
        $mesaj = $ro['mesaj'];
        $i++;


        /**************** GET DATA FOR İLETİSİM *************************/

        ?>
        <div class="col-sm-8 col-sm-offset-2 text-center" 
        style="margin-bottom: 60px; border:5px solid aquamarine;padding: 15px;">
        <h4 class="text-primary"><?php echo "Mesaj No:".$i; ?></h4>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label kebapEkle">İsim</label>
            <input type="text" class="form-control dataEntry" required="required" value="<?php echo $isim; ?>"  id="exampleInputEmail1" aria-describedby="emailHelp">
            <div id="emailHelp" class="form-text"></div>
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label kebapEkle">Mail</label>
            <input type="text" class="form-control dataEntry" required="required"  id="exampleInputEmail1" aria-describedby="emailHelp" value="<?php echo $email; ?>">
            <div id="emailHelp" class="form-text"></div>
        </div>   
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label kebapEkle">Mesaj</label>
            <textarea type="text" class="form-control dataEntry" required="required"  id="exampleInputEmail1" aria-describedby="emailHelp"><?php echo $mesaj; ?></textarea>
            <div id="emailHelp" class="form-text"></div>
        </div>  
    </div>
</div>


<?php 
}
}

?>
