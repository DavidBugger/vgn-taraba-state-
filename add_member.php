<?php include('db_con.php');?>
<?php
 	if(isset($_POST['submit'])){
 		$surname = $_POST['surname'];
        $firstname = $_POST['firstname'];
 		$othernames = $_POST['othernames'];
		$register_no = $_POST['register_no'];
        $gender = $_POST['gender'];
        $dob = $_POST['dob'];
 		$register_no = $_POST['register_no'];
 		$state_command = $_POST['state_command'];
        $wards = $_POST['wards'];
        $m_status =  $_POST['m_status'];
        $position = $_POST['position'];
        $intake = $_POST['intake'];
        $unit = $_POST['unit'];
        $occupation = $_POST['occupation'];
        $phone_no = $_POST['phone_no'];
        $email = $_POST['email'];
        $lga_command = $_POST['lga_command'];
        $member_status = $_POST['member_status'];
 		
 		$sql = "INSERT INTO members (surname,firstname, othernames, register_no, gender, dob, state_command, wards, m_status, position, intake, unit,occupation,phone_no,email,lga_command,member_status)
         VALUES ('$surname','$firstname',  '$othernames', '$register_no', '$gender', '$dob', '$state_command', '$wards', '$m_status', '$position', '$intake', '$unit', '$occupation', '$phone_no','$email', '$lga_command', '$member_status')";
 		$result = mysqli_query($conn,$sql);
 		if(!$result){
            echo "<div class='alert alert-success'>";
            echo "<strong>Error!</strong> in submisssion.Please try again.";
            echo "</div>";
 		}else{
 			echo "<div class='alert alert-success'>";
            echo "<strong>Success!</strong> Record has been Inserted Successfully";
            echo "</div>";
 		}
 	}

