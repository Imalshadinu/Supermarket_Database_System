<!DOCTYPE html>
<html>
<head>
   <title>Inventory System</title>
   <style type="text/css">
      table{
      	border:10 px solid red;
      	padding-top: 200px;
        padding-left: 100px;
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
        <th>Product Code</th>
        <th>Product Name</th>
        <th>Category</th>
        <th>Company</th>
        <th>SupplierId</th>
        <th>Cost</th>
        <th>UnitPrice</th>
        <th>QntyType</th>
        <th>Qnty</th>

    </tr>
 
  <?php
   

    $db=mysqli_connect('localhost','root','','project');

   $query=mysqli_query($db,"SELECT * FROM PRODUCTS ORDER BY PRODCODE ASC");
      
      

      while ($row    = mysqli_fetch_array($query,MYSQLI_NUM)){
        echo "<tr><td>".$row[0]."</td><td>".$row[1]."</td><td>".$row[2]."</td><td>".$row[3]."</td><td>".$row[4]."</td><td>".$row[5]."</td><td>".$row[6]."</td><td>".$row[7]."</td><td>".$row[8]."</td><tr>";
      }
     
     echo "</table>";

     if(!$db){
   echo "Error: " . mysqli_error($link);
   }

  ?>


</table>
<br><a href="products.php">Back to product</a>
    </body>
</html>