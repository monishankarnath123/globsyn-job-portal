<?php
include_once "db.php";
$query="select * from tblresume";
$recordset=mysql_query($query,$conn) or die("Error :".mysql_error($conn));
$totrows=mysql_num_rows($recordset);
?>

<!DOCTYPE html>
<html>
<head>
<title>
Show Student
</title>
   <link href="css/style.css" rel="stylesheet">
</head>
<body>
    <div id="heading">
<h1 class="h1"> MANAGE STUDENT</h1>
        </div>
    <hr>
     <div >
       <table border=1>
           <tr>
               <th>student name</th><th>qualification</th><th>language konwn</th><th>experience</th><th>project</th><th>grade</th>
               </tr>
      <?php
           if($totrows>0)
                {
           while($row=mysql_fetch_object($recordset))
               {
               ?>
           <tr>
                <td>
                    
              <?php echo $row->Fname." ".$row->Lname;
                    ?>
        </td>
                          <td>
               <?php echo "10th= ".$row->Percentage."%<br>12th= ".$row->Puagg."%<br>DGPA= ".$row->Beagg; ?>
        </td>
                          <td>
                              
               <?php echo $row->cmbskill;
                               ?>
        </td>
                         <td>
               <?php $query1="select * from tblprofile where id ='".$row->id."' ";
$result1=mysql_query($query1,$conn) or die("Error :".mysql_error($conn));
                    $rows=mysql_fetch_object($result1); 
               echo $rows->experience;
                               ?>
        </td>
                <td>
                    <?php $query1="select * from tblprofile where id ='".$row->id."' ";
$result1=mysql_query($query1,$conn) or die("Error :".mysql_error($conn));
                    $rows=mysql_fetch_object($result1); echo $rows->project; ?>
                </td>
                <td>
                     <?php 
               echo $row->grade;
                               ?>
               </td>
                
            </tr>
           <?php
                }
                }
            else
            {
            ?>
            <tr>
                <td colspan="6">Sorry no student found.</td>
                </tr>
                <?php
                }
                ?>

       </table>
    </div>
    <a href="showlist.php"><p><b><u>show list</u></b></p></a>
    </body>
</html>
