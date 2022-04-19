<?php 
class Model_love_gift extends CI_model{
    
	function get_love_gift(){
        return $this->db->query("SELECT * FROM love_gift ORDER BY id DESC LIMIT 1");
    }
	
	
	function love_gift_update(){
		
		if (isset($_POST['status'])) {
			$status = "aktif";
		} else {
			$status = "tidak";
		}


			$datadb = array(
				'nama_bank'=>$this->db->escape_str($this->input->post('nama_bank')),
				'no_rekening'=>$this->db->escape_str($this->input->post('no_rekening')),
				'nama_rekening'=>$this->db->escape_str($this->input->post('nama_rekening')),
				'status'=>$status,
			);
            $this->db->where('id',1);
            $this->db->update('love_gift',$datadb);
    }
    
}