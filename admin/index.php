<!DOCTYPE html>
<html lang="en">



<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">
    <title>Hospital Admin</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.min.css">
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
                            <a href="index.php" class="content"><i class="fa fa-search"></i> <span>Search</span></a>
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
                
            <form method = "POST" action="searchP.php">    
            <div class="row">
                    <div class="col-sm-4 col-3">
                        <h4 class="page-title">Patient</h4>
                    </div>
                    <div class="col-sm-8 col-9 text-right m-b-20">
                        <a href="patient.php" class="btn btn-primary float-right btn-rounded" class="fa fa-plus"> View all Pateint</a>
                    </div>
                </div>
                <div class="row filter-row">
                    <div class="col-sm-6 col-md-3">
                        <div class="form-group form-focus">
                            <label class="focus-label">Pateint Name</label>
                            <input type="text" name = "searchP" class="form-control floating">
                        </div>
                    </div>
  
                    <div class="col-sm-6 col-md-3">
                        <a href="#" class="btn btn-success btn-block"> Search </a>

					 </div>
				</div>
                </form> 
                <form method = "POST" action = "searchD">
                <div class="row">
                    <div class="col-sm-4 col-3">
                        <h4 class="page-title">doctors</h4>
                    </div>
                    <div class="col-sm-8 col-9 text-right m-b-20">
                        <a href="doctors.php" class="btn btn-primary float-right btn-rounded" class="fa fa-plus"> View all Doctors</a>
                    </div>
                </div>
                <div class="row filter-row">
                    <div class="col-sm-6 col-md-3">
                        <div class="form-group form-focus">
                            <label class="focus-label">doctors Name</label>
                            <input type="text" name = "searchD" class="form-control floating">
                        </div>
                    </div>
                    
                    <div class="col-sm-6 col-md-3">
                        <a href="#" class="btn btn-success btn-block"> Search </a>
                        
					</div>
                </div>
                </form>
            </div>    
        </div>
    </div>
    <div class="sidebar-overlay" data-reff=""></div>
    <script src="assets/js/jquery-3.2.1.min.js"></script>
	<script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/jquery.slimscroll.js"></script>
    <script src="assets/js/Chart.bundle.js"></script>
    <script src="assets/js/chart.js"></script>
    <script src="assets/js/app.js"></script>

</body>



</html>