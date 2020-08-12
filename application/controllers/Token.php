<?php

defined('BASEPATH') OR exit('No direct script access allowed');

use \Firebase\JWT\JWT;

class Token extends BD_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('User_M');
    }

    /*
    Controller untuk pengambilan token
    Berdasarkan partner mitra
    Method : POST
    Parameter : Username dan Password
    */

    public function auth_post()
    {

        $date = new DateTime(); //Tanggal dan waktu sekarang
        $username = $this->input->post('username'); //Data user yang dikirim dari client
        $pwd = $this->input->post('password'); //Data pass yang dikirim dari client
        $password = encpass($pwd); //Melakukan enkripsi terhadap password

        $login = $this->User_M->login($username, $password); //Pengambilan data berdasarkan parameter yang telah dikirim client
        $secret_key = $this->config->item('thekey'); //key JWT

        $response['meta'] = [];
        $response['data'] = [];

        if ($login['meta']['success']) {
            
            $detik_session     = 60 * 60 * 5;
            $token['id']       = $login['data']->id; //Definisi Id untuk token
            $token['username'] = $login['data']->username; //Definisi Username untuk token
            $token['iat']      = $date->getTimestamp(); //Waktu mulai pengambilan token
            $token['exp']      = $date->getTimestamp() + $detik_session; //Waktu berakhirnya pengambilan token 5 jam
            $response['token'] = JWT::encode($token, $secret_key); //Pembuatan token / Enkripsi
            $response['expiresIn'] = $detik_session; //Waktu berakhirnya token

            $response['meta']  = array(
                "status_code" => 200,
                "status_message" => 'Token berhasil dibuat',
                "success" => true
            );

            $response['data'] = $login['data'];

        } else if (!$username || !$password) {

            $response['meta'] = array(
                "status_code" => 400,
                "status_message" => 'Parameter Salah',
                "success" => false
            );

        } else {

            $response['meta'] = array(
                "status_code" => 401,
                "status_message" => 'Akses Ditolak',
                "success" => false
            );

        }

        $this->set_response($response);
    }

     /*
    Controller untuk pengambilan token
    Berdasarkan partner mitra
    Method : POST
    Parameter : Username dan Password
    */

    public function googleSign_post()
    {

        $date = new DateTime(); //Tanggal dan waktu sekarang
        $body = $_POST;
        $login = $this->User_M->loginGoogle($body); //Pengambilan data berdasarkan parameter yang telah dikirim client
        $secret_key = $this->config->item('thekey'); //key JWT

        $response['meta'] = [];
        $response['data'] = [];

        if ($login['meta']['success']) {
            
            $detik_session     = 60 * 60 * 5;
            $token['id']       = $login['data']->id; //Definisi Id untuk token
            $token['username'] = $login['data']->username; //Definisi Username untuk token
            $token['iat']      = $date->getTimestamp(); //Waktu mulai pengambilan token
            $token['exp']      = $date->getTimestamp() + $detik_session; //Waktu berakhirnya pengambilan token 5 jam
            $response['token'] = JWT::encode($token, $secret_key); //Pembuatan token / Enkripsi
            $response['expiresIn'] = $detik_session; //Waktu berakhirnya token

            $response['meta']  = array(
                "status_code" => 200,
                "status_message" => 'Token berhasil dibuat',
                "success" => true
            );

            $response['data'] = $login['data'];

        } else if (isset($body)) {

            $response['meta'] = array(
                "status_code" => 400,
                "status_message" => 'Parameter Salah',
                "success" => false
            );

        } else {

            $response['meta'] = array(
                "status_code" => 401,
                "status_message" => 'Akses Ditolak',
                "success" => false
            );

        }

        $this->set_response($response);
    }
    public function coba_get ($str) {
        
        $salt = '#*seCrEt!@-*%';
        $result1 = do_hash($salt . $str);
        $result = do_hash($salt . $result1, 'md5');

        echo "{'text': '".$str."', 'enc1': '".$result1."', 'enc2': '".$result."'}";
    }

}
