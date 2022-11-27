<!DOCTYPE html>
<html lang="en">
<?php
require_once("config.php");
$patientname = null;
if (isset($_GET["patientname"])) {
    $patientname = $_GET["patientname"];
}
$patientname = $_REQUEST['patientname'];
$sql = "SELECT * FROM patient NATURAL JOIN appointment where patientname = '" . $patientname . "'";
$result = mysqli_query($link, $sql) or die("Error in query: $sql " . mysqli_error($link));
$data = mysqli_fetch_array($result);
// $date_time = new DateTime($row["date_time"]);
// $date_time = $date_time->format('Y-m-d - H:i');
?>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">
    <title>Hospital System Group 2</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">a
    <!--[if lt IE 9]>
    <script src="assets/js/html5shiv.min.js"></script>
    <script src="assets/js/respond.min.js"></script>
    <![endif]-->
</head>

<body>
    <div class="main-wrapper">
        <div class="header">
            <div class="header-left">
                <a href="index-2.html" class="logo">
                    <img src="assets/img/logo.png" width="35" height="35" alt=""> <span>Hospital</span>
                </a>
            </div>
            <a id="toggle_btn" href="javascript:void(0);"><i class="fa fa-bars"></i></a>
            <a id="mobile_btn" class="mobile_btn float-left" href="#sidebar"><i class="fa fa-bars"></i></a>
            <ul class="nav user-menu float-right">
                <li class="nav-item dropdown d-none d-sm-block">
                    <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown"><i class="fa fa-bell-o"></i> <span class="badge badge-pill bg-danger float-right">3</span></a>
                    <div class="dropdown-menu notifications">
                        <div class="topnav-dropdown-header">
                            <span>Notifications</span>
                        </div>
                        <div class="drop-scroll">
                            <ul class="notification-list">
                                <li class="notification-message">
                                    <a href="activities.html">
                                        <div class="media">
                                            <span class="avatar">
                                                <img alt="John Doe" src="assets/img/user.jpg" class="img-fluid">
                                            </span>
                                            <div class="media-body">
                                                <p class="noti-details"><span class="noti-title">John Doe</span> added new
                                                    task <span class="noti-title">Patient appointment booking</span></p>
                                                <p class="noti-time"><span class="notification-time">4 mins ago</span></p>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="notification-message">
                                    <a href="activities.html">
                                        <div class="media">
                                            <span class="avatar">V</span>
                                            <div class="media-body">
                                                <p class="noti-details"><span class="noti-title">Tarah Shropshire</span>
                                                    changed the task name <span class="noti-title">Appointment booking with payment gateway</span>
                                                </p>
                                                <p class="noti-time"><span class="notification-time">6 mins ago</span></p>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="notification-message">
                                    <a href="activities.html">
                                        <div class="media">
                                            <span class="avatar">L</span>
                                            <div class="media-body">
                                                <p class="noti-details"><span class="noti-title">Misty Tison</span> added
                                                    <span class="noti-title">Domenic Houston</span> and <span class="noti-title">Claire Mapes</span> to project <span class="noti-title">Doctor available module</span>
                                                </p>
                                                <p class="noti-time"><span class="notification-time">8 mins ago</span></p>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="notification-message">
                                    <a href="activities.html">
                                        <div class="media">
                                            <span class="avatar">G</span>
                                            <div class="media-body">
                                                <p class="noti-details"><span class="noti-title">Rolland Webber</span>
                                                    completed task <span class="noti-title">Patient and Doctor video conferencing</span>
                                                </p>
                                                <p class="noti-time"><span class="notification-time">12 mins ago</span></p>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="notification-message">
                                    <a href="activities.html">
                                        <div class="media">
                                            <span class="avatar">V</span>
                                            <div class="media-body">
                                                <p class="noti-details"><span class="noti-title">Bernardo Galaviz</span>
                                                    added new task <span class="noti-title">Private chat module</span></p>
                                                <p class="noti-time"><span class="notification-time">2 days ago</span></p>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="topnav-dropdown-footer">
                            <a href="activities.html">View all Notifications</a>
                        </div>
                    </div>
                </li>
                <li class="nav-item dropdown d-none d-sm-block">
                    <a href="javascript:void(0);" id="open_msg_box" class="hasnotifications nav-link"><i class="fa fa-comment-o"></i> <span class="badge badge-pill bg-danger float-right">8</span></a>
                </li>
                <li class="nav-item dropdown has-arrow">
                    <a href="#" class="dropdown-toggle nav-link user-link" data-toggle="dropdown">
                        <span class="user-img">
                            <img class="rounded-circle" src="assets/img/user.jpg" width="24" alt="Admin">
                            <span class="status online"></span>
                        </span>
                        <span>Doctor</span>
                    </a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="profile.html">My Profile</a>
                        <a class="dropdown-item" href="edit-profile.html">Edit Profile</a>
                        <a class="dropdown-item" href="settings.html">Settings</a>
                        <a class="dropdown-item" href="login.html">Logout</a>
                    </div>
                </li>
            </ul>
            <div class="dropdown mobile-user-menu float-right">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
                <div class="dropdown-menu dropdown-menu-right">
                    <a class="dropdown-item" href="profile.html">My Profile</a>
                    <a class="dropdown-item" href="edit-profile.html">Edit Profile</a>
                    <a class="dropdown-item" href="settings.html">Settings</a>
                    <a class="dropdown-item" href="login.html">Logout</a>
                </div>
            </div>
        </div>
        <div class="sidebar" id="sidebar">
            <div class="sidebar-inner slimscroll">
                <div id="sidebar-menu" class="sidebar-menu">
                    <ul>
                        <li>
                            <a href="schedule.php"><i class="fa fa-calendar"></i> <span>Schedule</span></a>
                        </li>
                        <li>
                            <a href="calendar.html"><i class="fa fa-calendar-check-o"></i> <span>Calendar</span></a>
                        </li>
                        <li>
                            <a href="patients.php"><i class="fa fa-wheelchair"></i> <span>Patients</span></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="page-wrapper">
            <a style="margin-left: 25px; margin-top: 10px; font-size: large" type="button" class="btn btn-light" href="schedule.html"></a>
            <div class="content">
                <div class="row">
                    <div class="col-md-12">
                        <h1 style="margin-left: 10px"><?php echo $data['patientname'] ?></h1>
                        <br>
                    </div>
                    <div class="col-md-12">
                        <div class="card-box">
                            <h4 class="card-title">Personal Information</h4>
                            <p>age: <?php echo $data['age'] ?></p>
                            <p>gender: <?php echo $data['phone'] ?></p>
                            <p>phone number: <?php echo $data['gender'] ?></p>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="card-box">
                            <ul class="nav nav-tabs nav-justified">
                                <li class="nav-item"><a class="nav-link active" href="#basic-justified-tab1" data-toggle="tab">Diagnosis</a></li>
                                <li class="nav-item"><a class="nav-link" href="#basic-justified-tab2" data-toggle="tab">Medication</a>
                                </li>

                            </ul>
                            <div class="tab-content">
                                <div class="tab-pane show active" id="basic-justified-tab1">
                                    <form method="POST" action="insertorupdate.php">
                                        <h4 class="card-title">Current Information</h4>
                                        <div class="row">
                                            <div class="col-md-3">
                                                <p>Visit Date time: <input type="text" class="form-control"  name="Visit_Date" value="<?php echo $data['date_time'] ?>"></p>
                                                <p>PatientID:<input type="text" class="form-control"  name="patientid" value="<?php echo $data['patientid'] ?>"></p>
                                                <!-- <p>Blood Pressure: 80</p> -->
                                            </div>
                                            <!-- <div class="col-md-3">
                                                <p>Temp: 38 C</p>
                                                <p>Weight: 90 kg</p>
                                                <p>Height: 177 cm</p>
                                            </div> -->
                                        </div>
                                        <h4 class="card-title">Medical History</h4>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label>On Treatment</label>
                                                    <input type="text" class="form-control" name="On_Treatment" value="Antibiotics">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label>Surgical History</label>
                                                    <input type="text" class="form-control" name="Surgical_History" value="Lobotomy">
                                                    <!-- <input type="text" class="form-control" disabled="disabled" value="Head Transplant"> -->

                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label>Past Test Results</label>
                                                    <input type="text" class="form-control" name="Past_TestResult" value="HIV: Positive">
                                                </div>
                                            </div>
                                        </div>
                                        <h4 class="card-title">Current Visit</h4>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label>Complaints, Observations, Findings</label>
                                                    <textarea rows="5" cols="5" class="form-control" placeholder="Type Here"></textarea>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <p>Diagnosis</p>
                                                <div class="form-group row">
                                                    <label class="col-md-3 col-form-label">Primary</label>
                                                    <div class="col-md-9"><input type="text" class="form-control" name="Diagnosis"></div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-md-3 col-form-label">Secondary</label>
                                                    <div class="col-md-9"><input type="text" class="form-control"></div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Treatment Advised</label>
                                                    <textarea rows="5" cols="5" class="form-control" placeholder="Enter message"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="text-center">
                                            <button type="submit" name="submit" class="btn btn-primary">Save</button>
                                        </div>
                                    </form>
                                </div>

                                <div class="tab-pane" id="basic-justified-tab2">
                                    <form method="POST" action="insertMedication.php">
                                        <div class="form-row">
                                            <div class="col-2">
                                                <label>ID</label>
                                                <input type="text" class="form-control" placeholder="SX001" name="medicineID" id="id">
                                            </div>
                                            <div class="col-7">
                                                <label>Name</label>
                                                <input type="text" class="form-control" placeholder="Benzodiazepine" name="medicineName" id="name">
                                            </div>
                                            <div class="col">
                                                <label>Strength</label>
                                                <input type="text" class="form-control" placeholder="0 ml" name="strength" id="strength">
                                            </div>
                                            <div class="col">
                                                <label>Duration</label>
                                                <input type="text" class="form-control" placeholder="0 days" name="duration" id="duration">
                                            </div>
                                            <div class="col">
                                                <label>Dosage</label>
                                                <input type="text" class="form-control" placeholder="0 dose" name="dosage" id="dosage">
                                            </div>
                                        </div>
                                        <div class="text-center mt-3 mb-5 " style="margin-top: 2">
                                            <!-- <button type="submit" class="btn btn-primary" onclick="addMedication()">Submit</button> -->
                                            <button type="submit" name="submit" class="btn btn-primary" onclick="addMedication()">Submit</button>

                                        </div>
                                        <!-- <table class="table" id="medicineTable">
                                        <thead>
                                            <tr>
                                                <th class="col-2">ID</th>
                                                <th class="col-7">Name</th>
                                                <th>Strength</th>
                                                <th>Duration</th>
                                                <th>Dosage</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        </tbody>
                                    </table>
                                    <div class="text-center mt-3 mb-5 " style="margin-top: 2">
                                        <button type="submit" class="btn btn-primary" data-toggle="modal" data-target="#myModal">Save
                                        </button>
                                    </div> -->

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

<script>
    function addMedication() {
        $("#medicineTable tbody").append("<tr>" +
            "<td>" + $("#id").val() + "</td>" +
            "<td>" + $("#name").val() + "</td>" +
            "<td>" + $("#strength").val() + "</td>" +
            "<td>" + $("#duration").val() + "</td>" +
            "<td>" + $("#dosage").val() + "</td>" +
            "</tr>"
        )
    };
</script>