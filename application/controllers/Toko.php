<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Toko extends BD_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('Toko_M');
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


        $data = $this->Toko_M->getAllByParam($query_array);
        echo json_encode($data);
    }

    public function getOfficialStore_get() {
        $param = $_GET;
        $query_array = array();

        foreach ($param as $key => $value) {
            if ($value != '') {
                if ($key == 'nama_toko') {
                    $query_array[] = $key . ' LIKE ' . "'%" . $value . "%'";
                } else {
                    $query_array[] = $key . ' = ' . "'" . $value . "'";
                }
            }
        }


        $data = $this->Toko_M->getOfficialStore($query_array);
        echo json_encode($data);
    }

    public function insert_post() {
        $param = $_POST;
        $error = FALSE;
        if (empty($_POST['nama_toko'])) {
            $error = TRUE;
            $message = 'nama toko tidak boleh kosong !';
        };
        if (empty($_POST['email'])) {
            $error = TRUE;
            $message = 'email tidak boleh kosong !';
        };
        $config['upload_path'] = "./assets/img/toko";
        $config['allowed_types'] = 'jpeg|jpg|png';
        $config['encrypt_name'] = TRUE;
        $config['max_size'] = 1024;

        $this->load->library('upload', $config);
        $foto = null;
        if ($this->upload->do_upload("foto")) {
            $data = array('upload_foto' => $this->upload->data());
            $param['foto'] = $data['upload_foto']['file_name'];
        }
        $foto_sampul = null;
        if ($this->upload->do_upload("foto_sampul")) {
            $data = array('upload_foto' => $this->upload->data());
            $param['foto_sampul'] = $data['upload_foto']['file_name'];
        }
        if ($error) {
            $response['meta'] = array(
                "status_code" => 500,
                "status_message" => $message,
                "success" => false
            );
        } else {
            $response = $this->Toko_M->insert($param);
        }

        $this->response($response);
    }
 public function insert_projek_post() {
        $param = $_POST;
        $error = FALSE;
        if (empty($_POST['nama'])) {
            $error = TRUE;
            $message = 'nama  tidak boleh kosong !';
        };
        if (empty($_POST['email'])) {
            $error = TRUE;
            $message = 'email tidak boleh kosong !';
        };
        if ($error) {
            $response['meta'] = array(
                "status_code" => 500,
                "status_message" => $message,
                "success" => false
            );
        } else {
            $response = $this->Toko_M->insert_projek($param);
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
            $response = $this->Toko_M->update($id, $param);
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
            $response = $this->Toko_M->delete($id);
        }

        $this->response($response);
    }

}
