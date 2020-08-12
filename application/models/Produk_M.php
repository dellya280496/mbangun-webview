<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Produk_M extends CI_Model
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
            $query = "select * from v_produk $where";
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


    public function getRecentProduk($query_array)
    {
        if (count($query_array) < 1) {
            $where = null;
        } else {
            $where = " WHERE " .implode(" AND ", $query_array);
        }
        $query = "select * from v_produk order by id $where limit 6";
        $data = $this->db->query($query);
        $return['data'] = $data->result();

        return $return;
    }

    public function getProdukTerjual($query_array)
    {
        if (count($query_array) < 1) {
            $where = null;
        } else {
            $where = " WHERE "  .implode(" AND ", $query_array);
        }
        $query = "select * from v_produk $where AND jumlah_dibeli is not null";
        $data = $this->db->query($query);
        $return['data'] = $data->result();

        return $return;
    }

    function insert($data)
    {
        $return = array();

        try {
            $this->db->insert("m_produk", $data);
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

    function update($id, $data)
    {
        $return = array();

        try {
            $this->db->where("id", $id);
            $this->db->update("m_produk", $data);
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
            $this->db->delete("m_produk");
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
