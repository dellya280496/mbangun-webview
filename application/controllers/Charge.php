<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Charge extends CI_Controller {

    public function index() {
       echo json_encode(file_get_contents('php://input'));
    }
    
     public function coba() {
        echo json_encode(file_get_contents('php://input'));
    }

}
