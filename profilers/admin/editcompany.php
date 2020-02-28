<?php
include_once "db.php";
$mode= "Edit";
$pid="0";
if(isset($_GET["pid"]))
  {
    $pid=$_GET["pid"];
      $mode= "Edit!!";
    $query="select * from tblcompanyreq where id='".$pid."'";
   $result= mysql_query($query,$conn);
    $totrows=mysql_num_rows($result);
}
   
       
//for adding/updateting
if(isset($_POST["pname"]))
{
    $pid=$_POST["pid"];
$pname=$_POST["pname"];
$rate=$_POST["rate"];
$desc=$_POST["desc1"];
    $desc1=$_POST["desc2"];
if(isset($_FILES["pimg"])){
$filename=$_FILES["pimg"]["name"];
$serverpath="upload/products/".time().$filename;
move_uploaded_file($_FILES["pimg"]["tmp_name"],$serverpath);
}
//write the insert query
    $query1="update tblcompanyreq set companyname='".$pname."',noofcandidate='".$rate."',intdate='".$desc."',inttime='".$desc1."' where id='".$pid."'";

    //echo $query;
  $result1=  mysql_query($query1,$conn);
    if($result1==1)
    {
header("location:managecompany.php");
    }
}
?>

<form method="post" enctype="multipart/form-data">
<div>
<h1><?php echo $mode?></h1>
</div>
    <?php
     if($totrows>0)
                {
                while($row=mysql_fetch_object($result))
                {
                    ?>
<div>
company Name: <input type="text" name="pname" id="pname" value="<?php echo $row->companyname?>" required>
</div>
    <div>
Company address: <input type="text" name="add" id="add" value="<?php echo $row->address?>" required>
</div>
<div>
 minimumqualification: <input type="text" name="min" id="min" value="<?php echo $row->minimumqualification?>" required>
</div>
    <div>
experience: <input type="text" name="exp" id="exp" value="<?php echo $row->experience?>" required>
</div>
    <div>
exam date and time: <input type="text" name="desc3" id="desc3" value="<?php echo $row->exam?>" required>
        <input type="text" name="desc4" id="desc4" value="<?php echo $row->examdate?>" required>
        <input type="text" name="desc5" id="desc5" value="<?php echo $row->examtime?>" required>
</div>
     <div>
interview place: <input type="text" name="place" id="place" value="<?php echo $row->intplace?>" required>
</div>
     <div>
Emailid: <input type="text" name="email" id="email" value="<?php echo $row->emailid?>" required>
</div>
     <div>
Mobile number: <input type="text" name="num" id="num" value="<?php echo $row->mobilenumber?>" required>
</div>
    
<div>
no of candidate: <input type="number" name="rate" id="rate" value=<?php echo $row->noofcandidate?> required>
</div>
<div>
interview date and time: <input type="text" name="desc1" id="desc1" value=<?php echo $row->intdate?>>
    <input type="text" name="desc2" id="desc2" value=<?php echo $row->inttime?>>
</div>
<div>
Photo: <input type="file" name="pimg" id="pimg">
</div>
    <?php
                }
     }
    ?>
<div>
   <input type="hidden" name="pid" id="pid" value="<?php echo $pid?>">
 <input type="Submit"  value="Save" >  <input type="Reset"  value="Clear" >
</div>
</form>
