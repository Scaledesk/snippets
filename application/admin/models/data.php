<?php
/**
* 
*/
class Data extends CI_Model
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->database();
	}
	public function get_user($value=null)
	{	
		if ($value==null) {
			return $this->db->query('Select id, fname, lname, email, status from user')->result();
		}
		return $this->db->where('id',$value)->get('user')->result();
	}
	public function get_no_users()
	{	
			  $this->db->like('data','logged_user');
			 return $this->db->get('ci_sessions')->num_rows();
	}
}