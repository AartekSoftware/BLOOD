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
    
    //Get data blood bank data from database.
    public function getBloodBank()
    {
        //Grab input from user.
        $state = $this->security->xss_clean($this->input->post('state'));
        $city = $this->security->xss_clean($this->input->post('city'));
        
        if(empty($state) && empty($city))
        {
            $this->db->select('name,contact,type,tbl_states.state,tbl_cities.city');
            $this->db->from('tbl_bloodbank');
            $this->db->join('tbl_states', 'tbl_bloodbank.state = tbl_states.state_id', 'INNER');
            $this->db->join('tbl_cities', 'tbl_bloodbank.city = tbl_cities.city_id', 'INNER');
            $this->db->where('status', '0');
            $query = $this->db->get();
            if($query->num_rows() > 0)
            {
                return $query->result();
            }
        } else {            
            $this->db->select('name,contact,type,tbl_states.state,tbl_cities.city');
            $this->db->from('tbl_bloodbank');
            $this->db->join('tbl_states', 'tbl_bloodbank.state = tbl_states.state_id', 'INNER');
            $this->db->join('tbl_cities', 'tbl_bloodbank.city = tbl_cities.city_id', 'INNER');
            $this->db->where('status', '0');
            $this->db->where('tbl_bloodbank.state', $state);
            $this->db->where('tbl_bloodbank.city', $city);
            $query = $this->db->get();
            if($query->num_rows() > 0)
            {
                return $query->result();
            }
        }
        return array();
    }
}