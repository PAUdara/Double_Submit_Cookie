<!DOCTYPE>
<html>
<head>
	<title>DOUBLE SUBMIT COOKIE</title>
   <title>Registration page</title>
 <link  rel="stylesheet"  href="styles/stylesnew.css" >
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>	
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
 <script>
	$(document).ready(function(){
	
	var cookie_value = "";
    var decodedCookie = decodeURIComponent(document.cookie);
    var ca = decodedCookie.split(';');
	var csrf = decodedCookie.split(';')[2]
	// alert(decodedCookie)
	if(csrf.split('=')[0] = "csrfTokenCookie" ){
		// alert(csrf.split('csrfTokenCookie=')[1])
		cookie_value = csrf.split('csrfTokenCookie=')[1];
		document.getElementById("tokenIn_hidden_field").setAttribute('value', cookie_value) ;
	}
	});

</script>
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
 </head>
 
 <body>
 <div class = "header" >
		<img class = "logoimg" src = "images/logoname.jpg">
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
        </nav>
 <div style="padding:5px; width: 650px; margin:auto;">
      <form method="post" align="center" name="reg" action="last.php" style="margin-bottom:0px">
			   <fieldset>
				    <legend><h3 align="center" font-face="Two Cen MT"> CREATE ACCOUNT </h3></legend>

  			    <input class = "inputs" type="text" name="fname" placeholder="First Name" required> <br><br>
  			    <input class = "inputs" type="text" name="lname" placeholder="Last Name" required><br><br>
  			    <input class = "inputs" type="text" name="email" placeholder="Email" required><br><br>
            <input class = "inputs" type="text" name="phonenum" placeholder="Phone number" required><br><br>
            <input class = "inputs" type="date" name="dob" placeholder = "dd/mm/yyyy" required><br><br>
			      

            <form action="#" onsubmit="if(document.getElementById('agree').checked) { return true; } else { alert('Please indicate that you have read and agree to the Terms and Conditions and Privacy Policy'); return false; }">
                <input type="checkbox" name="checkbox" value="check" id="agree" /> I have read and agree to the Terms and Conditions and Privacy Policy
            </form>
					<div id="div1">
					              <input type="hidden" name="token" value='' id="tokenIn_hidden_field"/>
					        </div>
			      <input type="submit" value="Register" class = "confirm" name = "submit" >
			     </fieldset>
		  </form>
    </div>
	</body>
	</html>