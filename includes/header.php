<?php
	session_start();
	
	$loggedin = false;
	$user;
	if ((isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === true)) {
		$loggedin = true;
		$user = $_SESSION['name'];
	}
?>

<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Kërko Punë</title>
	<link rel="stylesheet" href="css/css.css">
	<link rel="stylesheet" href="css/gallerystyle.css">
</head>

<body>
	<div id="headeer">
		<div id="sidebar">
			<ul>
				<button id="close" onclick="document.getElementById('sidebar').style.display='none'">X</button>
				<li> <a href="#">Llogaria</a> </li>
				<li> <a href="#">Siguria</a> </li>
				<li> <a href="#">Kushtet e Sherbimit</a> </li>
				<li> <a href="#">Gjuha</a> </li>
				<li> <a href="#">Rreth nesh</a> </li>
			</ul>
		</div>
		<div id="header">
			<div id="toggle-btn" onclick="toggleSidebar()">
				<a href="#"><span></span></a>
				<a href="#"><span></span></a>
				<a href="#"><span></span></a>
			</div>
			<img id="logo" src="images\splash_logo.png" />
			<a href="index.php">
				<h1 id="kerko"> KërkoPunë </h1>
			</a>
			<ul>
				<li> <a href="index.php">Home</a> </li>
				<li> <a href="aboutus.php">About Us</a> </li>
				<li> <a href="contactus.php">Contact Us</a> </li>
				<li> <a href="gallery.php">Gallery</a> </li>
<?php
			if($loggedin) {
				echo "
				<li> <a href='admin.php'>#". $user ."</a> </li>
					<li><a style='color: red' href='logout.php'>Log out</a></li>";
			}
			else echo "<li> <a href='login.php'>Log in</a> </li>";
?>
				<input type="text" id = "inpKerko" placeholder="Kërko..">
			</ul>
			<input type="image" id = "search" src="images\search.png" class="button"/>
		</div>
		<script>
			function toggleSidebar() {
				document.getElementById("sidebar").classList.toggle('active');
			}
		</script>
	</div>