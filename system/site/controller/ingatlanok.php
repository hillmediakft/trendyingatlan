<?php

class Ingatlanok extends Site_controller {

    function __construct() {
        parent::__construct();
    }

    public function index() {

// lorem ipsum dolor sit amet        

        /*       if(!empty($_GET)) {
          var_dump($_GET);

          } */



        $this->view = new View();

        if (isset($_GET['action']) && $_GET['action'] == 'search') {
            Session::init();
            Session::set('filter', $_GET);
            $this->view->filter = Session::get('filter');
        }

        $this->view->settings = $this->settings;
        $this->view->kedvencek_list = $this->kedvencek_list;

       // paginator
        // include(LIBS . '/pagine_class.php');
        // paginátor objektum létrehozása (paraméter neve, limit)
        $pagine = new Paginator('oldal', $this->settings['pagination']);
        // adatok lekérdezése limittel
        $this->view->all_property = $this->ingatlanok_model->properties_filter_query($pagine->get_limit(), $pagine->get_offset());

        // szűrési feltételeknek megfelelő összes rekord száma
        $filter_count = $this->ingatlanok_model->properties_filter_count_query();

        $pagine->set_total($filter_count);
        // lapozó linkek
        $this->view->pagine_links = $pagine->page_links($this->registry->uri_path);
        $this->view->filtered_count = $filter_count;
        $this->view->no_of_properties = $this->ingatlanok_model->get_count();

//        $this->view->county_list = $this->ingatlanok_model->county_list_query();

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



        $this->view->add_link('js', SITE_JS . 'ingatlanok.js');
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
            $id = $this->get_post('ingatlan_id', 'integer');
            $this->ingatlanok_model->refresh_kedvencek_cookie($id);
        } else {
            exit();
        }
    } 
    
    /**
     * 	törli az ingatlan id-t a kedvencek cookie-ból  
     */
    public function delete_property_from_cookie()
    {
        if ($this->request->is_ajax() && $this->request->has_post('ingatlan_id')) {
            $id = $this->get_post('ingatlan_id', 'integer');
            $this->ingatlanok_model->delete_property_from_cookie($id);
        } else {
            exit();
        }
    }  
    
    /**
     * Adatlap nyomtatáshoz meghívja a generate_pdf model metódust
     *   
     */
    public function adatlap_nyomtatas()
    {
        $id = (int) $this->request->get_params('id');
        $this->ingatlanok_model->generate_pdf($id, $this->view->settings);
    }

    /**
     * 	Email küldés Ajax-szal  
     */
    public function adatlap_ajax_email()
    {

        if ($this->request->is_ajax() && $this->request->has_post('name')) {
        
            Util::send_mail($this->request->get_post('ref_email'), "Érdeklődés ingatlan iránt");
            exit();
        } else {
            exit();
        }
    }    

}
?>