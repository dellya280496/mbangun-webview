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
        $data['provinces'] = $this->Ongkir_M->getProvince();

//        $data['provinces']= null;
//        echo json_encode('ok');
//        $kategori=$this->Kategori_M->getAll();
//        echo json_encode($data['provinces']);
        $this->load->view('pengajuan', $data);
    }
    
    public function getKota() {
        $id=$_POST['id_provinsi'];
        $data['kota'] = $this->Ongkir_M->getKota($id);
        
        echo json_encode($data['kota']);
    }
    public function getKecamatan() {
        $id=$_POST['id_kota'];
        $data['kecamatan'] = $this->Ongkir_M->getKecamatan($id);
        
        echo json_encode($data['kecamatan']);
    }

}
