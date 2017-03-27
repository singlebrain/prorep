
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Project Repository - Bootstrap Admin Theme</title>

    <!-- Bootstrap Core CSS -->
    <link href="../../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="../../vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../../dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="../../vendor/morrisjs/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
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
     <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
 <link href="../../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css">
<link rel="stylesheet" type="css/search.css">
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

                    </a>
                </li>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->

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
                            <a href=<?php echo base_url().'index.php/faculty/facultycreate/'.$usid?>><i class="fa fa-user-plus fa-fw" aria-hidden="true"></i> Create new Faculty</a>
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
                    <h1 class="page-header">Everything made simple!</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
             
            <div class="row">
            <!--
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-star fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge">10</div>
                                    <div>Top Rated</div>
                                </div>
                            </div>
                        </div>
                                                <a href="#">
                            <div class="panel-footer">
                                <span class="pull-left">Show</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                 </div>

                

                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-green">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                  <i class="fa fa-bookmark fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge">12</div>   
                                    <div>Bookmarks</div>
                                </div>
                            </div>
                        </div>
                                                <a href="#">
                            <div class="panel-footer">
                                <span class="pull-left">Show</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>

               /.col-lg-8 -->
            <?php echo form_open('SearchController/search/'.$usid); ?>
            <form method=get>
               
                <div class="col-lg-12">
               



<div class="container">
  <div class="panel-group">
    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" href="#collapse1">                 
                              <button class="btn btn-default" type="button">
                                  <i class="fa fa-filter"></i>
                             </button>          
                                </a>
        </h4>
      </div>
      <div id="collapse1" class="panel-collapse collapse">
        <div class="panel-body">

<div class="container-fluid">

    <div class="row">
        <div>
            <div id="accordion" class="panel panel-primary behclick-panel">                                 
                </div>
                <div class="panel-body" >
                <div class="col-lg-3">
                    <div class="panel-heading " >
                        <h4 class="panel-title">
                            <a data-toggle="collapse" href="#collapse0">
                                <i class="indicator fa fa-caret-down" aria-hidden="true"></i> Department
                            </a>
                        </h4>
                    </div>
                    <div id="collapse0" class="panel-collapse collapse in" >
                        <ul class="list-group">
                            <li class="list-group-item">
                                <div class="checkbox">
                                    <label>
                                        <input type="radio" value="cse" name="depart[]">
                                        Computer Science and Engineering
                                    </label>
                                </div>
                            </li>
                            <li class="list-group-item">
                                <div class="checkbox" >
                                    <label>
                                        <input type="radio" value="eee" name="depart[]">
                                        Electrical and Electronics Engineering
                                    </label>
                                </div>
                            </li>
                            <li class="list-group-item">
                                <div class="checkbox"  >
                                    <label>
                                        <input type="radio" value="ece" name="depart[]">
                                         Electronics and Communication Engineering
                                    </label>
                                </div>
                            </li>
                            <li class="list-group-item">
                                <div class="checkbox"  >
                                    <label>
                                        <input type="radio" value="ebe" name="depart[]">
                                        Electronics and Biomedical Engineering
                                    </label>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3">

                    <div class="panel-heading" >
                        <h4 class="panel-title">
                            <a data-toggle="collapse" href="#collapse3"><i class="indicator fa fa-caret-down" aria-hidden="true"></i> Rating</a>
                        </h4>
                    </div>
                    <div id="collapse3" class="panel-collapse collapse in">
                        <ul class="list-group">
                            <li class="list-group-item">
                                <div class="checkbox">
                                    <label>
                                        <input type="radio" value="5" name="rating[]">
                                        5* only
                                    </label>
                                </div>
                            </li>
                            <li class="list-group-item">
                                <div class="checkbox" >
                                    <label>
                                        <input type="radio" value="4" name="rating[]">
                                        4* and above
                                    </label>
                                </div>
                            </li>
                            <li class="list-group-item">
                                <div class="checkbox"  >
                                    <label>
                                        <input type="radio" value="3" name="rating[]">
                                        3* and above
                                    </label>
                                </div>
                            </li>
                                                        <li class="list-group-item">
                                <div class="checkbox"  >
                                    <label>
                                        <input type="radio" value="2" name="rating[]">
                                        2* and above
                                    </label>
                                </div>
                            </li>
                                                        <li class="list-group-item">
                                <div class="checkbox"  >
                                    <label>
                                        <input type="radio" value="1" name="rating[]">
                                         1* and above
                                    </label>
                                </div>
                            </li>
                        </ul>
                    </div>
                    </div>
                    <div class="col-lg-3">
                    <div class="panel-heading" >
                        <h4 class="panel-title">
                            <a data-toggle="collapse" href="#collapse2"><i class="indicator fa fa-caret-right" aria-hidden="true"></i> time of upload</a>
                        </h4>
                    </div>
                    <div id="collapse2" class="panel-collapse collapse">
                        <ul class="list-group">
                            <li class="list-group-item">
                                <div class="checkbox">
                                    <label>
                                        <input type="radio" value="1" name="year[]">
                                        one year 
                                    </label>
                                </div>
                            </li>
                            <li class="list-group-item">
                                <div class="checkbox" >
                                    <label>
                                        <input type="radio" value="1" name="year[]">
                                        two year
                                    </label>
                                </div>
                            </li>
                            <li class="list-group-item">
                                <div class="checkbox">
                                    <label>
                                        <input type="radio" value="1" name="year[]">
                                        three year
                                    </label>
                                </div>
  
                         </li>

                            <li class="list-group-item">
                                <div class="checkbox">
                                    <label>
                                        <input type="radio" value="1" name="year[]">
                                        four year
                                    </label>
                                </div>
                            </li>
                            
                        </ul>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
</div>

<script src="search.js"></script>

</div>
        
      </div>
    </div>
  </div>
  </div>

   <div class="row">
                    <div class="col-lg-12">
                        <br>
                        <div class="input-group custom-search-form">
                            <input type="text" name="keyword" class="form-control" placeholder="Enter your keyword...">
                            <span class="input-group-btn">
                            <button class="btn btn-default" type="submit">
                            <i class="fa fa-search"></i> 
                            </button>
                            </span>
                        </div>
                        </br>
                    </div>
                </div>
</form>
</div>
    


                         


                        <!-- /.panel-body -->

            <!-- /.row -->
        
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
