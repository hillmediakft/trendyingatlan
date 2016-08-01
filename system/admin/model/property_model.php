<?php

class Property_model extends Admin_model {

    function __construct() {
        parent::__construct();
    }

    /**
     * 	A lakások listájához kérdezi le az adatokat
     */
    public function all_property_query()
    {
// $this->query->debug(true);
        $this->query->set_table(array('ingatlanok'));
        $this->query->set_columns(array(
          'ingatlanok.id',
          'ingatlanok.kepek',
          'ingatlanok.kategoria',
          'ingatlanok.status',
          'ingatlanok.kiemeles',
          'ingatlanok.tipus',
          'ingatlanok.ar_elado',
          'ingatlanok.ar_kiado',
          'ingatlanok.alapterulet',
          'ingatlanok.szobaszam',
          'ingatlan_kategoria.kat_nev',
          'ingatlanok.megtekintes',
          'users.user_first_name',
          'users.user_last_name',
          'district_list.district_name',
          'city_list.city_name'
        ));

        $this->query->set_join('left', 'ingatlan_kategoria', 'ingatlanok.kategoria', '=', 'ingatlan_kategoria.kat_id');
        $this->query->set_join('left', 'users', 'ingatlanok.ref_id', '=', 'users.user_id');
        $this->query->set_join('left', 'district_list', 'ingatlanok.kerulet', '=', 'district_list.district_id');
        $this->query->set_join('left', 'city_list', 'ingatlanok.varos', '=', 'city_list.city_id');
//csökkenő sorrendben adja vissza
        $this->query->set_orderby(array('id'), 'DESC');
        return $this->query->select();
    }

    /**
     * 	Lekérdezi az ingatlanok összes adatát id alapján
     * 	
     * 	@param array 
     */
    public function get_property_query($id)
    {
// $this->query->debug(true);
        $this->query->set_table(array('ingatlanok'));
        $this->query->set_columns(array(
          'ingatlanok.id',
          'ingatlanok.ref_id',
          'ingatlanok.ingatlan_nev',
          'ingatlanok.leiras',
          'ingatlanok.status',
          'ingatlanok.kiemeles',
          'ingatlanok.tipus',
          'ingatlanok.kategoria',
          'ingatlanok.kerulet',
          'ingatlanok.ar_elado',
          'ingatlanok.ar_kiado',
          'ingatlanok.alapterulet',
          'ingatlanok.szobaszam',
          'ingatlanok.allapot',
          'ingatlanok.kepek',
          'ingatlanok.docs',
          'ingatlanok.varos',
          'ingatlanok.megye',
          'ingatlanok.utca',
          'ingatlanok.iranyitoszam',
          'ingatlanok.utca_megjelenites',
          'ingatlanok.hazszam_megjelenites',
          'ingatlanok.terkep',
          'ingatlanok.hazszam',
          'ingatlanok.emelet',
          'ingatlanok.epulet_szintjei',
          'ingatlanok.kozos_koltseg',
          'ingatlanok.rezsi',
          'ingatlanok.futes',
          'ingatlanok.parkolas',
          'ingatlanok.kilatas',
          'ingatlanok.lift',
          'ingatlanok.butor',
          'ingatlanok.energetika',
          'ingatlanok.kert',
          'ingatlanok.erkely',
          'ingatlanok.terasz',
          'ingatlanok.medence',
          'ingatlanok.szauna',
          'ingatlanok.jacuzzi',
          'ingatlanok.kandallo',
          'ingatlanok.riaszto',
          'ingatlanok.klima',
          'ingatlanok.ontozorendszer',
          'ingatlanok.automata_kapu',
          'ingatlanok.elektromos_redony',
          'ingatlanok.konditerem',
          'ingatlanok.latitude',
          'ingatlanok.longitude',
          'ingatlanok.hozzaadas_datum',
          'ingatlanok.modositas_datum',
          'ingatlanok.tulaj_nev',
          'ingatlanok.tulaj_cim',
          'ingatlanok.tulaj_tel',
          'ingatlanok.tulaj_email',
          'ingatlanok.tulaj_notes',
          'ingatlan_kategoria.kat_nev',
          'district_list.district_name',
          'city_list.city_name',
          'county_list.county_name',
          'ingatlan_allapot.all_leiras',
          'ingatlan_futes.futes_leiras',
          'ingatlan_parkolas.parkolas_leiras',
          'ingatlan_kilatas.kilatas_leiras',
          'ingatlan_energetika.energetika_leiras',
          'ingatlan_kert.kert_leiras',
          'users.user_first_name',
          'users.user_last_name'
        ));

        $this->query->set_join('left', 'ingatlan_kategoria', 'ingatlanok.kategoria', '=', 'ingatlan_kategoria.kat_id');
        $this->query->set_join('left', 'city_list', 'ingatlanok.varos', '=', 'city_list.city_id');
        $this->query->set_join('left', 'county_list', 'ingatlanok.megye', '=', 'county_list.county_id');
        $this->query->set_join('left', 'district_list', 'ingatlanok.kerulet', '=', 'district_list.district_id');
        $this->query->set_join('left', 'ingatlan_allapot', 'ingatlanok.allapot', '=', 'ingatlan_allapot.all_id');
        $this->query->set_join('left', 'ingatlan_futes', 'ingatlanok.futes', '=', 'ingatlan_futes.futes_id');
        $this->query->set_join('left', 'ingatlan_parkolas', 'ingatlanok.parkolas', '=', 'ingatlan_parkolas.parkolas_id');
        $this->query->set_join('left', 'ingatlan_kilatas', 'ingatlanok.kilatas', '=', 'ingatlan_kilatas.kilatas_id');
        $this->query->set_join('left', 'ingatlan_energetika', 'ingatlanok.energetika', '=', 'ingatlan_energetika.energetika_id');
        $this->query->set_join('left', 'ingatlan_kert', 'ingatlanok.kert', '=', 'ingatlan_kert.kert_id');
        $this->query->set_join('left', 'users', 'ingatlanok.ref_id', '=', 'users.user_id');

        $this->query->set_where('id', '=', $id);

        //$this->query->set_where('status', '=', 1);
        $result = $this->query->select();
        return (empty($result)) ? $result : $result[0];
    }

