<?php 
    // melihat hak akses user
    function user_akses($modul,$user){
        $ci = & get_instance();
    	$session = $ci->db->query("SELECT * FROM user_modul WHERE id_modul='$modul' AND id_user='$user'")->row_array();
		 return !empty($session)?$session:false;
    }
	
	 // melihat hak akses user
    function user_akses2($modul,$user){
        $ci = & get_instance();
    	$session = $ci->db->query("SELECT * FROM user_modul a 
								   INNER JOIN modul b ON a.id_modul=b.id_modul 
								   WHERE b.link='$modul' AND a.id_user='$user'")->row_array();
		 return !empty($session)?$session:false;
    }
	

	
	
    function cek_session_admin(){
        $ci = & get_instance();
        $session = $ci->session->userdata('level');
        if ($session != 'admin'){
            redirect(base_url());
        }
    }
	
	

    function tgl_indo($tgl){
            $tanggal = substr($tgl,8,2);
            $bulan = getBulan(substr($tgl,5,2));
            $tahun = substr($tgl,0,4);
            return $tanggal.' '.$bulan.' '.$tahun;       
    } 


    function getBulan($bln){
                switch ($bln){
                    case 1: 
                        return "Jan";
                        break;
                    case 2:
                        return "Feb";
                        break;
                    case 3:
                        return "Mar";
                        break;
                    case 4:
                        return "Apr";
                        break;
                    case 5:
                        return "Mei";
                        break;
                    case 6:
                        return "Jun";
                        break;
                    case 7:
                        return "Jul";
                        break;
                    case 8:
                        return "Agu";
                        break;
                    case 9:
                        return "Sep";
                        break;
                    case 10:
                        return "Okt";
                        break;
                    case 11:
                        return "Nov";
                        break;
                    case 12:
                        return "Des";
                        break;
                }
            } 

	
	function hari_ini($w){
        $seminggu = array("Minggu","Senin","Selasa","Rabu","Kamis","Jumat","Sabtu");
        $hari_ini = $seminggu[$w];
        return $hari_ini;
    }
	
	function seo_title($s) {
        $c = array (' ');
        $d = array ('-','/','\\',',','.','#',':',';','\'','"','[',']','{','}',')','(','|','`','~','!','@','%','$','^','&','*','=','?','+','–');
        $s = str_replace($d, '', $s); // Hilangkan karakter yang telah disebutkan di array $d
        $s = strtolower(str_replace($c, '-', $s)); // Ganti spasi dengan tanda - dan ubah hurufnya menjadi kecil semua
        return $s;
    }
	
	function tgl_grafik($tgl){
            $tanggal = substr($tgl,8,2);
            $bulan = getBulan(substr($tgl,5,2));
            $tahun = substr($tgl,0,4);
            return $tanggal.'_'.$bulan;       
    }   
	
	function rupiah($total){
        return number_format($total,0);
    }
	
	function filter($str){
        return strip_tags(htmlentities($str, ENT_QUOTES, 'UTF-8'));
    }
	
	function buatkode($nomor_terakhir, $kunci, $jumlah_karakter = 0)
	{
		$nomor_baru = intval(substr($nomor_terakhir, strlen($kunci))) + 1;
		$nomor_baru_plus_nol = str_pad($nomor_baru, $jumlah_karakter, "0", STR_PAD_LEFT);
		$kode = $kunci . $nomor_baru_plus_nol;
		return $kode;
	}
	
	
	function title(){
        $ci = & get_instance();
        $title = $ci->db->query("SELECT nama_website FROM identitas ORDER BY id_identitas DESC LIMIT 1")->row_array();
        return $title['nama_website'];
    }



    function favicon(){
        $ci = & get_instance();
        $fav = $ci->db->query("SELECT favicon FROM identitas ORDER BY id_identitas DESC LIMIT 1")->row_array();
        return $fav['favicon'];
    }
	
	
	
	
	
	
	
	