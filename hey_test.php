<?php

include "db_con.php";

$sql = "SELECT * FROM members where member_status = 'inactive'";

$result = $conn->query($sql);

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
   <div class="container">

        <h2>Inactive Members</h2>

<table class="table">

    <thead>

        <tr>

        <th>ID</th>
        <th>Surname</th>
        <th>FirstName</th>
        <th>OtherNames</th>
        <th>gender</th>
        <th>DOB</th>
        <th>Email</th>
        <th>Phone Number </th>
        <th>Status</th>


    </tr>

    </thead>

    <tbody>

        <?php

            if ($result->num_rows > 0) {

                while ($row = $result->fetch_assoc()) {

        ?>

                    <tr>


                    <td><?php echo $row['register_no']; ?></td>

                    <td><?php echo $row['surname']; ?></td>

                    <td><?php echo $row['firstname']; ?></td>

                    <td><?php echo $row['othernames']; ?></td>
                    <td><?php echo $row['gender']; ?></td>
                    <td><?php echo $row['dob']; ?></td>
                    <td><?php echo $row['email']; ?></td>
                    <td><?php echo $row['phone_no']; ?></td>
                    <td><?php echo $row['member_status']; ?></td>



                    <td><a class="btn btn-info" href="update.php?id=<?php echo $row['register_no']; ?>">Edit</a>&nbsp;<a class="btn btn-danger" href="delete.php?id=<?php echo $row['register_no']; ?>">Delete</a></td>

                    </tr>

        <?php       }

            }

        ?>

    </tbody>

</table>

    </div>


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
