<?
require('includes/config.php');
require_once("header.php");

$db = new Database();
$students_query = $db->query("SELECT * FROM student_details");
$teams_query = $db->query("SELECT * FROM teams");

$students = array();
foreach ($students_query as $value) {
	$students[$value["id"]] = $value["name"];
}

$teams = array();
foreach($teams_query as $value) {
	$teams[$value["id"]] = array();
	$teams[$value["id"]]["proposal_id"] = $value["proposal_id"];
	$teams[$value["id"]]["members"] = array();
}

foreach($students_query as $value) {
	if(array_key_exists($value["team_id"] , $teams)) {
		array_push($teams[$value["team_id"]]["members"], $value["id"]);
	}
}
?>

<div id="wrapper">

    <?require_once "sidebar.php";?>

    <div id="page-content-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                	<h1>Teams</h1>
                	<div class="row">
						<div class="col-lg-9">
		                	<div class="row">
		                		<?php 
		                		foreach ($teams as $team_id => $team) {
		                		?>
			                		<div class="col-lg-3">
										<div class="panel panel-success" id='student-profile'>
											<div class="panel-heading">
												<div class="row">
													<h2 class="panel-title col-lg-9">Team <?php echo $team_id; ?></h2>
												</div>
											</div>
											<table class="table table-striped">
												<tbody>
													<?php
													foreach ($team["members"] as $member) {
														$name = $students[$member];
													?>
														<tr>
															<td><?php echo $name; ?></td>
														</tr>
													<?php
													}
													?>
												</tbody>
											</table>
										</div>
									</div>
								<?php
								}
								?>
							</div>
						</div>
					</div>	
				</div>
            </div>
        </div>
    </div>
</div>



<?require_once "footer.php";?>