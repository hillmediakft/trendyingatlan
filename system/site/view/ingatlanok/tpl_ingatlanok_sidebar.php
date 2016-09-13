            <!-- BEGIN SIDEBAR-->
            <div class="sidebar">
                <!-- BEGIN SEARCH-->
                <button type="button" data-toggle-target=".js-search-form" data-toggle-hide="Hide Filter" data-toggle-show="Show Filter" class="button__toggle js-toggle-btn">Show Filter</button>
                <div class="search js-search-form search--sidebar sidebar--listing">
                    <div class="container">
                        <div class="search__header">
                            <h3 class="search__title">Keresés</h3>
                            <h4 class="search__headline">Szűkítse a találati listát!</h4>
                        </div>
                        <!-- end of block .search__header-->
        <form id="search-form" action="ingatlanok" class="search__form">
            <div class="search__row">
                <div class="search__form-group form-group">
                    <label for="in-contract-type" class="search__form-label control-label">Eladó / kiadó</label>
                    <select id="in-contract-type" name="tipus" data-placeholder="-- válasszon --" class="search__form-control search__form-control--select form-control js-in-select">
                        <option value="1" <?php echo(isset($this->filter['tipus']) && $this->filter['tipus'] == 'Eladó') ? 'selected' : ''?>>Eladó</option>
                        <option value="2" <?php echo(isset($this->filter['tipus']) && $this->filter['tipus'] == 'Kiadó') ? 'selected' : ''?>>Kiadó</option>
                    </select>
                </div>
                <div class="search__form-group form-group"><span class="search__form-label control-label">Település</span>
                    <div class="dropdown dropdown--select">
                        <button type="button" data-toggle="dropdown" data-placeholder="-- mindegy --" class="dropdown-toggle js-select-checkboxes-btn">-- válasszon --</button>
                        <div class="dropdown-menu js-dropdown-menu js-select-checkboxes">
                            <div class="region-select">
                                <ul id="region" class="bonsai region-select__list">
                                  
                                     
                                    <li>
                                        <input id="scom-property-map-1_treeterm_37" type="checkbox" name="varos[]" value="budapest" class="in-checkbox">
                                        <label for="scom-property-map-1_treeterm_37" data-toggle="tooltip" data-placement="top" title="Budapest" class="in-label">Budapest</label>
                                        <ul>
                                            <?php for ($i = 1; $i <= 23; $i++) { ?>
                                                <li>
                                                    <input id="scom-property-map-1_treeterm_<?php echo $i; ?>" type="checkbox" name="kerulet[]" value="<?php echo $i; ?>" class="in-checkbox" <?php echo (Util::in_filter('kerulet', $i)) ? 'checked' : ''; ?>>
                                                    <label for="scom-property-map-1_treeterm_<?php echo $i; ?>" data-toggle="tooltip" data-placement="top" title="<?php echo $i; ?>. kerület" class="in-label"><?php echo $i; ?>. kerület</label>
                                                </li>
                                            <?php } ?>

                                        </ul>
                                    </li>
                                    <?php $map = 2; ?>
                                    <?php $treeterm = $i; ?>
                                    <?php foreach ($this->city_list as $key => $value) : ?>

                                        <li>
                                            <input id="scom-property-map-<?php echo $map; ?>_treeterm_<?php echo $treeterm; ?>" type="checkbox" name="megye[]" value="<?php echo $key; ?>" class="in-checkbox">
                                            <label for="scom-property-map-<?php echo $map; ?>_treeterm_<?php echo $treeterm; ?>" data-toggle="tooltip" data-placement="top" title="<?php echo $key; ?>" class="in-label"><?php echo $key; ?></label>

                                            <ul>
                                                <?php foreach ($value as $city) { ?>
                                                    <?php $treeterm++; ?>
                                                    <li>
                                                        <input id="scom-property-map-<?php echo $map; ?>_treeterm_<?php echo $treeterm; ?>" type="checkbox" name="varos[]" value="<?php echo $city['city_id']; ?>" class="in-checkbox" <?php echo (Util::in_filter('varos', $city['city_id'])) ? 'checked' : ''; ?>>
                                                        <label for="scom-property-map-<?php echo $map; ?>_treeterm_<?php echo $treeterm; ?>" data-toggle="tooltip" data-placement="top" title="<?php echo $city['city_name']; ?>" class="in-label"><?php echo $city['city_name']; ?></label>
                                                    </li>
                                                <?php } ?>
                                            </ul>
                                        </li>
                                        <?php $map++; ?>
                                    <?php endforeach ?>
                                </ul>
                                <div class="region-select__buttons">
                                    <button type="button" class="region-select__btn region-select__btn--reset js-select-checkboxes-reset">Törlés</button>
                                    <button type="button" class="region-select__btn js-select-checkboxes-accept">OK</button>
                                </div>
                            </div>
                            <!-- end of block .region-select-->
                        </div>
                        <!-- end of block .dropdown-menu-->
                    </div>
                </div>
                <div class="search__form-group form-group"><span class="search__form-label control-label">Ingatlan típus</span>
                    <div class="dropdown dropdown--select">
                        <button type="button" data-toggle="dropdown" data-placeholder="---" class="dropdown-toggle js-select-checkboxes-btn">-- válasszon --</button>
                        <div class="dropdown-menu js-dropdown-menu js-select-checkboxes">
                            <ul>
                                <?php $i = 1; ?>
                                <?php foreach ($this->ingatlan_kat_list as $value) : ?>
                                    <li>
                                        <input id="kategoria_<?php echo $i; ?>" type="checkbox" name="kategoria[]" class="in-checkbox" value="<?php echo $value['kat_id']; ?>" <?php echo (Util::in_filter('kategoria', $value['kat_id'])) ? 'checked' : ''; ?>>
                                        <label for="kategoria_<?php echo $i; ?>" data-toggle="tooltip" data-placement="left" title="<?php echo $value['kat_nev']; ?>" class="in-label"><?php echo $value['kat_nev']; ?></label>
                                    </li>
                                    <?php $i++; ?>
                                <?php endforeach ?> 

                            </ul>
                            <!-- end of block .dropdown-menu-->
                        </div>
                    </div>
                </div>


                <div class="search__form-group form-group">
                    <label for="range_price" class="search__form-label control-label">Ár</label>
                    <div class="search__ranges">
                        <input id="range_price" name="range_price" class="js-search-range search__ranges-in">
                    </div>
                </div>
                <div class="search__form-group form-group">
                    <label for="range_area" class="search__form-label control-label">Alapterület</label>
                    <div class="search__ranges">
                        <input id="range_area" name="range_area" class="js-search-range search__ranges-in">
                    </div>
                </div>
                <div class="search__form-group form-group">
                    <label for="range_room" class="search__form-label control-label">Szobák száma</label>
                    <div class="search__ranges">
                        <input id="range_room" name="range_room" class="js-search-range search__ranges-in">
                    </div>
                </div>
            </div>
            <input id="action" type="hidden" name="action" value="search">
            <div class="search__row search__row--buttons">
                <div class="search__buttons">
                    <button type="button" class="search__btn search__btn--reset js-form-reset">Töröl</button>
                    <button type="submit" class="search__btn search__btn--action">Keresés</button>
                </div>
            </div>
        </form>
                        <!-- end of block .search__form#search-form-->
                    </div>
                </div>
                <!-- END SEARCH-->
                <!-- BEGIN PROPERTIES-->
                <div class="properties js-unhide-block properties--sidebar">
                    <button type="button" class="widget__show js-unhide">Show properties</button>
                    <div class="properties__header">
                        <h3 class="properties__title">Popular estate</h3>
                        <h4 class="properties__headline">Find your apartment or house on the exact key parameters.</h4>
                    </div>
                    <!-- end of block  .properties__header-->
                    <div class="properties__list">
                        <div class="properties__item">
                            <div class="properties__thumb"><a href="property_details.html" class="item-photo item-photo--static"><img src="assets/media-demo/properties/554x360/02.jpg" alt="">
                                    <figure class="item-photo__hover"><span class="item-photo__more">View Details</span></figure></a>
                            </div>
                            <!-- end of block .properties__thumb-->
                            <div class="properties__info"><a href="property_details.html" class="properties__address">649 West Adams Boulevard, Los Angeles, CA 90007, USA</a><span class="properties__price">$4,555<span class="properties__price-period">per month</span></span>
                            </div>
                            <!-- end of block .properties__info-->
                        </div>
                        <!-- end of block .properties__item-->
                        <div class="properties__item">
                            <div class="properties__thumb"><a href="property_details.html" class="item-photo item-photo--static"><img src="assets/media-demo/properties/554x360/03.jpg" alt="">
                                    <figure class="item-photo__hover"><span class="item-photo__more">View Details</span></figure></a>
                            </div>
                            <!-- end of block .properties__thumb-->
                            <div class="properties__info"><a href="property_details.html" class="properties__address">958 Dewey Avenue, Los Angeles, CA 90006, USA</a><span class="properties__price">$86,723</span>
                            </div>
                            <!-- end of block .properties__info-->
                        </div>
                        <!-- end of block .properties__item-->
                        <div class="properties__item">
                            <div class="properties__thumb"><a href="property_details.html" class="item-photo item-photo--static"><img src="assets/media-demo/properties/554x360/04.jpg" alt="">
                                    <figure class="item-photo__hover"><span class="item-photo__more">View Details</span></figure></a>
                            </div>
                            <!-- end of block .properties__thumb-->
                            <div class="properties__info"><a href="property_details.html" class="properties__address">1026 Ohio Avenue, Long Beach, CA 90804, USA</a><span class="properties__price">$511,789</span>
                            </div>
                            <!-- end of block .properties__info-->
                        </div>
                        <!-- end of block .properties__item-->
                    </div>
                    <!-- end of block  .properties__list-->
                </div>
                <!-- END PROPERTIES-->
                <!-- BEGIN WORKER SIDEBAR-->
                <section class="worker worker--sidebar js-unhide-block">
                    <button type="button" class="widget__show js-unhide">Show workers</button>
                    <header class="worker__header">
                        <h3 class="worker__title">Our Agents</h3>
                        <h4 class="worker__headline">Find your apartment or house on the exact key parameters.</h4>
                    </header>
                    <!-- end of block .worker__header-->
                    <div class="worker__list">
                        <div data-animate-end="animate-end" class="worker__item vcard">
                            <div class="worker__photo"><a href="agent_listing.html" class="item-photo item-photo--static"><img src="assets/media-demo/workers/worker-1.jpg" alt="Christopher Pakulla" class="photo">
                                    <figure class="item-photo__hover"><span class="item-photo__more">View</span></figure></a></div>
                            <h3 class="worker__name fn">Christopher Pakulla</h3>
                            <div class="worker__post">Realtor, West USA Realty</div><a href="tel:+44(0)2035102390" class="worker__tel uri">+44 (0) 20 3510 2390</a>
                        </div>
                        <!-- end of block .worker__item-->
                        <div data-animate-end="animate-end" class="worker__item vcard">
                            <div class="worker__photo"><a href="agent_listing.html" class="item-photo item-photo--static"><img src="assets/media-demo/workers/worker-2.jpg" alt="Lisa Wemert" class="photo">
                                    <figure class="item-photo__hover"><span class="item-photo__more">View</span></figure></a></div>
                            <h3 class="worker__name fn">Lisa Wemert</h3>
                            <div class="worker__post">Managing Broker/Partner, e-PRO</div><a href="tel:+44(0)203510567" class="worker__tel uri">+44 (0) 20 3510 567</a>
                        </div>
                        <!-- end of block .worker__item-->
                        <div data-animate-end="animate-end" class="worker__item vcard">
                            <div class="worker__photo"><a href="agent_listing.html" class="item-photo item-photo--static"><img src="assets/media-demo/workers/worker-3.jpg" alt="Mariusz Ciesla" class="photo">
                                    <figure class="item-photo__hover"><span class="item-photo__more">View</span></figure></a></div>
                            <h3 class="worker__name fn">Mariusz Ciesla</h3>
                            <div class="worker__post">Real Estate Professional</div><a href="tel:+44(0)203510334" class="worker__tel uri">+44 (0) 20 3510 334</a>
                        </div>
                        <!-- end of block .worker__item-->
                    </div>
                    <!-- end of block .worker__list-->
                </section>
                <!-- END WORKER SIDEBAR-->
                <!-- BEGIN SECTION ARTICLE-->
                <section class="article js-unhide-block article--sidebar">
                    <button type="button" class="widget__show js-unhide">Show articles</button>
                    <div class="article__header">
                        <h3 class="article__title">News & Blog</h3>
                        <h4 class="article__headline">Find your apartment or house on the exact key parameters.</h4>
                    </div>
                    <!-- end of block .article__header-->
                    <div class="article__list">
                        <div class="article__item">
                            <div class="article__details"><a href="blog_details.html" class="article__item-title">You've been approved for a rental home. Now what?</a>
                                <time datetime="2009-08-29" class="article__time">Mon - 3 Sep - 3:17 PM</time>
                                <div class="article__intro">
                                    <p>Congratulations! You've found the perfect rental property and your application has been approved. Now there's just a few things you'll need ...</p>
                                </div><a href="blog_details.html" class="article__more">Read more</a>
                            </div>
                        </div>
                        <!-- end of block .article__item-->
                    </div>
                    <!-- end of block .article__list-->
                </section>
                <!-- END SECTION ARTICLE-->
            </div>
            <!-- END SIDEBAR-->
            <div class="clearfix"></div>

