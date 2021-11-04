<div class="row text-center adminForm">
  <h3 class="adminTitle">|--- Admin Login ---|</h3>
    <div class="col-sm-8 col-sm-offset-2">
        <form action="controller/adminSetDataDb/setData.php" method="POST" enctype="multipart/form-data" class="m-5">
          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label kebapEkle">E-mail </label>
            <input type="email" class="form-control dataEntry" required="required" placeholder="E-mail" name="email" id="exampleInputEmail1" aria-describedby="emailHelp">
            <div id="emailHelp" class="form-text"></div>
          </div>
          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label kebapEkle">PassWord</label>
            <input type="password" class="form-control dataEntry" required="required" name="password" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="PassWord">
            <div id="emailHelp" class="form-text"></div>
          </div>    
          <button type="submit" name="personcontrol" class="btn btn-primary dataAdd">Giriş Yap</button>
        </form>
    </div>
</div>