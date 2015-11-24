<?php
$servername = "sulley.cah.ucf.edu";
$username = "ca108653";
$password = "andrea143";
$dbname = "ca108653";

// Create connection
$con = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}
error_reporting(E_ALL);
ini_set('display_errors','1');

$productList = "";
$result = mysqli_query($con, "SELECT * FROM shop"); 
$productCount = mysqli_num_rows($result);
if($productCount > 0){
    while($row = mysqli_fetch_array($result)){
        $id = $row["id"];
        $prd_name = $row["prd_name"];
        $prd_price = $row['prd_price'];
        $desc = $row['desc'];
        $productList .='<div class="col-xs-6 col-sm-4 col-md-3 img-portfolio">
                <a href="product.php?id='.$id.'">
                    <img class="img-responsive img-hover" src="img/'.$id.'.jpg" alt="">
                </a>
                <h3>
                     <a href="product.php?id='.$id.'"><h3>'.$prd_name.'</h3></a>
                     $'.$prd_price.'.99
                </h3>

            </div>';
    }
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>SoCalCustoms.com - Shop</title>
	<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
	<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
	<script src="js/jquery.min.js"></script>
	<script type="text/javascript" src="js/jquery.leanModal.min.js"></script>
	<link rel="stylesheet" href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="" />
</head>

<body>
	<div class=social-header>
    <div class="col-md-10 social-icons">
      <li><a href="#"><i class="twitter"></i></a></li>
      <li><a href="#"><i class="facebook"></i></a></li>
      <li><a href="#"><i class="rss"></i></a></li>
    </div>
  </div>
  <div class="social-header-bottom"></div>
  <span class="menu"></span>
  <div class="menu-strip">
    <ul>           
      <li><a href="home.html">HOME</a></li>
      <li><a href="shows.html">SHOWS</a></li>
      <li><a href="featured.html">FEATURED</a></li>
      <li><a href="models.html">MODELS</a></li>
      <li><a href="shop.html">SHOP</a></li>
      <li><a href="contact.html">CONTACT</a></li>
    </ul>
  </div>
  <!-- script for menu -->
  <script>
    $( "span.menu" ).click(function() {
      $( ".menu-strip" ).slideToggle( "slow", function() {
      });
    });
  </script>

			<!-- Page Heading/Breadcrumbs -->
			<div class="container">
        <div class="wrap">
        	<div class="row">
            <div class="col-md-12">
                <h2 class="page-header">The Shop</h2>
                <ol class="breadcrumb">
                    <li><a href="index.html">Home</a>
                    </li>
                    <li class="active">Shop</li>
                </ol>
            </div>
        </div>
        <!-- /.row -->

        <!-- Projects Row -->
        <div class="row">
            <?php echo $productList; ?>
        </div>
        <!-- /.row -->

        <hr>

        <!-- Pagination -->
        <div class="row text-center">
            <div class="col-lg-12">
                <ul class="pagination">
                    <li>
                        <a href="#">&laquo;</a>
                    </li>
                    <li class="active">
                        <a href="#">1</a>
                    </li>
                    <li>
                        <a href="#">2</a>
                    </li>
                    <li>
                        <a href="#">3</a>
                    </li>
                    <li>
                        <a href="#">4</a>
                    </li>
                    <li>
                        <a href="#">5</a>
                    </li>
                    <li>
                        <a href="#">&raquo;</a>
                    </li>
                </ul>
            </div>
        </div>
      </div>
    </div>  
			<div class="footer text-center">
				<div class="bottom-menu">
					<ul>                 
						<li><a href="home.html">HOME</a></li> |
						<li><a href="shows.html">SHOWS</a></li> |
						<li><a href="featured.html">FEATURED</a></li> |
						<li><a href="models.html">MODELS</a></li> |
						<li><a href="shop.html">SHOP</a></li> |
						<li><a href="about.html">ABOUT</a></li> |
						<li><a href="contact.html">CONTACT</a></li> 						
					</ul>
				</div>
				<div class="copyright text-center">
					<p>NOT FOR OFFICIAL USE. Created by Group 0011-5 for DIG4104C Web Design Workshop. </p>
				</div>
			</div>
		</div>
	</div>
</body>
</html>