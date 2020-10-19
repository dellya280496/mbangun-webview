<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class SimulasiKpr extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('Provinsi_M');
//        $this->auth();
    }

    public function index() {
        $data['menu']='Master Provinsi';
        $this->load->view('simulasi-kpr',$data);
    }
}