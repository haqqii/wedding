<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title><?= $title  ?></title>

    <!-- Custom fonts for this template-->
    <link href="<?php echo base_url(); ?>assets/back_end/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="<?php echo base_url(); ?>assets/back_end/css/sb-admin-2.min.css" rel="stylesheet">

    <!-- Custom styles for this page -->
    <link href="<?php echo base_url(); ?>assets/back_end/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/back_end/vendor/bootstrap4-toggle/css/bootstrap4-toggle.min.css" rel="stylesheet">
    <link rel="shortcut icon" href="<?php echo base_url(); ?>assets/back_end/assets/images/logo.png">

</head>

<body class="bg-gradient-info">

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-lg-5">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col">
                                <div class="p-5">
                                    <div class="text-center">
                                        <!-- <img src="<?php echo base_url(); ?>assets/images/Griya Dahartr.png" height="50%" width="50%"> -->
                                        <h1 class="h4 text-gray-900 mb-4">Silahkan Login</h1>
                                    </div>
                                    <div class="panel-body">

                                        <?php echo $this->session->flashdata('message'); ?>

	  
	  
                                        <form id="login" name="login" method="post" action="login">
                                            <div class="form-group">
                                               <input type="username" class="form-control form-control-user" placeholder="Username" name="username" required="required">
                                            </div>

                                            <div class="form-group">
                                                <input type="password" class="form-control form-control-user" placeholder="Password" name="password" required="required">
                                            </div>
                                            <div class="form-group">
                                                <div class="custom-control custom-checkbox small">
                                                    <input type="checkbox" class="custom-control-input" id="customCheck">
                                                    <label class="custom-control-label" for="customCheck">Ingatkan Saya</label>
                                                    <a href="<?php echo base_url(); ?>Dashboard"></a>
                                                </div>
                                            </div>
                                            <button type="submit" name='submit' class="btn btn-info btn-user btn-block">
                                                Login
                                            </button>
                                            <hr>
                                            <div class="text-center my-auto">
                                                <a><?php echo "Copyright © " . (int)date('Y') . " Cnk Poncol. All Right Reserved"; ?></a>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="<?php echo base_url(); ?>assets/back_end/vendor/jquery/jquery.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/back_end/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="<?php echo base_url(); ?>assets/back_end/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="<?php echo base_url(); ?>assets/back_end/js/sb-admin-2.min.js"></script>

</body>

</html>