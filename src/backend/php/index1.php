<?php
include 's_config.php';

if(isset($_POST['submit'])){
    $message=$_POST['message'];

    

    $sql="INSERT INTO inqury(message) VALUES ('$message')";

    $result = mysqli_query($con,$sql);

    if($result)
    {
        echo "Data inserted successfully.";
    }
    else
    {
        echo "Error:".mysqli_error($con);
    }
}      
?>

<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="Contact_us.css">
        <title>Contact Us - Apps Spot</title>
        <center><img src = "spot logo .png" alt = "Loading Error !" width = "50px" height="50px"></center>
    </head>
    <body>
        <p class="p1">Contact Us</p>

        <div id="rectangle">
            <div class="small_rectangle"><center>Step 1</center></div>
            <p class ="p2">What Can we help with?</p>
            <hr>
            <P>Tell us what we can help with:</P>
            <form action="">
                <textarea id="message" name="message" rows="4" cols="50" oninput="updateCounter(this.value)" size="300" maxlength="300" placeholder="Example: How do i change my settings?"></textarea>
                <span id="charCount">0</span>/300</br></br>
                <input type="submit" value="Send" name="submit">
            </form>
           
        </div></br>

        <div id="rectangle1">
            <div class="small_rectangle"><center>Step 2</center></div>
            <p class ="p2">Resources</p>
            <hr>
            <P>People with similar issues have found these resources helpful.</P></br>
            <a href="">Request your Apps Spot refund</a></br></br>
            <a href="">Redeem a Apps Spot gift card,gift code, or promotional code</a></br></br>
            <a href="">Fix problems when you redeem a gift card</a></br></br>
            <a href="">Get started with Apps Spot Play</a></br></br>
            <a href="">Claim gift card rewards</a></br></br>
        </div></br>

        <div id="rectangle1">
            <div class="small_rectangle"><center>Step 3</center></div>
            <p class ="p2">Contact options</p>
            <hr>
            <center>
                <a href="appsspotchat.com" class="contact-button  photo-link">Chat</a>
                <a href="appsspot@email.com" class="contact-button photo-link1">Email</a><br>
                <p>Chat&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspE-mail</p>
            </center>
        </div></br>

    <script src="Contact_us.js"></script>
    </body>
</html>



