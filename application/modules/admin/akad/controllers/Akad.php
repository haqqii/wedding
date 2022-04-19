<?php 
class Akad extends MX_Controller
{
    
    function __construct()
    {
        parent::__construct();
		$this->load->model('model_akad','akad');
    }

   function index()
    {
		
		if (isset($_POST['submit'])){
			$this->akad->akad_update();
			redirect(base_url().'akad');
		}else{
			$data['record'] = $this->akad->get_akad()->row_array();
			echo modules::run('template_backend/loadview', $data, 'akad/v_index');
		}
    }
	
	
	
	
}
?>