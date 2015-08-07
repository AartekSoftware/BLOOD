<?php
if( !defined('BASEPATH') ) exit('No direct script access allowed!');

class Findbloodbank extends CI_Controller
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
		$data['title'] = 'Search a Blood bank';
		$data['rightSide'] = 'template/includes/right-side-bar';
		
		//Set form validation rules.
		$this->form_validation->set_rules('state','state','trim|required');
        $this->form_validation->set_rules('city','city','trim|required');
		
		//check form validation.
		if($this->form_validation->run() == false)
		{
            //get all state list form database.
            $data['state'] = $this->model_state->getState();
            
            //Get blood bank list from database.
            $data['bloodbank'] = $this->model_bloodbank->getBloodBank();
            
			//Load page view
			$this->load->view('template/includes/header', $data);
			$this->load->view('template/findbloodbank');
			$this->load->view('template/includes/footer');
		}
		else
		{			
			//get all state list form database.
            $data['state'] = $this->model_state->getState();
            
            //Get blood bank list from database.
            $data['bloodbank'] = $this->model_bloodbank->getBloodBank();
				
            //Load page view
            $this->load->view('template/includes/header', $data);
            $this->load->view('template/findbloodbank');
            $this->load->view('template/includes/footer');
		}
	}
}
/* End of file bloodbank.php */
/* Location: ../application/controller/template/bloodbank.php */
/* Omit PHP closing tags to help avoid accidental output */