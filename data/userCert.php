<!-- Begin Page Title -->
<div class="section section-impact">
	<div class="container text-center">
		<h1 class="page-title">Create Student Certificate</h1>
	</div>
</div>
<!-- End of Page Title -->

<div class="container">
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
							<input required  type="text" name="first" id="first" class="form-control"placeholder="First">
						</div>

						<div class="input-group m-t-md">
							<div class="input-group-addon d-flex">
								<i class="ca-gov-icon-person"></i>
							</div>
							<input required  type="text" name="last" id="last" class="form-control"placeholder="Last">
						</div>

						<div class="input-group m-t-md">
							<div class="input-group-addon d-flex">
								<i class="ca-gov-icon-email"></i>
							</div>
							<input required  class="form-control" name="email"  id="email" type="email"  placeholder="Email">
						</div>
					</div>

					<div class="row m-t-md m-b-md text-center">
						<div class="col-sm-offset-2 col-sm-8">
							<input type="hidden" name="action" value="genCSV">
							<input type="submit" value="Submit" class="btn btn-lg btn-primary full-width">
						</div>
					</div>

				</form>

			</section>
		</div>

		<!-- End of Search Archive Form -->

	</div>
</div>
