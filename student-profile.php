<?require_once "header.php";?>

<div id="wrapper">

    <?require_once "student-sidebar.php";?>

    <!-- Page Content -->
    <div id="page-content-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                	<h1>My Profile</h1>

                	<div class="row">
                		<div class="col-lg-4">
                			<form role="form">
								<div class="panel panel-default" id='student-profile'>
									<div class="panel-heading">
										<h3 class="panel-title">Image</h3>
									</div>
									<div class="panel-body">
										<div class="form-group">
											<img class="col-lg-8 col-lg-offset-2 img-responsive img-rounded"src="images/profile.png">
											<input type="file">
										</div>
									</div>
								</div>
							</form>
						</div>

						<div class="col-lg-4">
                			<form role="form">
								<div class="panel panel-default" id='student-profile'>
									<div class="panel-heading">
										<h3 class="panel-title">Information</h3>
									</div>
									<div class="panel-body">
										
										<div class="form-group">
											<label for="name">Name</label>
											<input type="name" class="form-control" id="name">
										</div>
										<div class="form-group">
											<label for="major">Major</label>
											<input type="major" class="form-control" id="major">
										</div>
										<div class="form-group">
											<label for="email">Email</label>
											<input type="email" class="form-control" id="email">
										</div>
									</div>
								</div>
							</form>
						</div> 

						<div class="col-lg-4">
                			<form role="form">
								<div class="panel panel-default" id='student-profile'>
									<div class="panel-heading">
										<h3 class="panel-title">Interests</h3>
									</div>
									<div class="panel-body">
										
										<div class="form-group">
											<label for="interests">Tell your classmates about your interests</label>
											<textarea class="form-control" rows="5" id="interests"></textarea>
										</div>
									</div>
								</div>
							</form>
						</div>        	
                	</div>
                	<button type="submit" class="btn btn-default">Save</button>		
				</div>
            </div>
        </div>
    </div>

</div>





<?require_once "footer.php";?>