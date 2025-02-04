<?php
session_start();
$db_host = 'remotemysql.com';
$db_user = 'PVhTrKWdPv';
$db_pass = 'FaPy0Vt6oB';
$db_name = 'PVhTrKWdPv';
$conn = new mysqli($db_host, $db_user, $db_pass, $db_name);
if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
} else {
	echo "Connected successfully";
}
?>


<!DOCTYPE html>
<html>
<head>
	<title>Grocery Helper</title>

	<!-- SEO -->
	<meta charset="utf-8" http-equiv="content-type" content="text/html">
	<meta name="keywords"  content="grocery, helper, grocery helper, grocery app, Santa Clara University, SCU, Santa Clara">
	<meta name="description" content="Grocery Helper enhances your grocery shopping experience by keeping track of when items will expire so, you don't have to!">

	<!-- Bootstrap -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" href="bootstrap-social.css">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

	<!-- Add icon library -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	<!-- CSS -->
	<link rel="stylesheet" type="text/css" href="style.css">

	<!-- JQuery -->
	<script type="text/javascript" src='main.js'></script>


	<!-- FONT AWESOME -->
	<script src="https://kit.fontawesome.com/504d9a3113.js"></script>
</head>

<body>

<!-- NAVBAR -->
<!-- expands on small; dark theme; stays on top -->
<!-- bg-dark navbar-dark -->
<nav class="navbar navbar-expand-sm  fixed-top">
	<a class="navbar-brand" href="#">Grocery Helper</a>

	  <!-- Toggler/collapsibe Button -->
	  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
	    	<span class="navbar-toggler-icon"></span>
	  </button>

	  <!-- links to collapse; justify-content-end aligns to right -->
	<div class="collapse navbar-collapse justify-content-end" id="collapsibleNavbar">

			<ul class="navbar-nav stroke">
				<li class="navbar-item">
					<a class="nav-link" href="#">Home</a>
				</li>
				<li class="navbar-item">
					<a class="nav-link" href="helpPage.php">Help</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="viewLists.php">My Lists</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="phpCustom2.php">Coming Soon!</a>
				</li>
				<li class="nav-item">
					<?php
					if ( isset( $_SESSION['user'] ) ) {
						?>
						<a class="nav-link"href="logout.php">Logout</a>
						<?php
					} else {
						?>
						<a class="nav-link"href="loginPage.php">Login</a>
						<?php
					}
					?>
				</li>
			</ul>
		</div>

</nav>


<!-- CONTAINER: Description + Button -->
<div class="container-fluid">
	<img src="logo.png" class="center">

	<div class="container">
		<h1>Build smart Grocery Lists.</h1>
		<p>Grocery Helper analyzes your past shopping behavior. We keep track so, you don't have to!</p>
		<p>For instance, we remind you of when items are about to expire.</p>
		<p>No other grocery app does that!</p>
		<a href="helpPage.php"><button class="btn">Get Started</button></a>
	</div>
</div>


<!-- FOOTER -->
<footer class="page-footer">
	<a href="https://github.com/grocery-helper/grocery-helper.github.io"><i align="right" class="fab fa-github github" aria-hidden="true"></i></a>
</footer>

</body>
</html>