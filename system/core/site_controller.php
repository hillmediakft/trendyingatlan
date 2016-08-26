<?php

class Site_controller extends Controller {

    public function __construct() {
        parent::__construct();

        self::get_settings();

        // kedvencek lekérdezése
        self::get_kedvencek();
    }

    /**
     * 	 
     */
    public function get_settings() {
        if (!$this->request->is_ajax()) {
            $name = $this->request->get_controller() . '_model';
            $this->settings = $this->{$name}->get_settings();
        }
    }

    /**
     * 	
     */
    public function get_kedvencek() {
        
        $kedvencek = new Kedvencek_controller;
        $this->kedvencek_list = $kedvencek->get_favourite_properties();

    }

}

?>