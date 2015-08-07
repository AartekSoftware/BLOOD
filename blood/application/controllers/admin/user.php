<?php
if( !defined('BASEPATH') ) exit('No direct script access allowed!');

class User extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');                 //Load url helper.
        $this->load->model('admin/model_user');     //Load user model.
        $this->load->library('form_validation');    //Load form validation library.
    }
    
    //Load all user list from database.
    public function index($data=Null)
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
    
    //Delete user records.
    public function delete($id)
    {
        //Check user session set or not.
        $this->checkSession();
        
        //Load page view.
        $result = $this->model_user->delete($id);
        if($result == 1)
        {
            $this->index();
        }
    }
    
    //Disable user status.
    public function disable($id)
    {
        //Check user session set or not.
        $this->checkSession();
        
        //Load page view.
        $result = $this->model_user->disable($id);
        if($result == 1)
        {
            $this->index();
        }
    }
    
    //Disable user status.
    public function enable($id)
    {
        //Check user session set or not.
        $this->checkSession();
        
        //Load page view.
        $result = $this->model_user->enable($id);
        if($result == 1)
        {
            $this->index();
        }
    }
    
    //Change user password.
    public function changepassword($id)
    {
        //Check user session set or not.
        $this->checkSession();
        
        //Set page variable.
        $data['title'] = 'Admin-Change Password';
        $data['userId'] = $id;
        
        //Set error delimiters.
        $this->form_validation->set_error_delimiters('<div class="alert alert-danger alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>', '</div>');
        
        //Set from validation rules.
        $this->form_validation->set_rules('pass1', 'new password', 'trim|required');
        $this->form_validation->set_rules('pass2', 'confirm password', 'trim|required');
        
        //check form validate or not.
        if($this->form_validation->run() == false)
        {        
            //Load page view
            $this->load->view('admin/includes/header', $data);
            $this->load->view('admin/change_password');
            $this->load->view('admin/includes/footer');
        } else {
            //Load change password model.
            $result = $this->model_user->changePassword();
            if($result == 1)
            {
                $data['success'] = '
                <div class="alert alert-success alert-dismissable">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button> User password successfully Changed.
                </div>';
            } else {
                $data['success'] = '
                <div class="alert alert-danger alert-dismissable">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button> Password does not matched, please try agian!.
                </div>';
            }
            
            //Load page view
            $this->load->view('admin/includes/header', $data);
            $this->load->view('admin/change_password');
            $this->load->view('admin/includes/footer');
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
