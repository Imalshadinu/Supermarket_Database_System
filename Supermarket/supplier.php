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
        background-size: cover;
    } 
 
    </style>
	<div class="header">
		<h2>SUPPLIER</h2>
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
    <form method="post" action="supplier.php">
    
    
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

			<div class="head"><header><u>SUPPLIER DETAILS</u></header></div>

			<span style="padding-left:45px"><b>Supplier ID : </b>
				<span style="padding-left:25px"><input type="text" name="supplierid" value="<?php echo $supplierid; ?>"></span>
				<br><br/>
			</span>
			<span style="padding-left:45px"><b>Supplier Name :</b> 
				<span style="padding-left:0px"><input type="text" name="suppliername" value="<?php echo $suppliername; ?>"></span>
				<br><br/>
			</span>
			<span style="padding-left:45px"><b>Address :</b> 
				<span style="padding-left:53px"><input type="text" name="supaddress" value="<?php echo $supaddress; ?>"></span>
				<br><br/>
			</span>
			<span style="padding-left:45px"><b>Email : </b>
				<span style="padding-left:72px"><input type="text" name="supemail" value="<?php echo $supemail; ?>"></span>
				<br><br/>
			</span>
			<span style="padding-left:45px"><b>Contact No :</b> 
				<span style="padding-left:30px"><input type="text" name="supconno" value="<?php echo $supconno; ?>"></span>
				<br><br/>
			</span>

			</div>
		</div>
		<div class="column right">
	  		
				<button type="submit" name="supinsert"  class="btn">INSERT</button><br/>
				<button type="submit" name="supdelete"  class="btn">DELETE</button><br/>
				<button type="submit" name="supview"  class="btn">VIEW</button><br/>
				<button type="submit" name="supclear"  class="btn">CLEAR</button><br/>
				<button type="submit" name="supupdate"  class="btn">UPDATE</button><br/>
				<br><a href="dispsupp.php">supplier details</a>
			
		</div>

		</div>
	</div>
    
</form>
</body>
</html>
