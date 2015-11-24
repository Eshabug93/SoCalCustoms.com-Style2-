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
echo "Connected successfully";

// username and password sent from form
$username=$_POST['username'];
$password=$_POST['password'];
$_SESSION['username']=$username;
// To protect MySQL injection (more detail about MySQL injection)
$username = stripslashes($username);
$password = stripslashes($password);
$username = mysqli_real_escape_string($con, $username);
$password = mysqli_real_escape_string($con, $password);
$sql="SELECT * FROM admin_login WHERE username='$username' and password='$password' LIMIT 0 , 1 ";
$result=mysqli_query($con, $sql);

// Mysql_num_row is counting table row
$count=mysqli_num_rows($result);

// If result matched $myusername and $mypassword, table row must be 1 row
if($count==1){
header("location:admin_manager.php");
}
else {
$msg = "That username and password is not the Admin's. Nice Try.";
header("Location:admin_login.php?msg=$msg");
}

?>
