<?php
  $cek = user_akses2('musik',$this->session->level);
   if ($cek['tampil']=='1'){
echo"<div class='container-fluid'>
		<!-- Page Heading -->
		<h1 class='h3 mb-2 text-gray-800'>Audio</h1>
		<div class='card shadow mb-4'>
			<div class='card-header py-2'>
				Upload Musik Audio
			</div>
			<div class='card-body'>
			
			
			
			
			";
          echo'<form method="post" role="form" action="'.base_url().'musik" enctype="multipart/form-data">
                  <div class="row">
				  <div class="col-sm-12">
				  
				 
			
                      <div class="form-group">                         
						<input type="file" class="form-control" name="judul" value="'.$record['judul'].'">
						<br/>
						Current Audio : <br/>
						<div class="musik mt-3 mb-3">
										<audio controls autoplay>
						  <source src="'.base_url().'assets/front_audio/'.$record['judul'].'" type="audio/mpeg">
						Your browser does not support the audio element.
						</audio>	
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

	
