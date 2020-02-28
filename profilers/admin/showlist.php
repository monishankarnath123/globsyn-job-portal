<?php
include_once "db.php";
$query="select * from tblcompanyreq";
$recordset=mysql_query($query,$conn) or die("Error :".mysql_error($conn));
$totrows=mysql_num_rows($recordset);
$query1="select * from tblprofile";
$recordset1=mysql_query($query1,$conn) or die("Error :".mysql_error($conn));
$totrows1=mysql_num_rows($recordset1);

?>

<!DOCTYPE html>
<html>
<head>
<title>
Show products
</title>
   <link href="css/style.css" rel="stylesheet">
</head>
<body>
    <div id="heading">
<h1 class="h1"> listed STUDENT</h1>
        </div>
    <hr>
     <div class="divinline">
       <table border=1>
           <tr>
               <th>company name</th>
               </tr>
      <?php
           if($totrows>0)
                {
           while($row=mysql_fetch_object($recordset))
               {
               ?>
           <tr> <td>
            <img src="upload/logo/<?php echo $row->photo; ?>" width="100px" height="100px"><br>
               <?php echo $row->companyname; ?>
               </td>
               <td>
                    <a href="listed.php?pid=<?php echo $row->id ?>">listed student</a>
               </td>
                
            </tr>
           <?php
                }
                }
            else
            {
            ?>
            <tr>
                <td colspan="3">Sorry no product found.</td>
                </tr>
                <?php
                }
                ?>

       </table>
    </div>
    <!--<div class="divinline">
       <table border=1>
           <tr>
               <th>student name</th><th>qualification</th><th>language konwn</th><th>experience</th><th>project</th><th>grade</th>
               </tr>
      <?php
           if($totrows1>0)
                {
           while($row=mysql_fetch_object($recordset1))
               {
               ?>
           <tr> <td>
                    <?php echo $row->companyname; ?>
               </td>
                
            </tr>
           <?php
                }
                }
            else
            {
            ?>
            <tr>
                <td colspan="3">Sorry no product found.</td>
                </tr>
                <?php
                }
                ?>

       </table>
    </div>-->
    
    </body>
</html>
