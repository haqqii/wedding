
<?php
  $cek = user_akses2('role',$this->session->level);
 if ($cek['ubah']=='1'){
	 $z = $this->db->query("SELECT nm_role from role WHERE id_role='".base64_decode($this->uri->segment(3))."' ") ->row_array();
 echo'<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h5>Manajemen User</h5>
          </div>
          <div class="col-sm-6">
            <small>
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item">Manajemen User</li>
              <li class="breadcrumb-item active">Hak Akses</li>
            </ol>
		  </small>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">

            <div class="card card-primary">
              <div class="card-header">
					'.str_replace("_"," ",strtoupper("Hak Akses : <u>".$z['nm_role']."</u>")).'
			  </div>
              <!-- /.card-header -->
              <div class="card-body">';
                
				echo"<form method='post' action='administrator/hak_akses_user' enctype='multipart/form-data'>";
				echo"<input type='hidden' name='id_user' value='".base64_decode($this->uri->segment(3))."'/>";
				
				echo"<table class='table table-striped table-bordered table-sm'>
				<thead>
				<tr>
				<th class='center' width='5%'>No</th>
				<th>Nama Modul</th>
				<th width='10%' class='center'>View</th>
				<th width='10%' class='center'>Input</th>
				<th width='10%' class='center'>Edit</th>
				<th width='10%' class='center'>Delete</th>
				<th width='10%' class='center'>Posting</th>
				</tr>
				</thead>
				<tbody>"; 
				
				$no=1;
				// Pilih tabel di database
				foreach ($record as $m){    
				extract($m);
				$id_user = base64_decode($this->uri->segment(3));
				$id_ubah_saja = array("x");
				$id_view_delete = array("xx");
				$id_view_saja = array("1","7","8","9","10","11","12","13","14","15","16","18");
				$id_full_previlage = array("y","yy","yyy","yyy");	
				
				if (in_array($id_modul,$id_ubah_saja)){
					echo "<tr>
					<td class='center'>$no</td>
					<td>$nama_modul  <input type='hidden' name='modul[]' value='$id_modul'/></td>
					<td class='center'></td>
					<td class='center'></td>

				   <td class='center'><label class='pos-rel'>";
					$cek = user_akses($id_modul,$id_user);
					//if ($cek['ubah']=='1'){
					if (($cek['ubah'] ?? '0')=='1'){
					echo"<input class='ace' type='checkbox' name='ubah-$id_modul' values='1' checked>";
					} else {

					echo"<input class='ace' type='checkbox' name='ubah-$id_modul' values='0'>";
					}
					echo"<span class='lbl'></span></label></td>


					<td class='center'></td>
					<td class='center'></td>
					</tr>";	
				} else if (in_array($id_modul,$id_view_delete)){
					echo "<tr>
					<td class='center'>$no</td>
					<td>$nama_modul  <input type='hidden' name='modul[]' value='$id_modul'/></td>
					<td class='center'><label class='pos-rel'>";
					$cek = user_akses($id_modul,$id_user);
					
					
					
					if (($cek['tampil'] ?? '0')=='1'){
					echo"<input class='ace' type='checkbox' name='tampil-$id_modul' values='1' checked class=''/>";
				   
				   } else {

					echo"<input class='ace' type='checkbox' name='tampil-$id_modul' values='0'>";
					}
					echo"<span class='lbl'></span></label></td>



					<td class='center'></td>
				    <td class='center'></td>


					<td class='center'><label class='pos-rel'>";
					$cek = user_akses($id_modul,$id_user);
					//if ($cek['hapus']=='1'){
					if (($cek['hapus'] ?? '0')=='1'){
					echo"<input class='ace' type='checkbox' name='hapus-$id_modul' values='1' checked>";
					} else {

					echo"<input class='ace' type='checkbox' name='hapus-$id_modul' values='0'>";
					}
					echo"<span class='lbl'></span></label></td>
					<td class='center'><label class='pos-rel'></td>
					</tr>";	
				} else if (in_array($id_modul,$id_view_saja)){
					echo "<tr>
					<td class='center'>$no</td>
					<td>$nama_modul  <input type='hidden' name='modul[]' value='$id_modul'/></td>
					<td class='center'><label class='pos-rel'>";
					$cek = user_akses($id_modul,$id_user);
					
					
					
					if (($cek['tampil'] ?? '0')=='1'){
					echo"<input class='ace' type='checkbox' name='tampil-$id_modul' values='1' checked class=''/>";
				   
				   } else {

					echo"<input class='ace' type='checkbox' name='tampil-$id_modul' values='0'>";
					}
					echo"<span class='lbl'></span></label></td>



					<td class='center'></td>
				    <td class='center'></td>
					<td class='center'></td>
					<td class='center'><label class='pos-rel'></td>
					</tr>";	
				}
				
				else if (in_array($id_modul,$id_full_previlage)){
					echo "<tr>
					<td class='center'>$no</td>
					<td>$nama_modul  <input type='hidden' name='modul[]' value='$id_modul'/></td>
					<td class='center'><label class='pos-rel'>";
					$cek = user_akses($id_modul,$id_user);
					
					//if ($cek['tampil']=='1'){
					if (($cek['tampil'] ?? '0')=='1'){
					echo"<input class='ace' type='checkbox' name='tampil-$id_modul' values='1' checked class=''/>";
				   
				   } else {

					echo"<input class='ace' type='checkbox' name='tampil-$id_modul' values='0'>";
					}
					echo"<span class='lbl'></span></label></td>



					<td class='center'><label class='pos-rel'>";
					$cek = user_akses($id_modul,$id_user);
					//if ($cek['tambah']=='1'){
					if (($cek['tambah'] ?? '0')=='1'){
					echo"<input class='ace' type='checkbox' name='tambah-$id_modul' values='1' checked>";
					} else {

					echo"<input class='ace' type='checkbox' name='tambah-$id_modul' values='0'>";
					}
					echo"<span class='lbl'></span></label></td>

				   <td class='center'><label class='pos-rel'>";
					$cek = user_akses($id_modul,$id_user);
					//if ($cek['ubah']=='1'){
					if (($cek['ubah'] ?? '0')=='1'){
					echo"<input class='ace' type='checkbox' name='ubah-$id_modul' values='1' checked>";
					} else {

					echo"<input class='ace' type='checkbox' name='ubah-$id_modul' values='0'>";
					}
					echo"<span class='lbl'></span></label></td>


					<td class='center'><label class='pos-rel'>";
					$cek = user_akses($id_modul,$id_user);
					//if ($cek['hapus']=='1'){
					if (($cek['hapus'] ?? '0')=='1'){
					echo"<input class='ace' type='checkbox' name='hapus-$id_modul' values='1' checked>";
					} else {

					echo"<input class='ace' type='checkbox' name='hapus-$id_modul' values='0'>";
					}
					echo"<span class='lbl'></span></label></td>
					
					<td class='center'><label class='pos-rel'>";
					$cek = user_akses($id_modul,$id_user);
					if ($cek['posting'] ?? '0' =='1'){
					echo"<input class='ace' type='checkbox' name='posting-$id_modul' values='1' checked>";
					} else {

					echo"<input class='ace' type='checkbox' name='posting-$id_modul' values='0'>";
					}
					echo"<span class='lbl'></span></label></td>
					</tr>";	
					
				}
				else 
				{
					echo "<tr>
					<td class='center'>$no</td>
					<td>$nama_modul  <input type='hidden' name='modul[]' value='$id_modul'/></td>
					<td class='center'><label class='pos-rel'>";
					$cek = user_akses($id_modul,$id_user);
					
					
					
					if (($cek['tampil'] ?? '0')=='1'){
					echo"<input class='ace' type='checkbox' name='tampil-$id_modul' values='1' checked class=''/>";
				   
				   } else {

					echo"<input class='ace' type='checkbox' name='tampil-$id_modul' values='0'>";
					}
					echo"<span class='lbl'></span></label></td>



					<td class='center'><label class='pos-rel'>";
					$cek = user_akses($id_modul,$id_user);
					//if ($cek['tambah']=='1'){
					if (($cek['tambah'] ?? '0')=='1'){	
					echo"<input class='ace' type='checkbox' name='tambah-$id_modul' values='1' checked>";
					} else {

					echo"<input class='ace' type='checkbox' name='tambah-$id_modul' values='0'>";
					}
					echo"<span class='lbl'></span></label></td>

				   <td class='center'><label class='pos-rel'>";
					$cek = user_akses($id_modul,$id_user);
					//if ($cek['ubah']=='1'){
					if (($cek['ubah'] ?? '0')=='1'){
					echo"<input class='ace' type='checkbox' name='ubah-$id_modul' values='1' checked>";
					} else {

					echo"<input class='ace' type='checkbox' name='ubah-$id_modul' values='0'>";
					}
					echo"<span class='lbl'></span></label></td>


					<td class='center'><label class='pos-rel'>";
					$cek = user_akses($id_modul,$id_user);
					//if ($cek['hapus']=='1'){
					if (($cek['hapus'] ?? '0')=='1'){
					echo"<input class='ace' type='checkbox' name='hapus-$id_modul' values='1' checked>";
					} else {

					echo"<input class='ace' type='checkbox' name='hapus-$id_modul' values='0'>";
					}
					echo"<span class='lbl'></span></label></td>
					<td class='center'><label class='pos-rel'></td>
					</tr>";	
				}
					
					$no++;
				}
				echo "</tbody>
				</table>";
				
				echo'<div>
				<button class="btn btn-xs btn-primary" type="submit" name="submit"><small><i class="ace-icon fa fa-save"></i> Submit</small></button>
				<a class="btn btn-xs btn-info" href="'.base_url().'manajemenuser"><small><i class="ace-icon fa fa-undo"></i> Batal<small></a>
				</div>';
				echo"</form>

              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->";
 }
  ?>
  
    <script src="<?php echo base_url(); ?>assets/back_end/vendor/jquery/jquery.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/back_end/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="<?php echo base_url(); ?>assets/back_end/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="<?php echo base_url(); ?>assets/back_end/js/sb-admin-2.min.js"></script>