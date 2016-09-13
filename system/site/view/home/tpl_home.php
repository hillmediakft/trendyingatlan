<!-- BEGIN SLIDER-->
<div id="slider-wide" class="slider slider--wide">
    <div class="slider__block js-slick-slider">
        <?php foreach ($this->slider as $value) { ?> 
            <div class="slider__item">
                <div class="slider__preview">
                    <div class="slider__img slider__img--lg"><img data-lazy="<?php echo Config::get('slider.upload_path') . $value['picture']; ?>" src="<?php echo SITE_ASSETS; ?>img/lazy-image.jpg" alt=""></div>
                    <div class="slider__img slider__img--sm"><img data-lazy="<?php echo Config::get('slider.upload_path') . $value['picture']; ?>" src="<?php echo SITE_ASSETS; ?>img/lazy-image.jpg" alt=""></div>
                </div>
                <div class="slider__caption">
                    <!-- end of block .slider__price--><a href="#" class="slider__address"><?php echo $value['title']; ?>
                        <p><?php echo $value['text']; ?></p>
                    </a>
                </div>
                <!-- end of block .slider__caption-->
            </div>
        <?php } ?>

    </div>
    <!-- end of block .slider__block-->
    <div class="slider__controls">
        <button class="slider__control slider__control--prev js-banner-prev"></button>
        <button class="slider__control slider__control--next js-banner-next"></button>
    </div>

    <div class="container">
        <?php include "system/site/view/home/tpl_search.php"; ?>    
    </div>

</div>
<!-- END SLIDER-->




<section class="properties properties--index">
    <div class="container">
        <header class="properties__header">
            <h3 class="properties__title">Kiemelt ingatlanok</h3>
            <a href="ingatlanok" class="properties__btn-more">Összes ingatlan</a>
        </header>
        <div class="properties__list">
            <div id="owl-properties" class="owl-carousel owl-theme">

                <?php foreach ($this->all_properties as $value) { ?>
                    <?php $photo_array = json_decode($value['kepek']); ?>
                    <div class="properties__item">
                        <div class="properties__thumb">
                            <a href="ingatlanok/adatlap/<?php echo $value['id'] . '/' . Replacer::filterName($value['ingatlan_nev']); ?>" class="item-photo">
                                <?php if ($value['kepek']) { ?>
                                    <img src="<?php echo Util::small_path(Config::get('ingatlan_photo.upload_path') . $photo_array[0]); ?>" alt="<?php echo $value['ingatlan_nev']; ?>">
                                <?php } ?>
                                <?php if ($value['kepek'] == null) { ?>
                                    <img src="<?php echo Config::get('ingatlan_photo.upload_path') . 'placeholder.jpg'; ?>" alt="<?php echo $value['ingatlan_nev']; ?>">
                                <?php } ?>
                            </a>
                            <span class="properties__ribon"><?php echo($value['tipus'] == 1) ? 'Eladó' : 'Kiadó'; ?></span>
                        </div>
                        <!-- end of block .properties__thumb-->
                        <div class="properties__info">
                            <a href="ingatlanok/adatlap/<?php echo $value['id'] . '/' . Replacer::filterName($value['ingatlan_nev']); ?>" class="properties__address">
                                <span class="properties__address-street"><?php echo $value['ingatlan_nev']; ?></span>
                                <span class="properties__address-city">
                                    <?php
                                    echo $value['city_name'];
                                    echo (isset($value['kerulet'])) ? ', ' . $value['kerulet'] . ' kerület' : '';
                                    ?>
                                </span>
                            </a>
                            <a href="ingatlanok/adatlap/<?php echo $value['id'] . '/' . Replacer::filterName($value['ingatlan_nev']); ?>" class="properties__more">Részletek <i class="fa fa-chevron-right"></i></a>
                            <!-- end of block .properties__param--><span class="properties__price"><?php echo ($value['tipus'] == 1) ? number_format($value['ar_elado'], 0, ',', '.') : number_format($value['ar_kiado'], 0, ',', '.') ?> Ft</span>
                        </div>
                        <!-- end of block .properties__info-->
                    </div>
                <?php } ?>
                <!-- end of block .properties__item-->


            </div>
        </div>
    </div>
</section>



<!-- END PROPERTIES INDEX-->

