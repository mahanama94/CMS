<?php require_once '../includes/session.php';?>
<?php require_once '../includes/functions/functions.php';?>
<?php require_once '../includes/functions/validation.php';?>
<?php require_once '../includes/dbconnect.php';?>

<?php 
	if(isset($_POST['submit'])){
		$menu_name = mysql_string_prepare($_POST["menu_name"]);
		$position = (int)$_POST["position"];
		$visible = (int)$_POST["visible"];
		
		/**
		 * 
		 * @var unknown
		 */
		/*$fields = array("menu_name", "position", "visible");
		validatePresent($fields);
		
		$fields = array("menu_name" =>30);
		validateMaxLength($fields);
		if(!empty($errors)){
			$_SESSION["errors"] = $errors;
			redirect_to("new_subject.php");
		}
		*/
		$query = "INSERT INTO subject (menu_name, position, visible) VALUES( '$menu_name', $position, $visible)";
		
		$result = mysqli_query($connection, $query);
		 
		if($result){
			//Success
			$_SESSION["message"] = "Subject Created";
			redirect_to("manage_content.php");
		}
		
		else{
			//Failure
			$_SESSION["message"] = "Subject Creation failed";
			redirect_to("new_subject.php");
		}
	}
	else/* For a GET request */
	{
		redirect_to("new_subject.php");
	}
?>




<?php require_once '../includes/dbdisconnect.php';?>
