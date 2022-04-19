<?php
  $cek = user_akses2('photo_wanita',$this->session->level);
   if ($cek['tampil']=='1'){
echo"<div class='container-fluid'>
		<!-- Page Heading -->
		<h1 class='h3 mb-2 text-gray-800'>Photo Mempelai Wanita</h1>
		<div class='card shadow mb-4'>
			<div class='card-header py-2'>
				Upload Foto
			</div>
			<div class='card-body'>
			
			
			
			
			";
          echo'<form method="post" role="form" action="'.base_url().'photo_wanita" enctype="multipart/form-data">
                  <div class="row">
				  <div class="col-sm-12">
				  
				 
			
                      <div class="form-group">                         
                       <label for="file">Upload Dengan Eksistensi jpg, jpeg, png (Max 1Mb)</label>
                <p class="font-italic ">*Upload dengan Ukuruan 600x600 Pixel</p> 
						<input type="file" class="form-control" name="photo_wanita" value="'.$record['photo_wanita'].'">
						<br/>
						Current Image : <br/><img src="'.base_url().'assets/front_image/'.$record['photo_wanita'].'" class="img-thumbnail">
							
							
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

	
