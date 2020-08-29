<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Checkout_sukses extends CI_Controller {

    function __construct() {
        parent::__construct();
//        $this->auth();
    }

    public function index() {
        $this->load->view('checkout');
    }

}
