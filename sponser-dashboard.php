<?require_once "header.php";?>

<div id="wrapper">

    <!-- Sidebar -->
    <div id="sidebar-wrapper">
        <ul class="sidebar-nav">
            <li class="sidebar-brand"><a href="#">ASU Capstone Portal</a></li>
            <li><a href="#">Profile</a></li>
            <li><a href="#">Proposals</a></li>
            <li><a href="#">New Proposal</a></li>
            <!-- <li><a href="#">Link</a></li>
            <li><a href="#">Link</a></li>
            <li><a href="#">Link</a></li> -->
            <li><a href="#">Sign Out</a></li>
        </ul>
    </div>
    <!-- /#sidebar-wrapper -->

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
									Panel content
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