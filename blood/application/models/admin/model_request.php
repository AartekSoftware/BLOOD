<?php
if ( !defined('BASEPATH') ) exit('No direct script access allowed!');

class Model_request extends CI_Model
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
        $this->db->select('tbl_request.*, tbl_states.state as state_name, tbl_cities.city as city_name, tbl_blood_group.blood_group as bg');
        $this->db->from('tbl_request');
        $this->db->join('tbl_states', 'tbl_request.state_id = tbl_states.state_id', 'INNER');
        $this->db->join('tbl_cities', 'tbl_request.city_id = tbl_cities.city_id', 'INNER');
        $this->db->join('tbl_blood_group', 'tbl_request.blood_group = tbl_blood_group.id', 'INNER');
        $this->db->order_by('id', 'desc');
        $query = $this->db->get();
        if($query->num_rows() > 0)
        {
            $result = $query->result();
            return $result;
        } else {
            return array();
        }
	}
    
    //Delete user data from database.
    public function deleteRecords($id)
    {
        $this->db->where('id', $id);
        $result = $this->db->delete('tbl_request');
        return $result;
    }
}
/* End of file model_request.php */
/* Location: .../model/admin/model_request.php */
/* Omit PHP closing tags to help avoid accidental output. */