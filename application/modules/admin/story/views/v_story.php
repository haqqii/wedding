<?php
  $cek = user_akses2('story',$this->session->level);
   if ($cek['tampil']=='1'){
echo"<div class='container-fluid'>
		<!-- Page Heading -->
		<h1 class='h3 mb-2 text-gray-800'>Data story</h1>
		
		
		<div class='card shadow mb-4'>
		<form method='post' action='".base_url()."story' enctype='multipart/form-data'>
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
				  <div class="col-sm-3">
				  
				 
			
                      <div class="form-group">  
<small>					  
                       <label for="file">Upload Dengan Eksistensi jpg, jpeg, png (Max 1Mb)</label>
						</small>	
						<input type="file" class="form-control" name="photo" value="'.$record['photo'].'">
						<br/>
						Current Image : <br/><img src="'.base_url().'assets/front_image/'.$record['photo'].'" class="img-thumbnail">
							
							
                  </div>
                                   
                    </div>
                  </div>
                  <button class="btn btn-primary" type="submit" name="submit">Submit</button>
                ';

				
				
				

              echo"</div>
		</div></form>
		
		
		
		
		<div class='card shadow mb-4'>
			<div class='card-header py-2'>
				<div class='float-right'>"; 
				if ($cek['tambah']=='1')
				{ 
					echo"<button class='btn btn-primary btn-sm' onclick='add_story()'><small><i class='fas fa-plus'></i> Add Data</small></button>"; 
				}   echo" <button class='btn btn-default btn-sm' onclick='reload_table()'><small><i class='fas fa-sync-alt'></i> Reload</small></button>"; 
				
				echo"</div>
			</div>
			<div class='card-body'>
			
				<div class='table-responsive'>
					<table class='table table-striped table-bordered table-sm' id='dynamic-table1'>
						<thead>
							<tr>
								<th>Tahun</th>
								<th>Story</th>
								<th width='10%'>Action</th>
							</tr>
						</thead>
						<tbody></tbody>
					</table>
				</div>
			</div>
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

 <!-- Page level plugins -->
    <script src="<?php echo base_url(); ?>assets/back_end/vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/back_end/vendor/datatables/dataTables.bootstrap4.min.js"></script>
	
	
<!-- page script -->
<script type = "text/javascript" >
	var save_method; //for save method string
var table;
$(document).ready(function() {
	//datatables
	table = $('#dynamic-table1').DataTable({
		// made a customization to search just when user presses enter.
		initComplete: function() {
			var api = this.api();
			$('#table_filter input').off('.DT').on('keyup.DT', function(e) {
				if (e.keyCode == 13) {
					api.search(this.value).draw();
				}
			});
		},
		oLanguage: {
			sProcessing: "loading..."
		},
		// end to made a customization to search just when user presses enter.
		"processing": true, //Feature control the processing indicator.
		"serverSide": true, //Feature control DataTables' server-side processing mode.
		"order": [], //Initial no order.
		// Load data for the table's content from an Ajax source
		"ajax": {
			"url": "<?php echo base_url('story/ajax_list')?>",
			"type": "POST"
		},
		//Set column definition initialisation properties.
		"columnDefs": [{
			"targets": [-1], //last column
			"orderable": false, //set not orderable
		}, ],
	});
	
});

function add_story() {
	save_method = 'add';
	$('#form')[0].reset(); // reset form on modals
	$('.form-group').removeClass('has-error'); // clear error class
	$('.help-block').empty(); // clear error string
	$('#modal_form').modal('show'); // show bootstrap modal
	$('.modal-title').text('Form Tambah Data'); // Set Title to Bootstrap modal title
	$('[name="id_story"]').attr("readonly", false);
}

function edit_story(id_story) {
	save_method = 'update';
	$('#form')[0].reset(); // reset form on modals
	$('.form-group').removeClass('has-error'); // clear error class
	$('.help-block').empty(); // clear error string
	//Ajax Load data from ajax
	$.ajax({
		url: "<?php echo base_url('index.php/story/ajax_edit/')?>/" + id_story,
		type: "GET",
		dataType: "JSON",
		success: function(data) {
			$('[name="id_story"]').val(data.id_story);
			//make read only when click edit
			$('[name="id_story"]').attr("readonly", true);
			$('[name="nm_story"]').val(data.nm_story);
			$('[name="tahun"]').val(data.tahun);
			$('#modal_form').modal('show'); // show bootstrap modal when complete loaded
			$('.modal-title').text('Form Edit Data'); // Set title to Bootstrap modal title
		},
		error: function(jqXHR, textStatus, errorThrown) {
			alert('Error get data from ajax');
		}
	});
}

function reload_table() {
	table.ajax.reload(null, false); //reload datatable ajax 
}

function save() {
	$('#btnSave').text('saving...'); //change button text
	$('#btnSave').attr('disabled', true); //set button disable 
	var url;
	if (save_method == 'add') {
		url = "<?php echo base_url('story/ajax_add')?>";
	} else {
		url = "<?php echo base_url('story/ajax_update')?>";
	}
	// ajax adding data to database
	$.ajax({
		url: url,
		type: "POST",
		data: $('#form').serialize(),
		dataType: "JSON",
		success: function(data) {
			if (data.status) //if success close modal and reload ajax table
			{
				$('#modal_form').modal('hide');
				reload_table();
			} else {
				for (var i = 0; i < data.inputerror.length; i++) {
					$('[name="' + data.inputerror[i] + '"]').parent().parent().addClass('has-error'); //select parent twice to select div form-group class and add has-error class
					$('[name="' + data.inputerror[i] + '"]').next().text(data.error_string[i]); //select span help-block class set text error string
				}
			}
			$('#btnSave').text('save'); //change button text
			$('#btnSave').attr('disabled', false); //set button enable 
		},
		error: function(jqXHR, textStatus, errorThrown) {
			alert('Error adding / update data');
			$('#btnSave').text('save'); //change button text
			$('#btnSave').attr('disabled', false); //set button enable 
		}
	});
}

function delete_story(id_story) {
	if (confirm('Are you sure delete this data?')) {
		// ajax delete data to database
		$.ajax({
			url: "<?php echo base_url('index.php/story/ajax_delete')?>/" + id_story,
			type: "POST",
			dataType: "JSON",
			success: function(data) {
				//if success reload ajax table
				$('#modal_form').modal('hide');
				reload_table();
			},
			error: function(jqXHR, textStatus, errorThrown) {
				alert('Error deleting data');
			}
		});
	}
} </script>

<!-- Bootstrap modal -->
<div class="modal fade" id="modal_form" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
			<h3 class="modal-title">Form Tambah Data</h3>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                
            </div>
            <div class="modal-body form">
                <form action="#" id="form" class="form-horizontal">
                    <div class="form-body">
					
					
					<div class="form-group">
                            <label class="control-label col-md-12">Tahun</label>
                            <div class="col-md-12">
								<input name="id_story" type="hidden">
                                <input name="tahun" placeholder="Tahun" class="form-control" type="number">
                                <span class="help-block text-danger"></span>
                            </div>
                        </div>
						
						
                        <div class="form-group">
                            <label class="control-label col-md-12">Story</label>
                            <div class="col-md-12">
                                <input name="nm_story" placeholder="Story / Cerita" class="form-control" type="text">
                                <span class="help-block text-danger"></span>
                            </div>
                        </div>
						
						
						
                        
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" id="btnSave" onclick="save()" class="btn btn-primary">Save</button>
                <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<!-- End Bootstrap modal -->