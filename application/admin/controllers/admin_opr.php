<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * Controller class for Admin Operations
 */
	
class Admin_Opr extends CI_Controller {
 public function __construct()
        {
                // Call the CI_Model constructor
                parent::__construct();
        }
	public function index()
	{
		$this->load->view('welcome_message');
	}
	public function del($value=null)
	{
		# code...
		$this->load->Model('Mo_Admin_Opr');
		$this->Mo_Admin_Opr->del($value);
		redirect("admin_manage/admin_dashboard","refresh");
	}
	//function to activate or deactivate user profile
	public function ac_de_user($value=null,$status)
	{
		# code to do
		$this->load->Model('Mo_Admin_Opr');
		if ($this->Mo_Admin_Opr->ac_de_user($value,$status)>0) {
			$this->session->set_flashdata('f',array('class'=>'success','msg'=>'user account status successfully changed!'));
			redirect('admin_manage/admin_dashboard','refresh');
		}
		$this->session->set_flashdata('f',array('class'=>'error','msg'=>'Error in changing user account status! Try Again.'));
			redirect('admin_manage/admin_dashboard','refresh');
	}
}
