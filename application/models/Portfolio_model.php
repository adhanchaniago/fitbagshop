<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Portfolio_model extends CI_Model {

	function __construct(){
		parent::__construct();
		$this->load->model('general_model');
	}

	public function get_all_portfolio()
	{
		$this->db->select('*');
		$this->db->from('tb_portfolio');

		$query = $this->db->get();
		return $query->result_array();
	}

	public function get_all_portfolio_limit($limit)
	{
		$this->db->select('*');
		$this->db->from('tb_portfolio');
		$this->db->limit($limit);

		$query = $this->db->get();
		return $query->result_array();
	}

	public function get_portfolio_by_id($portfolio_id)
	{
		$this->db->select('*');
		$this->db->from('tb_portfolio');
		$this->db->where('id', $portfolio_id);

		$query = $this->db->get();
		return $query->row_array();
	}

	public function get_portfolio_by_slug($slug)
	{
		$this->db->select('*');
		$this->db->from('tb_portfolio');
		$this->db->where('slug', $slug);

		$query = $this->db->get();
		return $query->row_array();
	}
	
	public function get_all_category()
	{
		$this->db->select('a.*, b.username');
		$this->db->from('tb_category_portfolio a');
		$this->db->join('tb_users b', 'b.id = a.user_id', 'LEFT');
		$this->db->order_by('a.name', 'asc');

		$query = $this->db->get();
		return $query->result_array();
	}

	public function get_all_active_category()
	{
		$this->db->select('*');
		$this->db->from('tb_category_portfolio');
		$this->db->where('is_active', 1);
		$this->db->order_by('name', 'asc');

		$query = $this->db->get();
		return $query->result_array();
	}

	public function get_category_by_id($category_id)
	{
		$this->db->select('*');
		$this->db->from('tb_category_portfolio');
		$this->db->where('id', $category_id);

		$query = $this->db->get();
		return $query->row_array();
	}

	public function get_all_image($portfolio_id)
	{
		$this->db->select('*');
		$this->db->from('tb_portfolio_images');
		$this->db->where('portfolio_id', $portfolio_id);

		$query = $this->db->get();
		return $query->result_array();
	}

	public function get_image_by_id($image_id)
	{
		$this->db->select('*');
		$this->db->from('tb_portfolio_images');
		$this->db->where('id', $image_id);

		$query = $this->db->get();
		return $query->row_array();
	}
	
}