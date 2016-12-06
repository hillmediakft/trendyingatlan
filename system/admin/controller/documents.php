<?php

class Documents extends Admin_controller {

    function __construct() {
        parent::__construct();
        $this->loadModel('document_model');
    }

    public function index() {
        $this->view = new View();

        $this->view->title = 'Admin document oldal';
        $this->view->description = 'Admin document oldal description';

        $this->view->add_links(array('datatable', 'bootbox', 'vframework', 'documents'));

        $this->view->all_document = $this->document_model->find();
// $this->view->debug(true);		
        $this->view->set_layout('tpl_layout');
        $this->view->render('documents/tpl_document_list');
    }

    /**
     * Blog bejegyzés hozzáadása
     */
    public function insert() {

        if ($this->request->has_post()) {
            $result = $this->document_model->insert();

            if ($result) {
                Util::redirect('documents');
            } else {
                Util::redirect('documents/insert');
            }
        }

        $this->view = new View();

        $this->view->title = 'Admin document oldal';
        $this->view->description = 'Admin document oldal description';

        $this->view->add_links(array('validation', 'ckeditor', 'vframework', 'kartik-bootstrap-fileinput', 'document_insert'));

        $this->view->category_list = $this->document_model->findCategories();

        $this->view->set_layout('tpl_layout');
        $this->view->render('documents/tpl_document_insert');
    }

    /**
     * Blog bejegyzés módosítása
     */
    public function update() {
        if ($this->request->has_post()) {

            $result = $this->document_model->update($this->request->get_params('id'));
            if ($result) {
                Util::redirect('document');
            } else {
                Util::redirect('document/update/' . $this->request->get_params('id'));
            }
        }

        $this->view = new View();

        $this->view->title = 'Admin document oldal';
        $this->view->description = 'Admin document oldal description';

        $this->view->add_links(array('bootstrap-fileupload', 'ckeditor', 'vframework', 'document_update'));

        $this->view->category_list = $this->document_model->category_query();
        $this->view->content = $this->document_model->document_query2($this->request->get_params('id'));
//$this->view->debug(true);		
        $this->view->set_layout('tpl_layout');
        $this->view->render('document/tpl_document_update');
    }

    /**
     * 	Blog törlése AJAX-al
     */
    public function delete_document_AJAX() {
        if ($this->request->is_ajax()) {
            if (1) {
                // a POST-ban kapott user_id egy string ami egy szám vagy számok felsorolása pl.: "23" vagy "12,45,76" 
                $id = $this->request->get_post('item_id');
                $respond = $this->document_model->delete_document_AJAX($id);
                echo json_encode($respond);
            } else {
                echo json_encode(array(
                    'status' => 'error',
                    'message' => 'Nincs engedélye a művelet végrehajtásához!'
                ));
            }
        }
    }

    /**
     *  (AJAX) Új lakás adatok bevitele adatbázisba,
     *  Lakás adatok módosítása az adatbázisban
     */
    public function insert_update_data_ajax() {
        if ($this->request->is_ajax()) {
            if ($this->request->has_post()) {
                $result = $this->document_model->insert_update_document_data();
                // válasz a javascriptnek
                echo json_encode($result);
            }
        } else {
            Util::redirect('error');
        }
    }

    /**
     * Blog kategóriák 
     */
    public function category() {
        $this->view = new View();

        $this->view->title = 'Admin document oldal';
        $this->view->description = 'Admin document oldal description';

        $this->view->add_links(array('datatable', 'bootbox', 'vframework', 'document_category'));

        $this->view->all_document_category = $this->document_model->category_query();
        $this->view->category_counter = $this->document_model->category_counter_query();
//$this->view->debug(true);			
        $this->view->set_layout('tpl_layout');
        $this->view->render('document/tpl_document_category');
    }

    /**
     * Kategória hozzáadása és módosítása (AJAX)
     */
    public function category_insert_update() {
        if ($this->request->is_ajax()) {
            $id = $this->request->get_post('id');
            $category_name = $this->request->get_post('data');
            $result = $this->document_model->category_insert_update($id, $category_name);
            echo json_encode($result);
        }
    }

    /**
     * 	Kategória törlése (AJAX)
     */
    public function category_delete() {
        if ($this->request->is_ajax()) {
            if (1) {
                $id = $this->request->get_post('item_id', 'integer');
                $respond = $this->document_model->category_delete($id);
                echo json_encode($respond);
            } else {
                echo json_encode(array(
                    'status' => 'error',
                    'message' => 'Nincs engedélye a művelet végrehajtásához!'
                ));
            }
        }
    }

    /**
     * 	(AJAX) Dokumentum feltöltés
     */
    public function doc_upload_ajax() {
        if ($this->request->is_ajax()) {
            //uploadExtraData beállítás küldi
            $id = $this->request->get_post('id', 'integer');
            $doc_names = $this->document_model->upload_doc($_FILES['new_doc'], $id);
            $result = $this->document_model->file_query($doc_names, 'file', $id);

            if ($result !== false) {
                echo json_encode(array('status' => 'success', 'message' => 'File feltöltése sikeres.'));
            } else {
                echo json_encode(array('status' => 'error', 'message' => 'Ismeretlen hiba!'));
            }
        } else {
            Util::redirect('error');
        }
    }

    /**
     * 	(AJAX) File listát jeleníti (frissíti) meg feltöltéskor (képek)
     */
    public function show_file_list() {
        if ($this->request->is_ajax()) {
            // db rekord id-je
            $id = $this->request->get_post('id', 'integer');
            //adatok lekérdezése (a json stringet adja vissza)
            $result = $this->document_model->getDocuments($id);
            // json string átalakítása tömb-bé
            $temp_arr = json_decode($result);

            // lista HTML generálása
            $html = '';
            $counter = 0;

            $file_location = Config::get('documents.upload_path');

            foreach ($temp_arr as $key => $value) {
                $counter = $key + 1;
                $file_path = Util::thumb_path($file_location . $value);
                $html .= '<li id="doc_' . $counter . '" class="list-group-item"><i class="glyphicon glyphicon-file"> </i>&nbsp;' . $value . '<button type="button" class="btn btn-xs btn-default" style="position: absolute; top:8px; right:8px;"><i class="glyphicon glyphicon-trash"></i></button></li>' . "\n\r";
            }

            // lista visszaküldése a javascriptnek
            echo $html;
        } else {
            Util::redirect('error');
        }
    }

    public function download() {
        $file = $this->request->get_params('file');
        $file_path = Config::get('documents.upload_path') . $file;
        Util::outputFile($file_path, $file);
        exit;
    }

}

?>