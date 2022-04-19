<?php 
class Dashboard extends MX_Controller
{
    
    function __construct()
    {
        parent::__construct();
		$this->load->model('model_dashboard','dashboard');
		
    }

    function index()
    {
        $data['title'] = "";
        $data['identitas'] = $this->db->query("SELECT * FROM identitas WHERE id_identitas='1'")->row_array();
        $data['biodata'] = $this->db->query("SELECT * FROM biodata WHERE id='1'")->row_array();
        $data['akad'] = $this->db->query("SELECT * FROM akad WHERE id='1'")->row_array();
        $data['waktu_acara'] = $this->db->query("SELECT * FROM waktu_acara WHERE id='1'")->row_array();
        $data['wedding_online'] = $this->db->query("SELECT * FROM wedding_online WHERE id='1'")->row_array();
        $data['prokes'] = $this->db->query("SELECT * FROM prokes WHERE id='1'")->row_array();
        $data['love_gift'] = $this->db->query("SELECT * FROM love_gift WHERE id='1'")->row_array();
        $data['gallery'] = $this->db->query("SELECT * FROM gallery ORDER BY id_gallery ASC")->result_array();
        $data['story'] = $this->db->query("SELECT * FROM story WHERE status = 'Y' ORDER BY tahun ASC")->result_array();
		$data['rsvp'] = $this->db->query("SELECT * FROM rsvp WHERE id='1'")->row_array();
		$data['story_status'] = $this->db->query("SELECT * FROM story_status WHERE id='1'")->row_array();
		$data['gallery_status'] = $this->db->query("SELECT * FROM gallery_status WHERE id='1'")->row_array();
		$data['musik'] = $this->db->query("SELECT * FROM musik WHERE id='1'")->row_array();
		 echo modules::run('template_front/loadview', $data, 'dashboard/v_show');
    }
	
	
	
}
?>