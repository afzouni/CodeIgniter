<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/*
**********************************************************************************
* Copyleft: Seyed Mustafa Afzouni (c) 2019
***********************************************************************************
*/


class Helloworld extends MX_Controller {

	function __construct()
	{
        parent::__construct();
        $this->load->model('helloworld_model');
	}

	function index()
	{
        $this->__load_home();
    }
    
	function __load_home()
	{
        $number_arrays = array(1,5,6,9,14,12,10,-1,9);

        $data['number_arrays'] = $number_arrays;
        $data['sum_array'] = $this->helloworld_model->sum_array($number_arrays);
        $data['page_name'] = 'Hello World!';
        
        $this->load->view("helloworld_view", $data);
	}
}

/* End of file welcome.php */