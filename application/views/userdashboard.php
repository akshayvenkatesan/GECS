<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">
        <title>Dashboard</title>
        <!-- Bootstrap core CSS-->
        <link href="<?php echo base_url(); ?>vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <!-- Custom fonts for this template-->
        <link href="<?php echo base_url(); ?>vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
        <!-- Page level plugin CSS-->
        <link href="<?php echo base_url(); ?>vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">
        <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
        <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
        <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
        <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
        <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
        <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
        <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="css/util.css">
        <link rel="stylesheet" type="text/css" href="css/main.css">
        <!-- Custom styles for this template-->
        <link href="<?php echo base_url(); ?>css/sb-admin.css" rel="stylesheet">

    </head>

    <body class="fixed-nav sticky-footer bg-dark" id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
            <a class="navbar-brand" href="dashboard">Dashboard</a>
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav navbar-sidenav" id="exampleAccordion">
                    <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Dashboard">
                        <a class="nav-link" href="dashboard">
                            <i class="fa fa-fw fa-dashboard"></i>
                            <span class="nav-link-text">Dashboard</span>
                        </a>
                    </li>

                    <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Tables">
                        <a class="nav-link" href="dashboardtable">
                            <i class="fa fa-fw fa-table"></i>
                            <span class="nav-link-text">User Data</span>
                        </a>
                    </li>


                    <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Menu Levels">
                        <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseMulti" data-parent="#exampleAccordion">
                            <i class="fa fa-fw fa-sitemap"></i>
                            <span class="nav-link-text">Menu Levels</span>
                        </a>
                        <ul class="sidenav-second-level collapse" id="collapseMulti">
                            <li>
                                <a href="#">Second Level Item</a>
                            </li>
                            <li>
                                <a href="#">Second Level Item</a>
                            </li>
                            <li>
                                <a href="#">Second Level Item</a>
                            </li>
                            <li>
                                <a class="nav-link-collapse collapsed" data-toggle="collapse" href="#collapseMulti2">Third Level</a>
                                <ul class="sidenav-third-level collapse" id="collapseMulti2">
                                    <li>
                                        <a href="#">Third Level Item</a>
                                    </li>
                                    <li>
                                        <a href="#">Third Level Item</a>
                                    </li>
                                    <li>
                                        <a href="#">Third Level Item</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Link">
                        <a class="nav-link" href="#">
                            <i class="fa fa-fw fa-link"></i>
                            <span class="nav-link-text">Link</span>
                        </a>
                    </li>
                </ul>
                <ul class="navbar-nav sidenav-toggler">
                    <li class="nav-item">
                        <a class="nav-link text-center" id="sidenavToggler">
                            <i class="fa fa-fw fa-angle-left"></i>
                        </a>
                    </li>
                </ul>
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle mr-lg-2" id="messagesDropdown" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fa fa-fw fa-envelope"></i>
                            <span class="d-lg-none">Messages
                                <span class="badge badge-pill badge-primary">12 New</span>
                            </span>
                            <span class="indicator text-primary d-none d-lg-block">
                                <i class="fa fa-fw fa-circle"></i>
                            </span>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="messagesDropdown">
                            <h6 class="dropdown-header">New Messages:</h6>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">
                                <strong>David Miller</strong>
                                <span class="small float-right text-muted">11:21 AM</span>
                                <div class="dropdown-message small">Hey there! This new version of SB Admin is pretty awesome! These messages clip off when they reach the end of the box so they don't overflow over to the sides!</div>
                            </a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">
                                <strong>Jane Smith</strong>
                                <span class="small float-right text-muted">11:21 AM</span>
                                <div class="dropdown-message small">I was wondering if you could meet for an appointment at 3:00 instead of 4:00. Thanks!</div>
                            </a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">
                                <strong>John Doe</strong>
                                <span class="small float-right text-muted">11:21 AM</span>
                                <div class="dropdown-message small">I've sent the final files over to you for review. When you're able to sign off of them let me know and we can discuss distribution.</div>
                            </a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item small" href="#">View all messages</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle mr-lg-2" id="alertsDropdown" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fa fa-fw fa-bell"></i>
                            <span class="d-lg-none">Alerts
                                <span class="badge badge-pill badge-warning">6 New</span>
                            </span>
                            <span class="indicator text-warning d-none d-lg-block">
                                <i class="fa fa-fw fa-circle"></i>
                            </span>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="alertsDropdown">
                            <h6 class="dropdown-header">New Alerts:</h6>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">
                                <span class="text-success">
                                    <strong>
                                        <i class="fa fa-long-arrow-up fa-fw"></i>Status Update</strong>
                                </span>
                                <span class="small float-right text-muted">11:21 AM</span>
                                <div class="dropdown-message small">This is an automated server response message. All systems are online.</div>
                            </a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">
                                <span class="text-danger">
                                    <strong>
                                        <i class="fa fa-long-arrow-down fa-fw"></i>Status Update</strong>
                                </span>
                                <span class="small float-right text-muted">11:21 AM</span>
                                <div class="dropdown-message small">This is an automated server response message. All systems are online.</div>
                            </a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">
                                <span class="text-success">
                                    <strong>
                                        <i class="fa fa-long-arrow-up fa-fw"></i>Status Update</strong>
                                </span>
                                <span class="small float-right text-muted">11:21 AM</span>
                                <div class="dropdown-message small">This is an automated server response message. All systems are online.</div>
                            </a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item small" href="#">View all alerts</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <form class="form-inline my-2 my-lg-0 mr-lg-2">
                            <div class="input-group">
                                <input class="form-control" type="text" placeholder="Search for...">
                                <span class="input-group-append">
                                    <button class="btn btn-primary" type="button">
                                        <i class="fa fa-search"></i>
                                    </button>
                                </span>
                            </div>
                        </form>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="modal" data-target="#exampleModal">
                            <i class="fa fa-fw fa-sign-out"></i>Logout</a>
                    </li>
                </ul>
            </div>
        </nav>
        <div class="content-wrapper">
            <div class="container-fluid">
                <!-- Breadcrumbs-->
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="#">Dashboard</a>
                    </li>
                    <li class="breadcrumb-item active">My Dashboard</li>
                </ol>
                <!-- Icon Cards-->
                <div class="row">
                    <!-- /. Start the progress work from here -->

                    <form id="msform">
                        <!-- Progressbar -->

                        <ul id="progressbar">

                            <li class="active">Account Setup</li>

                            <li>Doctor Appointment</li>

                            <li>Audit</li>

                        </ul>



                        <!-- fieldset -->

                        <fieldset>

                            <h2 class="fs-title">User </h2>

                            <h3 class="fs-subtitle">This is step 1</h3>
                            <label class="label-input100" for="name">1. Name of applicant</label>
                            <div class="wrap-input100 rs1-wrap-input100 validate-input" data-validate="Type name">
                                <input id="name" class="input100" type="text" name="name" placeholder="Name of the applicant">
                                <span class="focus-input100"></span>
                            </div>
                          
                            
                            <label class="label-input100" >2. Photograph-Passport Size</label>
		<div class="col-xs-3">
            <input type="file" name="passportphoto"></input>
        </div>
                            
                            <label class="label-input100" for="message">3. General Medical Condition</label>
				<div class="wrap-input100 validate-input" data-validate = "GMC is Required">
					<textarea id="medical comdition" class="input100" name="medical condition" placeholder="Please specify general medical condition">
					</textarea>
					<span class="focus-input100"></span>
				</div>
                            
                            <label class="label-input100" for="optradio1">3.a General State of Health*</label>
				<div class="wrap-input100 rs1-wrap-input100 validate-input" data-validate="Select state of health">
							<label class="radio-inline Container-input"><input type="radio" id="optradio1" name="optradio1">Good</label>
                        <label class="radio-inline Container-input"><input type="radio" id="optradio1"  name="optradio1">Bad</label>
					<span class="focus-input100"></span>
				</div>
                            
                            <label class="label-input100" for="optradio2">3.b Vision including colour vision *</label>
				<div class="wrap-input100 rs1-wrap-input100 validate-input" data-validate="Vision">
								<label class="radio-inline Container-input"><input type="radio" id="optradio2"  name="optradio2">YES</label>
