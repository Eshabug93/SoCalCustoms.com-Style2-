<!DOCTYPE html>
<html>
<head>
	<title>SoCalCustoms.com - Administration Only</title>
	<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
	<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
	<!-- Confirm CSS files -->
	<link type='text/css' href='css/confirm.css' rel='stylesheet' media='screen' />
	<script src="js/jquery.min.js"></script>
	<script type="text/javascript" src="js/jquery.leanModal.min.js"></script>
	<script type='text/javascript' src='js/jquery.simplemodal.js'></script>
	<link rel="stylesheet" href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="" />
</head>

<body>
	<div class="container">	
		<div class="wrap">
			<div class="header">
				<div class="header-left">
					<div class="logo">
						<a href="home.html">
							<img src="img/logo.png" alt="SoCalCustoms.com Logo" />
						</a>
					</div>
					<h2>Welcome to SoCalCustoms.com Administration</h2><br />
				<h4>An admin username and password is required. For authorized use only.</h4>
				</div>
				
				<div class="clearfix"></div>
				
	<form class="login" action="login_script.php" method="post">
		Admin Name: <input type="text" name="username" size="30"><br /><br />
		Admin Password: <input type="password" name="password" size="30"><br />
		<br />
		<span>
		 <?php if(isset($_GET['msg']))
		  echo $_GET['msg'];
		  ?>
		</span>
		<br />
		<br />
		<input type="submit" name="login" value="Log In">
	</form>
		</div>
		<hr>
	</div>
</div>



</body>
</html>