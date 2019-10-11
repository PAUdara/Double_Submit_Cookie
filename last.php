<!doctype html>
<html >
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet"  href="./styles/stylesnew.css">

        <title>CSRF</title>
		<style>
a:link, a:visited {
  background-color:#3385ff;
  color: white;
  padding: 10px 20px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
}

a:hover, a:active {
  background-color: #002966;
}
</style>
<body>
	<div class = "header" >
      		<img class = "logoimg" src = "./images/logoname.jpg">
      		
		</div>
		<nav class="navbar navbar-light bg-light">
            <a class="navbar-brand" href="index.php">Double Submit Cookie</a>
<ul class="nav justify-content-end">
                <?php 
                    if(isset($_COOKIE['session_id'])) 
                    {
                        echo "<div class='nav-item'>
                                <a class='nav-link active' href='logout.php'>Logout</a>
                            </div>";
                    }
                ?>
</ul>
<?php

require_once 'myToken.php';

$token_value = $_POST['token'];


	if(Token::checkToken($token_value,$_COOKIE['csrfTokenCookie']))
	{
		$name=$_POST['fname'];
        $namee=$_POST['lname'];
        $mail=$_POST['email'];
        $phone=$_POST['phonenum'];
		$date=$_POST['dob'];
		
		echo "<br>Server request accepted:";		
		echo "<br>The cookie token via AJAX call to the hidden field : ".$token_value;
		echo "<br>The cookie token from the browser : ".$_COOKIE['csrfTokenCookie']. "<br><br>";
		
		echo $name."<br>";
		echo $namee. "<br>";
		echo $mail."<br>";
		echo $phone."<br>";
		echo $date."<br>";	}
	else 
	{
	    echo "<br>Server request fail! , Unauthorized req! \n <br>".$_COOKIE['csrfTokenCookie'];
	}

?>