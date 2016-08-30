<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Logout extends CI_Controller{
	function __construct(){

		parent::__construct();		

	}

	function index(){		
		//clear all session
		$this->session->sess_destroy();
		redirect('home');
	}

}

