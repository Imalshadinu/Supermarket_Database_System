<?php include('server.php'); ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
   <title>Inventory System</title>
   <link rel="stylesheet" type="text/css" href="style2.css">
</head>
<body>
	<div class="header">
    <style>
     body {
        background-image: url("blerje-1.jpg");
        background-size: cover;

     } 
    
    </style>
</div>
	
		
	
        <form method="post" action="login2.php">
    	<!--display validation errors here-->
       	
			<div class="input-group2">
				
				<?php include('errors.php'); ?>
		
				
			
				<label><h4>Admin Password</h4></label>
				<div class="align"><span style="padding-left:25px"><input type="password" name="adpassword" placeholder="Enter Password" value="<?php echo $password; ?>"></span></div>
				
				<div class="btn">
				<button type="submit" name="login2" class="btn">LOGIN</button>
				</div>
			
			</div>
		</form>
	

</body>
</html>
