<?php
if ( !defined('BASEPATH') ) exit('No direct script access allowed!');

class Model_admin extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
		$this->load->database();    //Load database.
	}
    
    //Validate admin login data.
	public function validate()
	{
        //Grab user input.
        $loginId = $this->security->xss_clean($this->input->post('loginid'));
        $password = $this->security->xss_clean($this->input->post('password'));
        
        //To protect password from mysql injection.
        $password = stripslashes($password);
        $password = mysql_real_escape_string($password);
        $password = base64_encode($password);
        $password = md5(serialize($password));
        
        //Prepare the query.
        $this->db->where('user_name', $loginId);
        $this->db->where('password', $password);
        
        //Run the query.
        $query = $this->db->get('tbl_registration');
        
        //Let's check if the get any result.
        if($query->num_rows() == 1)
        {
            //If there is a admin, then create session data.
            $row = $query->row();            
            $data = array(
                'admin_id' => $row->id,
                'admin_name' => $row->name,
                'admin_email' => $row->email,
                'admin_status' => $row->status
            );
            
            $this->session->set_userdata($data);
            return true;
        }
        
        //If the previous process did not validate then return false.
        return false;        
	}
}
/* End of file model_admin.php */
/* Location: .../model/admin/model_admin.php */
/* Omit PHP closing tags to help avoid accidental output. */