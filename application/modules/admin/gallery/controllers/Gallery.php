<?php 
class Gallery extends MX_Controller
{
    
    function __construct()
    {
        parent::__construct();
		$this->load->model('gallery_model','gallery');
		
    }

    function index()
    {
		if (isset($_POST['submit'])){
			$this->gallery->gallery_status_update();
			redirect(base_url().'gallery');
		}else{
			$data['record'] = $this->gallery->get_gallery_status()->row_array();
			$data['title'] ='gallery';
			$data['roles'] = $this->db->query("SELECT * FROM role WHERE status='Y'")->result();
			echo modules::run('template_backend/loadview', $data, 'gallery/v_gallery');
		}
		
		
    }
	
	public function ajax_list()
    {
        $list = $this->gallery->get_datatables();
        $data = array();
        $no = $_POST['start'];
        foreach ($list as $gallery) {
            $no++;
            $row = array();
            $row[] = $gallery->nama;
            if($gallery->foto){
                $row[] = '<a href="'.base_url('assets/foto_user/'.$gallery->foto).'" target="_blank"><img src="'.base_url('assets/foto_gallery/'.$gallery->foto).'" class="img-fluid img-thumbnail" width="50px"/></a>';
            }else{
                $row[] = '(No gambar)';
			}
 
           
            $cek = user_akses2('gallery',$this->session->level);
		if ($cek['ubah']=='1' && $cek['hapus']=='0'){
			$row[] = '<div align="center"><a href="javascript:void(0)" title="Edit" onclick="edit_gallery('."'".$gallery->id_gallery."'".')"><i class="fa fa-edit"></i></a></div>
				  ';
		} elseif ($cek['hapus']=='1' && $cek['ubah']=='0'){
			$row[] = '<div align="center"><a href="javascript:void(0)" title="Hapus" onclick="delete_gallery('."'".$gallery->id_gallery."'".')"><i class="fa fa-trash"></i></a></div>
				  ';
		} elseif ($cek['hapus']=='1' && $cek['ubah']=='1'){
			$row[] = '<div align="center"><a href="javascript:void(0)" title="Edit" onclick="edit_gallery('."'".$gallery->id_gallery."'".')"><i class="fa fa-edit"></i></a>
				  <a href="javascript:void(0)" title="Hapus" onclick="delete_gallery('."'".$gallery->id_gallery."'".')"><i class="fa fa-trash"></i></a></div>
				  ';
		} else {
			$row[] = '';
		}
		
			$data[] = $row;
        }
 
        $output = array(
                        "draw" => $_POST['draw'],
                        "recordsTotal" => $this->gallery->count_all(),
                        "recordsFiltered" => $this->gallery->count_filtered(),
                        "data" => $data,
                );
        //output to json format
        echo json_encode($output);
    }
 
    public function ajax_edit($id)
    {
        $data = $this->gallery->get_by_id($id);
        echo json_encode($data);
    }
 
    public function ajax_add()
    {
        $this->_validate();
        
		$data = array(
				'nama'=>$this->db->escape_str($this->input->post('nama'))
		);
								
 
        if(!empty($_FILES['gambar']['name']))
        {
            $upload = $this->_do_upload();
            $data['foto'] = $upload;
        }
 
        $insert = $this->gallery->save($data);
 
        echo json_encode(array("status" => TRUE));
    }
 
    public function ajax_update()
    {
        $this->_validate();
        $data = array(
				'nama'=>$this->db->escape_str($this->input->post('nama'))
		);
 
        if($this->input->post('remove_gambar')) // if remove gambar checked
        {
            if(file_exists('assets/foto_gallery/'.$this->input->post('remove_gambar')) && $this->input->post('remove_gambar'))
                unlink('assets/foto_gallery/'.$this->input->post('remove_gambar'));
            $data['foto'] = '';
        }
 
        if(!empty($_FILES['gambar']['name']))
        {
            $upload = $this->_do_upload();
             
            //delete file
            $gallery = $this->gallery->get_by_id($this->input->post('id_gallery'));
            if(file_exists('assets/foto_gallery/'.$gallery->foto) && $gallery->foto)
                unlink('assets/foto_gallery/'.$gallery->foto);
 
            $data['foto'] = $upload;
        }
 
        $this->gallery->update(array('id_gallery' => $this->input->post('id_gallery')), $data);
        echo json_encode(array("status" => TRUE));
    }
 
    public function ajax_delete($id)
    {
        //delete file
        $gallery = $this->gallery->get_by_id($id);
        if(file_exists('assets/foto_gallery/'.$gallery->foto) && $gallery->foto)
            unlink('assets/foto_gallery/'.$gallery->foto);
         
        $this->gallery->delete_by_id($id);
        echo json_encode(array("status" => TRUE));
    }
 
    private function _do_upload()
    {
        $config['upload_path']          = 'assets/foto_gallery/';
        $config['allowed_types']        = 'gif|jpg|png|jpeg';
        $config['max_size']             = ''; //set max size allowed in Kilobyte
        $config['max_width']            = 1280; // set max width image allowed
        $config['max_height']           = 1280; // set max height allowed
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

        if($this->input->post('nama') == '')
        {
            $data['inputerror'][] = 'nama';
            $data['error_string'][] = 'This field is required';
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