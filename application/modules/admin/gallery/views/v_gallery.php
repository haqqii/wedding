<?php
  $cek = user_akses2('users',$this->session->level);
   if ($cek['tampil']=='1'){
echo"<div class='container-fluid'>
		<!-- Page Heading -->
		<h1 class='h3 mb-2 text-gray-800'>Data gallery Account</h1>
		
	
			
			
		<div class='card shadow mb-4'>
			<div class='card-header py-2'>
			
			<form method='post'action='".base_url()."gallery'>
			<div class='float-left form-check'>";
				 if ($record['status'] == "aktif")
				  {
					echo"<input type='checkbox' class='form-check-input' name='status' checked value='tidak'>";
				  } else {
					echo"<input type='checkbox' class='form-check-input' name='status' value='aktif'>";
				  }
					echo"<label class='form-check-label' for='exampleCheck1'>Tampilkan</label> <button class='btn btn-sm btn-primary' type='submit' name='submit'>Submit</button>
				  </div>
				</form>  
				  
				<div class='float-right'>"; 
				if ($cek['tambah']=='1')
				{ 
					echo"<button class='btn btn-primary btn-sm' onclick='add_gallery()'><small><i class='fas fa-plus'></i> Add Data</small></button>"; 
				}   echo" <button class='btn btn-default btn-sm' onclick='reload_table()'><small><i class='fas fa-sync-alt'></i> Reload</small></button>"; 
				
				echo"</div>
			</div>
			<div class='card-body'>
				<div class='table-responsive'>
					<table id='table' class='table table-striped table-bordered table-sm'>
					<thead>
						<tr>
							<th>nama</th>
							<th>Photo</th>
							<th style='width:150px;'>Action</th>
						</tr>
					</thead>
					<tbody>
					</tbody>
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

<script type="text/javascript">
 
var save_method; //for save method string
var table;
var base_url = '<?php echo base_url();?>';
 
$(document).ready(function() {
 
    //datatables
    table = $('#table').DataTable({ 
 
        "processing": true, //Feature control the processing indicator.
        "serverSide": true, //Feature control DataTables' server-side processing mode.
        "order": [], //Initial no order.
 
        // Load data for the table's content from an Ajax source
        "ajax": {
			"url": "<?php echo base_url('gallery/ajax_list')?>",
            "type": "POST"
        },
 
        //Set column definition initialisation properties.
        "columnDefs": [
            { 
                "targets": [ -1 ], //last column
                "orderable": false, //set not orderable
            },
            { 
                "targets": [ -2 ], //2 last column (gambar)
                "orderable": false, //set not orderable
            },
        ],
 
    });
 
    
 
});
 
 
 
function add_gallery()
{
    save_method = 'add';
    $('#form')[0].reset(); // reset form on modals
    $('.form-group').removeClass('has-error'); // clear error class
    $('.help-block').empty(); // clear error string
    $('#modal_form').modal('show'); // show bootstrap modal
    $('.modal-title').text('Add Data'); // Set Title to Bootstrap modal title
 
    $('#gambar-preview').hide(); // hide gambar preview modal
 
    $('#label-gambar').text('Upload Photo'); // label gambar upload
}
 
function edit_gallery(id)
{
    save_method = 'update';
    $('#form')[0].reset(); // reset form on modals
    $('.form-group').removeClass('has-error'); // clear error class
    $('.help-block').empty(); // clear error string
 
 
    //Ajax Load data from ajax
    $.ajax({
       // url : "<?php echo site_url('gallery/ajax_edit')?>/" + id,
		url : "<?php echo base_url('gallery/ajax_edit/')?>/" + id,
        type: "GET",
        dataType: "JSON",
        success: function(data)
        {
 
            $('[name="id_gallery"]').val(data.id_gallery);
            $('[name="nama"]').val(data.nama);
            $('#modal_form').modal('show'); // show bootstrap modal when complete loaded
            $('.modal-title').text('Edit Data'); // Set title to Bootstrap modal title
 
            $('#gambar-preview').show(); // show gambar preview modal
 
            if(data.foto)
            {
                $('#label-gambar').text('Change Photo'); // label gambar upload
                $('#gambar-preview div').html('<img src="'+base_url+'assets/foto_gallery/'+data.foto+'" class="img-fluid img-thumbnail" width="30%">'); // show gambar
                $('#gambar-preview div').append('<br/><input type="checkbox" name="remove_gambar" value="'+data.foto+'"/> Remove gambar when saving'); // remove gambar
 
            }
            else
            {
                $('#label-gambar').text('Upload Photo'); // label gambar upload
                $('#gambar-preview div').text('(No gambar)');
            }
 
 
        },
        error: function (jqXHR, textStatus, errorThrown)
        {
            alert('Error get data from ajax');
        }
    });
}
 
function reload_table()
{
    table.ajax.reload(null,false); //reload datatable ajax 
}
 
function save()
{
    $('#btnSave').text('saving...'); //change button text
    $('#btnSave').attr('disabled',true); //set button disable 
    var url;
 
    if(save_method == 'add') {
        url = "<?php echo site_url('gallery/ajax_add')?>";
    } else {
        url = "<?php echo site_url('gallery/ajax_update')?>";
    }
 
    // ajax adding data to database
 
    var formData = new FormData($('#form')[0]);
    $.ajax({
        url : url,
        type: "POST",
        data: formData,
        contentType: false,
        processData: false,
        dataType: "JSON",
        success: function(data)
        {
 
            if(data.status) //if success close modal and reload ajax table
            {
                $('#modal_form').modal('hide');
                reload_table();
            }
            else
            {
                for (var i = 0; i < data.inputerror.length; i++) 
                {
                    $('[name="'+data.inputerror[i]+'"]').parent().parent().addClass('has-error'); //select parent twice to select div form-group class and add has-error class
                    $('[name="'+data.inputerror[i]+'"]').next().text(data.error_string[i]); //select span help-block class set text error string
                }
            }
            $('#btnSave').text('save'); //change button text
            $('#btnSave').attr('disabled',false); //set button enable 
 
 
        },
        error: function (jqXHR, textStatus, errorThrown)
        {
            alert('Error adding / update data');
            $('#btnSave').text('save'); //change button text
            $('#btnSave').attr('disabled',false); //set button enable 
 
        }
    });
}
 
function delete_gallery(id)
{
    if(confirm('Are you sure delete this data?'))
    {
        // ajax delete data to database
        $.ajax({
            url : "<?php echo site_url('gallery/ajax_delete')?>/"+id,
            type: "POST",
            dataType: "JSON",
            success: function(data)
            {
                //if success reload ajax table
                $('#modal_form').modal('hide');
                reload_table();
            },
            error: function (jqXHR, textStatus, errorThrown)
            {
                alert('Error deleting data');
            }
        });
 
    }
}
 
</script>
 
<!-- Bootstrap modal -->
<div class="modal fade" id="modal_form" role="dialog">
    <div class="modal-dialog modal-md">
        <div class="modal-content">
            <div class="modal-header">
                
                <h3 class="modal-title">Item Master Form</h3>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body form">
                <form action="#" id="form" class="form-horizontal">
                    <input type="hidden" value="" name="id_gallery"/> 
                    <div class="form-body">
                        <div class="form-group">
                            <label class="control-label col-md-3">nama</label>
                            <div class="col-md-12">
                                <input name="nama" placeholder="Isi nama" class="form-control" type="text">
                                <span class="help-block text-danger"></span>
                            </div>
                        </div>
                        
                        
                        <div class="form-group" id="gambar-preview">
                            <label class="control-label col-md-3">Photo</label>
                            <div class="col-md-12">
                                (No gambar)
                                <span class="help-block text-danger"></span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3" id="label-gambar">Upload Photo </label>
                            <div class="col-md-12">
                                <input name="gambar" type="file">
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
</body>
</html>