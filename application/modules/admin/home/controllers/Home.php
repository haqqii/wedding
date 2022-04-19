<?php 
class Home extends MX_Controller
{
    
    function __construct()
    {
        parent::__construct();
		$this->load->model('model_home','home');
		
    }

    function index()
    {
        $data['title'] = "";
        echo modules::run('template_backend/loadview', $data, 'home/v_show');
    }
	
	
	
}
?>