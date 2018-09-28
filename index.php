<!DOCTYPE html>
<html>
<head>
	<title>VS3 Portal</title>
	<link rel="stylesheet" type="text/css" href="./css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="./css/style.css">
</head>
<body>
	<div class="wrapper">
		<?php require './header.php'; ?>
	    <div class="main">
	    	<div class="leftPanel"></div>
	    	<div class="rightPanel">
	    		<div class="myForm">
	    			<form>
	    				<label for="username">Username</label>
	    				<input type="text" class="form-control" name="username" required>
	    				<br>
	    				<input type="password" class="form-control" name="password" required>
	    				<br>
	    				<button class="btn btn-success">Login</button>
	    			</form>
	    		</div>
	    	</div>
	    </div>
	    <div class="footer">Copyright @SaurabhVerma</div>
	</div>
</body>
</html>