<?php 
  session_start();

  if ((isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === true))
    header ("Location: index.php");
?>

<?php 
	include 'partials/header.php';
?>
<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<form class="login100-form validate-form" action="auth.php" method="post">
					<span class="login100-form-title p-b-26">
						Log in to continue
					</span>
					<span class="login100-form-title p-b-48">
						<i class="zmdi zmdi-font"></i>
					</span>

					<div class="wrap-input100 validate-input" data-validate = "Valid email is: a@b.c">
						<input class="input100" type="text" name="username">
						<span class="focus-input100" data-placeholder="Enter your username ..."></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Enter password">
						<span class="btn-show-pass">
							<i class="zmdi zmdi-eye"></i>
						</span>
						<input class="input100" type="password" name="password">
						<span class="focus-input100" data-placeholder="Enter your password ..."></span>
					</div>

					<div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<button class="login100-form-btn">
								<input type="submit" name="LoginBtn" value="Login">
							</button>
						</div>
					</div>

					<div class="text-center p-t-115">
						<span class="txt1">
							Don’t have an account?
						</span>

						<a class="txt2" href="#" onclick="location.href = 'register.php'" name="Register" value="Register">
							Sign Up
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>
	

    <div id="dropDownSelect1"></div>
<?php 
	include 'partials/footer.php';
?>