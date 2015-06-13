<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_Manage extends CI_Controller {

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
			
			$this->load->model('Mo_Admin_Manage');
			$result = $this->Mo_Admin_Manage->validate();
		if($result === TRUE)
		{ 
		redirect('admin_manage/admin_dashboard', 'refresh');
		} else {
			redirect('admin_manage/admin_login', 'refresh');
		}
		}
	public function admin_dashboard()
	{
		$data['title']="Dashboard";
		$data['users']=$this->get_users();
		$data['loggedin_users']=$this->get_no_users();
		$this->load->view('admin/dashboard',$data);
	}	
	
	public function session_destroy()
	{
		$this->session->sess_destroy();
		redirect('admin_manage/admin_login','refresh');
	}
	public function admin_change_password()
	{
		$data['title']= "Change Password";
		$this->load->view('change_password',$data);
	}
	
	public function admin_update_password()
	{
	$this->load->model('Mo_Admin_Manage');
	if($result=$this->Mo_Admin_Manage->update_password())
	{
	redirect('admin_manage/session_destroy','refresh');
	}
	redirect('admin_manage/admin_change_password','refresh');
	}
	public function get_users($value=null)
	{
		$this->load->Model('Data');
		return $this->Data->get_user($value);
	}
	public function get_no_users()
	{
		$this->load->Model('Data');
		return $this->Data->get_no_users();
	}
}
