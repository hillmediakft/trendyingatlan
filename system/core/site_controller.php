<?php

class Site_controller extends Controller {

    public function __construct() {
        parent::__construct();

        // model betöltése
        $this->loadModel($this->request->get_controller() . '_model');

        self::get_settings();

        // kedvencek lekérdezése
        self::get_kedvencek();
    }

    /**
     * 	(AJAX) - törli a filter session változót  
     */
    public function get_settings() {
        if (!$this->request->is_ajax()) {
            $name = $this->request->get_controller() . '_model';
            $this->settings = $this->{$name}->get_settings();
        }
    }

    /**
     * 	(AJAX) - törli a filter session változót  
     */
    public function get_kedvencek() {
        
        $kedvencek = new Kedvencek_controller;
        $this->kedvencek_list = $kedvencek->get_favourite_properties();

    }

}

?>