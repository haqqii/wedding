<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Story extends MX_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('story_model','story');
	}

	public function index()
	{
		
		if (isset($_POST['submit'])){
			$this->story->story_status_update();
			redirect(base_url().'story');
		}else{
			$data['record'] = $this->story->get_story_status()->row_array();
			echo modules::run('template_backend/loadview', $data, 'story/v_story');
		}
		
		
	}

	public function ajax_list()
	{
		$list = $this->story->get_datatables();
		$data = array();
		$no = $_POST['start'];
		foreach ($list as $story) {
			$no++;
			$row = array();
			$row[] = $story->tahun;
			$row[] = $story->nm_story;
			$cek = user_akses2('story',$this->session->level);
			if ($cek['ubah']=='1' && $cek['hapus']=='0'){
				$row[] = '<a href="javascript:void(0)" title="Edit" onclick="edit_story('."'".$story->id_story."'".')"><i class="fa fa-edit"></i></a>
					  ';
			} elseif ($cek['hapus']=='1' && $cek['ubah']=='0'){
				$row[] = '<a href="javascript:void(0)" title="Hapus" onclick="delete_story('."'".$story->id_story."'".')"><i class="fa fa-trash"></i></a>
					  ';
			} elseif ($cek['hapus']=='1' && $cek['ubah']=='1'){
				$row[] = '<center><a href="javascript:void(0)" title="Edit" onclick="edit_story('."'".$story->id_story."'".')"><i class="fa fa-edit"></i></a>
					  <a href="javascript:void(0)" title="Hapus" onclick="delete_story('."'".$story->id_story."'".')"><i class="fa fa-trash"></i></a></center>
					 ';
			} else {
				$row[] = '';
			}
				 
		$data[] = $row;
		}

		$output = array(
						"draw" => $_POST['draw'],
						"recordsTotal" => $this->story->count_all(),
						"recordsFiltered" => $this->story->count_filtered(),
						"data" => $data,
				);
		//output to json format
		echo json_encode($output);
	}

	public function ajax_edit($id_story)
	{
		$data = $this->story->get_by_id_story($id_story);
		echo json_encode($data);
	}

	public function ajax_add()
	{
		$this->_validate();
		$data = array(
				'tahun' => $this->input->post('tahun'),
				'nm_story' => $this->input->post('nm_story'),
				'status' => 'Y'
			);
		$insert = $this->story->save($data);
		echo json_encode(array("status" => TRUE));
	}

	public function ajax_update()
	{
		$this->_validate();
		$data = array(
				'tahun' => $this->input->post('tahun'),
				'nm_story' => $this->input->post('nm_story')
			);
		//Where
		$this->story->update(array('id_story' => $this->input->post('id_story')), $data);
		echo json_encode(array("status" => TRUE));
	}

	public function ajax_delete($id_story)
	{	
		$data = array(
				'status' => 'N'
			);
		$this->story->update(array('id_story' => $id_story), $data);
		echo json_encode(array("status" => TRUE));
	}


	private function _validate()
	{
		$data = array();
		$data['error_string'] = array();
		$data['inputerror'] = array();
		$data['status'] = TRUE;

		if($this->input->post('nm_story') == '')
		{
			$data['inputerror'][] = 'nm_story';
			$data['error_string'][] = 'Field ini harus di isi';
			$data['status'] = FALSE;
		}
		
		
		if($this->input->post('tahun') == '')
		{
			$data['inputerror'][] = 'tahun';
			$data['error_string'][] = 'Field ini harus di isi';
			$data['status'] = FALSE;
		}
		
		
		
		if($data['status'] === FALSE)
		{
			echo json_encode($data);
			exit();
		}
	}
	
	

}
