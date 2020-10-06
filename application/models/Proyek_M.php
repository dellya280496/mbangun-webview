<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Proyek_M extends CI_Model
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
            $query = "select * from v_projek $where";
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

    public function getProyekById($id)
    {
        $return = array();

        try {
            $query = "select * from v_kontrak_kerja where id_projek = $id";
            $data = $this->db->query($query);
            $return['data'] = $data->row();
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
   
    public function getTagihanById($id)
    {
        $return = array();

        try {
            $query = "select * from t_tagihan_proyek where id_proyek = $id";
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


    public function getRecentProyek($query_array)
    {
        if (count($query_array) < 1) {
            $where = null;
        } else {
            $where = " WHERE " .implode(" AND ", $query_array);
        }
        $query = "select * from v_projek order by id $where limit 6";
        $data = $this->db->query($query);
        $return['data'] = $data->result();

        return $return;
    }

    public function getProyekTerjual($query_array)
    {
        if (count($query_array) < 1) {
            $where = null;
        } else {
            $where = " WHERE "  .implode(" AND ", $query_array);
        }
        $query = "select * from v_projek $where AND jumlah_dibeli is not null";
        $data = $this->db->query($query);
        $return['data'] = $data->result();

        return $return;
    }

    function insert($data)
    {
        $return = array();

        try {
            $this->db->insert("m_Proyek", $data);
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
            $this->db->update("m_Proyek", $data);
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
            $this->db->delete("m_Proyek");
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
