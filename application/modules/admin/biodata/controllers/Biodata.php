<?php 
class Biodata extends MX_Controller
{
    
    function __construct()
    {
        parent::__construct();
		$this->load->model('model_biodata','biodata');
    }

   function index()
    {
		
		if (isset($_POST['submit'])){
			$this->biodata->biodata_update();
			redirect(base_url().'biodata');
		}else{
			$data['record'] = $this->biodata->get_biodata()->row_array();
			echo modules::run('template_backend/loadview', $data, 'biodata/v_index');
		}
    }
	
	
	
	
}
?>