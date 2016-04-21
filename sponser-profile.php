<?require_once "header.php";?>

<div id="wrapper">

    <?require_once "sponser-sidebar.php";?>

    <!-- Page Content -->
    <div id="page-content-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                	<h1>Company Profile</h1>

                	<div class="row">
                		<div class="col-lg-4">
                			<form role="form">
								<div class="panel panel-default" id='student-profile'>
									<div class="panel-heading">
										<h3 class="panel-title">Image</h3>
									</div>
									<div class="panel-body">
										<div class="form-group">
											<img class="col-lg-8 col-lg-offset-2 img-responsive img-rounded"src="images/company-logo.jpg">
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
											<label for="website">Website</label>
											<input type="website" class="form-control" id="website">
										</div>
										<div class="form-group">
											<label for="contact">Contact</label>
											<input type="contact" class="form-control" id="contact">
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
										<h3 class="panel-title">About Us</h3>
									</div>
									<div class="panel-body">
										
										<div class="form-group">
											<label for="about">Give a brief overview of your organization</label>
											<textarea class="form-control" rows="5" id="about"></textarea>
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