<?php
ob_start(); //Turn On output buffering.

if( !defined('BASEPATH') ) exit('No direct script access allowed!');

class login extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');                 //Load url helper library.
        $this->load->library('form_validation');    //Load form validation library.
        $this->load->model('admin/model_admin');    //Load admin model.
    }
    
    //Load admin login views.
    public function index()
    {
        //set page variable.
        $data['title'] = 'Administrator Login';
        
        //Set error delimiters.
        $this->form_validation->set_error_delimiters('<p><button type="button" class="close" data-dismiss="alert">×</button>', '</p>');
        
        //Set form validation rules.
        $this->form_validation->set_rules('loginid', 'login id ', 'trim|required');
        $this->form_validation->set_rules('password', 'password', 'trim|required');
        
        if($this->form_validation->run() == false)
        {            
            //Load page view.        
            $this->load->view('admin/login', $data);
        }
        else
        {
            //Load admin login process.
            $result = $this->model_admin->validate();
            
            //Now we verify the result.
            if( !$result )
            {
                //If user did not validate, them so that login page again.
                $data['error'] = '<p> <button type="button" class="close" data-dismiss="alert">×</button> Invalid username and/or passwrod, please try again!</p>';
                $this->load->view('admin/login', $data);
            }
            else
            {
                echo 'Loading...';
                redirect(site_url().'/admin/dashboard');
            }
        }
    }
}
/* End of file login.php */
/* Location : .../application/controller/admin/login.php */
/* Omit PHP closing tags to help avoid accidental output. */