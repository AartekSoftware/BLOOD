<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');		//Load URL helper library.
        $this->load->model('template/model_state'); //Load state model.
	}
	
	//Load home page.
	public function index()
	{
		//Set page variable
		$data['title'] = 'Blood bank';
        
        //get all state list form database.
        $data['state'] = $this->model_state->getState();        
		
		//Load page view
		$this->load->view('template/includes/header', $data);
		$this->load->view('template/home');
		$this->load->view('template/includes/footer');
	}
}

/* End of file home.php */
/* Location: ./application/controllers/home.php */
/* Omit PHP closing tags to help avoid accidental output */