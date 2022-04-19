<?php
  $cek = user_akses2('rsvp',$this->session->level);
   if ($cek['tampil']=='1'){
echo"<form method='post'action='".base_url()."rsvp'>
                  
                  
				  <div class='container-fluid'>
		<!-- Page Heading -->
		<h1 class='h3 mb-2 text-gray-800'>RSVP & Ucapan Selamat</h1>
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
                        <label>Whatsapp Pria</label> 
                        <input type="number" class="form-control" name="wa_pria" value ="'.$record['wa_pria'].'" placeholder="Enter ...">
                      </div>
                      </div>
					  
					  <div class="col-sm-6">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Whatsapp Wanita</label> 
                        <input type="number" class="form-control" name="wa_wanita" value ="'.$record['wa_wanita'].'" placeholder="Enter ...">
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

	