//  Bugger'codes
  ?>

       
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
    	<meta name="viewport" content="width=device-width, initial-scale=1">
        <title>VGN-TARABA</title>
        <link rel="stylesheet" href="assets/css/bootstrap.min.css" media="screen" >
        <link rel="stylesheet" href="assets/css/font-awesome.min.css" media="screen" >
        <link rel="stylesheet" href="assets/css/animate-css/animate.min.css" media="screen" >
        <link rel="stylesheet" href="assets/css/lobipanel/lobipanel.min.css" media="screen" >
        <link rel="stylesheet" href="assets/css/toastr/toastr.min.css" media="screen" >
        <link rel="stylesheet" href="assets/css/icheck/skins/line/blue.css" >
        <link rel="stylesheet" href="assets/css/icheck/skins/line/red.css" >
        <link rel="stylesheet" href="assets/css/icheck/skins/line/green.css" >
        <link rel="stylesheet" href="assets/css/main.css" media="screen" >
        <script src="js/modernizr/modernizr.min.js"></script>

        <style>
        .submit-btn{
          margin-left:50%;


          .submit-me {
            margin-left: 55%;
            background-color: maroon;
            color:white;
          }
        }

        </style>

    </head>
    
    <body class="top-navbar-fixed">
        <div class="main-wrapper">

            <div class="content-wrapper">
                <div class="content-container">
                    <?php include('includes/topbar.php');?>

                    <?php include('includes/leftbar.php');?>

                    <div class="main-page">
                        <div class="container-fluid">
                            <div class="row page-title-div">
                                <div class="col-sm-6">
                                    <h2 class="title">Dashboard</h2>

                                </div>
                                <!-- /.col-sm-6 -->
                            </div>
                            <!-- /.row -->

                        </div>
                        <!-- /.container-fluid -->

                        <br >

                        <form action="add_member.php" method="post" class="form-horizontal" role="form">

                                    <div class="form-group">
                                        <label for="name" class="col-sm-2 control-label">Surname:</label>
                                        <div class="col-sm-10">
                                        <input type="text" class="form-control" name="surname" placeholder="Enter Members's Surname Name" required>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="roll" class="col-sm-2 control-label">Firstname:</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" name="firstname" placeholder="Enter othernames here.." required>
                                        </div>
                                    </div>

                        			<div class="form-group">
                                        <label for="session" class="col-sm-2 control-label">Othernames:</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" name="othernames" placeholder="Othernames" required>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="year" class="col-sm-2 control-label">Registered No:</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" name="register_no" placeholder="Enter Register Number" required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="gpa" class="col-sm-2 control-label">Gender:</label>
                                        <div class="col-sm-10">
                                           <select class="form-control" name = "gender">
                                               <option value ="male">male</option>
                                               <option value ="female">female</option>

                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="gpa" class="col-sm-2 control-label">DOB:</label>
                                        <div class="col-sm-10">
                                        <input type="date" class="form-control" name="dob" placeholder="Enter your Date of Birth "required>
                                        </div>
                                    </div>


                                    <div class="form-group">
                                        <label for="gpa" class="col-sm-2 control-label">Command:</label>
                                        <div class="col-sm-10">
                                           <select class="form-control" name = "state_command">
                                               <option value ="state_command">state Command</option>
                                               <option value ="lg_command">LGA Command</option>
                                               <option value ="ward_command">Ward Command</option>
                                               <option value ="units_command">Units Command</option>

                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="gpa" class="col-sm-2 control-label">Jalingo Wards:</label>
                                        <div class="col-sm-10">
                                           <select class="form-control" name = "wards">
                                               <option value ="turaki_a">Turaki (A) Ward</option>
                                               <option value ="turaki_b">Turaki (B) Ward</option>
                                               <option value ="sintali_a">Sintali (A) Ward</option>
                                               <option value ="sintali_b">Sintali (B) Ward</option>
                                                <option value ="majidadi">Majidadi Ward</option>
                                                 <option value ="dawaki">Sarkin Dawaki Ward</option>
                                                  <option value ="kachalla">Kachalla Sembe Ward</option>
                                                   <option value ="barade">Barade Ward</option>
                                                    <option value ="kona">Kona Ward</option>
                                                    <option value ="yelwa">Yelwa Ward</option>

                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="gpa" class="col-sm-2 control-label">Marital Status:</label>
                                        <div class="col-sm-10">
                                           <select class="form-control" name = "m_status">
                                               <option value ="Married">Married</option>
                                               <option value ="Single">Single</option>
                                            </select>
                                        </div>
                                    </div>


                                    <div class="form-group">
                                        <label for="gpa" class="col-sm-2 control-label">Position/Rank:</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" name="position" placeholder="Enter Position/Rank "required>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="gpa" class="col-sm-2 control-label">Intake:</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" name="intake" placeholder="Enter Intake "required>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="gpa" class="col-sm-2 control-label">Unit:</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" name="unit" placeholder="Enter Unit "required>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="gpa" class="col-sm-2 control-label">Occupation:</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" name="occupation" placeholder="Enter Member's Occupation "required>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="gpa" class="col-sm-2 control-label">Officer GSM No:</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" name="phone_no" placeholder="Enter Member's Phone Number "required>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="gpa" class="col-sm-2 control-label">Officer Email Address:</label>
                                        <div class="col-sm-10">
                                            <input type="email" class="form-control" name="email" placeholder="Enter Member's Email Address"required>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="gpa" class="col-sm-2 control-label">L.G.A Command:</label>
                                        <div class="col-sm-10">
                                           <select class="form-control" name = "lga_command">
                                               <option value ="jalingo">Jalingo LGA</option>
                                               <option value ="ardo-Kola">Ardo-Kola LGA</option>
                                               <option value ="bali">Bali LGA</option>
                                                <option value ="gassol">Gassol LGA</option>
                                                <option value ="ussa">Ussa LGA</option>
                                                <option value ="sardauna">Sardauna LGA</option>
                                                <option value ="kurmi">Kurmi LGA</option>
                                                <option value ="zing">Zing LGA</option>
                                                <option value ="karim">Karim Lamido LGA</option>
                                                <option value ="yorro">Yorro LGA</option>
                                                <option value ="lau">Lau LGA</option>
                                                <option value ="Wukari">Wukari  LGA</option>
                                                <option value ="Takum">Takum LGA</option>
                                                <option value ="donga">Donga LGA</option>
                                                <option value ="ibbi">Ibbi LGA</option>
                                                <option value ="gashaka">Gashaka LGA</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="gpa" class="col-sm-2 control-label">Status:</label>
                                        <div class="col-sm-10">
                                           <select class="form-control" name = "member_status">
                                               <option value ="active">Active</option>
                                               <option value ="inactive">Inactive</option>

                                            </select>
                                        </div>
                                    </div>
                                    <div class="d-flex submit-btn">
                                    <input type="reset" name="reset" value="Reset" class="btn btn-primary" style="padding: 10px; width: 100px;"> <input type="submit" name="submit" value="Submit" class="btn btn-primary submit-me " style="padding: 10px; width: 100px;">
                                  </div>



                         </form>

                                        <!-- /.dashboard-stat -->
                                    </div>
                                    <!-- /.col-lg-3 col-md-3 col-sm-6 col-xs-12 -->

                                </div>
                                <!-- /.row -->
                            </div>
                            <!-- /.container-fluid -->
                        </section>
                        <!-- /.section -->

                    </div>
                    <!-- /.main-page -->


                </div>
                <!-- /.content-container -->
            </div>
            <!-- /.content-wrapper -->

        </div>
        <!-- /.main-wrapper -->

        <!-- ========== COMMON JS FILES ========== -->
        <script src="js/jquery/jquery-2.2.4.min.js"></script>
        <script src="js/jquery-ui/jquery-ui.min.js"></script>
        <script src="js/bootstrap/bootstrap.min.js"></script>
        <script src="js/pace/pace.min.js"></script>
        <script src="js/lobipanel/lobipanel.min.js"></script>
        <script src="js/iscroll/iscroll.js"></script>

        <!-- ========== PAGE JS FILES ========== -->
        <script src="js/prism/prism.js"></script>
        <script src="js/waypoint/waypoints.min.js"></script>
        <script src="js/counterUp/jquery.counterup.min.js"></script>
        <script src="js/amcharts/amcharts.js"></script>
        <script src="js/amcharts/serial.js"></script>
        <script src="js/amcharts/plugins/export/export.min.js"></script>
        <link rel="stylesheet" href="js/amcharts/plugins/export/export.css" type="text/css" media="all" />
        <script src="js/amcharts/themes/light.js"></script>
        <script src="js/toastr/toastr.min.js"></script>
        <script src="js/icheck/icheck.min.js"></script>

        <!-- ========== THEME JS ========== -->
        <script src="js/main.js"></script>
        <script src="js/production-chart.js"></script>
        <script src="js/traffic-chart.js"></script>
        <script src="js/task-list.js"></script>
        <script>
            $(function(){

                // Counter for dashboard stats
                $('.counter').counterUp({
                    delay: 10,
                    time: 1000
                });

                // Welcome notification
                toastr.options = {
                  "closeButton": true,
                  "debug": false,
                  "newestOnTop": false,
                  "progressBar": false,
                  "positionClass": "toast-top-right",
                  "preventDuplicates": false,
                  "onclick": null,
                  "showDuration": "300",
                  "hideDuration": "1000",
                  "timeOut": "5000",
                  "extendedTimeOut": "1000",
                  "showEasing": "swing",
                  "hideEasing": "linear",
                  "showMethod": "fadeIn",
                  "hideMethod": "fadeOut"
                }
                toastr["success"]( "Welcome to BECE Result Management System!");

            });
        </script>
    </body>

    <div class="foot"><footer>

</footer> </div>

<style> .foot{text-align: center; */}</style>
</html>

</div>
