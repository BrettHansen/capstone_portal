<div id="sidebar-wrapper">
    <ul class="sidebar-nav">
        <li class="sidebar-brand"><a href="#">ASU Capstone Portal</a></li>
        <li><a href="student-dashboard.php">Dashboard</a></li>
        <? if($_SESSION['user_role'] != 2) {?><li><a href="student-profile.php">Profile</a></li><?}?>
        <? if($_SESSION['user_role'] == 3) {?><li><a href="sponsor-proposal.php">New Proposal</a></li><?}?>
        <? if($_SESSION['user_role'] != 3) {?><li><a href="student-projects.php">Projects</a></li><?}?>
        <? if($_SESSION['user_role'] != 3) {?><li><a href="student-students.php">Students</a></li><?}?>
        <? if($_SESSION['user_role'] != 3) {?><li><a href="student-teams.php">Teams</a></li><?}?>
        <? if($_SESSION['user_role'] == 2) {?><li><a href="#">Settings</a></li><?}?>
        <li><a href="logout.php">Sign Out</a></li>
    </ul>
</div>