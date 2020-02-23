<!DOCTYPE>
<html>
<head>
<title>Job Portal/AboutUs</title>
<link rel="stylesheet" href="css/style.css" type="text/css">
</head>
    <?php
    include_once "db.php";
    ?>

<body class="bgfoot">
    
<div class="article">
                <h2><a href="#">Contact Us</a></h2>
                <hr>
    <div class="divinline" >
        <p>Do you have any question?</p>
      <p>Contact us and we'll get back to you within 24 hours. <a href="#">EMAILID:- abcd@gmail.com</a></p>
    
                <h3>OR</h3>
                <b><u>Complaint</u></b>
                <form action="aboutus.php">
                    Name : <input type="text" name="complaint" id="complaint">
                    Complaint : <textarea name="txtcomplaint" id="txtcomplaint"></textarea>
                    <input type="submit" name="btn1" id="btn1">
                </form>
    </div>
                <div class="divinline" id="right">
                
                    
                    <strong><u>Address</u><br>Job Portal<br>
                    Near BD Road,<br>
                    City kolkata<br>
                        Mobile no:-9856412547<br>
                    Pincode:700154</strong>
                </div>
    </div>
    </body>
</html>