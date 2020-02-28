<?php

session_start();
	$username = $_POST['Email'];
	$password  = $_POST['password'];

	if ($username&&$password)
	{
		$connect = mysql_connect("localhost","root","") or die("Couldn't Connect");
        
		mysql_select_db("phpproject") or die("Cant find DB");
        
		$query =mysql_query("SELECT * FROM tblregister where Email='$username'");
		
      
        
		$numrows = mysql_num_rows($query);
		
		if ($numrows!=0)
		{
			while($row = mysql_fetch_assoc($query))
			{
				$dbusername = $row['Email'];
				$dbpassword = $row['password'];
				
			}
			if ($username==$dbusername&& $password==$dbpassword)
			{
				  echo "<center>Login Successfull..!! <br/>Redirecting you to HomePage! </br>If not Goto <a href='index.php'> Here </a></center>";
				$_SESSION['Email'] = mysql_query("SELECT Email FROM tblregister WHERE Email='$username'");
				}
                else
                {
           $message ="Username and/or Password incorrect.";
  			
            echo "<script type='text/javascript'>alert('$message');
            </script>";
			  echo "<center>Redirecting you back to Login Page! If not Goto <a href='index.php'> Here </a></center>";
			 
			}
		}else
			die("User not exist");
	}
	else
	die("Please enter correct Email and Password");
	?>