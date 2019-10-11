<?php
if(!isset($_POST['email'],$_POST['password'])){
	$mail = $_POST['email'];
	$pwd = $_POST['pwd'];
	if($mail == 'hi@gmail.com' && $pwd == 'hi'){
		echo '<h1>Successfully logged in</h1>';
		session_start();
		$_SESSION['token'] = base64_encode(openssl_random_pseudo_bytes(32));
		$session_id = uniqid();
		//setcookie('sessionCookie',$session_id,time()+ 60*60*24*365 ,'/');
		setcookie('session_id',$session_id,time()+ (86400 * 30), "/",false, false);//secure flag and the http flag is set to false
		setcookie('csrfTokenCookie',$_SESSION['token'],time()+ 60*60*24*365 ,'/' ,false, false);
		header("location: profile.php");
		
	}else{
		echo '<h1>Invalid Credentials</h1>';
		header('location: ./myLogin.php?error=Invalid');
		exit();
	}
}
?>