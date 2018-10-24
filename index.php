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
						case 'login':
						$username = $_POST['user'];
						$password = $_POST['pass'];
						
						// if user/password combination is successful
						if( array_key_exists($username, $allowed_users) && password_verify($password, $allowed_users[$username]) ){
							include('data/userCert.php');
						}else{
							include('data/login.php');
						}
						break;
						
						case 'genCSV':
							if( ! empty(trim($_POST['first'])) && ! empty(trim($_POST['last'])) && ! empty(trim($_POST['email'])) ){
								//generateCSV($_POST['first'], $_POST['last'], $_POST['email']);
								$fname = $_POST['first'];
								$lname = $_POST['last'];
								$email = $_POST['email'];
								
								include("core/generateCSV.php");
								include("data/generateTemplate.php");
							}else{
								
								include('data/userCert.php');
							}
							break;
						case 'genTemp':
							include('data/issueCert.php');
							break;
						case 'issueCert':
							// issue curl here
							break;
						case 'done':
						// issue curl here
						
						default:
							include('data/login.php');
							break;
					}
				}
				print_r( $_POST );
			?>

			<!-- End Main Content -->
		</main>

	<?php include("ssi/global-footer.php") ?>
</body>
</html>
