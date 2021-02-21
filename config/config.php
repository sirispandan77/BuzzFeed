<?php
//this helps send all data at once to instead of bit by bit 
ob_start(); //Turns on output buffering 
session_start();			//helps store variable values for a session

$timezone = date_default_timezone_set("Asia/Calcutta");

$con = mysqli_connect("localhost", "root", "", "buzzfeed"); //Connection variable

if(mysqli_connect_errno()) 
{
	echo "Failed to connect: " . mysqli_connect_errno();
}

?>