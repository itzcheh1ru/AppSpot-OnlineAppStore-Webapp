<!DOCTYPE html>
<html lang="en">
<head>
   
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <link rel="stylesheet" href="index.css">
</head>
<body>

  

    <div class="container" >
        <h2>AppSpot ID Login</h2>
        <form method="post" action="insert.php">
            <div class="form-group" >
              
               <input type="text" id="Username" placeholder="Username" required>
            </div>
            <br>
            <div class="form-group">
                <input type="password" id=Password" placeholder="Password" required>
            </div><br>
          
        <a class="log" href="">Log in via SMS</a>
    
        <br><br>
        <button type="submit">LOG IN</button>
        <br><br>
        <div>
            <center> <a href="#">Register</a>&nbsp|&nbsp 
            <a href="#">Forgot password?</a>
            </center>
           
        </div>

        </form>

    </div>   
   
</html>