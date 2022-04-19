<?php 
class Rsvp extends MX_Controller
{
    
    function __construct()
    {
        parent::__construct();
		$this->load->model('model_rsvp','rsvp');
    }

   function index()
    {
		
		if (isset($_POST['submit'])){
			$this->rsvp->rsvp_update();
			redirect(base_url().'rsvp');
		}else{
			$data['record'] = $this->rsvp->get_rsvp()->row_array();
			echo modules::run('template_backend/loadview', $data, 'rsvp/v_index');
		}
    }
	
	
	
	
}
?>