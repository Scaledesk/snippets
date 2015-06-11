<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jobshare extends CI_Controller {

	/**
	 *
	 */
	 public function __construct()
        {
                // Call the CI_Model constructor
                parent::__construct();
        }
	public function index()
	{
		$this->load->view('welcome_message');
	}
	public function admin_login()
	{
	$data['title']="Admin Login";
	$this->load->view('admin_login',$data);
	}
	public function admin_checklogin() {
			
			$this->load->model('Admin_login');
			$result = $this->Admin_login->validate();
		if($result === TRUE)
		{ 
		redirect('Jobshare/admin_dashboard', 'refresh');
		} else {
			redirect('Jobshare/admin_login', 'refresh');
		}
		}
	public function admin_dashboard()
	{
		$this->load->view('admin/dashboard');
	}	
	
	public function session_destroy()
	{
		$this->session->sess_destroy();
		redirect('Jobshare/admin_login','refresh');
	}	
}
