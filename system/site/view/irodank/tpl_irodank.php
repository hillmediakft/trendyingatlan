<div class="center">
    <div class="container">
        <div class="contacts">
            <header class="contacts__header">
                <h1 class="contacts__title">Irodánk elérhetőségei</h1>
                <h2 class="contacts__headline">Lépjen velünk kapcsolatba!</h2>
            </header>
            <div class="row">
                <div class="contacts__column">
                    <div class="contacts__address">
                        <address class="contacts__address-item"><span class="contacts__address-title">Irodánk</span>
                            <dl class="contacts__address-column">
                                <dt class="contacts__address-column__title"><?php echo $this->settings['ceg'];?></dt>
                                <dd><?php echo $this->settings['cim'];?></dd>
                            </dl>
                            <dl class="contacts__address-column">
                                <dt class="contacts__address-column__title">Telefon:</dt>
                                <dd><?php echo $this->settings['tel'];?></dd>

                            </dl>
                            <dl class="contacts__address-column">
                                <dt class="contacts__address-column__title">E-mail:</dt>
                                <dd><?php echo Util::safe_mailto($this->settings['email']);?></dd>

                            </dl>
                        </address>
                    </div>

                </div>
                <div class="contacts__column">
                    <div class="contacts__form">
                        <div class="form form--contacts">
                            <form action="#" method="POST" class="form__wrap js-contact-form">
                                <div class="form__row form-group">
                                    <label for="in-form-name" class="form__label control-label">Név</label>
                                    <input id="in-form-name" type="text" name="name" required class="form__in form__in--text form-control">
                                </div>
                                <div class="form__row form__row--tel form-group">
                                    <label for="in-form-phone" class="form__label control-label">Telefonszám</label>
                                    <input id="in-form-phone" type="text" name="phone" class="form__in form__in--text form-control">
                                </div>
                                <div class="form__row form__row--email form-group">
                                    <label for="in-form-email" class="form__label control-label">E-mail cím</label>
                                    <input id="in-form-email" type="email" name="email" required data-parsley-trigger="change" class="form__in form__in--text form-control">
                                </div>
                                <div class="form__row form-group">
                                    <label for="in-form-message" class="form__label control-label">Üzenet</label>
                                    <textarea id="in-form-message" name="message" required data-parsley-trigger="keyup" data-parsley-minlength="20" data-parsley-validation-threshold="10" data-parsley-minlength-message="You need to enter at least a 20 caracters long comment.." class="form__in form__in--textarea form-control"></textarea>
                                </div>
                                <div class="form__row">
                                    <button type="submit" class="form__submit">Küldés</button>
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
            <button type="button" class="map__change-map js-map-btn">Address Map</button>
        </div>
        <div class="map__wrap">
            <div data-infobox-theme="white" class="map__view js-map-canvas-contact"></div>
        </div>
    </div>
</div>


