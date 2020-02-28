<?php
include_once "db.php";

$company="";
$student="";
$pid=$_GET["pid"];
if(isset($_GET["pid"]))
  {
    $query="select * from tblcompanyreq where id='".$pid."'";
   $result= mysql_query($query,$conn);
    $totrows=mysql_num_rows($result);
    $row=mysql_fetch_object($result);
    $company=$row->grade;
}
 $query="select * from tblresume where grade='".$company."'";
   $result2= mysql_query($query,$conn);
    $totrows=mysql_num_rows($result2);
        if($totrows>0)
                {
           while($row=mysql_fetch_object($result2))
               {
           $student=$row->id;
               $query1="insert into tblselection(comid,userid)valuse('".$pid."','".$student."')";
               $result= mysql_query($query1,$conn);
           }
        }
header("location:listed.php?pid= $row->id ?>");
               ?>