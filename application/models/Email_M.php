<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Email_M extends CI_Model {

    //send email
    public function send_email($email) {
        $this->db->select("t.*");
        $this->db->where("u.email", $email);
        $this->db->join("s_user_login l", "l.id=t.id_user", "join");
        $this->db->join("m_user u", "u.id=l.id_user", "join");
        $toko = $this->db->get('m_toko t')->row();
        $this->load->library('email');
        
        $setting=$this->db->get('s_sistem')->row();
//kalo pake gmail ini
//        $config = Array(
//            'protocol' => 'smtp',
//            'smtp_host' => 'ssl://smtp.gmail.com',
//            'smtp_port' => '465',
//            'smtp_user' => 'email',
//            'smtp_pass' => 'pass',
//            'smtp_timeout' => 30,
//            'mailtype' => 'html',
//            'charset' => 'utf-8',
//            'wordwrap' => TRUE
//        );
 $config = Array(
            'protocol' => $setting->mail_protocol,
            'smtp_host' => $setting->mail_host,
            'smtp_port' => $setting->mail_port,
            'smtp_user' => $setting->mail_user,
            'smtp_pass' => $setting->mail_password,
            'smtp_timeout' => 30,
            'mailtype' => 'html',
            'charset' => 'utf-8',
            'wordwrap' => TRUE
        );

        $data['tipe'] = 'validasi_baru';
        if (!empty($this->session->userdata('tipe_kirim_email'))) {
            $data['tipe'] = $this->session->userdata('tipe_kirim_email');
        }
        //initialize
        $this->email->initialize($config);

        //send email
        $data = array(
            'subject' => 'Buka Toko Berhasil',
            'to' => $email,
            'template_path' => "email/email_activation",
            'nama_toko' => $toko->nama_toko
        );
        $message = $this->load->view($data['template_path'], $data, TRUE);
        $this->email->from($config['smtp_user'], 'M-Bangun');
        $this->email->to($data['to']);
        $this->email->subject($data['subject']);
        $this->email->message($message);

        $this->email->set_newline("\r\n");

        if ($this->email->send()) {
            return true;
        } else {
            return $this->email->print_debugger(array('headers'));
        }
    }

//    }
}
