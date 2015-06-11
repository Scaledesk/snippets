<?php

class Mo_Admin_Manage extends CI_Model {

	public function __construct()
        {
                // Call the CI_Model constructor
                parent::__construct();
        }
	
	public function validate() {
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$query = $this->db->get_where('admin', array('email' => $username, 'password' => $password));
		if($query->num_rows() > 0)
		{
			$row = $query->row();
			$data['admin_email'] = $row->email;
			$this->session->set_userdata($data);
            return true;
		}
		else
		{
		return false;
		}
	}
	public function update_password() {
		$username = $this->session->userdata('admin_email');
		$current_password = $this->input->post('current_password');
		$query = $this->db->get_where('admin', array('email' => $username, 'password' => $current_password));
		
		
		if($query->num_rows() > 0)
		{
			$this->db->where(array('email'=>$username,-'password'=>$current_password));
			$this->db->update('admin', array('password' => $this->input->post('new_password')));
			if($this->db->affected_rows()==1){
			return true;
			}
			return false;
		}
		else
		{
			return false;
		}
	}
}