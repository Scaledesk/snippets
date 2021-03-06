<?php
/**
* Model Class for Admin Operations.
*/
class Mo_Admin_Opr extends CI_Model {

	public function __construct()
        {
                // Call the CI_Model constructor
                parent::__construct();
                $this->load->database();
        }
	public function del($value='null')
	{
		return $this->db->delete('user',array('id'=>$value));
	}
	// Model method to activate or deactivate user profile
	public function ac_de_user($value=null,$status)
	{
	 $this->db->where(array('id'=>$value))->update('user',array('status'=>$status=='active'?'inactive':'active'));
	 return $this->db->affected_rows();

	}
}