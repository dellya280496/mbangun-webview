<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Iklan_M extends CI_Model {

    public function getAllByParam($query_array) {
        $return = array();

        try {
            if (count($query_array) < 1) {
                $where = null;
            } else {
                $where = " WHERE " . implode(" AND ", $query_array);
            }
            $query = "select * from m_iklan $where order by urutan asc";
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

   

    function insert($data) {
        $return = array();

        try {
            $this->db->insert("m_iklan", $data);
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

    function update($id, $data) {
        $return = array();

        try {
            $this->db->where("id", $id);
            $this->db->update("m_iklan", $data);
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
            $this->db->delete("m_iklan");
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
