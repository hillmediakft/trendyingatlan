<div class="center">
    <div class="container">
        <div class="row">
            <!-- BEGIN LISTING-->
            <div class="listing listing--properties-list">
                <header class="listing__header">
                    <h1 class="listing__title">Eladná ingatlanát?</h1>
                    <h5 class="listing__headline">Segítünk vevőt találni!</h5>
                </header>



                <div class="listing__main">
                    <div class="article article--details article--page">
                        <article class="article__item">
                            <div class="article__body">
                                <h4>ÜGYFELEINK RÉSZÉRE FOLYAMATOSAN KERESÜNK:</h4>
                                <ul class="ul-list ul-list--arrow">
                                    <li>Eladó lakásokat</li>
                                    <li>Eladó családi házakat</li>
                                    <li>Eladó építési telkeket</li>
                                    <li>Eladó kereskedelmi, üzlethelyiségeket</li>
                                    <li>Kiadó lakásokat, családi házakat</li>
                                    <li>Kiadó kereskedelmi ingatlanokat</li>
                                    <li>Kiadó és eladó ipari ingatlanokat</li>
                                </ul>
                                <div class="site__panel">
                                    <span class="site__header-text">Amennyiben szeretné honlapunkon eladó vagy kiadó ingatlanát hirdessük,  kérjük töltse ki az alábbi űrlapot, és munkatársunk hamarosan felhívja Önt, időpont egyeztetés céljából.
                                        <p><strong>Köszönjük, hogy megtisztel bizalmával!</strong></p>
                                    </span>
                                </div>

                            </div>

                            <div class="row">
                                <div class="col-md-12">
                                    <div class="contacts__form">
                                        <div class="form form--form--contacts">
                                            <form class="form__wrap" method="POST" action="send_email/init/seller" id="contact_seller_form">
                                                <div class="col-md-6">
                                                    <div class="form__row form-group">
                                                        <label class="form__label control-label" for="in-form-name">Az ön neve</label>
                                                        <input type="text" class="form__in form__in--text form-control" required="" name="name" id="in-form-name">
                                                    </div>
                                                    <div class="form__row form-group">
                                                        <label class="form__label control-label" for="in-form-name">Lakcíme</label>
                                                        <input type="text" class="form__in form__in--text form-control" required="" name="address" id="in-form-name">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form__row form__row--tel form-group">
                                                        <label class="form__label control-label" for="in-form-phone">Telefonszáma</label>
                                                        <input type="text" class="form__in form__in--text form-control" name="phone" id="in-form-phone">
                                                    </div>
                                                    <div class="form__row form__row--email form-group">
                                                        <label class="form__label control-label" for="in-form-email">E-mail címe</label>
                                                        <input type="email" class="form__in form__in--text form-control" required="" name="email" id="in-form-email">
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="form__row form-group">
                                                        <label class="form__label control-label" for="in-form-message">Az eladó, vagy kiadó, vagy keresett ingatlan rövid leírása</label>
                                                        <textarea class="form__in form__in--textarea form-control" required="" name="message" id="in-form-message"></textarea>
                                                    </div>
                                                </div>

                                                <input type="text" name="mezes_bodon" id="mezes_bodon">
                                                <div class="col-md-12">
                                                    <div id="submit_button">
                                                        <button class="form__submit" type="submit" name="submit_contact_seller" id="submit_contact_seller" value="Küldés">Adatok elküldése</button>
                                                    </div>
                                                </div>                          
                                            </form>
                                        </div>
                                        <!-- end of block form-->
                                    </div>   
                                </div>
                            </div>
                        </article>
                    </div>
                </div>                


            </div>
            <!-- END LISTING-->
            <!-- SIDEBAR -->
            <?php include SITE . '/view/_template/tpl_sidebar.php'; ?>
            <!-- END SIDEBAR-->
            <div class="clearfix"></div>
        </div>
    </div>
</div>
<!-- END CENTER SECTION-->

