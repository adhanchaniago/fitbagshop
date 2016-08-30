<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	function __construct(){
		parent::__construct();
		// Check restriction
		if($this->session->userdata('admin_logged_in')==FALSE) {
			$this->session->set_userdata('goto', "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]");
			redirect(admin_url().'login');	
		}

		//Load model
		$this->load->model('log_model');
		$this->load->model('blog_model');
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
		$this->data['title'] = 'Dashboard';
		$this->data['user_log'] = $this->log_model->get_admin_log(15);
		$this->data['user_post'] = $this->blog_model->get_all_post_limit(10);
		$this->data['user_portolio'] = $this->portfolio_model->get_all_portfolio_limit(10);
		$this->data['user_comments'] = $this->blog_model->get_all_comments_limit(10);
		$this->data['content'] = 'content/admin/home/index';
		$this->load->view('body/admin/style_1', $this->data);
	}
}
