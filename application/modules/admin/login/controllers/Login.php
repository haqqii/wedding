<?php 
class Login extends MX_Controller
{
    
    function __construct()
    {
        parent::__construct();
		$this->load->model('login_model','login');
    }

   
	function index(){
		 
		if (isset($_POST['submit'])){
			if ($this->input->post()) {
                $username = $this->input->post('username');
				$password = hash("sha512", md5($this->input->post('password')));
    			$cek = $this->login->cek_login($username,$password,'users');
    		    $row = $cek->row_array();
    		    $total = $cek->num_rows();
    			if ($total > 0){
    				$this->session->set_userdata(
						array(
						   'id_users'=>$row['id_users'],
						   'username'=>$row['username'],
						   'nama_lengkap'=>$row['nama_lengkap'],
						   'level'=>$row['level']
						   )
					);
    				redirect(base_url().'home');
    			}else{
                    echo $this->session->set_flashdata('message', '<div class="alert alert-danger"><center>Username dan Password Salah!!</center></div>');
    				redirect(base_url().'login');
    			}
            }
		}else{
            if ($this->session->id_users!='' AND $this->session->username!='' AND $this->session->nama_lengkap!='' AND $this->session->level!=''){
              redirect(base_url().'home');
            }else{
               
    			$data['title'] = 'Administrator &rsaquo; Log In';
				$this->load->view('login/v_login',$data);
            }
		}
	}
	
	
	public function logout()
	{
	$this->session->sess_destroy();
		redirect(base_url());	
	}
	
	
	
	
	
}
?>