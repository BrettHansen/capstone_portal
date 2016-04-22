<?require_once "header.php";?>

<div id="wrapper">

    <?require_once "instructor-sidebar.php";?>

    <!-- Page Content -->
    <div id="page-content-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                	<h1>Instructor Dashboard</h1>

                	<div class="row">
						<div class="col-lg-4">
							<div class="panel panel-default" id='student-profile'>
								<div class="panel-heading">
									<h3 class="panel-title">Announcements<button class="btn btn-default">New</button></h3>
								</div>
								<div class="panel-body">
									<h4>Homework Reminder   <small>  3-16 3:55pm</small></h4>
									<p>This is an announcement to say that some stuff is going to happen</p>
									<h4>Minutes link   <small>  3-16 3:55pm</small></h4>
									<p>This is an announcement to say that some stuff is going to happen</p>
									<h4>Projects Available   <small>  3-16 3:55pm</small></h4>
									<p>This is an announcement to say that some stuff is going to happen</p>
									<h4>Project Reqirements   <small>  3-16 3:55pm</small></h4>
									<p>This is an announcement to say that some stuff is going to happen</p>
								</div>
							</div>
						</div>

						<div class="col-lg-4">
							<div class="panel panel-default" id='student-profile'>
								<div class="panel-heading">
									<h3 class="panel-title">Student Stats</h3>
								</div>
								<table class="table table-striped">
									<tbody>
										<tr>
											<td>Total</td>
											<td>35</td>
										</tr>
										<tr>
											<td>Have Team</td>
											<td>23</td>
										</tr>
										<tr>
											<td>No Team</td>
											<td>12</td>
										</tr>
									</tbody>
								</table>
								<div class="panel-body text-center">
									<img src="images/g1.png">
								</div>
							</div>
						</div>

						<div class="col-lg-4">
							<div class="panel panel-default" id='student-profile'>
								<div class="panel-heading">
									<h3 class="panel-title">Pending Proposals</h3>
								</div>
								<table class="table table-striped">
									<thead>
										<tr>
											<th>Sponsor</th>
											<th>Project</th>
											<th>Submitted</th>
											<th></th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td>Some Co</td>
											<td>Company Web Page</td>
											<td>2/24/2016</td>
											<td><button class="btn btn-default">View</button></td>
										</tr>
										<tr>
											<td>Professor Doe</td>
											<td>Spaceship</td>
											<td>9/15/2015</td>
											<td><button class="btn btn-default">View</button></td>
										</tr>
										<tr>
											<td>Company 2</td>
											<td>Payroll Software</td>
											<td>1/07/2015</td>
											<td><button class="btn btn-default">View</button></td>
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





<?require_once "footer.php";?>