<label class="radio-inline Container-input"><input type="radio" id="optradio2"  name="optradio2">NO</label><br>

					<span class="focus-input100"></span>
				</div>
                            
                            
                            <label class="label-input100">3.c Hearing</label>
				<div class="wrap-input100 rs2-wrap-input100 validate-input" data-validate="Type Hearing details">
					<input class="input100"  type="text"  placeholder="Please specify hearing details">
					<span class="focus-input100"></span>
				</div>
                            
                            <label class="label-input100">3.d State of mental health</label>
				<div class="wrap-input100 rs2-wrap-input100 validate-input" data-validate="Type mental health details">
					<input class="input100"  type="text"  placeholder="Please specify mental health">
					<span class="focus-input100"></span>
				</div>
                            
                            
                             <label class="label-input100" for="sel1">Nature of Orthopedic Impairment & duration *</label>
			
			<div class="wrap-input100 validate-input" data-validate = "Please Select any one">
   <select class="form-control" id="sel1" name="sel1" onclick="clicked()">
    <option>Paralysis</option>
    <option>Deformity</option>
    <option>/Loss of Limb</option>
    <option>Others*</option>
  </select>
</div>
                             
                             <label class="label-input100">3.f Cause of impairment</label>
				<div class="wrap-input100 rs2-wrap-input100 validate-input" data-validate="Type cause of impairment">
					<input class="input100" type="text"  placeholder="Please specify Cause of impairment">
					<span class="focus-input100"></span>
				</div>
                             
                             <label class="label-input100">3.g Percentage of Orthopedic impairment(in words & in figures)</label>
				<div class="wrap-input100 rs2-wrap-input100 validate-input" data-validate="Type percentage of orthopedic impairment">
					<input class="input100" type="text"  placeholder="Please specify Cause percentage of orthopedic impairment">
					<span class="focus-input100"></span>
				</div>
                             
                             	<label class="label-input100">3.h Use of appliance, if any</label>
				<div class="wrap-input100 rs2-wrap-input100 validate-input" data-validate="Use of appliance">
					<input class="input100" type="text"  placeholder="Please specify if any use of appliance">
					<span class="focus-input100"></span>
				</div>
				<label class="label-input100">3.i Whether permanent in nature</label>
				<div class="wrap-input100 rs2-wrap-input100 validate-input" data-validate="Type whether permanent in nature">
					<input class="input100" type="text"  placeholder="Please specify whether permanent in nature">
					<span class="focus-input100"></span>
				</div>
				
                            
                            
                                
                                    
                                    


                                    <input type="button" name="next" class="next action-button" value="Next" />

                                    </fieldset>



                                    <fieldset>

                                        <h2 class="fs-title">Doctor Appointment</h2>

                                        <h3 class="fs-subtitle">This is step 2</h3>

                                        <input type="text" name="state" placeholder="State"  />



                                        <input type="button" name="previous" class="previous action-button" value="Previous" />

                                        <input type="button" name="next" class="next action-button" value="Next" />

                                    </fieldset>



                                    <fieldset>

                                        <h2 class="fs-title">Audit</h2>

                                        <h3 class="fs-subtitle">This is step 3</h3>



                                        <textarea name="address" placeholder="address"></textarea>

                                        <input type="button" name="previous" class="previous action-button" value="Previous" />

                                        <input type="submit" name="next" class="submit action-button" value="Submit" />

                                    </fieldset>



                                    </form>

                                    <style>
                                        *{ margin:0; padding:0;}







                                        /* form style */

                                        #msform{

                                            width:400px;

                                            margin:50px auto;

                                            text-align:center;

                                            position:relative;

                                        }



                                        #msform fieldset{

                                            background:whitesmoke;

                                            border:0 none;

                                            border-radius:3px;

                                            box-shadow:0 0 15px 1px rgba(0,0,0,0.4);

                                            padding:20px 30px;

                                            box-sizing:border-box;

                                            -moz-box-sizing:border-box; /* Firefox */

                                            width:100%;

                                            margin:0 10%;

                                            /*stacking fieldsets above each other*/

                                            position: absolute;

                                        }



                                        /* headings */

                                        .fs-title{

                                            font-size:15px;

                                            text-transform:uppercase;

                                            color: #2C3E50;

                                            margin-bottom:10px;

                                        }



                                        .fs-subtitle{

                                            font-weight:normal;

                                            font-size:13px;

                                            color:#666;

                                            margin-bottom:20px;

                                        }



                                        /* progress bar */

                                        #progressbar{

                                            margin-bottom:30px;

                                            overflow:hidden;

                                            /* CSS counters to number the steps */

                                            counter-reset:sothutu;

                                        }



                                        #progressbar li{

                                            list-style-type:none;

                                            color:red;

                                            text-transform:uppercase;

                                            font-size:9px;

                                            width:33.33%;

                                            float:left;

                                            position:relative;

                                        }



                                        #progressbar li:before{

                                            content:counter(sothutu);

                                            counter-increment:sothutu;

                                            width:20px;

                                            line-height:20px;

                                            font-size:10px;

                                            background:#fff;

                                            color:#333;

                                            font-weight:bold;

                                            border-radius:3px;

                                            margin:0 auto 5px auto;

                                            display:block;

                                        }



                                        /* progressbar connectors */

                                        #progressbar li:after{

                                            content:'';

                                            width:100%;

                                            height:2px;

                                            background:#fff;

                                            position:absolute;

                                            left:-50%;

                                            top:9px;

                                            z-index:-1; /* put it behind the numbers */

                                        }



                                        #progressbar li:first-child:after{

                                            /*connector not needed before the first step*/

                                            content:none;

                                        }



                                        /*marking active/completed steps green*/

                                        #progressbar li.active:before,#progressbar li.active:after{

                                            background:green;

                                            color:#fff;

                                        }



                                        /* Hide all except first fieldset */

                                        #msform fieldset:not(:first-of-type){

                                            display:none;

                                        }



                                        /* inputs */

                                        #msform input, #msform textarea{

                                            padding:15px;

                                            border:1px solid #ccc;

                                            border-radius:3px;

                                            margin-bottom:10px;

                                            width:100%;

                                            box-sizing:border-box;

                                            -moz-box-sizing:border-box; /* for Firefox */

                                            color: #2C3E50;

                                        }



                                        /* buttons */

                                        #msform .action-button{

                                            width:100px;

                                            background: #27AE60;

                                            font-weight: bold;

                                            color: green;

                                            border:0 none;

                                            border-radius:1px;

                                            cursor:pointer;

                                            padding:10px 5px;

                                            margin:10px 5px;

                                        }



                                        #msform .action-button:hover,#msform .action-button:focus{

                                            box-shadow:0 0 0 2px white,0 0 0 3px #27AE60;

                                        }
                                    </style>


                                </div>


                                <!-- /.container-fluid-->
                                <!-- /.content-wrapper-->
                                <footer class="sticky-footer">
                                    <div class="container">
                                        <div class="text-center">
                                            <small>Copyright © Your Website 2018</small>
                                        </div>
                                    </div>
                                </footer>
                                <!-- Scroll to Top Button-->
                                <a class="scroll-to-top rounded" href="#page-top">
                                    <i class="fa fa-angle-up"></i>
                                </a>
                                <!-- Logout Modal-->
                                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                                                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">×</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                                            <div class="modal-footer">
                                                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                                                <a class="btn btn-primary" href="<?php echo base_url(); ?>">Logout</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <!-- Bootstrap core JavaScript-->
                                <script src="<?php echo base_url(); ?>vendor/jquery/jquery.min.js"></script>
                                <script src="<?php echo base_url(); ?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
                                <!-- Core plugin JavaScript-->
                                <script src="<?php echo base_url(); ?>vendor/jquery-easing/jquery.easing.min.js"></script>
                                <!-- Page level plugin JavaScript-->
                                <script src="<?php echo base_url(); ?>vendor/chart.js/Chart.min.js"></script>
                                <script src="<?php echo base_url(); ?>vendor/datatables/jquery.dataTables.js"></script>
                                <script src="<?php echo base_url(); ?>vendor/datatables/dataTables.bootstrap4.js"></script>
                                <!-- Custom scripts for all pages-->
                                <script src="<?php echo base_url(); ?>js/sb-admin.min.js"></script>
                                <!-- Custom scripts for this page-->
                                <script src="<?php echo base_url(); ?>js/sb-admin-datatables.min.js"></script>
                                <script src="<?php echo base_url(); ?>js/sb-admin-charts.min.js"></script>
                                <script src="<?php echo base_url(); ?>js/progressbar.js" type="text/javascript"></script>

                            </div>
                            </body>

                            </html>
