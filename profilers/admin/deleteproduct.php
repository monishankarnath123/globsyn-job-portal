<html>
<head>
    
<title>

delete product
</title>
    <link href="css/style.css" rel="stylesheet">
    
</head>
    
    
<body> <?php
    
    $pn=$_GET["pid"];
    
   echo $pn;
    include_once("db.php");
   

 $query="delete from tblcompanyreq where id='$pn'";


$result=mysql_query($query,$conn) or die("Error".mysql_error($conn));
        
         
        
        echo '<br>DELETED SUCCESSFULLY!!!!!!<br>';
    
    ?>
    
    </body>
    
</html>
