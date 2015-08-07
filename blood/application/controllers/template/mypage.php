<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Mypage extends CI_Controller
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
        //Check user session set or not.
        $this->checkSession();
        
		//Set page variable
		$data['title'] = 'Welcome User';
        
        //get all state list form database.
        $data['state'] = $this->model_state->getState();        
		
		//Load page view
		$this->load->view('template/includes/header', $data);
		$this->load->view('template/mypage');
		$this->load->view('template/includes/footer');
	}
    
    //Logout user.
    public function logout()
    {
        if($this->session->userdata('user_id') != '')
        {
            $this->session->sess_destroy();
            redirect(base_url());
        }
    }
    
    //check user session data.
    public function checkSession()
    {
        if($this->session->userdata('user_id') == '')
        {
            redirect(base_url());
        }
    }
}

/* End of file mypage.php */
/* Location: ./application/controllers/template/mypage.php */
/* Omit PHP closing tags to help avoid accidental output */