<!-- BEGIN SECTION WORKER INDEX-->
<section class="worker worker--index achievement">
    <div class="container">
        <div class="worker__list">
            <div data-sr="enter bottom move 80px, scale(0), over 0s" data-animate-end="animate-end" class="worker__item vcard">
                <div class="worker__photo"><a href="#" class="item-photo item-photo--static"><img src="<?php echo SITE_ASSETS; ?>media-demo/workers/worker-1.jpg" alt="" class="photo"></a>
                </div>
                <div class="worker__info">
                    <h4 class="worker__name fn">Ingatlan eladás</h4>
                    <p>Az  értékesíteni kívánt ingatlanát ,lakását, házát,  telkét, kereskedelmi üzletét, irodáját,  Budapesten és környékén eladjuk.</p>
                    <a href="#" class="properties__btn-more">Tovább</a>
                    <!-- end of block .worker__contacts-->
                </div>
                <!-- end of block .worker__info-->
            </div>
            <!-- end of block .worker__item-->
            <div data-sr="enter bottom move 80px, scale(0), over 0.3s" data-animate-end="animate-end" class="worker__item vcard">
                <div class="worker__photo"><a href="#" class="item-photo item-photo--static"><img src="<?php echo SITE_ASSETS; ?>media-demo/workers/worker-2.jpg" alt="" class="photo"></a>
                </div>
                <div class="worker__info">
                    <h4 class="worker__name fn">Lakás kiadás</h4><p>A nálunk meghirdetett Kiadó lakását, házát kiajánljuk ügyfeleinknek.</p><a href="#" class="properties__btn-more">Tovább</a>
                    <!-- end of block .worker__contacts-->
                </div>
                <!-- end of block .worker__info-->
            </div>
            <!-- end of block .worker__item-->
            <div data-sr="enter bottom move 80px, scale(0), over 0.6s" data-animate-end="animate-end" class="worker__item vcard">
                <div class="worker__photo"><a href="#" class="item-photo item-photo--static"><img src="<?php echo SITE_ASSETS; ?>media-demo/workers/worker-3.jpg" alt="" class="photo"></a>
                </div>
                <div class="worker__info">
                    <h4 class="worker__name fn">Hitel tanácsadás</h4><p>Vegye igénybe otthonteremtési tanácsadásunkat. Hitelek, Lakástakarékpénztár.</p><a href="#" class="properties__btn-more">Tovább</a>
                    <!-- end of block .worker__contacts-->
                </div>
                <!-- end of block .worker__info-->
            </div>
            <!-- end of block .worker__item-->
            <div data-sr="enter bottom move 80px, scale(0), over 0.8999999999999999s" data-animate-end="animate-end" class="worker__item vcard">
                <div class="worker__photo"><a href="#" class="item-photo item-photo--static"><img src="<?php echo SITE_ASSETS; ?>media-demo/workers/worker-4.jpg" alt="" class="photo"></a>
                </div>
                <div class="worker__info">
                    <h4 class="worker__name fn">Vásárlás</h4><p>Ingatlant vásárolna – kérjük vegye fel velünk a kapcsolatot.</p><a href="#" class="properties__btn-more">Tovább</a>
                    <!-- end of block .worker__contacts-->
                </div>
                <!-- end of block .worker__info-->
            </div>
            <!-- end of block .worker__item-->
        </div>
        <!-- end of block .worker__list-->
    </div>
</section>
<!-- END SECTION WORKER INDEX-->
<!-- BEGIN SECTION ARTICLE-->
<section class="article js-unhide-block article--index">
    <button type="button" class="widget__show js-unhide">Hírek</button>
    <div class="container">
        <div class="article__header">
            <h3 class="article__title">Hírek, hasznos cikkek</h3>
            
        </div>
        <!-- end of block .article__header-->
        <div class="article__list">
            
            <?php foreach ($this->blogs as $value) { ?> 
            
            
            <div data-sr="enter left over 1s and scale up 20%" data-animate-end="" class="article__item"><a href="<?php echo $this->registry->site_url . 'blog/' . $value['blog_slug'] . '/' . $value['blog_id']; ?>" class="article__photo"><img src="<?php echo Config::get('blogphoto.upload_path') . $value['blog_picture']; ?>" alt="News title" class="article__photo-img">
                    </a>
                <div class="article__details"><a href="<?php echo $this->registry->site_url . 'blog/' . $value['blog_slug'] . '/' . $value['blog_id']; ?>" class="article__item-title"><?php echo $value['blog_title']; ?></a>
                    <div class="article__intro">
                        <p><?php echo Util::sentence_trim($value['blog_body'], 1); ?></p>
                    </div><a href="<?php echo $this->registry->site_url . 'blog/' . $value['blog_slug'] . '/' . $value['blog_id']; ?>" class="article__more">Tovább</a>
                </div>
            </div>
            
            <?php } ?>
            <!-- end of block .article__item-->
            
            
        </div>
        <!-- end of block .article__list--><a href="#" class="article__btn-more"> További cikkek...</a>
    </div>
</section>
<!-- END SECTION ARTICLE-->

<!-- BEGIN SECTION REVIEW-->
<section class="review review--wide review--undefined">
    <div class="container">
        <div class="review__header">
            <h3 class="review__title">Rólunk mondták</h3>

        </div>
        <!-- end of block .review__header-->
        <div id="review-slider" class="review__list">
            <div class="review__slider js-slick-slider">
                <?php foreach ($this->testimonials as $value) : ?>
                    <div class="review__item">

                        <div class="review__details"><span class="review__name"><?php echo $value['name']; ?></span><span class="review__post"><?php echo $value['title']; ?></span>
                            <div class="review__stars"><i class="glyphicon glyphicon-star"></i><i class="glyphicon glyphicon-star"></i><i class="glyphicon glyphicon-star"></i><i class="glyphicon glyphicon-star"></i><i class="glyphicon glyphicon-star"></i></div>
                        </div>
                        <div class="review__info">
                            <div class="review__info-quote review__info-quote--open">&rdquo;</div>
                            <p><?php echo $value['text']; ?>
                            </p>
                            <div class="review__info-quote review__info-quote--close">&ldquo;</div>
                        </div>
                        <div class="clearfix"></div>
                        <!-- end of block .review__item-->
                    </div>
                <?php endforeach ?>


            </div>
        </div>
        <!-- end of block .review__list-->
    </div>
</section>
<!-- END SECTION REVIEW-->



