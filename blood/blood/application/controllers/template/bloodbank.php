<?php
if( !defined('BASEPATH') ) exit('No direct script access allowed!');

class Bloodbank extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');					//Load url helper library.
		$this->load->library('form_validation');	//Load form validation library.
        $this->load->model('template/model_state'); //Load state model.
		$this->load->model('template/model_bloodbank');	//Load blood bank model.
	}
	
	//Load registration page view
	public function index()
	{		
		//Set page variable.
		$data['title'] = 'Registration a Blood bank';
		$data['rightSide'] = 'template/includes/right-side-bar';
		
		//Set form validation rules.
		$this->form_validation->set_rules('name','name','trim|required');
		
		//check form validation.
		if($this->form_validation->run() == false)
		{
            //get all state list form database.
            $data['state'] = $this->model_state->getState();
            
			//Load page view
			$this->load->view('template/includes/header', $data);
			$this->load->view('template/bloodbank');
			$this->load->view('template/includes/footer');
		}
		else
		{
			$ins = $this->model_bloodbank->bloodBankRegistration();
			if($ins == 1)
			{
                //get all state list form database.
                $data['state'] = $this->model_state->getState();
                
				//Set success message.
				$data['success'] = '<div class="alert alert-success">
				  <button type="button" class="close" data-dismiss="alert">×</button>
				  <strong>Well done!</strong> Your registration successfull.
				</div>';
				
				//Load page view
				$this->load->view('template/includes/header', $data);
				$this->load->view('template/bloodbank');
				$this->load->view('template/includes/footer');
			}
		}
	}
}
/* End of file bloodbank.php */
/* Location: ../application/controller/template/bloodbank.php */
/* Omit PHP closing tags to help avoid accidental output */