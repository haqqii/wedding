<?php 
class Model_identitas extends CI_model{
    
	function identitas(){
        return $this->db->query("SELECT * FROM identitas ORDER BY id_identitas DESC LIMIT 1");
    }
	
	
	function identitas_update(){
            $config['upload_path'] = 'assets/favicon/';
            $config['allowed_types'] = 'gif|jpg|png|ico';
            $config['max_size'] = '500'; // kb
            $this->load->library('upload', $config);
            $this->upload->do_upload('i');
            $hasil=$this->upload->data();

            if ($hasil['file_name']==''){
                    $datadb = array('nama_website'=>$this->db->escape_str($this->input->post('a')),
                                    'email'=>$this->db->escape_str($this->input->post('b')),
                                    'url'=>$this->db->escape_str($this->input->post('c')),
                                    'jam_operasional'=>$this->input->post('d'),
                                    'rekening'=>$this->db->escape_str($this->input->post('e')),
                                    'no_telp'=>$this->db->escape_str($this->input->post('f')),
                                    'alamat'=>$this->db->escape_str($this->input->post('alamat')),
                                    'meta_deskripsi'=>$this->db->escape_str($this->input->post('g')),
                                    'meta_keyword'=>$this->db->escape_str($this->input->post('h')),
                                    'maps'=>$this->db->escape_str($this->input->post('j')),
                                    'whatsapp'=>$this->db->escape_str($this->input->post('whatsapp'))
									);
            }else{
                    $datadb = array('nama_website'=>$this->db->escape_str($this->input->post('a')),
                                    'email'=>$this->db->escape_str($this->input->post('b')),
                                    'url'=>$this->db->escape_str($this->input->post('c')),
                                    'jam_operasional'=>$this->input->post('d'),
                                    'rekening'=>$this->db->escape_str($this->input->post('e')),
                                    'no_telp'=>$this->db->escape_str($this->input->post('f')),
                                    'alamat'=>$this->db->escape_str($this->input->post('alamat')),
                                    'meta_deskripsi'=>$this->db->escape_str($this->input->post('g')),
                                    'meta_keyword'=>$this->db->escape_str($this->input->post('h')),
                                    'favicon'=>$hasil['file_name'],
                                    'maps'=>$this->db->escape_str($this->input->post('j')),
                                    'whatsapp'=>$this->db->escape_str($this->input->post('whatsapp')),
									);
            }
            $this->db->where('id_identitas',1);
            $this->db->update('identitas',$datadb);
    }
    
}