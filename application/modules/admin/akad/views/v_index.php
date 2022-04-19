<?php
  $cek = user_akses2('akad',$this->session->level);
   if ($cek['tampil']=='1'){
echo"<div class='container-fluid'>
		<!-- Page Heading -->
		<h1 class='h3 mb-2 text-gray-800'>Akad & Resepsi</h1>
		<div class='card shadow mb-4'>
			<div class='card-header py-2'>
				Ubah Data
			</div>
			<div class='card-body'>
			
			
			
			
			";
          echo'<form method="post" role="form" action="'.base_url().'akad" enctype="multipart/form-data">
                  <div class="row">
                    <div class="col-sm-6">
                      <!-- text input -->
                      <div class="form-group">
                        <div class="alert alert-warning" role="alert">
                        Bagian Akad
                        </div>
                        <label>Hari / Tanggal Akad</label>
                        <p class="font-italic ">*Contoh: Sabtu, 26 Desember 2021</p>
                        <input type="text" class="form-control" name="tanggal_akad" value ="'.$record['tanggal_akad'].'" placeholder="Enter ...">
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">    
                        <div class="alert alert-success" role="alert">
                        Bagian Resepsi
                        </div>
                        <label>Hari / Tanggal Resepsi</label>
                        <p class="font-italic ">*Contoh: Sabtu, 26 Desember 2021</p> 
                        <input type="text" class="form-control" name="tanggal_resepsi" value ="'.$record['tanggal_resepsi'].'" placeholder="Enter ...">
                      </div>
                    </div>
                  </div>
                  
				  <div class="row">
                    <div class="col-sm-6">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Waktu Akad</label>
                        <p class="font-italic ">*Contoh: Pukul 08.00 WIB s.d 10.00 WIB</p>  
                        <input type="text" class="form-control" name="waktu_akad" value ="'.$record['waktu_akad'].'" placeholder="Enter ...">
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">                         
                        <label>Waktu Resepsi</label>
                        <p class="font-italic ">*Contoh: Pukul 10.00 WIB s.d 13.00 WIB</p>  
                        <input type="text" class="form-control" name="waktu_resepsi" value ="'.$record['waktu_resepsi'].'" placeholder="Enter ...">
                      </div>
                    </div>
                  </div>
                                    <div class="row">
                    <div class="col-sm-6">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Tempat Dilaksanakan Akad</label>
                        <p class="font-italic ">*Contoh: AUDITORIUM MASJID ASSALAM</p>  
                        <input type="text" class="form-control" name="tempat_akad" value ="'.$record['tempat_akad'].'" placeholder="Enter ...">
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">                         
                        <label>Tempat Dilaksanakan Resepsi</label>
                        <p class="font-italic ">*Contoh: GRAHA SABA PERMANA</p>  
                        <input type="text" class="form-control" name="tempat_resepsi" value ="'.$record['tempat_resepsi'].'" placeholder="Enter ...">
                      </div>
                    </div>
                  </div>
				  
				  
				          <div class="row">
                    <div class="col-sm-6">
                      <!-- textarea -->
                      <div class="form-group">
                        <label>Alamat Tempat Dilaksanakan Akad</label>
                        <p class="font-italic ">*Contoh: Jalan A dekat Rumah Makan B Gedung C</p>  
                        <textarea class="form-control" rows="3" name="alamat_akad" placeholder="Enter ...">'.$record['alamat_akad'].'</textarea>
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Alamat Tempat Dilaksanakan Resepsi</label>
                        <p class="font-italic ">*Contoh: Jalan A dekat Rumah Makan B Gedung C</p>  
                        <textarea class="form-control" rows="3" name="alamat_resepsi" placeholder="Enter ...">'.$record['alamat_resepsi'].'</textarea>
                      </div>
                    </div>
                  </div>
				  
				  
				  
				          <div class="row">
                    <div class="col-sm-6">
                      <!-- textarea -->
                      <div class="form-group">
                        <label>Tempat Akad (Embeded Url)</label>
                        <p class="font-italic ">*Contoh: https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d5754....</p>  
                        <textarea class="form-control" rows="3" name="maps_akad" placeholder="Enter ...">'.$record['maps_akad'].'</textarea>
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Tempat Resepsi (Embeded Url)</label>
                        <p class="font-italic ">*Contoh: https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d5754....</p>    
                        <textarea class="form-control" rows="3" name="maps_resepsi" placeholder="Enter ...">'.$record['maps_resepsi'].'</textarea>
                      </div>
                    </div>
                  </div>
				  
				  
				  <div class="row">
                    <div class="col-sm-6">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Link Maps Akad</label>
                        <p class="font-italic ">*Contoh: https://goo.gl/maps/QYcttmRoLPgbP55o9</p>  
                        <input type="text" class="form-control" name="url_maps_akad" value ="'.$record['url_maps_akad'].'" placeholder="Enter ...">
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">                         
                        <label>Link Maps Resepsi</label>
                        <p class="font-italic ">*Contoh: https://goo.gl/maps/QYcttmRoLPgbP55o9</p>  
                        <input type="text" class="form-control" name="url_maps_resepsi" value ="'.$record['url_maps_resepsi'].'" placeholder="Enter ...">
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

	
