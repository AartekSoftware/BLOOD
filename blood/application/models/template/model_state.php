<?php
if ( !defined('BASEPATH') ) exit('No direct script access allowed!');

class Model_state extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
		$this->load->database();    //Load database.
	}
	
	//Get all state list from tbl_states.
    public function getState()
    {
        $query = $this->db->get('tbl_states');
        $result = $query->result();
        if($query->num_rows() > 0)
        {
            return $result;
        }
        return array();
    }
}
/* End of file model_state.php */
/* Omit PHP closing tags to help avoid accidental output */