<?php 
class Model_rsvp extends CI_model{
    
	function get_rsvp(){
        return $this->db->query("SELECT * FROM rsvp ORDER BY id DESC LIMIT 1");
    }
	
	
	function rsvp_update(){
		
		if (isset($_POST['status'])) {
			$status = "aktif";
		} else {
			$status = "tidak";
		}


			$datadb = array(
				'wa_pria'=>$this->db->escape_str($this->input->post('wa_pria')),
				'wa_wanita'=>$this->db->escape_str($this->input->post('wa_wanita')),
				'status'=>$status,
			);
            $this->db->where('id',1);
            $this->db->update('rsvp',$datadb);
    }
    
}