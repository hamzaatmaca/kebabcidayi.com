 <!-- Clients -->
        <div class="section-seperator">
            <div class="content-md container">
                <div class="row margin-b-40">
                    <div class="col-sm-6">
                        <h2 style="color:orangered;">Kebapçı Dayı Olarak;</h2>
                        <p>Türkiye'nin değerli lezzetlerini ve kebap tariflerini sizlere kolaylıkla sunuyoruz. Eğer sizinde bir tarifiniz varsa buradan bize gönderebilirsiniz</p>
                    </div>
                    <div class="col-sm-6 ">
                        <div class="postsend">
                            <form method="POST" action="controller/adminSetDataDb/setData.php">
                                <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">İsim Soyisim</label>
                                <input type="text" class="form-control" name="isim" required="required" id="exampleInputEmail1" aria-describedby="emailHelp">
                              </div>
                              <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">E-mail</label>
                                <input type="email" class="form-control" name="email"  required="required" id="exampleInputEmail1" aria-describedby="emailHelp">
                              </div>
                              <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Mesaj</label>
                                <textarea  required="required" type="password" class="form-control" name="mesaj" id="exampleInputPassword1"></textarea>
                              </div>
                              <button type="submit" name="iletisim" class="btn btn-primary ilet">İlet</button>
                            </form>
                        </div>
                    </div>
                </div>
                <!--// end row -->
            </div>
        </div>