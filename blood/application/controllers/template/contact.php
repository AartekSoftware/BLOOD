<?php
if( !defined('BASEPATH') ) exit('No direct script access allowed!');

class Contact extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');		                //Load url helper library.
        $this->load->model('template/model_state');     //Load state model.
        $this->load->model('template/model_contact');   //Load contact model.
        $this->load->library('form_validation');        //Load form validation library.
	}
	
	//Load whonedd page view
	public function index()
	{
		//Set page variable.
		$data['title'] = 'Cotact Us';
		$data['rightSide'] = 'template/includes/right-side-bar';
        
        //get all state list form database.
        $data['state'] = $this->model_state->getState();
        
        //Set form delimiters.
        $this->form_validation->set_error_delimiters('<div class="alert alert-error"><button type="button" class="close" data-dismiss="alert">×</button>', '<div>');
        
        //Set form validation rules.
        $this->form_validation->set_rules('name', 'name', 'trim|required');
        $this->form_validation->set_rules('subject', 'subject', 'trim|required');
        $this->form_validation->set_rules('email', 'email', 'trim|required');
        $this->form_validation->set_rules('contact', 'contact no', 'trim|required');
        $this->form_validation->set_rules('message', 'message', 'trim|required');
        
        if($this->form_validation->run() == false)
        {
            //Load page view
            $this->load->view('template/includes/header', $data);
            $this->load->view('template/contact');
            $this->load->view('template/includes/footer');
        } else {
            //Load contact model.
            $result = $this->model_contact->insertData();
            if($result == 1)
            {
                $data['success'] = '<div class="alert alert-success"><button type="button" class="close" data-dismiss="alert">×</button>Your message is send successfully, Administrator will contact you as soon as possible.</div>';
                
                //Load page view
                $this->load->view('template/includes/header', $data);
                $this->load->view('template/contact');
                $this->load->view('template/includes/footer');
            }
        }
	}
}
/* End of file contact.php */
/* Location: ../application/controller/template/contact.php */
/* Omit PHP closing tags to help avoid accidental output */