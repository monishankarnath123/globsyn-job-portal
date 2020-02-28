<!DOCTYPE html>
<html>
<head>
    
    <meta charset="utf-8">
    <title>Preferences</title>
    
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,400italic,700' rel='stylesheet' type='text/css'>
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/templatemo-style.css" rel="stylesheet">
  </head>
  
  <body>
    <!-- Left column -->
    <div class="templatemo-flex-row">
      <div class="templatemo-sidebar">
          
        <header class="templatemo-site-header">
          <div class="square"></div>
         
		  
        </header>

        <nav class="templatemo-left-nav">
          <ul>
            <li>
              <a href="login.php"><i class="fa fa-home fa-fw"></i>Dashboard</a>
            </li>
            <li>
            <a href="#" class="active"><i class="fa fa-sliders fa-fw"></i>Preferences</a>-->
            </li>
            <li>
              <a href="logout.php"><i class="fa fa-eject fa-fw"></i>Sign Out</a>
            </li>
          </ul>
        </nav>
      </div>
      <!-- Main content -->
      <div class="templatemo-content col-1 light-gray-bg">
        <div class="templatemo-top-nav-container">
          <div class="row">
            <nav class="templatemo-top-nav col-lg-12 col-md-12">
              <ul class="text-uppercase">
                <li>
                  <a href="../../Homepage/index.html" >Home</a>
                </li>
               
                <li>
                  <a href="login.html">Change Password</a>
                </li>
              </ul>
            </nav>
          </div>
        </div>
        <div class="templatemo-content-container">
          <div class="templatemo-content-widget white-bg">
            <h2 class="margin-bottom-10">Preferences</h2>
            <p>Update Your Details</p>
            <form class="templatemo-login-form"  enctype="multipart/form-data">
              <div class="row form-group">
                  
                <div class="col-lg-6 col-md-6 form-group">
                  <input type="text" name="Firstname" class="form-control" id="FirstName" placeholder="FirstName">
                </div>
                <div class="col-lg-6 col-md-6 form-group">
                  <input type="text"  name="Lastname" class="form-control" id="LastName" placeholder="LastName">
                </div>
                  
				<div class="col-lg-6 col-md-6 form-group">
                  <input type="text" name="Num" class="form-control" id="Num" placeholder="PhoneNo.">
                </div>
				
				 <div class="col-lg-6 col-md-6 form-group">
                  <input type="text" name="Email" class="form-control" id="Email" placeholder="Email">
                </div>
				
                <div class="col-lg-6 col-md-6 form-group">
                  <input type="date" name="DOB" class="form-control" id="DOB" placeholder="DD/MM/YYYY">
                </div>
                  
				  <div class="col-lg-6 col-md-6 form-group">
                  <label for="Branch"class="control-label templatemo-block">Branch of Study</label>
                  <select name="Branch" id="Branch"  class="form-control">
                    <option value="select">Branch</option>
                    <option value="BScience">Basic Science</option>
                    <option value="ISE">ISE</option>
                    <option value="CSE">CSE</option>
                    <option value="EEE">EEE</option>
                    <option value="ECE">ECE</option>
                    <option value="ME">ME</option>
                    <option value="CVE">CVE</option>
                  </select>
                </div>
				<div class="col-lg-6 col-md-6 form-group">
                    
                  <input type="text" name="Percentage" class="form-control" id="Percentage" placeholder="10th">
                </div>
                  
				<div class="col-lg-6 col-md-6 form-group">
                  
                  <input type="text" name="Puagg" class="form-control" id="Puagg" placeholder="12th">
                </div>
				<div class="col-lg-6 col-md-6 form-group">
                  <input type="text" name="Beagg" class="form-control" id="Beagg" placeholder="DGPA">
                </div>
                <div class="col-lg-6 col-md-6 form-group">
                  <label class="control-label templatemo-block">Current Backlogs</label>
                  <select name="Backlogs" id="Backlogs" class="form-control">
                    <option value="select">Numbers</option>
                    <option value="0">0</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                  </select>
                </div>
				
               
              </div>               
              <div class="form-group text-right">
                
				<input type="submit"  name="submit" id="submit" class="templatemo-blue-button" value="submit">
                <input type="reset" class="templatemo-white-button">
              </div>
            </form>
          </div>
          <footer class="text-right">
          </footer>
        </div>
      </div>
    </div>
    <!-- JS -->
    <script type="text/javascript" src="js/jquery-1.11.2.min.js"></script>
    <!-- jQuery -->
    <script type="text/javascript" src="js/bootstrap-filestyle.min.js"></script>
    <!-- http://markusslima.github.io/bootstrap-filestyle/ -->
    <script type="text/javascript" src="js/templatemo-script.js"></script>
    <!-- Templatemo Script -->
      
      <?php
 
include_once "db.php";
if(isset($_POST["submit"]))
{      
    $fname = $_GET["FirstName"];
$lname = $_GET["LastName"];
$phno = $_GET["Num"];
$email = $_GET["Email"];
$date = $_GET["DOB"];
$branch = $_GET["Branch"];
$per = $_GET["Percentage"];
$puagg = $_GET["Puagg"];
$beaggregate = $_GET["Beagg"];
$back = $_GET["Backlogs"];
 

    $query=mysql_query("insert into tblprofile(FirstName,LastName,Mobile,Email,DOB,Sem,Branch,SSLC,PU/Dip,dgpa,Backlogs) 
          values('".$fname."', '".$lname."', '".$phno."', '".$email."', '".$date."','".$branch."','".$per."', '".$puagg."', '".$beaggregate."', '".$back."')");
 $result=mysql_query($query,$conn);
 echo $result;
				echo "<center>Details has been received successfully...!!</center>";
	  
     
}


?>
  </body>

</html>