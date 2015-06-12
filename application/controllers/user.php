<?php
/**
* User class for user related functions
*/
class User extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->output->enable_profiler(TRUE);
	}
	public function register()
	{
		$data['title']="Register";
		$this->load->view('register',$data);
		
	}
	public function do_register()
	{
		$this->output->enable_profiler(TRUE);
		$this->load->model('Mo_User');
		$result=$this->Mo_User->register();
		if($result==true){
			#success
			redirect(base_url(),'refresh');
		}else{
			#fail
			redirect('user/register','refresh');
		}
	}
	public function login()
	{
		$data['title']="Login";
		$this->load->view('login',$data);
		
	}
	public function do_login()
	{
		$this->load->model('Mo_User');
		$result=$this->Mo_User->login();
		if($result==true){
			redirect(base_url(),"refresh");
		}else{
			redirect(base_url()."user/login","refresh");
		}
	}
	public function ch_pwd()
	{
		$data['title']="Change Password";
		$this->load->view('ch_pwd',$data);
		
	}
	public function do_ch_pwd()
	{
		$this->load->model('Mo_User');
		$result=$this->Mo_User->ch_pwd();
		if($result==true){
			redirect(base_url(),'refresh');
		}else{
			redirect(base_url()."user/ch_pwd",'refresh');
		}
	}
	public function account()
	{
		$this->load->model('Mo_User');
		$this->Mo_User->check_logged()?"":redirect('User/login/','refresh');
		$data=array('title'=>"My Account",'fname'=>$this->session->userdata['fname']);
		$this->load->view('user_acc',$data);
	}
	public function logout()
	{
		$this->session->sess_destroy();
		redirect(base_url(),'refresh');
	}
}