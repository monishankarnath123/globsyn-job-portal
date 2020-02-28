<?php
include_once "db.php";
$query="select * from tblcategory";
$recordset=mysql_query($query,$conn) or die("Error :".mysql_error($conn));
$totrows=mysql_num_rows($recordset);
?>

<!DOCTYPE html>
<html >
<head>
<title>
Company Register
</title>
   <link href="css/style.css" rel="stylesheet">
</head>
<body>
    <div class="dev">
        <form method="post" enctype="multipart/form-data">
        <h1 class="h1">COMPANY REGISTRATION FORM</h1>
        <hr>
             <div>select category<select name="sel" id="sel">
                 <option>select</option>
             <?php
                if($totrows>0)
                {
                while($row=mysql_fetch_object($recordset))
                {
            ?>
            <option value=<?php echo $row->catid?>selected><?php echo $row->categoryname ?></option>
            <?php
                }
                }
            ?>
            </select>
            </div>
            <div class="divinline">Company Name/Consultancy :</div><div class="divinline"><input type="text" name="txtcname" id="txtcname" placeholder="Company"></div><br><br>
            <div class="divinline">Number Of Candidate  :</div><div class="divinline"><input type="text" name="txtcandidate" id="txtcandidate"></div><br><br>
            <div class="divinline">Minimum Qualification :</div><div class="divinline"><input type="checkbox" name="ch1" id="ch1" value="10" >10</div><br>
            <div class="divinline"><input type="checkbox" name="ch2" id="ch2" value="10+2" >10+2</div><br>
            <div class="divinline"><input type="checkbox" name="ch3" id="ch3" value="diploma" >diploma</div><br>
            <div class="divinline"><input type="checkbox" name="ch4" id="ch4" value="graduation" >Graduation</div><br>
            <div class="divinline"><input type="checkbox" name="ch5" id="ch5" value="master">Masters</div><br><br>
            <div class="divinline">Experience : </div><div class="divinline"><input type="text" name="experience" id="experience"></div><br><br>
             <div class="divinline"><div>A:<br>10th</div></div><br>
            <div class="divinline">Grade of student</div><br>
            <div class="divinline"><input type="checkbox" name="c2" id="c2" value="A" >A</div><br>
            <div class="divinline"><input type="checkbox" name="c3" id="c3" value="B" >B</div><br>
            <div class="divinline"><input type="checkbox" name="c4" id="c4" value="C" >C</div><br>
            <div class="divinline"><input type="checkbox" name="c5" id="c5" value="D">D</div><br><br>

            <div class="divinline">written exam : </div><div class="divinline"><input type="radio" name="exam" id="exam" value="yes">yes</div>
            <input type="radio" name="exam" id="exam" value="no">no<br><br>

<div class="divinline">exam date : </div><div class="divinline">
            date<select name="edate" id="edate"><option>01</option><option>02</option><option>03</option><option>04</option><option>05</option><option>06</option><option>07</option><option>08</option><option>09</option><option>10</option><option>11</option><option>12</option><option>13</option><option>14</option><option>15</option><option>16</option><option>17</option><option>18</option><option>19</option><option>20</option><option>21</option><option>22</option><option>23</option><option>24</option><option>25</option><option>26</option><option>27</option><option>28</option><option>29</option><option>30</option><option>31</option></select>
            month<select name="emonth" id="emonth"><option value="1">JAN</option><option value="2">FEB</option><option value="3">MAR</option><option value="4">APR</option><option value="5">MAY</option><option value="6">JUN</option><option value="7">JUL</option><option value="8">AUG</option><option value="9">SEP</option><option value="10">OCT</option><option value="11">NOV</option><option value="12">DEC</option></select>
            year<input type="etext" name="eyear" id="eyear" value="<?php echo date('Y')?>"></div><br><br>
<div class="divinline">Exam time : </div><div class="divinline"><input type="text" name="etime" id="etime"></div><br><br>
<div class="divinline">Interview Date : </div><div class="divinline">
            date<select name="idate" id="idate"><option>01</option><option>02</option><option>03</option><option>04</option><option>05</option><option>06</option><option>07</option><option>08</option><option>09</option><option>10</option><option>11</option><option>12</option><option>13</option><option>14</option><option>15</option><option>16</option><option>17</option><option>18</option><option>19</option><option>20</option><option>21</option><option>22</option><option>23</option><option>24</option><option>25</option><option>26</option><option>27</option><option>28</option><option>29</option><option>30</option><option>31</option></select>
            month<select name="imonth" id="imonth"><option value="1">JAN</option><option value="2">FEB</option><option value="3">MAR</option><option value="4">APR</option><option value="5">MAY</option><option value="6">JUN</option><option value="7">JUL</option><option value="8">AUG</option><option value="9">SEP</option><option value="10">OCT</option><option value="11">NOV</option><option value="12">DEC</option></select>
            year<input type="text" name="iyear" id="iyear"value="<?php echo date('Y')?>"></div><br><br>
