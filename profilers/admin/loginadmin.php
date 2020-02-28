
	<!DOCTYPE html>
<html>
	<head>
		
		<meta charset="utf-8">
	    
	    <title>Admin Login</title>
	    
	    <link href="css/font-awesome.min.css" rel="stylesheet">
	    <link href="css/bootstrap.min.css" rel="stylesheet">

    
        
	</head>
	<body  class="light-gray-bg">
		<div class="templatemo-content-widget templatemo-login-widget white-bg">
			<header class="text-center">
	          <div class="square"></div>
	          <h1>Admin Login</h1>
	        </header>
	        <form class="templatemo-login-form" method="POST">
	        	<div class="form-group">
	        		<div class="input-group">
		        		<div class="input-group-addon"></div>	        		
		              	<input type="text" class="form-control" placeholder="USN" name="username" id="username">           
		          	</div>	
	        	</div>
	        	<div class="form-group">
	        		<div class="input-group">
		        		<div class="input-group-addon"></div>	        		
		              	<input type="password" class="form-control" placeholder="******" name="password" id="password">           
		          	</div>	
	        	</div>	          	
	          	<div class="form-group">
					<input type="submit" class="templatemo-blue-button width-100" value="submit" name="btn1" id="btn1">
				</div>
	        </form>
		</div>
		
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
			if ($username==Globsyncrystal && $password==password)
			{
				  header("location:adminpage.php");
			} else
            {
				$message = "Username and/or Password incorrect.";
  			echo "<script type='text/javascript'>alert('$message');</script>";
			  echo "<center>Redirecting you back to Login Page! If not Goto <a href='login.php'> Here </a></center>";
			  echo "<meta http-equiv='refresh' content ='1; url=index.php'>";
			}
		}else
			die("User not exist");

	
    }
	?>
	</body>
</html>
