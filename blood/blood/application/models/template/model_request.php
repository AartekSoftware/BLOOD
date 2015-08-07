<?php
if ( !defined('BASEPATH') ) exit('No direct script access allowed!');

class Model_request extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
		$this->load->database();    //Load database.
	}
    
    //Insert data into tbl_registration in database.
	public function requestRegistration()
	{
		//Get data from registration form
		$fname = $this->security->xss_clean($this->input->post('fname'));
        $lname = $this->security->xss_clean($this->input->post('lname'));
        $fathername = $this->security->xss_clean($this->input->post('fathername'));
        $mothername = $this->security->xss_clean($this->input->post('mothername'));
        $blood_group = $this->security->xss_clean($this->input->post('blood_group'));
        $day = $this->security->xss_clean($this->input->post('day'));
        $month = $this->security->xss_clean($this->input->post('month'));
        $year = $this->security->xss_clean($this->input->post('year'));
        $gender = $this->security->xss_clean($this->input->post('gender'));
        $state = $this->security->xss_clean($this->input->post('state'));
		$city = $this->security->xss_clean($this->input->post('city'));
		$contact = $this->security->xss_clean($this->input->post('contact'));
        $address = $this->security->xss_clean($this->input->post('address'));
        $message = $this->security->xss_clean($this->input->post('message'));
        
        //Date of birth.
        $dob = $year.'-'.$month.'-'.$day;
        
		//Set data values
		$data = array(
			'first_name' => $fname,
            'last_name' => $lname,
            'father_name' => $fathername,
            'mother_name' => $mothername,
            'dob' => $dob,
            'blood_group' => $blood_group,
            'gender' => $gender,
            'address' => $address,
            'state_id' => $state,
            'city_id' => $city,
            'contact' => $contact,
            'message' => $message,
		);        
		$insert = $this->db->insert('tbl_request', $data);
		return $insert;
	}
}