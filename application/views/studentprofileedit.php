<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Project Respository</title>

    <!-- Bootstrap Core CSS -->
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="../vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    
    <!-- Custom Fonts -->
    <link href="<?php echo base_url('assets/css/sb-admin-2.css') ?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/css/metisMenu.min.css') ?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/css/bootstrap.min.css') ?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/css/font-awesome.min.css') ?>" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>
<?php $usid = $this->session->userdata('user_id');?>
    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">Project Repository</a>
            </div>
            <!-- /.navbar-header -->


            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                       
                        <li>
                            <a href="index.html"><i class="fa fa-dashboard fa-fw"></i> Search</a>
                        </li>
                       
                        <li>
                            <a href="tables.html"><i class="fa fa-table fa-fw"></i> Upload Project</a>
                        </li>
                        <li>
                            <a href="tables.html"><i class="fa fa-edit fa-fw"></i> Profile Settings</a>
                            <!--<a href="#"><i class="fa fa-edit fa-fw"></i> Profile Settings</a>-->
                        </li>  
                        <li>
                            <a onclick= "<?php echo base_url();?>welcome/index"><i class="fa fa-edit fa-fw"></i> Logout</a>
                        </li>  
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Profile Settings</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Basic Form Elements
                        </div>
                        <div class="panel-body">
                            <div class="row">
                            <?php echo validation_errors();?>
                            <?php echo form_open('studentprofileedit/checkform/'.$usid); ?>
                                <div class="col-lg-6">
                                    <form role="form" action="">
                                        <div class="form-group">
                                            <label>Current Password</label>
                                            <input name= "pass" class="form-control" >
                                        </div>
                                        <div class="form-group">
                                            <label>Name</label>
                                            <input name= "name" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label>New Password</label>
                                            <input name= "pass1" class="form-control" >
                                        </div>
                                        <div class="form-group">
                                            <label>Retype New Password</label>
                                            <input name= "pass2" class="form-control" >
                                        </div>
                                        <div class="form-group">
                                            <label>E-mail id</label>
                                            <input name= "email" class="form-control" >
                                        </div>
                                        <div class="form-group">
                                            <label>Roll Num.</label>
                                            <input name= "rollnum" class="form-control" >
                                        </div>
                                        
                                        <div class="col-lg-6">
                                        <button type="submit" class="btn btn-lg btn-success btn-block">Submit Button</button>
                                        </div>
                                        <div class="col-lg-6">
                                        <button type="reset" class="btn btn-lg btn-success btn-block">Reset Button</button>
                                        </div>
                                    </form>
                                </div>
                                
                                <!-- /.col-lg-6 (nested) -->
                            </div>
                            <!-- /.row (nested) -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="../vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../vendor/metisMenu/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../dist/js/sb-admin-2.js"></script>

</body>

</html>
