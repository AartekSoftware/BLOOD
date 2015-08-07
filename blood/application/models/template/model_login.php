<?php
if ( !defined('BASEPATH') ) exit('No direct script access allowed!');

class Model_login extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
		$this->load->database();    //Load database.
	}
	
	//Get all state list from tbl_states.
    public function validate()
    {
        //Grab user input.
        $login_id = $this->security->xss_clean($this->input->post('login'));
        $password = $this->security->xss_clean($this->input->post('password'));
        
        //To protect password from mysql injection.
        $password = stripslashes($password);
        $password = mysql_real_escape_string($password);
        $password = base64_encode($password);
        $password = md5(serialize($password));
        
        //Prepare the query.
        $this->db->where('user_name', $login_id);
        $this->db->where('password', $password);
        $this->db->where('user_type', 'user');
        
        //Run the query.
        $query = $this->db->get('tbl_registration');
        
        //Let's check if the get any result.
        if($query->num_rows() == 1)
        {
            //If there is user, then create session data.
            $row = $query->row();
            $data = array(
                'user_id' => $row->id,
                'user_name' => $row->name,
                'user_email' => $row->email,
                'user_status' => $row->status
            );
            
            $this->session->set_userdata($data);
            return true;
        }
        
        //If the previous session did not validate then return false
        return false;
    }
}
/* End of file model_login.php */
/* Location ../application/model/template/model_login.php */
/* Omit PHP closing tags to help avoid accidental output */