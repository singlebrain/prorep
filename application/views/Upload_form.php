<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Project Repository</title>

    <!-- Bootstrap Core CSS -->
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="../vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="../vendor/morrisjs/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
     <link href="<?php echo base_url('assets/css/sb-admin-2.css') ?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/css/metisMenu.min.css') ?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/css/bootstrap.min.css') ?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/css/font-awesome.min.css') ?>" rel="stylesheet">

</head>

<body>
    

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
             
                 
            <!-- /.navbar-top-links -->

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                     
                        <li>
                            <a href="index.html"><i class="fa fa-search fa-fw"></i> search</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> upload project</a>
                            
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="tables.html"><i class="fa fa-table fa-fw"></i> coordinated projects</a>
                        </li>
                        <li>
                            <a href="forms.html"><i class="fa-keyboard-o:before"></i> settings</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-power-off fa-fw"></i> log out</a>
                            
                            <!-- /.nav-second-level -->
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
                    <h1 class="page-header">upload project</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
           
               
                     
                                  <!--<?php echo $error;?> -->


                                  <div class="row">
                <div class="col-lg-12">
.                    <div class="panel panel-default">
                        <div class="panel-heading">
                            File Upload
                        </div>
                        <div class="panel-body">
                            <div class="row">
                            <?php echo validation_errors();?>
<?php echo form_open('fileuploadedit/checkform'); ?>
      <?php echo form_open_multipart('upload/do_upload');?> 
        
      <div class="col-lg-6">
                                    <form role="form" action="">
                                        <div class="form-group">
                                            <label>Project Name</label>
                                            <input name= "pname" class="form-control" >
                                        </div>
                                        <div class="form-group">
                                            <label>Student id</label>
                                            <input name= "sid" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label>Coordinator id</label>
                                            <input name= "cid" class="form-control">
                                        </div>
                                         <div class="form-group">
                                            <label>department</label>
                                            <input name= "dept" class="form-control">
                                        </div>
                                         <div class="form-group">
                                            <label>Number of members</label>
                                            <input name= "members" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label>commence date</label>
                                            <input name= "com_date" class="form-control" >
                                        </div>
                                         <div class="form-group">
                                            <label>metatags</label>
                                            <input name= "metatags" class="form-control" >
                                        </div>
                                          <div class="form-group">
                                            <label>Filename</label>
                                            
                                        <input type = "file" name = "userfile" id="btn-input" type="text" class="form-control input-sm" placeholder="filename.pdf"  /> 
    
                                        </div>
        
         
                            </div>
                        </div>
                        <!-- /.panel-heading -->
                        <!-- /.panel-body -->
                        <div class="panel-footer">
                           <div class="input-group">
                                 <input type = "submit" value = "upload" /> 
      </form> 
                               
                            </div> 
                        </div>
                        <!-- /.panel-footer -->
                    </div>
                    <!-- /.panel .chat-panel -->
                </div>
                <!-- /.col-lg-4 -->
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

    <!-- Morris Charts JavaScript -->
    <script src="../vendor/raphael/raphael.min.js"></script>
    <script src="../vendor/morrisjs/morris.min.js"></script>
    <script src="../data/morris-data.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../dist/js/sb-admin-2.js"></script>

      
 

</body>

</html>
