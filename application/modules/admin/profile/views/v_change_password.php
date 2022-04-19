
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">User's Profile</h1>
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
	  <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Ganti Password</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
                <div class="card-body">
                  <?php
	  if (trim($rows['foto'])==''){ $foto = 'blank.png'; }else{ $foto = $rows['foto']; }
 	$attributes = array('class'=>'','role'=>'form');
 	echo form_open_multipart(base_url().'profile/change_password',$attributes); 
 	echo"<input type='hidden' name='id' value='$rows[username]'>
 	<input type='hidden' name='ids' value='$rows[id_session]'>";
 	echo" <div class='box-body'>
 	<div class='form-group'>
 	<label for='InputUsername'>Username</label>
 	<input type='text' class='form-control input-sm' name='a' required autocomplete='off' value='$rows[username]' readonly='on'>
 	</div>
 	
 	 	
 	<div class='form-group'>
 	<label for='InputPassword'>Password</label>
 	<input type='password' class='form-control input-sm' name='b' required autocomplete='off' id='txtNewPassword' onChange=\"checkPasswordMatch();\">
 	</div>
 	
 	<div class='form-group'>
 	<label for='InputPassword'>Re-Password</label>
 	<input type='password' class='form-control input-sm' name='b' required autocomplete='off' id='txtConfirmPassword' onChange=\"checkPasswordMatch();\">
 	<div class=\"registrationFormAlert\" id=\"divCheckPasswordMatch\">
 	</div>
 	</div>

 	<div class=\"form-group\">
 	Upload Your Image (Max: 500kb)
 	<div class=\"col-md-10\">
 	<div>
 	<img id=\"user_img\"
 	height=\"130\"
 	width=\"130\"
 	style=\"border:solid\" src='".base_url()."assets/foto_user/$foto'/>
 	</div>
 	<div>
 	
 	</div>
 	</div>
 	</div>
 	
 	<div class='form-group'>
 	<input type='file' id='file' class='form-control input-sm' name='f' title=\"search image\" onchange=\"show(this)\">";
 	//if ($rows['foto'] != ''){ echo "<i style='color:red'>Foto Saat ini : </i><a target='_BLANK' href='".base_url()."asset/foto_user/$rows[foto]'>$rows[foto]</a>"; } 
 	echo "</div>
 	 	
 	</div>
 	<!-- /.box-body -->

 	<div class='box-footer'>
 	<button type='submit' class='btn btn-primary' name='submit' id='submit'>Submit</button>
 	</div>";
 	echo form_close();
	  
	  ?>
                </div>
                <!-- /.card-body -->

               
            </div>
	  
			
			

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

<script>

  function checkPasswordMatch() {
    var password = $("#txtNewPassword").val();
    var confirmPassword = $("#txtConfirmPassword").val();
	var isDisabled = false;
	var isDisabled2 = true;
    if (password != confirmPassword) {
        $("#divCheckPasswordMatch").html("Passwords do not match!").css('color', 'red');
	
	isDisabled = !isDisabled;
    $('#submit').prop('disabled', isDisabled);
	}
    else {
        $("#divCheckPasswordMatch").html("Passwords match.").css('color', 'green');
		$('submit').prop('disabled', false);
		isDisabled2 = !isDisabled2;
    $('#submit').prop('disabled', isDisabled2);
	}
}

$(document).ready(function () {
   $("#txtConfirmPassword").keyup(checkPasswordMatch);
});


function show(input) {
        debugger;
        var validExtensions = ['jpg','png']; //array of valid extensions
        var fileName = input.files[0].name;
        var fileNameExt = fileName.substr(fileName.lastIndexOf('.') + 1);
		var size = input.files[0].size; 
        if ($.inArray(fileNameExt, validExtensions) == -1) {
            input.type = ''
            input.type = 'file'
            $('#user_img').attr('src',"");
            alert("Only these file types are accepted : "+validExtensions.join(', '));
        } else if(size > 500000){ //maximal 1000 kb
			input.type = ''
            input.type = 'file'
            $('#user_img').attr('src',"");
                    alert("Maximum file size exceeds");
                }
		
        else
        {
        if (input.files && input.files[0]) {
            var filerdr = new FileReader();
            filerdr.onload = function (e) {
                $('#user_img').attr('src', e.target.result);
            }
            filerdr.readAsDataURL(input.files[0]);
        }
        }
    }

	</script>
