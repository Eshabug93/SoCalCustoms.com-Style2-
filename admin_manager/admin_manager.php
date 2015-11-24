<!DOCTYPE html>
<html>
<head>
	<title>SoCalCustoms.com - Administration Only</title>
	<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
	<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
	<!-- Confirm CSS files -->
	<link type='text/css' href='css/confirm.css' rel='stylesheet' media='screen' />
	<!-- Load JavaScript files -->
	<script type='text/javascript' src='js/jquery.js'></script>
	<script type='text/javascript' src='js/jquery.simplemodal.js'></script>
	<script type='text/javascript' src='js/confirm.js'></script>
	<script type="text/javascript" src="js/jquery.leanModal.min.js"></script>
	<script src="js/jquery.min.js"></script>
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
					
				</div>
				
				<div class="clearfix"></div>
<?php session_start();
?>
	<h1>Welcome to the Admin Manager</h1>
	<h3>You can now upload changes to the site</h3><br />

	<div class="clearfix"></div>

	<div id='content'>
		<div id='confirm-dialog'>
			<input type='button' name='confirm' class='confirm' value='Log Out'/>
		</div>
<!-- logout confirm box -->
		<div id='confirm'>
			<div class='header'><span></span></div>
			<div class='message'></div>
			<div class='buttons'>
				<div class='yes'>OK</div>
			</div>
		</div>
		</div>
	</div>
</div>
</div>
</body>
</html>