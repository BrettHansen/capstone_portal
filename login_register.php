<?require_once "header.php";?>

<!-- <div id="register_form">
	<form action="register_user.php" method="post">
		ASURITE
		<input type="text" name="asurite">
		Name
		<input type="text" name="name">
		Email
		<input type="text" name="email">
		Password
		<input type="password" name="password">
		<input type="submit" name="Register">
	</form>
</div> -->

<div id="page-content-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-4 col-lg-offset-4">
            	<h1 class="text-center">ASU Capstone Portal</h1>
            	<div class="panel panel-default" id='login'>
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
						</form>
					</div>
				</div>
            </div>
        </div>
    </div>
</div>

<?require_once "footer.php";?>