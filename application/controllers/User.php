<?php defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {


	function __construct()
	{
		parent:: __construct();
		// check_not_login();
		// check_admin();
		$this->load->model('user_m');
	}



	public function index()
	{
		// check_not_login();

		$this->load->model('user_m');
		$data['row'] = $this->user_m->get();

        $this->load->view('template/header');
        $this->load->view('template/sidebar' );
        $this->load->view('user/user_data', $data);
        $this->load->view('template/footer');
	}


	public function add()
	{
	$this->form_validation->set_rules('fullname', 'Nama', 'required');
	$this->form_validation->set_rules('username', 'Username', 'required|min_length[5]|is_unique[tb_user.username]');
	$this->form_validation->set_rules('password', 'Password', 'required|min_length[5]');
	$this->form_validation->set_rules('passconf', 'Konfirmasi Password', 'required|matches[password]', array('matches' => '%s tidak sesuai dengan password') 
	);
	$this->form_validation->set_rules('level', 'Level', 'required');
	$this->form_validation->set_message('required', '%s masih kosong, silahkan isi');
	$this->form_validation->set_message('main_length', '{field} minimal 5 karakter');
	$this->form_validation->set_message('is_unique', '{field} ini udah dipakai silahkan ganti');

	$this->form_validation->set_error_delimiters('<span class="help-block">', '</span>');

	if ($this->form_validation->run() == FALSE) {
        $this->load->view('template/header');
        $this->load->view('template/sidebar' );
        $this->load->view('user/user_form_add');
        $this->load->view('template/footer');
		
	} else {
			$post = $this->input->post(null, TRUE);
			$this->user_m->add($post);
			if($this->db->affected_rows() > 0){
				$this->session->set_flashdata('success', 'Data Berhasil disimpan');
			}
			redirect('user');
	}
	
	}



	function username_check() {
		$post = $this->input->post(null, TRUE);
		$query = $this->db->query("SELECT * FROM tb_user WHERE username = '$post[username]' AND id_user != '$post[id_user]'");
		if($this->db->num_rows() > 0) {
			$this->form_validation->set_message('username_check', '{field} ini sudah dipakai, silahkan ganti');
			return FALSE;
		} else {
			return TRUE;
		}
	}
	
	public function del()
	{
		$id = $this->input->post('id_user');
		$this->user_m->del($id);

		if($this->db->affected_rows() > 0){
			$this->session->set_flashdata('success', 'Data Berhasil dihapus');
			}
			redirect('user/user_data');
	}

}