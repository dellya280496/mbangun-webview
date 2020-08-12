<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class User extends BD_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('User_M');
        //    $this->auth();
    }

    public function index() {
        echo json_encode("ok");
    }

    public function getAllByParam_get() {
        $param = $_GET;
        $query_array = array();

        foreach ($param as $key => $value) {
            if ($value != '') {
                if ($key == 'nama') {
                    $query_array[] = $key . ' LIKE ' . "'%" . $value . "%'";
                } else {
                    $query_array[] = $key . ' = ' . "'" . $value . "'";
                }
            }
        }


        $data = $this->User_M->getAllByParam($query_array);
        echo json_encode($data);
    }

    public function insert_post() {
        $param = $_POST;
        $error = FALSE;
        if (empty($_POST['nama'])) {
            $error = TRUE;
            $message = 'nama tidak boleh kosong !';
        };
        if (empty($_POST['email'])) {
            $error = TRUE;
            $message = 'email tidak boleh kosong !';
        };
        if (empty($_POST['no_hp'])) {
            $error = TRUE;
            $message = 'no hp tidak boleh kosong !';
        };
        if (empty($_POST['tgl_lahir'])) {
            $error = TRUE;
            $message = 'tanggal tidak boleh kosong !';
        };
        if (empty($_POST['tempat_lahir'])) {
            $error = TRUE;
            $message = 'tempat lahir tidak boleh kosong !';
        };
        if (empty($_POST['jenis_kelamin'])) {
            $error = TRUE;
            $message = 'jenis kelamin tidak boleh kosong !';
        };
        if (empty($_POST['password'])) {
            $error = TRUE;
            $message = 'password tidak boleh kosong !';
        };
        if (empty($_POST['id_google'])) {
            $error = TRUE;
            $message = 'id google tidak boleh kosong !';
        };
        if (empty($_POST['foto'])) {
            $error = TRUE;
            $message = 'foto tidak boleh kosong !';
        };
        if (!empty($this->User_M->checkEmail($_POST['email']))) {
            $error = TRUE;
            $message = 'email sudah terpakai !';
        }
        if ($error) {
            $response['meta'] = array(
                "status_code" => 500,
                "status_message" => $message,
                "success" => false
            );
        } else {
            $response = $this->User_M->insert($param);
        }

        $this->response($response);
    }

    public function update_post() {
        $nama = ($this->input->post("nama") != "") ? $this->input->post("nama") : null; //required

        $data = array(
            "nama" => $nama
        );

        $response = $this->Satuan_M->insert($data);
        $this->response($response);
    }

}
