<?php

$conn=new mysqli("localhost","root","","login");

if($conn->connect_error)
{
    die("connection failed".$con->connect_error);

}

