<?require_once "header.php";?>

<div id="wrapper">

    <?require_once "student-sidebar.php";?>

    <!-- Page Content -->
    <div id="page-content-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                	<h1>Team Selection
                	<button class="btn btn-default btn-lg" onclick="addTeam()">Create New Team</button></h1>
                	<div class="row">
                		<div class="col-lg-3">
							<div class="panel panel-success" id='student-profile'>
								<div class="panel-heading">
									<div class="row">
										<h2 class="panel-title col-lg-9">Team 1 (Open)</h2>
										<button class="btn btn-success btn-sm col-lg-2">Join</button>
									</div>
								</div>
								<table class="table table-striped">
									<tbody>
										<tr>
											<td>James Aaberg</td>
										</tr>
										<tr>
											<td>John Aaron</td>
										</tr>
										<tr>
											<td>Robert Abarca</td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>
						<div class="col-lg-3">
							<div class="panel panel-success" id='student-profile'>
								<div class="panel-heading">
									<div class="row">
										<h2 class="panel-title col-lg-9">Team 2 (Open)</h2>
										<button class="btn btn-success btn-sm col-lg-2">Join</button>
									</div>
								</div>
								<table class="table table-striped">
									<tbody>
										<tr>
											<td>Michael Abbate</td>
										</tr>
										<tr>
											<td>Mary Abbess</td>
										</tr>
										<tr>
											<td>William Abbott</td>
										</tr>
										<tr>
											<td>David Abbratozzato</td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>
						<div class="col-lg-3">
							<div class="panel panel-success" id='student-profile'>
								<div class="panel-heading">
									<div class="row">
										<h2 class="panel-title col-lg-9">Team 3 (Open)</h2>
										<button class="btn btn-success btn-sm col-lg-2">Join</button>
									</div>
								</div>
								<table class="table table-striped">
									<tbody>
										<tr>
											<td>Richard Abdelnour</td>
										</tr>
										<tr>
											<td>Charles Abderrazzaq</td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>
						<div class="col-lg-3">
							<div class="panel panel-info" id='student-profile'>
								<div class="panel-heading">
									<div class="row">
										<h2 class="panel-title col-lg-9">Team 4 (Private)</h2>
										<button class="btn btn-info btn-sm col-lg-2">Request</button>
									</div>
								</div>
								<table class="table table-striped">
									<tbody>
										<tr>
											<td>Joseph Abdollah</td>
										</tr>
										<tr>
											<td>Thomas Abdous</td>
										</tr>
										<tr>
											<td>Patricia Abdullah</td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>
					</div>
					<div class="row" id="team-panels">
						<div class="col-lg-3">
							<div class="panel panel-info" id='student-profile'>
								<div class="panel-heading">
									<div class="row">
										<h2 class="panel-title col-lg-9">Team 5 (Private)</h2>
										<button class="btn btn-info btn-sm col-lg-2">Request</button>
									</div>
								</div>
								<table class="table table-striped">
									<tbody>
										<tr>
											<td>Christopher Abdulrazak</td>
										</tr>
										<tr>
											<td>Linda Abe</td>
										</tr>
										<tr>
											<td>Barbara Abel</td>
										</tr>
										<tr>
											<td>Daniel Abelmann</td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>
						<div class="col-lg-3">
							<div class="panel panel-danger" id='student-profile'>
								<div class="panel-heading">
									<div class="row">
										<h2 class="panel-title col-lg-9">Team 6 (Full)</h2>
									</div>
								</div>
								<table class="table table-striped">
									<tbody>
										<tr>
											<td>Paul Abelson</td>
										</tr>
										<tr>
											<td>Mark Abernathy</td>
										</tr>
										<tr>
											<td>Elizabeth Abnet</td>
										</tr>
										<tr>
											<td>Donald Abraham</td>
										</tr>
										<tr>
											<td>Jennifer Abraham-Scalapino</td>
										</tr>
										<tr>
											<td>George Abrams</td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>

						<div hidden class='col-lg-3' id='newTeam'>
							<div class='panel panel-warning' id='student-profile'>
								<div class='panel-heading'>
									<div class='row'>
										<h2 class='panel-title col-lg-9'>New Team</h2><br/>
										<label class='radio-inline'><input id='team-type1' type='radio' name='radio' value='Private'>Private</label>
										<label class='radio-inline'><input id='team-type2' type='radio' name='radio' value='Public'>Public</label>
										<button class='btn btn-default' onclick='saveTeam()'>Save</button>
									</div>
								</div>
							</div>
						</div>

						<div hidden class="col-lg-3" id="savedTeam">
							<div class="panel" id='student-profile'>
								<div class="panel-heading">
									<div class="row">
										<h2 id="dummyid" class="panel-title col-lg-9">Team 7</h2>
									</div>
								</div>
								<table class="table table-striped">
									<tbody id="newNames">
										<tr>
											<td id='np1'>John Doe</td>
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

<script>
	function saveTeam() {
		$('#newTeam').hide();
		if($("#newTeam #team-type1")[0].checked) {
			$('#savedTeam #student-profile').addClass('panel-info');
			$('#savedTeam #dummyid').html('Team 7 (Private)')
		} else {
			$('#savedTeam #student-profile').addClass('panel-success');
			$('#savedTeam #dummyid').html('Team 7 (Open)')
		}
		$('#savedTeam').show();
	}
	function addTeam() {	
		$('#newTeam').show();
	}
</script>

<?require_once "footer.php";?>