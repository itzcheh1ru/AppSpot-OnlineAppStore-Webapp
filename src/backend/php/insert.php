<?php

include 'config.php';



if(isset($_POST['reg']))
	{
	$bt= isset($_POST['Uname']) ? $_POST['Uname']:"";
	$pin= isset($_POST['password']) ? $_POST['password']:"";
	
	
	$sql= "INSERT INTO usernew (Username,password) VALUES ('$bt','$pin')";
	
	$result=mysqli_query($conn,$sql);
	
	
	  header("location:design.php");
}
?>