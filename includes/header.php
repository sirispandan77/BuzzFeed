<?php require 'config/config.php';
    //checks if user is logged in
    if(isset($_SESSION['username'])){
        $userLoggedIn = $_SESSION['username'];
    }
    else{
        header("Location: register.php");       //if not logged in redirected to register page.
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BuzzFeed</title>
    <!-- jquery linking--> 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	
</head>
<body>