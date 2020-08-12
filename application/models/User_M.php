<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class User_M extends CI_Model {
    /*
      Fungsi    : Model untuk cek login user
      Server    : Database (default)
      Paramater : username dan password
     */

    function login($username, $password) {

        $return["meta"] = [];
        $return['data'] = [];

        try {

            $this->db->where('username', $username);
            $this->db->where('password', $password);

            $data = $this->db->get('s_user_login');
            if ($data->num_rows() > 0) {

                $return["meta"] = array(
                    "status_code" => 200,
                    "status_message" => "Berhasil, data ditemukan!",
                    "success" => true
                );
                $return['data'] = $data->row();
            } else {
                $return["meta"] = array(
                    "status_code" => 404,
                    "status_message" => "Gagal, data tidak ditemukan!",
                    "success" => false
                );
            }
        } catch (Exception $e) {
            $return["meta"] = array(
                "status_code" => 500,
                "status_message" => "Error, ada kesalahan: " . $e->getMessage(),
                "success" => false
            );
        }

        return $return;
    }

    /*
      Fungsi    : Model untuk cek login by google
      Server    : Database (default)
      Paramater : username dan password
     */

    function loginGoogle($body) {

        $return["meta"] = [];
        $return['data'] = [];

        try {

            $this->db->where('username', $body['username']);
            $this->db->where('id_google', $body['id_google']);

            $data = $this->db->get('s_user_login');
            if ($data->num_rows() > 0) {

                $return["meta"] = array(
                    "status_code" => 200,
                    "status_message" => "Berhasil, data ditemukan!",
                    "success" => true
                );
                $return['data'] = $data->row();
            } else {
                $return["meta"] = array(
                    "status_code" => 404,
                    "status_message" => "Gagal, data tidak ditemukan!",
                    "success" => false
                );
            }
        } catch (Exception $e) {
            $return["meta"] = array(
                "status_code" => 500,
                "status_message" => "Error, ada kesalahan: " . $e->getMessage(),
                "success" => false
            );
        }

        return $return;
    }

    public function getAllByParam($query_array) {
        if (count($query_array) < 1) {
            $where = null;
        } else {
            $where = " WHERE " . implode(" AND ", $query_array);
        }
        $query = "select * from v_user $where ";
        $data = $this->db->query($query);
        $return['data'] = $data->result();
        $return['query'] = $query;
        return $return;
    }

    function checkEmail($email) {
        $this->db->where("email", $email);
        return $this->db->get("m_user")->result();
    }

    function EncryptPasswd($value) {
        $salt = '#*seCrEt!@-*%';
        $str = do_hash($salt . $value);
        $str = do_hash($salt . $str, 'md5');
        return $str;
    }

    function insert($data) {
        $return = array();
        $user = array(
            "foto" => $data['foto'],
            "password" => $this->EncryptPasswd($data['password']),
            "username" => $data['email'],
            "id_google" => $data['id_google'],
            "status_user" => 'user',
            "aktif" => 1
        );

        unset($data['foto']);
        unset($data['password']);
        try {
            $this->db->insert("m_user", $data);
            $last_id = $this->db->insert_id();
            if (!empty($last_id)) {
                $user['id_user'] = $this->db->insert_id();
                $this->db->insert("s_user_login", $user);
                $return["meta"] = array(
                    "status_code" => 200,
                    "status_message" => "sukses !",
                    "success" => true
                );
            } else {
                $return["meta"] = array(
                    "status_code" => 500,
                    "status_message" => $this->db->error(),
                    "success" => false
                );
            }
        } catch (Exception $e) {
            $return["meta"] = array(
                "status_code" => 500,
                "status_message" => $e->getMessage(),
                "success" => false
            );
        }

        return $return;
    }

}
