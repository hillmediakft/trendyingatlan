<?php

class Report_model extends Admin_model {

    function __construct() {
        parent::__construct();
    }

     /**
     * 	Összes ingatlan lekérdezése refrens (user_id) szerint
     */
    public function get_properties() {
// $this->query->debug(true);
        $this->query->set_table(array('ingatlanok'));
        $this->query->set_columns(array(
            'ingatlanok.id',
            'ingatlanok.kategoria',
            'ingatlanok.status',
            'ingatlanok.kiemeles',
            'ingatlanok.tipus',
            'ingatlanok.ar_elado',
            'ingatlanok.ar_kiado',
            'ingatlanok.allapot',
            'ingatlanok.alapterulet',
            'ingatlanok.szobaszam',
            'ingatlan_kategoria.kat_nev',
            'ingatlanok.megtekintes',
            'users.user_first_name',
            'users.user_last_name',
            'district_list.district_name',
            'city_list.city_name',
            'ingatlan_allapot.all_leiras'
        ));

        $this->query->set_join('left', 'ingatlan_kategoria', 'ingatlanok.kategoria', '=', 'ingatlan_kategoria.kat_id');
        $this->query->set_join('left', 'users', 'ingatlanok.ref_id', '=', 'users.user_id');
        $this->query->set_join('left', 'district_list', 'ingatlanok.kerulet', '=', 'district_list.district_id');
        $this->query->set_join('left', 'city_list', 'ingatlanok.varos', '=', 'city_list.city_id');
        $this->query->set_join('left', 'ingatlan_allapot', 'ingatlanok.allapot', '=', 'ingatlan_allapot.all_id');
//csökkenő sorrendben adja vissza
        $this->query->set_limit(6);
        $this->query->set_orderby(array('id'), 'DESC');
        return $this->query->select();
    }   
    
}

?>