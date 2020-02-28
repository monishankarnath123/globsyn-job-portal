
	<!DOCTYPE html>
<html>
	<head>
		
		<meta charset="utf-8">
	      
	    <title>Student Login</title>

		<!--favicon-->
	    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,400italic,700' rel='stylesheet' type='text/css'>
	    <link href="css/font-awesome.min.css" rel="stylesheet">
	    <link href="css/bootstrap.min.css" rel="stylesheet">
	    <link href="css/templatemo-style.css" rel="stylesheet">
        <!-- Footer -->
        <link type="text/css" rel="stylesheet" href="../../Homepage/css/style.css">
	    
	    
	</head>
	<body class="light-gray-bg">
		<div class="templatemo-content-widget templatemo-login-widget white-bg">
			<header class="text-center">
	          <div class="square"></div>
	          <h1>Student Login</h1>
	        </header>
	        <form  class="templatemo-login-form" method="POST">
	        	<div class="form-group">
	        		<div class="input-group">
		        		<div class="input-group-addon"><i class="fa fa-user fa-fw"></i></div>	        		
		              	<input type="text" class="form-control" placeholder="Email" name="Email" id="Email">           
		          	</div>	
	        	</div>
	        	<div class="form-group">
	        		<div class="input-group">
		        		<div class="input-group-addon"><i class="fa fa-key fa-fw"></i></div>	        		
		              	<input type="password" class="form-control" placeholder="******" name="Password" id="Password">           
		          	</div>	
	        	</div>	          	
	          	<div class="form-group">
				    <div class="checkbox squaredTwo">
				        <input type="checkbox" id="c1" name="cc" />
						<label for="c1"><span></span>Remember me</label>
				    </div>				    
				</div>
				<div class="form-group">
					<button type="submit" class="templatemo-blue-button width-100">Login</button>
				</div>
	        </form>
		</div>
		<div class="templatemo-content-widget templatemo-login-widget templatemo-register-widget white-bg">
			<p>Not a registered user yet? <strong><a href="register.php" class="blue-text">Sign up now!</a></strong></p>
		</div>
        <div class="templatemo-content-widget templatemo-login-widget templatemo-register-widget white-bg">
			<p>Can't Access Account? <strong><a href="Forgot Password.php" class="blue-text">Reset Password!</a></strong></p>
		</div>
		<!--Footer-->
		<div class="footer">
			<div class="container">
				
				</div>
				
			</div>
	</body>
</html>
<?php
$email=$_GET["Email"];
 $passw=$_GET["Password"];
include_once "db.php";
$sqle="select * from tblregister where Emailid='$email' and Password='$passw'";
/* $sqlp="select * from tblregister where Password='$password'"; */

$rese=mysql_query($phpproject,$conn) or die(mysql_error);
/* $resp=mysql_query($sqlp,$conn) or die(mysql_error); */

  if(mysql_num_rows($rese) > 0){
  	  echo "<br>WELCOME USER!"; }
  /* else if(mysql_num_rows($resp) > 0){
  	  echo "WELCOME USER!"; } */
    else{
        echo "<br>INVALID CREDENTIALS!";
    }
     
       