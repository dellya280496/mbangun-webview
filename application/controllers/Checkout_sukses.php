<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Checkout_sukses extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        //        $this->auth();
        $params = array('server_key' => 'SB-Mid-server-wVejkOBosYfbSPkpUxPQVyJL', 'production' => false);
        // $params = array('server_key' => 'Mid-server-AFnhzqOZVZchPIPyNF3CoqqC', 'production' => true);
        $this->load->library('veritrans');
        $this->veritrans->config($params);
        $this->load->helper('url');
    }

    public function index()
    {
        // $param = $_GET;
        // // var_dump($param['order_id']);
        // if ($param) {
        //     $notif = $this->veritrans->status($param['order_id']);
        // }

        $this->load->view('checkout');
        // return json_encode($notif);
    }

    public function getStatusTransaction()
    {
        $param = $_GET;
        $notif = $this->veritrans->status($param['order_id']);
        echo json_encode($notif);
    }
}
