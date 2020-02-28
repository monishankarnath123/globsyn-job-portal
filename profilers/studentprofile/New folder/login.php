<?php
  session_start();
  if($_SESSION["username"]){
    echo "Welcome, ".$_SESSION['username']."!";
  }
   else {
	   header("location: index.php");
   die("You must be Log in to view this page <a href='index.php'>Click here</a>");}
   
?>
<!DOCTYPE html>
<html>
  
  <head>
    
    <title>Preferences</title>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,400italic,700' rel='stylesheet' type='text/css'>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/templatemo-style.css" rel="stylesheet">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  
  <body>
    <!-- Left column -->
    <div class="templatemo-flex-row">
      <div class="templatemo-sidebar">
        <header class="templatemo-site-header">
          <div class="square"></div>
         
		  <?php
		  $Welcome = "Welcome";
          echo "<h1>" . $Welcome . "<br>". $_SESSION['username']. "</h1>";
		  ?>
        </header>
        <div class="profile-photo-container">
          <img src="images/profile-photo.jpg" alt="Profile Photo" class="img-responsive">
          <div class="profile-photo-overlay"></div>
        </div>
        <div class="mobile-menu-icon">
          <i class="fa fa-bars"></i>
        </div>
        <nav class="templatemo-left-nav">
          <ul>
            <li>
              <a href="#" class="active"><i class="fa fa-sliders fa-fw"></i>Preferences</a>
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
                  <a href="">Drives Homepage</a>
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
            <form action="pref.php" class="templatemo-login-form" method="post" enctype="multipart/form-data">
				<div class="col-lg-6 col-md-6 form-group">
                  <label for="Phone">Phone:</label>
                  <input type="text" name="Num" class="form-control" id="Phone" placeholder="91xxxxxxxx">
                </div>
                <div class="col-lg-6 col-md-6 form-group">
                  <label for="DOB">Date of Birth</label>
                  <input type="date" name="dob" class="form-control" id="dob" placeholder="DD/MM/YYYY">
                </div>
				<div class="col-lg-6 col-md-6 form-group">
                  <label class="control-label templatemo-block">Current Semester</label>
                  <select name="Cursem" class="form-control">
                    <option value="select">Semester</option>
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
				  
				<div class="col-lg-6 col-md-6 form-group">
                  <label for="10th">SSLC/10th Aggregate</label>
                  <input type="text" name="10th" class="form-control" id="10th" placeholder="">
                </div>
				<div class="col-lg-6 col-md-6 form-group">
                  <label for="12th">12th/Diploma Aggregate</label>
                  <input type="text" name="12th" class="form-control" id="12th" placeholder="">
                </div>
                <div class="col-lg-6 col-md-6 form-group">
                  <label class="control-label templatemo-block">Branch of Study</label>
                  <select name="Branch" class="form-control">
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
                  <label for="dgpa">DGPA</label>
                  <input type="text" name="dgpa" class="form-control" id="dgpa" placeholder="">
                </div>
                <div class="col-lg-6 col-md-6 form-group">
                  <label class="control-label templatemo-block">Current Backlogs</label>
                  <select name="Backlogs" class="form-control">
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
              <div class="row form-group">
                <div class="col-lg-12">
                  <label class="control-label templatemo-block">Upload your Profile Pic</label>
                  <!-- <input type="file" name="fileToUpload" id="fileToUpload" class="margin-bottom-10"> -->
                  <input type="file" name="fileToUpload" id="fileToUpload" class="filestyle" data-buttonName="btn-primary" data-buttonBefore="true"
                  data-icon="false">
                  <p>Maximum upload size is 5 MB.</p>
                </div>
              </div>
              <div class="form-group text-right">
                
				<button type="submit"  name="submit" class="templatemo-blue-button">add</button>
				<button type="submit"  name="update" class="templatemo-blue-button">update</button>
                <button type="reset" class="templatemo-white-button">Reset</button>
              </div>
            </form>
          </div>
          <footer class="text-right">
           		
          </footer>
        </div>
    <!-- JS -->
    <script type="text/javascript" src="js/jquery-1.11.2.min.js"></script>
    <!-- jQuery -->
    <script type="text/javascript" src="js/bootstrap-filestyle.min.js"></script>
    <!-- http://markusslima.github.io/bootstrap-filestyle/ -->
    <script type="text/javascript" src="js/templatemo-script.js"></script>
    <!-- Templatemo Script -->
  </body>

</html>