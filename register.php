<?php 
	include 'partials/header.php';
?>
    <div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<form class="login100-form validate-form"action="reg_auth.php" method="POST">
					<span class="login100-form-title p-b-26">
						Register to Continue
					</span>
					<span class="login100-form-title p-b-48">
						<i class="zmdi zmdi-font"></i>
					</span>

					<div class="wrap-input100 validate-input" for="email" data-validate = "Valid email is: a@b.c">
						<input class="input100" type="text" id="username" name="username" required>
						<span class="focus-input100" data-placeholder="Enter your username ..."></span>
					</div>
                    
                    <div class="wrap-input100 validate-input" for="email" data-validate = "Valid email is: a@b.c">
						<input class="input100" type="text" id="username"  name="email" required>
						<span class="focus-input100" data-placeholder="Enter your email ..."></span>
					</div>
					<div class="wrap-input100 validate-input" for="psw" data-validate = "Valid email is: a@b.c">
						<input class="input100" type="password"  id="username" name="password" required>
						<span class="focus-input100" data-placeholder="Enter your password ..."></span>
					</div>

					<div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<button class="login100-form-btn" type="submit">
								
							</button>
						</div>
					</div>

					<div class="text-center p-t-115">
						<span class="txt1">
							Don’t have an account?
						</span>

						<a class="txt2" href="#">
							Sign Up
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>
<?php 
	include 'footer/header.php';
?>