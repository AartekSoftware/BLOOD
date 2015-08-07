<?php
if ( !defined('BASEPATH') ) exit('No direct script access allowed!');

class Model_registration extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
		$this->load->database();    //Load database.
	}
    
    //Insert data into tbl_registration in database.
	public function donorRegistration()
	{
		//Get data from registration form
		$name = $this->security->xss_clean($this->input->post('name'));
		$username = $this->security->xss_clean($this->input->post('username'));
		$pass1 = $this->security->xss_clean($this->input->post('password'));
		$pass2 = $this->security->xss_clean($this->input->post('cofirm_pass'));
		$dobd = $this->security->xss_clean($this->input->post('day'));
		$dobm = $this->security->xss_clean($this->input->post('month'));
		$doby = $this->security->xss_clean($this->input->post('year'));
		$gender = $this->security->xss_clean($this->input->post('gender'));
		$blood_group = $this->security->xss_clean($this->input->post('blood_group'));
		$weight = $this->security->xss_clean($this->input->post('weight'));
		$mobile = $this->security->xss_clean($this->input->post('mobile'));
		$email = $this->security->xss_clean($this->input->post('email'));
		$residence = $this->security->xss_clean($this->input->post('residence'));
		$office = $this->security->xss_clean($this->input->post('office'));
		$lastd = $this->security->xss_clean($this->input->post('dday'));
		$lastm = $this->security->xss_clean($this->input->post('dmonth'));
		$lasty = $this->security->xss_clean($this->input->post('dyear'));
		$sms = $this->security->xss_clean($this->input->post('sms'));
		$state = $this->security->xss_clean($this->input->post('state'));
		$city = $this->security->xss_clean($this->input->post('city'));
		$how_often = $this->security->xss_clean($this->input->post('how_often'));
		$suffered = $this->security->xss_clean($this->input->post('suffered'));		
		
		//Date of birth
		$dob = $doby.'-'.$dobm.'-'.$dobd;
		//Last date of donation.
		$last_donation = $lasty.'-'.$lastm.'-'.$lastd;
		//Suffered.
        $suff = '';
        if(!empty($suffered))
        {
            foreach($suffered as $key => $values)
            {
                $suff .= $values.',';
            }
            $suff = substr($suff, 0, strlen($suff)-1);
        }
        
        // To password protect mysql injection.
        $password = stripslashes($pass1);
        $password = mysql_real_escape_string($password);
        $password = base64_encode($password);
        $password = md5(serialize($password));
		
		//Set data values
		$data = array(
			'name' => $name,
			'user_name' => $username,
			'password' => $password,
			'dob' => $dob,
			'gender' => $gender,
			'blood_group' => $blood_group,
			'weight' => $weight,
			'mobile' => $mobile,
			'email' => $email,
			'residence' => $residence,
			'office' => $office,
			'last_donation' => $last_donation,
			'sms_alert' => $sms,
			'state' => $state,
			'city' => $city,
			'how_offten' => $how_often,
			'suffered' => $suff,
		);
		$insert = $this->db->insert('tbl_registration', $data);
		return $insert;
	}
}