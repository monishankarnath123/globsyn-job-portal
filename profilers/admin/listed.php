<?php
include_once "db.php";

$company="";
$student="";
$resume="";
$pid="0";
if(isset($_GET["pid"]))
  {
$pid=$_GET["pid"];
    $query="select * from tblcompanyreq where id='".$pid."'";
   $result= mysql_query($query,$conn);
    $totrows=mysql_num_rows($result);
if($totrows>0)
                {
                while($row=mysql_fetch_object($result))
                {
                    $company=$row->id;
                    
                }
}
}

?>
<form method="post" enctype="multipart/form-data">
    <?php
    $query1="select * from tblcompanyreq where id='".$company."'";
   $result1= mysql_query($query1,$conn);
    $totrows1=mysql_num_rows($result1);
$sgrade="";
     if($totrows1>0)
                {
                while($row=mysql_fetch_object($result1))
                {
                    $sgrade=$row->grade;
                    ?>
    <div>company name:<br><img src="upload/logo/<?php echo $row->photo ?>" width="100px" height="100px"><br><?php echo $row->companyname?><br>
        <br>
</div>

<?php 
                }
     }
    ?>
    <?php
    $query1="select * from tblresume where grade='".$sgrade."'";
   $result1= mysql_query($query1,$conn);
    $totrows1=mysql_num_rows($result1);

     if($totrows1>0)
                {
                while($row=mysql_fetch_object($result1))
                {
                    ?>
    <div>student name:<br><?php echo $row->Fname." ".$row->Lname;?>
</div><br>

<?php 
                }
     }
    ?>
    <?php
    $query1="select * from tblcompanyreq where id='".$company."'";
   $result1= mysql_query($query1,$conn);
    $totrows1=mysql_num_rows($result1);

     if($totrows1>0)
                {
                while($row=mysql_fetch_object($result1))
                {
                    ?>
    <div>Exam date and time:<br><?php echo $row->examdate." ".$row->examtime?>
</div><br>
    <br>
<div>Interview date and time:<br><?php echo $row->intdate." ".$row->inttime?>
</div><br>
    <br>
    <?php
                }
     }
    ?>
