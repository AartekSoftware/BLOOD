<?php
if ( !defined('BASEPATH') ) exit('No direct script access allowed!');

class Request extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');                 //Load url helper.
        $this->load->model('admin/model_request');  //Load request model.
    }
    
    //Load all blood request from database.
    public function index()
    {
        //Check admin session set or not.
        $this->checkSession();
        
        //Set page variables.
        $data['title'] = 'User Request for Blood';
        $data['userList'] = $this->model_request->userList();        
        
        //Load page view.
        $this->load->view('admin/includes/header', $data);
        $this->load->view('admin/user_request');
        $this->load->view('admin/includes/footer');
    }
    
    //Delete user blood request records from database.
    public function delete($id)
    {
        //Check session set or not.
        $this->checkSession();
        
        //Get id from url.        
        $result = $this->model_request->deleteRecords($id);
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
/* End of file request.php */
/* Location:../application/controllers/admin/request.php */
/* Omit PHP closing tags to help avoid accidental output. */