<div class="divinline">Interview Time : </div><div class="divinline"><input type="text" name="itime" id="itime"></div><br><br>
            <div class="divinline">Interview Place : </div><div class="divinline"><textarea name="place" id="place"></textarea></div><br><br>
            

            <div class="divinline">Email : </div><div class="divinline"><input type="email" name="email" id="email" placeholder="Email"></div><br><br>
            <div class="divinline">Password : </div><div class="divinline"><input type="password" name="pass" id="pass" value="" placeholder="Password"></div><br><br>
            <div class="divinline">Mobile Number :</div><div class="divinline"><input type="number" name="num" id="num" placeholder="mobile number"></div><br><br>
            <div class="divinline">Company Address :</div><textarea name="add" id="add" rows="5" cols="10" class="divinline"></textarea><br><br>
            
            <div class="divinline">Company Logo</div><div class="divinline"><input type="file" name="photo" id="photo"></div><br><br>
            
        <div><input type="Submit" name="btnsubmit" id="btnsunmit" value="Submit" class="bt">
            <input type="Reset" name="btnreset" id="btnreset" value="Reset" class="bt"></div>
        </form>
        <hr>
    </div>
    <?php
    $a="";
                         $a1="";
                        $a2="";
                        $a3="";
                        $a4="";
                       $exam="";
                       $b="";
                       $c="";
                       $d="";
                       $e="";
    if(isset($_POST["btnsubmit"]))
    {
     $year1=$_POST["iyear"];;
            $month1=$_POST["imonth"];
        $date1=$_POST["idate"];
         $year2=$_POST["eyear"];;
            $month2=$_POST["emonth"];
        $date2=$_POST["edate"];
        if(isset ($_POST["ch1"]))
        {
            $a=$_POST["ch1"];
        }
        if(isset ($_POST["ch2"]))
        {
            $b=$_POST["ch2"];
        }
        if(isset ($_POST["ch3"]))
        {
            $c=$_POST["ch3"];
        }
        if(isset ($_POST["ch4"]))
        {
            $d=$_POST["ch4"];
        }
        if(isset ($_POST["ch5"]))
        {
            $e=$_POST["ch5"];
        }
         if(isset ($_POST["c2"]))
        {
            $a1=$_POST["c2"];
        }
        if(isset ($_POST["c3"]))
        {
            $a2=$_POST["c3"];
        }
        if(isset ($_POST["c4"]))
        {
            $a3=$_POST["c4"];
        }
        if(isset ($_POST["c5"]))
        {
            $a4=$_POST["c5"];
        }
        
    $cname=$_POST["txtcname"];
        $catid=$_POST["sel"];
     $candidate=$_POST["txtcandidate"];
    $email1=$_POST["email"];
     $passw=$_POST["pass"];
    $qualification=$a." ".$b." ".$c." ".$d." ".$e;
        $experience=$_POST["experience"];
        if(isset ($_POST["exam"]))
        {
            $exam=$_POST["exam"];
        }
        $examdate=$year2."-".$month2."-".$date2;
        $examtime=$_POST["etime"];
        $intdate=$year1."-".$month1."-".$date1;
        $inttime=$_POST["itime"];
        $intplace=$_POST["place"];
        $mnum=$_POST["num"];
        $companyadd=$_POST["add"];
        $grade=$a1." ".$a2." ".$a3." ".$a4;
        
        include_once "db.php";
        
    if(isset($_FILES["photo"])){
        //$allowed = array("jpg" => "image/jpg", "jpeg" => "image/jpeg", "gif" => "image/gif", "png" => "image/png");
        $filename = $_FILES["photo"]["name"];
         $filename=time().$filename;
        //$filetype = $_FILES["photo"]["type"];
        //$filesize = $_FILES["photo"]["size"];
    
        
        //$ext=substr($filename,strpos($filename,'.')+1);
        //echo "<br>extension ".$ext;
        //if(!array_key_exists($ext, $allowed)) die("Error: Please select a valid file format.");
    
        // Verify file size - 5MB maximum
        //$maxsize = 5 * 1024 * 1024;
        //if($filesize > $maxsize) die("Error: File size is larger than the allowed limit.");
    
        // Verify MYME type of the file
        //if(in_array($filetype, $allowed)){
            // Check whether file exists before uploading it
            //if(file_exists("upload/logo" . $filename)){
                //echo $filename . " is already exists.";
            //} else{
                move_uploaded_file($_FILES["photo"]["tmp_name"], "upload/logo/" . $filename);
            } 
    $query="insert into tblcompanyreq(companyname,noofcandidate,minimumqualification,experience,exam,examdate,examtime,intdate,inttime,intplace,emailid,mobilenumber,address,photo,catid,grade) values('".$cname."','".$candidate."','".$qualification."','".$experience."','".$exam."','".$examdate."','".$examtime."','".$intdate."','".$inttime."','".$intplace."','".$email1."','".$mnum."','".$companyadd."','".$filename."','".$catid."','".$grade."')";
$result1=mysql_query($query,$conn) or die(mysql_error($conn));
    }
                       
    ?>

    </body>
</html>