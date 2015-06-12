<?php 
/**
* Model User class deals with User Table.
*/
class Mo_User extends CI_Model
{
	function __construct()
	{
		$this->load->database();
	}
	public function register()
	{
		#code to register
		if($this->db->insert('user',array('fname'=>$this->input->post('fname'),'lname'=>$this->input->post('lname'),'email'=>$this->input->post('email'),'pwd'=>$this->input->post('pwd')))){
			return true;
		}return false;
	}
	public function login()
	{
		$q=$this->db->get_where('user',array('email'=>$email=$this->input->post('email'),'pwd'=>$this->input->post('pwd')));
		if($q->num_rows()==1)
		{
				$this->session->set_userdata('logged_user',$q->row()->id);
				$this->session->set_userdata('fname',$q->row()->fname);
			return true;
		}return false;
	}
	public function ch_pwd()
	{if($this->db->get_where('user', array('id' => $this->session->userdata('logged_user'), 'pwd' => $cur_pwd =$this->input->post('cur_pwd')))->num_rows()==1)
		{if($this->db->where(array('email'=>$this->input->post('email'),'pwd'=>$cur_pwd))->update('user', array('pwd' => $this->input->post('new_pwd'))))
			{
				if($this->db->affected_rows()==1){
				return true;
				}return false;
			}return false;
		}
	}
	public function check_logged()
	{
		return $this->session->userdata('logged_user')?true:false;
	}
}