<!DOCTYPE html>
<html>
<head>
	<title>Login SIJR</title>
	<link rel="stylesheet" type="text/css" href="css/style2.css">
	<link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
	<script src="https://kit.fontawesome.com/a81368914c.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
	<img class="wave" src="assets/img/bg7.jpg">
	<div class="container">
	<div class="img">
		<img src="assets/img/jamkrida2.png">
		</div>
		<div class="login-content">

        <form class="user" method="post" action="<?=base_url('auth');?>">
				<img src="assets/img/bg3.jpg">
				<h2 class="title">Selamat&nbsp;Datang</h2>
           		<div class="input-div one">
           		   <div class="i">
           		   		<i class="fas fa-user"></i>
           		   </div>
           		   <div class="div">
           		   		<h5>Username</h5>
           		   		<input type="text" name="nama" id="nama" class="input">
           		   </div>
           		</div>
           		<div class="input-div pass">
           		   <div class="i">
           		    	<i class="fas fa-lock"></i>
           		   </div>
           		   <div class="div">
           		    	<h5>Password</h5>
           		    	<input type="password" name="password" id="password" class="input">
            	   </div>
            	</div>
				<input type="submit" class="btn" value="Login">
            </form>
        </div>
    </div>
	<script src="<?=base_url('assets/');?>vendors/scripts/main.js"></script>n  
</body>
</html>
