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

   
    <link href="<?php echo base_url('assets/css/sb-admin-2.css') ?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/css/metisMenu.min.css') ?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/css/bootstrap.min.css') ?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/css/font-awesome.min.css') ?>" rel="stylesheet"> 
    
</head>

<body>
    <?php 
        $usid = $this->session->userdata('user_id');
        $row = $this->session->userdata('pro');
        $this->session->unset_userdata('pro');
    ?>
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
                            <a href=<?php echo base_url().'index.php/SearchController/asdfg/'.$usid ?>><i class="fa fa-search fa-fw"></i> Search</a>
                        </li>
                        <li>
                            <a href=<?php echo base_url().'index.php/faculty/cordinated_project/'.$usid ?>><i class="fa fa-bar-chart-o fa-fw"></i> Cordinated Projects</a>
                            
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="tables.html"><i class="fa fa-edit fa-fw "></i> Upload Rights</a>
                        </li>
                        
                        <li>
                            <a href=<?php echo base_url().'index.php/faculty/asdfg/'.$usid ?>><i class="fa fa-wrench fa-fw"></i> Profile Settings</a>
                        </li> 
                        <li>
                            <a href= <?php echo base_url().'index.php/faculty/facultycreate/'.$usid?> ><i class="fa fa-user-plus fa-fw" aria-hidden="true"></i> Create new Faculty</a>
                        </li>
                        <li>
                            <a href=<?php echo base_url().'index.php/welcome'?>><i class="fa fa-power-off fa-fw"></i> Logout</a>
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
                    <h1 class="page-header">Rate Project</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                
                        <div class="panel panel-default">
                    
                        <div class="panel-heading">
                        <?php echo $row->pname; ?>
                        </div>
                        <div class="panel-body">

                            <div class="row">

                                <div class="col-lg-9">
                                    <div class="col-lg-12">
                                        <div class="col-lg-3">
                                            year: <?php echo $row->year?>
                                        </div>
                                        <div class="col-lg-3">
                                            members: <?php echo $row->members?>
                                        </div>
                                        <div class="col-lg-3">
                                            Overall Rating: <?php echo $row->rating?>
                                        </div>                                    
                                        <div  class="col-lg-3">  
                                            <a class="btn btn-info" href=<?php echo base_url().'uploads/'.$row->file.'.pdf';?> target="_blank">View Project</a> 
                                        </div>
                                    </div>
                                    <br></br>
                                    <?php echo validation_errors();?>
                                    <?php echo form_open('faculty/ratesubmit/'.$row->pid); ?>
                                    <div class="col-lg-6">
                                        <form role="form" >
                                            
                                            <div class="form-group">
                                                <label>Rating </label>
                                                <input name= "rate1" class="form-control">
                                            </div>
                                            <!--
                                            <div class="form-group">
                                                <label>Rating 2</label>
                                                <input name= "rate2" class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label>Rating 3</label>
                                                <input name= "rate3" class="form-control" >
                                            </div>
                                            <div class="form-group">
                                                <label>Rating 4</label>
                                                <input name= "rate4" class="form-control" >
                                            </div>
                                            <div class="form-group">
                                                <label>Rating 4</label>
                                                <input name= "rate5" class="form-control" >
                                            </div>
                                           -->
                                            <div class="col-lg-8">
                                            <button type="submit" class="btn btn-lg btn-success btn-block">Submit Rating</button>
                                            </div>
                                            
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    
                </div>
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
