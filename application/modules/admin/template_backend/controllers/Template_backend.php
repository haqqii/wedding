<?php
class Template_backend extends MX_Controller
{
    function __construct()
    {
     parent::__construct();
    }
    
    function loadview($data=NULL,$page = NULL)
    {
		if ($this->session->username=='' AND $this->session->nama_lengkap=='' AND $this->session->level=='')
		{
			redirect(base_url().'');
		}else
		{
			$this->load->view('v_header',$data);  
			$this->load->view('v_content',$data); 
			if($page != NULL)
			{
			  $this->load->view($page,$data);
			} else {
			  $this->load->view('v_content',$data);
			}
			  $this->load->view('v_footer',$data);
		}
    }
}
?>