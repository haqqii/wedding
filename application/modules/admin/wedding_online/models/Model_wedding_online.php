<?php 
class Model_wedding_online extends CI_model{
    
	function get_wedding_online(){
        return $this->db->query("SELECT * FROM wedding_online ORDER BY id DESC LIMIT 1");
    }
	
	
	function wedding_online_update(){
		
		if (isset($_POST['status'])) {
			$status = "aktif";
		} else {
			$status = "tidak";
		}


			$datadb = array(
				'zoom_url'=>$this->db->escape_str($this->input->post('zoom_url')),
				'status'=>$status,
			);
            $this->db->where('id',1);
            $this->db->update('wedding_online',$datadb);
    }
    
}