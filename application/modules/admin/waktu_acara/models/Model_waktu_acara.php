<?php 
class Model_waktu_acara extends CI_model{
    
	function get_waktu_acara(){
        return $this->db->query("SELECT * FROM waktu_acara ORDER BY id DESC LIMIT 1");
    }
	
	
	function waktu_acara_update(){
		
		if (isset($_POST['status'])) {
			$status = "aktif";
		} else {
			$status = "tidak";
		}


			$datadb = array(
				'tanggal'=>$this->db->escape_str($this->input->post('tanggal')),
				'waktu'=>$this->db->escape_str($this->input->post('waktu')),
				'format_waktu'=>$this->db->escape_str($this->input->post('format_waktu')),
				'status'=>$status,
			);
            $this->db->where('id',1);
            $this->db->update('waktu_acara',$datadb);
    }
    
}