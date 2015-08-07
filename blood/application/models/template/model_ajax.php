<?php
if ( !defined('BASEPATH') ) exit('NO direct script access allowed!');

class Model_ajax extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();    //Load database.
    }
    
    //Get city list from tbl_city table.
    public function getCity($state_id)
    {
        $this->db->where('state_id', $state_id);
        $query = $this->db->get('tbl_cities');
        $result = $query->result();
        return $result;
    }
}
/* End of file model_ajax.php */
/* Location: ../application/models/template/model_ajax.php */
/* Omit PHP closing tags to help avoid accidental output. */