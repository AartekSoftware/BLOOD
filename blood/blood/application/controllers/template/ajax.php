<?php
if ( !defined('BASEPATH') ) exit('NO direct script access allowed!');

class Ajax extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');                     //Load url helper library.
        $this->load->model('template/model_ajax');      //Load ajax model.
    }
    
    //Get city from database.
    public function city()
    {
        $citySelectBox = '';
        $stateId = $this->input->post('state_id');
        $cityList = $this->model_ajax->getCity($stateId);
        $citySelectBox = '<select name="city" required="required">';
        $citySelectBox .= '<option value="">--Select City--</option>';
        foreach($cityList as $row)
        {
            $citySelectBox .= '<option value="'.$row->city_id.'">'.$row->city.'</option>';
        }
        $citySelectBox .= '</select>';
        echo $citySelectBox;
    }
}
/* End of file ajax.php */
/* Location: ../application/controller/template/ajax.php */
/* Omit PHP closing tags to help avoid accidental output. */