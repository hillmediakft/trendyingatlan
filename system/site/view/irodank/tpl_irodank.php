<div class="center">
    <div class="container">
        <div class="contacts">
            <header class="contacts__header">
                <h1 class="contacts__title">Irodánk elérhetőségei</h1>
            </header>
            <div class="row">
                <div class="contacts__column">
                    <div class="contacts__address">
                        <address class="contacts__address-item"><span class="contacts__address-title"><i class="fa fa-users fa-2x fa-border"></i>Irodánk és kollégáink</span>
                            <dl class="contacts__address-column">
                                <dt class="contacts__address-column__title"><?php echo $this->settings['ceg']; ?></dt>
                                <dd><?php echo $this->settings['cim']; ?></dd>
                            </dl>
                            <dl class="contacts__address-column">
                                <dt class="contacts__address-column__title">Telefon:</dt>
                                <dd><?php echo (!empty($this->settings['tel'])) ? $this->settings['tel'] : ''; ?></dd>
                                <dd><?php echo (!empty($this->settings['tel_2'])) ? $this->settings['tel_2'] : ''; ?></dd>
                            </dl>
                            <dl class="contacts__address-column">
                                <dt class="contacts__address-column__title">E-mail:</dt>
                                <dd><?php echo Util::safe_mailto($this->settings['email']); ?></dd>

                            </dl>
                        </address>
                        <div class="clearfix"></div>


                        <div class="worker__list">
                             <?php foreach ($this->agents as $value) : ?>
                            <div class="worker--properties">
                                <div class="worker__photo">
                                    <span class="item-photo item-photo--static"><img src="<?php echo Config::get('user.upload_path') . '' . $value['user_photo']; ?>" alt="Mlinárcsik Jóska" class="photo">
                                    </span>
                                </div>
                                <div class="worker__intro">
                                    <h3 class="worker__name fn"><?php echo $value['user_first_name'] . ' ' . $value['user_last_name']; ?></h3>

                                    <!-- end of block .worker__listings-->
                                    <div class="worker__intro-row">
                                        <div class="worker__intro-col">
                                            <div class="worker__contacts">
                                                <div class="tel"><span class="type"><i class="fa fa-phone"></i></span><a href="tel:<?php echo $value['user_phone']; ?>" class="uri value"><?php echo $value['user_phone']; ?></a></div>
                                                <div class="email"><span class="type"><i class="fa fa-envelope"></i></span><?php echo Util::safe_mailto($value['user_email']); ?></div>
                                            </div>
                                            <!-- end of block .worker__contacts-->
                                        </div>
                                    </div>
                                </div>
                                <!-- end of block .worker__item-->
                            </div>
                            <?php endforeach ?>
                           
                            <div class="clearfix"></div>  
                            <!-- end of block .worker__list-->
                        </div>                        

                    </div>

                </div>
                <div class="contacts__column">
                    <span class="contacts__address-title"><i class="fa fa-envelope fa-2x fa-border"></i>Kérdése van, információra van szüksége? Írjon, gyorsan válaszlunk!</span>
                    <div class="contacts__form">
                        <div class="form form--contacts">
                            <form action="send_email/init/contact" method="POST" class="form__wrap js-contact-form" id="contact-form-office">
                                <div class="form__row form-group">
                                    <label for="contact-office-name" class="form__label control-label">Név</label>
                                    <input id="contact-office-name" type="text" name="name" required class="form__in form__in--text form-control">
                                </div>
                                <div class="form__row form__row--tel form-group">
                                    <label for="contact-office-phone" class="form__label control-label">Telefonszám</label>
                                    <input id="contact-office-phone" type="text" name="phone" class="form__in form__in--text form-control">
                                </div>
                                <div class="form__row form__row--email form-group">
                                    <label for="contact-office-email" class="form__label control-label">E-mail cím</label>
                                    <input id="contact-office-email" type="email" name="email" required class="form__in form__in--text form-control">
                                </div>
                                <div class="form__row form-group">
                                    <label for="contact-office-message" class="form__label control-label">Üzenet</label>
                                    <textarea id="contact-office-message" name="message" class="form__in form__in--textarea form-control"></textarea>
                                </div>
                                <input type="text" name="mezes_bodon" id="mezes_bodon">
                                <div id="submit_button_contact_office" class="form__row">
                                    <button type="submit" name="submit_contact_office" id="submit_contact_office"  class="form__submit">Küldés</button>

                                </div>

                            </form>
                        </div>
                        <!-- end of block form-->
                    </div>
                </div>
            </div>
        </div>
        <div class="clearfix"></div>
    </div>
</div>

<div class="contacts__map">
    <div class="map map--contacts">
        <div class="map__buttons">
            <button type="button" class="map__change-map js-map-btn">Térkép</button>
        </div>
        <div class="map__wrap">
            <div data-infobox-theme="white" class="map__view js-map-canvas-contact"></div>
        </div>
    </div>
</div>


