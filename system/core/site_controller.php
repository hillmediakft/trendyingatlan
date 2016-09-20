<?php

class Site_controller extends Controller {

    public function __construct() {
        parent::__construct();
        
        if (!$this->request->is_ajax()) {
            
            // settings betöltése
            $this->loadModel('settings_model');
            $this->settings = $this->settings_model->get_settings();

            // blog bejegyzések betöltése
            $this->loadModel('blogs_model');
            $this->blogs = $this->blogs_model->getBlogs(3);
        
// var_dump($this->settings);
// var_dump($this->blogs);
// die();
        }

        // kedvencek lekérdezése
        $this->get_kedvencek();
        
        

        //$this->site_model = new Site_model();
        //$this->blogs = $this->site_model->getBlogs(3);
    }

    /**
     * 	
     */
    public function get_kedvencek()
    {
        $kedvencek = new Kedvencek_controller();
        $this->kedvencek_list = $kedvencek->get_favourite_properties();
    }

}

?>