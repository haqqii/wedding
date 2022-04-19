<?php 
class Photo_wanita extends MX_Controller
{
    
    function __construct()
    {
        parent::__construct();
		$this->load->model('model_photo_wanita','photo_wanita');
    }

   function index()
    {
		
		if (isset($_POST['submit'])){
			$this->photo_wanita->photo_wanita_update();
			redirect(base_url().'photo_wanita');
		}else{
			$data['record'] = $this->photo_wanita->get_photo_wanita()->row_array();
			echo modules::run('template_backend/loadview', $data, 'photo_wanita/v_index');
		}
    }
	
	
	
	
}
?>