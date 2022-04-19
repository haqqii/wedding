<?php 
class Profile extends MX_Controller
{
    
    function __construct()
    {
        parent::__construct();
		
    }

   function index()
    {	$data['title']='this is title';
		echo modules::run('template_backend/loadview', $data, 'profile/v_profile');
    }
	
	
	
	
	function change_password(){
		$id = $this->uri->segment(3);
		if (isset($_POST['submit'])){
			$config['upload_path'] = 'assets/foto_user/';
			$config['allowed_types'] = 'gif|jpg|png|JPG|JPEG|jpeg';
            $config['max_size'] = '1000'; // kb
			$config['overwrite'] = false;
			$config['encrypt_name'] = TRUE;
            $this->load->library('upload', $config);
            $this->upload->do_upload('f');
            $hasil=$this->upload->data();
			
			
            if ($hasil['file_name']=='' AND $this->input->post('b') ==''){
                    $data = array('username'=>$this->db->escape_str($this->input->post('a'))
									);
            }elseif ($hasil['file_name']!='' AND $this->input->post('b') ==''){
                    $data = array('username'=>$this->db->escape_str($this->input->post('a')),
                                    'foto'=>$hasil['file_name']
									);
            }elseif ($hasil['file_name']=='' AND $this->input->post('b') !=''){
                    $data = array('username'=>$this->db->escape_str($this->input->post('a')),
                                    'password'=>hash("sha512", md5($this->input->post('b')))
									);
            }elseif ($hasil['file_name']!='' AND $this->input->post('b') !=''){
                    $data = array('username'=>$this->db->escape_str($this->input->post('a')),
                                    'password'=>hash("sha512", md5($this->input->post('b'))),
                                    'foto'=>$hasil['file_name']
									);
            }
            $where = array('username' => $this->input->post('id'));
            $update = $this->model_app->update('users', $data, $where);

			
			if($update === FALSE){
				echo $this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h4><i class="icon fa fa-ban"></i> Gagal!</h4>
                Update data berhasil...
              </div>');
				redirect(base_url().'profile/');
			}else{
				echo $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h4><i class="icon fa fa-check"></i> Success!</h4>
                Update data berhasil...
              </div>');
				redirect(base_url().'profile/');
			}

		}else{
                $proses = $this->model_app->edit('users', array('username' => $this->session->username))->row_array();
                $data = array('rows' => $proses);
    			echo modules::run('template_backend/loadview', $data, 'profile/v_change_password');
            
		}
	}
	
}
?>