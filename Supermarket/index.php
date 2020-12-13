
<!DOCTYPE html>
<html>
<head>
   <title>Inventory System</title>
   
   <style>
   	 *{
	margin: 10px;
	padding: 10px;
}
body{
	font-size: 120%;
	background: #F8F8FF;
	margin: 0;
}

.header{
	font-size: 180;
	width: 100%;
	margin: 0; /*50px auto 0px;*/
	color: #262626;
	background: transparent; /*#5F9EA0;*/
	text-align: center;
	/*border: 1px solid #B0C4DE;*/
    border-bottom: none; 
	border-radius: 10px 10px 0px 0px;
	padding: 0px;
}

h1{
	margin: 0;
	font-size: 70px;
	/*padding: 0 0 20px;*/
	padding-bottom: 10px;
	color: #4F0C10;
	text-align: center;
}


.btn{
	padding-top: 10px;
	padding: 10px;
	font-size:15px;
	color:white;; /*white;*/
	width: 20%;
	background: #4F0C10; /*#5F9EA0;*/
	border:none;
	border-radius: 5px;
}

.input-group{
	margin: 10px 0px 10px 0px;
}

.input-group label{
	
	display:block;
	text-align:left;
	margin:3px;
}

.input-group input{
	height: 30px;
	width:60%;
	padding:5px 10px;
	font-size:16px;
	border-radius: 5px;
	border: 1px solid gray;
}
   </style>
</head>
<body>
	<style>
    body {
        background-image: url("blerje-1.jpg");
        background-size: cover;
    } 
 
    </style>
	<div class="header">
		<h1>INVENTORY SYSTEM</h1>
	</div>
    <form method="post" action="index.php">
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
    
	<div class="input-group">
		
		<button type="submit" name="product" formaction="products.php" class="btn"><b>PRODUCT</b></button><br/>
	    <button type="submit" name="supplier" formaction="supplier.php" class="btn"><b>SUPPLIER</b></button><br/>
        <button type="submit" name="customer" formaction="customer.php" class="btn"><b>CUSTOMER</b></button><br/>
		<button type="submit" name="employee" formaction="employee.php" class="btn"><b>EMPLOYEE</b></button><br/>
		<button type="submit" name="sales" formaction="sales.php" class="btn"><b>SALES</b></button><br/>
		<button type="submit" name="purchase" formaction="purchase.php" class="btn"><b>PURCHASE</b></button><br/>
		<button type="submit" name="user" formaction="login.php" class="btn"><b>USER</b></button><br/>
		<button type="submit" name="logout" formaction="login.php" class="btn"><b>LOG OUT</b></button><br/>

	</div>
    </form>
</body>
</html>
