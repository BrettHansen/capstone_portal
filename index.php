<?require_once "header.php";?>

<div id="page-content-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-4 col-lg-offset-4">
            	<h1 class="text-center">ASU Capstone Portal</h1>
            	<div class="panel panel-default" id='login'>
            		<div class="panel-body">
            			<form role="form">
							<div class="form-group">
								<label for="name">Username</label>
								<input type="name" class="form-control" id="name">
							</div>
							<div class="form-group">
								<label for="password">Password</label>
								<input type="password" class="form-control" id="password">
							</div>
							<button type="submit" class="btn btn-default">Sign In</button>
						</form>
					</div>
				</div>

				<div class="panel panel-warning" id='login'>
            		<div class="panel-heading">
            			<h3 class="panel-title">Admin</h3>
            		</div>
            		<div class="panel-body text-center">
            			<form role="form">
							<button class='btn btn-default'><a href='student-dashboard.php'>Student</a></button>
					    	<button class='btn btn-default'><a href='sponsor-dashboard.php'>Sponsor</a></button>
					    	<button class='btn btn-default'><a href='instructor-dashboard.php'>Instructor</a></button>
						</form>
					</div>
				</div>
            </div>
        </div>
    </div>
</div>

<?require_once "footer.php";?>