<?require_once "header.php";?>

<div id="wrapper">

    <?require_once "sponser-sidebar.php";?>

    <!-- Page Content -->
    <div id="page-content-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                	<h1>Create Proposal</h1>

                	<div class="row">
                		<div class="col-lg-6">
                			<form role="form">
								<div class="panel panel-default" id='student-profile'>
									<div class="panel-heading">
										<h3 class="panel-title">1. Contact Information</h3>
									</div>
									<div class="panel-body">
										
										<div class="form-group col-lg-6">
											<label for="name">Name</label>
											<input type="name" class="form-control" id="name">
										</div>
										<div class="form-group col-lg-6">
											<label for="company">Company or Organization</label>
											<input type="company" class="form-control" id="company">
										</div>
										<div class="form-group col-lg-6">
											<label for="email">Email</label>
											<input type="email" class="form-control" id="email">
										</div>
										<div class="form-group col-lg-6">
											<label for="phone">Telephone</label>
											<input type="phone" class="form-control" id="phone">
										</div>
									</div>
								</div>

								<div class="panel panel-default" id='student-profile'>
									<div class="panel-heading">
										<h3 class="panel-title">2. Project Description</h3>
									</div>
									<div class="panel-body">
										<div class="form-group">
											<label for="title">Project title: Give a short title to identify the project.</label>
											<input type="title" class="form-control" id="title">
										</div>
										<div class="form-group">
											<label for="description">Project description: Provide a description which would provide the proposal reviewers
											and the students enough detail to understand the problem to be solved and the
											challenges of the project.</label>
											<textarea class="form-control" rows="5" id="description"></textarea>
										</div>
										<div class="form-group">
											<label for="learning">Student learning experience: Provide insight into what the students would learn by
											working on this project. Also provide a description of the expected frequency of
											meetings, meeting modalities/locations, and level of sponsor involvement in the
											project.</label>
											<textarea class="form-control" rows="5" id="learning"></textarea>
										</div>
										<div class="form-group">
											<label for="deliverables">Deliverables: Provide a list of what artifacts the students must deliver by the end of the
											two semester sequence.</label>
											<textarea class="form-control" rows="5" id="deliverables"></textarea>
										</div>
										<div class="form-group">
											<label for="background">Required background: Describe the expected knowledge of specific programming
											languages, operating systems, or technologies for the project. Also, is the project
											strictly software-based or will the students need to have an understanding embedded
											systems or other hardware knowledge?</label>
											<textarea class="form-control" rows="5" id="background"></textarea>
										</div>
									</div>
								</div>

								<div class="panel panel-default" id='student-profile'>
									<div class="panel-heading">
										<h3 class="panel-title">3. Required Agreements</h3>
									</div>
									<div class="panel-body">
										
										<div class="form-group col-lg-12">
											<p>Provide a copy of the non-disclosure agreement and/or intellectual property agreement
												that the students would be required to sign.</p>
											<p>If a non-disclosure agreement or an intellectual property agreement is not required, please
												make this clear to the reviewers and students.</p>
											<div class="form-group">
												<label for="background">Choose file</label>
												<input type="file">
											</div>
											<p class="small">Note: These agreements must be available to the students at the time of their project selection.</p>
									</div>
								</div>

								<div class="panel panel-default" id='student-profile'>
									<div class="panel-heading">
										<h3 class="panel-title">4. Other Information</h3>
									</div>
									<div class="panel-body">
										<div class="form-group">
											<label for="other">Feel free to include any other information or support material that will provide insight into the project for the proposal reviewers and students.</label>
											<textarea class="form-control" rows="5" id="other"></textarea>
										</div>
									</div>
								</div>
								<button type="submit" class="btn btn-default">Submit</button>
							</form>
						</div>
					</div>		
				</div>
            </div>
        </div>
    </div>

</div>



<?require_once "footer.php";?>