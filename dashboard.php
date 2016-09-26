<?
require_once('includes/config.php');
$db = new Database();

// Check if the user is logged in, and if not send them back
session_start();
if(!isset($_SESSION['user_id'])) {
	redirect('login_register.php');
}

// Since they are logged in, get the info and proceed
$result = $db->query("SELECT * FROM users INNER JOIN student_details ON users.id=student_details.id AND users.id = {$_SESSION['user_id']}");
$user = $result[0];
require_once "header.php";
?>

<div id="wrapper">

    <?require_once "sidebar.php";?>

    <!-- Page Content -->
    <div id="page-content-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                	<h1>Student Dashboard</h1>

                	<div class="row">
                		<div class="col-lg-8">
                			<div class="row">
		                		<div class="col-lg-6">
									<div class="panel panel-default" id='student-profile'>
										<div class="panel-heading">
											<h3 class="panel-title">Profile</h3>
										</div>
										<div class="panel-body">
											<div class="row">
                								<div class="col-lg-4">
                									<img class="img-responsive img-rounded"src="images/profile.png">
                								</div>
                								<div class="col-lg-8">
                									<h1><?echo $user['name']?></h1>
                									<h4>Major: <span class="small"><?echo $user['major']?></span></h4>
                									<h4>Email: <span class="small"><a href="#"><?echo $user['email']?></a></span></h4>
                								</div>
                							</div>
                							<h4>Interests: <span class="small">Visualization, Mobile Development, Web Design</span></h4>
										</div>
									</div>
								</div>
								<div class="col-lg-6">
									<div class="panel panel-default" id='student-profile'>
										<div class="panel-heading">
											<h3 class="panel-title">Announcements</h3>
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
							</div>

							<div class="row">
		                		<div class="col-lg-6">
									<div class="panel panel-default" id='student-profile'>
										<div class="panel-heading">
											<h3 class="panel-title">My Team</h3>
										</div>
										<div class="panel-body">
											<?if($user['team_id'] == 0) {?>
												<p>No team selected</p>
											<?}
											else {?>
												<table class="table table-striped">
													<thead>
														<tr>
															<th>Name</th>
															<th>Email</th>
														</tr>
													</thead>
													<tbody>
														<?
															$result = $db->query("SELECT * FROM student_details INNER JOIN users ON student_details.id=users.id AND student_details.team_id = {$user['team_id']}");
															for($i = 0; $i < count($result); $i++) {?>
																<tr>
																	<td><?echo $result[$i]['name']?></td>
																	<td><?echo $result[$i]['email']?></td>
																</tr>
															<?}?>
													</tbody>
												</table>
											<?}?>
										</div>
									</div>
								</div>
								<div class="col-lg-6">
									<div class="panel panel-default" id='student-profile'>
										<div class="panel-heading">
											<h3 class="panel-title">Group Chat</h3>
										</div>
										<div class="panel-body">
											<table class="table table-striped">
												<tbody>
													<tr>
														<td><strong>John:</strong></td>
														<td>Hey guys! I'm pumped to start!</td>
													</tr>
													<tr>
														<td><strong>Jane:</strong></td>
														<td>When can everyone meet?</td>
													</tr>
													<tr>
														<td><strong>Bill:</strong></td>
														<td>Weds is good for me...anyone else?</td>
													</tr>
												</tbody>
											</table>
											<form class="form-inline" role="form">
												<input class="form-control">
												<button type="submit" class="btn btn-default">Post</button>
											</form>
										</div>
									</div>
								</div>
							</div>
		                </div>

            			<div class="col-lg-4">
							<div class="panel panel-default" id='student-profile'>
								<div class="panel-heading">
									<h3 class="panel-title">Projects</h3>
								</div>
								<div class="panel-body">
									<table class="table table-striped">
										<thead>
											<tr>
												<th>Project</th>
												<th>Sponsor</th>
												<th>Rate</th>
											</tr>
										</thead>
										<tbody>
											<!- <tr>
												<td>Project</td>
												<td>Company</td>
												<td>
													<select>
														<option></option>
													</select>
												<td>
											</tr> -->
											<?php
											for($i = 0; $i < 16; $i++) {
												echo "<tr><td>Project " . ($i+1) . "</td>";
												echo "<td>Company " . ($i+1) . "</td>";
												echo "<td><select>";
												for($j = 0; $j < 10; $j++) {
													echo "<option>" . ($j+1) . "</option>";
												}
												echo "</select></td></tr>";	
											}?>
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