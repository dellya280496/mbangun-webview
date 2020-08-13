<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('Kategori_M');
        $this->load->model('Ongkir_M');
//        $this->auth();
    }

    public function index() {
        $data['menu'] = 'Dashboard';
        $data['email'] = $this->input->get('email');
        if (empty($data['email'])) {
        $data['heading'] = "Data Tidak ditemukan";
        $data['message'] = "Email belum terdaftar";
            $this->load->view('errors/html/error_404',$data);
        } else {
            $data['provinces'] = $this->Ongkir_M->getProvince();
            $this->load->view('pengajuan', $data);
        }
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
