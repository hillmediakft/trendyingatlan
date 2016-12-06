<?php

class Agent_model extends Site_model {

    function __construct() {
        parent::__construct();
        $this->registry = Registry::get_instance();
    }

    /**
     *  Felhasználók adatainak lekérdezése
     *
     *  @param  string|integer    $user_id (csak ennek a felhasználónak az adatait adja vissza
     *  @return array|false
     */
    public function get_agents() {
        $this->query->reset();
        $this->query->set_table(array('users'));
        $this->query->set_columns(array(
            'user_id',
            'user_first_name',
            'user_last_name',
            'user_active',
            'user_email',
            'user_phone',
            'user_photo'
        ));

        $this->query->set_where('user_active', '=', 1);
        $this->query->set_where('user_role_id', '=', 2);

        return $this->query->select();
    }

}

?>