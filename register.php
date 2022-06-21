<?php include("header.php");?>
<?php include('includes/config.php');?>
<div class="container-fluid">
    <div class="row" id="wrapper">
    <?php require_once'includes/menubar.php';?>
    <div class="col-sm-12">
        <div class="panel panel-default">
        <div class="panel-body">
        <div class="col-sm-10 col-sm-offset-1">
<center><p class = "hey">INSERT A NEW  CORPER'S INFORMATION</p></center>

 <?php
 	if(isset($_POST['submit'])){
 		$surname = $_POST['surname'];
 		$othernames = $_POST['othernames'];
		$scode = $_POST['scode'];
 		$phone = $_POST['phone'];
 		$course = $_POST['course'];
 		$institution = $_POST['institution'];
        $deployedstate = $_POST['deployedstate'];
        $stateoforigin = $_POST['stateoforigin'];
        $m_status = $_POST['m_status'];
        $lga = $_POST['lga'];
        $dob = $_POST['dob'];
        $nextofkin = $_POST['nextofkin'];
        $phonenextofkin = $_POST['phonenextofkin'];
        $relationship = $_POST['relationship'];
        $catholic = $_POST['catholic'];
        $baptized = $_POST['baptized'];
        $communicant = $_POST['communicant'];
        $confirmed = $_POST['confirmed'];
        $memberyes = $_POST['memberyes'];
        $memberno = $_POST['memberno'];
        $position = $_POST['position'];
        $skills = $_POST['skills'];
        $skillsapplication = $_POST['skillsapplication'];
        $redeploy = $_POST['redeploy'];
        $statedeployed = $_POST['statedeployed'];
        $declare_oath = $_POST['declare_oath'];
        // Validating each field and makin sure each variable has  value that is holding

        if($surname!=NULL && $othernames!=NULL && $scode!=NULL && $phone!=NULL && $course!=NULL && $institution!=NULL && $deployedstate!=NULL && $stateoforigin!=NULL
        && $m_status!=NULL && $lga!=NULL && $dob!=NULL && $nextofkin!=NULL && $phonenextofkin!=NULL && $relationship!=NULL && $catholic!=NULL && $baptized!=NULL
        && $communicant!=NULL && $confirmed!=NULL && $memberyes!=NULL && $memberno!=NULL && $position!=NULL && $skills!=NULL && $skillsapplication!=NULL && $redeploy!=NULL
        && $statedeployed!=NULL && $declare_oath!=NULL ){

 		$sql = "INSERT INTO corpers (surname, othernames, scode, phone, course, institution, deployedstate, stateoforigin, m_status, lga, dob,nextofkin,phonenextofkin,relationship,catholic,baptized,communicant,confirmed,memberyes,memberno,position,skills,skillsapplication,redeploy,statedeployed,declare_oath)
         VALUES ('$surname', '$othernames', '$scode', '$phone', '$course', '$institution', '$deployedstate', '$stateoforigin', '$m_status', '$lga', '$dob', '$nextofkin', '$phonenextofkin','$relationship', '$catholic', '$baptized', '$communicant', '$confirmed', '$memberyes', '$memberno', '$position', '$skills', '$skillsapplication', '$redeploy', '$statedeployed', '$declare_oath')";
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
 }
//  Bugger'codes
  ?>

<form action="register.php" method="post" class="form-horizontal" role="form">

            <div class="form-group">
                <label for="name" class="col-sm-2 control-label">Surname:</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" name="surname" placeholder="Enter Surname Name" required>
                </div>
            </div>

            <div class="form-group">
                <label for="roll" class="col-sm-2 control-label">Othernames:</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="othernames" placeholder="Enter othernames here.." required>
                </div>
            </div>

			<div class="form-group">
                <label for="session" class="col-sm-2 control-label">StateCode:</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="scode" placeholder="Enter State Code " required>
                </div>
            </div>

            <div class="form-group">
                <label for="year" class="col-sm-2 control-label">Phone No:</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="phone" placeholder="Enter Phone Number" required>
                </div>
            </div>

            <div class="form-group">
                <label for="hall" class="col-sm-2 control-label">Course Study:</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="course" placeholder="Enter Course of Study" required>
                </div>
            </div>

            <div class="form-group">
                <label for="gpa" class="col-sm-2 control-label">Institution:</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="institution" placeholder="Enter Institution attended "required>
                </div>
            </div>


            <div class="form-group">
                <label for="gpa" class="col-sm-2 control-label">Deployed State:</label>
                <div class="col-sm-10">
                   <select class="form-control" name = "deployedstate">
                       <option value ="Adamawa">Adamawa</option>
                       <option value ="Akwa-Ibom">Akwa-Ibom</option>
                       <option value ="Anambara">Anambara</option>
                       <option value ="Bauchi">Bauchi</option>
                       <option value ="Bayelsa">Bayelsa</option>
                       <option value ="Benue">Benue</option>
                       <option value ="Borno">Borno</option>
                       <option value ="Cross-River">Cross-River</option>
                       <option value ="Delta">Delta</option>
                       <option value ="Ebonyi">Ebonyi</option>
                       <option value ="Edo">Edo</option>
                       <option value ="Ekiti">Ekiti</option>
                       <option value ="Enugu">Enugu</option>
                       <option value ="Gombe">Gombe</option>
                       <option value ="Imo">Imo</option>
                       <option value ="Jigawa">Jigawa</option>
                       <option value ="Kaduna">Kaduna</option>
                       <option value ="Kano">Kano</option>
                       <option value ="Katsina">Katsina</option>
                       <option value ="Kebbi">Kebbi</option>
                       <option value ="Kogi">Kogi</option>
                       <option value ="Kwara">Kwara</option>
                       <option value ="Lagos">Lagos</option>
                       <option value ="Nassarawa">Nassarawa</option>
                       <option value ="Niger">Niger</option>
                       <option value ="Ogun">Ogun</option>
                       <option value ="Ondo">Ondo</option>
                       <option value ="Osun">Osun</option>
                       <option value ="Oyo">Oyo</option>
                       <option value ="Plateau">Plateau</option>
                       <option value ="Rivers">Rivers</option>
                       <option value ="Sokoto">Sokoto</option>
                       <option value ="Taraba">Taraba</option>
                       <option value ="Yobe">Yobe</option>
                       <option value ="Zamfara">Zamafara</option>

                    </select>
                </div>
            </div>

            <div class="form-group">
                <label for="gpa" class="col-sm-2 control-label">State of Origin:</label>
                <div class="col-sm-10">
                   <select class="form-control" name = "stateoforigin">
                   <option value ="Adamawa">Adamawa</option>
                       <option value ="Akwa-Ibom">Akwa-Ibom</option>
                       <option value ="Anambara">Anambara</option>
                       <option value ="Bauchi">Bauchi</option>
                       <option value ="Bayelsa">Bayelsa</option>
                       <option value ="Benue">Benue</option>
                       <option value ="Borno">Borno</option>
                       <option value ="Cross-River">Cross-River</option>
                       <option value ="Delta">Delta</option>
                       <option value ="Ebonyi">Ebonyi</option>
                       <option value ="Edo">Edo</option>
                       <option value ="Ekiti">Ekiti</option>
                       <option value ="Enugu">Enugu</option>
                       <option value ="Gombe">Gombe</option>
                       <option value ="Imo">Imo</option>
                       <option value ="Jigawa">Jigawa</option>
                       <option value ="Kaduna">Kaduna</option>
                       <option value ="Kano">Kano</option>
                       <option value ="Katsina">Katsina</option>
                       <option value ="Kebbi">Kebbi</option>
                       <option value ="Kogi">Kogi</option>
                       <option value ="Kwara">Kwara</option>
                       <option value ="Lagos">Lagos</option>
                       <option value ="Nassarawa">Nassarawa</option>
                       <option value ="Niger">Niger</option>
                       <option value ="Ogun">Ogun</option>
                       <option value ="Ondo">Ondo</option>
                       <option value ="Osun">Osun</option>
                       <option value ="Oyo">Oyo</option>
                       <option value ="Plateau">Plateau</option>
                       <option value ="Rivers">Rivers</option>
                       <option value ="Sokoto">Sokoto</option>
                       <option value ="Taraba">Taraba</option>
                       <option value ="Yobe">Yobe</option>
                       <option value ="Zamfara">Zamafara</option>
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
                <label for="gpa" class="col-sm-2 control-label">L.G.A:</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" name="lga" placeholder="Enter your L.G.A: "required>
                </div>
            </div>

            <div class="form-group">
                <label for="gpa" class="col-sm-2 control-label">DOB:</label>
                <div class="col-sm-10">
                <input type="date" class="form-control" name="dob" placeholder="Enter your Date of Birth "required>
                </div>
            </div>

            <div class="form-group">
                <label for="gpa" class="col-sm-2 control-label">Next of Kin:</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" name="nextofkin" placeholder="Enter your Next of Kin "required>
                </div>
            </div>

            <div class="form-group">
                <label for="gpa" class="col-sm-2 control-label">Phone Next of Kin:</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" name="phonenextofkin" placeholder="Phone Number of Next of kin "required>
                </div>
            </div>

            <div class="form-group">
                <label for="gpa" class="col-sm-2 control-label">Relationship</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" name="relationship" placeholder="Enter Relationship of next of kin.."required>
                </div>
            </div>


            <div class="form-group">

                    <p class="hey">NOW ANSWER THESE QUESTIONS AND TICK APPROPRIATELY</p>

            </div>

            <div class="form-group">
                <label for="gpa" class="col-sm-2 control-label">Are you a Catholic?</label>
                <div class="col-sm-10">
                <input type = "radio" id = "Catholic" name ="catholic" value="No">
                <label for = "Yes">Yes</label>

                <input type = "radio" id = "NotCatholic" name ="catholic" value="Yes">
                <label for = "Yes">No</label>
                </div>
            </div>

            <div class="form-group">
                <label for="gpa" class="col-sm-2 control-label">Are you baptized in Catholic?</label>
                <div class="col-sm-10">
                <input type = "radio" id = "Catholic" name ="baptized" value="Yes">
                <label for = "Yes">Yes</label>

                <input type = "radio" id = "NotCatholic" name ="baptized" value="No">
                <label for = "Yes">No</label>
                </div>
            </div>


            <div class="form-group">
                <label for="gpa" class="col-sm-2 control-label">Are you a Communicant?</label>
                <div class="col-sm-10">
                <input type = "radio" id = "Catholic" name ="communicant" value="Yes">
                <label for = "Yes">Yes</label>

                <input type = "radio" id = "NotCatholic" name ="communicant" value="No">
                <label for = "Yes">No</label>
                </div>
            </div>

            <div class="form-group">
                <label for="gpa" class="col-sm-2 control-label">Are you a Confirmed?</label>
                <div class="col-sm-10">
                <input type = "radio" id = "Catholic" name ="confirmed" value="Yess">
                <label for = "Yes">Yes</label>

                <input type = "radio" id = "NotCatholic" name ="confirmed" value="No">
                <label for = "Yes">No</label>
                </div>
            </div>

            <div class="form-group">
                <label for="gpa" class="col-sm-2 control-label">member of Society  if yes stipulate</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" name="memberyes" placeholder="Are you a member of any Catholic Society on Campus or Parish? if yes stipulate"required>
                </div>
            </div>

            <div class="form-group">
                <label for="gpa" class="col-sm-2 control-label">member of Society  if no, why</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" name="memberno" placeholder="Are you a member of any Catholic Society on Campus or Parish? if no why"required>
                </div>
            </div>

            <div class="form-group">
                <label for="gpa" class="col-sm-2 control-label">Leadership Position: </label>
                <div class="col-sm-10">
                <input type="text" class="form-control" name="position" placeholder="Did you hold any leadership position in the society?"required>
                </div>

            </div>

            <div class="form-group">
                <label for="gpa" class="col-sm-2 control-label">Skills</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" name="skills" placeholder="What special skills do you have?"required>
                </div>

            </div>

            <div class="form-group">
                <label for="gpa" class="col-sm-2 control-label">Skills Application: </label>
                <div class="col-sm-10">
                <input type="text" class="form-control" name="skillsapplication" placeholder="What can you do for NACC with your above skills?"required>
                </div>

            </div>

            <div class="form-group">
                <label for="gpa" class="col-sm-2 control-label">Are you Redeploying?:</label>
                <div class="col-sm-10">
                   <select class="form-control" name = "redeploy">
                       <option value ="No">No</option>
                       <option value = "Yes">Yes</option>
                    </select>
                </div>
            </div>

            <div class="form-group">
                <label for="gpa" class="col-sm-2 control-label">If yes Which State?:</label>
                <div class="col-sm-10">
                   <select class="form-control" name = "statedeployed">
                       <option value ="None">None</option>
                    <option value ="Adamawa">Adamawa</option>
                       <option value ="Akwa-Ibom">Akwa-Ibom</option>
                       <option value ="Anambara">Anambara</option>
                       <option value ="Bauchi">Bauchi</option>
                       <option value ="Bayelsa">Bayelsa</option>
                       <option value ="Benue">Benue</option>
                       <option value ="Borno">Borno</option>
                       <option value ="Cross-River">Cross-River</option>
                       <option value ="Delta">Delta</option>
                       <option value ="Ebonyi">Ebonyi</option>
                       <option value ="Edo">Edo</option>
                       <option value ="Ekiti">Ekiti</option>
                       <option value ="Enugu">Enugu</option>
                       <option value ="Gombe">Gombe</option>
                       <option value ="Imo">Imo</option>
                       <option value ="Jigawa">Jigawa</option>
                       <option value ="Kaduna">Kaduna</option>
                       <option value ="Kano">Kano</option>
                       <option value ="Katsina">Katsina</option>
                       <option value ="Kebbi">Kebbi</option>
                       <option value ="Kogi">Kogi</option>
                       <option value ="Kwara">Kwara</option>
                       <option value ="Lagos">Lagos</option>
                       <option value ="Nassarawa">Nassarawa</option>
                       <option value ="Niger">Niger</option>
                       <option value ="Ogun">Ogun</option>
                       <option value ="Ondo">Ondo</option>
                       <option value ="Osun">Osun</option>
                       <option value ="Oyo">Oyo</option>
                       <option value ="Plateau">Plateau</option>
                       <option value ="Rivers">Rivers</option>
                       <option value ="Sokoto">Sokoto</option>
                       <option value ="Taraba">Taraba</option>
                       <option value ="Yobe">Yobe</option>
                       <option value ="Zamfara">Zamafara</option>>
                    </select>
                </div>
            </div>


            <p class="hey">DECLARATION</p>
            <div class="form-group">
                <label for="gpa" class="col-sm-2 control-label">I </label>
                <div class="col-sm-10">
                <input type = "text" name = "declare_oath" class = "form-control" placeholder = "Type your name"> declare tha the information provided overleaf about me is true and that if any reason there is variation  in the information, i shall bear the consequence.
                </div>

            </div>










            <center><input type="submit" name="submit" value="Submit" class="btn btn-primary" style="padding: 10px; width: 100px;"></center>

            <center><input type="reset" name="submit" value="Reset" class="btn btn-primary" style="padding: 10px; width: 100px;"></center>
 </form>

 </div>
 </div>
 </div>
 </div>
 </div>
