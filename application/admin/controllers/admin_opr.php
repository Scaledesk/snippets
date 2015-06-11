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
}
