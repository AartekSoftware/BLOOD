<?php
if( !defined('BASEPATH') ) exit('No direct script access allowed!');

class Bloodbank extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');                     //Load url helper library.
        $this->load->model('admin/model_bloodbank');    //Load user model.
    }
    
    //Load all bloolbank list from database.
    public function index()
    {
        //Check admin session set or not.
        $this->checkSession();
        
        //set page variable.
        $data['title'] = 'Admin-Blood Bank';
        
        //Get blood bank data from database.
        $data['userList'] = $this->model_bloodbank->bloodBankList();
        
        //Load page view.
        $this->load->view('admin/includes/header', $data);
        $this->load->view('admin/bloodbank');
        $this->load->view('admin/includes/footer');
    }
    
    //Delete user blood bank records from database.
    public function delete($id)
    {
        //Check session set or not.
        $this->checkSession();
        
        //Get id from url.        
        $result = $this->model_bloodbank->deleteRecords($id);
        if($result == 1)
        {
            $this->index();
        }
    }
    
    //Check admin session valid or not.
    public function checkSession()
    {
        $session_id = $this->session->userdata('admin_id');
        if(empty($session_id))
        {
            redirect(site_url('admin'));
        }
        return true;
    }
}
/* End of file dashboard.php */
/* Location : .../application/controller/admin/dashboard.php */
/* Omit PHP closing tags to help avoid accidental output. */
