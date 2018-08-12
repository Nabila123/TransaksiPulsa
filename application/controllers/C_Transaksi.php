<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_Transaksi extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('MA_Barang');

		$this->load->helper('url');

	 // // if($this->session->userdata('status') != "sucsess"){
		// redirect(base_url("index.php/login"));
	}

	
	public function index(){
	 		
		$x['data']=$this->MA_Barang->tampil();
		$this->load->view('Admin/template/transaksi/VA_Transaksi', $x);
	}

	public function tambah(){
		$x = array(
				'user' 	=> $this->MA_Barang->option_user(),
				'key' 	=> $this->MA_Barang->sm_idtransaksi()
			);

		$this->load->view('Admin/template/transaksi/VA_Add', $x);
	}

	public function tambah_aksi(){
		$id 		= $this->input->post('id');
		$no_hp 		= $this->input->post('no_hp');
		$nama_user 	= $this->input->post('nama_user');
		$harga 		= $this->input->post('harga');
		$tgl		= $this->input->post('tgl');
		$status 	= $this->input->post('status');
		 
		$data = array(
			'id' 			=> $id,
			'no_hp' 		=> $no_hp,
			'nama_user' 	=> $nama_user,
			'harga' 		=> $harga,
			'tgl'			=> $tgl,
			'status' 		=> $status,
			);
		$this->MA_Barang->input_data($data,'transaksi');
		redirect('C_Transaksi');
	}

	public function edit($id){
		$where = array('id' => $id);
		$x = array(
				'user' 		=> $this->MA_Barang->option_user(),
				'transaksi' => $this->MA_Barang->get_by_id($where,'transaksi')->result()
			);

		$this->load->view('Admin/template/transaksi/VA_Edit', $x);
	}

	public function edit_aksi(){
		$id 		= $this->input->post('id');
		$no_hp 		= $this->input->post('no_hp');
		$nama_user 	= $this->input->post('nama_user');
		$harga 		= $this->input->post('harga');
		$tgl		= $this->input->post('tgl');
		$status 	= $this->input->post('status');
		 
		$data = array(
			'no_hp' 		=> $no_hp,
			'nama_user' 	=> $nama_user,
			'harga' 		=> $harga,
			'tgl'			=> $tgl,
			'status' 		=> $status,
			);

		$where = array(
			'id' => $id
		);

		$this->MA_Barang->update_data($where,$data,'transaksi');
		redirect('C_Transaksi');
	}

	public function delete($id){
		$this->MA_Barang->hapus_data($id,'transaksi');
		echo "<script type='text/javascript'>
			            alert ('Data Berhasil Dihapus !');			            
			     </script>";
		redirect('C_Transaksi','refresh');
	}
}