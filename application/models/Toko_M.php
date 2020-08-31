<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Toko_M extends CI_Model
{

    public function getAllByParam($query_array)
    {
        $return = array();

        try {
            if (count($query_array) < 1) {
                $where = null;
            } else {
                $where = " WHERE " . implode(" AND ", $query_array);
            }
            $query = "select * from m_toko $where";
            $data = $this->db->query($query);
            $return['data'] = $data->result();
            if ($this->db->affected_rows() > 0) {

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

    public function getOfficialStore($query_array)
    {
        if (count($query_array) < 1) {
            $where = null;
        } else {
            $where = implode(" AND ", $query_array);
        }
        $query = "select id,nama_toko,foto,foto_sampul from m_toko WHERE jenis_toko='official_store' $where ";
        $data = $this->db->query($query);
        $return['data'] = $data->result();

        return $return;
    }

    function insert($data)
    {
        $return = array();

        try {
            $this->db->select("l.id,u.email");
            $this->db->where("u.email", $data['email']);
            $this->db->join("s_user_login l ", "l.id_user=u.id", "inner");
            $user = $this->db->get("m_user u")->row();
            if (!empty($user)) {
                $this->db->where("id_user", $user->id);
                $toko = $this->db->get("m_toko")->row();
                if (empty($toko)) {
                    unset($data['email']);
                    $data['id_user'] = $user->id;
                    $data['id_kota'] = $data['kota'];
                    unset($data['kota']);
                    $data['id_provinsi'] = $data['provinsi'];
                    unset($data['provinsi']);
                    $this->db->insert("m_toko", $data);
                    $id = $this->db->insert_id();
                    $upd = array(
                        "status_toko" => "1"
                    );
                    $this->db->where("id", $user->id);
                    $this->db->update("m_user", $upd);
                    $return["email"] = $user->email;
                    $return["meta"] = array(
                        "status_code" => 200,
                        "status_message" => "sukses !",
                        "success" => true
                    );
                } else {
                    $return["meta"] = array(
                        "status_code" => 500,
                        "status_message" => "email sudah digunakan",
                        "success" => false
                    );
                }
            } else {
                $return["meta"] = array(
                    "status_code" => 500,
                    "status_message" => "email belum terdaftar",
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

    function update($id, $data)
    {
        $return = array();

        try {
            $this->db->where("id", $id);
            $this->db->update("m_toko", $data);
            if ($this->db->affected_rows() > 0) {

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

    function delete($id)
    {
        $return = array();

        try {
            $this->db->where("id", $id);
            $this->db->delete("m_toko");
            if ($this->db->affected_rows() > 0) {

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
    function insert_projek($data)
    {
        $return = array();

        try {
            $this->db->select("l.id,u.email");
            $this->db->where("u.email", $data['email']);
            $this->db->join("s_user_login l ", "l.id_user=u.id", "inner");
            $user = $this->db->get("m_user u")->row();
            if (!empty($user)) {
                unset($data['email']);
                $data['id_user_login'] = $user->id;
                $data['id_kota'] = $data['kota'];
                unset($data['kota']);
                $data['id_provinsi'] = $data['provinsi'];
                unset($data['provinsi']);
                $data['status'] = 'baru';
                $data['no_invoice'] = $data['no_invoice'];
                $data['token_va'] = $data['token_va'];
                $survey = $this->db->get("s_sistem")->row();
                $data['biaya_survey'] = $survey->biaya_survey;
                $data['komisi_survey'] = $survey->komisi_survey;
                $this->db->insert("m_projek", $data);
                $return["email"] = $user->email;
                $return["meta"] = array(
                    "status_code" => 200,
                    "status_message" => "sukses !",
                    "no_invoice" => $data['no_invoice'],
                    "success" => true
                );
            } else {
                $return["meta"] = array(
                    "status_code" => 500,
                    "status_message" => "email belum terdaftar",
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
