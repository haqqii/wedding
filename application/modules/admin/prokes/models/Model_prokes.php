<?php 
class Model_prokes extends CI_model{
    
	function get_prokes(){
        return $this->db->query("SELECT * FROM prokes ORDER BY id DESC LIMIT 1");
    }
	
	
	function prokes_update(){
		
		if (isset($_POST['status'])) {
			$status = "aktif";
		} else {
			$status = "tidak";
		}


			$datadb = array(
				'status'=>$status,
			);
            $this->db->where('id',1);
            $this->db->update('prokes',$datadb);
    }
    
}