<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Process extends CI_Controller{
	function __construct(){
		parent::__construct();
		// Check restriction
		if($this->session->userdata('admin_logged_in')==FALSE) {
			$this->session->set_userdata('goto', "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]");
			redirect(admin_url().'login');	
		}
		// Load Model
		$this->load->model('company_model');
		$this->load->model('general_model');
		$this->load->model('produk_model');
		$this->load->model('log_model');

		// Define variable		
		$this->operator = $this->session->userdata('username');
		$this->operator_id = $this->session->userdata('user_id'); 
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
	function index()
	{
		redirect(admin_url().'home');
	}
	
	// Function untuk update company detail (../office)
	function update_company()
	{
		// Define variable post from form

		// Social media text input
		$facebook = $this->input->post('facebook'); 
		$twitter = $this->input->post('twitter'); 
		$google_plus = $this->input->post('google_plus'); 
		$linkedin = $this->input->post('linkedin'); 
		$rss = $this->input->post('rss'); 
		$youtube = $this->input->post('youtube'); 
		$pinterest = $this->input->post('pinterest'); 
		$skype = $this->input->post('skype'); 
		$bbm = $this->input->post('bbm'); 

		// Company Information input
		$company_name = $this->input->post('company_name'); 
		$company_address = $this->input->post('company_address'); 
		$company_city = $this->input->post('company_city'); 
		$company_postcode = $this->input->post('company_postcode'); 
		$company_state = $this->input->post('company_state'); 
		$company_country = $this->input->post('company_country'); 
		$company_phone = $this->input->post('company_phone'); 
		$about = $this->input->post('about'); 		
		$company = $this->company_model->get_company_detail();
		$id_company = $company['id_company']; 

		// Company email
		$company_email = $this->input->post('company_email'); 
		$sales_email = $this->input->post('sales_email'); 
		$info_email = $this->input->post('info_email'); 
		$support_email = $this->input->post('support_email'); 
		
		// Upload Images Setting
		$icon = $company['company_logo'];	
		$config['upload_path'] = 'assets/uploads/office/';
		$config['allowed_types'] = 'jpg|gif|png|jpeg';
		$config['encrypt_name'] = TRUE;		
		$this->load->library('upload', $config);
		if($this->upload->do_upload('images'))
		{				
			$data = $this->upload->data(); 			
			$icon=$data['file_name'];		
		}
			
		// Update tb_company
		$this->db->update('tb_company', array(
			// Company Information
			'company_name' 		=> $company_name,	
			'company_address' 	=> $company_address,	
			'company_city' 		=> $company_city,	
			'company_postcode' 	=> $company_postcode,
			'company_state' 	=> $company_state,
			'company_country' 	=> $company_country,
			'company_phone' 	=> $company_phone,	
			'company_about' 	=> $about,	
			'company_logo' 		=> $icon,
			//Company Email
			'company_email' 	=> $company_email,
			'sales_email' 		=> $sales_email,
			'info_email' 		=> $info_email,
			'support_email' 	=> $support_email,
			// Social Media
			'facebook' 			=> $facebook,
			'twitter' 			=> $twitter,
			'google_plus' 		=> $google_plus,
			'linkedin' 			=> $linkedin,
			'rss' 				=> $rss,
			'youtube' 			=> $youtube,
			'path' 				=> $pinterest,
			'skype' 			=> $skype,
			'bbm' 				=> $bbm
		), array('id_company'   => $id_company));
		$this->db->insert_id();	
			
		// Add Log
		$this->log_model->add_log($this->operator, 'Edit Company Detail', 'Success, Company Detail has been saved.');
		
		// Set Notification to page
		$this->session->set_flashdata('success', 'Success, Company Detail has been saved.');
		
		// Redirect 
		redirect($_SERVER['HTTP_REFERER']);	
	}

	// Function url for action add new post
	function add_new_post()
	{
		// Define variable data
		// Post data
		$title = $this->input->post('title');
		$slug = url_title($title, 'dash', true);
		$content = $this->input->post('content');
		$status = $this->input->post('status');
		$category_id = $this->input->post('category_id');
		$tag_id = $this->input->post('tag_id');
		$count_tag = count($tag_id);
		$datetime = date('Y-m-d');

		// Seo Data
		$seo_title = $this->input->post('seo_title');
		$seo_keyword = $this->input->post('seo_keyword');
		$seo_description = $this->input->post('seo_description');

		// Check if variable post not empty
		if($title && $content && $status && $category_id && $tag_id && $seo_title && $seo_keyword && $seo_description) {

			// Get the images
			$config['upload_path'] = 'assets/uploads/images/';
			$config['allowed_types'] = 'jpg|gif|png|jpeg';
			$config['encrypt_name'] = TRUE;		
			$this->load->library('upload', $config);
			if($this->upload->do_upload('small_images'))
			{				
				$data = $this->upload->data(); 			
				$small_image=$data['file_name'];		
			}
			if($this->upload->do_upload('large_images'))
			{				
				$data = $this->upload->data(); 			
				$large_image=$data['file_name'];		
			}

			// Insert to post table
			$this->db->insert('tb_post', array(
				'admin_id' 		 	=> $this->operator_id,
				'category_id' 	 	=> $category_id,
				'slug' 	 			=> $slug,
				'title' 		 	=> $title,
				'content' 		 	=> $content,
				'add_date' 	 		=> $datetime,
				'small_images' 		=> $small_image,
				'large_images' 		=> $large_image,
				'seo_title' 	 	=> $seo_title,
				'seo_keyword' 		=> $seo_keyword,
				'seo_description' 	=> $seo_description,
				'status' 	 		=> $status
			));
			$post_id = $this->db->insert_id();

			// Insert post tag
			for($i=0; $i<$count_tag; $i++) {
				// Insert to table post tag
				$this->db->insert('tb_post_tag', array(
					'post_id' 		=> $post_id,
					'tag_id' 	 	=> $tag_id[$i]
				));
			}

			// Add Log
			$this->log_model->add_log($this->operator, 'Add New Post', 'Success, Post has been inserted to database.');
			
			// Set Notification to page
			$this->session->set_flashdata('success', 'Success, Post has been inserted to database.');
			
			// Redirect 
			redirect($_SERVER['HTTP_REFERER']);	

		} else {
			show_404();
		}

	}

	// Function url for edit post
	function edit_post()
	{
		// Define variable post from form 
		// Post data
		$post_id = $this->input->post('post_id');
		$title = $this->input->post('title');
		$slug = url_title($title, 'dash', true);
		$content = $this->input->post('content');
		$status = $this->input->post('status');
		$category_id = $this->input->post('category_id');
		$tag_id = $this->input->post('tag_id');
		$count_tag = count($tag_id);
		$datetime = date('Y-m-d');

		// Seo Data
		$seo_title = $this->input->post('seo_title');
		$seo_keyword = $this->input->post('seo_keyword');
		$seo_description = $this->input->post('seo_description');

		// Check if variable post not empty
		if($post_id && $title && $content && $status && $category_id && $tag_id && $seo_title && $seo_keyword && $seo_description) {

			// Get the images			
			$this->load->model('blog_model');
			$post = $this->blog_model->get_post_by_id($post_id);
			var_dump($post);
			$small_image = $post['small_images'];
			$large_image = $post['large_images'];
			$config['upload_path'] = 'assets/uploads/images/';
			$config['allowed_types'] = 'jpg|gif|png|jpeg';
			$config['encrypt_name'] = TRUE;		
			$this->load->library('upload', $config);
			if($this->upload->do_upload('small_images'))
			{				
				$data = $this->upload->data(); 			
				$small_image=$data['file_name'];		
			}
			if($this->upload->do_upload('large_images'))
			{				
				$data = $this->upload->data(); 			
				$large_image=$data['file_name'];		
			}

			// Update tb_post
			$this->db->update('tb_post', array(
				'admin_id' 		 	=> $this->operator_id,
				'category_id' 	 	=> $category_id,
				'slug' 	 			=> $slug,
				'title' 		 	=> $title,
				'content' 		 	=> $content,
				'add_date' 	 		=> $datetime,
				'small_images' 		=> $small_image,
				'large_images' 		=> $large_image,
				'seo_title' 	 	=> $seo_title,
				'seo_keyword' 		=> $seo_keyword,
				'seo_description' 	=> $seo_description,
				'status' 	 		=> $status
			), array('id'   => $post_id));

			// Delete current tb_post_tag
			$table = 'tb_post_tag';
			$where = array('post_id' => $post_id);
			$this->general_model->delete_data($table, $where);

			// Update tb_post_tag
			for($i=0; $i<$count_tag; $i++) {

				// Update to table post tag
				$this->db->insert('tb_post_tag', array(
					'post_id' 		=> $post_id,
					'tag_id' 	 	=> $tag_id[$i]
				));

			}
				
			// Add Log
			$this->log_model->add_log($this->operator, 'Edit Post Detail', 'Success, Post Detail has been saved.');
			
			// Set Notification to page
			$this->session->set_flashdata('success', 'Success, Post Detail has been saved.');
			
			// Redirect 
			redirect($_SERVER['HTTP_REFERER']);	

		} else {
			show_404();
		}
	}

	// Function url for add new post category
	function add_new_post_category()
	{
		// Define variable form post
		$name = $this->input->post('name');
		$description = $this->input->post('description');

		// Check if variable not empty
		if($name && $description) {

			// Insert to table post category
			$this->db->insert('tb_category_post', array(
				'name' 			=> $name,
				'description' 	=> $description,
				'is_active' 	=> 1
			));

			// Add Log
			$this->log_model->add_log($this->operator, 'Add New Post Category', 'Success, Post category has been inserted to database.');
			
			// Set Notification to page
			$this->session->set_flashdata('success', 'Success, Post category has been inserted to database.');
			
			// Redirect 
			redirect($_SERVER['HTTP_REFERER']);	

		} else { // If variable has empty then 
			show_404(); // Redirect to not found page
		}
	}

	// Function url for add new post category
	function edit_post_category()
	{
		// Define variable form post
		$name = $this->input->post('name');
		$status = $this->input->post('status');
		$category_id = $this->input->post('category_id');
		$description = $this->input->post('description');

		// Check if variable not empty
		if($category_id && $name && $description) {

			// Insert to table post category
			$this->db->update('tb_category_post', array(
				'name' 			=> $name,
				'description' 	=> $description,
				'is_active' 	=> $status
			), array('id'   => $category_id));

			// Add Log
			$this->log_model->add_log($this->operator, 'Edit Post Category', 'Success, Post category has been edited to database.');
			
			// Set Notification to page
			$this->session->set_flashdata('success', 'Success, Post category has been edited to database.');
			
			// Redirect 
			redirect($_SERVER['HTTP_REFERER']);	

		} else { // If variable has empty then 
			show_404(); // Redirect to not found page
		}
	}

	// Function url for action delete post category
	function delete_category_post($category_id)
	{
		$status = $this->input->get('status');
		// Check if category id not empty
		if($category_id) {

			// Delete current tb_post_tag
			$this->db->update('tb_category_post', array(
				'is_active' 	=> $status
			), array('id'   => $category_id));

			// Add Log
			$this->log_model->add_log($this->operator, 'Delete Post Category', 'Success, Post category has been unactivate from database.');
			
			// Set Notification to page
			$this->session->set_flashdata('success', 'Success, Post category has been unactivate from database.');
			
			// Redirect 
			redirect($_SERVER['HTTP_REFERER']);	

		} else {
			show_404();
		}
	}

	// Function url for add new post tag
	function add_new_post_tag()
	{
		// Define variable form post
		$name = $this->input->post('name');
		$description = $this->input->post('description');

		// Check if variable not empty
		if($name && $description) {

			// Insert to table post category
			$this->db->insert('tb_tag', array(
				'name' 			=> $name,
				'description' 	=> $description,
				'is_active' 	=> 1
			));

			// Add Log
			$this->log_model->add_log($this->operator, 'Add New Post Tag', 'Success, Post tag has been inserted to database.');
			
			// Set Notification to page
			$this->session->set_flashdata('success', 'Success, Post tag has been inserted to database.');
			
			// Redirect 
			redirect($_SERVER['HTTP_REFERER']);	

		} else { // If variable has empty then 
			show_404(); // Redirect to not found page
		}
	}

	// Function url for edit post tag
	function edit_post_tag()
	{
		// Define variable form post
		$name = $this->input->post('name');
		$status = $this->input->post('status');
		$category_id = $this->input->post('tag_id');
		$description = $this->input->post('description');

		// Check if variable not empty
		if($category_id && $name && $description) {

			// Insert to table post category
			$this->db->update('tb_tag', array(
				'name' 			=> $name,
				'description' 	=> $description,
				'is_active' 	=> $status
			), array('id'   => $category_id));

			// Add Log
			$this->log_model->add_log($this->operator, 'Edit Post Tag', 'Success, Post tag has been edited to database.');
			
			// Set Notification to page
			$this->session->set_flashdata('success', 'Success, Post tag has been edited to database.');
			
			// Redirect 
			redirect($_SERVER['HTTP_REFERER']);	

		} else { // If variable has empty then 
			show_404(); // Redirect to not found page
		}
	}

	// Function url for action delete post category
	function delete_post_tag($tag_id)
	{
		$status = $this->input->get('status');
		// Check if category id not empty
		if($tag_id) {
			
			// Delete current tb_post_tag
			$this->db->update('tb_tag', array(
				'is_active' 	=> $status
			), array('id'   => $tag_id));

			// Add Log
			$this->log_model->add_log($this->operator, 'Delete Post Tag', 'Success, Post tag has been unactivate from database.');
			
			// Set Notification to page
			$this->session->set_flashdata('success', 'Success, Post tag has been unactivate from database.');
			
			// Redirect 
			redirect($_SERVER['HTTP_REFERER']);	

		} else {
			show_404();
		}
	}

	// Function approve post comments
	function approve_comment($comment_id)
	{
		$status = $this->input->get('status');
		// Check if category id not empty
		if($comment_id) {
			
			// Delete current tb_post_tag
			$this->db->update('tb_post_comments', array(
				'is_active' 	=> $status
			), array('id'   => $comment_id));

			// Add Log
			$this->log_model->add_log($this->operator, 'Update Post Comment', 'Success, Post comment has been updated.');
			
			// Set Notification to page
			$this->session->set_flashdata('success', 'Success, Post comment has been updated.');
			
			// Redirect 
			redirect($_SERVER['HTTP_REFERER']);	

		} else {
			show_404();
		}
	}

	// Function url to add new portfolio
	function add_portfolio()
	{
		$title 			= $this->input->post('title');
		$slug 			= url_title($title, 'dash', true);
		$start_date 	= $this->input->post('start_date');
		$end_date 		= $this->input->post('end_date');
		$description 	= $this->input->post('description');
		$status 		= $this->input->post('status');
		$category_id 	= $this->input->post('category_id');
		$client 		= $this->input->post('client');

		if($title && $start_date && $end_date && $description && $status && $category_id && $client) {

			// Get the images
			$config['upload_path'] = 'assets/uploads/portfolio/';
			$config['allowed_types'] = 'jpg|gif|png|jpeg';
			$config['encrypt_name'] = TRUE;		
			$this->load->library('upload', $config);
			if($this->upload->do_upload('image'))
			{				
				$data = $this->upload->data(); 			
				$icon=$data['file_name'];		
			}

			// Insert to table portfolio
			$this->db->insert('tb_portfolio', array(
				'users_id' 		=> $this->operator_id,
				'category_id' 	=> $category_id,
				'slug' 			=> $slug,
				'title' 		=> $title,
				'description' 	=> $description,
				'client' 		=> $client,
				'start_date' 	=> $start_date,
				'end_date' 		=> $end_date,
				'image' 		=> $icon,
				'status' 		=> $status
			));

			// Add Log
			$this->log_model->add_log($this->operator, 'Add New Portfolio', 'Success, Portfolio has been inserted to database.');
			
			// Set Notification to page
			$this->session->set_flashdata('success', 'Success, Portfolio has been inserted to database.');
			
			// Redirect 
			redirect($_SERVER['HTTP_REFERER']);	

		} else {
			show_404();
		}
	}

	// Function url for edit portfolio
	function edit_portfolio()
	{
		// Define variable post from form 
		$portfolio_id = $this->input->post('portfolio_id');
		$title = $this->input->post('title');
		$slug = url_title($title, 'dash', true);
		$start_date = $this->input->post('start_date');		
		$end_date = $this->input->post('end_date');
		$status = $this->input->post('status');
		$category_id = $this->input->post('category_id');
		$description = $this->input->post('description');
		$client = $this->input->post('client');

		// Check if variable post not empty
		if($portfolio_id && $title && $description && $category_id && $client && $start_date && $end_date) {

			// Get the images			
			$this->load->model('portfolio_model');
			$portfolio = $this->portfolio_model->get_portfolio_by_id($portfolio_id);
			$icon = $portfolio['image'];
			$config['upload_path'] = 'assets/uploads/portfolio/';
			$config['allowed_types'] = 'jpg|gif|png|jpeg';
			$config['encrypt_name'] = TRUE;		
			$this->load->library('upload', $config);
			if($this->upload->do_upload('image'))
			{				
				$data = $this->upload->data(); 			
				$icon=$data['file_name'];		
			}

			// Update tb_portfolio
			$this->db->update('tb_portfolio', array(
				'users_id' 		=> $this->operator_id,
				'category_id' 	=> $category_id,
				'slug' 			=> $slug,
				'title' 		=> $title,
				'description' 	=> $description,
				'client' 		=> $client,
				'start_date' 	=> $start_date,
				'end_date' 		=> $end_date,
				'image' 		=> $icon,
				'status' 		=> $status
			), array('id'   => $portfolio_id));
				
			// Add Log
			$this->log_model->add_log($this->operator, 'Edit Portfolio Detail', 'Success, Portfolio Detail has been saved.');
			
			// Set Notification to page
			$this->session->set_flashdata('success', 'Success, Portfolio Detail has been saved.');
			
			// Redirect 
			redirect($_SERVER['HTTP_REFERER']);	

		} else {
			show_404();
		}
	}

	// Function url for delete porfolio 
	function delete_portfolio($portfolio_id)
	{
		if($portfolio_id) {

			// Delete current image
			$table = 'tb_portfolio';
			$where = array('id' => $portfolio_id);
			$this->general_model->delete_data($table, $where);

			// Add Log
			$this->log_model->add_log($this->operator, 'Delete Portfolio', 'Success, Portfolio has been deleted.');
				
			// Set Notification to page
			$this->session->set_flashdata('success', 'Success, Portfolio has been deleted.');
				
			// Redirect 
			redirect($_SERVER['HTTP_REFERER']);	

		} else { show_404(); }
	}

	// Add new portfolio image list
	function add_new_portfolio_image()
	{
		$portfolio_id = $this->input->post('portfolio_id');

		if($portfolio_id) {

			// Add image
			$config['upload_path'] = 'assets/uploads/portfolio/';
			$config['allowed_types'] = 'jpg|gif|png|jpeg';
			$config['encrypt_name'] = TRUE;		
			$this->load->library('upload', $config);
			if($this->upload->do_upload('image'))
			{				
				$data = $this->upload->data(); 			
				$icon=$data['file_name'];		
			}

			// Insert to table portfolio image
			$this->db->insert('tb_portfolio_images', array(
				'user_id' 		=> $this->operator_id,
				'portfolio_id' 	=> $portfolio_id,
				'image' 		=> $icon
			));

			// Add Log
			$this->log_model->add_log($this->operator, 'Add New Portfolio Image', 'Success, Portfolio Image has been added.');
			
			// Set Notification to page
			$this->session->set_flashdata('success', 'Success, Portfolio Image has been added.');
			
			// Redirect 
			redirect($_SERVER['HTTP_REFERER']);	

		} else { show_404(); }
	}

	// Function url for edit portfolio image (replace)
	function edit_portfolio_image()
	{
		$portfolio_id = $this->input->post('portfolio_id');
		$image_id = $this->input->post('image_id');

		if($portfolio_id && $image_id) {

			// Add image
			$config['upload_path'] = 'assets/uploads/portfolio/';
			$config['allowed_types'] = 'jpg|gif|png|jpeg';
			$config['encrypt_name'] = TRUE;		
			$this->load->library('upload', $config);
			if($this->upload->do_upload('image'))
			{				
				$data = $this->upload->data(); 			
				$icon=$data['file_name'];	

				// Update portfolio image
				$this->db->update('tb_portfolio_images', array(
					'user_id' 		=> $this->operator_id,
					'image' 		=> $icon
				), array('id'   => $image_id));	

				// Add Log
				$this->log_model->add_log($this->operator, 'Add New Portfolio Image', 'Success, Portfolio Image has been added.');
				
				// Set Notification to page
				$this->session->set_flashdata('success', 'Success, Portfolio Image has been added.');
				
				// Redirect 
				redirect($_SERVER['HTTP_REFERER']);	

			} else {
				show_404();
			}

		} else { show_404(); }
	}

	// Function url for delete porfolio image
	function delete_portfolio_image($image_id)
	{
		if($image_id) {

			// Delete current image
			$table = 'tb_portfolio_images';
			$where = array('id' => $image_id);
			$this->general_model->delete_data($table, $where);

			// Add Log
			$this->log_model->add_log($this->operator, 'Delete Portfolio Image', 'Success, Portfolio Image has been deleted.');
				
			// Set Notification to page
			$this->session->set_flashdata('success', 'Success, Portfolio Image has been deleted.');
				
			// Redirect 
			redirect($_SERVER['HTTP_REFERER']);	

		} else { show_404(); }
	}

	// Function url for add new portfolio category
	function add_new_portfolio_category()
	{
		// Define variable form post
		$name = $this->input->post('name');
		$description = $this->input->post('description');

		// Check if variable not empty
		if($name && $description) {

			// Insert to table post category
			$this->db->insert('tb_category_portfolio', array(
				'user_id' 		=> $this->operator_id,
				'name' 			=> $name,
				'description' 	=> $description,
				'is_active' 	=> 1
			));

			// Add Log
			$this->log_model->add_log($this->operator, 'Add New Portfolio Category', 'Success, Portfolio category has been inserted to database.');
			
			// Set Notification to page
			$this->session->set_flashdata('success', 'Success, Portfolio category has been inserted to database.');
			
			// Redirect 
			redirect($_SERVER['HTTP_REFERER']);	

		} else { // If variable has empty then 
			show_404(); // Redirect to not found page
		}
	}

	// Function url for add new post category
	function edit_portfolio_category()
	{
		// Define variable form post
		$name = $this->input->post('name');
		$status = $this->input->post('status');
		$category_id = $this->input->post('category_id');
		$description = $this->input->post('description');

		// Check if variable not empty
		if($category_id && $name && $description) {

			// Insert to table post category
			$this->db->update('tb_category_portfolio', array(
				'name' 			=> $name,
				'description' 	=> $description,
				'is_active' 	=> $status
			), array('id'   => $category_id));

			// Add Log
			$this->log_model->add_log($this->operator, 'Edit Portfolio Category', 'Success, Portfolio category has been edited to database.');
			
			// Set Notification to page
			$this->session->set_flashdata('success', 'Success, Portfolio category has been edited to database.');
			
			// Redirect 
			redirect($_SERVER['HTTP_REFERER']);	

		} else { // If variable has empty then 
			show_404(); // Redirect to not found page
		}
	}

	// Function url for action delete post category
	function delete_portfolio_category($category_id)
	{
		$status = $this->input->get('status');
		// Check if category id not empty
		if($category_id) {

			// Delete current tb_post_tag
			$this->db->update('tb_category_portfolio', array(
				'is_active' 	=> $status
			), array('id'   => $category_id));

			// Add Log
			$this->log_model->add_log($this->operator, 'Delete Portfolio Category', 'Success, Portfolio category has been unactivate from database.');
			
			// Set Notification to page
			$this->session->set_flashdata('success', 'Success, Portfolio category has been unactivate from database.');
			
			// Redirect 
			redirect($_SERVER['HTTP_REFERER']);	

		} else {
			show_404();
		}
	}

	// Function update user status
	function user_status($user_id)
	{
		$status = $this->input->get('status');
		// Check if category id not empty
		if($user_id) {
			
			// Delete current tb_post_tag
			$this->db->update('tb_users', array(
				'active' 	=> $status
			), array('id'   => $user_id));

			// Add Log
			$this->log_model->add_log($this->operator, 'Update User Status', 'Success, user status has been updated.');
			
			// Set Notification to page
			$this->session->set_flashdata('success', 'Success, user status has been updated.');
			
			// Redirect 
			redirect($_SERVER['HTTP_REFERER']);	

		} else {
			show_404();
		}
	}

	// Function url for edit portfolio image (replace)
	function edit_user_profile()
	{
		$first_name = $this->input->post('first_name');
		$last_name = $this->input->post('last_name');
		$phone = $this->input->post('phone');
		$email = $this->input->post('email');
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$status = $this->input->post('status');
		$user_id = $this->input->post('user_id');

		if($first_name && $last_name && $phone && $email && $username) {

			// Add image
			$this->load->model('myadmin/admin_model');
			$users 					= $this->admin_model->get_operator_detail($user_id);
			$icon 					= $users['avatar'];
			$config['upload_path'] 	= 'assets/uploads/profile/';
			$config['allowed_types']= 'jpg|gif|png|jpeg';
			$config['encrypt_name'] = TRUE;		
			$this->load->library('upload', $config);
			if($this->upload->do_upload('image'))
			{				
				$data = $this->upload->data(); 			
				$icon=$data['file_name'];	
			}

			if($password) {
				
				// Update user profile
				$this->db->update('tb_users', array(
					'username' 		=> $username,
					'password' 		=> md5($password),
					'avatar' 		=> $icon,
					'email' 		=> $email,
					'phone' 		=> $phone,
					'first_name' 	=> $first_name,
					'last_name' 	=> $last_name,
					'active' 		=> $status
				), array('id'   	=> $user_id));	

			} else {

				// Update user profile
				$this->db->update('tb_users', array(
					'username' 		=> $username,
					'avatar' 		=> $icon,
					'email' 		=> $email,
					'phone' 		=> $phone,
					'first_name' 	=> $first_name,
					'last_name' 	=> $last_name,
					'active' 		=> $status
				), array('id'   	=> $user_id));	
				
			}

			// Add Log
			$this->log_model->add_log($this->operator, 'Edit User Profile', 'Success, User Profile has been updated.');
				
			// Set Notification to page
			$this->session->set_flashdata('success', 'Success, User Profile has been updated.');
				
			// Redirect 
			redirect($_SERVER['HTTP_REFERER']);	

		} else { show_404(); }
	}

	// Function url add new user
	function add_new_user()
	{
		$first_name = $this->input->post('first_name');
		$last_name = $this->input->post('last_name');
		$phone = $this->input->post('phone');
		$email = $this->input->post('email');
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$status = $this->input->post('status');

		if($first_name && $last_name && $phone && $email && $username) {

			// Image config
			$config['upload_path'] 	= 'assets/uploads/profile/';
			$config['allowed_types']= 'jpg|gif|png|jpeg';
			$config['encrypt_name'] = TRUE;		
			$this->load->library('upload', $config);
			if($this->upload->do_upload('image'))
			{				
				$data = $this->upload->data(); 			
				$icon=$data['file_name'];	
			}

			// Insert to table post category
			$this->db->insert('tb_users', array(
				'group_id' 		=> 1,
				'username' 		=> $username,
				'password' 		=> md5($password),
				'avatar' 		=> $icon,
				'email' 		=> $email,
				'phone' 		=> $phone,
				'first_name' 	=> $first_name,
				'last_name' 	=> $last_name,
				'active' 		=> $status
			));

			// Add Log
			$this->log_model->add_log($this->operator, 'Add New User', 'Success, User has been added.');
				
			// Set Notification to page
			$this->session->set_flashdata('success', 'Success, User has been added.');
				
			// Redirect 
			redirect($_SERVER['HTTP_REFERER']);	

		}else { show_404(); }
	}


	function upload_images($session_id)
	{
		// Check if tmp session is empty
		if($this->session->userdata('tmp_session')) {
			$session_id = $this->session->userdata('tmp_session');
		} else {
			$this->session->set_userdata('tmp_session', $session_id);
		}

		$filepath = 'assets/uploads/product/'.$session_id;

		if (!file_exists($filepath)) {
		    mkdir($filepath, 0755, true);
		}

		$myfile = fopen($filepath."/index.html", "w") or die("Unable to open file!");
		$txt = "Hello, We Can't display anything yet!!!.\n";
		fwrite($myfile, $txt);
		fclose($myfile);		

		// Upload config in codeigniter		
		$config['upload_path'] = $filepath;
		$config['allowed_types'] = 'jpg|gif|png|jpeg';
		$config['encrypt_name'] = TRUE;		
		$this->load->library('upload', $config);

		// Check if upload has done
		if($this->upload->do_upload('file'))
		{			
			// Define file data	
			$data = $this->upload->data(); 			
			$filename=$data['file_name'];				

			// Insert to tmp images table
			$this->db->insert('tb_tmp_images', array(
				'session_id' 	=> $session_id,
				'filename' 	 	=> $filename,
				'filepath' 	 	=> $filepath,
				'added_date' 	=> date('Y-m-d')
			));

			die('{"OK" : OK}');
		} else {
			die('{"OK" : 0}');
		}
	}


	public function ajaximageshandlerdel()
	{
		$tmp_id = $this->input->post('tmp_id');
		if($tmp_id) {
			// Get query tmp images by id
			$tmp_image = $this->produk_model->get_images_tmp_by_id($tmp_id);

			// Check if tmp image not empty
			if(!empty($tmp_image)) {
				unlink($tmp_image['filepath'].'/'.$tmp_image['filename']);

				// Delete current tb_post_tag
				$table = 'tb_tmp_images';
				$where = array('id' => $tmp_id);
				$this->general_model->delete_data($table, $where);
			}

			echo '1';
		} else {
			echo '0';
		}
	}

	public function add_new_product()
	{
		// Check if post not empty
		if($this->input->post()) {
		// Define post variable
			//Tab 1		
		$nama_produk = $this->input->post('nama_produk');
		$slug = url_title($nama_produk, 'dash', true);
		$deskripsi_produk = $this->input->post('deskripsi_produk');
		$deskripsi_pendek = $this->input->post('deskripsi_pendek');
		$brand_ID = $this->input->post('brand_ID');
		$kategori = $this->input->post('kategori');
		$jumlah_kategori = count($kategori);
		$berat_produk = $this->input->post('berat_produk');
		$satuan_berat = $this->input->post('satuan_berat');
		$start_avail_date = format_date_eng($this->input->post('start_avail_date'));
		$end_avail_date = format_date_eng($this->input->post('end_avail_date'));
		$sku = $this->input->post('sku');
		$material = $this->input->post('material');
		$harga_modal = $this->input->post('harga_modal');
		$margin = $this->input->post('margin');
		$harga_jual = $this->input->post('harga_jual');
		$discount = $this->input->post('discount');
		$discount_type = $this->input->post('discount_type');
		$cashback = $this->input->post('cashback');
		$cashback_type = $this->input->post('cashback_type');
		$tax_ID = $this->input->post('tax_ID');
		$status = $this->input->post('status');
		$kode_produk = kode_produk($brand_ID);

			//Tab 2
		$meta_title = $this->input->post('meta_title');
		$meta_keyword = $this->input->post('meta_keyword');
		$meta_description = $this->input->post('meta_description');

			//Tab 3
		$session_tmp_images = $this->input->post('session_tmp_images');
		$tmp_id = $this->input->post('tmp_id');
		$filepath = $this->input->post('filepath');
		$filename = $this->input->post('filename');
		$jumlah_tmp_image = count($tmp_id);
		$image_label = $this->input->post('image_label');

			//Tab 4
		$warna = $this->input->post('warna');
		$qty = $this->input->post('qty');
		$lokasi = $this->input->post('lokasi');
		$ukuran = $this->input->post('ukuran');
		$stok_min = $this->input->post('stok_min');
		$jumlah_warna = count($warna);


			// Start first step (insert product tb)
			$this->db->insert('tb_produk_master', array(
				// Product general information
				'brand_ID' 			=> $brand_ID,
				'tax_ID' 	 		=> $tax_ID,
				'kode_produk' 	 	=> $kode_produk,
				'nama_produk' 		=> $nama_produk,
				'slug' 				=> $slug,
				'deskripsi_pendek' 	=> $deskripsi_pendek,
				'deskripsi_produk' 	=> $deskripsi_produk,
				'material' 			=> $material,
				'start_avail_date' 	=> $start_avail_date,
				'end_avail_date' 	=> $end_avail_date,
				'sku' 	 			=> $sku,
				// Product SEO
				'meta_title' 		=> $meta_title,
				'meta_keyword' 		=> $meta_keyword,
				'meta_description' 	=> $meta_description,
				//'foto_produk' 	 	=> $filepath, // Need to be updated later
				// Product price
				'harga_modal' 		=> $harga_modal,
				'margin' 			=> $margin,
				'harga_produk' 	 	=> $harga_jual,
				// Product weight
				'berat_produk' 	 	=> $berat_produk,
				'satuan_berat' 		=> $satuan_berat,
				// Product discount and cashback
				'discount' 			=> $discount,
				'discount_type' 	=> $discount_type,
				'cashback' 	 		=> $cashback,
				'cashback_type' 	=> $cashback_type,
				// Added information
				'creation_date' 	=> date('Y-m-d'),
				'creator_ID' 		=> $this->operator_id,
				'status' 	 		=> $status
			));
			// End query insert to product tb

			$product_ID = $this->db->insert_id();	

			// Start second step (insert product category)
			for($i=0; $i<$jumlah_kategori; $i++) {

				$this->db->insert('tb_produk_kategori', array(
					'produk_ID' 	=> $product_ID,
					'kategori_ID' 	=> $kategori[$i]
				));

			}

			// Start Third step (Qty Product)
			$no_pergerakan = penomoran('MA');

			for($i=0; $i<$jumlah_warna; $i++) {

				// Insert into tb pergerakan
				$this->db->insert('tb_produk_pergerakan', array(
					'produk_ID' 	=> $product_ID,
					'user_ID' 		=> $this->operator_id,
					'customer_ID' 	=> 0,
					'lokasi_ID' 	=> $lokasi[$i],
					'tujuan_ID' 	=> '-',
					// Harga dan reward
					'harga_modal' 	=> $harga_modal,
					'margin' 		=> $margin,
					'harga_jual' 	=> $harga_jual,
					'discount' 		=> $discount,
					'discount_type' => $discount_type,
					'cashback' 		=> $cashback,
					'cashback_type' => $cashback_type,
					// Product information
					'tax_ID' 		=> $tax_ID,
					'warna_ID' 		=> $warna[$i],
					'ukuran_ID' 	=> $ukuran[$i],
					'no_pg' 		=> $no_pergerakan,
					'jenis_pg' 		=> 'MA',
					'qty_awal' 		=> 0,
					'qty_pergerakan'=> $qty[$i],
					'qty_akhir' 	=> $qty[$i],
					'date' 			=> date('Y-m-d'),
					'keterangan' 	=> 'Stok Awal Produk'
				));

				// Insert into tb produk warna
				$this->db->insert('tb_produk_warna', array(
					'produk_ID' 	=> $product_ID,
					'warna_produk' 	=> $warna[$i]
				));

				// Insert into tb produk ukuran
				$this->db->insert('tb_produk_ukuran', array(
					'produk_ID' => $product_ID,
					'warna' 	=> $warna[$i],
					'ukuran' 	=> $ukuran[$i]
				));

				// Insert into tb produk stok
				$this->db->insert('tb_produk_stok', array(
					'produk_ID' 	=> $product_ID,
					'stok_produk' 	=> $qty[$i],
					'stok_minimum' 	=> $stok_min[$i],
					'lokasi' 		=> $lokasi[$i],
					'warna' 		=> $warna[$i],
					'ukuran' 		=> $ukuran[$i]
				));

				// Update quota stok gudang
				$kuota = get_kuota($lokasi[$i]);
				$this->db->update('tb_produk_lokasi', array(
					'total_item' 	=> $kuota['total_item'] + $qty[$i],
					'kuota_tersisa' => $kuota['kuota_tersisa'] - $qty[$i]
				), array('kode_lokasi'   	=> $lokasi[$i]));

				// Insert into tb produk harga
				$this->db->insert('tb_produk_harga', array(
					'produk_ID' 				=> $product_ID,
					'no_pg' 					=> $no_pergerakan,
					'harga_modal_sebelumnya' 	=> $harga_modal,
					'harga_modal_sekarang' 		=> $harga_modal,
					'margin' 					=> $margin,
					'harga_jual_sebelumnya' 	=> $harga_jual,
					'harga_jual_sekarang' 		=> $harga_jual,
					'mark' 						=> 0,
					'mark_type'					=> 0,
					'harga_setelah_mark'		=> $harga_jual
				));

				// Insert into tb produk perawatan
				$this->db->insert('tb_produk_perawatan', array(
					'produk_ID'		=> $product_ID,
					'perawatan_ID' 	=> 8
				));
			}

			// Start Fourth Step Moving the images
			for($i=0; $i<$jumlah_tmp_image; $i++) {
				// Insert into tb produk images
				$this->db->insert('tb_produk_gambar', array(
					'produk_ID'		=> $product_ID,
					'label' 		=> $image_label[$i],
					'filepath' 		=> $filepath[$i],
					'filename' 		=> $filename[$i],
					'creator_id' 	=> $this->operator_id
				));
			}

			// Add Log
			$this->log_model->add_log($this->operator, 'Add New Product', 'Success, Product has been added.');
				
			// Set Notification to page
			$this->session->set_flashdata('success', 'Success, Product has been added.');
				
			// Redirect 
			redirect($_SERVER['HTTP_REFERER']);	

		} else {
			show_404();
		}
	}
















	
}	
