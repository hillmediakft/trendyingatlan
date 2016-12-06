<!-- BEGIN SIDEBAR-->
<div class="sidebar">

    <!-- BEGIN PROPERTIES-->
    <div class="properties js-unhide-block properties--sidebar">
        <button type="button" class="widget__show js-unhide">Kiemelt ingatlanok</button>
        <div class="properties__header">
            <h3 class="properties__title">Kiemelt ingatlanok</h3>
            <!--         <h4 class="properties__headline">Find your apartment or house on the exact key parameters.</h4> -->
        </div>
        <!-- end of block  .properties__header-->
        <div class="properties__list">

            <?php foreach ($this->kiemelt_ingatlanok as $value) { ?>
                <?php $photo_array = json_decode($value['kepek']); ?>
                <div class="properties__item">
                    <div class="properties__thumb"><a href="ingatlanok/adatlap/<?php echo $value['id'] . '/' . Replacer::filterName($value['ingatlan_nev']); ?>" class="item-photo item-photo--static">
                            <?php if ($value['kepek']) { ?>
                                <img src="<?php echo Util::small_path(Config::get('ingatlan_photo.upload_path') . $photo_array[0]); ?>" alt="<?php echo $value['ingatlan_nev']; ?>">
                            <?php } ?>
                            <?php if ($value['kepek'] == null) { ?>
                                <img src="<?php echo Config::get('ingatlan_photo.upload_path') . 'placeholder.jpg'; ?>" alt="<?php echo $value['ingatlan_nev']; ?>">
                            <?php } ?>
                            <figure class="item-photo__hover"><span class="item-photo__more">Részletek</span></figure></a>
                    </div>
                    <!-- end of block .properties__thumb-->
                    <div class="properties__info">
                        
                        <a href="ingatlanok/adatlap/<?php echo $value['id'] . '/' . Replacer::filterName($value['ingatlan_nev']); ?>" class="properties__address">
                            <span class="properties__address-city">
                            <?php
                            echo $value['city_name'];
                            echo (isset($value['kerulet'])) ? ', ' . $value['kerulet'] . ' kerület' : '';
                            ?>
                        </span>
                            <?php echo $value['ingatlan_nev']; ?>
                        </a>
                        <span class="properties__price">
                            <?php echo ($value['tipus'] == 1) ? number_format($value['ar_elado'], 0, ',', '.') : number_format($value['ar_kiado'], 0, ',', '.') ?> Ft
                        </span>
                    </div>
                    <!-- end of block .properties__info-->
                </div>
            <?php } ?>
            <!-- end of block .properties__item-->

        </div>
        <!-- end of block  .properties__list-->
    </div>
    <!-- END PROPERTIES-->

    <!-- BEGIN SECTION ARTICLE-->
    <section class="article js-unhide-block article--sidebar">
        <button type="button" class="widget__show js-unhide">Hírek</button>
        <div class="article__header">
            <h3 class="article__title">Hírek</h3>
            <h4 class="article__headline">hírek az ingatlanok világából.</h4>
        </div>
        <!-- end of block .article__header-->
        <div class="article__list">
            
            <?php foreach ($this->blogs as $value) { ?> 
            <div class="article__item">
                <div class="article__details">
                    <a href="<?php echo $this->registry->site_url . 'blog/' . $value['blog_slug'] . '/' . $value['blog_id']; ?>" class="article__item-title">
                        <?php echo $value['blog_title']; ?>
                    </a>
                    <div class="article__intro">
                        <p><?php echo Util::sentence_trim($value['blog_body'], 1); ?> ...</p>
                    </div><a href="<?php echo $this->registry->site_url . 'blog/' . $value['blog_slug'] . '/' . $value['blog_id']; ?>" class="article__more">Részletek</a>
                </div>
            </div>
            <?php } ?>
            <!-- end of block .article__item-->
        </div>
        <!-- end of block .article__list-->
    </section>
    <!-- END SECTION ARTICLE-->
</div>
<!-- END SIDEBAR-->
<div class="clearfix"></div>

