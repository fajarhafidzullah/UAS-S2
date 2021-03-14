<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pegawai_m extends CI_Model {


    public function get_data() {
         return $this->db->get('tb_karyawan');	
    }

    public function get($id = null)
    {
        $this->db->from('tb_karyawan');
        if($id != null ) {
            $this->db->where('id_karyawan', $id);
        }
        $query = $this->db->get();
        return $query;
    }

    public function get1($id = null)
    {
        $this->db->from('tb_kehadiran');
        if($id != null ) {
            $this->db->where('id_absensi', $id);
        }
        $query = $this->db->get();
        return $query;
    }

    public function simpan($data, $table) {
		 $this->db->insert($table, $data);
	}
    
	public function edit($table, $where) {
		return $this->db->get($table, $where);
	}
    public function update($table, $where ) {
        $this->db->where($where );
        $this->db->update($table );
    }
	
    public function hapus($table, $where) {
		$this->db->where($where);
        $this->db->delete($table);
	}

}






