<?php 
class Identitas extends MX_Controller
{
    
    function __construct()
    {
        parent::__construct();
		$this->load->model('model_identitas','identitas');
    }

   function index()
    {
		
		if (isset($_POST['submit'])){
			$this->identitas->identitas_update();
			redirect(base_url().'identitas');
		}else{
			$data['record'] = $this->identitas->identitas()->row_array();
			echo modules::run('template_backend/loadview', $data, 'identitas/v_identitas');
		}
    }
	
	
	
	
}
?>