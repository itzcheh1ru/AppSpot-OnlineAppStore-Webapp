<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/price.css">
    <title>Document</title>
</head>
<body>
<?php
	include 'config.php';

    $id=isset($_POST['id'])? $_POST['id']:"";
	$bt= isset($_POST['name']) ? $_POST['name']:"";
	$pin= isset($_POST['password']) ? $_POST['password']:"";

	$sql="UPDATE usernew SET Username='$bt' , password='$pin' WHERE userid='$id' ";
		
	$result=mysqli_query($conn,$sql);

	if($result)
	{
		header("location:design.php");
	}
	else
	{
		echo"wrong";
	}
	
	
?>

</body>

