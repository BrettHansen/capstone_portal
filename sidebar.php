<div id="sidebar-wrapper">
    <ul class="sidebar-nav">
        <li class="sidebar-brand"><a href="#">ASU Capstone Portal</a></li>
        <li><a href="dashboard.php">Dashboard</a></li>
        <? if($_SESSION['user_role'] != 2) {?><li><a href="#">Profile</a></li><?}?>
        <? if($_SESSION['user_role'] == 3) {?><li><a href="proposal_form.php">New Proposal</a></li><?}?>
        <? if($_SESSION['user_role'] == 2) {?><li><a href="view_proposals.php">Proposals</a></li><?}?>
        <? if($_SESSION['user_role'] != 3) {?><li><a href="view_projects.php">Projects</a></li><?}?>
        <? if($_SESSION['user_role'] != 3) {?><li><a href="#">Students</a></li><?}?>
        <? if($_SESSION['user_role'] != 3) {?><li><a href="view_teams.php">Teams</a></li><?}?>
        <? if($_SESSION['user_role'] == 2) {?><li><a href="#">Settings</a></li><?}?>
        <li><a href="logout.php">Sign Out</a></li>
    </ul>
</div>