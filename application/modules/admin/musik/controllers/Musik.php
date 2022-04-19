<?php 
class Musik extends MX_Controller
{
    
    function __construct()
    {
        parent::__construct();
		$this->load->model('model_musik','musik');
    }

   function index()
    {
		
		if (isset($_POST['submit'])){
			$this->musik->musik_update();
			redirect(base_url().'musik');
		}else{
			$data['record'] = $this->musik->get_musik()->row_array();
			echo modules::run('template_backend/loadview', $data, 'musik/v_index');
		}
    }
	
	
	
	
}
?>