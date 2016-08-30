<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class General_model extends CI_Model{
	function __construct(){
		parent::__construct();
	}		
	
	function insert_data($table, $data)
	{
		$this->db->insert($table, $data);
	}
	
	function insert_data_batch($table,$data){		
		$this->db->insert_batch($table, $data);
	}
	
	function update_data($table, $data, $where)
	{
		$this->db->update($table, $data, $where);
	}
	
	function delete_data($table,$where)
	{
		$this->db->delete($table, $where);
	}
	
	function truncate_data($table)
	{
		$this->db->truncate($table);
	}
	
	function replace_data($table, $data)
	{
		$this->db->replace($table, $data);
	}
	
	function set_upload_options()
	{   
		//upload an image options
		$config = array();
		$config['upload_path'] = 'assets/uploads/';
		$config['allowed_types'] = 'gif|jpg|png';
		$config['max_size']      = '0';
		$config['overwrite']     = FALSE;
	
		return $config;
	}
	
	function createthumbnail($filename, $width, $height)		 
	{		 
		$config['image_library']    = "gd2";    
		$config['source_image']     = "assets/uploads/home/" .$filename;  
		$config['create_thumb']     = TRUE;      		 
		$config['maintain_ratio']   = TRUE;    
		$config['width'] = $width;  
		$config['height'] = $height;
		$this->load->library('image_lib',$config);
		 
		if($this->image_lib->resize())		 
		{		 
			return true;
					 
		}      		 
	}

}
