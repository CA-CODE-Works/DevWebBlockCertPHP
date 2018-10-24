<?php 
	$user = isset($_POST['user']) ? $_POST['user'] : '';
?>
<!-- Begin Page Title -->
<div class="section section-impact">
	<div class="container text-center">
		<h1 class="page-title">Blockchain Demo - BlockCerts</h1>
	</div>
</div>
<!-- End of Page Title -->

<section id="loginForm2" class="section-understated p-a-lg shadow">
	<form method="POST">
		<!--Form states-->
		<div id="email-box2" class="form-group m-b-md">
				<div class="input-group">
						<div class="input-group-addon d-flex">
								<i class="ca-gov-icon-person"></i>
						</div>
						<input required type="text" name="user" id="user" class="form-control"placeholder="User" value="<?= $user; ?>">
				</div>

				<div class="input-group m-t-md">
						<div class="input-group-addon d-flex">
								<i class="ca-gov-icon-key"></i>
						</div>
						<input required  class="form-control" type="password" name="pass" id="password" placeholder="Password">
						<input type="hidden" value="login" name="action">
				</div>
		</div>

		<div class="row m-t-md m-b-md text-center">
				<div class="col-sm-offset-2 col-sm-8">
					<input type="submit" value="Submit" class="btn btn-lg btn-primary full-width">
				</div>
		</div>
	 </form>

</section>