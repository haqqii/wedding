<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Role extends MX_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('role_model','role');
	}

	public function index()
	{
		$data['title'] = "role";
		echo modules::run('template_backend/loadview', $data, 'role/v_role');
	}

	public function ajax_list()
	{
		$list = $this->role->get_datatables();
		$data = array();
		$no = $_POST['start'];
		foreach ($list as $role) {
			$no++;
			$row = array();
			$row[] = $role->nm_role;
			$cek = user_akses2('role',$this->session->level);
			if ($cek['ubah']=='1' && $cek['hapus']=='0'){
				$row[] = '<a href="javascript:void(0)" title="Edit" onclick="edit_role('."'".$role->id_role."'".')"><i class="fa fa-edit"></i></a>
					  ';
			} elseif ($cek['hapus']=='1' && $cek['ubah']=='0'){
				$row[] = '<a href="javascript:void(0)" title="Hapus" onclick="delete_role('."'".$role->id_role."'".')"><i class="fa fa-trash"></i></a>
					  ';
			} elseif ($cek['hapus']=='1' && $cek['ubah']=='1'){
				$row[] = '<center>
					  <a href="javascript:void(0)" title="Edit" onclick="window.location.href=\''.base_url().'role/role_access/'.base64_encode($role->id_role).'\';return false;"><i class="fa fa-eye"></i></a>
					  <a href="javascript:void(0)" title="Edit" onclick="edit_role('."'".$role->id_role."'".')"><i class="fa fa-edit"></i></a>
					  <a href="javascript:void(0)" title="Hapus" onclick="delete_role('."'".$role->id_role."'".')"><i class="fa fa-trash"></i></a></center>
					 ';
			} else {
				$row[] = '';
			}
				 
		$data[] = $row;
		}

		$output = array(
						"draw" => $_POST['draw'],
						"recordsTotal" => $this->role->count_all(),
						"recordsFiltered" => $this->role->count_filtered(),
						"data" => $data,
				);
		//output to json format
		echo json_encode($output);
	}

	public function ajax_edit($id_role)
	{
		$data = $this->role->get_by_id_role($id_role);
		echo json_encode($data);
	}

	public function ajax_add()
	{
		$this->_validate();
		$data = array(
				'nm_role' => $this->input->post('nm_role'),
				'status' => 'Y'
			);
		$insert = $this->role->save($data);
		echo json_encode(array("status" => TRUE));
	}

	public function ajax_update()
	{
		$this->_validate();
		$data = array(
				'nm_role' => $this->input->post('nm_role')
			);
		//Where
		$this->role->update(array('id_role' => $this->input->post('id_role')), $data);
		echo json_encode(array("status" => TRUE));
	}

	public function ajax_delete($id_role)
	{	
		$data = array(
				'status' => 'N'
			);
		$this->role->update(array('id_role' => $id_role), $data);
		echo json_encode(array("status" => TRUE));
	}


	private function _validate()
	{
		$data = array();
		$data['error_string'] = array();
		$data['inputerror'] = array();
		$data['status'] = TRUE;

		if($this->input->post('nm_role') == '')
		{
			$data['inputerror'][] = 'nm_role';
			$data['error_string'][] = 'Field ini harus di isi';
			$data['status'] = FALSE;
		}
		
		
		
		if($data['status'] === FALSE)
		{
			echo json_encode($data);
			exit();
		}
	}
	
	 function role_access(){
		if (isset($_POST['submit'])){
		
		$mod=count($this->input->post('modul'));
		$modul=$this->input->post('modul');
		$id_user2=base64_encode($this->input->post('id_user'));
		
		//mendapatkan value array yang dikirim dari form
		//start for looping
		for($i=0;$i<$mod;$i++){
		$xxx = $modul[$i];
		
		//mendapatkan value checkbox
		$tampil = isset($_POST['tampil-'.$xxx]) ? $_POST['tampil-'.$xxx] : '';
		$tambah = isset($_POST['tambah-'.$xxx]) ? $_POST['tambah-'.$xxx] : '';
		$ubah 	= isset($_POST['ubah-'.$xxx])   ? $_POST['ubah-'.$xxx]   : '';
		$hapus 	= isset($_POST['hapus-'.$xxx])  ? $_POST['hapus-'.$xxx]  : '';
		$posting= isset($_POST['posting-'.$xxx])  ? $_POST['posting-'.$xxx]  : '';
		
		
		if($tampil=='on'){$tampil=1;}else{$tampil=0;}
		if($tambah=='on'){$tambah=1;}else{$tambah=0;}
		if($ubah  =='on'){$ubah  =1;}else{$ubah  =0;}
		if($hapus =='on'){$hapus =1;}else{$hapus =0;}
		if($posting =='on'){$posting =1;}else{$posting =0;}
		
		//cek apakah sudah diinput sebelumnya ?
		$cek = $this->model_app->view_where('user_modul', array('id_user'=>$this->input->post('id_user'),'id_modul' =>$modul[$i]))->num_rows(); 
		if ($cek == 0){	
		//jika belum ada ditabel user_modul maka di input dulu	
		//insert data
		$datam = array('id_user'=>$this->input->post('id_user'),
					   'id_modul'=>$modul[$i],'tampil'=>$tampil,
					   'tambah'=>$tambah, 'ubah'=>$ubah,'hapus' => $hapus,'posting' => $posting);
		$this->model_app->insert('user_modul',$datam);	
		} else {
		//jika sudah ada ditabel user_modul maka cukup update	
		//update data
		$datam = array('tampil'=>$tampil,
					   'tambah'=>$tambah, 'ubah'=>$ubah,'hapus' => $hapus,'posting' => $posting);
					   
		$where = array('id_user'=>$this->input->post('id_user'),
					   'id_modul'=>$modul[$i]);
		$this->model_app->update('user_modul', $datam, $where);	
		}
		
		} 
		
		redirect(base_url().'/role/role_access/'.$id_user2);
		
		}else{
		$proses = $this->model_app->view_where_ordering('modul', array('aktif' => 'Y'), 'id_modul','ASC');
		$data = array('record' => $proses);
		echo modules::run('template_backend/loadview', $data, 'role/v_role_access');
		}
	}
	
	

}
