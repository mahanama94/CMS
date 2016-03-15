<?php require_once '../includes/session.php';?>
<?php require_once '../includes/functions/functions.php';?>
<?php require_once '../includes/dbconnect.php';?>
<?php include '../includes/layouts/header.php';?>
<?php require_once '../includes/maps/mapConnect.php';?>
<?php require_once '../includes/maps/functions.php';?>

<?php 
	/*
	 * Coordinates for user id 1
	 */
	$cordinates = getLocations(1);
	$cordinates = mysqli_fetch_assoc($cordinates);
	
	$data = array();
	$x = getLocations(2);
	while($row = mysqli_fetch_assoc($x)){
		$data[] = $row;
	}
	
	
	?>

<!DOCTYPE html>
<script type="text/javascript" src="js/map.js"></script>

<div id = "main">
	
	

	
	<!-- PAGE NAVIGATION SECTION -->
	<div id ="navigation">
	
	</div>
	
	
	<!--  PAGE CONTENT SECTION -->
	<div id ="map">
	
	Map comes here
	
	
	</div>
	
	<!-- Invoking maps-->
	<script type="text/javascript" src="js/map.js"></script>
		<script>
  		var latitude = <?php echo floatval($cordinates['latitude']);?>;
  		var longitude = <?php echo floatval($cordinates['longitude']);?>;

		var json = <?php echo json_encode($data)?>


	</script> 
</div>
	
	


<!--  PAGE FOOTER SECTION -->
<?php include '../includes/layouts/footer.php';?>
<?php require_once '../includes/dbdisconnect.php';?>
