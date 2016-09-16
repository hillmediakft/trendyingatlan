<?php

class Ingatlanok extends Site_controller {

    function __construct() {
        parent::__construct();
    }

    public function index() {

        if ($this->request->has_query()) {
            Session::delete('ingatlan_filter');
        }

        $this->view = new View();
        
        $this->view->settings = $this->settings;
        $this->view->kedvencek_list = $this->kedvencek_list;
        
        $this->view->blogs = $this->blogs;

                // kiemelt ingatlanok
        $this->view->kiemelt_ingatlanok = $this->ingatlanok_model->kiemelt_properties_query(4);


// paginátor objektum létrehozása
$pagine = new Paginator('oldal', $this->settings['pagination']);
// limit-el lekérdezett adatok
$this->view->all_property = $this->ingatlanok_model->properties_filter_query($pagine->get_limit(), $pagine->get_offset());
// összes elem, ami a szűrési feltételnek megfelel (vagy a tábla összes rekordja, ha nincs szűrés)
$this->view->filtered_count = $this->ingatlanok_model->properties_filter_count_query();
// összes elem megadása a paginátor objektumnak
$pagine->set_total($this->view->filtered_count);
// lapozó linkek visszadása (paraméter az uri path)
$this->view->pagine_links = $pagine->page_links($this->request->get_uri('path'));

// ez nem tudom hogy kapcsolódik a lapozáshoz (?)
$this->view->no_of_properties = $this->ingatlanok_model->get_count();   


/*
// megoldás a pagine objektummal
        $paginator = new Paginate('oldal', $this->settings['pagination'], $this->ingatlanok_model);

        $this->view->all_property = $paginator->get_elements();
        $this->view->pagine_links = $paginator->pagine_links();
        $this->view->filtered_count = $paginator->filtered_count();
        $this->view->no_of_properties = $paginator->no_of_elements();
*/


// var_dump($this->view->all_property);
// die;
//        $this->view->county_list = $this->ingatlanok_model->county_list_query();

        $this->view->filter = $this->ingatlanok_model->get_filter_params(Session::get('ingatlan_filter'));
        //        var_dump($this->view->filter);
        //         die;
        // a keresőhöz szükséges listák alőállítása
        $city_list = $this->ingatlanok_model->city_list_grouped_by_county();
        unset($city_list['Budapest']);
        $this->view->city_list = $city_list;

        $this->view->county_list = $this->ingatlanok_model->county_list_query_with_prop_no();
        // kerületek nevének és id-jének lekérdezése az option listához
        $this->view->district_list = $this->ingatlanok_model->district_list_query_with_prop_no();
        // ingatlan kategóriák lekérdezése
        $this->view->ingatlan_kat_list = $this->ingatlanok_model->list_query('ingatlan_kategoria');
        // ingatlan állapot lista
        $this->view->ingatlan_allapot_list = $this->ingatlanok_model->allapot_list_query();
        // ingatlan fűtés lista
        $this->view->ingatlan_futes_list = $this->ingatlanok_model->futes_list_query();
        // ingatlan energetika lista
        $this->view->ingatlan_energetika_list = $this->ingatlanok_model->energetika_list_query();



     //   $this->view->add_link('js', SITE_JS . 'ingatlanok.js');
        // lekérdezések
        // $this->view->settings = $this->ingatlanok_model->get_settings();

        $this->view->title = 'Trendy ingatlan kezdőoldal';
        $this->view->description = 'Trendy ingatlan kezdőoldal metadescription';
        $this->view->keywords = 'Trendy ingatlan kezdőoldal metakeywords';

//$this->view->debug(true); 
        $this->view->set_layout('tpl_layout');
        $this->view->render('ingatlanok/tpl_ingatlanok');
    }
    
    /**
     * 	Ingatlan adatlap  
     */
    public function adatlap() {

        $id = (int) $this->request->get_params('id');

        $this->view = new View();

        $this->view->title = 'Ingatlanok oldal';
        $this->view->description = 'Ingatlanok description';
        $this->view->keywords = '';

        
        $this->ingatlanok_model->increase_no_of_clicks($id);

//        $this->view->kiemelt_properties = $this->ingatlanok_model->hasonló_properties_query();
        $property_data = $this->ingatlanok_model->get_property_query($id);

       $this->view->settings = $this->settings;
        $this->view->kedvencek_list = $this->kedvencek_list;

        $this->view->property_data = $property_data[0];

        // koordináták a Google maps megjelenítéshez   
        $this->view->javascript = '<script type="text/javascript">var property_location = {"lat":"' . substr($this->view->property_data["latitude"], 0, 6) . '","lng":"' . substr($this->view->property_data["longitude"], 0, 6) . '"};</script>';

        $this->view->photos = json_decode($this->view->property_data['kepek']);
        // kedvencek lekérdezése


        // hasonló ingatlanok lekérdezése

        $ingatlan_id = $this->view->property_data['id'];
        $ingatlan_tipus = $this->view->property_data['tipus'];
        $kategoria = $this->view->property_data['kategoria'];
        $varos = $this->view->property_data['varos'];
        $ar = ($property_data[0]['tipus'] = 1) ? $property_data[0]['ar_elado'] : $property_data[0]['ar_kiado'];

        $this->view->hasonlo_ingatlanok = $this->ingatlanok_model->hasonlo_ingatlanok($ingatlan_id, $ingatlan_tipus, $kategoria, $varos, $ar);


        // referens lekérdezése
        $this->view->referens = $this->ingatlanok_model->get_agent($this->view->property_data['ref_id']);
        
        $this->view->set_layout('tpl_layout');
        $this->view->render('ingatlanok/tpl_ingatlan_adatlap');
    }
    

    /**
     * 	(AJAX) - törli a filter session változót  
     */
    public function reset_filter() {
        if ($this->request->is_ajax() && $this->request->has_post('reset-filter')) {
            Session::set('filter', array());
        } else {
            exit();
        }
    }

    /**
     * 	hozzáadja az ingatlan id-t a kedvencek cookie-hoz  
     */
    public function add_property_to_cookie() {
        if ($this->request->is_ajax() && $this->request->has_post('ingatlan_id')) {
            $id = $this->request->get_post('ingatlan_id', 'integer');
            $this->ingatlanok_model->refresh_kedvencek_cookie($id);
        } else {
            exit();
        }
    }

    /**
     * 	törli az ingatlan id-t a kedvencek cookie-ból  
     */
    public function delete_property_from_cookie() {
        if ($this->request->is_ajax() && $this->request->has_post('ingatlan_id')) {
            $id = $this->request->get_post('ingatlan_id', 'integer');
            $this->ingatlanok_model->delete_property_from_cookie($id);
        } else {
            exit();
        }
    }

    /**
     * Adatlap nyomtatáshoz meghívja a generate_pdf model metódust
     *   
     */
    public function adatlap_nyomtatas() {
        $id = (int) $this->request->get_params('id');
        $this->ingatlanok_model->generate_pdf($id, $this->view->settings);
    }

    /**
     * 	Email küldés Ajax-szal  
     */
    public function adatlap_ajax_email() {

        if ($this->request->is_ajax() && $this->request->has_post('name')) {

            Util::send_mail($this->request->get_post('ref_email'), "Érdeklődés ingatlan iránt");
            exit();
        } else {
            exit();
        }
    }

}

?>