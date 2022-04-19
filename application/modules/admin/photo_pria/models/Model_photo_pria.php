<?php 
class Model_photo_pria extends CI_model{
    
	function get_photo_pria(){
        return $this->db->query("SELECT * FROM biodata ORDER BY id DESC LIMIT 1");
    }
	
	
	function photo_pria_update(){
            $config['upload_path'] = 'assets/front_image/';
            $config['allowed_types'] = 'gif|jpg|png|jpeg';
            $config['max_size'] = '1000'; // kb
			$config['overwrite'] = false;
			$config['encrypt_name'] = TRUE;
            $this->load->library('upload', $config);
            $this->upload->do_upload('photo_pria');
            $hasil=$this->upload->data();

            if ($hasil['file_name']==''){
                   
            }else{
                    $datadb = array(
						'photo_pria'=>$hasil['file_name'],
					);
            }
            $this->db->where('id',1);
            $this->db->update('biodata',$datadb);
    }
    
}