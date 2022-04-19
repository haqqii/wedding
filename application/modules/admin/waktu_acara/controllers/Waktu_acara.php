<?php 
class Waktu_acara extends MX_Controller
{
    
    function __construct()
    {
        parent::__construct();
		$this->load->model('model_waktu_acara','waktu_acara');
    }

   function index()
    {
		
		if (isset($_POST['submit'])){
			$this->waktu_acara->waktu_acara_update();
			redirect(base_url().'waktu_acara');
		}else{
			$data['record'] = $this->waktu_acara->get_waktu_acara()->row_array();
			echo modules::run('template_backend/loadview', $data, 'waktu_acara/v_index');
		}
    }
	
	
	
	
}
?>