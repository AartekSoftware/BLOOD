<?php
if( !defined('BASEPATH') ) exit('No direct script access allowed!');

class Logout extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');     //Load url helper library.
    }
    
    //Logout admin.
    public function index()
    {
        //Destroy  the admin session.        
        $this->session->sess_destroy();
        //Redirect to login page.
        redirect(base_url().'index.php/admin');
    }
}

/* End of file logout.php */
/* Location: .../application/controller/admin/logout */
/* Omit PHP closing tags to help avoid accidental output */