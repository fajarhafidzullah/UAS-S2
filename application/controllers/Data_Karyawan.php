<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Data_karyawan extends CI_Controller {
    

    public function index() {
        // $act = $this->mPegawai->get_data();

        // $data['page'] = $this->load->view('pegawai/data_karyawan',array('tb_karyawan'=>$act),true);
        $data['tb_karyawan'] = $this->pegawai_m->get_data('tb_karyawan')->result();
        $this->load->view('template/header');
        $this->load->view('template/sidebar' );
        $this->load->view('pegawai/data_karyawan', $data);
        $this->load->view('template/footer');
    }

    public function tambah_karyawan() {

      $data['page'] = $this->load->view('pegawai/form_karyawan',array(),true);
      $this->load->view('template/header',$data);
      $this->load->view('template/sidebar',$data);
      $this->load->view('pegawai/form_karyawan');
      $this->load->view('template/footer',$data);
    }

    public function tambah_karyawan_aksi() {

      $this->_rules();

    if($this->form_validation->run() == FALSE) {
        $this->tambah_karyawan();
    }else{
      $nip = $this->input->post('nip');
      $nama = $this->input->post('nama');
      $jenis_kelamin = $this->input->post('jenis_kelamin');
      $alamat = $this->input->post('alamat');
      $no_telepon = $this->input->post('no_telepon');
      $jabatan = $this->input->post('jabatan');

		$data = array(
			'nip'=>$nip,
			'nama'=>$nama,
			'jenis_kelamin'=>$jenis_kelamin,
      'alamat'=>$alamat,
      'no_telepon'=>$no_telepon,
      'jabatan'=>$jabatan
		);

    $this->pegawai_m->simpan($data, 'tb_karyawan');
    $this->session->set_flashdata('pesan', 'Data Berhasil ditambahkan!');
    redirect('data_karyawan');
    
    }
 }

 public function update_karyawan($id) {

  $where = array (
    'id_karyawan' => $id
  );
  $data['tb_karyawan'] = $this->db->query("SELECT * FROM tb_karyawan WHERE id_karyawan='$id'")->result();
  $this->pegawai_m->update('tb_karyawan', $where);
  $this->load->view('template/header');
  $this->load->view('template/sidebar');
  $this->load->view('pegawai/form_update_karyawan');
  $this->load->view('template/footer');

}

public function update_karyawan_aksi() {

        $this->_rules();

      if($this->form_validation->run() == FALSE) {
          $this->update_karyawan();
      }else{

        $id = $this->input->post('id_karyawan');
        $nip = $this->input->post('nip');
        $nama = $this->input->post('nama');
        $jenis_kelamin = $this->input->post('jenis_kelamin');
        $alamat = $this->input->post('alamat');
        $no_telepon = $this->input->post('no_telepon');
        $jabatan = $this->input->post('jabatan');

      $data = array(
        'nip'=>$nip,
        'nama'=>$nama,
        'jenis_kelamin'=>$jenis_kelamin,
        'alamat'=>$alamat,
        'no_telepon'=>$no_telepon,
        'jabatan'=>$jabatan
      );

      $where = array(
        'id_karyawan' => $id
    );
      $this->pegawai_m->update('tb_karyawan', $data, $where);
      $this->session->set_flashdata('pesan', 'Data Berhasil diupdate!');
      redirect('data_karyawan');

      }
}



public function hapus_karyawan($id) {

  $where = array (
    'id_karyawan' => $id
  );
  $this->pegawai_m->hapus('tb_karyawan', $where);
  redirect('data_karyawan/index');

}
  public function _rules() {
    $this->form_validation->set_rules('nip', 'Nomer Induk Pegawai', 'required');
    $this->form_validation->set_rules('nama', 'Nama Karyawan', 'required');
    $this->form_validation->set_rules('jenis_kelamin', 'Jenis Kelamin', 'required');
    $this->form_validation->set_rules('alamat', 'Alamat', 'required');
    $this->form_validation->set_rules('no_telepon', 'No Telepon', 'required');
    $this->form_validation->set_rules('jabatan', 'Jabatan', 'required');
  }
}