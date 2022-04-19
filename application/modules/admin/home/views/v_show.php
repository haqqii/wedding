<div class='container-fluid'>
		<!-- Page Heading -->
		<h1 class='h3 mb-2 text-gray-800'>Home</h1>
					<div class="alert alert-block alert-success">
    <button type="button" class="close" data-dismiss="alert">
    <i class="ace-icon fa fa-times"></i>
    </button>
	
	<p><strong>
	<?php $usr = $this->model_app->view_where('users', array('username'=> $this->session->username))->row_array(); ?>		
    <span class="black"><script language=JavaScript>var d = new Date();
    var h = d.getHours();
    if (h < 11) { document.write('Selamat Datang <?php echo $usr['nama_lengkap']; ?>,'); }
    else { if (h < 15) { document.write('Selamat siang <?php echo $usr['nama_lengkap']; ?>,'); }
    else { if (h < 19) { document.write('Selamat sore <?php echo $usr['nama_lengkap']; ?>,'); }
    else { if (h <= 23) { document.write('Selamat malam <?php echo $usr['nama_lengkap']; ?>,'); }
    }}}</script></span></strong>
	Silahkan pilih menu yang tersedia untuk mengelola konten ini
	</p>
	
	<p><button class="btn btn-sm btn-success">^_^</button></p>
    </div>

	</div><!-- /.container-fluid -->



<!-- Bootstrap core JavaScript-->
    <script src="<?php echo base_url(); ?>assets/back_end/vendor/jquery/jquery.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/back_end/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="<?php echo base_url(); ?>assets/back_end/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="<?php echo base_url(); ?>assets/back_end/js/sb-admin-2.min.js"></script>

	
