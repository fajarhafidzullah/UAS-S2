<?php

class Fungsi {
    protected $ci;

    function __construct() {
        $this->ci =& get_instance();
    }
    function user_login() {
        $this->ci->load->model('user_m');
        $user_id = $this->ci->session->userdata('id_user');
        $user_data = $this->ci->user_m->get($user_id)->row();
        return $user_data;
    }

    
    public function count_karyawan()
    {
        $this->ci->load->model('pegawai_m');
        return $this->ci->pegawai_m->get()->num_rows();
    }

    public function count_absensi()
    {
        $this->ci->load->model('pegawai_m');
        return $this->ci->pegawai_m->get1()->num_rows();
    }

    public function count_user()
    {
        $this->ci->load->model('user_m');
        return $this->ci->user_m->get()->num_rows();
    }
}