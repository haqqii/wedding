<?php
  $cek = user_akses2('identitas',$this->session->level);
   if ($cek['tampil']=='1'){
echo"<div class='container-fluid'>
		<!-- Page Heading -->
		<h1 class='h3 mb-2 text-gray-800'>Setting Web</h1>
		<div class='card shadow mb-4'>
			<div class='card-header py-2'>
				Ubah Data
			</div>
			<div class='card-body'>
			
			
			
			
			";
          echo'<form method="post" role="form" action="'.base_url().'identitas" enctype="multipart/form-data">';
          echo "<table class='table table-condensed table-bordered'>
                  <tbody>
                    <input type='hidden' name='id' value=''>
                    <tr><th width='120px' scope='row'>Nama Website</th>   <td><input type='text' class='form-control' name='a' value='$record[nama_website]'></td></tr>
                    <tr><th scope='row'>Email</th>                        <td><input type='email' class='form-control' name='b' value='$record[email]'></td></tr>
                    <tr><th scope='row'>Domain</th>                       <td><input type='url' class='form-control' name='c' value='$record[url]'></td></tr>
                    <tr><th scope='row'>Jam Operasional</th>               <td><textarea class='form-control' name='d'>$record[jam_operasional]</textarea></td></tr>
                    <tr><th scope='row'>No. Rekening</th>                 <td><input type='text' class='form-control' name='e' value='$record[rekening]'></td></tr>
                    <tr><th scope='row'>No Telpon</th>                    <td><input type='text' class='form-control' name='f' value='$record[no_telp]'></td></tr>
                    <tr><th scope='row'>Whatsapp</th>                    <td><input type='text' class='form-control' name='whatsapp' value='$record[whatsapp]'></td></tr>
                    
                    <tr><th scope='row'>Alamat</th>            <td><textarea class='form-control' name='alamat'>$record[alamat]</textarea></td></tr>
                    <tr><th scope='row'>Meta Deskripsi</th>               <td><input type='text' class='form-control' name='g' value='$record[meta_deskripsi]'></td></tr>
                    <tr><th scope='row'>Meta Keyword</th>                 <td><input type='text' class='form-control' name='h' value='$record[meta_keyword]'></td></tr>
                    <tr><th scope='row'>Google Maps</th>                  <td><input type='text' class='form-control' name='j' value='$record[maps]'></td></tr>
                    <tr><th scope='row'>Favicon</th>                      <td><input type='file' class='form-control' name='i' value='$record[favicon]'><hr style='margin:5px'>
                                                                              Favicon Aktif Saat ini : <img src='".base_url()."assets/favicon/$record[favicon]'></td></tr>
                  <tr><th scope='row'></th>                    	   <td><button type='submit' name='submit' class='btn btn-info'>Update</button>
																		   <a href='index.php'><button type='button' class='btn btn-default pull-right'>Cancel</button></a></td></tr>
				  </tbody>
                  </table>
				</form>";

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

	
