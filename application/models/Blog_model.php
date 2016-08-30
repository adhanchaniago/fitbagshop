<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Blog_model extends CI_Model {

	function __construct(){
		parent::__construct();
		$this->load->model('general_model');
	}

	public function get_all_post()
	{
		$this->db->select('*');
		$this->db->from('tb_post');

		$query = $this->db->get();
		return $query->result_array();
	}

	public function get_all_post_limit($limit)
	{
		$this->db->select('*');
		$this->db->from('tb_post');
		$this->db->limit($limit);

		$query = $this->db->get();
		return $query->result_array();
	}

	public function get_post_by_id($post_id)
	{
		$this->db->select('*');
		$this->db->from('tb_post');
		$this->db->where('id', $post_id);

		$query = $this->db->get();
		return $query->row_array();
	}

	public function get_post_by_slug($slug)
	{
		$this->db->select('*');
		$this->db->from('tb_post');
		$this->db->where('slug', $slug);

		$query = $this->db->get();
		return $query->row_array();
	}
	
	public function get_all_category()
	{
		$this->db->select('*');
		$this->db->from('tb_category_post');
		$this->db->order_by('name', 'asc');

		$query = $this->db->get();
		return $query->result_array();
	}

	public function get_all_active_category()
	{
		$this->db->select('*');
		$this->db->from('tb_category_post');
		$this->db->where('is_active', 1);
		$this->db->order_by('name', 'asc');

		$query = $this->db->get();
		return $query->result_array();
	}

	public function get_category_by_id($category_id)
	{
		$this->db->select('*');
		$this->db->from('tb_category_post');
		$this->db->where('id', $category_id);

		$query = $this->db->get();
		return $query->row_array();
	}

	public function get_all_tag()
	{
		$this->db->select('*');
		$this->db->from('tb_tag');
		$this->db->order_by('name', 'asc');

		$query = $this->db->get();
		return $query->result_array();
	}

	public function get_all_active_tag()
	{
		$this->db->select('*');
		$this->db->from('tb_tag');
		$this->db->where('is_active', 1);
		$this->db->order_by('name', 'asc');

		$query = $this->db->get();
		return $query->result_array();
	}

	public function get_tag_by_id($tag_id)
	{
		$this->db->select('*');
		$this->db->from('tb_tag');
		$this->db->where('id', $tag_id);

		$query = $this->db->get();
		return $query->row_array();
	}

	public function get_tag_by_post_id($post_id)
	{
		$this->db->select('a.*, b.name, b.description');
		$this->db->from('tb_post_tag a');
		$this->db->where('a.post_id', $post_id);
		$this->db->join('tb_tag b', 'b.id = a.tag_id', 'LEFT');
		$this->db->order_by('b.name', 'asc');

		$query = $this->db->get();
		return $query->result_array();
	}

	public function get_current_tag($post_id, $tag_id)
	{
		$this->db->select('*');
		$this->db->from('tb_post_tag');
		$this->db->where('tag_id', $tag_id);
		$this->db->where('post_id', $post_id);

		$query = $this->db->get();
		return $query->row_array();
	}

	public function get_all_comments()
	{
		$this->db->select('a.*, b.title');
		$this->db->from('tb_post_comments a');
		$this->db->join('tb_post b', 'b.id = a.post_id', 'LEFT');
		$this->db->order_by('a.id', 'desc');

		$query = $this->db->get();
		return $query->result_array();
	}

	public function get_all_comments_limit($limit)
	{
		$this->db->select('a.*, b.title');
		$this->db->from('tb_post_comments a');
		$this->db->join('tb_post b', 'b.id = a.post_id', 'LEFT');
		$this->db->order_by('a.id', 'desc');
		$this->db->limit($limit);

		$query = $this->db->get();
		return $query->result_array();
	}
	
}