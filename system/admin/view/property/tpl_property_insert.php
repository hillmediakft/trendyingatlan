<div class="page-content">
    <!-- BEGIN PAGE HEADER-->

    <div class="page-bar">
        <ul class="page-breadcrumb">
            <li>
                <i class="fa fa-home"></i>
                <a href="admin/home">Kezdőoldal</a>
                <i class="fa fa-angle-right"></i>
            </li>
            <li><span>Ingatlan hozzáadása</span></li>
        </ul>
    </div>

    <!-- END PAGE HEADER-->

    <div class="margin-bottom-20"></div>

    <!-- BEGIN PAGE CONTENT-->
    <div class="row">
        <div class="col-md-12">


            <div id="ajax_message"></div>
            <!-- echo out the system feedback (error and success messages) -->
            <?php $this->renderFeedbackMessages(); ?>


            <!-- PORTLET 1 -->
            <div class="portlet">
                <div class="portlet-title">
                    <div class="caption"><i class="fa fa-plus"></i>Új ingatlan</div>
                    <div class="actions">
                        <!-- Adatok "első" elküldése INSERT -->
                        <button class="btn green" id="data_upload_ajax" type="button" name="save_data">Mentés és folytatás <i class="fa fa-check"></i></button>
                        <!-- Adatok elküldése UPDATE és kilépés -->
                        <button disabled style="display:none;" class="btn blue" id="data_update_ajax" type="button" name="update_data">Mentés és kilépés <i class="fa fa-check"></i></button>
                        <!-- <button class="btn green" id="file_upload_ajax" type="button" name="save_file">Fileok <i class="fa fa-check"></i></button> -->
                        <!-- <button class="btn green" type="button">Mentés <i class="fa fa-check"></i></button> -->
                        <a class="btn default" id="button_megsem" href="admin/property">Mégsem <i class="fa fa-times"></i></a>
                    </div>
                </div>

                <div class="portlet-body">

                    <form action="" method="POST" id="upload_data_form">

                        <div class="form-body">

                            <!-- ÜZENET DOBOZOK -->
                            <div class="alert alert-danger display-hide">
                                <button class="close" data-close="alert"></button>
                                <span><!-- ide jön az üzenet--></span>
                            </div>
                            <div class="alert alert-success display-hide">
                                <button class="close" data-close="alert"></button>
                                <span><!-- ide jön az üzenet--></span>
                            </div>

                            <!-- ********* ALAPBEÁLLÍTÁSOK ***************** -->
                            <div class="portlet light bg-inverse">
                                <div class="portlet-title">
                                    <div class="caption font-green-sharp">
                                        <i class="icon-share font-green-sharp"></i>
                                        <span class="caption-subject bold uppercase"> Alap adatok</span>
                                    </div>

                                </div>
                                <div class="portlet-body form-horizontal">

                                    <div class="row">
                                        <!-- REFERENS KÓD -->

                                        <div class="form-group">
                                            <label for="ref_id" class="control-label col-md-3">Referens kód</label>
                                            <div class="col-md-9">
                                                <input type="text" value="<?php echo Session::get('user_id'); ?>" class="form-control input-small" disabled />
                                                <input type="hidden" name="ref_id" value="<?php echo Session::get('user_id'); ?>" />
                                            </div>
                                        </div>


                                        <!-- REFERENS NÉV -->
                                        <div class="">
                                            <div class="form-group">
                                                <label for="ref_name" class="control-label col-md-3">Referens felhasználó név</label>
                                                <div class="col-md-9">
                                                    <input type="text" value="<?php echo Session::get('user_name'); ?>" class="form-control input-small" disabled />
                                                </div>
                                            </div>
                                        </div>


                                        <div class="form-group">
                                            <label for="status" class="control-label col-md-3">Státusz <span></span>
                                            </label>
                                            <div class="col-md-9">
                                                <select name="status" class="form-control input-small">
                                                    <option value="1">Aktív</option>
                                                    <option value="0">Inaktív</option>
                                                </select>
                                            </div>
                                        </div>

                                        <!-- ÜGYLET TÍPUSA -->


                                        <div class="form-group">
                                            <label for="kiemeles" class="control-label col-md-3">Kiemelés <span></span></label>
                                            <div class="col-md-9">
                                                <select name="kiemeles" id="kiemeles" class="form-control input-small">
                                                    <option value="0" selected>Nincs kiemelve</option>
                                                    <?php if (Session::get('user_role_id') == 1) : ?>
                                                        <option value="1">Kiemelés</option>
                                                    <?php endif; ?>

                                                    <?php if (Session::get('user_role_id') > 1) : ?>
                                                        <option value="2">Kiemelés</option>
                                                    <?php endif; ?>
                                                </select>
                                            </div>
                                        </div>



                                        <!-- KIEMELÉS -->
                                        <div class="form-group">
                                            <label for="tipus" class="control-label col-md-3 ">Megbízás típusa <small>(Eladó / kiadó)</small><span class="required">*</span></label>
                                            <div class="col-md-9">
                                                <select name="tipus" id="tipus" class="form-control input-small">
                                                    <option value="">-- válasszon --</option>
                                                    <option value="1">Eladó</option>
                                                    <option value="2">Kiadó</option>
                                                </select>
                                            </div>
                                        </div>

                                        <!-- LAKÁS FAJTÁJA -->
                                        <div class="form-group">
                                            <label for="kategoria" class="control-label col-md-3">Ingatlan típusa <span class="required">*</span></label>
                                            <div class="col-md-3">
                                                <select name="kategoria" id="kategoria" class="form-control">
                                                    <option value="">-- válasszon --</option>
                                                    <?php foreach ($this->ingatlan_kat_list as $value) { ?>
                                                        <option value="<?php echo $value['kat_id']; ?>"><?php echo $value['kat_nev']; ?></option>
                                                    <?php } ?>
                                                </select>
                                            </div>
                                        </div>


                                        <!-- ÁR_ELADó -->
                                        <div class="form-group">
                                            <label for="ar_elado" class="col-md-3 control-label">Eladási ár (Ft) <span class="required">*</span></label>
                                            <div class="col-md-3">
                                                <div class="input-group">
                                                    <input type="text" name="ar_elado" id="ar_elado" class="form-control" disabled/>
                                                    <div class="input-group-addon">Ft</div>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- ÁR_KIADÓ -->
                                        <div class="form-group">
                                            <label for="ar_kiado" class="control-label col-md-3">Bérleti díj (Ft) <span class="required">*</span></label>
                                            <div class="col-md-3">
                                                <div class="input-group">
                                                    <input type="text" name="ar_kiado" id="ar_kiado" class="form-control" disabled/>
                                                    <div class="input-group-addon">Ft</div>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- ALAPTERÜLET -->
                                        <div class="form-group">
                                            <label for="alapterulet" class="control-label col-md-3">Alapterület<span class="required">*</span></label>
                                            <div class="col-md-3">
                                                <div class="input-group">
                                                    <input type="text" name="alapterulet" id="alapterulet" class="form-control" />
                                                    <div class="input-group-addon">m<sup>2</sup></div>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Erkély alapterület -->
                                        <div class="form-group">
                                            <label for="belmagassag" class="control-label col-md-3">Belmagasság</label>
                                            <div class="col-md-3">
                                                <input type="text" name="belmagassag" id="belmagassag" class="form-control" />
                                            </div>
                                        </div>

                                        <!-- Terasz alapterület -->

                                        <div class="form-group">
                                            <label for="tajolas" class="control-label col-md-3">Tájolás</label>
                                            <div class="col-md-3">
                                                <input type="text" name="tajolas" id="tajolas" class="form-control" />
                                            </div>
                                        </div>


                                        <div class="form-group">
                                            <label for="erkely" class="control-label col-md-3">Erkély</label>
                                            <div class="col-md-3">
                                                <div class="checkbox">
                                                    <input type="checkbox" value="1" name="erkely" id="erkely">			
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Erkély alapterület -->
                                        <div class="form-group">
                                            <label for="erkely_terulet" class="control-label col-md-3">Erkély mérete</label>
                                            <div class="col-md-3">
                                                <div class="input-group">
                                                    <input type="text" name="erkely_terulet" id="erkely_terulet" disabled="" class="form-control" />
                                                    <div class="input-group-addon">m<sup>2</sup></div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label for="terasz" class="control-label col-md-3">Terasz</label>
                                            <div class="col-md-3">
                                                <div class="checkbox">
                                                    <input type="checkbox" value="2" name="terasz" id="terasz">
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Terasz alapterület -->
                                        <div class="form-group">
                                            <label for="terasz_terulet" class="control-label col-md-3">Terasz mérete</label>
                                            <div class="col-md-3">
                                                <div class="input-group">
                                                    <input type="text" name="terasz_terulet" id="terasz_terulet" disabled="" class="form-control" />
                                                    <div class="input-group-addon">m<sup>2</sup></div>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- SZOBÁK SZÁMA -->
                                        <div class="form-group">
                                            <label for="szobaszam" class="control-label col-md-3">Szobák száma (12 m<sup>2</sup> felett)</label>
                                            <div class="col-md-3">
                                                <div class="input-group">
                                                    <input type="text" name="szobaszam" id="szobaszam" class="form-control" />
                                                    <div class="input-group-addon">db</div>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- FÉLSZOBÁK SZÁMA -->
                                        <div class="form-group">
                                            <label for="felszobaszam" class="control-label col-md-3">Félszobák száma (6-12 m<sup>2</sup>)</label>
                                            <div class="col-md-3">
                                                <div class="input-group">
                                                    <input type="text" name="felszobaszam" id="felszobaszam" class="form-control" />
                                                    <div class="input-group-addon">db</div>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- KÖZÖS KÖLTSÉG -->
                                        <div class="form-group">
                                            <label for="kozos_koltseg" class="control-label col-md-3">Közös költség</label>
                                            <div class="col-md-3">
                                                <div class="input-group">
                                                    <input type="text" name="kozos_koltseg" id="kozos_koltseg" class="form-control" />
                                                    <div class="input-group-addon">Ft</div>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- ÁTLAGOS REZSI -->
                                        <div class="form-group">
                                            <label for="rezsi" class="control-label col-md-3">Átlagos rezsi</label>
                                            <div class="col-md-3">
                                                <div class="input-group">
                                                    <input type="text" name="rezsi" id="rezsi" class="form-control" />
                                                    <div class="input-group-addon">Ft</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- **************** CÍM ADATOK ************************ -->
                            <div class="portlet light bg-inverse">
                                <div class="portlet-title">
                                    <div class="caption font-green-sharp">
                                        <i class="icon-share font-green-sharp"></i>
                                        <span class="caption-subject bold uppercase"> Elhelyezkedés</span>
                                    </div>

                                </div>
                                <div class="portlet-body">
                                    <div class="row">

                                        <div class="col-md-6">
                                            <!-- MEGYE MEGADÁSA -->
                                            <div class="form-group" id="megye_div">
                                                <label for="megye" class="control-label">Megye<span class="required">*</span></label>
                                                <select name="megye" id="megye_select" class="form-control">
                                                    <option value="">-- válasszon --</option>
                                                    <?php foreach ($this->county_list as $value) { ?>
                                                        <option value="<?php echo $value['county_id']; ?>"><?php echo $value['county_name']; ?></option>
                                                    <?php } ?>
                                                </select>
                                            </div>

                                            <!-- VÁROS MEGADÁSA -->
                                            <div class="form-group" id="varos_div">
                                                <label for="varos" class="control-label">Város<span class="required">*</span></label>
                                                <select name="varos" id="varos_select" class="form-control"></select>
                                            </div>

                                            <!-- KERÜLET MEGADÁSA -->
                                            <div class="form-group" id="district_div">
                                                <label for="kerulet" class="control-label">Kerület <span></span></label>
                                                <select name="kerulet" id="district_select" class="form-control" disabled>
                                                    <option value="">-- válasszon --</option>
                                                    <?php foreach ($this->district_list as $value) { ?>
                                                        <option value="<?php echo $value['district_id']; ?>"><?php echo $value['district_name']; ?></option>
                                                    <?php } ?>
                                                </select>
                                            </div>
                                            <!-- UTCA MEGADÁSA -->
                                            <div class="form-group">
                                                <label for="utca" class="control-label">Utca <small>(házszám nélkül)</small><span class="required">*</span></label>
                                                <input type="text" name="utca" id="utca_autocomplete" placeholder="" class="form-control" />
                                            </div>
                                            <!-- IRANYITOSZAM -->
                                            <div class="form-group">
                                                <label for="iranyitoszam" class="control-label">Irányítószám</label>
                                                <input type="text" name="iranyitoszam" id="iranyitoszam" placeholder="" class="form-control input-small" />
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <!-- HAZSZAM -->
                                                    <div class="form-group">
                                                        <label for="hazszam" class="control-label">Házszám</label>
                                                        <input type="text" name="hazszam" id="hazszam" placeholder="" class="form-control" />
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <!-- EMELET/AJTÓ -->
                                                    <div class="form-group">
                                                        <label for="emelet" class="control-label">Emelet</label>
                                                        <select name="emelet" id="emelet" class="form-control">
                                                            <option value="">-- válasszon --</option>
                                                            <option value="1">1. emelet</option>
                                                            <option value="2">2. emelet</option>
                                                            <option value="3">3. emelet</option>
                                                            <option value="4">4. emelet</option>
                                                            <option value="5">5. emelet</option>
                                                            <option value="6">6. emelet</option>
                                                            <option value="7">7. emelet</option>
                                                            <option value="8">8. emelet</option>
                                                            <option value="9">9. emelet</option>
                                                            <option value="10">10. emelet</option>
                                                            <option value="11">10. emelet felett</option>

                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <!-- EMELET/AJTÓ -->
                                                    <div class="form-group">
                                                        <label for="emelet_ajto" class="control-label">Ajtó</label>
                                                        <input type="text" name="emelet_ajto" id="emelet_ajto" placeholder="" class="form-control" />
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <!-- ÉPÜLET SZINTJEINEK SZÁMA -->
                                                    <div class="form-group">
                                                        <label for="epulet_szintjei" class="control-label">Épület szinjei</label>
                                                        <select name="epulet_szintjei" id="epulet_szintjei" class="form-control">
                                                            <option value="">-- válasszon --</option>

                                                            <option value="1">1 emelet</option>
                                                            <option value="2">2 emelet</option>
                                                            <option value="3">3 emelet</option>
                                                            <option value="4">4 emelet</option>

                                                            <option value="5">5 emelet</option>
                                                            <option value="6">6 emelet</option>
                                                            <option value="7">7 emelet</option>
                                                            <option value="8">8 emelet</option>

                                                            <option value="9">9 emelet</option>
                                                            <option value="10">10 emelet</option>
                                                            <option value="11">10 emelet felett</option>

                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- CHECKBOX-OK -->

                                            <div class="form-group">
                                                <div class="checkbox-list">
                                                    <label><input type="checkbox" name="tetoter"> Tetőtéri lakás</label>
                                                </div>
                                            </div>                                        

                                            <div class="form-group">
                                                <div class="checkbox-list">
                                                    <label><input type="checkbox" name="utca_megjelenites" checked=""> Utca megjelenítése az adatlapon</label>
                                                    <label><input type="checkbox" name="hazszam_megjelenites"> Házszám megjelenítése az adatlapon</label>
                                                    <label><input type="checkbox" name="terkep" checked=""> Térképes megjelenítés az adatlapon</label>
                                                </div>
                                            </div>

                                        </div>


                                        <div class="col-md-6">
                                            <!-- BEGIN GEOCODING PORTLET-->
                                            <div class="note note-info"><small>A megye és város kiválasztása, valamint az utca, irónyítószám és házszám megadása után ellenőrizheti, hogy az ingatlan a megfelelő pozícióban jelenik-e meg a Google térképen.</small></div>
                                            <div class="portlet light portlet-fit bordered">
                                                <div class="portlet-title">
                                                    <div class="caption">
                                                        <i class=" icon-layers font-green"></i>
                                                        <span class="caption-subject font-green bold uppercase">Megjelenítés térképen</span>
                                                    </div>
                                                    <div class="actions">
                                                        <a class="btn btn-circle btn-icon-only btn-default" id="show_map" href="javascript:;">
                                                            <i class="icon-pin"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="portlet-body">
                                                    <div id="address_message"></div>
                                                    <div id="gmap_geocoding" class="gmaps"> </div>
                                                </div>
                                            </div>
                                            <!-- END GEOCODING PORTLET-->
                                        </div>

                                    </div>
                                </div>
                            </div>

                            <!-- LEÍRÁS -->


                            <div class="portlet light bg-inverse">
                                <div class="portlet-title">
                                    <div class="caption font-green-sharp">
                                        <i class="icon-share font-green-sharp"></i>
                                        <span class="caption-subject bold uppercase"> Megnevezés és leírás</span>
                                    </div>

                                </div>
                                <div class="portlet-body">
                                    <!-- INGATLAN NEV -->
                                    <div class="form-group">
                                        <label for="ingatlan_nev" class="control-label">Ingatlan megnevezés <small>(címként szereplő rövid leírás)</small></label>
                                        <input type="text" name="ingatlan_nev" id="ingatlan_nev" placeholder="" class="form-control" />
                                    </div>
                                    <!-- LAKÁS LEIRAS -->
                                    <div class="form-group">
                                        <label for="leiras" class="control-label">Leírás</label>
                                        <textarea name="leiras" id="leiras" placeholder="" class="form-control input-xlarge" rows="10"></textarea>
                                    </div>
                                </div>
                            </div>


                            <div class="portlet light bg-inverse">
                                <div class="portlet-title">
                                    <div class="caption font-green-sharp">
                                        <i class="icon-share font-green-sharp"></i>
                                        <span class="caption-subject bold uppercase"> Jellemzők</span>
                                    </div>

                                </div>
                                <div class="portlet-body">
                                    <!-- JELLEMZÖK 1 -->
                                    <div class="row">
                                        <div class="col-md-3" >
                                            <!-- INGATLAN ÁLLAPOTA -->
                                            <div class="form-group">
                                                <label for="allapot">Ingatlan állapota</label>
                                                <select name="allapot" id="allapot" class="form-control">
                                                    <option value="">-- válasszon --</option>
                                                    <?php foreach ($this->ingatlan_allapot_list as $value) { ?>
                                                        <option value="<?php echo $value['all_id']; ?>"><?php echo $value['all_leiras']; ?></option>
                                                    <?php } ?>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-3" >
                                            <!-- INGATLAN ÁLLAPOTA -->
                                            <div class="form-group">
                                                <label for="haz_allapot_kivul">Ház állapota kívül</label>
                                                <select name="haz_allapot_kivul" id="haz_allapot_kivul" class="form-control">
                                                    <option value="">-- válasszon --</option>
                                                    <?php foreach ($this->ingatlan_haz_allapot_kivul_list as $value) { ?>
                                                        <option value="<?php echo $value['haz_allapot_kivul_id']; ?>"><?php echo $value['haz_allapot_kivul_leiras']; ?></option>
                                                    <?php } ?>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-3" >
                                            <!-- INGATLAN ÁLLAPOTA -->
                                            <div class="form-group">
                                                <label for="haz_allapot_belul">Ház állapota belül</label>
                                                <select name="haz_allapot_belul" id="haz_allapot_belul" class="form-control">
                                                    <option value="">-- válasszon --</option>
                                                    <?php foreach ($this->ingatlan_haz_allapot_belul_list as $value) { ?>
                                                        <option value="<?php echo $value['haz_allapot_belul_id']; ?>"><?php echo $value['haz_allapot_belul_leiras']; ?></option>
                                                    <?php } ?>
                                                </select>
                                            </div>
                                        </div> 
                                        <div class="col-md-3" >
                                            <!-- INGATLAN ÁLLAPOTA -->
                                            <div class="form-group">
                                                <label for="furdo_wc">Fürdőszoba - WC</label>
                                                <select name="furdo_wc" id="furdo_wc" class="form-control">
                                                    <option value="">-- válasszon --</option>
                                                    <?php foreach ($this->ingatlan_furdo_wc_list as $value) { ?>
                                                        <option value="<?php echo $value['furdo_wc_id']; ?>"><?php echo $value['furdo_wc_leiras']; ?></option>
                                                    <?php } ?>
                                                </select>
                                            </div>
                                        </div> 
                                        <div class="col-md-3" >
                                            <!-- INGATLAN ÁLLAPOTA -->
                                            <div class="form-group">
                                                <label for="fenyviszony">Fényviszonyok</label>
                                                <select name="fenyviszony" id="fenyviszony" class="form-control">
                                                    <option value="">-- válasszon --</option>
                                                    <?php foreach ($this->ingatlan_fenyviszony_list as $value) { ?>
                                                        <option value="<?php echo $value['fenyviszony_id']; ?>"><?php echo $value['fenyviszony_leiras']; ?></option>
                                                    <?php } ?>
                                                </select>
                                            </div>
                                        </div>                                         
                                        <div class="col-md-3" >
                                            <div class="form-group">
                                                <label for="futes">Fűtés</label>
                                                <select class="form-control" name='futes' id='futes'>
                                                    <option value="">-- válasszon --</option>
                                                    <?php foreach ($this->ingatlan_futes_list as $value) { ?>
                                                        <option value="<?php echo $value['futes_id']; ?>"><?php echo $value['futes_leiras']; ?></option>
                                                    <?php } ?>
                                                </select>
                                            </div>
                                        </div>



                                        <div class="col-md-3" >
                                            <div class="form-group">
                                                <label for="parkolas">Parkolás</label>
                                                <select class="form-control" name='parkolas' id='parkolas'>
                                                    <option value="">-- válasszon --</option>
                                                    <?php foreach ($this->ingatlan_parkolas_list as $value) { ?>
                                                        <option value="<?php echo $value['parkolas_id']; ?>"><?php echo $value['parkolas_leiras']; ?></option>
                                                    <?php } ?>

                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-md-3" >
                                            <div class="form-group">
                                                <label for="kilatas">Kilátás</label>
                                                <select class="form-control" name='kilatas' id='kilatas'>
                                                    <option value="">-- válasszon --</option>
                                                    <?php foreach ($this->ingatlan_kilatas_list as $value) { ?>
                                                        <option value="<?php echo $value['kilatas_id']; ?>"><?php echo $value['kilatas_leiras']; ?></option>
                                                    <?php } ?>

                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-md-3" >
                                            <div class="form-group">
                                                <label for="lift">Lift</label>
                                                <select class="form-control" name='lift' id='lift'>
                                                    <option value="0">nincs</option>
                                                    <option value="1">van</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-md-3" >
                                            <div class="form-group">
                                                <label for="szerkezet">Szerkezet</label>
                                                <select class="form-control" name="szerkezet" id="szerkezet">
                                                    <option value="">-- válasszon --</option>
                                                    <?php foreach ($this->ingatlan_szerkezet_list as $value) { ?>
                                                        <option value="<?php echo $value['szerkezet_id']; ?>"><?php echo $value['szerkezet_leiras']; ?></option>
                                                    <?php } ?>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-md-3" >
                                            <div class="form-group">
                                                <label for="komfort">Komfort</label>
                                                <select class="form-control" name="komfort" id="komfort">
                                                    <option value="">-- válasszon --</option>
                                                    <?php foreach ($this->ingatlan_komfort_list as $value) { ?>
                                                        <option value="<?php echo $value['komfort_id']; ?>"><?php echo $value['komfort_leiras']; ?></option>
                                                    <?php } ?>
                                                </select>
                                            </div>
                                        </div>                                    

                                        <div class="col-md-3" >
                                            <div class="form-group">
                                                <label for="energetika">Energetikai tanúsítvány</label>
                                                <select class="form-control" name='energetika' id='energetika'>
                                                    <option value="">-- válasszon --</option>
                                                    <?php foreach ($this->ingatlan_energetika_list as $value) { ?>
                                                        <option value="<?php echo $value['energetika_id']; ?>"><?php echo $value['energetika_leiras']; ?></option>
                                                    <?php } ?>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-md-3" >
                                            <div class="form-group">
                                                <label for="kert">Kert</label>
                                                <select class="form-control" name='kert' id='kert'>
                                                    <option value="">-- válasszon --</option>
                                                    <?php foreach ($this->ingatlan_kert_list as $value) { ?>
                                                        <option value="<?php echo $value['kert_id']; ?>"><?php echo $value['kert_leiras']; ?></option>
                                                    <?php } ?>

                                                </select>
                                            </div>
                                        </div>

                                    </div>


                                    <div class="row">

                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <div class="checkbox">
                                                    <input type="checkbox" value="3" name="medence"><label>Medence</label>
                                                </div>
                                            </div>
                                        </div>


                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <div class="checkbox">
                                                    <input type="checkbox" value="4" name="szauna"><label>Szauna</label>
                                                </div>
                                            </div>
                                        </div>


                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <div class="checkbox">
                                                    <input type="checkbox" value="5" name="jacuzzi"><label>Jacuzzi</label>
                                                </div>
                                            </div>
                                        </div>


                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <div class="checkbox">
                                                    <input type="checkbox" value="6" name="kandallo"><label>Kandalló</label>				</div>
                                            </div>
                                        </div>


                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <div class="checkbox">
                                                    <input type="checkbox" value="7" name="riaszto"><label>Riasztó</label>
                                                </div>
                                            </div>
                                        </div>


                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <div class="checkbox">
                                                    <input type="checkbox" value="9" name="klima"><label>Klíma</label>
                                                </div>
                                            </div>
                                        </div>


                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <div class="checkbox">
                                                    <input type="checkbox" value="10" name="ontozorendszer"><label>Öntözőrendszer</label>                                                                   </div>
                                            </div>
                                        </div>


                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <div class="checkbox">
                                                    <input type="checkbox" value="11" name="automata_kapu"><label>Automata kapu</label>				
                                                </div>
                                            </div>
                                        </div>


                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <div class="checkbox">
                                                    <input type="checkbox" value="12" name="elektromos_redony"><label>Elektromos redőny</label>
                                                </div>
                                            </div>
                                        </div>


                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <div class="checkbox">
                                                    <input type="checkbox" value="13" name="konditerem"><label>Konditerem</label>
                                                </div>
                                            </div>
                                        </div>

                                    </div>

                                </div>
                            </div>                                

                            <div class="portlet light bg-inverse">
                                <div class="portlet-title">
                                    <div class="caption font-green-sharp">
                                        <i class="icon-share font-green-sharp"></i>
                                        <span class="caption-subject bold uppercase"> Tulajdonos adatai</span>
                                    </div>

                                </div>
                                <div class="portlet-body">
                                    <!-- TULAJDONOS ADATAI -->
                                    <div class="row">
                                        <div class="col-md-6">
                                            <!-- TULAJ NEVE -->
                                            <div class="form-group">
                                                <label for="tulaj_nev" class="control-label">Név <span class="required">*</span></label>
                                                <input type="text" name="tulaj_nev" id="tulaj_nev" placeholder="" class="form-control" />
                                            </div>
                                        </div>
                                        <!-- TULAJ CÍME -->
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="tulaj_cim" class="control-label">Cím</label>
                                                <input type="text" name="tulaj_cim" id="tulaj_cim" placeholder="" class="form-control" />
                                            </div>
                                        </div>
                                        <!-- TULAJ TELEFONSZÁM -->
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="tulaj_tel" class="control-label">Telefonszám <span class="required">*</span></label>
                                                <input type="text" name="tulaj_tel" id="tulaj_tel" placeholder="" class="form-control" />
                                            </div>
                                        </div>
                                        <!-- TULAJ EMAIL -->
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="tulaj_email" class="control-label">E-mail cím</label>
                                                <input type="text" name="tulaj_email" id="tulaj_email" placeholder="" class="form-control" />
                                            </div>
                                        </div>
                                        <!-- TULAJ MEGJEGYZÉS -->

                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="tulaj_notes" class="control-label">Megjegyzés</label>
                                                <textarea name="tulaj_notes" id="tulaj_notes" class="form-control" rows="6"></textarea>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- KÉPEK -->
                            <div class="portlet light bg-inverse">
                                <div class="portlet-title">
                                    <div class="caption font-green-sharp">
                                        <i class="icon-share font-green-sharp"></i>
                                        <span class="caption-subject bold uppercase"> Képek feltöltése</span>
                                    </div>

                                </div>
                                <div class="portlet-body">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class ="alert alert-info">
                                                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                <i class ="fa fa-info-circle"></i> Képek feltöltéséhez először mentse el az ingatlant (kattintson a "mentés és folytatás gombra") a kötelezően megadandó adatokkal, majd ezt követően tölthet fel képet. </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="portlet">
                                                <div class="portlet-body">
                                                    <h4 class="block">Feltöltött képek:</h4>
                                                    <ul id="photo_list">
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-9">

                                            <div class="portlet">
                                                <div class="portlet-body">
                                                    <h4 class="block">Képek hozzáadása:</h4>
                                                    <input type="file" name="new_file[]" multiple="true" id="input-4" />
                                                </div>
                                            </div>
                                        </div>
                                    </div> <!-- row END -->
                                </div>
                            </div>
                            <!-- DOKUMENTUMOK -->
                            <div class="portlet light bg-inverse">
                                <div class="portlet-title">
                                    <div class="caption font-green-sharp">
                                        <i class="icon-share font-green-sharp"></i>
                                        <span class="caption-subject bold uppercase"> Dokumentumok feltöltése</span>
                                    </div>

                                </div>
                                <div class="portlet-body">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class ="alert alert-info">
                                                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                <i class ="fa fa-info-circle"></i> Dokumentumok (fájlok) feltöltéséhez először mentse el az ingatlant (kattintson a "mentés és folytatás gombra") a kötelezően megadandó adatokkal, majd ezt követően tölthet fel.  </div>
                                        </div>

                                        <div class="col-md-3">
                                            <div class="portlet">
                                                <div class="portlet-body">
                                                    <h4 class="block">Feltöltött dokumentumok:</h4>
                                                    <ul id="dokumentumok" class="list-group">
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-9">

                                            <div class="portlet">
                                                <div class="portlet-body">
                                                    <h4 class="block">Dokumentumok hozzáadása:</h4>
                                                    <input type="file" name="new_doc[]" multiple="true" id="input-5" />
                                                </div>
                                            </div>
                                        </div>

                                    </div> <!-- row END -->
                                </div>
                            </div>

                        </div>
                    </form>


                </div> <!-- END PORTLET 1 BODY-->
            </div> <!-- END PORTLET 1 -->

        </div> <!-- END COL-MD-12 -->
    </div> <!-- END ROW -->
</div> <!-- END PAGE CONTENT-->