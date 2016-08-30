<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Produk_model extends CI_Model {

	function __construct(){
		parent::__construct();
		$this->load->model('general_model');
	}	
	
	public function get_main_category($sort_type, $sort)
	{
		$this->db->select('*');
		$this->db->from('tb_kategori');
		$this->db->where('main_category', 0);
		$this->db->order_by($sort_type, $sort);

		$query = $this->db->get();
		return $query->result_array();
	}

	public function get_sub_category($id, $sort_type, $sort)
	{
		$this->db->select('*');
		$this->db->from('tb_kategori');
		$this->db->where('main_category', $id);
		$this->db->order_by($sort_type, $sort);

		$query = $this->db->get();
		return $query->result_array();
	}

	public function get_all_tax()
	{
		$this->db->select('*');
		$this->db->from('tb_produk_tax');
		$this->db->where('status', 1);

		$query = $this->db->get();
		return $query->result_array();
	}

	public function get_tax_by_id($id)
	{
		$this->db->select('*');
		$this->db->from('tb_produk_tax');
		$this->db->where('tax_ID', $id);

		$query = $this->db->get();
		return $query->row_array();
	}

	public function get_all_brand()
	{
		$this->db->select('*');
		$this->db->from('tb_brand');
		$this->db->where('status', 1);

		$query = $this->db->get();
		return $query->result_array();
	}

	public function get_brand_by_id($id)
	{
		$this->db->select('*');
		$this->db->from('tb_brand');
		$this->db->where('tax_ID', $id);

		$query = $this->db->get();
		return $query->row_array();
	}

	public function get_all_lokasi_gudang()
	{
		$this->db->select('*');
		$this->db->from('tb_produk_lokasi');
		$this->db->where('status', 1);

		$query = $this->db->get();
		return $query->result_array();
	}

	public function get_all_images_tmp($session_id)
	{
		$this->db->select('*');
		$this->db->from('tb_tmp_images');
		$this->db->where('session_id', $session_id);

		$query = $this->db->get();
		return $query->result_array();
	}

	public function get_images_tmp_by_id($tmp_id)
	{
		$this->db->select('*');
		$this->db->from('tb_tmp_images');
		$this->db->where('id', $tmp_id);

		$query = $this->db->get();
		return $query->row_array();
	}

	public function get_all_images_tmp_by_date($date)
	{
		$this->db->select('*');
		$this->db->from('tb_tmp_images');
		$this->db->where('added_date !=', $date);

		$query = $this->db->get();
		return $query->result_array();
	}

	public function get_nomor_pergerakan($kode)
	{
		$this->db->select('*');
		$this->db->from('tb_penomoran');
		$this->db->where('kode', $kode);
		$this->db->order_by('id', 'desc');

		$query = $this->db->get();
		return $query->row_array();
	}
	
}