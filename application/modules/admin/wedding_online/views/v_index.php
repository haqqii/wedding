<?php
  $cek = user_akses2('wedding_online',$this->session->level);
   if ($cek['tampil']=='1'){
echo"<form method='post'action='".base_url()."wedding_online'>
                  
                  
				  <div class='container-fluid'>
		<!-- Page Heading -->
		<h1 class='h3 mb-2 text-gray-800'>Wedding Online</h1>
		<div class='card shadow mb-4'>
			<div class='card-header py-2'>
				<div class='form-check'>";
				 if ($record['status'] == "aktif")
				  {
					echo"<input type='checkbox' class='form-check-input' name='status' checked value='tidak'>";
				  } else {
					echo"<input type='checkbox' class='form-check-input' name='status' value='aktif'>";
				  }
					echo"<label class='form-check-label' for='exampleCheck1'>Tampilkan</label>
				  </div>
			</div>
			<div class='card-body'>
			
			
			
			
			";
          echo'
				  <div class="row">
                    <div class="col-sm-6">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Zoom Url</label>
                        <p class="font-italic ">*Contoh: https://zoom.us/signin</p>  
                        <input type="text" class="form-control" name="zoom_url" value ="'.$record['zoom_url'].'" placeholder="Enter ...">
                      </div>
                    </div>
                   
				   
                  </div>
                                    
                 
                  <button class="btn btn-primary" type="submit" name="submit">Submit</button>
                ';

				
				
				

              echo"</div>
		</div>
	</div><!-- /.container-fluid -->
	</form>";
}
?>


<!-- Bootstrap core JavaScript-->
    <script src="<?php echo base_url(); ?>assets/back_end/vendor/jquery/jquery.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/back_end/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="<?php echo base_url(); ?>assets/back_end/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="<?php echo base_url(); ?>assets/back_end/js/sb-admin-2.min.js"></script>

	
