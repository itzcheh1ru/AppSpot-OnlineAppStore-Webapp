<!DOCTYPE html>
<html lang="en">
<head>
   
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <link rel="stylesheet" href="index.css">
</head>
<body>

<?php
    include 'config.php';

    $id = isset($_GET['Id']) ? $_GET['Id'] : '';
    $name = "";
    $password = "";
    
    $sql = "SELECT * FROM usernew WHERE userid ='$id'";
    
    $result = mysqli_query($conn, $sql);
    
    if(mysqli_num_rows($result) > 0) {
        while($row = mysqli_fetch_assoc($result)) {
            
            $id = $row['userid'];
            $name = $row['Username'];
            $password = $row['password'];
            
        }
    }
?>

    <div class="container" >
        <h2>Update a login form</h2>
        <form method="post" action="update.php">
            <div class="form-group" >
              
            <input type="text" placeholder="Enter the name" name="did" required value="<?php echo $id;?> "  readonly="readonly">
               <input type="text" id="Username" placeholder="Username" name="Uname" required value="<?php echo $name;?> " >
            </div>
            <br>
            <div class="form-group">
                <input type="password" id="Password" placeholder="Password" name="password"  required value="<?php echo $password;?> " >
            </div><br>
          
        <a class="log" href="">Log in via SMS</a>
    
        <br><br>
        <button type="submit" name="reg" class="submit" >LOG IN</button>
        <br><br>
        <div>
            <center> <a href="#">Register</a>&nbsp|&nbsp 
            <a href="#">Forgot password?</a>
            </center>
           
        </div>

        </form>

    </div>   
   
</html>