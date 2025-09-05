<?php
include 'connect.php';
if(isset($_POST['submit'])){
	$userid=$_POST['userid'];
	$firstname=$_POST['firstname'];
	$lastname=$_POST['lastname'];
	$mobile=$_POST['mobile'];
    $email=$_POST['email'];

	$sql = "INSERT INTO user (userid,firstname,lastname,mobile,email) VALUES ('$userid','$firstname','$lastname','$mobile','$email')";
	$result = mysqli_query($con, $sql);


        if($result){
           // echo "Data inserted successfully";
           header('location:displayuser.php');
        }
		
        else{
		    die(mysqli_error($con));
        }
	
}
?>

<html>
<head>
	<title>User Account</title>
	<link rel="stylesheet" type="text/css" href="account.css">
	<script src ="myscript.js"></script>
</head>
<body>
	<div class="headerContainer">
		<div class="left">
			<a href=""><img src="images/spot.png" type="image/png" class="logo"></a>
			<a href="" class="title">AppSpot</a>
		</div>	
		<div class="center">
			<div class="textBox">
				<a href="" class="textClicked">Home</a>
			</div>
			<div class="textBox">
				<a href="testapps.html" class="text">Apps</a>
			</div>
			<div class="textBox">
				<a href="testgames.html" class="text">Games</a>
			</div>
			<div class="textBox">
				<a href="testcat.html" class="text">Categories</a>
			</div>
		</div>
		<div class="right">
			<div class="search">
				<i class="search-icon"></i>
				<input type="text" maxlength="50" placeholder="Search apps/games">
				<a class="clearKeyword" style="display: none;"></a>				
			</div>
			<div class="dropdown">
				<a href="userAccount.html"><img src="images/login.svg" class="userIcon"></a>
			</div>
		</div>
	</div>

	<h1 style="text-align: center;">User Account</h1><br>
	<fieldset class="m1">
	
	<fieldset class="A1">
	<center>
		<legend><h2>Account Information</h2></legend>
		<form action ="user.php" method="POST">
		UserID
			<input type="text" name="userid" placeholder="userid" required><br/><br/>
		Firstname
			<input type="text" name="firstname" placeholder="First Name" required><br/><br/>
		Lastname
			<input type="text" name="lastname" placeholder="Last Name" required><br/><br/>
	 	 Phone Number
			<input type="phone" name="mobile" placeholder="0777777777" pattern="[0-9]{10}" required> <br/><br/>
		E-mail
			<input type="email" name="email" placeholder="ABC@gmail.com" pattern="[A-Z0-9._%+-]+@[A-Z0-9._]+%.[A-Z]{2-3}" required> <br/><br>
			<center>
				<!-- Use a regular button for submission -->
				<button type="submit" name="submit">proceed</button>
			</center>
		</form>
	</center>
	</fieldset>

	<footer class="backgroundf">
		<center>
			<div class="footerContainer">
				<a href="" target="_blank" class="lowertext1">Terms of service</a>
				<span class="split">|</span>
				<a href="" class="lowertext1" target="_blank">Privacy</a>
				<span class="split">|</span>
				<a href="" class="lowertext1" target="_blank">About cookies</a>
			</div>
			<div class="footercontainer2">
				<a href="" class="lowertext1 target="_blank">Appspot. Allrights reserved. © 2020-2024</a>
			</div>
		</center>
	</footer>

</body>
</html>

