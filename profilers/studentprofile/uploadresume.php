<?php include_once "db.php";?>
<!DOCTYPE html>
<html>
<head>
    
    <meta charset="utf-8">
    <title>Resume</title>
     <link href="css/style.css" rel="stylesheet">
    
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/templatemo-style.css" rel="stylesheet">
  </head>
  
    
  <body>
    <!-- Left column -->
    <div class="templatemo-flex-row">
      <div class="templatemo-sidebar">
        <header class="templatemo-site-header">
         <div class="square"></div>
          WELCOME USER!!
            </header>
        

        <nav class="templatemo-left-nav">
          <ul>
            <li>
              <a href="login.php">Dashboard</a>
            </li>
            <li>
            <a href="register1.php">ADD DETAILS</a>
            </li>
              <li>
            <a href="#" class="active">Resume</a>
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
        <div class="templatemo-top-nav-container">
          <div class="row">
          </div>
        </div>
        <div class="templatemo-content-container">
          <div class="templatemo-content-widget white-bg">
            <h2 class="margin-bottom-10">Student Resume</h2><br>
            <p>Fill in the details to complete your resume</p>
            <form action="#"  enctype="multipart/form-data"><br><br>
              <div class="row form-group">
                  
                  
                <div class="col-lg-6 col-md-6 form-group">
                  <label for="inputFirstName">First Name</label>
                  <input type="text" name="Fname" class="form-control" id="inputFirstName" placeholder="Ram">
                </div>
                <div class="col-lg-6 col-md-6 form-group">
                  <label for="inputLastName">Last Name</label>
                  <input type="text"  name="Lname" class="form-control" id="inputLastName" placeholder="Laxman">
                  </div> </div>
                  
				
				  
                  <label class="control-label templatemo-block">Branch of Study</label>
                  <select name="Branch" class="form-control" >
                    <option value="select">Select Branch</option>
                    <option value="BScience">Basic Science</option>
                    <option value="ISE">IT</option>
                    <option value="CSE">CSE</option>
                    <option value="EEE">EE</option>
                    <option value="ECE">ECE</option>
                    <option value="ME">ME</option>
                    <option value="CVE">CE</option>
                  </select>
               
				<br><br>
                  <label for="sslc">10th Aggregate</label>
                  <input type="text" name="Percentage" class="form-control" id="sslc" placeholder="10th %">
                
				<br><br>
                  <label for="Pu">12th Aggregate</label>
                  <input type="text" name="Puagg" class="form-control" id="Pu" placeholder="12th %">
                
				<br><br>
                  <label for="BE">DGPA</label>
                  <input type="text" name="Beagg" class="form-control" id="BE" placeholder="Average marks of 8 sems">
                <br><br>
                <label>Current Backlogs: </label> 
            <select  name="cmbcourseb" id="cmbcourse" class="form-control" width="100%">
     <option>Select</option>
  <option>0</option>
  <option>1</option>
 <option>2</option>
      <option>3</option>
      <option>4</option>
      <option>5</option>
      <option>6</option><option>7</option>
      <option>8</option>
    </select><br>
         
				
               
                            
               
              
                <br><br>
                <label>Your Language Skills</label><br>
                
                <div class="div">language skill<br>
      <select  name="cmbskill1" id="cmbskill1">
        <option>SELECT</option>
     <option>C</option>
    <option>C++</option>
   <option>PYTHON</option>
     <option>PHP</option>
      <option>JAVA</option>
          <br><br></select></div>       
                
                       
        <div class="div">Level of your knowledge<br>
          <select  name="cmbskilllevel1" id="cmbskilllevel1"  >
        <option>SELECT</option>
     <option>BEGINNER</option>
    <option>INTERMEDIATE</option>
   <option>ADVANCED</option>        
            </select></div>
                
                <br>
                
                <div class="div">language skill<br>
      <select  name="cmbskill2" id="cmbskill2">
        <option>SELECT</option>
     <option>C</option>
    <option>C++</option>
   <option>PYTHON</option>
     <option>PHP</option>
      <option>JAVA</option>
          <br><br></select></div>       
                
                       
        <div class="div">Level of your knowledge<br>
          <select  name="cmbskilllevel2" id="cmbskilllevel2"  >
        <option>SELECT</option>
     <option>BEGINNER</option>
    <option>INTERMEDIATE</option>
   <option>ADVANCED</option>        
            </select></div>
                <br>
                <div class="div">language skill<br>
      <select  name="cmbskill3" id="cmbskill3">
        <option>SELECT</option>
     <option>C</option>
    <option>C++</option>
   <option>PYTHON</option>
     <option>PHP</option>
      <option>JAVA</option>
          <br><br></select>
                
                
        </div>       
                
                       
        <div class="div">Level of your knowledge<br>
          <select  name="cmbskilllevel3" id="cmbskilllevel3"  >
        <option>SELECT</option>
     <option>BEGINNER</option>
    <option>INTERMEDIATE</option>
   <option>ADVANCED</option>        
            </select></div>
                <br>
                <div class="div">language skill<br>
      <select  name="cmbskill4" id="cmbskill4">
        <option>SELECT</option>
     <option>C</option>
    <option>C++</option>
   <option>PYTHON</option>
     <option>PHP</option>
      <option>JAVA</option>
          <br><br></select></div>       
                
                       
        <div class="div">Level of your knowledge<br>
          <select  name="cmbskilllevel4" id="cmbskilllevel4"  >
        <option>SELECT</option>
     <option>BEGINNER</option>
    <option>INTERMEDIATE</option>
   <option>ADVANCED</option>        
            </select></div>
                <br>
                <div class="div">language skill<br>
      <select  name="cmbskill5" id="cmbskill5">
        <option>SELECT</option>
     <option>C</option>
    <option>C++</option>
   <option>PYTHON</option>
     <option>PHP</option>
      <option>JAVA</option>
          <br><br></select></div>       
                
                       
        <div class="div">Level of your knowledge<br>
          <select  name="cmbskilllevel5" id="cmbskilllevel5"  >
        <option>SELECT</option>
     <option>BEGINNER</option>
    <option>INTERMEDIATE</option>
   <option>ADVANCED</option>        
            </select></div>
                
                <br><br>
                  <label >Grade</label>
                 
                <br><br>
               
                
                
               
                  <div class="form-group text-right">
				<input type="submit"  name="submit" id="submit" class="templatemo-blue-button" value="Upload Resume">
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
      $lang="";
