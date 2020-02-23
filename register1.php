<!DOCTYPE html>
<html >
<head>
<title>
Seeker Register
</title>
   <link href="css/style.css" rel="stylesheet">
</head>
<body>
    <div class="dev">
        <form>
        <h1 class="h1">USER REGISTRATION</h1>
        <hr>
            <div class="text-left">First name :</div><div class="text-right"><input type="text" name="txtname" id="txtname" width="100%" placeholder="Name" class="text-right"></div><br><br>
            <div class="text-left">Last name :</div><div class="text-right"><input type="text" name="name" id="name" class="text-right"></div><br><br>
            <div class="text-left">Email : </div><div class="text-right"><input type="text" name="email" id="email" value="" placeholder="Email" class="text-right"></div><br><br>
            <div class="text-left">Password : </div><div class="text-right"><input type="password" name="pass" id="pass" value="" placeholder="Password" class="text-right"></div><br><br>
            <div class="text-left">DOB : </div><div class="text-right"><input type="text" name="dob" id="dob" class="text-right"></div><br><br>
            <div class="text-left">qualification : </div>
                                 <select  name="cmbcourse" id="cmbcourse" width="100%">
                                    <option>Select</option>
                                     
                                     <option>SECONDARY</option>
                                     
                                    <option>HIGHER SECONDARY</option>
           
                            
                                    <option>GRADUATION</option>
           
                            
                                    <option>MASTERS</option>
           
                            
                                </select><br><br>
            <div class="text-left">STREAM : </div><div class="text-right"><input type="text" name="stream" id="stream" class="text-right"></div><br><br>
            <div class="text-left">MARKS(in %) : </div><div class="text-right"><input type="number" name="marks" id="marks" class="text-right"></div>
            <br><br>
            <div class="text-left">EXPERIENCE : </div><div class="text-right"><input type="number" name="exp" id="exp" class="text-right"></div>
            <br><br>
            
        <input type="Submit" name="btnsubmit" id="btnsunmit" value="Submit" class="bt">
        <input type="Reset" name="btnreset" id="btnreset" value="Reset" class="bt">
        </form>
        <hr>
    </div>
    <?php
    if(isset($_GET["btnsubmit"]))
    {
    $fname=$_GET["txtname"];
     $lname=$_GET["name"];
    $email1=$_GET["email"];
     $passw=$_GET["pass"];
    $dob1=$_GET["dob"];
    include_once "db.php";
$query="insert into tblprofile(Email,FirstName,LastName,Branch,DOB) values('".$email1."','".$fname."','".$lname."','".$passw."','".$dob1."')";
$result1=mysql_query($query,$conn) or die("EmailID exist ");
    ?>
    
    <div>
        <h1><?php echo "database connected succesfully<br>";?></h1>
        <h2><?php echo " data updated";?></h2>
    </div>
    <?php
    }
    ?>

    </body>
</html>