<div class="pagecrumbs">
    <div class="container">
        <div class="row">
            <div class="col-xs-4">
                <h5 class="medium"><a href="blog">Blog</a> / <a href="<?php echo $this->registry->site_url . 'blog/reszletek/' . $blog['blog_id']; ?>"><?php echo $blog['blog_title_' . $this->registry->lang]; ?></a></h5>
            </div>
            <div class="col-xs-8">
                <div class="location pull-right">
                    <a href="<?php echo $this->registry->site_url; ?>"><?php echo $this->registry->language['menu_home']; ?></a> / <a href="<?php echo $this->registry->site_url; ?>blog"><?php echo $this->registry->language['menu_blog']; ?></a>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="container">
    <div class="row">
        <div class="blog-wrapper blog-thumb col-md-9 main-el">
       
                <div class="col-sm-5">
                    <div class="image">
                        <img src="<?php echo $blog['blog_picture']; ?>" class="img-responsive img-thumbnail" alt="<?php echo $blog['blog_title_' . $this->registry->lang]; ?>">
                    </div>
                </div>
                <div class="col-md-7 col-sm-7">
                    <div class="body">
                        <h3><?php echo $blog['blog_title_' . $this->registry->lang]; ?></h3>
                        <p class="italic post-links">
                            <span>
                                <i class="fa fa-archive"></i>
                                <?php echo $this->registry->language['blog_kategoria']; ?>: <a href="<?php echo $this->registry->site_url . 'blog/kategoria/' . $blog['blog_category']; ?>"><?php echo $blog['category_name_' . $this->registry->lang]; ?></a>
                            </span> 
                            <span>
                                <i class="fa fa-calendar"></i> <?php echo $blog['blog_add_date']; ?>
                            </span>
                        </p>
                        <?php echo $blog['blog_body_' . $this->registry->lang]; ?>

                    </div>
                </div>            


         
        </div>                    
        <?php require('system/site/view/_template/tpl_sidebar_blog.php'); ?>                    
    </div>
</div>    