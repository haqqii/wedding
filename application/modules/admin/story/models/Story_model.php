<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Story_model extends CI_Model {

	var $table = 'story';
	var $column_order = array('id_story','nm_story'); 
	var $column_search = array('id_story','nm_story'); 
	var $order = array('id_story' => 'desc'); 

	public function __construct()
	{
		parent::__construct();
	}

	private function _get_datatables_query()
	{
		$this->db->from($this->table);
		$this->db->where('status="Y"');

		$i = 0;
	
		foreach ($this->column_search as $item)
		{
			if($_POST['search']['value'])
			{
				
				if($i===0) // first loop
				{
					$this->db->group_start();
					$this->db->like($item, $_POST['search']['value']);
				}
				else
				{
					$this->db->or_like($item, $_POST['search']['value']);
				}

				if(count($this->column_search) - 1 == $i)
					$this->db->group_end(); 
			}
			$i++;
		}
		
		if(isset($_POST['order'])) 
		{
			$this->db->order_by($this->column_order[$_POST['order']['0']['column']], $_POST['order']['0']['dir']);
		} 
		else if(isset($this->order))
		{
			$order = $this->order;
			$this->db->order_by(key($order), $order[key($order)]);
		}
	}

	function get_datatables()
	{
		$this->_get_datatables_query();
		if($_POST['length'] != -1)
		$this->db->limit($_POST['length'], $_POST['start']);
		$query = $this->db->get();
		return $query->result();
	}

	function count_filtered()
	{
		$this->_get_datatables_query();
		$query = $this->db->get();
		return $query->num_rows();
	}

	public function count_all()
	{
		$this->db->from($this->table);
		return $this->db->count_all_results();
	}

	public function get_by_id_story($id_story)
	{
		$this->db->from($this->table);
		$this->db->where('id_story',$id_story);
		$query = $this->db->get();

		return $query->row();
	}

	public function save($data)
	{
		$this->db->insert($this->table, $data);
		return $this->db->insert_id();
	}

	public function update($where, $data)
	{
		$this->db->update($this->table, $data, $where);
		return $this->db->affected_rows();
	}

	public function delete_by_kd_story($kd_story)
	{
		$this->db->where('kd_story', $kd_story);
		$this->db->delete($this->table);
	}
	
	
	function get_story_status(){
        return $this->db->query("SELECT * FROM story_status ORDER BY id DESC LIMIT 1");
    }
	
	
	function story_status_update(){
		
		if (isset($_POST['status'])) {
			$status = "aktif";
		} else {
			$status = "tidak";
		}
		
		
            $config['upload_path'] = 'assets/front_image/';
            $config['allowed_types'] = 'gif|jpg|png|jpeg';
            $config['max_size'] = '1000'; // kb
			$config['overwrite'] = false;
			$config['encrypt_name'] = TRUE;
            $this->load->library('upload', $config);
            $this->upload->do_upload('photo');
            $hasil=$this->upload->data();

            if ($hasil['file_name']==''){
                    $datadb = array(
						'status'=>$status,
					);
            }else{
                    $datadb = array(
						'photo'=>$hasil['file_name'],
						'status'=>$status,
					);
            }
            $this->db->where('id',1);
            $this->db->update('story_status',$datadb);
    }


}
