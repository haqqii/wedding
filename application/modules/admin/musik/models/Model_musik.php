<?php 
class Model_musik extends CI_model{
    
	function get_musik(){
        return $this->db->query("SELECT * FROM musik ORDER BY id DESC LIMIT 1");
    }
	
	
	function musik_update(){
            $config['upload_path'] = 'assets/front_audio/';
            $config['allowed_types'] = 'mp3';
            $config['max_size'] = ''; // kb
			$config['overwrite'] = false;
			$config['encrypt_name'] = TRUE;
            $this->load->library('upload', $config);
            $this->upload->do_upload('judul');
            $hasil=$this->upload->data();

            if ($hasil['file_name']==''){
                   
            }else{
                    $datadb = array(
						'judul'=>$hasil['file_name'],
					);
            }
            $this->db->where('id',1);
            $this->db->update('musik',$datadb);
    }
    
}