    /**
     * 	Lakás adatainak módosításához kérdezi le az összes adatot a táblából
     */
    public function one_property_alldata_query($id)
    {
        $this->query->set_table(array('ingatlanok'));
        $this->query->set_columns('*');
        $this->query->set_where('id', '=', $id);
        $result = $this->query->select();
        return $result[0];
    }

    /**
     * 	ingatlan adatok adatbázisba (INSERT is, és UPDATE is)
     * 	
     * 	@return	array   üzenetek a javascriptnek
     */
    public function insert_update_property_data()
    {
        //megadja, hogy update, vagy insert lesz
        $update_marker = false;
        //megadja, hogy insert utáni update, normál update lesz (modositas_datum megadása miatt)
        $update_real = false;

        $data = $this->request->get_post();
//echo json_encode($data);

        // megvizsgáljuk, hogy a post adatok között van-e update_id
        // update-nél a javasriptel hozzáadunk a post adatokhoz egy update_id elemet
        if (isset($data['update_id'])) {
            //beállítjuk, hogy update-elni kell az adatbázist
            $update_marker = true;
            $id = (int) $data['update_id'];
            unset($data['update_id']);

            //megvizsgáljuk, hogy adatbevitelkori update, vagy "rendes" update
            // "rendes" update-nél a javasriptel hozzáadunk a post adatokhoz egy update_status elemet is
            if (isset($data['update_status'])) {
                $update_real = true;
                unset($data['update_status']);
            }
        }

        $error_messages = array();
        $error_counter = 0;
//ingatlan kategória

        if (empty($data['tipus'])) {
            $error_messages[] = Message::show('Nem adta meg az ingatlan ügylet típusát (eladó/kiadó).');
            $error_counter += 1;
        }
//ingatlan kategória
        if (empty($data['kategoria'])) {
            $error_messages[] = Message::show('Nem adta meg az ingatlan fajtáját.');
            $error_counter += 1;
        }
//tulajdonos adatai
        if (empty($data['tulaj_nev'])) {
            $error_messages[] = Message::show('A tulajdonos neve nem lehet üres.');
            $error_counter += 1;
        }
// ár
        if (empty($data['ar_elado']) && empty($data['ar_kiado'])) {
            $error_messages[] = Message::show('Nem adott meg árat.');
            $error_counter += 1;
        }
// cim adatok
        if (empty($data['megye'])) {
            $error_messages[] = Message::show('Nem adta meg a cím adatoknál a megyét.');
            $error_counter += 1;
        }

        if (empty($data['varos'])) {
            $error_messages[] = Message::show('Nem adta meg a cím adatoknál a várost.');
            $error_counter += 1;
        }
        
        if (empty($data['utca'])) {
            $error_messages[] = Message::show('Nem adta meg a cím adatoknál az utcát.');
            $error_counter += 1;
        }

        if ($error_counter == 0) {

            // üres stringet tartalmazó elemek esetén az adatbázisba null érték kerül
            foreach ($data as $key => $value) {
                if (isset($value) && $value == '') {
//unset($data[$key]);
                    $data[$key] = null;
                }
            }

            $data['ar_elado'] = ($data['tipus'] == 1) ? $data['ar_elado'] : null;
            $data['ar_kiado'] = ($data['tipus'] == 2) ? $data['ar_kiado'] : null;
            $data['hazszam'] = (isset($data['hazszam'])) ? $data['hazszam'] : '';
            $data['kerulet'] = (isset($data['kerulet'])) ? $data['kerulet'] : null;



//geolocation
            include(LIBS . '/geocoder_class.php');
//$address = $iranyitoszam . ' ' . $varos . ' ' . $utca . ' ' . $hazszam . ' ' . $kerulet . ' kerulet';
            $address = $data['iranyitoszam'] . ' ' . $data['varos'] . ' ' . $data['utca'] . ' ' . $data['hazszam'];
            $loc = geocoder::getLocation($address);
            if ($loc) {
                $data['latitude'] = $loc['lat'];
                $data['longitude'] = $loc['lng'];
            } else {
                $data['latitude'] = 0;
                $data['longitude'] = 0;
            }


            $data['utca_megjelenites'] = (isset($data['utca_megjelenites'])) ? 1 : 0;
            $data['hazszam_megjelenites'] = (isset($data['hazszam_megjelenites'])) ? 1 : 0;
            $data['terkep'] = (isset($data['terkep'])) ? 1 : 0;
// jellemzők
            $data['erkely'] = (isset($data['erkely'])) ? 1 : 0;
            $data['terasz'] = (isset($data['terasz'])) ? 1 : 0;
            $data['medence'] = (isset($data['medence'])) ? 1 : 0;
            $data['szauna'] = (isset($data['szauna'])) ? 1 : 0;
            $data['jacuzzi'] = (isset($data['jacuzzi'])) ? 1 : 0;
            $data['kandallo'] = (isset($data['kandallo'])) ? 1 : 0;
            $data['riaszto'] = (isset($data['riaszto'])) ? 1 : 0;
            $data['klima'] = (isset($data['klima'])) ? 1 : 0;
            $data['ontozorendszer'] = (isset($data['ontozorendszer'])) ? 1 : 0;
            $data['automata_kapu'] = (isset($data['automata_kapu'])) ? 1 : 0;
            $data['elektromos_redony'] = (isset($data['elektromos_redony'])) ? 1 : 0;
            $data['konditerem'] = (isset($data['konditerem'])) ? 1 : 0;


            if ($update_marker) {
// UPDATE
                // az update-nél már nem kell a referens id-jét módosítani
                unset($data['ref_id']);

                if ($update_real) {
                    // a módosítás dátum a "rendes" módosításkor fog bekerülni az adatbázisba 
                    $data['modositas_datum'] = time();
                }

                $this->query->set_table(array('ingatlanok'));
                $this->query->set_where('id', '=', $id);
                $result = $this->query->update($data);
                
                if ($result === 0 || $result === 1) {
                    
                    if ($update_real) {
                        Message::set('success', 'A módosítások sikeresen elmentve!');
                    } else {
                        Message::set('success', 'Ingatlan adatai elmentve.');
                    }
                
                    return array(
                        "status" => 'success',
                        "message" => ''
                    );

                } else {
                    Message::set('error', 'A módosítások mentése nem sikerült, próbálja újra!');

                    return array(
                        "status" => 'error',
                        "message" => ''
                    );
                }
            } else {
// INSERT
                $data['ref_id'] = Session::get('user_id');
                $data['hozzaadas_datum'] = time();

// $this->query->debug(true);
                $this->query->set_table(array('ingatlanok'));
                // a last insert id-t adja vissza
                $last_id = $this->query->insert($data);

                return array(
                    "status" => 'success',
                    "last_insert_id" => $last_id,
                    "message" => 'Az adatok bekerültek az adatbázisba.'
                );

            }
        } else {
            // visszaadja a hibaüzeneteket tartalmazó tömböt
            return array(
                "status" => 'error',
                "error_messages" => $error_messages
            );

        }
    }

