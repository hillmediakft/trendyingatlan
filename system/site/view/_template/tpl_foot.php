<!-- BEGIN FOOTER-->
<footer class="footer">
    <div class="container">
        <div class="footer__wrap">
            <div class="footer__col footer__col--third">
                <section class="widget">
                    <div class="widget__header">
                        <h3 class="widget-title">Menü</h3>
                    </div>
                    <nav class="nav nav--footer">
                        <a href="#">Kezdőoldal</a>
                        <a href="#">Ingatlanok</a>
                        <a href="#">Szolgáltatások</a>
                        <a href="#">Hitelek</a>
                        <a href="#">Hírek / cikkek</a>
                        <a href="#">Kapcsolat</a>
                    </nav>
                    <!-- end of block .nav-footer-->
                </section>

            </div>
            <!-- end of block .footer__col-first-->
            <div class="footer__col footer__col--second">
                <section class="address address--footer">
                    <div class="address__header">
                        <h3 class="address__title">Kapcsolat</h3>
                        <h4 class="address__headline">Irodánk</h4>
                    </div>
                    <ul>
                    <li><i class="fa fa-home"></i> <?php echo $this->settings['ceg']; ?></li>
                    <li><i class="fa fa-map-marker"></i> <?php echo $this->settings['cim']; ?></li>
                    <li><i class="fa fa-phone"></i> <?php echo $this->settings['tel']; ?></li>
                    <li><i class="fa fa-envelope"></i> <?php echo $this->settings['email']; ?></li>
                    </ul>

                </section>
                <!-- end of block .address-->

            </div>
            <!-- end of block .footer__col-second-->
            <div class="footer__col footer__col--first">
                <!-- BEGIN SECTION ARTICLE-->
                <section class="article js-unhide-block article--footer">
                                    <section class="widget">
                    <div class="widget__header">
                        <h3 class="widget-title">Eladó / kiadó ingatlanok</h3>
                    </div>

                    <nav class="nav nav--footer">
                        <a href="index.html">Eladó ingatlan Budapest</a>
                        <a href="properties_listing_grid.html">Kiadó ingatlan Budapest</a>
                        <a href="agents_listing_grid.html">ELadó lakás Budapest</a>
                        <a href="gallery.html">Kiadó lakás Budapest</a>
                        <a href="blog.html">Eladó ház Budapest</a>
                        <a href="pricing.html">Kiadó ház Budapest</a>

                    </nav>
                    <!-- end of block .nav-footer-->
                </section>
                </section>
                <!-- END SECTION ARTICLE-->
            </div>
            <!-- end of block .footer__col-third-->

            <div class="clearfix"></div><span class="footer__copyright">&copy; <?php echo date('Y') . ' ' . $this->settings['ceg'];?></span>
            <!-- end of block .footer__copyright-->
        </div>
    </div>
</footer>
<!-- end of block .footer-->
<!-- END FOOTER-->
