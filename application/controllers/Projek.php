<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Projek extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('Kategori_M');
        $this->load->model('Ongkir_M');
        $this->load->model('Email_M');
//        $this->auth();
    }

    public function index() {
        $data['menu'] = 'Dashboard';
        $data['email'] = $this->input->get('email');
        if (empty($data['email'])) {
            $data['heading'] = "Data Tidak ditemukan";
            $data['message'] = "Email belum terdaftar";
            $this->load->view('errors/html/error_404', $data);
        } else {

            $data['jenis_layanan'] = $this->Ongkir_M->getJenisLayanan();
            $data['provinces'] = $this->Ongkir_M->getProvince();
            $this->load->view('pengajuan_projek', $data);
        }
    }

    public function success() {
        $email = $this->input->get('email');
        $data = $this->Email_M->send_email($email);
        $this->load->view('success');
    }

    public function getKota() {
        $id = $_POST['id_provinsi'];
        $data['kota'] = $this->Ongkir_M->getKota($id);

        echo json_encode($data['kota']);
    }

    public function getKecamatan() {
        $id = $_POST['id_kota'];
        $data['kecamatan'] = $this->Ongkir_M->getKecamatan($id);

        echo json_encode($data['kecamatan']);
    }

    public function insert() {
        $param = $_POST;
        $response = $this->Projek_M->insert($param);


        $this->response($response);
    }

}
