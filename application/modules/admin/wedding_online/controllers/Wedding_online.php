<?php 
class Wedding_online extends MX_Controller
{
    
    function __construct()
    {
        parent::__construct();
		$this->load->model('model_wedding_online','wedding_online');
    }

   function index()
    {
		
		if (isset($_POST['submit'])){
			$this->wedding_online->wedding_online_update();
			redirect(base_url().'wedding_online');
		}else{
			$data['record'] = $this->wedding_online->get_wedding_online()->row_array();
			echo modules::run('template_backend/loadview', $data, 'wedding_online/v_index');
		}
    }
	
	
	
	
}
?>