<?php
if ( !defined('BASEPATH') ) exit('No direct script access allowed!');

class Model_bloodbank extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
		$this->load->database();    //Load database.
	}
    
    //Insert data into tbl_registration in database.
	public function bloodBankRegistration()
	{
		//Get data from registration form
		$name = $this->security->xss_clean($this->input->post('name'));
		$contact = $this->security->xss_clean($this->input->post('contact'));
		$type = $this->security->xss_clean($this->input->post('type'));
		$state = $this->security->xss_clean($this->input->post('state'));
		$city = $this->security->xss_clean($this->input->post('city'));
        
		//Set data values
		$data = array(
			'name' => $name,
			'contact' => $contact,
            'type' => $type,
			'state' => $state,
			'city' => $city,
		);
		$insert = $this->db->insert('tbl_bloodbank', $data);
		return $insert;
	}
}