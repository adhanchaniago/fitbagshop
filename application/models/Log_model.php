<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Log_model extends CI_Model {
	
	private $table_name = 'tb_activity_log';
	
	function __construct(){
		parent::__construct();
		$this->load->model('general_model');		
	}

	public function add_log($users, $activity, $to, $datetime_registered = FALSE) {

		if($datetime_registered === FALSE) {
			$datetime_registered = date("Y-m-d H:i:s");
		}

		$data = array(
			'users' => $users,
			'activity' => $activity,
			'to' => $to,
			'date' => $datetime_registered
		);

		return $this->db->insert($this->table_name, $data);
	}
	
	public function count_all_log()
	{
		$this->db->select('*');
		$this->db->from($this->table_name);
		$this->db->order_by('id', 'DESC');

		$query = $this->db->get();
		return $query->result_array();	
	}
	
	// Function get admin log activity
	function get_admin_log($limit)
	{
		$this->db->select('b.*');
		$this->db->from('tb_users a');
		$this->db->join('tb_activity_log b', 'b.users = a.username', 'left');
		$this->db->order_by('id', 'desc');
		$this->db->limit($limit);

		$query = $this->db->get();
		return $query->result_array();
	}
	
	// Function get sponsor log activity
	function get_sponsor_log($limit)
	{
		$this->db->select('b.*');
		$this->db->from('tb_sponsor a');
		$this->db->join('tb_activity_log b', 'b.users = a.username', 'left');
		$this->db->order_by('id', 'desc');
		$this->db->limit($limit);

		$query = $this->db->get();
		return $query->result_array();
	}
	
}