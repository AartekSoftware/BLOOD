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
        $this->db->where('user_type', 'admin');
        
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
    
    //Get all user count from database.
    public function countUsers()
    {
        //Prepare the query.
        $this->db->where('user_type', 'user');
        $this->db->from('tbl_registration');
        $result = $this->db->count_all_results();
        return $result;
    }
    
    //Get all blood bank fromd database.
    public function countBloodbank()
    {
        return $this->db->count_all_results('tbl_bloodbank');
    }
    
    //Get all blood request from database.
    public function countRequest()
    {
        return $this->db->count_all_results('tbl_request');
    }
    
    //Get all contact message from database.
    public function countMessage()
    {
        return $this->db->count_all_results('tbl_contact');
    }
    
    //Change admin password.
    public function changePassword()
    {
        $reuslt = 0;
        $old_pass = $this->security->xss_clean($this->input->post('old_pass'));
        $pass1 = $this->security->xss_clean($this->input->post('pass1'));
        $pass2 = $this->security->xss_clean($this->input->post('pass2'));
        
        if($pass1 == $pass2)
        {
            // To password protect mysql injection.
            $old_pass = stripslashes($old_pass);
            $old_pass = mysql_real_escape_string($old_pass);
            $old_pass = base64_encode($old_pass);
            $old_pass = md5(serialize($old_pass));
            
            // To password protect mysql injection.
            $new_pass = stripslashes($pass1);
            $new_pass = mysql_real_escape_string($new_pass);
            $new_pass = base64_encode($new_pass);
            $new_pass = md5(serialize($new_pass));
            
            //Prepare the query.
            $data = array('password' => $new_pass);
            $this->db->where('id', $this->session->userdata('admin_id'));
            $this->db->where('password', $old_pass);
            $reuslt = $this->db->update('tbl_registration', $data);
            return $reuslt;
        } else {
            return $reuslt;
        }
    }
    
    //Get blood group from database.
    public function getBloodGroup()
    {
        //prepare the query.
        $query = $this->db->get('tbl_blood_group');
        $result = $query->result();
        return $result;
    }    
    
    //Get admin profile from database.
    public function getProfileData()
    {
        //Prepare the query.
        $this->db->where('id', $this->session->userdata('admin_id'));
        $query = $this->db->get('tbl_registration');
        if($query->num_rows() > 0)
        {
            $reuslt = $query->row();
            return $reuslt;
        } else {
            return array();
        }
    }
    
    //update admin profile.
    public function updateProfile()
    {
        //Grab user input.
        $name = $this->security->xss_clean($this->input->post('name'));
		$username = $this->security->xss_clean($this->input->post('username'));		
		$dobd = $this->security->xss_clean($this->input->post('day'));
		$dobm = $this->security->xss_clean($this->input->post('month'));
		$doby = $this->security->xss_clean($this->input->post('year'));
		$gender = $this->security->xss_clean($this->input->post('gender'));
		$blood_group = $this->security->xss_clean($this->input->post('blood_group'));
		$weight = $this->security->xss_clean($this->input->post('weight'));
		$mobile = $this->security->xss_clean($this->input->post('mobile'));
		$email = $this->security->xss_clean($this->input->post('email'));
		$residence = $this->security->xss_clean($this->input->post('residence'));
		$office = $this->security->xss_clean($this->input->post('Office'));
        
        //Date of birth
		$dob = $doby.'-'.$dobm.'-'.$dobd;
        
        //Set data values
		$data = array(
			'name' => $name,
			'user_name' => $username,			
			'dob' => $dob,
			'gender' => $gender,
			'blood_group' => $blood_group,
			'weight' => $weight,
			'mobile' => $mobile,
			'email' => $email,
			'residence' => $residence,
			'office' => $office
		);
        $this->db->where('id', $this->session->userdata('admin_id'));
		$update = $this->db->update('tbl_registration', $data);
		return $update;
    }
}
/* End of file model_admin.php */
/* Location: .../model/admin/model_admin.php */
/* Omit PHP closing tags to help avoid accidental output. */