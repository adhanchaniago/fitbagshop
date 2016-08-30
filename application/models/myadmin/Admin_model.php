<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin_model extends CI_Model {

	function __construct(){
		parent::__construct();
		$this->load->model('general_model');
	}

	public function login_admin($username, $password) {
		$this->db->select('*');
		$this->db->from('tb_users');
		$this->db->where('username', $username);
		$this->db->or_where('email', $username);
		// $this->db->where('password', md5($password));

		$x = $this->db->get()->row_array();

		// legacy support for md5()
		if($x['password'] === md5($password)) return $x;
		else if(password_verify($password, $x['password'])) return $x;
		else return array();
	}
	
	function get_operator_detail($id)
	{
		$this->db->select('*');
		$this->db->from('tb_users');
		$this->db->where('id', $id);

		$query = $this->db->get();
		return $query->row_array();
	}

	function get_all_users()
	{
		$this->db->select('*');
		$this->db->from('tb_users');

		$query = $this->db->get();
		return $query->result_array();
	}		
	
}