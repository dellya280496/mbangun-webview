<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Order extends BD_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('Order_M');
//        $this->auth();
    }

    public function index() {
        echo json_encode("ok");
    }

    public function addToCart_post() {
        $param = $_POST;
        $error = FALSE;
        if (empty($_POST['id_produk'])) {
            $error = TRUE;
            $message = 'id_produk tidak boleh kosong !';
        };
        if (empty($_POST['id_user_login'])) {
            $error = TRUE;
            $message = 'id_user_login tidak boleh kosong !';
        };
        if (empty($_POST['jumlah'])) {
            $error = TRUE;
            $message = 'jumlah tidak boleh kosong !';
        };
        if (empty($_POST['harga'])) {
            $error = TRUE;
            $message = 'harga tidak boleh kosong !';
        };
        if (empty($_POST['id_toko'])) {
            $error = TRUE;
            $message = 'id toko tidak boleh kosong !';
        };
        if (empty($_POST['jenis_ongkir'])) {
            $error = TRUE;
            $message = 'jenis ongkir tidak boleh kosong !';
        };
        if ($error) {
            $response['meta'] = array(
                "status_code" => 500,
                "status_message" => $message,
                "success" => false
            );
        } else {
            $response = $this->Order_M->insert_to_cart($param);
        }

        $this->response($response);
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


        $data = $this->Order_M->getAllByParam($query_array);
        echo json_encode($data);
    }

    public function insert_post() {
        $param = $_POST;
        $error = FALSE;
        if (empty($_POST['nama'])) {
            $error = TRUE;
            $message = 'nama tidak boleh kosong !';
        };
        if ($error) {
            $response['meta'] = array(
                "status_code" => 500,
                "status_message" => $message,
                "success" => false
            );
        } else {
            $response = $this->Order_M->insert($param);
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
            $response = $this->Order_M->update($id,$param);
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
            $response = $this->Order_M->delete($id);
        }

        $this->response($response);
    }

}
