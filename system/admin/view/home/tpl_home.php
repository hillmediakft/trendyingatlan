<div class="page-content">
    <!-- BEGIN PAGE HEADER-->
    <!-- BEGIN PAGE TITLE & BREADCRUMB-->
    <div class="page-bar">
        <ul class="page-breadcrumb">
            <li>
                <i class="fa fa-home"></i>
                <span>Kezdőoldal</span> 
            </li>
        </ul>
    </div>
    <!-- END PAGE TITLE & BREADCRUMB-->
    <!-- END PAGE HEADER-->

    <div class="margin-bottom-20"></div>

    <?php $this->renderFeedbackMessages(); ?>

    <!-- BEGIN PAGE CONTENT-->
    <div class="row">
        <!-- BEGIN DASHBOARD STATS -->
        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
            <div class="dashboard-stat blue-madison">
                <div class="visual">
                    <i class="fa fa-users"></i>
                </div>
                <div class="details">
                    <div class="number">

                    </div>
                    <div class="desc">
                        Felhasználók
                    </div>
                </div>
                <a href="admin/users" class="more">
                    Tovább <i class="fa fa-arrow-right"></i>
                </a>
            </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
            <div class="dashboard-stat red-intense">
                <div class="visual">
                    <i class="fa fa-file"></i>
                </div>
                <div class="details">
                    <div class="number">

                    </div>
                    <div class="desc">
                        Szerkeszthető oldalak
                    </div>
                </div>
                <a href="admin/pages" class="more">
                    Tovább <i class="fa fa-arrow-right"></i>
                </a>
            </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
            <div class="dashboard-stat green-haze">
                <div class="visual">
                    <i class="fa fa-building-o"></i>
                </div>
                <div class="details">
                    <div class="number">

                    </div>
                    <div class="desc">
                        Ingatlanok
                    </div>
                </div>
                <a href="admin/property" class="more">
                    Tovább <i class="fa fa-arrow-right"></i>
                </a>
            </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
            <div class="dashboard-stat purple-plum">
                <div class="visual">
                    <i class="fa fa-download"></i>
                </div>
                <div class="details">
                    <div class="number">

                    </div>
                    <div class="desc">
                        Új Ingatlan felvitele
                    </div>
                </div>
                <a href="admin/property/insert" class="more">
                    Tovább <i class="fa fa-arrow-right"></i>
                </a>
            </div>
        </div>
    </div><!-- END ROW-->

    
    
    <div class="row">
        <!-- BEGIN DASHBOARD STATS -->
        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
            <div class="dashboard-stat blue-hoki">
                <div class="visual">
                    <i class="fa fa-check-square-o"></i>
                </div>
                <div class="details">
                    <div class="number">

                    </div>
                    <div class="desc">
                        Slider beállítás
                    </div>
                </div>
                <a href="admin/slider" class="more">
                    Tovább <i class="fa fa-arrow-right"></i>
                </a>
            </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
            <div class="dashboard-stat green-seagreen">
                <div class="visual">
                    <i class="fa fa-cog"></i>
                </div>
                <div class="details">
                    <div class="number">

                    </div>
                    <div class="desc">
                        Beállítások
                    </div>
                </div>
                <a href="admin/settings" class="more">
                    Tovább <i class="fa fa-arrow-right"></i>
                </a>
            </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
            <div class="dashboard-stat yellow-casablanca">
                <div class="visual">
                    <i class="fa fa-folder-open-o"></i>
                </div>
                <div class="details">
                    <div class="number">

                    </div>
                    <div class="desc">
                        Fájlkezelő
                    </div>
                </div>
                <a href="admin/file-manager" class="more">
                    Tovább <i class="fa fa-arrow-right"></i>
                </a>
            </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
            <div class="dashboard-stat blue-chambray">
                <div class="visual">
                    <i class="fa fa-file"></i>
                </div>
                <div class="details">
                    <div class="number">

                    </div>
                    <div class="desc">
                        Dokumentáció
                    </div>
                </div>
                <a href="admin/user-manual" class="more">
                    Tovább <i class="fa fa-arrow-right"></i>
                </a>
            </div>
        </div>
    </div><!-- END ROW-->         




    <!-- END DASHBOARD STATS -->
    <div class="clearfix"></div>
    <!--        <div class="row ">
                <div class="col-md-6 col-sm-6">
                    <div class="portlet box blue-steel">
                        <div class="portlet-title">
                            <div class="caption">
                                <i class="fa fa-check"></i>Modulok
                            </div>
    
                        </div>  
                        <div class="portlet-body">
                            <h4>Oldalak</h4>
                            <p>A weblap egyes oldalai szerkeszthetők, a szövegek szövegszerkesztő-szerű felületen módosíthatók. Módosítható a title és descriptipn elem is. Ezek módosításakor ügyeljen arra, hogy keresőoptimalizálás szempontjai szerint történjen a változtatás.</p>
                            <h4>Egyéb tartalom</h4>
                            <p>A jobb oldali sáv és a footer bemutatkozó szövege szerkeszthető.</p>
    
                        </div>
                    </div>
                </div>  
    
                <div class="col-md-6 col-sm-6">
                    <div class="portlet box green-haze">
                        <div class="portlet-title">
                            <div class="caption">
                                <i class="fa fa-check"></i>Tennivalók
                            </div>
    
                        </div>  
                        <div class="portlet-body">
                            Ez a portlet body
                        </div>
                    </div>
                </div>  
            </div>
    
    -->


</div> <!-- END PAGE CONTENT-->