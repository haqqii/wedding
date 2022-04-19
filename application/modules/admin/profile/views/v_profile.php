
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h3 class="m-0 text-dark">User's Profile</h3>
          </div><!-- /.col -->
          <div class="col-sm-6">
            
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
	  <div class="row">
 
 	 <div class="col-md-12">
	<?php 
 	echo $this->session->flashdata('message');
 	$usr = $this->db->query("SELECT * from users a WHERE a.username='".$this->session->username."'") ->row_array();
 	if (trim($usr['foto'])==''){ $foto = 'blank.png'; }else{ $foto = $usr['foto']; } 
	?>	
	  <!-- Profile Image -->
            <div class="card card-primary card-outline">
              <div class="card-body box-profile">
			  
                <div class="text-center">
                  <img class="profile-user-img img-fluidimg-responsive"
                       src="<?php echo base_url(); ?>/assets/foto_user/<?php echo $foto; ?>"
                       alt="User profile picture" style="width: 200px;">
                </div>

                <h3 class="profile-username text-center"><?php echo $usr['nama_lengkap'];?></h3>

                <p class="text-muted text-center"><?php echo $usr['email'];?></p>

                <ul class="list-group list-group-unbordered mb-3">
                  <li class="list-group-item">
                    <b>Username</b> <a class="float-right"><?php echo $usr['username'];?></a>
                  </li>
                  <li class="list-group-item">
                    <b>Password</b> <a class="float-right">************</a>
                  </li>
                  <li class="list-group-item">
                    <b>Level</b> <a class="float-right"><?php echo $usr['level'];?></a>
                  </li>
                </ul>

                <a href="<?php echo base_url(); ?>profile/change_password" class="btn btn-primary btn-block"><b>Ganti Password</b></a>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
			
			

 	</div>
 	
 	
 	</div>
	  
      </div>
      <!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->



<!-- Bootstrap core JavaScript-->
    <script src="<?php echo base_url(); ?>assets/back_end/vendor/jquery/jquery.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/back_end/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="<?php echo base_url(); ?>assets/back_end/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="<?php echo base_url(); ?>assets/back_end/js/sb-admin-2.min.js"></script>


