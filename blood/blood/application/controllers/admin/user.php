<?php
if( !defined('BASEPATH') ) exit('No direct script access allowed!');

class User extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');                 //Load url helper library.
        $this->load->model('admin/model_user');     //Load user model.
    }
    
    //Load admin dashboard views.
    public function view()
    {
        //Check admin session set or not.
        $this->checkSession();
        
        //set page variable.
        $data['title'] = 'Admin-User List';
        
        //Get user data from database.
        $data['userList'] = $this->model_user->userList();
        
        //Load page view.
        $this->load->view('admin/includes/header', $data);
        $this->load->view('admin/user_view');
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
/* End of file dashboard.php */
/* Location : .../application/controller/admin/dashboard.php */
/* Omit PHP closing tags to help avoid accidental output. */
