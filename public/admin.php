<?php require_once '../includes/functions/functions.php';?>
<?php require_once '../includes/dbconnect.php';?>
<?php include '../includes/layouts/header.php';?>


<?php 

	$query = "SELECT * FROM subject WHERE visible =1";
	
	$result = mysqli_query($connection, $query);
	
	confirmQuery($result);

?>
<div id = "main">
	<div id ="navigation">
		<ul class="subjects">
		<?php 
			//use returned data
			
		while($subject= mysqli_fetch_assoc($result)){
			
		?>
	
		<li><?php echo $subject["menu_name"]."(".$subject["id"].")";?></li> 
		
		<?php }?>
		</ul>
		
	</div>
	
		
	<div id ="page">
		<h2>Admin Menu</h2>
		<p>Welcome to the admin area</p>
		
		<!-- Content Of the Page displayed as a list.
			shown to the left of the user and provides quick access to the useful
			pages
			 -->
		
		<ul>
			<li><a href="manage_content.php">Manage Website Content</a></li>
			
			<li><a href ="mange_admins.php">Manage Admin Users</a></li>
			
			<li><a href="logout.php">logout</a></li>
		</ul>
	</div>
</div>

<?php  mysqli_free_result($result);?>
<?php include '../includes/layouts/footer.php';?>
<?php require_once '../includes/dbdisconnect.php';?>