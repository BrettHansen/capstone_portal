<?require_once "header.php";?>

<div id="wrapper">

    <?require_once "sponser-sidebar.php";?>

    <!-- Page Content -->
    <div id="page-content-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                	<h1>Sponser Dashboard</h1>

                	<div class="row">
                		<div class="col-lg-4">
							<div class="panel panel-default" id='student-profile'>
								<div class="panel-heading">
									<h3 class="panel-title">Profile</h3>
								</div>
								<div class="panel-body">
									<div class="row">
        								<div class="col-lg-4">
        									<img class="img-responsive img-rounded"src="images/company-logo.jpg">
        								</div>
        								<div class="col-lg-8">
        									<h1>Company Name</h1>
        									<h4>Website: <span class="small"><a href="#">www.company.com</a></span></h4>
        									<h4>Contact: <span class="small">Bill Gates</span></h4>
        									<h4>Email: <span class="small"><a href="#">bill@google.com</a></span></h4>
        								</div>
        							</div>
        							<h4>About Us: <span class="small">We are a global management consulting firm that serves leading businesses, governments, non governmental organizations, and not-for-profits. We help our clients make lasting improvements to their performance and realize their most important goals. Over nearly a century, we’ve built a firm uniquely equipped to this task.</span></h4>
								</div>
							</div>
						</div>
						<div class="col-lg-8">
							<div class="panel panel-default" id='student-profile'>
								<div class="panel-heading">
									<h3 class="panel-title">Proposals</h3>
								</div>
								<div class="panel-body">
									<table class="table table-striped">
										<thead>
											<tr>
												<th>Project</th>
												<th>Submitted</th>
												<th>Status</th>
												<th></th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td>Company Web Page</td>
												<td>2/24/2016</td>
												<td><span class="label label-warning">Pending</span></td>
												<td><button class="btn btn-default">View Proposal</button></td>
											</tr>
											<tr>
												<td>Spaceship</td>
												<td>9/15/2015</td>
												<td><span class="label label-danger">Denied</span></td>
												<td><button class="btn btn-default">View Proposal</button></td>
											</tr>
											<tr>
												<td>Payroll Software</td>
												<td>1/07/2015</td>
												<td><span class="label label-success">Approved</span></td>
												<td><button class="btn btn-default">View Proposal</button></td>
											</tr>
										</tbody>
									</table>
								</div>
							</div>
						</div>
					</div>		
				</div>
            </div>
        </div>
    </div>

</div>



<?require_once "footer.php";?>