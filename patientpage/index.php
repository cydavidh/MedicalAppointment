<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
	<link rel="shortcut icon" type="image/x-icon" href="assets/favicon.ico">
    <title> Hospital Appointment </title>
	
    <!-- css -->
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" type="text/css" href="plugins/cubeportfolio/css/cubeportfolio.min.css">
	<link rel="stylesheet" href="jquery.datetimepicker.min.css">
	<link href="css/nivo-lightbox.css" rel="stylesheet" />
	<link href="css/nivo-lightbox-theme/default/default.css" rel="stylesheet" type="text/css" />
	<link href="css/owl.carousel.css" rel="stylesheet" media="screen" />
    <link href="css/owl.theme.css" rel="stylesheet" media="screen" />
	<link href="css/animate.css" rel="stylesheet" />
    <link href="css/style.css" rel="stylesheet">

	<link rel="stylesheet" href="https://formden.com/static/cdn/bootstrap-iso.css" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker3.css"/>	

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-ui-timepicker-addon/1.6.3/jquery-ui-timepicker-addon.min.css" />

	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js"></script>
	<script type="text/javascript" src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
		


	<!-- boxed bg -->
	<link id="bodybg" href="bodybg/bg1.css" rel="stylesheet" type="text/css" />
	<!-- template skin -->
	<link id="t-colors" href= "color/default.css" rel="stylesheet">


</head>

<body id = "page-top" data-spy = "scroll" data-target = ".navbar-custom">

<div id = "wrapper">
	
    <nav class= "navbar navbar-custom navbar-fixed-top" role = "navigation">
		<div class = "top-area">
			<div class = "container">
				<div class = "row">
					<div class = "col-sm-6 col-md-6">
					<p class = "bold text-left"> Hospital Management System </p>
					</div>
					<div class = "col-sm-6 col-md-6">
					<p class = "bold text-right"> Group 2 </p>
					</div>
				</div>
			</div>
		</div>
        <!-- /.container -->
    </nav>
	

	<!-- Section: intro -->
    <section id="intro" class="intro">
		<div class="intro-content">
			<div class="container">
				<div class="row">
					<div class="col-lg-6">
						<div class="form-wrapper">
							<div class="panel panel-skin">
							<div class="panel-heading">
									<h3 class="panel-title"><span class="fa fa-pencil-square-o"></span> Make An Appointment </h3>
									</div>
									<div class="panel-body">
									<form action = "submitted.php" method ="POST" role="form" class="lead">
										<div class="row">
											<div class="col-xs-6 col-sm-6 col-md-6">
												<div class="form-group">
													<label> Full Name </label>
													<input type="text" name="fullname" id="fullname" class="form-control input-md" placeholder = "Enter Name">
												</div>
											</div>
											<div class="col-xs-6 col-sm-6 col-md-6">
												<div class="form-group">
													<label> ID Number </label>
													<input type="text" name="idnumber" id="idnumber" class="form-control input-md" placeholder = "Enter ID">
												</div>
											</div>
										</div>

										<div class="row">
											<div class="col-xs-6 col-sm-6 col-md-6">
												<div class="form-group">
													<label> Doctor </label>
													<select name = "doctors" id= "doctors" class= "form-control input-md">
													<?php

													$link = mysqli_connect("localhost","root","","hospital");

													$sql = "SELECT doctorname FROM doctors;";

													$result = mysqli_query($link,$sql);
													if ($result != 0) {
												
														echo '<option value=""> Choose Doctor </option>';

														$num_results = mysqli_num_rows($result);
														for ($i=0;$i<$num_results;$i++) {
															$row = mysqli_fetch_array($result);
															$doctor = $row['doctorname'];
															echo '<option value ="' .$doctor. '">' .$doctor. '</option>';
														}

														
													}

													mysqli_close($link);

													?>
													  </select>
												</div>
											</div>

											<div class="col-xs-6 col-sm-6 col-md-6">
												<div class="form-group">
													<label> Date & Time </label>
													
													<p><input type="text" name = "datepicker" id="datepicker" class="form-control input-md" placeholder = "Choose Date/Time" </p>
													<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
													<script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
													<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-ui-timepicker-addon/1.6.3/jquery-ui-timepicker-addon.min.js"></script>
													<script>
													jQuery(function($) {
														$("#datepicker").datetimepicker();
													});
													</script>
												</div>
											</div>
										</div>

										<div class="col-xs-12 col-sm-12 col-md-12">
										<p></p>
										<br>
											<input type="submit" value="Submit" class="btn btn-skin btn-block btn-lg pt-5">	
											</div>
											<br>
											<br>
											<br>
												<div class="col-xs-12 col-sm-12 col-md-12">
												<?php
												if(isset($_GET['success'])){ 
													$success = $_GET['success'];
													if($success == 'true')
													{

													echo('<div id="info" class="alert alert-success" role="alert">
															<p style="text-align:center"> Appointment Recorded Successfully! </p>
																<form action="index.php" method="post">
																</form>
														</div>');
													}
													elseif ($success == 'false') {
														echo('<div id="info" class="alert alert-success" role="alert">
																<p style="text-align:center">Invalid ID! Please Contact Hospital. </p>
																	<form action="index.php" method="post">
																	</form>
															</div>');
														}
												} 
												?>
									</form>
								</div>
							</div>	
						</div>
						</div>
					</div>					
				</div>		
			</div>
		</div>		
    </section>


	</section>

	<!-- Core JavaScript Files -->
    <script src="js/jquery.min.js"></script>	 
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.easing.min.js"></script>
	<script src="js/wow.min.js"></script>
	<script src="js/jquery.scrollTo.js"></script>
	<script src="js/jquery.appear.js"></script>
	<script src="js/stellar.js"></script>
	<script src="plugins/cubeportfolio/js/jquery.cubeportfolio.min.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/nivo-lightbox.min.js"></script>
    <script src="js/custom.js"></script>
	<script src="jquery.js"></script>	

	<!--  jQuery -->
	<script type="text/javascript" src="https://code.jquery.com/jquery-1.11.3.min.js"></script>

<!-- Isolated Version of Bootstrap, not needed if your site already uses Bootstrap -->
<link rel="stylesheet" href="https://formden.com/static/cdn/bootstrap-iso.css" />



</body>
</html>
