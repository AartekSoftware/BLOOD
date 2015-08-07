<?php
if ( !defined('BASEPATH') ) exit('No direct script access allowed!');

class Whydonote extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');		//Load url helper library.
        $this->load->model('template/model_state'); //Load state model.
	}
	
	//Load why donote page.
	public function index()
	{
		//Set page variable.
		$data['title'] = 'Why Donote Blood';
		$data['rightSide'] = 'template/includes/right-side-bar';
        
        //get all state list form database.
        $data['state'] = $this->model_state->getState();
		
		//Load page view
		$this->load->view('template/includes/header', $data);
		$this->load->view('template/whydonote');
		$this->load->view('template/includes/footer');
	}
}
/* End of file whydonote.php */
/* Location: ./application/controllers/whydonote.php */
/* Omit PHP closing tags to help avoid accidental output */