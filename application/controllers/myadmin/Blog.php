<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Blog extends CI_Controller {
	function __construct(){
		parent::__construct();
		// Check restriction
		if($this->session->userdata('admin_logged_in')==FALSE) {
			$this->session->set_userdata('goto', "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]");
			redirect(admin_url().'login');	
		}
		// Load model
		$this->load->model('blog_model');
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

	// Function url for post detail
	function post_detail($post_id)
	{
		$this->data['title'] 	= 'Post Detail';
		$this->data['css'] 		= 'body/admin/css/form_style_default';
		$this->data['js'] 		= 'body/admin/js/form_style_default';
		$this->data['category'] = $this->blog_model->get_all_active_category();
		$this->data['tag'] 		= $this->blog_model->get_all_active_tag();
		$this->data['post'] 	= $post = $this->blog_model->get_post_by_id($post_id);
		$this->data['post_tag']	= $this->blog_model->get_tag_by_post_id($post_id);
		$this->data['content'] 	= 'content/admin/blog/post_detail';
		$this->load->view('body/admin/style_1', $this->data);
	}

	// Function url for add new post
	function add_new()
	{
		$this->data['title'] 	= 'Add New Post';
		$this->data['css'] 		= 'body/admin/css/form_style_default';
		$this->data['js'] 		= 'body/admin/js/form_style_default';
		$this->data['category'] = $this->blog_model->get_all_active_category();
		$this->data['tag'] 		= $this->blog_model->get_all_active_tag();
		$this->data['content'] 	= 'content/admin/blog/add_new';
		$this->load->view('body/admin/style_1', $this->data);
	}

	// Function url for add new post category
	function add_new_category()
	{
		$this->data['title'] 	= 'Add New Post Category';
		$this->data['css'] 		= 'body/admin/css/form_style_default';
		$this->data['js'] 		= 'body/admin/js/form_style_default';
		$this->data['content'] 	= 'content/admin/blog/add_category';
		$this->load->view('body/admin/style_1', $this->data);
	}

	// Function url for add new post tag
	function add_new_tag()
	{
		$this->data['title'] 	= 'Add New Post Tag';
		$this->data['css'] 		= 'body/admin/css/form_style_default';
		$this->data['js'] 		= 'body/admin/js/form_style_default';
		$this->data['content'] 	= 'content/admin/blog/add_tag';
		$this->load->view('body/admin/style_1', $this->data);
	}

	// Function url category data
	function category_data()
	{
		$this->data['title'] 	= 'Category Data';
		$this->data['category']	= $this->blog_model->get_all_category();
		$this->data['css'] 		= 'body/admin/css/form_style_default';
		$this->data['js'] 		= 'body/admin/js/form_style_default';
		$this->data['content'] 	= 'content/admin/blog/category_data';
		$this->load->view('body/admin/style_1', $this->data);
	}

	// Function url edit category data
	function edit_category_data($category_id)
	{
		$this->data['title'] 	= 'Edit Category Data';
		$this->data['category']	= $this->blog_model->get_category_by_id($category_id);
		$this->data['css'] 		= 'body/admin/css/form_style_default';
		$this->data['js'] 		= 'body/admin/js/form_style_default';
		$this->data['content'] 	= 'content/admin/blog/edit_category';
		$this->load->view('body/admin/style_1', $this->data);
	}

	// Function url tag data
	function tag_data()
	{
		$this->data['title'] 	= 'Tag Data';
		$this->data['tag']		= $this->blog_model->get_all_tag();
		$this->data['css'] 		= 'body/admin/css/form_style_default';
		$this->data['js'] 		= 'body/admin/js/form_style_default';
		$this->data['content'] 	= 'content/admin/blog/tag_data';
		$this->load->view('body/admin/style_1', $this->data);
	}

	// Function url edit category data
	function edit_tag_data($tag_id)
	{
		$this->data['title'] 	= 'Edit Tag Data';
		$this->data['tag']	= $this->blog_model->get_tag_by_id($tag_id);
		$this->data['css'] 		= 'body/admin/css/form_style_default';
		$this->data['js'] 		= 'body/admin/js/form_style_default';
		$this->data['content'] 	= 'content/admin/blog/edit_tag';
		$this->load->view('body/admin/style_1', $this->data);
	}

	// Function url comments data
	function comments()
	{
		$this->data['title'] 	= 'Comments Data';
		$this->data['comments']		= $this->blog_model->get_all_comments();
		$this->data['css'] 		= 'body/admin/css/form_style_default';
		$this->data['js'] 		= 'body/admin/js/form_style_default';
		$this->data['content'] 	= 'content/admin/blog/comments';
		$this->load->view('body/admin/style_1', $this->data);
	}

}
