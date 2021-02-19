<!DOCTYPE html>
<html lang="en">
<head>
	<title>BVolunteer | Login</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div id="content">
					<button class = "buton_sexy" id = "left" onclick = "change_to_vol()">
						Voluntar
					</button>
					<button class = "buton_sexy" id = "right" onclick = "change_to_org()">
						Organizatie
					</button>
				</div>
				<script>
					function change_to_org ()
					{
						document.getElementById("left").style.backgroundColor = "orange";
						document.getElementById("right").style.backgroundColor = "green";
						document.getElementById("formular").innerHTML = '<span class="login100-form-title">Register as organization</span><div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz"><input class="input100" type="email" id="email_login" name="email" placeholder="Email" require><span class="focus-input100"></span><span class="symbol-input100"><i class="fa fa-envelope" aria-hidden="true"></i></span></div><div class="wrap-input100 validate-input" data-validate = "Password is required"><input class="input100"  type="password" id="password_login" name="password" placeholder="Password" require><span class="focus-input100"></span><span class="symbol-input100"><i class="fa fa-lock" aria-hidden="true"></i></span></div><div class="container-login100-form-btn"><button class="login100-form-btn" name="submit">Submit</button></div><div class="text-center p-t-12"><span class="txt1">Already have an account ?</span><a class="txt2" href="#">Log in!</a></div></div>';
					}
					function change_to_vol ()
					{
						document.getElementById("left").style.backgroundColor = "green";
						document.getElementById("right").style.backgroundColor = "orange";
						document.getElementById("formular").innerHTML = '<span class="login100-form-title">Register as Volunteer</span><div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz"><input class="input100" type="email" id="email_login" name="email" placeholder="Email" require><span class="focus-input100"></span><span class="symbol-input100"><i class="fa fa-envelope" aria-hidden="true"></i></span></div><div class="wrap-input100 validate-input" data-validate = "Password is required"><input class="input100"  type="password" id="password_login" name="password" placeholder="Password" require><span class="focus-input100"></span><span class="symbol-input100"><i class="fa fa-lock" aria-hidden="true"></i></span></div><div class="container-login100-form-btn"><button class="login100-form-btn" name="submit">Submit</button></div><div class="text-center p-t-12"><span class="txt1">Already have an account ?</span><a class="txt2" href="#">Log in!</a></div></div>';
					}
				</script>
				<form class="login100-form validate-form" action="login/login.php" method="post" id = "formular">
					<span class="login100-form-title">
						Register as Volunteer
					</span>

					<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
						<input class="input100" type="email" id="email_login" name="email" placeholder="Email" require>
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Password is required">
						<input class="input100"  type="password" id="password_login" name="password" placeholder="Password" require>
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
					</div>

					<input class="input100"  type="date" id="password_login" name="password" placeholder="Password" require>
						<span class="focus-input100"></span>

					<div class="container-login100-form-btn">
						<button class="login100-form-btn" name="submit">
							Submit
						</button>
					</div>
					<!-- siteu 
						bani
						de impletat toate formurile 
						de scos iconitele 
						de facut switch u bine 
						de impletat un date type bun (facebuci)
						-->

					<div class="text-center p-t-12">
						<span class="txt1">
							Already have an account ?
						</span>
						<a class="txt2" href="#">
							Log in!
						</a>
					</div>
			
					</div>
				</form>
			</div>
		</div>
	</div>

<!--===============================================================================================-->	
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/tilt/tilt.jquery.min.js"></script>
	<script >
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>