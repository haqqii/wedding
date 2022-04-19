<?php 
class Model_biodata extends CI_model{
    
	function get_biodata(){
        return $this->db->query("SELECT * FROM biodata ORDER BY id DESC LIMIT 1");
    }
	
	
	function biodata_update(){
            $config['upload_path'] = 'assets/front_image/';
            $config['allowed_types'] = 'gif|jpg|png';
            $config['max_size'] = '1000'; // kb
			$config['overwrite'] = false;
			$config['encrypt_name'] = TRUE;
            $this->load->library('upload', $config);
            $this->upload->do_upload('photo');
            $hasil=$this->upload->data();

            if ($hasil['file_name']==''){
                    $datadb = array(
						'nama_panggilan_pria'=>$this->db->escape_str($this->input->post('nama_panggilan_pria')),
						'nama_panggilan_wanita'=>$this->db->escape_str($this->input->post('nama_panggilan_wanita')),
						'nama_lengkap_pria'=>$this->db->escape_str($this->input->post('nama_lengkap_pria')),
						'nama_lengkap_wanita'=>$this->db->escape_str($this->input->post('nama_lengkap_wanita')),
						'nama_orangtua_mempelai_pria'=>$this->db->escape_str($this->input->post('nama_orangtua_mempelai_pria')),
						'nama_orangtua_mempelai_wanita'=>$this->db->escape_str($this->input->post('nama_orangtua_mempelai_wanita')),
					);
            }else{
                    $datadb = array(
						'nama_panggilan_pria'=>$this->db->escape_str($this->input->post('nama_panggilan_pria')),
						'nama_panggilan_wanita'=>$this->db->escape_str($this->input->post('nama_panggilan_wanita')),
						'nama_lengkap_pria'=>$this->db->escape_str($this->input->post('nama_lengkap_pria')),
						'nama_lengkap_wanita'=>$this->db->escape_str($this->input->post('nama_lengkap_wanita')),
						'nama_orangtua_mempelai_pria'=>$this->db->escape_str($this->input->post('nama_orangtua_mempelai_pria')),
						'nama_orangtua_mempelai_wanita'=>$this->db->escape_str($this->input->post('nama_orangtua_mempelai_wanita')),
						'photo'=>$hasil['file_name'],
					);
            }
            $this->db->where('id',1);
            $this->db->update('biodata',$datadb);
    }
    
}