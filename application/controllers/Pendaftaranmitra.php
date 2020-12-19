<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Pendaftaranmitra extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('Kategori_M');
        $this->load->model('Ongkir_M');
        $this->load->model('Email_M');
        $this->load->model('Mitra_M');
        //        $this->auth();
    }

    public function index()
    {
        $data['menu'] = 'Dashboard';
        $data['no_hp'] = $this->input->get('no_hp');
        if (empty($data['no_hp'])) {
            $data['heading'] = "Data Tidak ditemukan";
            $data['message'] = "Nomor telpon anda tidak valid";
            $this->load->view('errors/html/error_404', $data);
        } else {
            $chekPhone = $this->Mitra_M->checkPhone($data['no_hp']);
            if (!empty($chekPhone)) {
                $data['heading'] = "Anda sudah terdaftar";
                $data['message'] = "Nomor telpon anda sudah terdaftar di Mbangun";
                $this->load->view('errors/html/error_404', $data);
            } else {
                $data['jenis_layanan'] = $this->Ongkir_M->getJenisLayanan();
                $data['provinces'] = $this->Ongkir_M->getProvince();
                $this->load->view('pendaftaran_mitra', $data);
            }
        }
    }

    public function success()
    {
        $email = $this->input->get('email');
        $data = $this->Email_M->send_email($email);
        $this->load->view('success');
    }

    public function success_projek()
    {
        $this->load->view('success-projek');
    }

    public function getKota()
    {
        $id = $_POST['id_provinsi'];
        $data['kota'] = $this->Ongkir_M->getKota($id);

        echo json_encode($data['kota']);
    }

    public function getKecamatan()
    {
        $id = $_POST['id_kota'];
        $data['kecamatan'] = $this->Ongkir_M->getKecamatan($id);

        echo json_encode($data['kecamatan']);
    }
}
