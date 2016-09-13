<!-- BEGIN HEADER-->
<header class="header header--dark">
    <div class="container">
        <div class="header__row"><a href="<?php echo $this->registry->site_url; ?>" class="header__logo">
                <img src="<?php echo SITE_IMAGE; ?>logo--mob.png" alt="Trendy ingatlan"></a>
            <div class="header__settings">
                <div class="header__settings-column">
                    <div class="dropdown dropdown--header">
                        <div id="google_translate_element"></div>
                        <script type="text/javascript">
                            function googleTranslateElementInit() {
                                new google.translate.TranslateElement({pageLanguage: 'hu', includedLanguages: 'de,en,ru', layout: google.translate.TranslateElement.InlineLayout.SIMPLE}, 'google_translate_element');
                            }
                        </script>
                        <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>

                    </div>
                </div>
                <!-- end of block .header__settings-column-->
                <div class="header__contacts">
                    <a href="tel:+12025550135" class="header__phone">
                        <i class="fa fa-phone"></i>
                        <span class="header__span"><?php echo $this->settings['tel']; ?></span>
                    </a>
                </div>
                <div class="header__contacts">
                    <a href="javascript:void()" class="header__phone">
                        <i class="fa fa-envelope"></i>
                        <span class="header__span"><?php echo $this->settings['email']; ?></span>
                    </a>
                </div>
            </div>

            <!-- end of block .header__contacts-->
            <div class="auth auth--header">
                <ul class="auth__nav">

                    <li class="dropdown auth__nav-item">
                        <button data-toggle="dropdown" type="button" class="dropdown-toggle js-auth-nav-btn auth__nav-btn">
                            <i class="fa fa-heart"></i>
                            <span class="header__span"> Kedvencek</span>
                        </button>
                        <div class="dropdown__menu auth__dropdown--login">
                            <!-- BEGIN AUTH LOGIN-->
                            <h5 class="auth__title">Kedvencek listája</h5>

                            <?php if ($this->kedvencek_list) : ?>
                                <?php foreach ($this->kedvencek_list as $value) { ?>
                                    <?php $photo_array = json_decode($value['kepek']); ?>    

                                    <article class="property-item" id="favourite_property_<?php echo $value['id']; ?>">
                                        <div class="span5">
                                            <div class="property-images">
                                                <a href="ingatlanok/adatlap/<?php echo $value['id'] . '/' . Replacer::filterName($value['ingatlan_nev']); ?>" title="<?php echo $value['ingatlan_nev']; ?>">
                                                    <img width="540" height="360" src=" <?php echo Util::thumb_path(Config::get('ingatlan_photo.upload_path') . $photo_array[0]); ?>" class="wp-post-image" alt="<?php echo $value['ingatlan_nev']; ?>" title="<?php echo $value['ingatlan_nev']; ?>" />
                                                </a>
                                                <div id="delete_kedvenc_<?php echo $value['id']; ?>" data-id="<?php echo $value['id']; ?>" class="favourite-delete"><i class="fa fa-trash"></i></div>  




                                            </div><!-- /.property-images -->
                                        </div>
                                        <div class="span7">
                                            <div class="property-attribute">
                                                <span class="attribute-city">
                                                    <?php
                                                    echo $value['city_name'];
                                                    echo (isset($value['kerulet'])) ? ', ' . $value['district_name'] : '';
                                                    ?>
                                                </span>
                                                <h3 class="attribute-title">
                                                    <a href="ingatlanok/adatlap/<?php echo $value['id'] . '/' . Replacer::filterName($value['ingatlan_nev']); ?>" title="<?php echo $value['ingatlan_nev']; ?>" ><?php echo $value['ingatlan_nev']; ?>
                                                    </a>
                                                </h3>

                                                <div class="price">
                                                    <span class="attr-pricing"><?php echo ($value['tipus'] == 1) ? number_format($value['ar_elado'], 0, ',', '.') : number_format($value['ar_kiado'], 0, ',', '.'); ?> Ft</span>
                                                </div>
                                            </div>
                                        </div>

                                    </article>

                                <?php } ?>
                            <?php endif ?>
                            <?php if (empty($this->kedvencek_list)) : ?>
                                A kedvencek listája üres!
                            <?php endif ?>
                            <!-- end of block .auth__form-->
                            <!-- END AUTH LOGIN-->
                        </div>
                    </li>

                </ul>
                <!-- end of block .auth header-->
            </div>
            <button type="button" class="header__navbar-toggle js-navbar-toggle">
                <div class="header__navbar-show">
                    <i class="fa fa-bars"></i>
                </div>
                <div class="header__navbar-hide">
                    <i class="fa fa-times"></i>
                </div>
            </button>
            <!-- end of block .header__navbar-toggle-->
        </div>
    </div>
</header>
<!-- END HEADER-->
<!-- BEGIN NAVBAR-->
<div id="header-nav-offset"></div>
<nav id="header-nav" class="navbar navbar--header">
    <div class="container">
        <div class="navbar__row js-navbar-row"><a href="index.html" class="navbar__brand">
                <div class="navbar__brand-logo navbar__brand-logo--lg">
                    <img src="<?php echo SITE_IMAGE; ?>logo.png" alt="Trendy ingatlan">
                </div>
                <div class="navbar__brand-logo navbar__brand-logo--sm">
                    <img src="<?php echo SITE_IMAGE; ?>logo--mob.png" alt="Trendy ingatlan"></a>
                </div></a>
            <div id="navbar-collapse-1" class="navbar__wrap">
                <ul class="navbar__nav">
                    <li class="navbar__item <?php $this->menu_active('home'); ?>">
                        <a class="navbar__link" href="">Kezdőoldal</a>
                    </li>
                    <li class="navbar__item js-dropdown">
                        <a class="navbar__link">Ingatlanok <i class="fa fa-chevron-down"></i></a>
                        <div role="menu" class="js-dropdown-menu navbar__dropdown">
                            <button class="navbar__back js-navbar-submenu-back">
                                <svg class="navbar__arrow">
                                <use xlink:href="#icon-arrow-left"></use>
                                </svg>Vissza
                            </button>
                            <div class="navbar__submenu">
                                <ul class="navbar__subnav">
                                    <li class="navbar__subitem"><a href="ingatlanok" class="navbar__sublink js-navbar-sublink">Összes ingatlan</a></li>
                                    <li class="navbar__subitem"><a href="ingatlanok?tipus=1" class="navbar__sublink js-navbar-sublink">Eladó ingatlanok</a></li>
                                    <li class="navbar__subitem"><a href="ingatlanok?tipus=2" class="navbar__sublink js-navbar-sublink">Kiadó ingatlanok</a></li>
                                </ul>
                            </div>
                        </div>
                    </li>
                    <li class="navbar__item <?php $this->menu_active('szolgaltatasok'); ?>">
                        <a class="navbar__link" href="#">Szolgáltatások</a>
                    </li>
                    <li class="navbar__item <?php $this->menu_active('hitelek'); ?>">
                        <a class="navbar__link" href="#">Hitelek</a>
                    </li>
                    <li class="navbar__item <?php $this->menu_active('hirek'); ?>">
                        <a class="navbar__link" href="#">Hírek</a>
                    </li>
                    <li class="navbar__item <?php $this->menu_active('kapcsolat'); ?>">
                        <a class="navbar__link" href="#">Kapcsolat</a>
                    </li>


                </ul>
                <!-- end of block  navbar__nav-->
            </div>
        </div>
    </div>
</nav>
<!-- END NAVBAR-->

