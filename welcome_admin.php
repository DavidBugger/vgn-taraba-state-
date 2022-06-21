<?php
	require_once 'includes/config.php';
	require_once 'header.php';
?>


    <div class="container-fluid">
   <div class="row" id="wrapper">
   <?php require_once'includes/menubar.php';?>
      <div class="col-md-10 col-md-offset-1">
	  <br><br>
	  <h2 style="font-family:Bernard MT Condensed; color:#06857C;">Admin Area</h2>
         <div class="panel panel-primary">
		 <a href = "admin_logout.php" class="btn btn-warning" style="float:right;">Sign Out</a>
            <div class="panel-body">
			

				<div class="col-lg-12">

					<div class="col-md-6">

					<a href="make_admin.php" class="btn btn-info btn-lg" style="width:200px;">
						Make new admin
					</a>
					<a href="corper.php" class="btn btn-info btn-lg" style="width:200px;">
						Add corper
					</a>

					<a href="login.php" class="btn btn-info btn-lg" style="width:200px;">
						User Accounts
					</a>



					</div>

            </div>
         </div>
         </div>
      </div>
   </div>
