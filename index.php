<?php

include("core/init.php");
include("core/users.php");

?>
<!doctype html>
<html class="no-js" lang="en">
<head>
	<meta charset="utf-8">
	<title>Blockchain Demo - BlockCerts</title>
	<!-- Include Head Tags -->
	    <?php include_once("ssi/head.php"); ?>
	<link rel="stylesheet" href="style.css" />
</head>
<body class="primary">
	<header role="banner" id="header" class="global-header fixed compact">
	  <div id="skip-to-content"><a href="#main-content">Skip to Main Content</a></div>
		<!-- Include Utility Header -->
				 <?php include_once("ssi/utility-header.php"); ?>

				 <!-- Settings Bar -->
				 <?php include_once("ssi/settings-bar.php"); ?>

				 <!-- Include Branding -->
				 <?php include_once("ssi/branding.php"); ?>

				 <!-- Include Mobile Controls -->
				 <?php include_once("ssi/mobile-controls.php"); ?>

				 <div class="navigation-search">
						 <!-- Include Navigation -->
						 <?php include_once("ssi/navigation.php"); ?>
						 <div id="head-search" class="">

						 </div>
				 </div>

	  <div class="header-decoration"></div>
	</header>

	<div id="main-content" class="main-content">
		<main class="main-primary">
			<!-- Begin Page Title -->
			<div class="section section-standout">
				<div class="container">
					<h1 class="page-title">DevWebBlockCertPHP</h1>
				</div>
			</div>
			<!-- End of Page Title -->
			<!-- Begin Main Content -->
			<div class="section">
				
				<?php 
					$failed_login = true;
				
					if( isset($_POST['login']) && $_POST['login'] ){
						// if user/password combination is successful
						$username = $_POST['user'];
						$password = $_POST['pass'];
						
						if( array_key_exists($username, $allowed_users) && password_verify($password, $allowed_users[$username]) ){
						?>
						<div class="container">
							<!-- Search Archive Form -->
							<div class="full-width">
		            <form method="POST">
									<p class="half">First Name: <input type="text" name="first"></p>
									<p class="half">Last Name: <input type="text" name="last"></p>
									<p class="full-width">Email: <input type="email" name="email"></p>
									<input type="hidden" value="1" name="blockcypher">
		            	<input type="submit" value="Submit" class="btn btn-primary">
		            </p>
		            </form>
							</div>
							<!-- End of Search Archive Form -->

						</div>
						<?php
								$failed_login = false;
						}
					}
					if ( ! isset($_POST['login']) || ! $_POST['login'] || $failed_login ):
						
					?>
					<div class="container">
						<!-- Search Archive Form -->
						<div class="full-width">
					<form method="POST">
						<p class="half">User: <input type="text" name="user"></p>
						<p class="half">Password: <input type="password" name="pass"></p>
						<input type="hidden" value="1" name="login">
						<input type="submit" value="Submit" class="btn btn-primary">
					</p>
					</form>
				</div>
			</div>
				<?php endif; ?>					
				
			</div>
			<!-- End Main Content -->
		</main>
	</div>

	<?php include("ssi/global-footer.php") ?>
</body>
</html>
