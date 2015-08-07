<?php
if ( !defined('BASEPATH') ) exit('No direct script access allowed!');

class Model_message extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
		$this->load->database();    //Load database.
	}
    
    //Get all user data from database.
	public function getMessage()
	{
        //Prepare the query.
        $this->db->select('*');
        $this->db->from('tbl_contact');
        $this->db->order_by('status', 'ASC');
        $query = $this->db->get();
        if($query->num_rows() > 0)
        {
            $result = $query->result();
            return $result;
        } else {
            return array();
        }
	}
    
    //Get message data from database.
    public function getMessageData($id)
    {
        //change message status.
        $this->changeStatus($id);
        
        //Prepare the query.
        $this->db->where('id', $id);
        $query = $this->db->get('tbl_contact');
        if($query->num_rows() > 0)
        {
            $result = $query->row();
            return $result;
        } else {
            return array();
        }
    }
    
    //change message status.
    public function changeStatus($id)
    {
        //Prepare the query.
        $data = array('status'=>1);
        $this->db->where('id', $id);
        $result = $this->db->update('tbl_contact', $data);
        return $result;
    }
    
    //Delete user data from database.
    public function deleteRecords($id)
    {
        $this->db->where('id', $id);
        $result = $this->db->delete('tbl_contact');
        return $result;
    }
}
/* End of file model_message.php */
/* Location: .../model/admin/model_message.php */
/* Omit PHP closing tags to help avoid accidental output. */