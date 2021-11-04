         <!--========== FOOTER ==========-->
         <footer class="footer">
            <!-- Links -->
            <div class="section-seperator">
                <div class="content-md container">
                    <div class="row">
                        <div class="col-sm-5">
                            <div class="navbar-logo">
                                <img class="logoimg" src="./assets/img/fire2.png">
                                <a class="navbar-logo-wrap" href="index.php?url=home">
                                    <span class="logo">Kebapçı Dayı</span>
                                </a>
                            </div>
                        </div>
                        <div class="col-sm-2 sm-margin-b-30">
                            <!-- List -->
                            <ul class="list-unstyled footer-list">
                                <li class="footer-list-item"><a href="home"><i style="color:red" class="fas fa-home"></i> Anasayfa</a></li>
                                <li class="footer-list-item"><a href="kebaplar"><i style="color:red" class="fas fa-drumstick-bite"></i> Kebaplar</a></li>
                                <li class="footer-list-item"><a href="iletisim"><i style="color:red" class="fas fa-phone"></i> İletişim</a></li>
                            </ul>
                            <!-- End List -->
                        </div>
                        <div class="col-sm-2 sm-margin-b-30">
                            <!-- List -->
                            <ul class="list-unstyled footer-list">
                                <li class="footer-list-item"><a href="http://twitter.com/" target="_blank"><i class="fas fa-hashtag" style="color:red"></i> Twitter</a></li>
                                <li class="footer-list-item"><a href="http://facebook.com/" target="_blank"> <i style="color:red" class="fab fa-facebook"></i> Facebook</a></li>
                                <li class="footer-list-item"><a href="http://instagram.com/" target="_blank"><i style="color:red" class="fab fa-instagram-square"></i> Instagram</a></li>
                                <li class="footer-list-item"><a href="http://youtube.com/" target="_blank"><i style="color:red" class="fab fa-youtube"></i> YouTube</a></li>
                            </ul>
                            <!-- End List -->
                        </div>
                        <div class="col-sm-3">
                            <!-- List -->
                            <ul class="list-unstyled footer-list">
                                <li class="footer-list-item"><font id="hakkimizda" onclick="hakkimizda()" href=""><i style="color:red" class="fas fa-question"></i> Hakkımızda</font></li>
                                <!--<li class="footer-list-item"><a href="#"><i style="color:red" class="fas fa-sign"></i> Diğer</a></li>-->
                            </ul>
                            <!-- End List -->
                        </div>
                    </div>
                    <!--// end row -->
                </div>
            </div>
            <!-- End Links -->

            <!-- Copyright -->
            <div class="content container">
                <div class="row">
                    <div class="col-xs-6">
                        - Her Hakkı Saklıdır &copy 2021 kebabcidayi.com
                    </div>
                    <div class="col-xs-6 text-right">
                        <p class="margin-b-0"><a class="fweight-700"></a> Tasarlayan: <a class="fweight-700" href="#">Hamza Atmaca by MentalKod</a></p>
                    </div>
                </div>
                <!--// end row -->
            </div>
            <!-- End Copyright -->
        </footer>

        <!-- Back To Top -->
        <a href="javascript:void(0);" class="js-back-to-top back-to-top">ÜST</a>

        <!-- JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->
        <!-- CORE PLUGINS -->
        <script src="./assets/js/sweetalert.js"></script>
        <script type="text/javascript" src="./assets/js/index.js"></script>
        <script type="module" src="./frontDb/layout.js"></script>
        <script src="./assets/vendor/jquery.min.js" type="text/javascript"></script>
        <script src="./assets/vendor/jquery-migrate.min.js" type="text/javascript"></script>
        <script src="./assets/vendor/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
        <!-- PAGE LEVEL PLUGINS -->
        <script src="./assets/vendor/jquery.easing.js" type="text/javascript"></script>
        <script src="./assets/vendor/jquery.back-to-top.js" type="text/javascript"></script>
        <script src="./assets/vendor/jquery.wow.min.js" type="text/javascript"></script>
        <script src="./assets/vendor/swiper/js/swiper.jquery.min.js" type="text/javascript"></script>
        <script src="./assets/vendor/masonry/jquery.masonry.pkgd.min.js" type="text/javascript"></script>
        <script src="./assets/vendor/masonry/imagesloaded.pkgd.min.js" type="text/javascript"></script>
        <!-- PAGE LEVEL SCRIPTS -->
        <script src="./assets/js/layout.min.js" type="text/javascript"></script>
        <script src="./assets/js/components/wow.min.js" type="text/javascript"></script>
        <script src="./assets/js/components/swiper.min.js" type="text/javascript"></script>
        <script src="./assets/js/components/masonry.min.js" type="text/javascript"></script>

    </body>
    <!-- END BODY -->
    </html>
    <?php
    $db=null;
?>