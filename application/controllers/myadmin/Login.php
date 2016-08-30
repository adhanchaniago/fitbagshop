<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller{
	function __construct(){
		parent::__construct();
		//pre($this->session->userdata);
		$this->load->helper('cookie');
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
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */

	# Index for login page
	public function index()
	{
		$this->load->view('content/admin/login');
	}
	
	# Url for action login
	public function do_login()
	{
		// Check if variable post not empty
		if($this->input->post('usermail') && $this->input->post('password')) {

			// Define variable from post
			$username = $this->input->post('usermail');
			$password = $this->input->post('password');
			$user_ip  = $this->input->ip_address();
			
			// Load model
			$this->load->model('myadmin/admin_model'); 
			$this->load->model('log_model');

			// Check query for login admin
			$login = $this->admin_model->login_admin($username, $password);
			
			// Verify if login exist
			if(!empty($login)) {

				// Add activity log
				$this->log_model->add_log($login['username'], 'Login success', 'Admin Index Page');
				
				// Set session user data
				$sess_user = array(
					   'admin_logged_in' => true,
					   'user_id' => $login['id'],
					   'email' => $login['email'],
					   'first_name' => $login['first_name'] ,
					   'last_name' => $login['last_name']  ,
					   'username' => $login['username']  ,
					   'group_id' => $login['group_id'] 
					);
				$this->session->set_userdata($sess_user);
				$session_id = session_id();

				// Update user login status
				$this->db->update('tb_users', array(
					'last_login' 	=> date('Y-m-d H:i:s'),
					'ip_address' 	=> $this->input->ip_address(),
					'login_attempt' => ($login['login_attempt']+1)
				), array('id'   	=> $login['id']));	
				
				// Redirect
				if($this->session->userdata('goto')) {
					redirect($this->session->userdata('goto'));
				} else {
					redirect('myadmin/home');
				}

			} else {

				// Add activity log
				$this->log_model->add_log($user_ip, 'Login error', 'Back to login page');
				redirect($_SERVER['HTTP_REFERER']);

			} // End verify login user

		} else { 

			show_404();

		} // End check variable post data

	} // End function
	
	// This is action for logout
	public function destroy()
	{					
		//clear all session data
		$this->session->sess_destroy();
		redirect('backend/login');
	}
}
