<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {
	function __construct(){
		parent::__construct();
		// Check restriction
		if($this->session->userdata('admin_logged_in')==FALSE) {
			$this->session->set_userdata('goto', "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]");
			redirect(admin_url().'login');	
		}	
		// Load the model
		$this->load->model('company_model');
		$this->load->model('myadmin/admin_model');
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
		$this->data['title'] = 'User List';
		$this->data['users'] = $this->admin_model->get_all_users();
		$this->data['css'] = 'body/admin/css/form_style_default';
		$this->data['js'] = 'body/admin/js/form_style_default';
		$this->data['content'] = 'content/admin/user/list';
		$this->load->view('body/admin/style_1', $this->data);
	}

	public function profile($id)
	{
		$this->data['title'] = 'User Profile';
		$this->data['users'] = $this->admin_model->get_operator_detail($id);
		$this->data['css'] = 'body/admin/css/form_style_default';
		$this->data['js'] = 'body/admin/js/form_style_default';
		$this->data['content'] = 'content/admin/user/profile';
		$this->load->view('body/admin/style_1', $this->data);
	}

	public function add_new()
	{
		$this->data['title'] = 'Add New User';
		$this->data['css'] = 'body/admin/css/form_style_default';
		$this->data['js'] = 'body/admin/js/form_style_default';
		$this->data['content'] = 'content/admin/user/add_new';
		$this->load->view('body/admin/style_1', $this->data);
	}
}
