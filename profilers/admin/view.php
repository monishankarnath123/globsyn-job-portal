<?php
include_once "db.php";
$pid="0";
if(isset($_GET["pid"]))
{
    $pid=$_GET["pid"];
    $query="select * from tblcompanyreq where id='".$pid."'";
   $result= mysql_query($query,$conn);
    $totrows=mysql_num_rows($result);
}

?>
<form method="post" enctype="multipart/form-data">
    <?php
     if($totrows>0)
                {
                while($row=mysql_fetch_object($result))
                {
                    ?>


<div>
     <img src="upload/logo/<?php echo $row->photo ?>" width="100px" height="100px"><br>
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
    <?php
}
    }
    ?>