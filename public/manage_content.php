<?php require_once '../includes/session.php';?>
<?php require_once '../includes/functions/functions.php';?>
<?php require_once '../includes/dbconnect.php';?>
<?php include '../includes/layouts/header.php';?>


<div id = "main">

	<?php findCurrentPage();	?>
	
	<!-- PAGE NAVIGATION SECTION -->
	<div id ="navigation">
	<?php include '../includes/layouts/navigation.php';?>
	</div>
	
	
	<!--  PAGE CONTENT SECTION -->
	<div id ="page">
	<?php include "../includes/layouts/pageManageContent.php"?>
	</div>
</div>

<!--  PAGE FOOTER SECTION -->
<?php include '../includes/layouts/footer.php';?>
<?php require_once '../includes/dbdisconnect.php';?>