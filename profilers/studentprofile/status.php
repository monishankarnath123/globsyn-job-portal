<?php include_once "db.php";?> 
<!DOCTYPE html>
<html >
<head>
<meta charset="utf-8">
<title>
Status
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
            <a href="register1.php">Profile</a>
            </li>
              <li>
                  <a href="uploadresume.php" >Resume</a>
            </li>
                           <li>
                  <a href="#" >Status</a>
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
        
        <h1 class="margin-bottom-10">STATUS</h1>
        <hr>
              <?php $query1="select tblresume.Fname,tblresume.Lname,tblresume.grade,tblcompanyreq.grade,tblcompanyreq.companyname from tblresume,tblcompanyreq where tblresume.grade=tblcompanyreq.grade";
$result1=mysql_query($query1,$conn) or die("Error :".mysql_error($conn));
                    $rows=mysql_fetch_object($result1); 
             
                  echo "You are <b><u>selected</u></b> in ".$rows->companyname;
                             ?>
