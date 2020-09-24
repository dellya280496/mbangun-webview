<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Kontrak extends CI_Controller
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
        $this->load->model('Proyek_M');
    }

    public function index()
    {
        $proyek_id = $this->input->get('id', TRUE);
        $this->load->library('pdf');
        // $query = {'id:'31'};
        $data['kontrak'] = $this->Proyek_M->getProyekById($proyek_id);
        $data['default_img'] = $this->encode_img_base64('https://mbangun.id/api-v2/assets/img/watermark-logo.jpeg');
        // var_dump($data['kontrak']['data']->id);
        // die;

        if ($data['kontrak']['data']->mitra_ttd == null) {
            $data['kontrak']['data']->mitra_ttd = $this->encode_img_base64('https://mbangun.id/api-v2/assets/img/watermark-logo.jpeg');
        } else {
            $data['kontrak']['data']->mitra_ttd = $this->encode_img_base64('https://mbangun.id/api-v2/assets/ttd/' . $data['kontrak']['data']->mitra_ttd);
        }

        if ($data['kontrak']['data']->user_ttd == null) {
            $data['kontrak']['data']->user_ttd = $this->encode_img_base64('https://mbangun.id/api-v2/assets/img/watermark-logo.jpeg');
        } else {
            $data['kontrak']['data']->user_ttd = $this->encode_img_base64('https://mbangun.id/api-v2/assets/ttd/' .  $data['kontrak']['data']->user_ttd);
        }

        if ($data['kontrak']['data']->mbangun_ttd == null) {
            $data['kontrak']['data']->mbangun_ttd = $this->encode_img_base64('https://mbangun.id/api-v2/assets/img/watermark-logo.jpeg');
        } else {
            $data['kontrak']['data']->mbangun_ttd = $this->encode_img_base64('https://mbangun.id/api-v2/assets/ttd/'. $data['kontrak']['data']->mbangun_ttd);
        }

        // var_dump($data['kontrak']);
        // die;
        $this->pdf->setPaper('A4', 'potrait');
        $this->pdf->filename = "kontrak.pdf";
        $this->pdf->load_view('kontrak', $data);

        // $this->load->view('kontrak',$data);
        // return json_encode($notif);
    }

    public function getStatusTransaction()
    {
        $param = $_GET;
        $notif = $this->veritrans->status($param['order_id']);
        echo json_encode($notif);
    }
    public function pdf()
    {
        $produkid = $this->input->get('id', TRUE);
        $this->load->library('pdf');
        $data['kontrak'] = $this->Kontrak_Model->getKontrakByProdukId_Kontrak($produkid);
        $data['default_img'] = $this->encode_img_base64('https://mbangun.id/api-v2/assets/img/watermark-logo.jpeg');


        if ($data['kontrak']->worker_signature == null) {
            $data['kontrak']->worker_signature = $this->encode_img_base64('https://mbangun.id/api-v2/assets/img/watermark-logo.jpeg');
        } else {
            $data['kontrak']->worker_signature = $this->encode_img_base64('http://localhost/api-mbangun/assets/ttd/' . '/assets/' . $data['kontrak']->worker_signature);
        }

        if ($data['kontrak']->owner_signature == null) {
            $data['kontrak']->owner_signature = $this->encode_img_base64('https://mbangun.id/api-v2/assets/img/watermark-logo.jpeg');
        } else {
            $data['kontrak']->owner_signature = $this->encode_img_base64('http://localhost/api-mbangun/assets/ttd/' . '/assets/' . $data['kontrak']->owner_signature);
        }

        // var_dump($data['kontrak']->owner_signature);
        // die;
        $this->pdf->setPaper('A4', 'potrait');
        $this->pdf->filename = "kontrak.pdf";
        $this->pdf->load_view('Kontrak', $data);
    }
    function encode_img_base64($img_path = false)
    {
        if ($img_path) {
            return base64_encode(file_get_contents($img_path));
        }

        return false;
    }
}
