<div class="center">
    <div class="container">
        <div class="row">
            <!-- BEGIN LISTING-->
            <div class="listing listing--properties-list">
                <header class="listing__header">
                    <h1 class="listing__title"><i class="fa fa-file-text"></i> Rendeljen energiatanúsítványt!</h1>
                    <h5 class="listing__headline">2012 január 01-től az 50 m2-nél nagyobb hasznos alapterületű ingatlanokra adásvétel esetén kötelező az energiatanúsítvány beszerzése.</h5>
                </header>



                <div class="listing__main">
                    <div class="article article--details article--page">
                        <article class="article__item">
                            <div class="article__body">
                                <p>Mi az energetikai tanusítvány? Helyszíni szemlén alapuló, hiteles „igazoló okirat, amely az épületnek vagy önálló rendeltetési egységnek a külön jogszabály szerinti számítási módszerrel meghatározott energetikai teljesítőképességét tartalmazza.”Az ingatlan energetikai minőségét hivatott mutatni, úgy, ahogy a háztartási gépeknél már jól megszokhattuk. A tanúsítványból elsősorban azt tudhatjuk meg, hogy előreláthatóan mekkora az ingatlan éves energiafelhasználása.</p> 
                                <div class="text-center">
                                    <button class="button__default button__default--normal ui__button ui__button--5" id="scroll_button"><i class="fa fa-edit"></i>  Egyszerűen és gyorsan itt rendelhető meg.</button>
                                </div>
                            </div>


                            <div class="pricing">

                                <div class="pricing__row">
                                    <div class="pricing__col4">
                                        <div class="pricing__item">
                                            <dl class="pricing__list">
                                                <dd class="pricing__total"><span class="pricing__summa"><i class="fa fa-file-text"></i></span><span class="pricing__favorite">1</span></dd>
                                                <dd class="pricing__feature"><strong>Ön megadja az ingatlan és a saját adatait.</strong></dd>
                                            </dl>
                                        </div>
                                    </div>
                                    <div class="pricing__col4">
                                        <div class="pricing__item">
                                            <dl class="pricing__list">
                                                <dd class="pricing__total"><span class="pricing__summa"><i class="fa fa-phone"></i></span><span class="pricing__favorite">2</span></dd>
                                                <dd class="pricing__feature"><strong>Az energiatanúsító időpontot egyeztet Önökkel.</strong></dd>
                                            </dl>
                                        </div>
                                    </div>
                                    <div class="pricing__col4">
                                        <div class="pricing__item">
                                            <dl class="pricing__list">
                                                <dd class="pricing__total"><span class="pricing__summa"><i class="fa fa-wrench"></i></span><span class="pricing__favorite">3</span></dd>
                                                <dd class="pricing__feature"><strong>A mérnök elvégzi az ingatlan felmérését.</strong></dd>
                                            </dl>
                                        </div>
                                    </div>
                                    <div class="pricing__col4">
                                        <div class="pricing__item">
                                            <dl class="pricing__list">
                                                <dd class="pricing__total"><span class="pricing__summa"><i class="fa fa-envelope-o"></i></span><span class="pricing__favorite">4</span></dd>
                                                <dd class="pricing__feature"><strong>A tanúsítványt e-mailben és postán is elküldjük.</strong></dd>
                                            </dl>
                                        </div>
                                    </div>
                                </div>

                            </div>                       


                            <div class="contacts__form" id="energia_tanusitvany_form">
                                <div class="form form--form--contacts">
                                    <form class="form__wrap" method="POST" action="send_email/init/tanusitvany" id="tanusitvany_form">
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


                                        <div class="col-md-6">
                                            <div class="form__row form-group">
                                                <label class="form__label control-label" for="in-form-name">Ingatlanok száma</label>
                                                <input type="text" class="form__in form__in--text form-control" name="no_of_properties" id="in-form-name">
                                            </div>
                                            <div class="form__row form-group">
                                                <label class="form__label control-label" for="in-form-name">Ingatlanok típusa</label>
                                                <input type="text" class="form__in form__in--text form-control" name="type_of_properties" id="in-form-name">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form__row form__row--tel form-group">
                                                <label class="form__label control-label" for="in-form-phone">Összes terület</label>
                                                <input type="text" class="form__in form__in--text form-control" name="floor_area" id="in-form-phone">
                                            </div>
                                            <div class="form__row form__row--email form-group">
                                                <label class="form__label control-label" for="in-form-email">Szintek száma</label>
                                                <input type="text" class="form__in form__in--text form-control" name="no_of_floors" id="in-form-email">
                                            </div>
                                        </div>                                        


                                        <div class="col-md-12">
                                            <div class="form__row form-group">
                                                <label class="form__label control-label" for="in-form-message">Megjegyzés, kérdés</label>
                                                <textarea class="form__in form__in--textarea form-control" name="message" id="in-form-message"></textarea>
                                            </div>
                                        </div>
                                        <input type="text" name="mezes_bodon" id="mezes_bodon">
                                        <div class="col-md-12">

                                            <button class="form__submit" type="submit" name="submit_tanusitvany" id="submit_tanusitvany">Adatok elküldése</button>
                                        </div>
                                    </form>
                                </div>
                                <!-- end of block form-->
                            </div>   


                            <div class="article__footer">
                                <div class="social social--article"><span>Megosztás:</span><a class="social__item" href="#"><i class="fa fa-facebook"></i></a><a class="social__item" href="#"><i class="fa fa-twitter"></i></a><a class="social__item" href="#"><i class="fa fa-google-plus"></i></a></div>
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

