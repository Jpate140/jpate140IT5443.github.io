<!doctype html>
<html lang="en">
<head>
<title>Application Form</title>
<link rel="stylesheet" href="stylesheet.css" type="text/css" />
</head>
<body>
<div id="main">
<div id="sidebar">
<div id="logo1">
<header id="logo">
    <?php include 'menu.php';?>
<header>
    <?php include 'header.php';?>
</header><br>
<hr style="height: 5px; background: teal; margin: 20px 0; box-shadow: 0px 0px 4px 2px rgba(204,204,204,1);">
<div class="rectangle">
</div>    </header>
<?php
       if(isset($_POST['submit']) || @$_POST['submit']==true){
               $First_Name=$_POST["fname"];
               $Last_Name=$_POST["lname"];
               $Gender=$_POST["gender"];
               $KSUID=$_POST["KSU"];
               $Email=$_POST["email"];
               $Contact_Number=$_POST["phone"];
               $Education=$_POST["Education"];
               if (isset($_POST["Communication"])){
               $Contact_Preference=$_POST["Communication"];
                }
                $Position=$_POST["position"];                 
                if(isset($_POST["skills"])){
               $Technical_Skills=$_POST["skills"];
                }

 }

                    $fnameErr = "";
                    $lnameErr = "";
                    $KSUIDErr = "";
                    $emailErr = "";
                    $phoneErr = "";
                    $eduErr = "";
                    $genErr = "";                
                      if ($_SERVER["REQUEST_METHOD"] == "POST")
                        {
                            if (empty($_POST["fname"])){
                            $fnameErr = "*Please enter your First name.";
                         }
                            if (empty($_POST["lname"])){
                            $lnameErr = "*Please enter your Last name.";
                         }
                            if (empty($_POST["KSU"])){
                            $KSUIDErr = "*Please enter your KSUID.";
                          }
                            if (empty($_POST["email"])){
                            $emailErr = "*Please enter your valid Email address.";
                          }
                            if (empty($_POST["phone"])){
                            $phoneErr = "*Please enter your 10 digit Phone number.";
                          }
                            if (empty($_POST["Education"])){
                            $eduErr = "*Please enter your Education(Degree) level.";
                          }                       
                            if (empty($_POST["gender"])){
                            $genErr = "*Please select gender field."; 
                            }                               
                         if($fnameErr == "" && $lnameErr == "" && $KSUIDErr == "" && $emailErr == "" && $phoneErr == "" && $eduErr == "" && $genErr == ""){
                                // include('submit.php');
                                // exit();
                           }
                      }
 

function test_input($data){
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;}
?>
  
   <section style="background-color: #c1c1c1;">
  
<article>

<div class="CARITAPPLICATION" style="margin:auto; width: 50%; text-align: center; background-color: #c1c1c1;">
       <h3>CARIT STUDENT JOB APPLICATION</h3></div>
	<p style="text-align:left; font-family:verdana; font-size:100%; margin-left: 15px;">Welcome to CARIT-Center for Applied Research in Information Technology job application page. Students can apply for job by filling in the application form provided below. Please fill in the details and submit the form for completing the application process.</p>
  <br>

 <div class="APPLICATION" style="margin:auto; width: 50%; text-align: center; background-color: #c1c1c1;">
       <h3>STUDENT APPLICATION</h3>
</div>
<form method="post" action="<?php $PHP_SELF;?>">
<div class="app-field" style="margin:auto; width: 50%; text-align: center;">
 <span class="FormLabel"><b>First Name</b>:</span>
     <input type="text" id="fname" name="fname">
<span class="error" style="color:red;"><?php echo $fnameErr;?></span></br></br>
     <span class="FormLabel"><b>Last Name</b>:</span>
     <input type="text" id="lname" name="lname">
<span class="error" style="color:red;"><?php echo $lnameErr;?></span>
</div>
</br>

<div class="app-field" style="margin:auto; width: 50%; text-align: center;">
<span class="FormLabel"><b>Gender</b>:</span>
<input type="radio" id="mgen" name="gender" value="Male"  />
<label for="mgen">Male</label>
<input type="radio" id="fgen" name="gender" value="Female"  />
<label for="fgen">Female</label>
<input type="radio" id="Nothin" name="gender" value="Other" checked="checked" />
<label for="Nothin">Other</label>
<span class="error" style="color:red;"><?php echo $genErr;?></span>
</div>
</br>

<div class="app-field" style="margin:auto; width: 50%; text-align: center;">
     <label for="KSU"><b>KSUID</b>:</label>
     <input type="text" id="KSU" name="KSU">
