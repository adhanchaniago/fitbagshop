<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Portfolio extends CI_Controller {
	function __construct(){
		parent::__construct();
		// Check restriction
		if($this->session->userdata('admin_logged_in')==FALSE) {
			$this->session->set_userdata('goto', "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]");
			redirect(admin_url().'login');	
		}
		// Load model
		$this->load->model('portfolio_model');
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
		$this->data['title'] 	= 'Portfolio Data';
		$this->data['portfolio'] 	= $this->portfolio_model->get_all_portfolio();
		$this->data['css'] 		= 'body/admin/css/form_style_default';
		$this->data['js'] 		= 'body/admin/js/form_style_default';
		$this->data['content'] 	= 'content/admin/portfolio/my_portfolio';
		$this->load->view('body/admin/style_1', $this->data);
	}

	// Function url for post detail
	function portfolio_detail($portfolio_id)
	{
		$this->data['title'] 		= 'Portfolio Detail';
		$this->data['css'] 			= 'body/admin/css/form_style_default';
		$this->data['js'] 			= 'body/admin/js/form_style_default';
		$this->data['category'] 	= $this->portfolio_model->get_all_active_category();
		$this->data['portfolio'] 	= $this->portfolio_model->get_portfolio_by_id($portfolio_id);
		$this->data['content'] 		= 'content/admin/portfolio/edit_portfolio';
		$this->load->view('body/admin/style_1', $this->data);
	}

	// Function url for add new post
	function add_new()
	{
		$this->data['title'] 	= 'Add New Portfolio';
		$this->data['css'] 		= 'body/admin/css/form_style_default';
		$this->data['js'] 		= 'body/admin/js/form_style_default';
		$this->data['category'] = $this->portfolio_model->get_all_active_category();
		$this->data['content'] 	= 'content/admin/portfolio/add_portfolio';
		$this->load->view('body/admin/style_1', $this->data);
	}

	// Function url for add new post category
	function image_list($portfolio_id)
	{
		$this->data['title'] 		= 'Portfolio Image List';
		$this->data['images']		= $this->portfolio_model->get_all_image($portfolio_id);
		$this->data['portfolio_id']	= $portfolio_id;
		$this->data['css'] 			= 'body/admin/css/form_style_default';
		$this->data['js'] 			= 'body/admin/js/form_style_default';
		$this->data['content'] 		= 'content/admin/portfolio/portfolio_image';
		$this->load->view('body/admin/style_1', $this->data);
	}

	// Function url for add new post tag
	function add_new_category()
	{
		$this->data['title'] 	= 'Add New Portfolio Category';
		$this->data['css'] 		= 'body/admin/css/form_style_default';
		$this->data['js'] 		= 'body/admin/js/form_style_default';
		$this->data['content'] 	= 'content/admin/portfolio/add_new_category';
		$this->load->view('body/admin/style_1', $this->data);
	}

	// Function url category data
	function category_data()
	{
		$this->data['title'] 	= 'Portfolio Category Data';
		$this->data['category']	= $this->portfolio_model->get_all_category();
		$this->data['css'] 		= 'body/admin/css/form_style_default';
		$this->data['js'] 		= 'body/admin/js/form_style_default';
		$this->data['content'] 	= 'content/admin/portfolio/category_data';
		$this->load->view('body/admin/style_1', $this->data);
	}

	// Function url edit category data
	function edit_category_data($category_id)
	{
		$this->data['title'] 	= 'Edit Portfolio Category Data';
		$this->data['category']	= $this->portfolio_model->get_category_by_id($category_id);
		$this->data['css'] 		= 'body/admin/css/form_style_default';
		$this->data['js'] 		= 'body/admin/js/form_style_default';
		$this->data['content'] 	= 'content/admin/portfolio/edit_category';
		$this->load->view('body/admin/style_1', $this->data);
	}	

}