$level="";
      $point="";
$lang1="";
$level1="";
      
    $query="select * from tbllevel";
   $result= mysql_query($query,$conn);
    $totrows=mysql_num_rows($result);
if($totrows>0)
                {
                while($row=mysql_fetch_object($result))
                {
                     $lang=$row->language;
                     $level=$row->level;
                    $point=$row->point;
                     }
}
$query="select * from tblresume";
   $result= mysql_query($query,$conn);
    $totrows=mysql_num_rows($result);
if($totrows>0)
                {
                while($row=mysql_fetch_object($result))
                {
                     $lang1=$row->cmbskill;
                     $level1=$row->cmbskilllevel;
                     }
}


    if(isset($_GET["submit"]))
    {
        
    $fname=$_GET["Fname"];
     $lname=$_GET["Lname"];
   
        $stream1=$_GET["Branch"];
        $tenth=$_GET["Percentage"];
        $twelvth=$_GET["Puagg"];
        $dgpa=$_GET["Beagg"];
    $cbacklogs=$_GET["cmbcourseb"];
        $skill1=$_GET["cmbskill1"];
        $skilllevel1=$_GET["cmbskilllevel1"];
        $skill2=$_GET["cmbskill2"];
        $skilllevel2=$_GET["cmbskilllevel2"];
        $skill3=$_GET["cmbskill3"];
        $skilllevel3=$_GET["cmbskilllevel3"];
        $skill4=$_GET["cmbskill4"];
        $skilllevel4=$_GET["cmbskilllevel4"];
        $skill5=$_GET["cmbskill5"];
        $skilllevel5=$_GET["cmbskilllevel5"];
        $skill=$skill1." ".$skill2." ".$skill3." ".$skill4." ".$skill5;
        $skilllevel=$skilllevel1." ".$skilllevel2." ".$skilllevel3." ".$skilllevel4." ".$skilllevel5;
        $query="select sum(point) as totpoint from tbllevel where (language='".$skill1."' and  level='".$skilllevel1."') or (language='".$skill2."' and  level='".$skilllevel2."') or(language='".$skill3."' and  level='".$skilllevel3."') or (language='".$skill4."' and  level='".$skilllevel4."') or  (language='".$skill5."' and  level='".$skilllevel5."')";
       
        echo $query;
        $result=mysql_query($query);
        $row=mysql_fetch_object($result);
        $tottalpoint=$row->totpoint;
        echo "totalpoint=".$row->totpoint;
      echo "12th".$twelvth;
        echo "10th".$tenth;
        $totalpoint=($tottalpoint/5);
        echo "aaa".$totalpoint;
        $grade="F";
        if($tenth>=85 && $twelvth>=90 )
        {
            $totalpoint=$totalpoint+5;
        }
        else if(($tenth>=75 && $tenth<85) && ($twelvth>=80 && $twelvth<90))
        {
           $totalpoint=$totalpoint+4;
        }
         else if(($tenth>=65 && $tenth<75) && ($twelvth>=70 && $twelvth<80))
        {
          $totalpoint=$totalpoint+3;
        }
         else if(($tenth>=55 && $tenth<65)&&($twelvth>=60 && $twelvth<70))
        {
           $totalpoint=$totalpoint+2;
        }
         else if(($tenth<55)&&($twelvth<60))
        {
           $totalpoint=$totalpoint+1;
        }
           if($totalpoint>=13)
           {
               $grade="A";
           }
        if($totalpoint>=12 && $totalpoint<13)
        {
            $grade="B";
        }
        if($totalpoint>=11 && $totalpoint<12)
        {
            $grade="C";
        }
        if($totalpoint<11)
        {
            $grade="D";
        }
        
        echo "Grade=".$grade;
                
$query="insert into tblresume(Fname,Lname,Branch,Percentage,Puagg,Beagg,cmbcourseb,cmbskill,cmbskilllevel,grade) values('".$fname."','".$lname."','".$stream1."','".$tenth."','".$twelvth."',
'".$dgpa."','".$cbacklogs."','".$skill."','".$skilllevel."','".$grade."')";
        echo $query;
        $result1=mysql_query($query,$conn) or die("EmailID exist ");
        
        }
      
        //else
        //echo $query;
//$result1=mysql_query($query,$conn) or die("EmailID exist ");
    ?>
    
    </body>
</html>
   