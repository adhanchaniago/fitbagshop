<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Shop extends CI_Controller {
	function __construct(){
		parent::__construct();
		// Check restriction
		if($this->session->userdata('admin_logged_in')==FALSE) {
			$this->session->set_userdata('goto', "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]");
			redirect(admin_url().'login');	
		}
		// Load model
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
		$this->data['title'] 	= 'Post Data';
		$this->data['post'] 	= $this->blog_model->get_all_post();
		$this->data['css'] 		= 'body/admin/css/form_style_default';
		$this->data['js'] 		= 'body/admin/js/form_style_default';
		$this->data['content'] 	= 'content/admin/blog/post_data';
		$this->load->view('body/admin/style_1', $this->data);
	}	

	public function add_product()
	{
		// Define variable data
		$this->data['category'] = $this->produk_model->get_main_category('category_name', 'asc');
		$this->data['tax']		= $this->produk_model->get_all_tax();
		$this->data['brand']	= $this->produk_model->get_all_brand();
		$this->data['gudang']	= $this->produk_model->get_all_lokasi_gudang();
		if($this->session->userdata('tmp_session')) {
			$this->data['tmp_images']	= $this->produk_model->get_all_images_tmp($this->session->userdata('tmp_session'));
		}

		// Define CSS
		$this->data['title'] 	= 'Add New Product';
		$this->data['css'] 		= 'body/admin/css/add_product_style';
		$this->data['js'] 		= 'body/admin/js/add_product_js';
		$this->data['content'] 	= 'content/admin/shop/add_product';
		$this->load->view('body/admin/style_1', $this->data);
	}	

	public function edit_product($id)
	{
		// Define CSS
		$this->data['title'] 	= 'Add New Product';
		$this->data['css'] 		= 'body/admin/css/add_product_style';
		$this->data['js'] 		= 'body/admin/js/add_product_js';
		$this->data['content'] 	= 'content/admin/shop/add_product';
		$this->load->view('body/admin/style_1', $this->data);
	}	

	public function product_review()
	{
		// Define CSS
		$this->data['title'] 	= 'Add New Product';
		$this->load->view('content/admin/shop/ajax/ecommerce_product_reviews', $this->data);
	}	

	public function ajaximageshandler()
	{
		if($this->session->userdata('tmp_session')) {
			$session_id = $this->session->userdata('tmp_session');
			// Get tmp images
			$tmp_images = $this->produk_model->get_all_images_tmp($session_id);
			foreach($tmp_images as $rows) {

			echo '<tr id="tmp_'.$rows['id'].'"><td><a href="'.base_url().$rows['filepath'].'/'.$rows['filename'].'" class="fancybox-button" data-rel="fancybox-button"><img class="img-responsive" src="'.base_url().$rows['filepath'].'/'.$rows['filename'].'" alt=""></a><input type="hidden" name="session_tmp_images" value="'.$rows['session_id'].'"></td><td><input type="text" class="form-control" name="image_label[]" value="Product Image Label"><input type="hidden" name="tmp_id[]" value="'.$rows['id'].'"><input type="hidden" name="filepath[]" value="'.$rows['filepath'].'"><input type="hidden" name="filename[]" value="'.$rows['filename'].'"></td><td><a href="javascript:;" class="btn btn-default btn-sm" id="removeimgtmp_'.$rows['id'].'" onclick="deltmpimages('.$rows['id'].');"><i class="fa fa-times"></i> Remove </a></td></tr>';
			}
		} else {
			echo '';
		}
	}	

}
 