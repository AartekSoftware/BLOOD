<?php
if( !defined('BASEPATH') ) exit('No direct script access allowed!');

class Message extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');                     //Load url helper library.
        $this->load->model('admin/model_message');    //Load user model.
    }
    
    //Load all bloolbank list from database.
    public function index()
    {
        //Check admin session set or not.
        $this->checkSession();
        
        //set page variable.
        $data['title'] = 'Admin-Blood Bank';
        
        //Get blood bank data from database.
        $data['message'] = $this->model_message->getMessage();
        
        //Load page view.
        $this->load->view('admin/includes/header', $data);
        $this->load->view('admin/message');
        $this->load->view('admin/includes/footer');
    }
    
    //Delete user blood bank records from database.
    public function delete($id)
    {
        //Check session set or not.
        $this->checkSession();
        
        //Get id from url.        
        $result = $this->model_message->deleteRecords($id);
        if($result == 1)
        {
            $this->index();
        }
    }
    
    //Read messages.
    public function read($id)
    {
        //Check session set or not.
        $this->checkSession();
        
        //Set page variable.
        $data['title'] = 'Admin-Read message';
        $data['message'] = $this->model_message->getMessageData($id);
        
        //Load page view.
        $this->load->view('admin/includes/header', $data);
        $this->load->view('admin/message_read');
        $this->load->view('admin/includes/footer');
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
/* End of file message.php */
/* Location : .../application/controller/admin/message.php */
/* Omit PHP closing tags to help avoid accidental output. */
