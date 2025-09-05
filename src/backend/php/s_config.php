<?php
$con = new mysqli('localhost','root','','contact_us');

if(!$con)
{
    die(mysqli_error($con));
}
?>