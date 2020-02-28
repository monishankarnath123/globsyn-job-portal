<?php
include_once "db.php";
?>
	<!DOCTYPE html>
<html>
	<head>
		
		<meta charset="utf-8">
	    
	    <title>Student Login</title>
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
	        <form class="templatemo-login-form" method="POST">
	        	<div class="form-group">
	        		<div class="input-group">
		        		<div class="input-group-addon"><i class="fa fa-user fa-fw"></i></div>	        		
		              	<input type="text" class="form-control" placeholder="USN" name="username" id="username">           
		          	</div>	
	        	</div>
	        	<div class="form-group">
	        		<div class="input-group">
		        		<div class="input-group-addon"><i class="fa fa-key fa-fw"></i></div>	        		
		              	<input type="password" class="form-control" placeholder="******" name="password" id="password">           
		          	</div>	
	        	</div>	          	
	          	<div class="form-group">
				    <div class="checkbox squaredTwo">
				        <input type="checkbox" id="c1" name="cc" />
						<label for="c1"><span></span>Remember me</label>
				    </div>				    
				</div>
				<div class="form-group">
					<input type="submit" class="templatemo-blue-button width-100" value="submit" name="btn1" id="btn1">
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
        <?php
	if(isset($_POST["btn1"]))
    {
	$username = $_POST['username'];
	$password  = $_POST['password'];
	
	if ($username&&$password)
	{

		
		$query = mysql_query("SELECT * FROM tblregister WHERE Email='$username' and password='$password'");
		
		$numrows = mysql_num_rows($query);
		
		if ($numrows!=0)
		{
			while($row = mysql_fetch_object($query))
			{
				$dbusername = $row->Email;
				$dbpassword = $row->password;
				
			}
			if ($username==$dbusername&& $password==$dbpassword)
			{
				  header("location:login.php?pid=$dbusername");
			} else{
				$message = "Username and/or Password incorrect.";
  			echo "<script type='text/javascript'>alert('$message');</script>";
			  echo "<center>Redirecting you back to Login Page! If not Goto <a href='login.php?pid=<?php  ?>'> Here </a></center>";
			  echo "<meta http-equiv='refresh' content ='1; url=index.php'>";
			}
		}else
			die("User not exist");
	}
	else
	die("Please enter USN and Password");
    }
	?>
	</body>
</html>
