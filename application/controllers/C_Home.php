<?php
defined('BASEPATH') OR exit ('No direct script access allowed');

class C_Home extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('M_Login');
	}

	public function index(){
		$this->load->view('index');

	}
}