<!-- BEGIN HEADER-->
<header class="header header--white">
    <div class="container">
        <div class="header__row"><a href="index.html" class="header__logo">
                <svg>
                <use xlink:href="#icon-logo--mob"></use>
                </svg></a>
            <div class="header__settings">
                <div class="header__settings-column">
                    <div class="dropdown dropdown--header">
                        <button data-toggle="dropdown" type="button" class="dropdown-toggle dropdown__btn">
                            <svg class="header__settings-icon">
                            <use xlink:href="#icon-money"></use>
                            </svg>USD
                        </button>
                        <div class="dropdown__menu">
                            <ul>
                                <li class="dropdown__item"><a href="#" class="dropdown__link">EUR</a></li>
                                <li class="dropdown__item"><a href="#" class="dropdown__link">RUB</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- end of block .header__settings-column-->

            </div>
            <div class="header__contacts">
                <a href="tel:+12025550135" class="header__phone">
                    <i class="fa fa-phone"></i>
                    <span class="header__span"><?php echo $this->settings['tel']; ?></span>
                </a>
            </div>
            <!-- end of block .header__contacts-->
            <div class="auth auth--header">
                <ul class="auth__nav">
                    <li class="dropdown auth__nav-item">
                        <div class="dropdown__menu auth__dropdown--restore">
                            <!-- BEGIN AUTH RESTORE-->
                            <h5 class="auth__title">Reset password</h5>
                            <form action="#" class="auth__form js-restore-form js-parsley">
                                <div class="auth__row form-group">
                                    <label for="restore-email-dropdown" class="auth__label control-label">Enter your User Name or Email</label>
                                    <input type="email" name="email" id="restore-email-dropdown" required class="auth__in auth__in--text form-control">
                                </div>
                                <div class="auth__row">
                                    <button type="submit" class="auth__in auth__in--submit">Reset password</button>
                                </div>
                                <div class="auth__row"><span class="auth__links">Back to
                                        <button type="button" class="js-user-login">Log In</button>or
                                        <button type="button" class="js-user-register">Registration</button></span>
                                    <!-- end of block .auth__links-->
                                </div>
                            </form>
                            <!-- end of block .auth__form-->
                            <!-- END AUTH RESTORE-->
                        </div>
                    </li>
                    <li class="dropdown auth__nav-item">
                        <button data-toggle="dropdown" type="button" class="dropdown-toggle js-auth-nav-btn auth__nav-btn">
                            <svg class="auth__icon-user">
                            <use xlink:href="#icon-user"></use>
                            </svg><span class="header__span"> Kedvencek /</span>
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
                    <li class="dropdown auth__nav-item">
                        <button data-toggle="dropdown" type="button" class="dropdown-toggle auth__nav-btn"><span class="header__span">  Sign up</span></button>
                        <div class="dropdown__menu auth__dropdown--register">
                            <!-- BEGIN AUTH REGISTER-->
                            <h5 class="auth__title">Sign up a new account</h5>
                            <form action="#" class="auth__form js-register-form js-parsley">
                                <div class="auth__coll form-group">
                                    <label for="register-name-dropdown" class="auth__label control-label">First name</label>
                                    <input type="text" name="username" id="register-name-dropdown" required class="auth__in auth__in--text form-control">
                                </div>
                                <div class="auth__coll auth__coll--right form-group">
                                    <label for="register-lastname-dropdown" class="auth__label control-label">Last name</label>
                                    <input type="text" name="name" id="register-lastname-dropdown" required class="auth__in auth__in--text form-control">
                                </div>
                                <div class="auth__coll auth__coll--email form-group">
                                    <label for="register-email-dropdown" class="auth__label control-label">E-mail</label>
                                    <input type="email" name="email" id="register-email-dropdown" required class="auth__in auth__in--text form-control">
                                </div>
                                <div class="auth__coll auth__coll--right form-group">
                                    <label for="register-password-dropdown" class="auth__label control-label">Password</label>
                                    <input type="password" name="password" id="register-password-dropdown" required class="auth__in auth__in--text form-control">
                                </div>
                                <div class="auth__row"><span class="auth__links">Back to
                                        <button type="button" class="js-user-login">Log In</button></span>
                                    <button type="submit" class="auth__in auth__in--submit">Sign up</button>
                                </div>
                            </form>
                            <!-- end of block .auth__form-->
                            <!-- END AUTH REGISTER-->
                        </div>
                    </li>
                </ul>
                <!-- end of block .auth header-->
            </div>
            <button type="button" class="header__navbar-toggle js-navbar-toggle">
                <svg class="header__navbar-show">
                <use xlink:href="#icon-menu"></use>
                </svg>
                <svg class="header__navbar-hide">
                <use xlink:href="#icon-menu-close"></use>
                </svg>
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
                <svg class="navbar__brand-logo navbar__brand-logo--sm">
                <use xlink:href="#icon-logo--mob"></use>
                </svg></a>
            <div id="navbar-collapse-1" class="navbar__wrap">
                <ul class="navbar__nav">
                    <li class="navbar__item js-dropdown active"><a class="navbar__link">Home
                            <svg class="navbar__arrow">
                            <use xlink:href="#icon-arrow-right"></use>
                            </svg></a>
                        <div role="menu" class="js-dropdown-menu navbar__dropdown navbar__dropdown--colls-1">
                            <button class="navbar__back js-navbar-submenu-back">
                                <svg class="navbar__arrow">
                                <use xlink:href="#icon-arrow-left"></use>
                                </svg>Back
                            </button>
                            <div class="navbar__submenu">
                                <ul class="navbar__subnav">
                                    <li class="navbar__subitem"><a href="index.html" class="navbar__sublink js-navbar-sublink">Banner & Search</a></li>
                                    <li class="navbar__subitem active"><a href="index_slider.html" class="navbar__sublink js-navbar-sublink">Property slider</a></li>
                                    <li class="navbar__subitem"><a href="index_slider_search.html" class="navbar__sublink js-navbar-sublink">Slider & Search</a></li>
                                    <li class="navbar__subitem"><a href="index_slider_auth.html" class="navbar__sublink js-navbar-sublink">Slider & Authorization</a></li>
                                    <li class="navbar__subitem"><a href="index_vmap_light.html" class="navbar__sublink js-navbar-sublink">Google Map & Light search</a></li>
                                    <li class="navbar__subitem"><a href="index_vmap_dark.html" class="navbar__sublink js-navbar-sublink">Google Map & Dark search</a></li>
                                    <li class="navbar__subitem"><a href="index_hmap_light.html" class="navbar__sublink js-navbar-sublink">Google Map & Horizontal search</a></li>
                                    <li class="navbar__subitem"><a href="feature_map_leaflet.html" class="navbar__sublink js-navbar-sublink">Openstreet Map & Filter</a></li>
                                    <li class="navbar__subitem"><a href="feature_vmap_fullscreen.html" class="navbar__sublink js-navbar-sublink">Fullscreen Google Map</a></li>
                                </ul>
                            </div>
                        </div>
                    </li>
                    <li class="navbar__item js-dropdown"><a class="navbar__link">Realty
                            <svg class="navbar__arrow">
                            <use xlink:href="#icon-arrow-right"></use>
                            </svg></a>
                        <div role="menu" class="js-dropdown-menu navbar__dropdown navbar__dropdown--colls-2">
                            <button class="navbar__back js-navbar-submenu-back">
                                <svg class="navbar__arrow">
                                <use xlink:href="#icon-arrow-left"></use>
                                </svg>Back
                            </button>
                            <div class="navbar__submenu">
                                <h5 class="navbar__subtitle">Details</h5>
                                <ul class="navbar__subnav">
                                    <li class="navbar__subitem"><a href="property_details.html" class="navbar__sublink js-navbar-sublink">Property</a></li>
                                    <li class="navbar__subitem"><a href="property_details_agent.html" class="navbar__sublink js-navbar-sublink">Property & agent</a></li>
                                </ul>
                            </div>
                            <div class="navbar__submenu">
                                <h5 class="navbar__subtitle">Listing</h5>
                                <ul class="navbar__subnav">
                                    <li class="navbar__subitem navbar__subitem-dropdown js-dropdown"><a class="navbar__sublink js-navbar-sublink">Grid
                                            <svg class="navbar__arrow">
                                            <use xlink:href="#icon-arrow-right"></use>
                                            </svg></a>
                                        <div class="navbar__submenu navbar__submenu--level">
                                            <button class="navbar__back js-navbar-submenu-back">
                                                <svg class="navbar__arrow">
                                                <use xlink:href="#icon-arrow-left"></use>
                                                </svg>Back
                                            </button>
                                            <ul class="navbar__subnav">
                                                <li class="navbar__subitem"><a href="feature_grid_large.html" class="navbar__sublink js-navbar-sub-sublink">Large</a></li>
                                                <li class="navbar__subitem"><a href="properties_listing_grid.html" class="navbar__sublink js-navbar-sub-sublink">Medium</a></li>
                                                <li class="navbar__subitem"><a href="feature_grid_small.html" class="navbar__sublink js-navbar-sub-sublink">Small</a></li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li class="navbar__subitem"><a href="properties_listing.html" class="navbar__sublink js-navbar-sublink">List</a></li>
                                    <li class="navbar__subitem"><a href="properties_listing_empty.html" class="navbar__sublink js-navbar-sublink">Empty</a></li>
                                </ul>
                            </div>
                        </div>
                    </li>
                    <li class="navbar__item js-dropdown"><a class="navbar__link">Agents
                            <svg class="navbar__arrow">
                            <use xlink:href="#icon-arrow-right"></use>
                            </svg></a>
                        <div role="menu" class="js-dropdown-menu navbar__dropdown">
                            <button class="navbar__back js-navbar-submenu-back">
                                <svg class="navbar__arrow">
                                <use xlink:href="#icon-arrow-left"></use>
                                </svg>Back
                            </button>
                            <div class="navbar__submenu">
                                <ul class="navbar__subnav">
                                    <li class="navbar__subitem"><a href="agents_listing_grid.html" class="navbar__sublink js-navbar-sublink">Agent grid</a></li>
                                    <li class="navbar__subitem"><a href="agents_listing.html" class="navbar__sublink js-navbar-sublink">Agent list</a></li>
                                    <li class="navbar__subitem"><a href="agent_listing.html" class="navbar__sublink js-navbar-sublink">Agent's properties</a></li>
                                    <li class="navbar__subitem"><a href="agent_listing_sidebar.html" class="navbar__sublink js-navbar-sublink">Sidebar agent's properties</a></li>
                                </ul>
                            </div>
                        </div>
                    </li>
                    <li class="navbar__item js-dropdown"><a class="navbar__link">User
                            <svg class="navbar__arrow">
                            <use xlink:href="#icon-arrow-right"></use>
                            </svg></a>
                        <div role="menu" class="js-dropdown-menu navbar__dropdown navbar__dropdown--colls-2">
                            <button class="navbar__back js-navbar-submenu-back">
                                <svg class="navbar__arrow">
                                <use xlink:href="#icon-arrow-left"></use>
                                </svg>Back
                            </button>
                            <div class="navbar__submenu">
                                <h5 class="navbar__subtitle">Pages</h5>
                                <ul class="navbar__subnav">
                                    <li class="navbar__subitem"><a href="my_listings.html" class="navbar__sublink js-navbar-sublink">My listings</a></li>
                                    <li class="navbar__subitem"><a href="my_listings_add_edit.html" class="navbar__sublink js-navbar-sublink">Property submit</a></li>
                                    <li class="navbar__subitem"><a href="my_profile.html" class="navbar__sublink js-navbar-sublink">Profile</a></li>
                                </ul>
                            </div>
                            <div class="navbar__submenu">
                                <h5 class="navbar__subtitle">Auth</h5>
                                <ul class="navbar__subnav">
                                    <li class="navbar__subitem"><a href="user_login.html" class="navbar__sublink js-navbar-sublink">Login</a></li>
                                    <li class="navbar__subitem"><a href="user_register.html" class="navbar__sublink js-navbar-sublink">Register</a></li>
                                    <li class="navbar__subitem"><a href="user_restore_pass.html" class="navbar__sublink js-navbar-sublink">Restore</a></li>
                                </ul>
                            </div>
                        </div>
                    </li>
                    <li class="navbar__item"><a href="gallery.html" class="navbar__link">Gallery</a></li>
                    <li class="navbar__item js-dropdown"><a class="navbar__link">Blog
                            <svg class="navbar__arrow">
                            <use xlink:href="#icon-arrow-right"></use>
                            </svg></a>
                        <div role="menu" class="js-dropdown-menu navbar__dropdown navbar__dropdown--colls-1">
                            <button class="navbar__back js-navbar-submenu-back">
                                <svg class="navbar__arrow">
                                <use xlink:href="#icon-arrow-left"></use>
                                </svg>Back
                            </button>
                            <div class="navbar__submenu">
                                <ul class="navbar__subnav">
                                    <li class="navbar__subitem"><a href="blog.html" class="navbar__sublink js-navbar-sublink">Blog list</a></li>
                                    <li class="navbar__subitem"><a href="blog_details.html" class="navbar__sublink js-navbar-sublink">Blog details</a></li>
                                    <li class="navbar__subitem"><a href="blog_empty.html" class="navbar__sublink js-navbar-sublink">Blog empty</a></li>
                                </ul>
                            </div>
                        </div>
                    </li>
                    <li class="navbar__item js-dropdown"><a class="navbar__link">Pages
                            <svg class="navbar__arrow">
                            <use xlink:href="#icon-arrow-right"></use>
                            </svg></a>
                        <div role="menu" class="js-dropdown-menu navbar__dropdown navbar__dropdown--colls-1">
                            <button class="navbar__back js-navbar-submenu-back">
                                <svg class="navbar__arrow">
                                <use xlink:href="#icon-arrow-left"></use>
                                </svg>Back
                            </button>
                            <div class="navbar__submenu">
                                <ul class="navbar__subnav">
                                    <li class="navbar__subitem"><a href="page.html" class="navbar__sublink js-navbar-sublink">Сontent page</a></li>
                                    <li class="navbar__subitem"><a href="faq.html" class="navbar__sublink js-navbar-sublink">Faq</a></li>
                                    <li class="navbar__subitem"><a href="reviews.html" class="navbar__sublink js-navbar-sublink">Testimonials</a></li>
                                    <li class="navbar__subitem"><a href="pricing.html" class="navbar__sublink js-navbar-sublink">Pricing</a></li>
                                    <li class="navbar__subitem"><a href="email.html" class="navbar__sublink js-navbar-sublink">Email template</a></li>
                                    <li class="navbar__subitem navbar__subitem-dropdown js-dropdown"><a class="navbar__sublink js-navbar-sublink">Errors
                                            <svg class="navbar__arrow">
                                            <use xlink:href="#icon-arrow-right"></use>
                                            </svg></a>
                                        <div class="navbar__submenu navbar__submenu--level">
                                            <button class="navbar__back js-navbar-submenu-back">
                                                <svg class="navbar__arrow">
                                                <use xlink:href="#icon-arrow-left"></use>
                                                </svg>Back
                                            </button>
                                            <ul class="navbar__subnav">
                                                <li class="navbar__subitem"><a href="error_403.html" class="navbar__sublink js-navbar-sub-sublink">403 Error</a></li>
                                                <li class="navbar__subitem"><a href="error_404.html" class="navbar__sublink js-navbar-sub-sublink">404 Error</a></li>
                                                <li class="navbar__subitem"><a href="error_500.html" class="navbar__sublink js-navbar-sub-sublink">500 Error</a></li>
                                            </ul>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </li>
                    <li class="navbar__item"><a href="contacts.html" class="navbar__link">Contacts</a></li>
                    <li class="navbar__item js-dropdown"><a class="navbar__link">UI
                            <svg class="navbar__arrow">
                            <use xlink:href="#icon-arrow-right"></use>
                            </svg></a>
                        <div role="menu" class="js-dropdown-menu navbar__dropdown navbar__dropdown--right navbar__dropdown--colls-2">
                            <button class="navbar__back js-navbar-submenu-back">
                                <svg class="navbar__arrow">
                                <use xlink:href="#icon-arrow-left"></use>
                                </svg>Back
                            </button>
                            <div class="navbar__submenu">
                                <h5 class="navbar__subtitle">Variations</h5>
                                <ul class="navbar__subnav">
                                    <li class="navbar__subitem"><a href="feature_header_small.html" class="navbar__sublink js-navbar-sublink">Header small</a></li>
                                    <li class="navbar__subitem"><a href="feature_boxed.html" class="navbar__sublink js-navbar-sublink">Layout boxed</a></li>
                                    <li class="navbar__subitem"><a href="feature_left_sidebar.html" class="navbar__sublink js-navbar-sublink">Sidebar left</a></li>
                                </ul>
                            </div>
                            <div class="navbar__submenu">
                                <h5 class="navbar__subtitle">Elements</h5>
                                <ul class="navbar__subnav">
                                    <li class="navbar__subitem"><a href="feature_ui.html" class="navbar__sublink js-navbar-sublink">UI</a></li>
                                    <li class="navbar__subitem"><a href="feature_typography.html" class="navbar__sublink js-navbar-sublink">Typography</a></li>
                                    <li class="navbar__subitem"><a href="feature_loaders.html" class="navbar__sublink js-navbar-sublink">Feature loaders</a></li>
                                    <li class="navbar__subitem"><a href="bootstrap.html" class="navbar__sublink js-navbar-sublink">Twitter Bootstrap</a></li>
                                </ul>
                            </div>
                        </div>
                    </li>
                    <li class="navbar__item navbar__item--mob js-dropdown"><a class="navbar__link">Language
                            <svg class="navbar__arrow">
                            <use xlink:href="#icon-arrow-right"></use>
                            </svg></a>
                        <div role="menu" class="js-dropdown-menu navbar__dropdown navbar__dropdown--right">
                            <button class="navbar__back js-navbar-submenu-back">
                                <svg class="navbar__arrow">
                                <use xlink:href="#icon-arrow-left"></use>
                                </svg>Back
                            </button>
                            <div class="navbar__submenu">
                                <ul class="navbar__subnav">
                                    <li class="navbar__subitem active"><a href="" class="navbar__sublink js-navbar-sublink">English</a></li>
                                    <li class="navbar__subitem"><a href="" class="navbar__sublink js-navbar-sublink">Francais</a></li>
                                    <li class="navbar__subitem"><a href="" class="navbar__sublink js-navbar-sublink">Italian</a></li>
                                    <li class="navbar__subitem"><a href="" class="navbar__sublink js-navbar-sublink">Russian</a></li>
                                </ul>
                            </div>
                        </div>
                    </li>
                    <li class="navbar__item navbar__item--mob js-dropdown"><a class="navbar__link">Currency
                            <svg class="navbar__arrow">
                            <use xlink:href="#icon-arrow-right"></use>
                            </svg></a>
                        <div role="menu" class="js-dropdown-menu navbar__dropdown navbar__dropdown--right">
                            <button class="navbar__back js-navbar-submenu-back">
                                <svg class="navbar__arrow">
                                <use xlink:href="#icon-arrow-left"></use>
                                </svg>Back
                            </button>
                            <div class="navbar__submenu">
                                <ul class="navbar__subnav">
                                    <li class="navbar__subitem active"><a href="" class="navbar__sublink js-navbar-sublink">USD</a></li>
                                    <li class="navbar__subitem"><a href="" class="navbar__sublink js-navbar-sublink">EURO</a></li>
                                    <li class="navbar__subitem"><a href="" class="navbar__sublink js-navbar-sublink">RUB</a></li>
                                </ul>
                            </div>
                        </div>
                    </li>
                    <li class="navbar__item navbar__item--mob js-dropdown"><a class="navbar__link">Measures
                            <svg class="navbar__arrow">
                            <use xlink:href="#icon-arrow-right"></use>
                            </svg></a>
                        <div role="menu" class="js-dropdown-menu navbar__dropdown navbar__dropdown--right">
                            <button class="navbar__back js-navbar-submenu-back">
                                <svg class="navbar__arrow">
                                <use xlink:href="#icon-arrow-left"></use>
                                </svg>Back
                            </button>
                            <div class="navbar__submenu">
                                <div class="switch switch--menu">
                                    <label>M <sup>2</sup>
                                        <input type="checkbox" checked><span class="lever"></span>Sq Ft
                                    </label>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
                <!-- end of block  navbar__nav-->
            </div>
        </div>
    </div>
</nav>
<!-- END NAVBAR-->

