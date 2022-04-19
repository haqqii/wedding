<?php 
class Model_akad extends CI_model{
    
	function get_akad(){
        return $this->db->query("SELECT * FROM akad ORDER BY id DESC LIMIT 1");
    }
	
	
	function akad_update(){
			$datadb = array(
				'tanggal_akad'=>$this->db->escape_str($this->input->post('tanggal_akad')),
				'tanggal_resepsi'=>$this->db->escape_str($this->input->post('tanggal_resepsi')),
				'waktu_akad'=>$this->db->escape_str($this->input->post('waktu_akad')),
				'waktu_resepsi'=>$this->db->escape_str($this->input->post('waktu_resepsi')),
				'tempat_akad'=>$this->db->escape_str($this->input->post('tempat_akad')),
				'tempat_resepsi'=>$this->db->escape_str($this->input->post('tempat_resepsi')),
				'alamat_akad'=>$this->db->escape_str($this->input->post('alamat_akad')),
				'alamat_resepsi'=>$this->db->escape_str($this->input->post('alamat_resepsi')),
				'maps_akad'=>$this->db->escape_str($this->input->post('maps_akad')),
				'maps_resepsi'=>$this->db->escape_str($this->input->post('maps_resepsi')),
				'url_maps_akad'=>$this->db->escape_str($this->input->post('url_maps_akad')),
				'url_maps_resepsi'=>$this->db->escape_str($this->input->post('url_maps_resepsi')),
			);
            $this->db->where('id',1);
            $this->db->update('akad',$datadb);
    }
    
}