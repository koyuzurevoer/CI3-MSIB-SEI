<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ApiController extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->helper('url');
        $this->load->library('curl');
    }

    private function api_request($method, $url, $data = null) {
        $options = [
            'http' => [
                'method'  => $method,
                'header'  => 'Content-Type: application/x-www-form-urlencoded',
                'content' => $data ? http_build_query($data) : null
            ],
        ];
        $context = stream_context_create($options);
        $response = file_get_contents($url, false, $context);
        if ($response === FALSE) {
            show_error('API request failed.', 500);
        }
        return json_decode($response, true);
    }

    public function index() {
        $data['proyek'] = $this->api_request('GET', 'http://localhost:8080/proyek');
        $data['lokasi'] = $this->api_request('GET', 'http://localhost:8080/lokasi');
        $data['proyek_lokasi'] = $this->api_request('GET', 'http://localhost:8080/proyek-lokasi');
        $this->load->view('index', $data);
    }

    // Proyek
    public function proyek_list() {
        $data['proyek'] = $this->api_request('GET', 'http://localhost:8080/proyek');
        $this->load->view('proyek_list', $data);
    }

    public function proyek_tambah() {
        $this->load->view('proyek_tambah');
    }

    public function proyek_simpan() {
        $data = $this->input->post();
        $this->api_request('POST', 'http://localhost:8080/proyek', $data);
        redirect('apicontroller/index');
    }

    public function proyek_edit($id) {
        $data['proyek'] = $this->api_request('GET', 'http://localhost:8080/proyek/' . $id);
        $this->load->view('proyek_edit', $data);
    }

    public function proyek_update($id) {
        $data = $this->input->post();
        $this->api_request('PUT', 'http://localhost:8080/proyek/' . $id, $data);
        redirect('apicontroller/index');
    }

    public function proyek_hapus($id) {
        $this->api_request('DELETE', 'http://localhost:8080/proyek/' . $id);
        redirect('apicontroller/index');
    }


    public function lokasi_list() {
        $data['lokasi'] = $this->api_request('GET', 'http://localhost:8080/lokasi');
        $this->load->view('lokasi_list', $data);
    }

    public function lokasi_tambah() {
        $this->load->view('lokasi_tambah');
    }

    public function lokasi_simpan() {
        $data = $this->input->post();
        $this->api_request('POST', 'http://localhost:8080/lokasi', $data);
        redirect('apicontroller/index');
    }

    public function lokasi_edit($id) {
        $data['lokasi'] = $this->api_request('GET', 'http://localhost:8080/lokasi/' . $id);
        $this->load->view('lokasi_edit', $data);
    }

    public function lokasi_update($id) {
        $data = $this->input->post();
        $this->api_request('PUT', 'http://localhost:8080/lokasi/' . $id, $data);
        redirect('apicontroller/index');
    }

    public function lokasi_hapus($id) {
        $this->api_request('DELETE', 'http://localhost:8080/lokasi/' . $id);
        redirect('apicontroller/index');
    }

    public function proyek_lokasi_list() {
        $data['proyek_lokasi'] = $this->api_request('GET', 'http://localhost:8080/proyek-lokasi');
        $this->load->view('proyek_lokasi_list', $data);
    }

    public function proyek_lokasi_tambah() {
        $data['proyek'] = $this->api_request('GET', 'http://localhost:8080/proyek');
        $data['lokasi'] = $this->api_request('GET', 'http://localhost:8080/lokasi');
        $this->load->view('proyek_lokasi_tambah', $data);
    }

    public function proyek_lokasi_simpan() {
        $data = [
            'proyekId' => $this->input->post('proyekId'),
            'lokasiId' => $this->input->post('lokasiId')
        ];
        $this->api_request('POST', 'http://localhost:8080/proyek-lokasi', $data);
        redirect('apicontroller/index');
    }

    public function proyek_lokasi_edit($proyekId, $lokasiId) {
        $data['proyek_lokasi'] = [
            'proyekId' => $proyekId,
            'lokasiId' => $lokasiId
        ];
        $data['proyek'] = $this->api_request('GET', 'http://localhost:8080/proyek');
        $data['lokasi'] = $this->api_request('GET', 'http://localhost:8080/lokasi');
        $this->load->view('proyek_lokasi_edit', $data);
    }

    public function proyek_lokasi_update($proyekId, $lokasiId) {
        $data = [
            'proyekId' => $this->input->post('proyekId'),
            'lokasiId' => $this->input->post('lokasiId')
        ];
        $this->api_request('PUT', "http://localhost:8080/proyek-lokasi/{$proyekId}/{$lokasiId}", $data);
        redirect('apicontroller/index');
    }

    public function proyek_lokasi_hapus($proyekId, $lokasiId) {
        $this->api_request('DELETE', "http://localhost:8080/proyek-lokasi/{$proyekId}/{$lokasiId}");
        redirect('apicontroller/index');
    }
}
