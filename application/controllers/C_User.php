<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_User extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('user_model');

		$this->load->helper('url');

	 // // if($this->session->userdata('status') != "sucsess"){
		// redirect(base_url("index.php/login"));
	}

	
	public function index(){
	 		
	$x['data']=$this->user_model->tampil();
	$this->load->view('Admin/template/user/VA_User', $x);
	}


	public function edit($user){
		$where = array('id' => $user);
		$data['user'] = $this->user_model->edit_data($where, 'user')->result();
		$this->load->view('Admin/template/user/VA_User_upd2',$data);
	}

	public function update(){
		$id = $this->input->post('id');
		$fname = $this->input->post('fname');
		$lname = $this->input->post('lname');
		$email = $this->input->post('email');

		$data = array(
				'fname' => $fname,
				'lname' => $lname,
				'email' => $email

			);
			$where = array(
					'id' => $id
				);

			$this->user_model->update_data($where,$data,'user');
	
	redirect('C_User/index');
	}

	public function delete($id){
		$where = array('id' => $id);
		$this->user_model->hapus_data($where,'user');
		redirect('C_User/index');
		
	}
}