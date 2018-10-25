<?php

include("core/init.php");

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
	<?php include_once("ssi/header.php"); ?>

	<div id="main-content" class="main-content">
		<main class="main-primary">

			<!-- Begin Main Content -->

			<?php
				// if its the first time user visits the page
				if( isset($_POST) && empty($_POST) ){
					include('data/login.php');
				}elseif (isset($_POST) && ! empty($_POST) ) {
					// if post request has been made
					$action = isset($_POST['action']) ? $_POST['action'] : '';

					// display screen based on action requested
					switch ($action) {
						// if logging in
						case 'login':
						$username = $_POST['user'];
						$password = $_POST['pass'];

						// if user/password combination is successful
						if( array_key_exists($username, $allowed_users) && password_verify($password, $allowed_users[$username]) ){
							// Display User Information Section
							include('data/userCert.php');

							// if user/password combination is unsuccessful
						}else{
							// Display Login Section
							include('data/login.php');
						}

						break;

						// if generating CSV
						case 'genCSV':
						// if first, last and email are not empty
							if( ! empty(trim($_POST['first'])) && ! empty(trim($_POST['last'])) && ! empty(trim($_POST['email'])) ){

								$fname = $_POST['first'];
								$lname = $_POST['last'];
								$email = $_POST['email'];

								// Generate CSV
								include("core/generateCSV.php");

								// Display Generate Template Section
								include("data/generateTemplate.php");

								// if either first, last and email are empty
							}else{
								// Display User Information Section
								include('data/userCert.php');
							}
							break;

							// if generating template cert
						case 'genTemp':

						// Display Issue Certificate Section
						include('data/issueCert.php');

						// generate template cert curl here
						print_r( makeCurl($generate_template_url, $curl_options) );
						break;

						// if issuing cert
						case 'issueCert':
							print "<h2>Certificate Issued</h2>";
							// issue  cert curl here
							print_r( makeCurl($issue_cert_url, $curl_options) );

							break;
						default:
							include('data/login.php');
							break;
					}
				}
			?>

			<!-- End Main Content -->
		</main>

	<?php include("ssi/global-footer.php") ?>
</body>
</html>
