<?php 
class Prokes extends MX_Controller
{
    
    function __construct()
    {
        parent::__construct();
		$this->load->model('model_prokes','prokes');
    }

   function index()
    {
		
		if (isset($_POST['submit'])){
			$this->prokes->prokes_update();
			redirect(base_url().'prokes');
		}else{
			$data['record'] = $this->prokes->get_prokes()->row_array();
			echo modules::run('template_backend/loadview', $data, 'prokes/v_index');
		}
    }
	
	
	
	
}
?>