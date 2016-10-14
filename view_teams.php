<?
require('includes/config.php');
session_start();
require_once("header.php");

$db = new Database();

if($_SESSION['user_role'] == 2) {
	if($_POST['new_team']) 
		$db->query("INSERT INTO teams (project_id) VALUES (0)");
	$has_no_team = true;

} else if($_SESSION['user_role'] == 1) {
	$result = $db->query("SELECT team_id FROM student_details WHERE id='{$_SESSION['user_id']}'");
	if($result[0]['team_id'] == 0) {
		$has_no_team = true;
	} else {
		$has_no_team = false;
		$user_team_id = $result[0]['team_id'];
	}

	if($_POST['new_team'] && $has_no_team) {
		// Must be done before database calls
		if($_SESSION['user_role'] == 1) {
			$has_no_team = false;
		}

		$db->query("INSERT INTO teams (project_id) VALUES (0)");
		if($_SESSION['user_role'] == 1) {
			$new_team_id = $db->query("SELECT MAX(id) FROM teams WHERE 1");
			$new_team_id = intval($new_team_id[0]['MAX(id)']);
			$user_team_id = $new_team_id;
			$db->query("UPDATE student_details SET team_id='{$new_team_id}' WHERE id='{$_SESSION['user_id']}'");
		}
	} else if($_POST['join_team'] && $has_no_team) {
		$has_no_team = false;
		$user_team_id = $_POST['team_id'];
		$db->query("UPDATE student_details SET team_id='{$_POST['team_id']}' WHERE id='{$_SESSION['user_id']}'");
	} else if($_POST['leave_team'] && !$has_no_team) {
		$has_no_team = true;
		$db->query("UPDATE student_details SET team_id=0 WHERE id='{$_SESSION['user_id']}'");
	}
}

$students_query = $db->query("SELECT * FROM student_details");
$teams_query = $db->query("SELECT * FROM teams");

$students = array();
foreach ($students_query as $value) {
	$student = array();
	$student["name"] = $value["name"];
	$student["major"] = $value["major"];
	$student["interests"] = $value["interests"];
	$students[$value["id"]] = $student;
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
		                		$i = 1;
		                		foreach ($teams as $team_id => $team) {
		                			if($_SESSION['user_role'] == 2 || count($team["members"]) > 0) {
		                		?>
			                		<div class="col-lg-3">
										<div class="panel panel-success" id='student-profile'>
											<div class="panel-heading">
												<div class="row">
													<h2 class="panel-title col-lg-9">Team <?php echo $i++; ?></h2>
												</div>
											</div>
											<table class="table table-striped">
												<tbody>
													<?php
													foreach ($team["members"] as $member) {
														$student = $students[$member];

													?>
														<tr>
															<td><?php echo $student["name"]; ?></td>
														</tr>
													<?php
													}
													if($_SESSION['user_role'] == 1 && $has_no_team && count($team["members"]) < 6) { ?>
														<tr>
															<td>
																<form role="form" action="view_teams.php" method="post">
																	<input type="hidden" class="form-control" name="join_team" value="true" />
																	<input type="hidden" class="form-control" name="team_id" value=<? echo "\"".$team_id."\""; ?> />
																	<button type="submit" class="btn btn-success" name="submit">Join This Team</button>
																</form>
															</td>
														</tr>
													<?
													} else if($_SESSION['user_role'] == 1 && $user_team_id == $team_id) { ?>
														<tr>
															<td>
																<form role="form" action="view_teams.php" method="post">
																	<input type="hidden" class="form-control" name="leave_team" value="true" />
																	<button type="submit" class="btn btn-danger" name="submit">Leave Your Team</button>
																</form>
															</td>
														</tr>													
													<? } ?>
												</tbody>
											</table>
										</div>
									</div>
								<?php
									}
								}
								?>
							</div>
						</div>
					</div>	
				</div>
            </div>
            <? if($has_no_team) { ?>
				<form role="form" action="view_teams.php" method="post">
					<input type="hidden" class="form-control" name="new_team" value="true" />
					<button type="submit" class="btn btn-primary" name="submit">Create New Team</button>
				</form>
			<? } ?>
        </div>
    </div>
</div>



<?require_once "footer.php";?>