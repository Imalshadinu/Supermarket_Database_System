<!DOCTYPE html>
<html>
<head>
   <title>Inventory System</title>
   <style type="text/css">
      table{
      	border:10 px solid red;
      	padding-top: 200px;
        padding-left: 500px;
        text-align: center;
      }
      th{
      	border-bottom: 5px solid #000;
      	padding-right: 20px;
      }
      td{
      	border-bottom: 2px solid #666;
      	padding-right: 20px;
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
    <table>
    <tr>
        <th>User Id</th>
        <th>User Name</th>
        <th>Password</th>
        

    </tr>
<?php
    
$db=mysqli_connect('localhost','root','','project');

   $query=mysqli_query($db,"SELECT * FROM USERDETAILS");
      
      

      while ($row    = mysqli_fetch_array($query,MYSQLI_NUM)){
        echo "<tr><td>".$row[0]."</td><td>".$row[1]."</td><td>".$row[2]."</td><tr>";
      }
     
     echo "</table>";

     if(!$db){
   echo "Error: " . mysqli_error($link);
   }
?>

    </table>
    <br><a href="user.php">Back to user</a>
    </body>
</html>