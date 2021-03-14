<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Data_absensi extends CI_Controller {

    public function index() {
        $data['title'] = "Data Absensi Pegawai";


        if((isset($_POST['bulan']) && $_POST['bulan']!='') && (isset($_POST['tahun']) && $_POST['tahun']!='')) {
            $bulan = $_POST['bulan'];
            $tahun = $_POST['tahun'];
            $bulantahun = $bulan.$tahun;
        }else{
            $bulan = date('m');
            $tahun = date('Y');
            $bulantahun = $bulan.$tahun;
        }

        $data['absensi'] = $this->db->query("SELECT tb_kehadiran.*,tb_karyawan.nama, tb_karyawan.jenis_kelamin,tb_karyawan.jabatan
        FROM tb_kehadiran
        INNER JOIN tb_karyawan ON tb_kehadiran.nip=tb_karyawan.nip
        -- INNER JOIN tb_karyawan ON tb_karyawan.jabatan=tb_karyawan.jabatan
        WHERE tb_kehadiran.bulan='$bulantahun'
        ORDER BY tb_karyawan.nama ASC ")->result();
        

        $this->load->view('template/header');
        $this->load->view('template/sidebar' );
        $this->load->view('absensi/data_absensi', $data);
        $this->load->view('template/footer');
    }


    public function inputAbsensi() {
        if($this->input->post('submit', TRUE) == 'submit') {
            $post = $this->input->post();

            foreach($post as $key => $value ) {
                if($post['bulan'][$key] !='' || $post['nip'][$key] !='')
                {
                    $simpan[]= array(
                        'bulan' => $post['bulan'][$key],
                        'nip' => $post['nip'][$key],
                        'nama' => $post['nama'][$key],
                        'jenis_kelamin' => $post['jenis_kelamin'][$key],
                        'jabatan' => $post['jabatan'][$key],
                        'hadir' => $post['hadir'][$key],
                        'sakit' => $post['sakit'][$key],
                        'alpha' => $post['alpha'][$key],
                    );
                }
            }
        }


        $data['title'] = "Form Absensi Pegawai";
        if((isset($_POST['bulan']) && $_POST['bulan']!='') && (isset($_POST['tahun']) && $_POST['tahun']!='')) {
            $bulan = $_POST['bulan'];
            $tahun = $_POST['tahun'];
            $bulantahun = $bulan.$tahun;
        }else{
            $bulan = date('m');
            $tahun = date('Y');
            $bulantahun = $bulan.$tahun;
        }

        $data['input_absensi'] = $this->db->query("SELECT tb_kehadiran.*,tb_kehadiran.nama
        FROM tb_kehadiran
        INNER JOIN tb_karyawan ON tb_karyawan.nip=tb_karyawan.nip
        WHERE NOT EXISTS (SELECT * FROM tb_kehadiran WHERE bulan='$bulantahun' AND tb_karyawan.nip=tb_kehadiran.nip) ORDER BY tb_karyawan.nama ASC ")->result();
      

        $this->load->view('template/header');
        $this->load->view('template/sidebar' );
        $this->load->view('absensi/form_input_absensi', $data);
        $this->load->view('template/footer');
        
    }
}