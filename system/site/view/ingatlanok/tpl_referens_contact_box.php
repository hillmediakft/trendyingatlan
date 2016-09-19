                        <!-- BEGIN WORKER SIDEBAR-->
                        <section class="worker worker--sidebar ">
                       
                            <!-- end of block .worker__header-->
                            <div class="worker__list">
                            <div class="worker--properties">
                                <div data-animate-end="animate-end" class="vcard">
                                    <div class="worker__photo"><a href="" class="item-photo item-photo--static"><img src="<?php echo Config::get('user.upload_path') . $this->referens['user_photo']; ?>" alt="<?php echo $this->referens['user_first_name'] . ' ' . $this->referens['user_last_name'];?>" class="photo">
                                            <figure class="item-photo__hover"><span class="item-photo__more">View Details</span></figure></a></div>
                                    <div class="worker__intro">
                                        <h3 class="worker__name fn"><?php echo $this->referens['user_first_name'] . ' ' . $this->referens['user_last_name']; ?></h3>
                                        <button type="button" class="worker__show js-unhide">Contact agent</button>

                                        <!-- end of block .worker__listings-->
                                        <div class="worker__intro-row">
                                            <div class="worker__intro-col">
                                                <div class="worker__contacts">
                                                    
                                                    <div class="tel"><span class="type"><i class="fa fa-phone"></i></span><a href="tel:+44(0)2035102390" class="uri value"><?php echo $this->referens['user_phone'];?></a></div>
                                                    <div class="email"><span class="type"><i class="fa fa-envelope"></i></span><a href="mailto:rs@realtyspace.com" class="uri value"><?php echo $this->referens['user_email']; ?></a></div>
                                                   
                                                </div>
                                                <!-- end of block .worker__contacts-->
                                            </div>
                                            <div class="worker__intro-col">
                                                <div class="social social--worker"><a href="#" class="social__item"><i class="fa fa-facebook"></i></a><a href="#" class="social__item"><i class="fa fa-linkedin"></i></a><a href="#" class="social__item"><i class="fa fa-twitter"></i></a><a href="#" class="social__item"><i class="fa fa-google-plus"></i></a></div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end of block .worker__descr-->
                                    <div class="clearfix"></div>
                                </div>
                                <!-- end of block .worker__item-->
                            </div>
                              <div class="clearfix"></div>  
                            <div class="">
                                <div class="form form--properties">
                                    <form action="#" method="POST" class="form__wrap js-contact-form">
                                        <div class="form__row form-group">
                                            <input id="in-form-name" type="text" name="name" required class="form__in form__in--text form-control" placeholder="Az Ön neve">
                                        </div>
                                        <div class="form__row form__row--tel form-group">
                                     
                                            <input id="in-form-phone" type="text" name="phone" class="form__in form__in--text form-control" placeholder="Az Ön telefonszáma">
                                        </div>
                                        <div class="form__row form__row--email form-group">
                                      
                                            <input id="in-form-email" type="email" name="email" required data-parsley-trigger="change" class="form__in form__in--text form-control" placeholder="Az Ön e-mail címe">
                                        </div>
                                        <div class="form__row form-group">
                                    
                                            <textarea id="in-form-message" name="message" required data-parsley-trigger="keyup" data-parsley-minlength="20" data-parsley-validation-threshold="10" class="form__in form__in--textarea form-control">Érdekel a <?php echo $this->property_data['id'];?> referencia számú ingatlan, kérem vegyék fel velem a kapcsolatot!</textarea>
                                        </div>
                                        <div class="form__row">
                                            <button type="submit" class="form__submit">Elküld</button>
                                        </div>
                                    </form>
                                </div>
                                <!-                                
                                
                                
                                <!-- end of block .worker__item-->
                            </div>
                            <!-- end of block .worker__list-->
                            </div>
                        </section>

