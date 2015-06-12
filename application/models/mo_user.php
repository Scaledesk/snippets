<?php 
/**
* Model User class deals with User Table.
*/
class Mo_User extends CI_Model
{
	function __construct()
	{
		$this->load->database();
		$this->load->helper('security');
	}
	public function register()
	{
		#code to register
		if($this->db->insert('user',array('fname'=>$this->input->post('fname'),'lname'=>$this->input->post('lname'),'email'=>$this->input->post('email'),'pwd'=>do_hash($this->input->post('pwd'),'md5'))))
		{
			return true;
		}return false;
	}
	public function login()
	{
		$q=$this->db->get_where('user',array('email'=>$email=$this->input->post('email'),'pwd'=>do_hash($this->input->post('pwd'),'md5')));
		if($q->num_rows()==1)
		{
				$this->session->set_userdata('logged_user',$q->row()->id);
				$this->session->set_userdata('fname',$q->row()->fname);
			return true;
		}return false;
	}
	public function ch_pwd()
	{if($this->db->get_where('user', array('id' => $this->session->userdata('logged_user'), 'pwd' => $cur_pwd =do_hash($this->input->post('cur_pwd'),'md5')))->num_rows()==1)
		{if($this->db->where(array('email'=>$this->input->post('email'),'pwd'=>$cur_pwd))->update('user', array('pwd' => do_hash($this->input->post('new_pwd'),'md5'))))
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