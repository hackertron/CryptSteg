<?php 
  require_once 'auth.php';

  if (!$loggedin) header("Location:login.php");
?>
<!DOCTYPE HTML>

<html>
	<head>
		<title>CryptSteg </title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		
		<link rel="stylesheet" href="assets/css/main.css" />
		
	</head>
	<body>
		<div id="page-wrapper">

			<!-- Header -->
				<header id="header">
					<h1><a href="index.html">CryptSteg</a> by ARCADE</h1>
					<nav id="nav">
						<ul>
							<li><a href="index.html">Home</a></li>
							<li>
								<a href="#" class="icon fa-angle-down">Menu</a>
								<ul>
									<li><a href="generic.html">help</a></li>
									<li><a href="contact.html">Contact</a></li>
									<li><a href="elements.html">forum</a></li>
									<li>
										<a href="#">Levels</a>
										<ul>
											<li><a href="#">Level 1</a></li>
											<li><a href="#">Level 2</a></li>
											<li><a href="#">Level 3</a></li>
											<li><a href="#">Level 4</a></li>
											<li><a href="#">Level 5</a></li>
											<li><a href="#">Level 6</a></li>
											<li><a href="#">Level 7</a></li>
											<li><a href="#">Level 8</a></li>
										</ul>
									</li>
								</ul>
							</li>
							<li><a href="signup.html" class="button">Sign Up</a></li>
						</ul>
					</nav>
				</header>

			<!-- Main -->
				<section id="main" class="container">

					<section class="box special">
						<header class="major">
							<h2>Do you like Music ?</h2>
							<p>Have a listen to this <a href="/assets/steg.wav" rel="nofollow" class="bbcode_url">file</a> and see what you can find. </p>
							<div id="spoiler" style="display:none"> See audio :)
							</div> 
<button title="Click to show/hide content" type="button" onclick="if(document.getElementById('spoiler') .style.display=='none') {document.getElementById('spoiler') .style.display=''}else{document.getElementById('spoiler') .style.display='none'}">HINT</button>

						</header>
					</section>
					<form action="r4.php" method="POST">
						<div class="row uniform 50%">
							<div class="8u 12u(mobilep)">
								<input type="text" name="l4" id="email" placeholder="answer" />
							</div>
							<div class="4u 12u(mobilep)">
								<input type="submit" value="submit" class="fit" />
							</div>
						</div>
					</form>

			

		</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.dropotron.min.js"></script>
			<script src="assets/js/jquery.scrollgress.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="assets/js/main.js"></script>

	</body>
</html>
