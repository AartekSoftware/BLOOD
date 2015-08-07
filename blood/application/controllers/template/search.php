<?php
if( !defined('BASEPATH') ) exit('No direct script access allowed!');

class Search extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');		                //Load url helper library.
        $this->load->library('form_validation');	    //Load form validation library.
        $this->load->model('template/model_state');     //Load state model.
        $this->load->model('template/model_search');    //Load search model.
	}
	
	//Load whonedd page view
	public function index()
	{
		//Set page variable.
		$data['title'] = 'Donor result';
		$data['rightSide'] = 'template/includes/right-side-bar';
        
        //get all state list form database.
        $data['state'] = $this->model_state->getState();
        
        //Set form validation rules.
        $this->form_validation->set_rules('state', 'state', 'trim|required');
        $this->form_validation->set_rules('city', 'city', 'trim|required');
        $this->form_validation->set_rules('group', 'group', 'trim|required');
        
        //Run form validation.
        if($this->form_validation->run() == false)
        {
            //Load page view
            $this->load->view('template/includes/header', $data);
            $this->load->view('template/search');
            $this->load->view('template/includes/footer');
        } else {
            //Get search result.            
            $data['search'] = $this->model_search->searchResult();
            //get search criteria result.
            $result = $this->model_search->searchCriteria();
            $data['stateCity'] = $result['stateCity'];
            $data['bloodGroup'] = $result['bloodGroup'];
            
            //Load page view
            $this->load->view('template/includes/header', $data);
            $this->load->view('template/search');
            $this->load->view('template/includes/footer');
        }
        
	}
}
/* End of file search.php */
/* Location: ../application/controller/template/search.php */
/* Omit PHP closing tags to help avoid accidental output */