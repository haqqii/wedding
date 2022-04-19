<?php 
class Love_gift extends MX_Controller
{
    
    function __construct()
    {
        parent::__construct();
		$this->load->model('model_love_gift','love_gift');
    }

   function index()
    {
		
		if (isset($_POST['submit'])){
			$this->love_gift->love_gift_update();
			redirect(base_url().'love_gift');
		}else{
			$data['record'] = $this->love_gift->get_love_gift()->row_array();
			echo modules::run('template_backend/loadview', $data, 'love_gift/v_index');
		}
    }
	
	
	
	
}
?>