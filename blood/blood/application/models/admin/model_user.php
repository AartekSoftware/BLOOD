<?php
if ( !defined('BASEPATH') ) exit('No direct script access allowed!');

class Model_user extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
		$this->load->database();    //Load database.
	}
    
    //Get all user data from database.
	public function userList()
	{
        //Prepare the query.
        $this->db->select('tbl_registration.*, tbl_states.state as state_name, tbl_cities.city as city_name, tbl_blood_group.blood_group as bg');
        $this->db->from('tbl_registration');
        $this->db->join('tbl_states', 'tbl_registration.state = tbl_states.state_id', 'INNER');
        $this->db->join('tbl_cities', 'tbl_registration.city = tbl_cities.city_id', 'INNER');
        $this->db->join('tbl_blood_group', 'tbl_registration.blood_group = tbl_blood_group.id', 'INNER');
        $this->db->where('tbl_registration.user_type', 'user');
        $query = $this->db->get();
        if($query->num_rows() > 0)
        {
            $result = $query->result();
            return $result;
        } else {
            return array();
        }
	}
}
/* End of file model_user.php */
/* Location: .../model/admin/model_user.php */
/* Omit PHP closing tags to help avoid accidental output. */