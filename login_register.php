<?require_once "header.php";?>

<div id="page-content-wrapper">
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-4 col-lg-offset-4">
				<h1 class="text-center">ASU Capstone Portal</h1>
				<div class="panel panel-default" id="login">
					<div class="panel-body">
						<form role="form" action="login_user.php" method="post">
							<div class="form-group">
								<label for="email">Email</label>
								<input type="email" class="form-control" name="email">
							</div>
							<div class="form-group">
								<label for="password">Password</label>
								<input type="password" class="form-control" name="password">
							</div>
							<button type="submit" class="btn btn-default" name="submit">Sign In</button>
							<button type="button" class="btn btn-default" id="open_register_form">New User?</button>
						</form>
					</div>
				</div>
			</div>

			<div class="col-lg-4 col-lg-offset-4">
				<div class="panel panel-default" id="register">
					<div class="panel-body">
						<form role="form" action="register_user.php" method="post">
							<div class="form-group">
								<label for="name">Name</label>
								<input type="name" class="form-control" name="name">
							</div>
							<div class="form-group">
								<label for="email">Email</label>
								<input type="email" class="form-control" name="email">
							</div>
							<div class="form-group">
								<label for="asurite">ASURITE</label>
								<input type="asurite" class="form-control" name="asurite">
							</div>
							<div class="form-group">
								<label for="password">Password</label>
								<input type="password" class="form-control" name="password">
							</div>
							<button type="submit" class="btn btn-default" name="submit">Register</button>
							<button type="button" class="btn btn-default" id="open_login_form">Already Registered?</button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<script type="text/javascript" src="scripts/login.js"></script>

<?require_once "footer.php";?>