<span class="error" style="color:red;"><?php echo $KSUIDErr;?></span>
</div>
</br>
<div class="app-field" style="margin:auto; width: 50%; text-align: center;">
     <label for="email"><b>Email</b>:</label>
     <input type="text" id="email" name="email">
<span class="error" style="color:red;"><?php echo $emailErr;?></span>
</div>
</br>
<div class="app-field" style="margin:auto; width: 50%; text-align: center;">
      <label for="phone"><b>Contact number</b>:</label>
     <input type="text" id="phone" name="phone">
<span class="error" style="color:red;"><?php echo $phoneErr;?></span>
</div>
</br>

<div class="app-field" style="margin:auto; width: 50%; text-align: center;">
<label for="Education"><b>Education</b>:</label>
     <input type="text" id="Education" name="Education">
<span class="error" style="color:red;"><?php echo $eduErr;?></span>
</div>
</br>

<div class="app-field" style="margin:auto; width: 50%; text-align: center;">
<span class="FormLabel"><b>Contact Preference</b>:</label>
<input type="radio" id="contact" name="Communication" value="Phone" checked="checked" />
<label for="contact">Phone</label>

<input type="radio" id="text" name="Communication" value="SMS" />
<label for="text">SMS</label>

<input type="radio" id="mail" name="Communication" value="Email" />
<label for="mail">Email</label>
</div>
</br>

<div class="app-field" style="margin:auto; width: 50%; text-align: center;">
<label for="Position"><b>Position</b>:</span>
<select name="position">
<option style="font-size:15px" value="Please select" selected>Please select</option>
<option style="font-size:15px" value="Data Scientist">Data Scientist</option>
<option style="font-size:15px" value="Network Administrator">Network Administrator</option>
<option style="font-size:15px" value="Business Analyst">Business Analyst</option>
</select>
</div>
</br>

<div class="app-field" style="margin:auto; width: 50%; text-align: center;">
<label class="FormLabel"><b>Technical Skills</b>:</label>

  <input type="checkbox" id="IT Security" name="skills" value="IT Security">
  <label for="IT Security">IT Security</label>
  <input type="checkbox" id="PHP" name="skills" value="PHP">
  <label for="PHP">PHP</label>
  <input type="checkbox" id="Java" name="skills" value="Java">
  <label for="Java">Java</label>
  <input type="checkbox" id="Data Analysis" name="skills" value="Data Analysis">
  <label for="Data Analysis">Data Analysis</label>
  <input type="checkbox" id="HTML" name="skills" value="HTML">
  <label for="HTML">HTML</label>
  <input type="checkbox" id="other" name="skills" value="other">
  <label for="other">other</label>
</div>
</br>

<div style="margin:auto; width: 50%; text-align: center;">
<input type="submit" value="Submit" name="submit" style="font-size:20px;height:30px;width:160px" />
</div>
</form>
</br>
<div style="margin-left: auto ; width: 60%; text-align: center; background-color: #c1c1c1;">
<?php
         if(isset($_POST['submit']) || @$_POST['submit']==true) {
			 echo "<table><tr><th  colspan=2>Student Information</th></tr>";
				if($First_Name!=""){
				echo '<tr><td>First Name</td><td>'. $First_Name .'</td></tr>';
				}
				if($Last_Name!=""){
					echo '<tr><td>Last Name</td><td>'. $Last_Name .'</td></tr>';
				}
				if($Gender!=""){
					echo '<tr><td>Gender</td><td>'. $Gender .'</td></tr>';
				}
                                 if($KSUID!=""){
					echo '<tr><td>KSUID</td><td>'. $KSUID .'</td></tr>';
				}
				if($Email!=""){
					echo '<tr><td>Email</td><td>'. $Email .'</td></tr>';
				}
				
				if($Contact_Number!=""){
					echo '<tr><td>Contact Number</td><td>'. $Contact_Number .'</td></tr>';
				}
				
				if($Education!=""){
					echo '<tr><td>Education</td><td>'. $Education .'</td></tr>';
				}
				
				if(isset($_POST["Communication"]) && $Contact_Preference!=""){
					echo '<tr><td> Contact Preference </td><td>'. $Contact_Preference .'</td></tr>';
				}
				
				if($Position!=""){
					echo '<tr><td>Position</td><td>'. $Position .'</td></tr>';
				}
				if(isset($_POST["skills"]) && $Technical_Skills!=""){
					echo '<tr><td>Technical Skills</td><td>'. $Technical_Skills .'</td></tr>';
				}
					
                echo '</table>';
            }
?>
</div>
 </article>
</section><br><br>
    <div class="footer">
    <?php include 'footer.php';?>       
</div> 
</body>

</html>