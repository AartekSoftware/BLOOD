<?php
if ( !defined('BASEPATH') ) exit('No direct script access allowed!');

class Model_bloodbank extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
		$this->load->database();    //Load database.
	}
    
    //Get all user data from database.
	public function bloodBankList()
	{
        //Prepare the query.
        $this->db->select('id, name, contact, type, tbl_states.state, tbl_cities.city, date_time, status');
        $this->db->from('tbl_bloodbank');
        $this->db->join('tbl_states', 'tbl_bloodbank.state = tbl_states.state_id', 'INNER');
        $this->db->join('tbl_cities', 'tbl_bloodbank.city = tbl_cities.city_id', 'INNER');
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
        $result = $this->db->delete('tbl_bloodbank');
        return $result;
    }
}
/* End of file model_bloodbank.php */
/* Location: .../model/admin/model_bloodbank.php */
/* Omit PHP closing tags to help avoid accidental output. */