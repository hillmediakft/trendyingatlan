<?php

class Home extends Site_controller {

    function __construct() {
        parent::__construct();
    }

    public function index()
    {
    
// lorem ipsum dolor sit amet        

        $this->view = new View();
        $this->view->settings = $this->settings;
        $this->view->kedvencek_list = $this->kedvencek_list;
    //    $this->view->add_link('js', SITE_ASSETS . 'pages/home.js');
        // lekérdezések
        // $this->view->settings = $this->home_model->get_settings();

        $this->view->title = 'page_metatitle';
        $this->view->description = 'page_metadescription';
        $this->view->keywords = 'page_metakeywords';

//$this->view->debug(true); 
$this->view->set_layout('tpl_layout');
        $this->view->render('home/tpl_home');
    }

}
?>