<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Company_model extends CI_Model {

	function __construct(){
		parent::__construct();
		$this->load->model('general_model');
	}

	public function get_company_detail()
	{
		$this->db->select('*');
		$this->db->from('tb_company');

		$query = $this->db->get();
		return $query->row_array();
	}
	
	public function get_company_bank()
	{
		$this->db->select('*');
		$this->db->from('tb_company_bank_acc');
		$this->db->order_by('bank_name', 'asc');

		$query = $this->db->get();
		return $query->result_array();
	}
	
}