<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Report extends Admin_controller {

    public $property_config = array(
        'id' => 'ingatlanok',
        'header' => array(
            '#Id', 'Referens', 'Város', 'Kerület', 'Típus', 'Kategória', 'Állapot', 'Alapterület', 'Szobaszám', 'Eladási ár', 'Bérleti díj', 'Státusz'
        ),
        'config' => array(
            'data' => array(
                0 => array('align' => 'left'),
                7 => array('align' => 'right'),
                9 => array('align' => 'right')
            )
        ),
        'format' => array(
            7 => array('number' => array('sufix' => ' m2', 'decimals' => 2)),
            9 => array('number' => array('sufix' => ' Ft', 'decimals' => 1))
        )
    );

    function __construct() {
        parent::__construct();

        $this->user_name = Session::get('user_name');
        $this->user_id = Session::get('user_id');
        $this->user_role_id = Session::get('user_role_id');
    }

    public function property() {

        if ($this->user_role_id == 1) {
            $properties = $this->report_model->get_properties();
        } else {
            $properties = $this->report_model->get_properties($this->user_id);
        }

        $properties = $this->convert_properties_array($properties);

        $data = array(
            'data' => $properties
        );

        $data = array_merge($this->property_config, $data);

        $this->generate_report($data, 'excel');
    }

    public function generate_report($data, $type) {

        $R = new PHPReport();
        $R->load(array($data));
        $R->setHeading('Ingatlanok listája / ' . date("Y-m-d") . ' / ' . $this->user_name);
        echo $R->render($type);
        exit();
    }

    public function convert_properties_array($original) {

        foreach ($original as $key => $value) {
            $array[$key]['id'] = $value['id'];
            $array[$key]['referens'] = $value['user_first_name'] . ' ' . $value['user_first_name'];
            $array[$key]['varos'] = $value['city_name'];
            $array[$key]['kerulet'] = $value['district_name'];
            if ($value['tipus'] == 1) {
                $array[$key]['tipus'] = 'Eladó';
            } else {
                $array[$key]['tipus'] = 'Kiadó';
            }
            $array[$key]['kategoria'] = $value['kat_nev'];
            $array[$key]['allapot'] = $value['all_leiras'];
            $array[$key]['alapterulet'] = $value['alapterulet'];
            $array[$key]['szobaszam'] = $value['szobaszam'];
            $array[$key]['ar_elado'] = $value['ar_elado'];
            $array[$key]['ar_kiado'] = $value['ar_kiado'];
            if ($value['status'] == 1) {
                $array[$key]['status'] = 'Aktív';
            } else {
                $array[$key]['status'] = 'Inaktív';
            }
        }
        return $array;
    }

}
