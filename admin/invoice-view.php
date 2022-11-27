<!DOCTYPE html>
<html lang="en">


<!-- invoice-view24:07-->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">
    <title>Hospital - Bootstrap 4 Admin Template</title>
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/select2.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <!--[if lt IE 9]>
		<script src="assets/js/html5shiv.min.js"></script>
		<script src="assets/js/respond.min.js"></script>
	<![endif]-->
</head>

<body>
    <div class="main-wrapper">
        <div class="header">
			<div class="header-left">
				<a class="logo">
					<img src="assets/img/logo.png" width="35" height="35" alt=""> <span>Hospital</span>
				</a>
			</div>
			<a id="toggle_btn" href="javascript:void(0);"><i class="fa fa-bars"></i></a>
            <a id="mobile_btn" class="mobile_btn float-left" href="#sidebar"><i class="fa fa-bars"></i></a>
            <ul class="nav user-menu float-right">
                
                <li class="nav-item dropdown has-arrow">
                    <a href="#" class="dropdown-toggle nav-link user-link" data-toggle="dropdown">
                        <span class="user-img"><img class="rounded-circle" src="assets/img/user.jpg" width="40" alt="Admin">
							<span class="status online"></span></span>
                        <span>Admin</span>
                    </a>
					<div class="dropdown-menu">

						<a class="dropdown-item" href="login.html">Logout</a>
					</div>
                </li>
            </ul>
            <div class="dropdown mobile-user-menu float-right">
                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
                <div class="dropdown-menu dropdown-menu-right">
                    <a class="dropdown-item" href="login.html">Logout</a>
                </div>
            </div>
        </div>
        <div class="sidebar" id="sidebar">
            <div class="sidebar-inner slimscroll">
                <div id="sidebar-menu" class="sidebar-menu">
                    <ul>
                        <li class="menu-title">Main</li>
                        <li>
                            <a href="index.php class="content"><i class="fa fa-search"></i> <span>Search</span></a>
                        </li>   
						<li>
                            <a href="doctors.php"><i class="fa fa-user-md"></i> <span>Doctors</span></a>
                        </li>
                        <li>
                            <a href="patients.php"><i class="fa fa-wheelchair"></i> <span>Patients</span></a>
                        </li>
                        <li>
                            <a href="appointments.php"><i class="fa fa-calendar"></i> <span>Appointments</span></a>
						</li>
					</ul>
                </div>
            </div>
        </div>
        <div class="page-wrapper">
            <div class="content">
                <div class="row">
                    <div class="col-sm-5 col-4">
                        <h4 class="page-title">Invoice</h4>
                    </div>
                    <div class="col-sm-7 col-8 text-right m-b-30">
                        <div class="btn-group btn-group-sm">
                            <a href="#" onclick="window.print();return false;"><i class="fa fa-print fa-lg"></i></a>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="row custom-invoice">
                                    <div class="col-6 col-sm-6 m-b-20">
                                        <img src="assets/img/logo-dark.png" class="inv-logo" alt="">
                                        <ul class="list-unstyled">
                                            <li>Hospital</li>
                                        </ul>
                                    </div>
                                   
                                </div>
                                
                                    
                                <div class="table-responsive">
                                    <table class="table table-striped table-hover">
                                        <thead>
                                            <tr>
                                                <th>INVOICE NO</th>
                                                <th>UNIT COST</th>
                                                <th>MEDICINE NAME</th>
                                                <th>QUANTITY</th>
                                                <th>TOTAL</th>
                                            </tr>
                                        </thead>
                                        <tbody>





                                        <!-- <?php
                                        require("config.php");
                                        $id=$_GET['patientid'];
                                        $visit_date = $_GET['Visit_Date'];
                                                                            // Collecting data from query string
                                        if(!is_numeric($id)){ // Checking data it is a number or not
                                        echo "Data Error";    
                                        exit;
                                        }
                    
                                        $sql ="SELECT * FROM medbill WHERE patientid=? & Visit_Date = ?";
                                                        
                                        if($stmt = $link->prepare($sql)){
                                        $stmt->bind_param('i',$id,$visit_date);
                                        $stmt->execute();
                                                          
                                        $result = $stmt->get_result();
                                        echo "No of records : ".$result->num_rows."<br>";
                                        $row=$result->fetch_object();
                                        echo "<tr ><td><b>invoiceNo</b></td><td>$row->invoiceNo</td></tr>;
                                        <tr><td><b>unitcost</b></td><td>$row->unitcost</td></tr>
                                        <tr ><td><b>quantity</b></td><td>$row->quantity</td></tr>
                                        <tr><td><b>medicinename</b></td><td>$row->medicinename</td></tr>
                                        <tr ><td><b>total</b></td><td>$row->total</td></tr>";
                    
                                        }
                                        ?> -->
                                                
                                                
                                            
                                                       
                                        <div class="m-t-20 text-center">
                                            <a href="medical record.html" class="btn btn-primary submit-btn">Close</a>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="sidebar-overlay" data-reff=""></div>
    <script src="assets/js/jquery-3.2.1.min.js"></script>
	<script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/jquery.slimscroll.js"></script>
    <script src="assets/js/app.js"></script>
</body>


<!-- invoice-view24:07-->
</html>