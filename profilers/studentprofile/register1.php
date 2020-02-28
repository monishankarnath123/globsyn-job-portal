<!DOCTYPE html>
<html >
<head>
<meta charset="utf-8">
<title>
Preferences
    </title>
    
    
    <link href="css/templatemo-style.css" rel="stylesheet">
    
</head>
<body>
    <div class="templatemo-flex-row">
      <div  class="templatemo-sidebar">
          <header class="templatemo-site-header">
          WELCOME USER!!
        </header>
    <nav class="templatemo-left-nav">
          <ul>
            <li>
              <a href="login.php">Dashboard</a>
            </li>
            <li>
            <a href="register1.php" class="active">Profile</a>
            </li>
              <li>
                  <a href="uploadresume.php" >Resume</a>
            </li>
            <li>
                  <a href="status.php" >Status</a>
            </li>
            <li>
              <a href="logout.php">Sign Out</a>
            </li>
          </ul>
        </nav>
        </div>
        <!-- Main content -->
      <div class="templatemo-content col-1 light-gray-bg">
      
        <div class="templatemo-content-container">
          <div class="templatemo-content-widget white-bg">
        
        <h2 class="margin-bottom-10">Add Details</h2>
        <hr>
        <form class="templatemo-login-form"  enctype="multipart/form-data">
     <div class="row form-group">
                
   
        <div class="col-lg-6 col-md-6 form-group"> Date Of Birth :
        <input type="text" class="form-control" name="dob" id="dob" placeholder="DD/MM/YYYY"><br></div>
    
    <div class="col-lg-6 col-md-6 form-group">Mobile
   <input type="text" name="Num" class="form-control" id="Num" placeholder="PhoneNo."></div>
         
<div class="col-lg-6 col-md-6 form-group">SSLC
<input type="text" name="marks" id="marks" class="form-control"><br></div>
         
         
 
<div class="col-lg-6 col-md-6 form-group">PU/DIPLOMA
<input type="text" name="markstwe" id="markstwe" class="form-control"><br></div>
         
         
  <div class="col-lg-6 col-md-6 form-group" class="control-label templatemo-block">Degree:  
  <select  name="degree" id="degree" class="form-control" width="100%">
  <option>Select</option>
  <option >M.TECH</option>
  <option >B.TECH</option>
  <option>MBA</option>
  <option >BBA</option>
  <option >MBA</option>
  <option >BCA</option>
    </select><br></div>
      
<div class="col-lg-6 col-md-6 form-group"> DGPA
<input type="text" name="Beagg" class="form-control" id="Beagg"><br></div>
         
<div class="col-lg-6 col-md-6 form-group">Experience
<input type="text" name="experience" class="form-control" id="experience"><br></div>
         
         
  <div class="col-lg-6 col-md-6 form-group" class="control-label templatemo-block">Project:  
  <select  name="project" id="project" class="form-control" width="100%">
  <option>Select</option>
  <option>YES</option>
  <option >NO</option>
      </select><br></div>



    <div class="col-lg-6 col-md-6 form-group">Email : 
        <input type="text" name="email" id="email" value="" placeholder="Email" class="form-control"><br></div>
           
            
  
               
                                                
         
<input type="Submit" name="btnsubmit" id="btnsunmit" value="Submit" class="templatemo-blue-button">
                
        <input type="Reset" name="btnreset" id="btnreset" value="Reset" class="templatemo-white-button">
            </div>
        </form>
            </div>
          </div>
        </div>
        <hr>
    </div>
    <?php
    if(isset($_GET["btnsubmit"]))
    {
        
    $dob1=$_GET["dob"];
    $Mobile=$_GET["Num"];
    $tenth=$_GET["marks"];
    $twelvth=$_GET["markstwe"];
    $degree=$_GET["degree"];
     $dgpa=$_GET["Beagg"];
     $experience=$_GET["experience"];
     $project=$_GET["project"];
    $email1=$_GET["email"];
        
    include_once "db.php";
        $query="select * from tblprofile where Email='".$email1."'";
        $result=mysql_query($query);
        $tot=mysql_num_rows($query);
        if($tot==0)
        {
$query="insert into tblprofile(dob,mobile,ten,twelve,degree,dgpa,experience,project,Email) values('".$dob1."','".$Mobile."','".$tenth."','".$twelvth."','".$degree."','".$dgpa."',
'".$experience."','".$project."','".$email1."')";
        }
        else
        {
         $query="update tblprofile set dob='".$dob1."',mobile='".$Mobile."',ten='".$tenth."',twelve='".$twelvth."',degree='".$degree."',dgpa='".$dgpa."',experience='".$experience."',project='".$project."' where Email='".$email1."'";
        }
        echo $query;
$result1=mysql_query($query,$conn) or die("EmailID exist ");
    ?>
    
   
    <?php
    }
    ?>
          
    </body>
</html>