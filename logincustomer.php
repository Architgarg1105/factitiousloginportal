<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Login Page</title>
<style>
.form
{
    margin-left:35%;
    margin-top:20%;
}
h1
{
    text-align:center;
}
</style>
</head>
<body>
<?php
require('config.php');
session_start();
if (isset($_POST['submit'])){
	$email = $_POST['email'];
    $password = $_POST['password'];
    $query = "SELECT * FROM customer_details WHERE email='$email' and password='$password'";
	$result = mysqli_query($conn,$query);
    if (mysqli_num_rows($result) > 0) 
    {
  	    $_SESSION['email'] = $email;
	    header("Location: home.php");	
  	}
    else{
	echo "<div>
    <h1>Username/password is incorrect.</h1>
    <br/><h1>Click here to <a href='logincustomer.php'>Login</a> </h1></div>";
	}
}
else
{
?>

<div class="form">
<h2>Log In as Customer</h2>
<form method="post">
<input type="text" name="email" placeholder="Email" required />
<input type="text" name="password" placeholder="Password" required />

<input name="submit" type="submit" value="Login" />
</form>
</div>

<?php } ?>
</body>
</html>