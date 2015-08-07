<?php
if ( !defined('BASEPATH') ) exit('No direct script access allowed!');

class Model_contact extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
		$this->load->database();    //Load database.
	}
    
    //Insert data into tbl_registration in database.
	public function insertData()
	{
		//Get data from registration form
		$name = $this->security->xss_clean($this->input->post('name'));
		$subject = $this->security->xss_clean($this->input->post('subject'));
		$email = $this->security->xss_clean($this->input->post('email'));
        $contact = $this->security->xss_clean($this->input->post('contact'));
		$message = $this->security->xss_clean($this->input->post('message'));
        
		//Set data values
		$data = array(
			 'name' => $name,
             'subject' => $subject,
             'email' => $email,
             'contact' => $contact,
             'message' => $message
		);
		$insert = $this->db->insert('tbl_contact', $data);
		return $insert;
	}
}
/* End of file model_conatct.php */
/* Location: ../application/model/template/model_conatct.php */
/* Omit PHP closing tags to help avoid accidental output */