<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cron extends CI_Controller {
	function __construct(){
		parent::__construct();
		// Load model
		$this->load->model('general_model');
		$this->load->model('produk_model');
	}
	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		show_404();
	}	

	// This cron for delete all tmp images product for freely disk space
	public function refresh_product_tmp_images()
	{
		// Delete current tb_post_tag
		$date = date('Y-m-d');		

		// Get query tmp images 
		$tmp_images = $this->produk_model->get_all_images_tmp_by_date($date);

		if(!empty($tmp_images)) foreach($tmp_images as $rows) {

			// Define filepath
			$filepath = $rows['filepath'];
			// Check if file not exists
			if (is_dir($filepath)) {
			    DeletePath($filepath);

			    $table = 'tb_tmp_images';
				$where = array('id' => $rows['id']);
				$this->general_model->delete_data($table, $where);

				echo 'Done';
			}

		}
	}		

}
