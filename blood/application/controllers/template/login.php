<?php
if( !defined('BASEPATH') ) exit('No direct script access allowed!');

class Login extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');		            //Load url helper library.
        $this->load->model('template/model_state'); //Load state model.
        $this->load->model('template/model_login'); //Load login model.
        $this->load->library('form_validation');    //Load form validation library.
	}
	
	//Load whonedd page view
	public function index()
	{
		//Set page variable.
		$data['title'] = 'Donor Login';
		$data['rightSide'] = 'template/includes/right-side-bar';
        
        //get all state list form database.
        $data['state'] = $this->model_state->getState();
        
        //Set error delimiters.
        $this->form_validation->set_error_delimiters('<div class="alert alert-error"><button type="button" class="close" data-dismiss="alert">×</button>', '</div>');
        
        //set form validation rules.
        $this->form_validation->set_rules('login', 'donor login', 'trim|required');
        $this->form_validation->set_rules('password', 'password', 'trim|required');
        
        if($this->form_validation->run() == false)
        {		
            //Load page view
            $this->load->view('template/includes/header', $data);
            $this->load->view('template/login');
            $this->load->view('template/includes/footer');
        } else {
            $result = $this->model_login->validate();            
            if(!$result)
            {
                //If user did not validate, them so that login page again.
                $data['error'] = '<div class="alert alert-error"><button type="button" class="close" data-dismiss="alert">×</button><strong>Warning!</strong> Invalid username and/or passwrod, please try again!</div>';
                
                //Load page view
                $this->load->view('template/includes/header', $data);
                $this->load->view('template/login');
                $this->load->view('template/includes/footer');
            } else {
                //Load page view.            
                redirect(site_url().'/mypage');
            }
        }        
	}
}

/* End of file login.php */
/* Location: ../application/controller/template/login.php */
/* Omit PHP closing tags to help avoid accidental output */