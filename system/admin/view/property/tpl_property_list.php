<!-- BEGIN CONTENT -->
    <div class="page-content">

        <div class="row">
            <div class="col-md-12">

                <!-- MODAL 1  -->	
                <div class="modal" id="ajax_modal" role="dialog" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content" id="modal_container"></div>
                    </div>
                </div>	
                <!-- MODAL 1 END -->	

                <!-- KERESŐ DOBOZ HTML -->	
                <?php include "system/admin/view/property/search_form.php"; ?>


                <!-- ÜZENETEK MEGJELENÍTÉSE -->
                <div id="ajax_message"></div> 						
                <?php $this->renderFeedbackMessages(); ?>				

                <!-- <form class="horizontal-form" id="del_property_form" method="POST" action="admin/property/delete_property"></form>-->	

                <div class="portlet">
                    <div class="portlet-title">
                        <div class="caption"><i class="fa fa-list"></i>Ingatlanok listája</div>
                        <div class="actions">
                            <a href="admin/property/insert" class="btn blue btn-sm"><i class="fa fa-plus"></i> Új ingatlan</a>
                            <a href="admin/property" class="btn blue-madison btn-sm"><i class="fa fa-repeat"></i> Szűrés törlése</a>
                           <!--  <button class="btn red btn-sm" name="delete_property_submit" value="submit" type="submit"><i class="fa fa-trash"></i> Csoportos törlés</button> -->
                            <div class="btn-group">
                                <a data-toggle="dropdown" href="#" class="btn btn-sm default">
                                    <i class="fa fa-wrench"></i> Eszközök <i class="fa fa-angle-down"></i>
                                </a>
                                <ul class="dropdown-menu pull-right">
                                    <li>
                                        <a href="#" id="print_property"><i class="fa fa-print"></i> Nyomtat </a>
                                    </li>
                                    <li>
                                        <a href="#" id="export_property"><i class="fa fa-file-excel-o"></i> Export CSV </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="portlet-body">
                        <!-- *************************** INGATLANOK TÁBLA *********************************** -->						
                        <table class="table table-striped table-bordered table-hover" id="property">
                            <thead>
                                <tr class="heading">
                                    <!-- 
                                    <th class="table-checkbox">
                                            <input type="checkbox" class="group-checkable" data-set="#property .checkboxes"/>
                                    </th>
                                    -->
                                    <th style="width:1%;" title="Az ingatlan azonosító száma">#id</th>
                                    <th style="width:1%;">Kép</th>
                                    <th>Típus</th>
                                    <th>Kategória</th>
                                    <th>Város</th>
                                    <th>Terület</th>
                                    <th>Szoba</th>
                                    <th><i class="fa fa-eye"></i></th>
                                    <th>Ár (Ft)</th>
                                    <th style="max-width:50px;">Státusz</th>
                                    <th style="width:1%;"></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($this->all_property as $value) { ?>
                                    <tr class="odd gradeX">
                                            <!-- <td>
                                        <?php //if (Session::get('user_role_id') < 3) {?>
                                                    <input type="checkbox" class="checkboxes" name="property_id_<?php //echo $value['id'];  ?>" value="<?php //echo $value['id'];  ?>"/>
                                        <?php //}; ?>	
                                            </td> -->
                                        <td id="id_element_<?php echo $value['id'];?>" >
                                            <?php echo $value['id']; 
if ($value['kiemeles'] == 1) echo '<br><span class="label label-sm label-success">Kiemelt</span>';
if ($value['kiemeles'] == 2) echo '<br><span class="label label-sm label-warning">Kiemelt</span>'; ?>                                        
                                        
                                        </td>
                                        <!-- Bélyegkép megjelenítése-->
                                        <?php
                                        if (!empty($value['kepek'])) {
                                            $photo_names = json_decode($value['kepek']);
                                            //$photo_name = array_shift($photo_names);
                                            //unset($photo_names);		
                                            echo '<td><img src="' . Util::thumb_path(Config::get('ingatlan_photo.upload_path') . $photo_names[0]) . '" alt="" /></td>';
                                        } else {
                                            echo '<td><img src="' . ADMIN_ASSETS . 'img/placeholder_80x60.jpg" alt="" /></td>';
                                        }
                                        ?>

                                        <td><?php echo ($value['tipus'] == 1) ? '<span class="label label-sm label-success">Eladó</span>' : '<span class="label label-sm label-info">Kiadó</span>'; ?></td>
                                        <td><?php echo $value['kat_nev']; ?></td>
                                        <td><?php echo ($value['city_name'] == 'Budapest') ? $value['city_name'] . ' (' . $value['district_name'] . ')' : $value['city_name']; ?></td>
                                        <td><?php echo (!empty($value['alapterulet'])) ? $value['alapterulet'] . ' m<sup>2</sup>' : 'n.a.'; ?> </td>
                                        <td><?php echo (!empty($value['szobaszam'])) ? $value['szobaszam'] : 'n.a.'; ?></td>
                                        <td><?php echo $value['megtekintes'];?></td>
                                        <td><?php echo ($value['tipus'] == 1) ? number_format($value['ar_elado'], 0, ',', '.') : number_format($value['ar_kiado'], 0, ',', '.') ?></td>

                                        <?php if ($value['status'] == 1) { ?>
                                            <td><span class="label label-sm label-success">Aktív</span></td>
                                        <?php } ?>
                                        <?php if ($value['status'] == 0) { ?>
                                            <td><span class="label label-sm label-danger">Inaktív</span></td>
                                        <?php } ?>

                                        <td>									
                                            <div class="actions">
                                                <div class="btn-group">
                                                    <a class="btn btn-sm grey-steel" href="#" data-toggle="dropdown" <?php echo ((Session::get('user_role_id') >= 2)) ? 'disabled' : ''; ?>>
                                                        <i class="fa fa-cogs"></i> 
                                                    </a>
                                                    <ul class="dropdown-menu pull-right">
                                                        <li><a href="<?php echo $this->request->get_uri('site_url') . 'property/details/' . $value['id']; ?>"><i class="fa fa-eye"></i> Részletek</a></li>
                                                        <!-- <li><a href="javascript:;" class="modal_trigger" rel="<?php //echo $value['id'];   ?>"><i class="fa fa-eye"></i> Részletek</a></li>	-->	

                                                        <?php if ((Session::get('user_role_id') < 3)) { ?>	
                                                            <li><a href="<?php echo $this->request->get_uri('site_url') . 'property/update/' . $value['id']; ?>"><i class="fa fa-pencil"></i> Szerkeszt</a></li>
                                                        <?php }; ?>

                                                        <?php if ((Session::get('user_role_id') < 3)) { ?>
                                                            <li><a class="delete_item" data-id="<?php echo $value['id']; ?>"> <i class="fa fa-trash"></i> Töröl</a></li>
                                                        <?php }; ?>

                                                        <?php if ((Session::get('user_role_id') < 3)) { ?>		
                                                            

                                                            <?php if ($value['status'] == 1) { ?>
                                                                <li><a class="change_status" data-id="<?php echo $value['id']; ?>" data-action="make_inactive"><i class="fa fa-ban"></i> Blokkol</a></li>
                                                            <?php } ?>
                                                            <?php if ($value['status'] == 0) { ?>
                                                                <li><a class="change_status" data-id="<?php echo $value['id']; ?>" data-action="make_active"><i class="fa fa-check"></i> Aktivál</a></li>
                                                            <?php } ?>


                                                            <?php if ($value['kiemeles'] > 0 && Session::get('user_role_id') == 1) { ?>
                                                                <li><a rel="<?php echo $value['id']; ?>" href="javascript:;" id="delete_kiemeles_<?php echo $value['id']; ?>" data-action="delete_kiemeles"><i class="fa fa-minus-circle"></i> Kiemelés törlése</a></li>
                                                            <?php } ?> 
                                                                
                                                            <?php if ($value['kiemeles'] == 0 && Session::get('user_role_id') == 1) { ?>
                                                                <li><a rel="<?php echo $value['id']; ?>" href="javascript:;" id="add_kiemeles_<?php echo $value['id']; ?>" data-action="add_kiemeles"><i class="fa fa-plus-circle"></i> Kiemelés</a></li>
                                                            <?php } ?>                                                                  
                                                                
                                                                
                                                           <?php if ($value['kiemeles'] == 2 && Session::get('user_role_id') == 2) { ?>
                                                                <li><a rel="<?php echo $value['id']; ?>" href="javascript:;" id="delete_kiemeles_<?php echo $value['id']; ?>" data-action="delete_kiemeles"><i class="fa fa-minus-circle"></i> Kiemelés törlése</a></li>
                                                            <?php } ?>                                                                 
                                                        <?php }; ?>	
                                                    </ul>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                <?php } ?>	
                            </tbody>
                        </table>	
                    </div> <!-- END PORTLET BODY -->
                </div> <!-- END PORTLET -->



            </div>
        </div>
    </div> <!-- END PAGE CONTENT-->