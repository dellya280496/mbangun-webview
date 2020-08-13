<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Toko_M extends CI_Model {

    public function getAllByParam($query_array) {
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

    public function getOfficialStore($query_array) {
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

    function insert($data) {
        $return = array();

        try {
            $this->db->where("u.email", $data['email']);
            $user = $this->db->get("m_user u")->row();
            if (!empty($user)) {
                unset($data['email']);
                $data['id_kota']=$data['kota'];
                unset($data['kota']);
                $data['id_provinsi']=$data['provinsi'];
                unset($data['provinsi']);
                $this->db->insert("m_toko", $data);
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
            } else {
                $return["meta"] = array(
                    "status_code" => 500,
                    "status_message" => "email belum terdafar",
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

    function update($id, $data) {
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

    function delete($id) {
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

}
