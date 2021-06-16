<?php
include("auth.php");
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Home Page</title>
<style>
.form
{
    margin-top:15%;
}
h1
{
    text-align:center;
}
</style>
</head>
<body>
<div class="form">
<h1>Welcome Signed in using <?php echo $_SESSION['email']; ?>!</h1>
<h1>This is Home Page.</h1>
<h1><a href="logout.php">Logout</a></h1>
</div>
</body>
</html>