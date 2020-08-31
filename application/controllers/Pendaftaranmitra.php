<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Pendaftaranmitra extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('Kategori_M');
        $this->load->model('Ongkir_M');
        $this->load->model('Email_M');
//        $this->auth();
    }

    public function index() {
        $data['menu'] = 'Dashboard';
        $data['id_google'] = $this->input->get('id_google');
        $data['email'] = $this->input->get('email');
        $data['id'] = $this->input->get('id');
        if (empty($data['email'])) {
            $data['heading'] = "Data Tidak ditemukan";
            $data['message'] = "Email belum terdaftar";
            $this->load->view('errors/html/error_404', $data);
        } else {
            $data['provinces'] = $this->Ongkir_M->getProvince();
            $this->load->view('pendaftaran_mitra', $data);
        }
    }

    public function success() {
        $email = $this->input->get('email');
        $data = $this->Email_M->send_email($email);
        $this->load->view('success');
    }

    public function success_projek() {
        $this->load->view('success-projek');
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

}
