<?php 
class Users extends MX_Controller
{
    
    function __construct()
    {
        parent::__construct();
		$this->load->model('Users_model','users');
		
    }

    function index()
    {
		$data['title'] ='users';
		$data['roles'] = $this->db->query("SELECT * FROM role WHERE status='Y'")->result();
		echo modules::run('template_backend/loadview', $data, 'users/v_users');
    }
	
	public function ajax_list()
    {
        $list = $this->users->get_datatables();
        $data = array();
        $no = $_POST['start'];
        foreach ($list as $users) {
            $no++;
            $row = array();
            $row[] = $users->username;
            $row[] = $users->nama_lengkap;
            $row[] = $users->email;
            $row[] = $users->nm_role;
            if($users->foto){
                $row[] = '<a href="'.base_url('assets/foto_user/'.$users->foto).'" target="_blank"><img src="'.base_url('assets/foto_user/'.$users->foto).'" class="img-fluid img-thumbnail" width="50px"/></a>';
            }else{
                $row[] = '(No gambar)';
			}
 
           
            $cek = user_akses2('users',$this->session->level);
		if ($cek['ubah']=='1' && $cek['hapus']=='0'){
			$row[] = '<div align="center"><a href="javascript:void(0)" title="Edit" onclick="edit_users('."'".$users->id_users."'".')"><i class="fa fa-edit"></i></a></div>
				  ';
		} elseif ($cek['hapus']=='1' && $cek['ubah']=='0'){
			$row[] = '<div align="center"><a href="javascript:void(0)" title="Hapus" onclick="delete_users('."'".$users->id_users."'".')"><i class="fa fa-trash"></i></a></div>
				  ';
		} elseif ($cek['hapus']=='1' && $cek['ubah']=='1'){
			$row[] = '<div align="center"><a href="javascript:void(0)" title="Edit" onclick="edit_users('."'".$users->id_users."'".')"><i class="fa fa-edit"></i></a>
				  <a href="javascript:void(0)" title="Hapus" onclick="delete_users('."'".$users->id_users."'".')"><i class="fa fa-trash"></i></a></div>
				  ';
		} else {
			$row[] = '';
		}
		
			$data[] = $row;
        }
 
        $output = array(
                        "draw" => $_POST['draw'],
                        "recordsTotal" => $this->users->count_all(),
                        "recordsFiltered" => $this->users->count_filtered(),
                        "data" => $data,
                );
        //output to json format
        echo json_encode($output);
    }
 
    public function ajax_edit($id)
    {
        $data = $this->users->get_by_id($id);
        echo json_encode($data);
    }
 
    public function ajax_add()
    {
        $this->_validate();
        
		$data = array(
				'username'=>$this->db->escape_str($this->input->post('username')),
				'password'=>hash("sha512", md5($this->input->post('password'))),
				'nama_lengkap'=>$this->db->escape_str($this->input->post('nama_lengkap')),
				'email'=>$this->db->escape_str($this->input->post('email')),
				'level'=>$this->db->escape_str($this->input->post('level')),
				'blokir'=>'N'
		);
								
 
        if(!empty($_FILES['gambar']['name']))
        {
            $upload = $this->_do_upload();
            $data['foto'] = $upload;
        }
 
        $insert = $this->users->save($data);
 
        echo json_encode(array("status" => TRUE));
    }
 
    public function ajax_update()
    {
        $this->_validate();
        $data = array(
				'username'=>$this->db->escape_str($this->input->post('username')),
				'password'=>hash("sha512", md5($this->input->post('password'))),
				'nama_lengkap'=>$this->db->escape_str($this->input->post('nama_lengkap')),
				'email'=>$this->db->escape_str($this->input->post('email')),
				'level'=>$this->db->escape_str($this->input->post('level')),
				'blokir'=>'N'
		);
 
        if($this->input->post('remove_gambar')) // if remove gambar checked
        {
            if(file_exists('assets/foto_user/'.$this->input->post('remove_gambar')) && $this->input->post('remove_gambar'))
                unlink('assets/foto_user/'.$this->input->post('remove_gambar'));
            $data['foto'] = '';
        }
 
        if(!empty($_FILES['gambar']['name']))
        {
            $upload = $this->_do_upload();
             
            //delete file
            $users = $this->users->get_by_id($this->input->post('id_users'));
            if(file_exists('assets/foto_user/'.$users->foto) && $users->foto)
                unlink('assets/foto_user/'.$users->foto);
 
            $data['foto'] = $upload;
        }
 
        $this->users->update(array('id_users' => $this->input->post('id_users')), $data);
        echo json_encode(array("status" => TRUE));
    }
 
    public function ajax_delete($id)
    {
        //delete file
        $users = $this->users->get_by_id($id);
        if(file_exists('assets/foto_user/'.$users->foto) && $users->foto)
            unlink('assets/foto_user/'.$users->foto);
         
        $this->users->delete_by_id($id);
        echo json_encode(array("status" => TRUE));
    }
 
    private function _do_upload()
    {
        $config['upload_path']          = 'assets/foto_user/';
        $config['allowed_types']        = 'gif|jpg|png';
        $config['max_size']             = 100; //set max size allowed in Kilobyte
        $config['max_width']            = 1000; // set max width image allowed
        $config['max_height']           = 1000; // set max height allowed
        $config['file_name']            = round(microtime(true) * 1000); //just milisecond timestamp fot unique name
 
        $this->load->library('upload', $config);
 
        if(!$this->upload->do_upload('gambar')) //upload and validate
        {
            $data['inputerror'][] = 'gambar';
            $data['error_string'][] = 'Upload error: '.$this->upload->display_errors('',''); //show ajax error
            $data['status'] = FALSE;
            echo json_encode($data);
            exit();
        }
        return $this->upload->data('file_name');
    }
 
    private function _validate()
    {
        $data = array();
        $data['error_string'] = array();
        $data['inputerror'] = array();
        $data['status'] = TRUE;

        if($this->input->post('username') == '')
        {
            $data['inputerror'][] = 'username';
            $data['error_string'][] = 'This field is required';
            $data['status'] = FALSE;
        }
 
        if($this->input->post('password') == '')
        {
            $data['inputerror'][] = 'password';
            $data['error_string'][] = 'This field is required';
            $data['status'] = FALSE;
        }
 
        if($this->input->post('nama_lengkap') == '')
        {
            $data['inputerror'][] = 'nama_lengkap';
            $data['error_string'][] = 'This field is required';
            $data['status'] = FALSE;
        }
 
        if($this->input->post('level') == '')
        {
            $data['inputerror'][] = 'level';
            $data['error_string'][] = 'Please select role';
            $data['status'] = FALSE;
        }
 
        if($data['status'] === FALSE)
        {
            echo json_encode($data);
            exit();
        }
    }
 
	
	
}
?>