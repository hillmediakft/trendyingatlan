<?php

class Home_model extends Site_model {

    function __construct() {
        parent::__construct();
    }

    /**
     * 	Lekérdezi a városok nevét és id-jét a city_list táblából (az option listához)
     * 	A paraméter megadja, hogy melyik megyében lévő városokat adja vissza 		
     * 	@param integer	$id 	egy megye id-je (county_id)
     */
    public function city_list_grouped_by_county() {
        $this->query->set_table(array('city_list'));
        $this->query->set_columns('*');

        $this->query->set_join('left', 'county_list', 'city_list.county_id', '=', 'county_list.county_id');
        //       $this->query->set_orderby(array('city_name'), 'ASC');
        $result = $this->query->select();

        $arr = array();
        foreach ($result as $key => $item) {
            $arr[$item['county_name']][$key] = $item;
        }

        ksort($arr, SORT_REGULAR);
        return $arr;
    }
    
    /**
     * 	Lekérdez minden adatot a megadott táblából (pl.: az option listához)
     * 	
     * 	@param	string	$table 		(tábla neve)
     * 	@return	array
     */
    public function list_query($table)
    {
        $this->query->set_table(array($table));
        $this->query->set_columns('*');
        return $this->query->select();
    }    
    
    /**
     * 	A home oldal slider adatait kérdezi le az adatbázisból
     *
     * 	@return	string a slider html kódja
     */
    public function get_slider() {

        $this->query->reset();
        $this->query->set_table(array('slider'));
        $this->query->set_columns(array('id', 'slider_order', 'picture', 'text', 'title', 'target_url'));
        $this->query->set_where('active', '=', 1);
        $this->query->set_orderby(array('slider_order'), 'ASC');
        $result = $this->query->select();

        return $result;
    }  
    
    /**
     * 	Lekérdezi az ingatlanok táblából a kiemelet ingatlanokat
     * 	
     * 	@param array 
     */
    public function kiemelt_properties_query($limit = null) {
        $this->query->reset();
//        $this->query->debug(true);
        $this->query->set_table(array('ingatlanok'));
        $this->query->set_columns(array(
          'ingatlanok.id',
          'ingatlanok.ingatlan_nev',
          'ingatlanok.status',
          'ingatlanok.tipus',
          'ingatlanok.kerulet',
          'ingatlanok.ar_elado',
          'ingatlanok.ar_kiado',
          'ingatlanok.alapterulet',
          'ingatlanok.szobaszam',
          'ingatlanok.kepek',
          'ingatlanok.varos',
          'ingatlan_kategoria.kat_nev',
          'city_list.city_name'
        ));

        $this->query->set_join('left', 'ingatlan_kategoria', 'ingatlanok.kategoria', '=', 'ingatlan_kategoria.kat_id');
        $this->query->set_join('left', 'city_list', 'ingatlanok.varos', '=', 'city_list.city_id');
        $this->query->set_where('ingatlanok.kiemeles', '=', '1');
        $this->query->set_where('status', '=', 1);
        if (!is_null($limit)) {
            $this->query->set_limit($limit);
        }
        $this->query->set_orderby('ingatlanok.id', 'DESC');

        return $this->query->select();
    } 
    
    /**
     * 	Visszaadja a property tábla tartalmát
     * 	
     * 	@param array 
     */
    public function all_property_query($limit = null, $offset = null) {
         $params = $_GET;
        
        $this->query->reset();
 //       $this->query->debug(true);
        $this->query->set_table(array('ingatlanok'));
        $this->query->set_columns('SQL_CALC_FOUND_ROWS 
          `ingatlanok`.`id`,
          `ingatlanok`.`ingatlan_nev`,
          `ingatlanok`.`status`,
          `ingatlanok`.`tipus`,
          `ingatlanok`.`kerulet`,
          `ingatlanok`.`ar_elado`,
          `ingatlanok`.`ar_kiado`,
          `ingatlanok`.`alapterulet`,
          `ingatlanok`.`szobaszam`,
          `ingatlanok`.`kepek`,
          `ingatlanok`.`varos`,
          `ingatlan_kategoria`.`kat_nev`,
          `district_list`.`district_name`,
          `city_list`.`city_name`'
        );

        $this->query->set_join('left', 'ingatlan_kategoria', 'ingatlanok.kategoria', '=', 'ingatlan_kategoria.kat_id');
        $this->query->set_join('left', 'city_list', 'ingatlanok.varos', '=', 'city_list.city_id');
        $this->query->set_join('left', 'district_list', 'ingatlanok.kerulet', '=', 'district_list.district_id');

        if (!is_null($limit)) {
            $this->query->set_limit($limit);
        }
        if (!is_null($offset)) {
            $this->query->set_offset($offset);
        }
        
        if (isset($params['tipus']) && !empty($params['tipus'])) {
            $this->query->set_where('tipus', '=', $params['tipus']);
        }
        

        $this->query->set_where('ingatlanok.status', '=', 1);
        $this->query->set_orderby(array('id'), 'DESC');

        return $this->query->select();
    }   
    
   /**
     * 	A home oldal rólunk mondták (testimonials) slider-höz a szövegeket olvassa be
     *
     * 	@return	string a rólunk mondták slider html kódja
     */
    public function get_testimonials() {

        $this->query->reset();
        $this->query->set_table(array('testimonials'));
        $this->query->set_columns(array('text', 'name', 'title'));
        $result = $this->query->select();
        return $result;
    }    

}

?>