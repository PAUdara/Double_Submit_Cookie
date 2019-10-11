<!DOCTYPE html>
<html>
	<head>
		<title>Cross Site Request Forgery Protection</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link href="style.css" rel="stylesheet" id="bootstrap-css">
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

  <head>
	<body>
		<div class="container">
        <div id="login-row" class="row justify-content-center align-items-center">
            <div id="login-column" class="col-md-6">
               
                      <form class="form" action="last.php" method="post">
                           
									<br>
									<br>
									<br>
								<div class='form-group row'>
									
                                                	<label for='name' class='col-sm-2 col-form-label'>Name</label>
                                                <div class='col-sm-10'>
                                                    <input type='text' class='form-control' id='name' name='name' placeholder='Full Name' required>
                                                </div>
                                                </div>
                                              
                                              	<div class='form-group row'>
                                                    <label for='university' class='col-sm-2 col-form-label'>University</label>
                                                <div class='col-sm-10'>
                                                    <input type='text' class='form-control' id='university' name='university' placeholder='University' required>
                                                </div>
                                              	</div>
                    							
                    							<div class='form-group row'>
                                                    <label for='degree' class='col-sm-2 col-form-label'>Degree</label>
                                                <div class='col-sm-10'>
                                                    <input type='text' class='form-control' id='degree' name='degree' placeholder='Degree' required>
                                                </div>
                                              	</div>

                                              	<div class='form-group row'>
                                                    <label for='year' class='col-sm-2 col-form-label'>Year</label>
                                                <div class='col-sm-10'>
                                                    <input type='number' class='form-control' id='year' name='year' placeholder='Year' required>
                                                </div>
                                              	</div>
												<div class='form-group row'>
													<input type="hidden" name="token" value="" id="tokenIn_hidden_field"/>
												</div>
												<div class="form-group">
														<input type="submit"  class="btn btn-info btn-md" value="updatepost">
												</div>
                      </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

	</body> 
</html>