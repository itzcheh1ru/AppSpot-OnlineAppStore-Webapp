<?php
include 'connect.php';?>

<!DOCTYPE html>
<html>
<head>
	<title>User Account</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" />
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

<center>
            <a href="displayuser.php">
              <button id="left" autofocus>User List</button>
            </a>

            <a href="user.php">
              <button id="right" >Add</button>
            </a>
        </section>

      <table   border= "5px">
    <tr>
    
      <th>UserID</th>
      <th>Firstname</th>
      <th>Lastname</th>
      <th>Phone Number</th>
      <th>E-mail</th>
      <th>Action</th>
    </tr>
    </div>
</div> 
    

<?php

$sql="select * from user";
$result=mysqli_query($con,$sql);
if($result){
  while($row=mysqli_fetch_assoc($result)){
    $userid=$row['userid'];
	$firstname=$row['firstname'];
	$lastname=$row['lastname'];
	$mobile=$row['mobile'];
    $email=$row['email'];
    echo '<tr>
      <th  scope="row">'. $userid.'</th>
      <td>'.$firstname.'</td>
      <td>'.$lastname.'</td>
      <td>'.$mobile.'</td>
      <td>'.$email.'</td>

  <td>
    <a href="update.php? updateid='.$userid.'"><i class="fa-solid fa-pen-to-square"></i></a>
    <a href="delete.php? deleteid='.$userid.'"><i class="fa-solid fa-trash"></i></a>
  </td>

    </tr>';
}
}
?>
    </table>
</center>

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