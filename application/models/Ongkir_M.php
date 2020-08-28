<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Ongkir_M extends CI_Model {

    function __construct() {
        parent::__construct();

//        $this->auth();
    }

    public function getProvince() {
        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => "https://pro.rajaongkir.com/api/province",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "GET",
            CURLOPT_HTTPHEADER => array(
                "key: e99ff50191d54f9bc76c9c00e43cd158"
            ),
        ));

        $response = curl_exec($curl);
        $err = curl_error($curl);

        curl_close($curl);

        if ($err) {
            return "cURL Error #:" . $err;
        } else {
            return json_decode($response)->rajaongkir->results;
        }
    }

    public function getKota($id) {
        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => "https://pro.rajaongkir.com/api/city?province=$id",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "GET",
            CURLOPT_HTTPHEADER => array(
                "key: e99ff50191d54f9bc76c9c00e43cd158"
            ),
        ));

        $response = curl_exec($curl);
        $err = curl_error($curl);

        curl_close($curl);


        if ($err) {
            return "cURL Error #:" . $err;
        } else {
            return json_decode($response)->rajaongkir->results;
        }
    }

    public function getKecamatan($id) {
        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => "https://pro.rajaongkir.com/api/subdistrict?city=$id",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "GET",
            CURLOPT_HTTPHEADER => array(
                "key: e99ff50191d54f9bc76c9c00e43cd158"
            ),
        ));

        $response = curl_exec($curl);
        $err = curl_error($curl);

        curl_close($curl);



        if ($err) {
            return "cURL Error #:" . $err;
        } else {
            return json_decode($response)->rajaongkir->results;
        }
    }
    public function getJenisLayanan() {
        return $this->db->get("m_jenis_layanan")->result();
        
    }
}
