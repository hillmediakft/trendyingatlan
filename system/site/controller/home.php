<?php

class Home extends Site_controller {

    function __construct() {
        parent::__construct();
        $this->loadModel('home_model'); 

    }

    public function index() {
        $this->view = new View();
        
        $this->view->settings = $this->settings;
        $this->view->kedvencek_list = $this->kedvencek_list;
        // a keresőhöz szükséges listák alőállítása
        $city_list = $this->home_model->city_list_grouped_by_county();
        unset($city_list['Budapest']);
        $this->view->city_list = $city_list;

        $this->view->ingatlan_kat_list = $this->home_model->list_query('ingatlan_kategoria');
        // slider előállítása
        $this->view->slider = $this->home_model->get_slider();
        // kiemelt ingatlanok
        $this->view->all_properties = $this->home_model->kiemelt_properties_query(12);
        //rólunk mondták
        $this->view->testimonials = $this->home_model->get_testimonials();
        $this->view->blogs = $this->blogs;

        $this->view->add_link('js', SITE_JS . 'home.js');
        // lekérdezések
        // $this->view->settings = $this->home_model->get_settings();

        $this->view->title = 'Trendy ingatlan kezdőoldal';
        $this->view->description = 'Trendy ingatlan kezdőoldal metadescription';
        $this->view->keywords = 'Trendy ingatlan kezdőoldal metakeywords';

//$this->view->debug(true); 
        $this->view->set_layout('tpl_layout');
        $this->view->render('home/tpl_home');
    }

}

?>