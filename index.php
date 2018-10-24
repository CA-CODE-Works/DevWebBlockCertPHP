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
				 <div class="my-wallet pos-abs">
		<img src="/ca-vallet-logo.png" alt="My CA Wallet logo" class="pull-right">
</div>
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
			<div class="section section-impact">
				<div class="container text-center">
					<h1 class="page-title">Blockchain Demo - BlockCerts</h1>
				</div>
	</div>

			<!-- End of Page Title -->
			<!-- Begin Main Content -->

				<?php
					$failed_login = true;

					if( isset($_POST['login']) && $_POST['login'] ){
						// if user/password combination is successful
						$username = $_POST['user'];
						$password = $_POST['pass'];

						if( array_key_exists($username, $allowed_users) && password_verify($password, $allowed_users[$username]) ){
						?>
						<div class="container">
<h2 class="page-title text-center">Create Student Certificate</h2>
<!-- Search Archive Form -->

							<div class="row p-b-lg">
							        <div class="offset-quarter half">
							            <section id="loginForm" class="section-understated p-a-lg shadow">
														<form method="POST">
							                <!--Form states-->
							                <div id="email-box" class="form-group m-b-md">
							                    <div class="input-group">
							                        <div class="input-group-addon d-flex">
							                            <i class="ca-gov-icon-person"></i>
							                        </div>
																			<input type="text" name="first" id="first" class="form-control"placeholder="First">
							                    </div>

																	<div class="input-group m-t-md">
																			<div class="input-group-addon d-flex">
																					<i class="ca-gov-icon-person"></i>
																			</div>
																			<input type="text" name="last" id="last" class="form-control"placeholder="Last">
																	</div>

							                    <div class="input-group m-t-md">
							                        <div class="input-group-addon d-flex">
							                            <i class="ca-gov-icon-email"></i>
							                        </div>
							                        <input class="form-control" name="email"  id="email" type="email"  placeholder="Email">
							                    </div>
							                </div>

							                <div class="row m-t-md m-b-md text-center">
							                    <div class="col-sm-offset-2 col-sm-8">
																		<input type="submit" value="Submit" class="btn btn-lg btn-primary full-width">
							                    </div>
							                </div>

							               </form>

							            </section>
							        </div>





							<!-- End of Search Archive Form -->

						</div>
						</div>
						<?php
								$failed_login = false;
						}
					}
					if ( ! isset($_POST['login']) || ! $_POST['login'] || $failed_login ):

					?>
					<div class="container">
						<!-- Search Archive Form -->



				<section id="loginForm2" class="section-understated p-a-lg shadow">
					<form method="POST">
						<!--Form states-->
						<div id="email-box2" class="form-group m-b-md">
								<div class="input-group">
										<div class="input-group-addon d-flex">
												<i class="ca-gov-icon-person"></i>
										</div>
										<input type="text" name="user" id="user" class="form-control"placeholder="User">
								</div>

								<div class="input-group m-t-md">
										<div class="input-group-addon d-flex">
												<i class="ca-gov-icon-key"></i>
										</div>
										<input class="form-control" type="password" name="pass" id="password" placeholder="Password">
										<input type="hidden" value="1" name="login">
								</div>
						</div>

						<div class="row m-t-md m-b-md text-center">
								<div class="col-sm-offset-2 col-sm-8">
									<input type="submit" value="Submit" class="btn btn-lg btn-primary full-width">
								</div>
						</div>

					 </form>

				</section>





			</div>
				<?php endif; ?>



			<div class="section section-understated">
				<div class="container text-center">
					<h2>Generate Certificate Template</h2>
					<button class="btn btn-lg btn-default">Generate</button>
				</div>
			</div>

			<div class="section section-primary">
				<div class="container text-center">
					<h2>Issue Certificate on Blockchain</h2>
					<button class="btn btn-lg btn-default">Issue Certificate</button>
				</div>
			</div>


			<!-- End Main Content -->
		</main>


	<?php include("ssi/global-footer.php") ?>
</body>
</html>
