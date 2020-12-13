<?php include ('server.php'); ?>
<!DOCTYPE html>
<html>
<head>
   <title>Inventory System</title>
   <link rel="stylesheet" type="text/css" href="productstyle.css">
</head>
<body>
	<style>
    body {
        background-image: url("blerje-1.jpg");
    } 
 
    </style>
	<div class="header">
		<h2>USER</h2>
	</div>

	<div class="content">
		<?php if (isset($_SESSION['SUCCESS'])): ?>
			<div class="error sucess">
				<h3>
					<?php 
                       echo $_SESSION['SUCCESS'];
                       unset($_SESSION['SUCCESS']);
					?>
				</h3>
			</div>
		<?php endif ?>
	</div>
    <form method="post" action="user.php">
    
    
	<div class="input-group">
	
  		<div class="column left">
	  		<div class="input-group">
				<button type="submit" name="product" formaction="products.php" class="btn">PRODUCT</button><br/>
	            <button type="submit" name="supplier" formaction="supplier.php" class="btn">SUPPLIER</button><br/>
                <button type="submit" name="customer" formaction="customer.php" class="btn">CUSTOMER</button><br/>
		        <button type="submit" name="employee" formaction="employee.php" class="btn">EMPLOYEE</button><br/>
		        <button type="submit" name="sales" formaction="sales.php" class="btn">SALES</button><br/>
		        <button type="submit" name="purchase" formaction="purchase.php" class="btn">PURCHASE</button><br/>
				<button type="submit" name="user" formaction="login2.php" class="btn">USER</button><br/>
				<button type="submit" name="logout" formaction="login.php" class="btn">LOG OUT</button><br/>
			</div>
		</div>
		<div class="column middle">
			<div class="input-groupNew">

			<div class="head"><header><u>USER DETAILS</u></header></div><br/>

			<span style="padding-left:75px">User ID : 
				<span style="padding-left:36px"><input type="text" name="userid" value="<?php echo $userid; ?>"></span>
				<br><br/>
			</span>
			<span style="padding-left:65px">Username : 
				<span style="padding-left:20px"><input type="text" name="username" value="<?php echo $username; ?>"></span>
				<br><br/>
			</span>
			<span style="padding-left:65px">Password : 
				<span style="padding-left:24px"><input type="text" name="upassword" value="<?php echo $upassword; ?>"></span>
				<br><br/>
			</span>
			
			
			

			</div>
		</div>
		<div class="column right">
	  		
				<button type="submit" name="uinsert" class="btn">INSERT</button><br/>
				<button type="submit" name="udelete" class="btn">DELETE</button><br/>
				<button type="submit" name="uview"  class="btn">VIEW</button><br/>
				<button type="submit" name="uclear" class="btn">CLEAR</button><br/>
				<button type="submit" name="uupdate" class="btn">UPDATE</button><br/>
				<br><a href="dispuser.php">user details</a>

			
		</div>

		</div>
	</div>
    
</form>
</body>
</html>
