
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
	    <title>Student Register</title>
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,400italic,700' rel='stylesheet' type='text/css'>
	    <link href="css/font-awesome.min.css" rel="stylesheet">
	    <link href="css/bootstrap.min.css" rel="stylesheet">
	    <link href="css/templatemo-style.css" rel="stylesheet">   
	</head>
    
	<body class="light-gray-bg">
		
		<div class="templatemo-content-widget templatemo-login-widget white-bg">
			<header class="text-center">
	          <div class="square"></div>
	          <h1>Student Register</h1>
	        </header>
	        <form class="templatemo-login-form">
	        	<div class="form-group">
	        		<div class="input-group">
		        		<div class="input-group-addon"><i class="fa fa-user fa-fw"></i></div>	        		
		              	<input type="text" name="FirstName" id="FirstName" class="form-control" placeholder="FirstName*" >           
		          	</div>	
	        	</div>
                <div class="form-group">
	        		<div class="input-group">
		        		<div class="input-group-addon"><i class="fa fa-user fa-fw"></i></div>	        		
		              	<input type="text" name="LastName" id="LastName" class="form-control" placeholder="LastName*" >           
		          	</div>	
	        	</div>
				<div class="form-group">
	        		<div class="input-group">
		        		<div class="input-group-addon"><i class="fa fa-user fa-fw"></i></div>	        		
		              	<input type="text" name="Email" id="Email" class="form-control" placeholder="Email*" >           
		          	</div>					
	        	</div>
                <div class="form-group">
	        		<div class="input-group">
		        		<div class="input-group-addon"><i class="fa fa-key fa-fw"></i></div>	        		
		              	<input type="password" name="Password" id="Password" class="form-control" placeholder="******" >           
		          	</div>	
	        	</div>
					

				<div class="form-group">
					<button type="submit" name="submit" id="submit" class="templatemo-blue-button width-100">Register</button>
				</div>
            </form>
        </div>
	       
		<div class="templatemo-content-widget templatemo-login-widget templatemo-register-widget white-bg">
			<p>Have an Account? <strong><a href="index.php" class="blue-text">Sign in here!</a></strong></p>
		</div>
		

	</body>
</html>
<?php
    if(isset($_GET["submit"]))
    {
    $fname=$_GET["FirstName"];
     $lname=$_GET["LastName"];
    $email=$_GET["Email"];
     $passw=$_GET["Password"];
    include_once "db.php";
$query="insert into tblregister(firstname,lastname,email,password) values('".$fname."','".$lname."','".$email."','".$passw."')";
$result1=mysql_query($query,$conn) or die("EmailID");
    }
    ?>
