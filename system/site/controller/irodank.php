<?php

class Irodank extends Site_controller {

    function __construct() {
        parent::__construct();
        $this->loadModel('irodank_model');
    }

    public function index() {

        $this->view = new View();
        $this->view->settings = $this->settings;
        $this->view->kedvencek_list = $this->kedvencek_list;

        $this->view->blogs = $this->blogs;
        $this->ingatlanok = $this->loadmodel('ingatlanok_model');
        // kiemelt ingatlanok
        $this->view->kiemelt_ingatlanok = $this->ingatlanok_model->kiemelt_properties_query(4);
        $this->view->data_arr = $this->irodank_model->page_data_query('irodank');


        $this->view->title = $this->view->data_arr['page_metatitle'];
        $this->view->description = $this->view->data_arr['page_metadescription'];
        $this->view->keywords = $this->view->data_arr['page_metakeywords'];
        $this->view->content = $this->view->data_arr['page_body'];

        $this->view->set_layout('tpl_layout');
        $this->view->render('irodank/tpl_irodank');
    }

}

?>