<div class="center">
    <div class="container">
        <div class="row">
            <!-- BEGIN PROPERTY DETAILS-->
            <div class="datasheet">
                <div class="row">
                    <div class="col-md-7">
                        <h1 class="property__title"><?php echo $this->property_data['ingatlan_nev']; ?>
                            <span class="property__city">
                                <?php
                                echo $this->property_data['city_name'];
                                echo (isset($this->property_data['kerulet'])) ? ', ' . $this->property_data['district_name'] . ' kerület' : '';
                                echo ($this->property_data['utca_megjelenites'] == 1) ? ', ' . $this->property_data['utca'] : '';
                                echo ($this->property_data['hazszam_megjelenites'] == 1) ? ' ' . $this->property_data['hazszam'] : '';
                                ?>
                            </span>
                        </h1>
                        <div class="property__price">
                            <strong> 
                                <?php echo ($this->property_data['tipus'] == 1) ? 'Ár: ' . number_format($this->property_data['ar_elado'], 0, ',', '.') : 'Bérleti díj: ' . number_format($this->property_data['ar_kiado'], 0, ',', '.'); ?> Ft
                            </strong>
                        </div>
                        <div class="social social--properties">
                            <div id="kedvencek_<?php echo $this->property_data['id']; ?>" data-id="<?php echo $this->property_data['id']; ?>" class="properties__favourite_datasheet <?php echo (Cookie::is_id_in_cookie('kedvencek', $this->property_data['id'])) ? 'selected-favourite' : ''; ?>"> <i class="fa fa-heart"></i>
                            </div>
                        </div>
                        <div class="clearfix"></div>

                        <?php if ($this->property_data['kepek'] == null) { ?> 
                            <div class="alert alert-info">Az ingatlanhoz nincsenek megjeleníthető képek!</div>
                        <?php } ?>  
                        <?php if ($this->property_data['kepek']) { ?>
                            <div class="property__slider">
                                <div class="property__ribon"><?php echo ($this->property_data['tipus'] == 1) ? 'Eladó' : 'Kiadó'; ?></div>
                                <div id="properties-banner" class="slider slider--small">
                                    <div class="slider__block js-slick-slider">
                                        <?php foreach ($this->photos as $value) { ?>
                                            <div class="slider__item">
                                                <div class="slider__img"><img data-lazy="<?php echo Config::get('ingatlan_photo.upload_path') . '/' . $value; ?>" src="<?php echo Config::get('ingatlan_photo.upload_path') . '/' . $value; ?>" alt=""></div>
                                            </div>
                                        <?php } ?>

                                    </div>
                                    <div class="slider__controls">
                                        <button type="button" class="slider__control slider__control--prev js-slick-prev">
                                            <svg class="slider__control-icon">
                                            <use xlink:href="#icon-arrow-left"></use>
                                            </svg>
                                        </button><span class="slider__current js-slick-current">1 /</span><span class="slider__total js-slick-total">9</span>
                                        <button type="button" class="slider__control slider__control--next js-slick-next">
                                            <svg class="slider__control-icon">
                                            <use xlink:href="#icon-arrow-right"></use>
                                            </svg>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>

                    </div>

                    <!-- end of block .property-->
                    <!-- END PROPERTY DETAILS-->
                    <!-- BEGIN SIDEBAR-->
                    <div class="col-md-5">


                        <!-- BEGIN WORKER SIDEBAR-->


                        <!-- BEGIN SECTION ARTICLE-->
                        <section class="article js-unhide-block article--sidebar">
                            <!-- end of block .article__header-->
                            <div class="article__list">
                                <div class="article__item">

                                    <div class="property__info">
                                        <div class="property__id"><span>Azonosító: </span><strong><?php echo $this->property_data['id']; ?></strong></div>
                                        <div class="property__type"><span>Kategória: </span><strong><?php echo $this->property_data['kat_nev']; ?></strong></div>
                                    </div>
                                    <div class="property__plan">
                                        <dl class="property__plan-item">
                                            <dd class="property__plan-title">Alapterület</dd>
                                            <dd class="property__plan-value"><?php echo $this->property_data['alapterulet']; ?> m<sup>2</sup></dd>
                                        </dl>
                                        <dl class="property__plan-item">
                                            <dd class="property__plan-title">Szobaszám</dd>
                                            <dd class="property__plan-value"><?php echo $this->property_data['szobaszam']; ?></dd>
                                        </dl>
                                        <dl class="property__plan-item">
                                            <dd class="property__plan-title">Állapot</dd>
                                            <dd class="property__plan-value"><?php echo $this->property_data['all_leiras']; ?></dd>
                                        </dl>
                                    </div>
                                    
                                     <div class="property__plan">
                                        <dl class="property__plan-item">
                                            <dd class="property__plan-title">Szerkezet</dd>
                                            <dd class="property__plan-value"><?php echo $this->property_data['szerkezet_leiras']; ?></dd>
                                        </dl>
                                        <dl class="property__plan-item">
                                            <dd class="property__plan-title">Fűtés</dd>
                                            <dd class="property__plan-value"><?php echo $this->property_data['futes_leiras']; ?></dd>
                                        </dl>
                                        <dl class="property__plan-item">
                                            <dd class="property__plan-title">Állapot</dd>
                                            <dd class="property__plan-value"><?php echo $this->property_data['all_leiras']; ?></dd>
                                        </dl>
                                    </div>                                   



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
                </div>

                <div class="row">
                    <div class="col-md-7">

                        <div class="property__params">
                            <h4 class="property__subtitle">The space</h4>
                            <ul class="property__params-list">
                                <li>Year Built:<strong>1971</strong></li>
                                <li>Number of Parking Spaces:<strong>24</strong></li>
                                <li>Garage Size In Square Feet:<strong>50</strong></li>
                                <li>Basement:<strong>Full</strong></li>
                                <li>External<strong>Construction: Terace</strong></li>
                                <li>Roofing:<strong>New</strong></li>
                                <li>Exterior Material:<strong>Brick</strong></li>
                                <li>Structure Type:<strong>Mansion</strong></li>
                                <li>Doors &amp; windows:<strong>Double Pane Windows, Skylights</strong></li>
                                <li>Fireplace description:<strong> Brick</strong></li>
                                <li>Fireplace fuel:<strong>Uses Both Gas &amp; Wood</strong></li>
                                <li>Fireplace location:<strong>Living Room</strong></li>
                                <li>Floors:<strong>Carpet - Partial, Ceramic Tile</strong></li>
                                <li>Plumbing:<strong>Full Copper Plumbing/</strong></li>
                                <li>Garage Size In Square Feet:<strong>500</strong></li>
                                <li>Basement:<strong>Full</strong></li>
                                <li>Available From:<strong>2013-05-29</strong></li>
                                <li>MLS ID #:<strong>0</strong></li>
                            </ul>
                        </div>
                        <div class="property__params">
                            <h4 class="property__subtitle">Amenities</h4>
                            <ul class="property__params-list property__params-list--options">
                                <li>Wireless Internet</li>
                                <li>Kitchen</li>
                                <li>Internet</li>
                                <li>Air Conditioning</li>
                                <li>Heating</li>
                                <li>Smoking Allowed</li>
                                <li>Wheelchair Accessible</li>
                                <li>Washer</li>
                                <li>Dryer</li>
                                <li>TV</li>
                                <li>Suitable for Events</li>
                                <li>Smoking Allowed</li>
                                <li>Wheelchair Accessible</li>
                                <li>Elevator in Building</li>
                                <li>Indoor Fireplace</li>
                                <li>Buzzer/Wireless Intercom</li>
                                <li>Doorman</li>
                                <li>Pool</li>
                                <li>Hot Tub</li>
                                <li>Gym</li>
                            </ul>
                        </div>
                        <div class="property__description js-unhide-block">
                            <h4 class="property__subtitle">Description</h4>
                            <div class="property__description-wrap">
                                <p>Center of the Meatpacking district. Spacious room with queen Sized bed, Large desk and lots of windows and light. In a large apt with huge private outdoor patio! (Very rare in the city) washer dryer/ Gourmet kitchen. Close to the city&apos;s best night clubs, restaurants and shopping</p>
                                <p>This is a spacious private room for rent in my Large 2 bedroom apt with large outdoor patio suitable for eating in the heart of the Meat-Packing District. right across the street from the chelsea market and just steps away from the cites best shopping, restaurants, and night-life</p>
                                <p>
                                    The apartment is newly renovated with brand new furniture and appliances. It&apos;s a clean and cozy oasis in the coolest neighborhood in nyc.
                                    The private outdoor patio is huge and has a covered eating area, a gas Webber BBQ , 2 lounge chairs for sunbathing and plenty of space to just hang out.
                                </p>
                                <p>The bedroom has a queen-sized bed that sleeps 2 and a large desk, a 32 inch flatscreen cable/tv, with 3 large windows overlooking the posh area we call the meatpacking district.</p>
                                <p>
                                    The bathroom has a shower/tub (perfect for soaking) with sliding glass doors. (towels and bedding provided)
                                    Living room has a new huge leather sectional couch that comfortably holds 5 for movies/meals or just hanging.There is a brand new 42&quot; flat screen TV mounted on the wall. with playstation 3, dvd, and free cable TV w DVR.
                                    this apartment also has a dj booth for anyone that is experienced. or an iPod dock for ppl that just want to play music that way
                                    The kitchen is very large with black marble counter tops,and bar to eat and hang out. It has all the appliances you&apos;ll need including trash compactor, dishwasher, stove/over, toaster, blender and enough space for a chef and several helpers. Air conditioning. And yes, the apartment does have free wireless Internet access.
                                </p>
                            </div>
                            <button type="button" class="property__btn-more js-unhide">More information ...</button>
                        </div>
                        <div class="property__files js-unhide-block">
                            <h4 class="property__subtitle">Property attachment:</h4><a href="#" class="property__files-item">
                                <svg class="property__files-icon">
                                <use xlink:href="#icon-doc"></use>
                                </svg>Estate plan</a><a href="#" class="property__files-item">
                                <svg class="property__files-icon">
                                <use xlink:href="#icon-doc"></use>
                                </svg>Rules</a><a href="#" class="property__files-item">
                                <svg class="property__files-icon">
                                <use xlink:href="#icon-doc"></use>
                                </svg>Demo</a>
                        </div>
                        <button type="button" class="property__files-show js-unhide">Show attachments</button>
                        <div class="property__map map map--properties">
                            <div class="map__buttons">
                                <button type="button" class="map__change-map js-map-btn active">Property Map</button>
                                <button type="button" class="map__change-panorama js-panorama-btn">Street view</button>
                            </div>
                            <div class="map__wrap">
                                <div data-type="map" class="map__view js-map-canvas"></div>
                                <div data-type="panorama" class="map__view map__view--panorama js-map-canvas"></div>
                            </div>
                        </div>
                        <div class="property__contact js-unhide-block">
                            <h4 class="property__subtitle">Contact the Agent</h4>
                            <div class="property__contact-agent worker--properties">
                                <div data-animate-end="animate-end" class="worker__item vcard">
                                    <div class="worker__photo"><a href="agent_listing.html" class="item-photo item-photo--static"><img src="assets/media-demo/workers/worker-1.jpg" alt="Christopher Pakulla" class="photo">
                                            <figure class="item-photo__hover"><span class="item-photo__more">View Details</span></figure></a></div>
                                    <div class="worker__intro">
                                        <h3 class="worker__name fn">Christopher Pakulla</h3>
                                        <div class="worker__post">Realtor, West USA Realty</div>
                                        <button type="button" class="worker__show js-unhide">Contact agent</button>
                                        <div class="worker__listings"><i class="worker__favorites worker__favorites--highlight"></i> My Listings -<a href="agent_listing.html">12 property</a></div>
                                        <!-- end of block .worker__listings-->
                                        <div class="worker__intro-row">
                                            <div class="worker__intro-col">
                                                <div class="worker__contacts">
                                                    <div class="tel"><span class="type">Tel.</span><a href="tel:+44(0)2035102390" class="uri value">+44 (0) 20 3510 2390</a></div>
                                                    <div class="tel"><span class="type">Mob.</span><a href="tel:+44(0)30345207210" class="uri value">+44 (0) 303 4520 7210</a></div>
                                                    <div class="email"><span class="type">Email</span><a href="mailto:rs@realtyspace.com" class="uri value">rs@realtyspace.com</a></div>
                                                    <div class="skype"><span class="type">Skype</span><a href="skype:Walkenboy?call" class="uri value">Walkenboy</a></div>
                                                </div>
                                                <!-- end of block .worker__contacts-->
                                            </div>
                                            <div class="worker__intro-col">
                                                <div class="social social--worker"><a href="#" class="social__item"><i class="fa fa-facebook"></i></a><a href="#" class="social__item"><i class="fa fa-linkedin"></i></a><a href="#" class="social__item"><i class="fa fa-twitter"></i></a><a href="#" class="social__item"><i class="fa fa-google-plus"></i></a></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="worker__descr">
                                        <p>I&apos;m an entrepreneur who loves to travel and splits time between New York and Los Angeles. Believer in the golden rule: Do unto others as you would have them do unto you. Favorite destinations include Cabo San Lucas, Costa Rica, Turks &amp; Caicos...sunny beaches are ideal vacation spots</p>
                                        <p>Our team of agents are ready to help you reach your real estate goals by making your needs our number one priority. We recognize you have a choice when it comes to working with a real estate professional. We look forward to earning your trust and helping you discover the smarter way to buy or sell a home. Our combined real estate experience and unparalled knowledge of the region are at your service.</p>
                                        <p>We recognize you have a choice when it comes to working with a real estate professional. We look forward to earning your trust and helping you discover the smarter way to buy or sell a home.</p>
                                    </div>
                                    <!-- end of block .worker__descr-->
                                    <div class="clearfix"></div>
                                </div>
                                <!-- end of block .worker__item-->
                            </div>
                            <div class="property__contact-form">
                                <div class="form form--properties">
                                    <form action="#" method="POST" class="form__wrap js-contact-form">
                                        <div class="form__row form-group">
                                            <label for="in-form-name" class="form__label control-label">Your Name</label>
                                            <input id="in-form-name" type="text" name="name" required class="form__in form__in--text form-control">
                                        </div>
                                        <div class="form__row form__row--tel form-group">
                                            <label for="in-form-phone" class="form__label control-label">Telephone</label>
                                            <input id="in-form-phone" type="text" name="phone" class="form__in form__in--text form-control">
                                        </div>
                                        <div class="form__row form__row--email form-group">
                                            <label for="in-form-email" class="form__label control-label">E-mail</label>
                                            <input id="in-form-email" type="email" name="email" required data-parsley-trigger="change" class="form__in form__in--text form-control">
                                        </div>
                                        <div class="form__row form-group">
                                            <label for="in-form-message" class="form__label control-label">Message</label>
                                            <textarea id="in-form-message" name="message" required data-parsley-trigger="keyup" data-parsley-minlength="20" data-parsley-validation-threshold="10" data-parsley-minlength-message="You need to enter at least a 20 caracters long comment.." class="form__in form__in--textarea form-control"></textarea>
                                        </div>
                                        <div class="form__row">
                                            <button type="submit" class="form__submit">Submit</button>
                                        </div>
                                    </form>
                                </div>
                                <!-- end of block form-->
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                    <div class="col-md-5">
                        <!-- BEGIN PROPERTIES-->
                        <div class="properties js-unhide-block properties--sidebar">

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
                </div>                


                <div class="properties properties--similar js-unhide-block">
                    <div class="container">
                        <button type="button" class="widget__show js-unhide">Show Similar properties</button>
                        <header class="properties__header">
                            <h1 class="properties__title">Similar properties</h1>
                        </header>
                        <div class="properties__list">
                            <div class="properties__item">
                                <div class="properties__thumb"><a href="property_details.html" class="item-photo"><img src="assets/media-demo/properties/554x360/02.jpg" alt="">
                                        <figure class="item-photo__hover item-photo__hover--params"><span class="properties__param-type">Self Storage</span><span class="properties__param"><span class="properties__param-column"><span class="properties__param-label">Area:</span><span class="properties__param-value">371 m2</span></span><span class="properties__param-column"><span class="properties__param-label">Beds:</span><span class="properties__param-value">2</span></span><span class="properties__param-column"><span class="properties__param-label">Baths:</span><span class="properties__param-value">1</span></span></span></figure></a><span class="properties__ribon">For rent</span>
                                </div>
                                <!-- end of block .properties__thumb-->
                                <div class="properties__info"><a href="property_details.html" class="properties__address"><span class="properties__address-street">649 West Adams Boulevard</span><span class="properties__address-city">Los Angeles, CA 90007, USA</span></a><a href="property_details.html" class="properties__more">View details</a>
                                    <!-- end of block .properties__param--><span class="properties__price">$4,555<span class="properties__price-period">per month</span></span>
                                </div>
                                <!-- end of block .properties__info-->
                            </div>
                            <!-- end of block .properties__item-->
                            <div class="properties__item">
                                <div class="properties__thumb"><a href="property_details.html" class="item-photo"><img src="assets/media-demo/properties/554x360/03.jpg" alt="">
                                        <figure class="item-photo__hover item-photo__hover--params"><span class="properties__param-type">Mixed-Use</span><span class="properties__param"><span class="properties__param-column"><span class="properties__param-label">Area:</span><span class="properties__param-value">190 m2</span></span><span class="properties__param-column"><span class="properties__param-label">Beds:</span><span class="properties__param-value">2</span></span><span class="properties__param-column"><span class="properties__param-label">Baths:</span><span class="properties__param-value">1</span></span></span></figure></a><span class="properties__ribon">For sale</span>
                                </div>
                                <!-- end of block .properties__thumb-->
                                <div class="properties__info"><a href="property_details.html" class="properties__address"><span class="properties__address-street">958 Dewey Avenue</span><span class="properties__address-city">Los Angeles, CA 90006, USA</span></a><a href="property_details.html" class="properties__more">View details</a>
                                    <!-- end of block .properties__param--><span class="properties__price">$86,723</span>
                                </div>
                                <!-- end of block .properties__info-->
                            </div>
                            <!-- end of block .properties__item-->
                            <div class="properties__item">
                                <div class="properties__thumb"><a href="property_details.html" class="item-photo"><img src="assets/media-demo/properties/554x360/04.jpg" alt="">
                                        <figure class="item-photo__hover item-photo__hover--params"><span class="properties__param-type">Multifamily</span><span class="properties__param"><span class="properties__param-column"><span class="properties__param-label">Area:</span><span class="properties__param-value">526 m2</span></span><span class="properties__param-column"><span class="properties__param-label">Beds:</span><span class="properties__param-value">1</span></span><span class="properties__param-column"><span class="properties__param-label">Baths:</span><span class="properties__param-value">1</span></span></span></figure></a><span class="properties__ribon">For sale</span>
                                </div>
                                <!-- end of block .properties__thumb-->
                                <div class="properties__info"><a href="property_details.html" class="properties__address"><span class="properties__address-street">1026 Ohio Avenue</span><span class="properties__address-city">Long Beach, CA 90804, USA</span></a><a href="property_details.html" class="properties__more">View details</a>
                                    <!-- end of block .properties__param--><span class="properties__price">$511,789</span>
                                </div>
                                <!-- end of block .properties__info-->
                            </div>
                            <!-- end of block .properties__item-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END CENTER SECTION-->