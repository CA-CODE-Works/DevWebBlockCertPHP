<?php

include("core/init.php");

?>
<!doctype html>
<html class="no-js" lang="en">
<head>
	<meta charset="utf-8">
	<title>DevWebBlockCertPHP</title>
	<!-- Include Head Tags -->
	<!--#include virtual="ssi/head.html" -->
	<link rel="stylesheet" href="style.css" />
</head>
<body class="primary">
	<header role="banner" id="header" class="global-header fixed compact">
	  <div id="skip-to-content"><a href="#main-content">Skip to Main Content</a></div>
		<!-- Include Utility Header -->
				 <!--#include virtual="ssi/utility-header.html" -->
				 
				 <!-- Settings Bar -->
				 <!--#include virtual="ssi/settings-bar.html" -->

				 <!-- Include Branding -->
				 <!--#include virtual="ssi/branding.html" -->

				 <!-- Include Mobile Controls -->
				 <!--#include virtual="ssi/mobile-controls.html" -->
		 
				 <div class="navigation-search">
						 <!-- Include Navigation -->
						 <!--#include virtual="ssi/navigation.html" -->
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
				<div class="container">
					<!-- Search Archive Form -->
					<div class="full-width">
            <form method="POST">
							<p class="half">First Name: <input type="text" name="first"></p>
							<p class="half">Last Name: <input type="text" name="last"></p>
							<p class="full-width">Email: <input type="email" name="email"></p>
            	<input type="submit" value="Submit" class="btn btn-primary">
            </p>
            </form>
					</div>
					<!-- End of Search Archive Form -->
					<!-- Search Results -->
					<div class="full-width">
					</div>
					<!-- Search Results -->
					
				</div>
			</div>
			<!-- End Main Content -->
		</main>
	</div>

	<?php include("ssi/global-footer.html") ?>

</body>
</html>
<style>
#archivesearchform span{
	font-size:32px;
	vertical-align:middle;
	margin-left:-32px;
}
#archivesearchform input[name="keywords"]{
	width:90%;
}
#archivesearchform input[type="submit"]{
	width:32px;
	opacity:0;
}
.third{
	max-height: 180px;
	min-height: 180px;
}
label{
	cursor: pointer;
	padding-right: 15px;
}
</style>
