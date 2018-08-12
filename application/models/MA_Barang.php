<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MA_Barang extends CI_Model {

	function tampil(){		
		return $this->db->get('transaksi');
	}

	function input_data($data,$table){
		$this->db->insert($table,$data);
	}

	public function update_data($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}

	public function get_by_id($kd_tugas,$table){		
		return $this->db->get_where($table,$kd_tugas);
	}

	public function hapus_data($kd,$table){
		$this->db->query("delete from $table where id = '$kd'");
	}

	function option_user() {
	 	$this->db->select('*');
	 	$this->db->from('user');
	 	$query = $this->db->get();
		return $query->result();
	}

	function sm_idtransaksi($length = 8) {
	    $characters = '0123456789';
	    $charactersLength = strlen($characters);
	    $randomString = '';
	    for ($i = 0; $i < $length; $i++) {
	        $randomString .= $characters[rand(0, $charactersLength - 1)];
	    }
	    return $randomString;
	}

}

/* End of file MA_Barang.php */
/* Location: ./application/models/MA_Barang.php */