<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

    public function index() {
        $data['menu'] = 'Dashboard';
        $this->load->view('welcome_message', $data);
    }

}
