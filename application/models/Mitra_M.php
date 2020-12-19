<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Mitra_M extends CI_Model
{

    function EncryptPasswd($value)
    {
        $salt = '#*seCrEt!@-*%';
        $str = do_hash($salt . $value);
        $str = do_hash($salt . $str, 'md5');
        return $str;
    }

    function checkPhone($phone)
    {
        $this->db->where("no_hp", $phone);
        return $this->db->get("m_mitra")->result();
    }

    function insert($data, $jenis_layanan)
    {
        $return = array();
        $user = array(
            "foto" => $data['foto'],
            "password" => $this->EncryptPasswd($data['password']),
            "username" => $data['email'],
            "status_user" => 'mitra',
            "aktif" => 1
        );
        $data['id_kota'] = $data['kota'];
        unset($data['kota']);
        $data['id_provinsi'] = $data['provinsi'];
        unset($data['provinsi']);

        unset($data['foto']);
        unset($data['password']);



        try {
            $this->db->insert("m_mitra", $data);
            $user['id_mitra'] = $this->db->insert_id();
            $last_id = $this->db->insert_id();
            if (!empty($last_id)) {
                if (isset($jenis_layanan)) {
                    for ($i = 0; $i < count($jenis_layanan); $i++) {
                        $insert_data = array(
                            "id_mitra" => $last_id,
                            "id_jenis_layanan" => $jenis_layanan[$i]
                        );
                        $this->db->insert("m_mitra_jenis_layanan", $insert_data);
                    }
                }
                $this->db->where("username", $data['email']);
                $cek_email = $this->db->get("s_user_login")->row();
                if (!empty($cek_email)) {
                    $upd = array(
                        "id_mitra" => $last_id
                    );
                    $this->db->where("username", $data['email']);
                    $this->db->update("s_user_login", $upd);
                    $return["meta"] = array(
                        "status_code" => 200,
                        "id_mitra" => $last_id,
                        "status_message" => "sukses !",
                        "success" => true
                    );
                } else {
                    $this->db->insert("s_user_login", $user);
                    $return["meta"] = array(
                        "status_code" => 200,
                        "status_message" => "sukses !",
                        "success" => true
                    );
                }
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

// function insert($data)
    // {
    //     $return = array();

    //     try {
    //                 unset($data['email']);
    //                 $data['id_mitra'] = $mitra->id;
    //                 $data['id_kota'] = $data['kota'];
    //                 unset($data['kota']);
    //                 $data['id_provinsi'] = $data['provinsi'];
    //                 unset($data['provinsi']);
    //                 $this->db->insert("m_mitra", $data);
    //                 $return["meta"] = array(
    //                     "status_code" => 200,
    //                     "status_message" => "sukses !",
    //                     "success" => true
    //                 );
               
            
    //     } catch (Exception $e) {
    //         $return["meta"] = array(
    //             "status_code" => 500,
    //             "status_message" => $e->getMessage(),
    //             "success" => false
    //         );
    //     }

    //     return $return;
    // }

   
// }
