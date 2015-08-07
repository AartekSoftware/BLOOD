<?php
if( !defined('BASEPATH') ) exit('No direct script access allowed!');

class Request extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');					//Load url helper library.
		$this->load->library('form_validation');	//Load form validation library.
        $this->load->model('template/model_state'); //Load state model.
		$this->load->model('template/model_request');	//Load request blood model.
	}
	
	//Load registration page view
	public function index()
	{		
		//Set page variable.
		$data['title'] = 'Requrest For Blood';
		$data['rightSide'] = 'template/includes/right-side-bar';
		
        //Set error delimiters.
        $this->form_validation->set_error_delimiters('<div class="alert alert-error">
				  <button type="button" class="close" data-dismiss="alert">×</button>', '</div>');
        
		//Set form validation rules.
		$this->form_validation->set_rules('fname','first name','trim|required');        
        $this->form_validation->set_rules('fathername','father name','trim|required');
        $this->form_validation->set_rules('mothername','mother name','trim|required');
        $this->form_validation->set_rules('day','day of the birth','trim|required');
        $this->form_validation->set_rules('month','month of the birth','trim|required');
        $this->form_validation->set_rules('year','year of the birth','trim|required');
        $this->form_validation->set_rules('blood_group','blood group','trim|required');
        $this->form_validation->set_rules('gender','gender','trim|required');
        $this->form_validation->set_rules('address','address','trim|required');
        $this->form_validation->set_rules('state','state','trim|required');
        $this->form_validation->set_rules('city','city','trim|required');
        $this->form_validation->set_rules('contact','contact','trim|required');
		
		//check form validation.
		if($this->form_validation->run() == false)
		{
            //get all state list form database.
            $data['state'] = $this->model_state->getState();
            
			//Load page view
			$this->load->view('template/includes/header', $data);
			$this->load->view('template/request');
			$this->load->view('template/includes/footer');
		}
		else
		{
			$ins = $this->model_request->requestRegistration();
			if($ins == 1)
			{
                //get all state list form database.
                $data['state'] = $this->model_state->getState();
                
				//Set success message.
				$data['success'] = '<div class="alert alert-success">
				  <button type="button" class="close" data-dismiss="alert">×</button>
				  <strong>Well done!</strong> Your request is send. Administrator will contact you as soon as possible.
				</div>';
				
				//Load page view
				$this->load->view('template/includes/header', $data);
				$this->load->view('template/request');
				$this->load->view('template/includes/footer');
			}
		}
	}
}
/* End of file request.php */
/* Location: ../application/controller/template/request.php */
/* Omit PHP closing tags to help avoid accidental output */