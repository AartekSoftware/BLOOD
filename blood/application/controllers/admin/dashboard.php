<?php
if( !defined('BASEPATH') ) exit('No direct script access allowed!');

class Dashboard extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');                 //Load url helper library.
        $this->load->model('admin/model_admin');    //Load admin model.
        $this->load->library('form_validation');    //Load form validation library.
    }
    
    //Load admin dashboard views.
    public function index()
    {
        //Check admin session set or not.
        $this->checkSession();
        
        //set page variable.
        $data['title'] = 'Admin Controle Panel';
        $data['userCount'] = $this->model_admin->countUsers();
        $data['bloodBank'] = $this->model_admin->countBloodbank();
        $data['request'] = $this->model_admin->countRequest();
        $data['contactMsg'] = $this->model_admin->countMessage();
        
        //Load page view.
        $this->load->view('admin/includes/header', $data);
        $this->load->view('admin/dashboard');
        $this->load->view('admin/includes/footer');
    }
    
    //Change user password.
    public function changepassword()
    {
        //Check user session set or not.
        $this->checkSession();
        
        //Set page variable.
        $data['title'] = 'Admin-Change Password';
        
        //Set error delimiters.
        $this->form_validation->set_error_delimiters('<div class="alert alert-danger alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>', '</div>');
        
        //Set from validation rules.
        $this->form_validation->set_rules('old_pass', 'old pass', 'trim|required');
        $this->form_validation->set_rules('pass1', 'new password', 'trim|required');
        $this->form_validation->set_rules('pass2', 'confirm password', 'trim|required');
        
        //check form validate or not.
        if($this->form_validation->run() == false)
        {        
            //Load page view
            $this->load->view('admin/includes/header', $data);
            $this->load->view('admin/profile_password');
            $this->load->view('admin/includes/footer');
        } else {
            //Load change password model.
            $result = $this->model_admin->changePassword();
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
            $this->load->view('admin/profile_password');
            $this->load->view('admin/includes/footer');
        }
    }
    
    //Get admin profile from database.
    public function profile()
    {
        //Check session set or not.
        $this->checkSession();
        
        //Set page variables.
        $data['title'] = 'Admin-Profile';
        $data['row'] = $this->model_admin->getProfileData();
        $data['blood'] = $this->model_admin->getBloodGroup();
        
        //set form validation ruels.
        $this->form_validation->set_rules('username', 'user name', 'trim|required');
        
        if($this->form_validation->run() == false)
        {        
            //Load page view.
            $this->load->view('admin/includes/header', $data);
            $this->load->view('admin/profile');
            $this->load->view('admin/includes/footer');
        } else {
            $result = $this->model_admin->updateProfile();
            if($result == 1)
            {
                $data['success'] = '
                    <div class="alert alert-success alert-dismissable">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button> Profile update successfully.
                    </div>';
                
                //Load page view.
                $this->load->view('admin/includes/header', $data);
                $this->load->view('admin/profile');
                $this->load->view('admin/includes/footer');
            }
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