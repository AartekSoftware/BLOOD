<?php
if ( !defined('BASEPATH') ) exit('No direct script access allowed!');

class Model_search extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
		$this->load->database();    //Load database.
	}
    
    //Get search criteria from database.
    public function searchCriteria()    
    {        
        //Get value from form.
        $state = $this->input->post('state');
        $city = $this->input->post('city');
        $bGroup = $this->input->post('group');
        
        //Run the query for get state and city.
        $query1 = $this->db->query("select tbl_states.state_id,tbl_states.state, tbl_cities.city_id, tbl_cities.city from tbl_states join tbl_cities on tbl_states.state_id = tbl_cities.state_id 
where tbl_states.state_id=".$state." and tbl_cities.city_id=".$city);
        $result1 = $query1->row();
        
        //Run the query fro get blood group.
        $this->db->select('*');
        $this->db->where('id', $bGroup);
        $query2 = $this->db->get('tbl_blood_group');
        $result2 = $query2->row();
        return array('stateCity' => $result1, 'bloodGroup' => $result2);
    }
	
	//Get all state list from tbl_states.
    public function searchResult()
    {
        //Get value from form.
        $state = $this->input->post('state');
        $city = $this->input->post('city');
        $bGroup = $this->input->post('group');
        
        //Run query.
        $this->db->where('state', $state);
        $this->db->where('city', $city);
        $this->db->where('blood_group', $bGroup);
        $query = $this->db->get('tbl_registration');
        $result = $query->result();
        return $result;
    }
}
/* End of file model_search.php */
/* Omit PHP closing tags to help avoid accidental output */