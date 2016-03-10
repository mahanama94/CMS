<?php require_once '../includes/session.php';?>
<?php require_once '../includes/functions/functions.php';?>
<?php require_once '../includes/dbconnect.php';?>


<?php findCurrentPage();?>

<?php if(!$currentSubject){
	redirect_to("manage_content.php");
	}
	else{
		$formHeading = "Edit Subject";
	}
?>


<?php 
	if(isset($_POST['submit'])){
		
		$id = $currentSubject["id"];
		$menu_name = mysql_string_prepare($_POST["menu_name"]);
		$position = (int)$_POST["position"];
		$visible = (int)$_POST["visible"];
		
		
		$query = "UPDATE subject SET menu_name = '{$menu_name}' , position= $position, visible = $visible WHERE id = $id LIMIT 1";
		
		$result = mysqli_query($connection, $query);
		 
		if($result && mysqli_affected_rows($connection)==1){
			//Success
			$message = "Subject Updated";
			redirect_to("manage_content.php");
		}
		
		else{
			//Failure
			echo $result;
			$_SESSION["message"] = "Subject update failed";
		}
	}
?>

<?php include '../includes/layouts/header.php';?>


<div id = "main">


	
	<!-- PAGE NAVIGATION SECTION -->
	<div id ="navigation">
	<?php include '../includes/layouts/navigation.php';?>
	</div>
	
	
	<!--  PAGE CONTENT SECTION -->
	<div id ="page">
	<?php 
		echo message();
	?>

	<?php 
		$errors = error();
		echo formErrors($errors);
	?>
	<?php include '../includes/layouts/subjectForm.php';?>
	</div>
</div>

<!--  PAGE FOOTER SECTION -->
<?php include '../includes/layouts/footer.php';?>
<?php require_once '../includes/dbdisconnect.php';?>