<?php
require('includes/config.php');
require_once("header.php");

$db = new Database();

$forms = $db->query("SELECT * FROM proposal_forms");
?>

<div id="wrapper">
    <div id="page-content-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                	<h1>All Proposals</h1>

                	<?php
            		foreach($forms as $value) { 
                		$form = json_decode($value["form"], true);
                	?>
						<div class="row">
	                		<div class="col-lg-10">
								<div class="panel panel-default" id="student-profile">
									<div class="panel-heading">
										<h3 class="panel-title">Contact Information</h3>
									</div>
									<div class="panel-body">
										<div class="form-group col-lg-6">
											<h4 for="name">Name:</h4><?php echo $form["contact_name"]; ?>
										</div>
										<div class="form-group col-lg-6">
											<h4 for="company">Company:</h4><?php echo $form["contact_company"]; ?>
										</div>
										<div class="form-group col-lg-6">
											<h4 for="email">Email:</h4><?php echo $form["contact_email"]; ?>
										</div>
										<div class="form-group col-lg-6">
											<h4 for="phone">Telephone:</h4><?php echo $form["contact_phone"]; ?>
										</div>
									</div>
								</div>

								<div class="panel panel-default" id="student-profile">
									<div class="panel-heading">
										<h3 class="panel-title">Project Description</h3>
									</div>
									<div class="panel-body">
										<div class="form-group">
											<h4 for="title">Project title:</h4><?php echo $form["description_title"]; ?>
										</div>
										<div class="form-group">
											<h4 for="description">Project description:</h4><?php echo $form["description_description"]; ?>
										</div>
										<div class="form-group">
											<h4 for="learning">Student learning experience:</h4><?php echo $form["description_experience"]; ?>
										</div>
										<div class="form-group">
											<h4 for="deliverables">Deliverables:</h4><?php echo $form["description_deliverables"]; ?>
										</div>
										<div class="form-group">
											<h4 for="background">Required background:</h4><?php echo $form["description_background"]; ?>
										</div>
									</div>
								</div>

								<div class="panel panel-default" id="student-profile">
									<div class="panel-heading">
										<h3 class="panel-title">Required Agreements</h3>
									</div>
									<div class="panel-body">
										<div class="form-group col-lg-12">
											<div class="form-group">
												<h4 class="form-group">File:</h4><?php echo $form["agreement"]; ?>
											</div>
										</div>
									</div>
								</div>

								<div class="panel panel-default" id="student-profile">
									<div class="panel-heading">
										<h3 class="panel-title">Other Information</h3>
									</div>
									<div class="panel-body">
										<div class="form-group">
											<?php echo $form["other"]; ?>
										</div>
									</div>
								</div>
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


<?
require_once "footer.php";
?>