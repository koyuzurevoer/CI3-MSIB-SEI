<?php
class ProyekLokasi_model extends CI_Model {
    public function __construct() {
        parent::__construct();
    }

    public function get_all() {
        $response = file_get_contents('http://localhost:8080/proyek-lokasi');
        return json_decode($response, true);
    }
}
