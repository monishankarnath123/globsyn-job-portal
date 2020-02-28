<?php
include_once "db.php";
$query="select * from tblcategory";
$recordset=mysql_query($query,$conn) or die("Error :".mysql_error($conn));
$totrows=mysql_num_rows($recordset);
?>

<?php

    if(isset($_GET["ddcat"]))
    {
        $catid=$_GET["ddcat"];
        $query="Select * from tblcompanyreq where catid='".$catid."'";
    }
    else
    {
        $query="Select * from tblcompanyreq";
    }
$result=mysql_query($query,$conn);
$totrows1=mysql_num_rows($result);
?>




<!DOCTYPE html>
<html>
<head>
<title>
Show Company
</title>
   <link href="css/style.css" rel="stylesheet">
</head>
<body>
    <div id="heading">
        <h1 class="h1"><b> ALL COMPANIES WE HAVE</b></h1>
        </div>
    <hr>
    <form>
    <div>
        <select name="ddcat" id="ddcat">
            <option value="-1">select</option>
            <?php
                if($totrows>0)
                {
                while($row=mysql_fetch_object($recordset))
                {
            ?>
            <?php
            if($catid==$row->catid)
            {?>
            <option value=<?php echo $row->catid;?> selected> <?php echo $row->categoryname?></option>
            <?php
            }
                    else
                    {
                        ?>
            <option value=<?php echo $row->catid?>> <?php echo $row->categoryname?></option>
            <?php
                    }?>
            <?php
                }
                }
                    ?>
            <option value=<?php $query1="Select * from tblcompanyreq";
                    $result1=mysql_query($query1,$conn);
                    $totrows2=mysql_num_rows($result1);
                    ?>>others</option>
            
        </select>
        <input type="submit" value="search">
        </div>
        
   <div >
       <table border=1>
           
           
       <?php
            if($totrows1>0)
                {
           while($row=mysql_fetch_object($result))
           {
           ?>
           
           <tr>
               <td>
               <table>
                   <tr>
                       <td>
                    <img src="upload/logo/<?php echo $row->photo ?>" width="100px" height="100px"><br>
              <?php echo $row->companyname; ?><br>
        
              no of candidate <?php echo $row->noofcandidate ?><br>
              exam date <?php echo $row->examdate."<br>";
                     echo "exam time".$row->examtime;          ?><br>
                interview date      <?php echo $row->intdate."<br>";
                    echo "interview time".$row->inttime;?><br>
                
                
                       </td>
                       <td>&nbsp;</td>
                       <td>&nbsp;</td>
                       <td>&nbsp;</td>
                
            </tr>
           </table>
               </td>
               <?php
               $row=mysql_fetch_object($result);
               if($row!=null)
               {
               ?>
               <td>
               <table>
                   <tr>
                       <td>
                    <img src="upload/logo/<?php echo $row->photo ?>" width="100px" height="100px"><br>
              <?php echo $row->companyname; ?><br>
        
              no of candidate <?php echo $row->noofcandidate ?><br>
              exam date <?php echo $row->examdate."<br>";
                     echo "exam time".$row->examtime;          ?><br>
                interview date      <?php echo $row->intdate."<br>";
                    echo "interview time".$row->inttime;?><br>
                
                                       </td>
                       <td>&nbsp;</td>
                       <td>&nbsp;</td>
                       <td>&nbsp;</td>
           </tr>
           </table>
               </td>
               <?php
               }
               $row=mysql_fetch_object($result);
               if($row!=null)
               {
               ?>
               <td>
               <table>
                   <tr>
                       <td>
                <img src="upload/logo/<?php echo $row->photo ?>" width="100px" height="100px"><br>
              <?php echo $row->companyname; ?><br>
        
              no of candidate <?php echo $row->noofcandidate ?><br>
              exam date <?php echo $row->examdate."<br>";
                     echo "exam time".$row->examtime;          ?><br>
                interview date      <?php echo $row->intdate."<br>";
                    echo "interview time".$row->inttime;?><br>
                
                                  </td>
                       <td>&nbsp;</td>
                       <td>&nbsp;</td>
                       <td>&nbsp;</td>
           </tr>
           </table>
               </td>
           <?php
               }
            ?>
           </tr>
           <?php
           }
                     }
            else
            {SS
            ?>
            <tr>
                <td colspan="3">Sorry no product found.</td>
                </tr>
                <?php
                }
                ?>

       </table>
    </div>
    </form>
    
    </body>
</html>