<!DOCTYPE html>
<html>
<head>
   <title>Inventory System</title>
   <style type="text/css">
      table{
      	border:10 px solid red;
      	padding-top: 250px;
        padding-left: 500px;
        text-align: center;
      }
      th{
      	border: 5px solid #000;
      	padding-right: 20px;
      	padding-left: 20px;
      }
      td{
      	border: 2px solid #666;
      	padding-right: 20px;
      	padding-left: 20px;
      }
      a:link {
  color: green;
  background-color: transparent;
  text-decoration: none;
}

a:visited {
  color: pink;
  background-color: transparent;
  text-decoration: none;
}

a:hover {
  color: red;
  background-color: transparent;
  text-decoration: underline;
}

a:active {
  color: yellow;
  background-color: transparent;
  text-decoration: underline;
}
   </style>
</head>

<body>
    <style>
    body {
        background-image: url("blerje-1.jpg");
        font-size: 150%;
    } 
 
    </style>


<?php

   
   $salesid="";
   $scustomerid="";
   $sproductid="";
   $sunitprice="";
   $sqnty="";
   
   $db=mysqli_connect('localhost','root','','project');
   
   
      
     $query=mysqli_query($db,"SELECT SalesId,FORMAT (SUM(Qnty * UnitPrice),2) Amount FROM SALES GROUP BY SalesId");
      echo "<table>";
      echo "<tr><th>Sales Id</th><th>Amount</th></tr>";

      while ($row    = mysqli_fetch_array($query,MYSQLI_NUM)){
      	echo "<tr><td>";
      	echo $row[0];
      	echo "</td><td>";
      	echo $row[1];
      	echo "</td></tr>";
      }
     
     echo "</table>";
             
   


   if(!$db){
   echo "Error: " . mysqli_error($link);
   }
 
?>
<br><a href="sales.php">Back to sales</a>
</body>
</html>