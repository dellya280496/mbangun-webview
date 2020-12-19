<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Mitra extends BD_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('Mitra_M');
        //        $this->auth();
    }

    public function index()
    {
        echo json_encode("ok");
    }

    public function getAllByParam_get()
    {
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

    public function getOfficialStore_get()
    {
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

    public function insert_post()
    {
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
        $jenis_layanan = $param['my_multi_select1'];
        unset($param['my_multi_select1']);


        $config['upload_path'] = "./assets/img/profile";
        $config['allowed_types'] = 'jpeg|jpg|png';
        $config['encrypt_name'] = TRUE;
        $config['create_thumb'] = FALSE;
        $config['maintain_ratio'] = FALSE;
        $config['quality'] = '60%';
        $config['width'] = 200;
        $config['height'] = 200;
        $config['image_library'] = 'gd2';
        $this->load->library('image_lib', $config);
        $this->image_lib->resize();

        $this->load->library('upload', $config);
        $foto_ktp = null;
        if ($this->upload->do_upload("foto_ktp")) {
            $data = array('upload_foto' => $this->upload->data());
            $param['foto_ktp'] =  base_url().'/assets/img/profile/'.$data['upload_foto']['file_name'];
        }
        $foto_npwp = null;
        if ($this->upload->do_upload("foto_npwp")) {
            $data = array('upload_foto' => $this->upload->data());
            $param['foto_npwp'] = base_url().'/assets/img/profile/'.$data['upload_foto']['file_name'];
        }
        $foto_siup = null;
        if ($this->upload->do_upload("foto_siup")) {
            $data = array('upload_foto' => $this->upload->data());
            $param['foto_siup'] = base_url().'/assets/img/profile/'.$data['upload_foto']['file_name'];
        }

        $foto = null;
        if ($this->upload->do_upload("foto")) {
            $data = array('upload_foto' => $this->upload->data());
            $param['foto'] = base_url().'/assets/img/profile/'.$data['upload_foto']['file_name'];
        }
        if ($error) {
            $response['meta'] = array(
                "status_code" => 500,
                "status_message" => $message,
                "success" => false
            );
        } else {
            $response = $this->Mitra_M->insert($param, $jenis_layanan);
        }

        $this->response($response);
    }
    public function insert_projek_post()
    {
        $date = new DateTime();
        $param = $_POST;
        $param['no_order'] = $date->getTimestamp();
        $survey = $this->db->get("s_sistem")->row();
        $param['biaya_survey'] = $survey->biaya_survey;
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
            // $response = $this->Toko_M->insert_projek($param);
        }

        $this->response($param);
    }
    public function update_post()
    {
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

    public function delete_post()
    {
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