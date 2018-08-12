<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class user_model extends CI_Model
{
	function __construct()
    {
        parent::__construct();
    }
	
	function get_user($email, $pwd)
	{
		$this->db->where('email', $email);
		$this->db->where('password', md5($pwd));
        $query = $this->db->get('user');
		return $query->result();
	}
	
	// get user
	function get_user_by_id($id)
	{
		$this->db->where('id', $id);
        $query = $this->db->get('user');
		return $query->result();
	}
	
	// insert
	function insert_user($data)
    {
		return $this->db->insert('user', $data);
	}

	// read the user list from DB
	function get_user_list()
	{
		$sql = 'select id, fname, lname, email, password from user';
		$query = $this->db->query($sql);
		$afrizal = $query->result();
		return $query->result();
		
	}

	function tampil()
	{
		$hasil=$this->db->query("SELECT * FROM user");
		return $hasil;
	}

	function selectAll()
	{
			$this->db->order_by("fname","desc");
			return $this->db->get('user')->result();
	}

	function edit_data($where,$table)
	{
		return $this->db->get_where($table,$where);
	}
	
	function update_data($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}

	function hapus_data($where,$table)
	{
		$this->db->where($where);
		$this->db->delete($table);
	}
}?>