<?php

class Admin_login extends CI_Model {

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
}