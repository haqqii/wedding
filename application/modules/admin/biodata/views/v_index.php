<?php
  $cek = user_akses2('identitas',$this->session->level);
   if ($cek['tampil']=='1'){
echo"<div class='container-fluid'>
		<!-- Page Heading -->
		<h1 class='h3 mb-2 text-gray-800'>Front Home</h1>
		<div class='card shadow mb-4'>
			<div class='card-header py-2'>
				Ubah Data
			</div>
			<div class='card-body'>
			
			
			
			
			";
          echo'<form method="post" role="form" action="'.base_url().'biodata" enctype="multipart/form-data">
                  <div class="row">
                    <div class="col-sm-6">
                      <!-- text input -->
                      <div class="form-group">
                        <div class="alert alert-warning" role="alert">
                        Mempelai Pria
                        </div>
                        <label>Nama Panggilan Mempelai Pria</label>
                        <p class="font-italic ">*Contoh: Awan</p>
                        <input type="text" class="form-control" name="nama_panggilan_pria" value ="'.$record['nama_panggilan_pria'].'" placeholder="Enter ...">
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">    
                        <div class="alert alert-success" role="alert">
						Mempelai Wanita
                        </div>
                        <label>Nama Panggilan Mempelai Wanita</label>
                        <p class="font-italic ">*Contoh: Pelangi</p> 
                        <input type="text" class="form-control" name="nama_panggilan_wanita" value ="'.$record['nama_panggilan_wanita'].'" placeholder="Enter ...">
                      </div>
                    </div>
                  </div>
                                    <div class="row">
                    <div class="col-sm-6">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Nama Lengkap Mempelai Pria</label>
                        <p class="font-italic ">*Contoh: Awan Cahya Pagi, S.Tr.Ds</p>  
                        <input type="text" class="form-control" name="nama_lengkap_pria" value ="'.$record['nama_lengkap_pria'].'" placeholder="Enter ...">
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">                         
                        <label>Nama Lengkap Mempelai Wanita</label>
                        <p class="font-italic ">*Contoh: Pelangi Dwi Putri, S.Tr.Ds</p>  
                        <input type="text" class="form-control" name="nama_lengkap_wanita" value ="'.$record['nama_lengkap_wanita'].'" placeholder="Enter ...">
                      </div>
                    </div>
                  </div>
                                    <div class="row">
                    <div class="col-sm-6">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Bio Mempelai Pria</label>
                        <p class="font-italic ">*Contoh: Putra dari Bapak Semesta & Ibu Embun Bening</p>  
                        <input type="text" class="form-control" name="nama_orangtua_mempelai_pria" value ="'.$record['nama_orangtua_mempelai_pria'].'" placeholder="Enter ...">
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">                         
                        <label>Bio Mempelai Wanita</label>
                        <p class="font-italic ">*Contoh: Putri dari Bapak Derajat & Ibu Sagriya Putri</p>  
                        <input type="text" class="form-control" name="nama_orangtua_mempelai_wanita" value ="'.$record['nama_orangtua_mempelai_wanita'].'" placeholder="Enter ...">
                      </div>
                    </div>
                  </div>
				  
				  <div class="col-sm-12">
                      <div class="form-group">                         
                        <label>Foto Bersama</label>
						
						<input type="file" class="form-control" name="photo" value="'.$record['photo'].'">
						Current Image : <br/><img src="'.base_url().'assets/front_image/'.$record['photo'].'" class="img-thumbnail">
							
							
                    </div>
                  </div>
                                   
                    </div>
                  </div>
                  <button class="btn btn-primary" type="submit" name="submit">Submit</button>
                </form>';

				
				
				

              echo"</div>
		</div>
	</div><!-- /.container-fluid -->
	";
}
?>


<!-- Bootstrap core JavaScript-->
    <script src="<?php echo base_url(); ?>assets/back_end/vendor/jquery/jquery.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/back_end/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="<?php echo base_url(); ?>assets/back_end/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="<?php echo base_url(); ?>assets/back_end/js/sb-admin-2.min.js"></script>

	