    /**
     * 	(AJAX) Lakás törlése
     *
     * 	@param	integer	$id 	a törlendő rekord id-je
     * 	@return	bool	true || false
     */
    public function delete_property_AJAX($id)
    {
//a lakáshoz tartozó fileok nevének lekérdezése	
        $this->query->set_table(array('ingatlanok'));
        $this->query->set_columns(array('kepek', 'docs'));
        $this->query->set_where('id', '=', $id);
        $files_arr = $this->query->select();
        if (!empty($files_arr[0]['kepek'])) {
            //képek nevét tartalmazó tömb
            $photos_arr = json_decode($files_arr[0]['kepek']);
        }
        if (!empty($files_arr[0]['docs'])) {
            //dokumentumok nevét tartalmazó tömb
            $docs_arr = json_decode($files_arr[0]['docs']);
        }

//lakás törlése	
        $this->query->reset();
        $this->query->set_table(array('ingatlanok'));
        //a delete() metódus integert (lehet 0 is) vagy false-ot ad vissza
        $result = $this->query->delete('id', '=', $id);

// ha a törlési sql parancsban nincs hiba
        if ($result !== false) {
            if ($result > 0) {
//sikeres törlés
//ha az adatbázisban léteznek képek
                if (isset($photos_arr)) {
                    $photo_path = Config::get('ingatlan_photo.upload_path');
//képek törlése
                    foreach ($photos_arr as $filename) {
                        $thumb_path = Util::thumb_path($photo_path . $filename);
                        $small_path = Util::small_path($photo_path . $filename);
                        // nagy kép törlése
                        if (!Util::del_file($photo_path . $filename)) {
                            Message::log($filename . ' - nevü file törlése nem sikerült!');
                        };
                        // small kép törlése
                        if (!Util::del_file($small_path)) {
                            Message::log($filename . ' - nevü file törlése nem sikerült!');
                        };
                        // thumb kép törlése
                        if (!Util::del_file($thumb_path)) {
                            Message::log($filename . ' - nevü file törlése nem sikerült!');
                        };
                    }
                }
                // ha az adatbázisban léteznek dokumentumok
                if (isset($docs_arr)) {
                    $docs_path = Config::get('ingatlan_doc.upload_path');
                    //dokumentumok törlése
                    foreach ($docs_arr as $filename) {
                        if (!Util::del_file($docs_path . $filename)) {
                            Message::log($filename . ' - nevü file törlése nem sikerült!');
                        };
                    }
                }
                // ha minden sikerült
                return true;
            } else {
                //sikertelen törlés (0 sor lett törölve)
                return false;
            }
        } else {
            // ha a törlési sql parancsban hiba van
            echo json_encode(array(
                "status" => 'error',
                "message" => 'Adatbázis lekérdezési hiba!'
            ));
            exit();
        }
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
     * 	Lekérdezi a városok nevét és id-jét a city_list táblából (az option listához)
     * 	A paraméter megadja, hogy melyik megyében lévő városokat adja vissza 		
     * 	@param integer	$id 	egy megye id-je (county_id)
     * 	@return array
     */
    public function utca_list_query($id = null)
    {
        $this->query->set_table(array('street_list'));
        $this->query->set_columns(array('street_id', 'street_name', 'zip_code'));
        if (!is_null($id)) {
            $this->query->set_where('district', '=', $id);
        }
        return $this->query->select();
    }

    /**
     * 	Lakás képet méretezi és tölti fel a szerverre (thumb képet is)
     * 	
     * 	@param	$files_array	Array ($_FILES['valami'])
     * 	@return	Array (képek nevét tartalmazó tömb) or echo errors (json)
     */
    public function upload_property_photo($files_array)
    {
        include(LIBS . "/upload_class.php");
// feltöltés helye
        $imagePath = Config::get('ingatlan_photo.upload_path');
//hibákat tartalmazó tömb	
        $errors = array();

// multiple feltöltésnél át kell alakítani a $_FILES tömb szerkezetét single-re mert az osztály csak úgy tudja feldolgozni
        $files = array();
        foreach ($files_array as $k => $l) {
            foreach ($l as $i => $v) {
                if (!array_key_exists($i, $files))
                    $files[$i] = array();
                $files[$i][$k] = $v;
            }
        }

// több file feltöltése
        foreach ($files as $file) {
            // képkezelő objektum létrehozása (a kép a szerveren a tmp könyvtárba kerül)	
            $handle = new Upload($file);
            // fájlneve utáni random karakterlánc
            $suffix = md5(uniqid());

    //file átméretezése, vágása, végleges helyre mozgatása
            if ($handle->uploaded) {
                // kép paramétereinek módosítása
                $handle->file_auto_rename = true;
                $handle->file_safe_name = true;
                $handle->allowed = array('image/*');
                $handle->file_new_name_body = "property_" . $suffix;
                $handle->image_resize = true;
                $handle->image_x = Config::get('ingatlan_photo.width', 323); //kép szélessége

                if (Config::get('ingatlan_photo.y_ratio') === true) {
                    $handle->image_ratio_y = true;
                } else {
                    $handle->image_y = Config::get('ingatlan_photo.height', 200); //kép magassága
                    //képarány meghatározása a nézőképhez
                    $ratio = ($handle->image_x / $handle->image_y);
                }

    // kép készítése
                $handle->Process($imagePath);
                if ($handle->processed) {
                    // kép elérési útja és új neve (ezzel tér vissza a metódus, ha nincs hiba!)
                    // $dest_imagePath = $imagePath . $handle->file_dst_name;
                    // a kép neve (ezzel tér vissza a metódus, ha nincs hiba!)
                    $image_name = $handle->file_dst_name;
                } else {
                    $errors[] = Message::show($handle->error);
                    continue;
                }

                $original_name = $handle->file_dst_name_body;

    // Small kép készítése            
                $handle->file_new_name_body = $original_name;
                $handle->file_name_body_add = '_small';

                $handle->image_resize = true;
                $handle->image_x = Config::get('ingatlan_photo.small_width', 400); //nézőkép szélessége

                if (Config::get('ingatlan_photo.y_ratio') === true) {
                    $handle->image_ratio_y = true;
                } else {
                    $handle->image_y = round($handle->image_x / $ratio);
                }

                $handle->Process($imagePath);

    // Nézőkép készítése
                //nézőkép nevének megadása (kép új neve utána _thumb)	
                $handle->file_new_name_body = $original_name;
                $handle->file_name_body_add = '_thumb';

                $handle->image_resize = true;
                $handle->image_x = Config::get('ingatlan_photo.thumb_width', 80); //nézőkép szélessége

                if (Config::get('ingatlan_photo.y_ratio') === true) {
                    $handle->image_ratio_y = true;
                } else {
                    $handle->image_y = round($handle->image_x / $ratio);
                }

                $handle->Process($imagePath);
                if ($handle->processed) {
                    //temp file törlése a szerverről
                    $handle->clean();
                } else {
                    //$errors[] = Message::show($handle->error);
                    continue;
                }
            } else {
                $errors[] = Message::show($handle->error);
                continue;
            }
            // ha nincs hiba visszadja a feltöltött kép nevét
            $image_names[] = $image_name;
            unset($handle);
        }

        if (!empty($errors)) {
            //visszaküldi a hibákat a javascriptnek és megállítja a php script futását
            echo json_encode($errors);
            exit();
        } else {
            //ha nincs hiba visszaadja a képek neveit tartalmazó tömböt
            return $image_names;
        }
    }

    /**
     * 	Dokumentumokat tölti fel a szerverre
     *
     * 	@param	$files_array	Array ($_FILES['valami'])
     * 	@return	String (kép elérési útja) or echo errors (json)
     */
    public function upload_property_doc($files_array, $id)
    {
//hibaüzenetek tömbje
        $errors = array();

        include(LIBS . "/upload_class.php");
// feltöltés helye
        $filePath = Config::get('ingatlan_doc.upload_path');

// multiple feltöltésnél át kell alakítani a $_FILES tömb szerkezetét single-re mert az osztály csak úgy tudja feldolgozni
        $files = array();
        foreach ($files_array as $k => $l) {
            foreach ($l as $i => $v) {
                if (!array_key_exists($i, $files))
                    $files[$i] = array();
                $files[$i][$k] = $v;
            }
        }

// több file feltöltése
        foreach ($files as $file) {
//képkezelő objektum létrehozása (a kép a szerveren a tmp könyvtárba kerül)	
            $handle = new Upload($file);
// fájlneve utáni random karakterlánc
//$suffix = md5(uniqid());
//documentum végleges helyre mozgatása
            if ($handle->uploaded) {
// file paramétereinek módosítása
                $handle->file_name_body_pre = $id . '_';
//$handle->file_auto_rename 	 = true;
                $handle->file_safe_name = true;

                $handle->allowed = array('application/*', 'text/*', 'image/jpeg', 'image/pjpeg', 'image/png', 'image/x-png');
                /*
                  $handle->allowed = array(
                  'image/jpeg', 'image/pjpeg',
                  'image/png',  'image/x-png',
                  'image/bmp', 'image/x-bmp', 'image/x-bitmap', 'image/x-xbitmap', 'image/x-win-bitmap', 'image/x-windows-bmp', 'image/ms-bmp', 'image/x-ms-bmp', 'application/bmp', 'application/x-bmp', 'application/x-win-bitmap',
                  'text/plain', 'text/richtext', 'text/rtf', 'text/xml',
                  'application/xml',
                  'application/pdf',
                  'application/json',
                  'application/excel',
                  'application/msexcel',
                  'application/vnd.ms-excel',
                  'application/x-msexcel',
                  'application/x-ms-excel',
                  'application/x-excel',
                  'application/x-dos_ms_excel',
                  'application/xls',
                  'application/x-xls',
                  'application/msword',
                  'application/vnd.ms-office',
                  'application/vnd.openxmlformats-officedocument.wordprocessingml.document',
                  'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet',
                  'application/powerpoint', 'application/vnd.ms-powerpoint',
                  'application/vnd.openxmlformats-officedocument.presentationml.presentation'
                  );
                 */

//$handle->file_new_name_body   	 = "doc_" . $suffix;
// File véglegesítése
                $handle->Process($filePath);
                if ($handle->processed) {
                    $doc_name = $handle->file_dst_name;
                } else {
                    $errors[] = Message::show($handle->error);
                    continue;
//return false;
                }
            } else {
                $errors[] = Message::show($handle->error);
                continue;
//return false;	
            }

            $doc_names[] = $doc_name;
            unset($handle);
        }

        if (!empty($errors)) {
//visszaküldi a hibákat a javascriptnek és megállítja a php script futását
            echo json_encode($errors);
            exit();
        } else {
//ha nincs hiba visszaadja a fájlok neveit tartalmazó tömböt
            return $doc_names;
        }
    }

    /**
     * 	Kép vagy dokumentum fájlok json adatainak lekérdezése
     *
     * 	@param	integer $id  		rekord id-je
     * 	@param	string  $column  	oszlop neve (kepek, docs)
     * 	@return	string				json string (kép vagy dokumentum fájlok neveit tartalmazó json)
     */
    public function file_data_query($id, $column)
    {
        $this->query->set_table(array('ingatlanok'));
        $this->query->set_columns(array($column));
        $this->query->set_where('id', '=', $id);
        $result = $this->query->select();
        return $result[0][$column];
    }

    /**
     * 	A képek és dokumentumok neveit teszi be az ingatlanok táblába
     *
     * 	@param	array	$new_file_names		fájlok nevei tömbben	
     * 	@param	string	$column				db oszlop neve
     * 	@param	integer	$id					rekord id-je
     * 	@return	bool	true || false	
     */
    public function property_file_query($new_file_names, $column, $id)
    {
// lekérdezzük a képek vagy docs mező értékét
        $result = $this->file_data_query($id, $column);

        $temp_arr = array();

// ha már tartalmaz adatot a mező
        if (!empty($result)) {
// átalakítjuk tömbbé a json-t
            $temp_arr = json_decode($result);

            $temp_arr = array_merge($temp_arr, $new_file_names);
        } else {
//ha először kerül a mezőbe adat
            $temp_arr = $new_file_names;
        }
        if ($column == 'kepek') {
            $data['kepek_szama'] = count($temp_arr);
        }

// visszaalakítjuk json-ra
        $data[$column] = json_encode($temp_arr);

// beírjuk az adatbázisba
        $this->query->reset();
        $this->query->set_table(array('ingatlanok'));
        $this->query->set_where('id', '=', $id);
        return $this->query->update($data);
    }

    /**
     * 	A sorbarendezett képek adatait teszi az adatbázisba
     *
     * 	@param	integer	$id 			a rekord id-je
     * 	@param	string	$sort_json 	json string: elem_1[]=3,elem_2[]=1,elem_3[]=2
     * 	@return	bool	true || false	 
     */
    public function photo_sort($id, $sort_json)
    {
        // képek adatainak lekérdezése
        $string_json = $this->file_data_query($id, 'kepek');
        // képek nevei tömbbe
        $photo_arr = json_decode($string_json);

        // sorrendet tartalamzó string átalakítása tömb formára
        parse_str($sort_json, $key_array);

        // új sorrendet tartalmazó tömb ($result_arr) létrehozása 
        $result_arr = array();
        //a $key_array tartalama pl.: 'elem' => array(1,5,3,4,2)
        //a $sort_array tartalma pl.: array(1,5,3,4,2)
        foreach ($key_array as $key => $sort_array) {
            foreach ($sort_array as $index => $value) {
                $new_index = $value - 1;
                $result_arr[] = $photo_arr[$new_index];
            }
        }

        $data['kepek'] = json_encode($result_arr);

        // beírjuk az adatbázisba
        $this->query->set_table(array('ingatlanok'));
        $this->query->set_where('id', '=', $id);
        return $this->query->update($data);
    }

    /**
     * 	File törlése (a feltöltöttek listából)
     *
     * 	@param	integer		$id  annak a sornak az id-je az ingatlanok táblában, ahol a képet törölni akarjuk
     * 	@param	integer		$sort_id  annak a képnek az indexe amit törölni akarjuk (ha már tömb-bé van alakítva a json string)
     * 	@param	string		adatbázis oszlop neve (kepek vagy docs) megadja, hogy képet, vagy dokumentumot kell lekérdezni, törölni
     * 	@return	bool		true || false
     */
    public function file_delete($id, $sort_id, $type)
    {
// képek vagy dokumentumok lekérdezése (json)
        $string_json = $this->file_data_query($id, $type);
// fájlok nevét tartalmazó tömb
        $file_name_arr = json_decode($string_json);
// törlendő file neve
        $filename = $file_name_arr[$sort_id];
// töröljük a tömbből az elemet
        unset($file_name_arr[$sort_id]);

// ha az utolsó file-t is töröljük, akkor null értéket kell írnunk az adatbázisba
        if (empty($file_name_arr)) {
            $data[$type] = null;
        } else {
// ha nem üres a tömb, akkor újraindexeljük
            $file_name_arr = array_values($file_name_arr);
// új fájl lista átakaítása json formátumra 
            $new_file_list = json_encode($file_name_arr);

            $data[$type] = $new_file_list;
        }

// módosított file lista beírása az adatbázisba
        $this->query->set_table(array('ingatlanok'));
        $this->query->set_where('id', '=', $id);
        $result = $this->query->update($data);

        if ($result) {
// kép (és thumb) törlése
            if ($type == 'kepek') {
                $photo_path = Config::get('ingatlan_photo.upload_path') . $filename;
                $thumb_path = Util::thumb_path($photo_path);
                $small_path = Util::small_path($photo_path);

// nagy kép törlése
                if (!Util::del_file($photo_path)) {
                    Message::log($filename . ' - nevü file törlése nem sikerült!');
                };
// thumb kép törlése
                if (!Util::del_file($thumb_path)) {
                    Message::log($filename . ' - nevü file törlése nem sikerült!');
                };
// small kép törlése
                if (!Util::del_file($small_path)) {
                    Message::log($filename . ' - nevü file törlése nem sikerült!');
                };                
            }
// dokumentum file törlése
            if ($type == 'docs') {
                $docs_path = Config::get('ingatlan_doc.upload_path') . $filename;
//dokumentumok törlése
                if (!Util::del_file($docs_path)) {
                    Message::log($filename . ' - nevü file törlése nem sikerült!');
                };
            }
            return true;
        } else {
            return false;
        }
    }

    /**
     * 	(AJAX) Az ingatlanok tábla status mezőjének ad értéket
     * 	siker vagy hiba esetén megy vissza az üzenet a javascriptnek 	
     *
     * 	@param	integer	$id	
     * 	@param	integer	$data (0 vagy 1)	
     * 	@return boolean
     */
    public function change_status_query($id, $data)
    {
        $this->query->set_table(array('ingatlanok'));
        $this->query->set_where('id', '=', $id);
        $result = $this->query->update(array('status' => $data));
        return ($result) ? true : false;
    }

    /**
     * 	(AJAX) Az ingatlanok tábla status mezőjének ad értéket
     * 	siker vagy hiba esetén megy vissza az üzenet a javascriptnek 	
     *
     * 	@param	integer	$id	
     * 	@param	integer	$data (0 vagy 1)	
     * 	@return void
     */
    public function change_kiemeles_query($id, $data)
    {
        $this->query->set_table(array('ingatlanok'));
        $this->query->set_where('id', '=', $id);
        $result = $this->query->update(array('kiemeles' => $data));

        if ($result === 1) {
            echo json_encode(array("status" => 'success'));
        } else {
            echo json_encode(array("status" => 'error'));
        }
    }

    /**
     * 	Lekérdezi a városok nevét és id-jét a city_list táblából (az option listához)
     * 	A paraméter megadja, hogy melyik megyében lévő városokat adja vissza 		
     * 	@param integer	$id 	egy megye id-je (county_id)
     */
    public function city_list_query($id = null)
    {
        $this->query->set_table(array('city_list'));
        $this->query->set_columns(array('city_id', 'city_name'));
        if (!is_null($id)) {
            $this->query->set_where('county_id', '=', $id);
        }
        $this->query->set_orderby(array('city_name'), 'ASC');
        return $this->query->select();
    }

    /**
     * 	Lekérdezi a megyék nevét és id-jét a county_list táblából (az option listához)
     */
    public function county_list_query()
    {
        $this->query->set_table(array('county_list'));
        $this->query->set_columns(array('county_id', 'county_name'));
        return $this->query->select();
    }

    /**
     * 	Lekérdez miden elemet az ingatlana_allapot táblából (az option listához)
     */
    public function allapot_list_query()
    {
        $this->query->set_table(array('ingatlan_allapot'));
        $this->query->set_columns(array('all_id', 'all_leiras'));
        return $this->query->select();
    }

    /**
     * 	Lekérdez miden elemet az ingatlan_futés táblából (az option listához)
     */
    public function futes_list_query()
    {
        $this->query->set_table(array('ingatlan_futes'));
        $this->query->set_columns(array('futes_id', 'futes_leiras'));
        return $this->query->select();
    }

    /**
     * 	Lekérdez miden elemet az ingatlan ingatlan_energetika táblából (az option listához)
     */
    public function energetika_list_query()
    {
        $this->query->set_table(array('ingatlan_energetika'));
        $this->query->set_columns(array('energetika_id', 'energetika_leiras'));
        return $this->query->select();
    }

    /**
     * 	Lekérdez miden felhasználót a users táblából (az option listához)
     */
    public function users_list_query()
    {
        $this->query->set_table(array('users'));
        $this->query->set_columns(array('user_id', 'user_first_name', 'user_last_name'));
        return $this->query->select();
    }

    /**
     * 	Ingatlanok lekéderzése szűrési feltételekkel
     */
    public function properties_filter_query()
    {
        $params = $this->request->get_query();

        $this->query->reset();
// $this->query->debug(true);
        $this->query->set_table(array('ingatlanok'));
        $this->query->set_columns(array(
          'ingatlanok.id',
          'ingatlanok.kepek',
          'ingatlanok.kategoria',
          'ingatlanok.status',
          'ingatlanok.kiemeles',
          'ingatlanok.tipus',
          'ingatlanok.ar_elado',
          'ingatlanok.ar_kiado',
          'ingatlanok.alapterulet',
          'ingatlanok.szobaszam',
          'ingatlanok.megtekintes',
          'ingatlan_kategoria.kat_nev',
          'users.user_first_name',
          'users.user_last_name',
          'district_list.district_name',
          'city_list.city_name'
        ));
        $this->query->set_join('left', 'ingatlan_kategoria', 'ingatlanok.kategoria', '=', 'ingatlan_kategoria.kat_id');
        $this->query->set_join('left', 'users', 'ingatlanok.ref_id', '=', 'users.user_id');
        $this->query->set_join('left', 'district_list', 'ingatlanok.kerulet', '=', 'district_list.district_id');
        $this->query->set_join('left', 'city_list', 'ingatlanok.varos', '=', 'city_list.city_id');
//csökkenő sorrendben adja vissza


        if (isset($params['id']) && !empty($params['id'])) {
            $this->query->set_where('id', '=', $params['id']);
        }
        if (isset($params['status']) && ($params['status'] != '')) {
            $this->query->set_where('status', '=', $params['status']);
        }
        if (isset($params['kiemeles']) && ($params['kiemeles'] != '')) {
            $this->query->set_where('kiemeles', '=', $params['kiemeles']);
        }
        if (isset($params['ref_id']) && !empty($params['ref_id'])) {
            $this->query->set_where('ref_id', '=', $params['ref_id']);
        }
        if (isset($params['tipus']) && !empty($params['tipus'])) {
            $this->query->set_where('tipus', '=', $params['tipus']);
        }
        if (isset($params['kategoria']) && !empty($params['kategoria'])) {
            $this->query->set_where('kategoria', '=', $params['kategoria']);
        }
        if (isset($params['megye']) && !empty($params['megye'])) {
            $this->query->set_where('megye', '=', $params['megye']);
        }
        if (isset($params['varos']) && !empty($params['varos'])) {
            $this->query->set_where('varos', '=', $params['varos']);
        }
        if (isset($params['kerulet']) && !empty($params['kerulet'])) {
            $this->query->set_where('kerulet', '=', $params['kerulet']);
        }
        if (isset($params['tulaj_nev']) && !empty($params['tulaj_nev'])) {
            $this->query->set_where('tulaj_nev', 'LIKE', '%' . $params['tulaj_nev'] . '%');
        }

        /*         * ************************* ÁR ALAPJÁN KERESÉS **************************** */

        // csak minimum ár van megadva
        if ((isset($params['min_ar']) && !empty($params['min_ar'])) AND ( $params['min_ar'] > 0) AND ( isset($params['max_ar']) AND $params['max_ar'] == '')) {
            if (isset($params['tipus']) && $params['tipus'] == 1) {
                $this->query->set_where('ar_elado', '>=', $params['min_ar']);
            } elseif (isset($params['tipus']) && $params['tipus'] == 2) {
                $this->query->set_where('ar_kiado', '>=', $params['min_ar']);
            }
        }

        // csak maximum ár van megadva
        if ((isset($params['max_ar']) && !empty($params['max_ar'])) AND ( $params['max_ar'] > 0) AND ( isset($params['min_ar']) AND $params['min_ar'] == '')) {
            if (isset($params['tipus']) && $params['tipus'] == 1) {
                $this->query->set_where('ar_elado', '<=', $params['max_ar']);
            } elseif (isset($params['tipus']) && $params['tipus'] == 2) {
                $this->query->set_where('ar_kiado', '<=', $params['max_ar']);
            }
        }
        // minimum és maximum ár is meg van adva
        if ((isset($params['min_ar']) && !empty($params['min_ar'])) AND ( $params['min_ar'] > 0) AND ( isset($params['max_ar']) && !empty($params['max_ar'])) AND ( $params['max_ar'] > 0)) {
            if (isset($params['tipus']) && $params['tipus'] == 1) {
                $this->query->set_where('ar_elado', '>=', $params['min_ar']);
                $this->query->set_where('ar_elado', '<=', $params['max_ar']);
            } elseif (isset($params['tipus']) && $params['tipus'] == 2) {
                $this->query->set_where('ar_kiado', '>=', $params['min_ar']);
                $this->query->set_where('ar_kiado', '<=', $params['max_ar']);
            }
        }


        /*         * ************************* TERÜLET ALAPJÁN KERESÉS **************************** */

        // csak minimum terület van megadva
        if ((isset($params['min_alapterulet']) && !empty($params['min_alapterulet'])) AND ( $params['min_alapterulet'] > 0) AND ( isset($params['max_alapterulet']) AND $params['max_alapterulet'] == '')) {
            $this->query->set_where('alapterulet', '>=', $params['min_alapterulet']);
        }

        // csak maximum terulet van megadva
        if ((isset($params['max_alapterulet']) && !empty($params['max_alapterulet'])) AND ( $params['max_alapterulet'] > 0) AND ( isset($params['min_alapterulet']) AND $params['min_alapterulet'] == '')) {
            $this->query->set_where('alapterulet', '<=', $params['max_alapterulet']);
        }
        // minimum és maximum ár is meg van adva
        if ((isset($params['min_alapterulet']) && !empty($params['min_alapterulet'])) AND ( $params['min_alapterulet'] > 0) AND ( isset($params['max_alapterulet']) && !empty($params['max_alapterulet'])) AND ( $params['max_alapterulet'] > 0)) {
            $this->query->set_where('alapterulet', '>=', $params['min_alapterulet']);
            $this->query->set_where('alapterulet', '<=', $params['max_alapterulet']);
        }

        /*         * ********************* MINIMUM SZOBASZÁM ********************** */
        // minimum szobaszám
        if (isset($params['szobaszam']) && !empty($params['szobaszam']) AND $params['szobaszam'] > 0) {
            $this->query->set_where('szobaszam', '>=', $params['szobaszam']);
        }


        $this->query->set_orderby(array('id'), 'DESC');

        return $this->query->select();
    }

    /**
     * 	Lekérdezi a paraméterben megadott tábla rekordjainak számát
     *
     * 	@param	string	$table
     * 	@return	integer
     */
    public function count($table)
    {
        $sth = $this->connect->query("SELECT COUNT(*) FROM `" . $table . "`");
        $result = $sth->fetch(PDO::FETCH_NUM);
        return (int) $result[0];
    }

}
?>