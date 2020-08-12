<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Iklan extends BD_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('Iklan_M');
//        $this->auth();
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


        $data = $this->Iklan_M->getAllByParam($query_array);
        echo json_encode($data);
    }

    

    public function insert_post() {
        $param = $_POST;
        $error = FALSE;
        if (empty($_POST['nama'])) {
            $error = TRUE;
            $message = 'nama tidak boleh kosong !';
        };
        if (empty($_POST['baner'])) {
            $error = TRUE;
            $message = 'baner tidak boleh kosong !';
        };
        if (empty($_POST['id_toko'])) {
            $error = TRUE;
            $message = 'id toko tidak boleh kosong !';
        };
        if ($error) {
            $response['meta'] = array(
                "status_code" => 500,
                "status_message" => $message,
                "success" => false
            );
        } else {
            $response = $this->Iklan_M->insert($param);
        }

        $this->response($response);
    }

    public function update_post() {
        $param = $_POST;
        $error = FALSE;
        if (empty($_POST['id'])) {
            $error = TRUE;
            $message = 'id tidak boleh kosong !';
        } else {
            $id = $_POST['id'];
        }


        if ($error) {
            $response['meta'] = array(
                "status_code" => 500,
                "status_message" => $message,
                "success" => false
            );
        } else {
            unset($param['id']);
            $response = $this->Iklan_M->update($id, $param);
        }

        $this->response($response);
    }

    public function delete_post() {
        $error = FALSE;
        if (empty($_POST['id'])) {
            $error = TRUE;
            $message = 'id tidak boleh kosong !';
        } else {
            $id = $_POST['id'];
        }


        if ($error) {
            $response['meta'] = array(
                "status_code" => 500,
                "status_message" => $message,
                "success" => false
            );
        } else {
            $response = $this->Iklan_M->delete($id);
        }

        $this->response($response);
    }

}
