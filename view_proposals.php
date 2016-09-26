<?php
require('includes/config.php');
require_once("header.php");

$db = new Database();

$forms = $db->query("SELECT * FROM proposal_forms");
?>

<div id="wrapper">

    <?require_once "sidebar.php";?>

    <div id="page-content-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                	<h1>All Proposals</h1>

                	<?php
            		foreach($forms as $key => $value) { 
                		$form = json_decode(preg_replace('/[\x00-\x1F\x80-\xFF]/', '', $value["form"]), true);
                	?>
						<div class="row">
	                		<div class="col-lg-10">
	                			<div class="short_description">
			                		<div class="panel panel-default" id=<?php echo "short_".$key ?>>
										<div class="panel-heading">
											<button class="btn btn-info short_description_expand">Expand</button>
											<h3 class="panel-title short_description_title"><?php echo $form["description_title"]; ?></h3>
										</div>
									</div>
								</div>

								<div class="long_description">
									<div class="panel panel-default" id=<?php echo "contact_".$key ?>>
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

									<div class="panel panel-default" id=<?php echo "description_".$key ?>>
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

									<div class="panel panel-default" id=<?php echo "other_".$key ?>>
										<div class="panel-heading">
											<h3 class="panel-title">Other Information</h3>
										</div>
										<div class="panel-body">
											<div class="form-group">
												<?php echo $form["other"]; ?>
											</div>
										</div>
									</div>

									<button class="btn btn-info short_description_hide">Hide</button>
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

<script type="text/javascript" src="scripts/view_proposals.js"></script>


<?
require_once "footer.php";
?>