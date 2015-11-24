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

//check to see if product exists
if(isset($_GET['id'])){
    $id=$_GET['id'];
    $id = preg_replace('#[^0-9]#i','',$_GET['id']);
    $result=mysqli_query($con, "SELECT * FROM shop WHERE id='$id' LIMIT 1");
    $productCount = mysqli_num_rows($result);
        if($productCount > 0){
            while($row = mysqli_fetch_array($result)){
        $id = $row["id"];
        $prd_name = $row["prd_name"];
        $prd_price = $row['prd_price'];
        $desc = $row['desc'];
        }
        } else{
            echo "That item doesn't exist";
            exit();
        }
        } else {
        echo "Data to render this page is missing";
        exit();
        }
mysqli_close($con);
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title><?php echo $prd_name; ?></title>
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
                <li><a href="home.html">Home</a>
                </li>
                <li><a href="shop.php">Shop</a>
                </li>
                <li class="active"><?php echo $prd_name; ?></li>
              </ol>
          	</div>
      		</div>
        <!-- /.row -->

        <!-- Projects Row -->
        <div class="row">
            <div class="col-xs-0 col-sm-0 col-md-2 img-portfolio">
                
            </div>
            <div class="col-xs-12 col-sm-4 col-md-4 img-portfolio">
                <a href="portfolio-item.html">
                    <img class="img-responsive img-hover" src="img/<?php echo $id; ?>.jpg" alt="">
                </a>
                <h4>
                    <a href="portfolio-item.html">View Larger Image</a>
                </h4>

            </div>
            <div class="col-xs-12 col-sm-7 col-md-4 img-portfolio">
                    
                     <h2><?php echo $prd_name; ?></h2><br />
                           <p> <?php echo $desc; ?> 
                            <br /><br /> 
                            $<?php echo $prd_price; ?>.99<br /><br />
                           </p>
                    <form id="cartForm" name="cartForm" method="post" action="cart.html">
                        <p>Quantity:</p><select>
                        <option value"2oz">1</option>
                        <option value"4oz">2</option>
                        <option value"8oz">3</option>
                        <option value"16oz">4</option>
                        <option value"16oz">5</option>
                        </select>
                        <br /><br />
                        <input type="hidden" name="pid" id="pid" value="<?php echo $id; ?>" />
                    <h4>
                        <input type="submit" name="button" value="ADD TO CART" class="button"/>
                    </h4>
                    </form>
                </p>
            </div>
            <div class="col-xs-0 col-sm-0 col-md-2 img-portfolio">
                
            </div>
        </div>
      </div>
    </div>
        <!-- /.row -->

        <hr>


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