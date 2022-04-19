<?php 
class Photo_pria extends MX_Controller
{
    
    function __construct()
    {
        parent::__construct();
		$this->load->model('model_photo_pria','photo_pria');
    }

   function index()
    {
		
		if (isset($_POST['submit'])){
			$this->photo_pria->photo_pria_update();
			redirect(base_url().'photo_pria');
		}else{
			$data['record'] = $this->photo_pria->get_photo_pria()->row_array();
			echo modules::run('template_backend/loadview', $data, 'photo_pria/v_index');
		}
    }
	
	
	
	
}
?>