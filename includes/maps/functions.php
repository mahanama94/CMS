<?php

	/**
	 * returns the coordinates set corresponding to a givrn user
	 * @param  $userId Id of the user
	 * @return result query for the user co ordinates 
	 */
	function getLocations($userId){
		/* use gloabl database sonnection */
		global $connection;
		
		/*getting required subject information from the database */
		$query = "SELECT * FROM coordinates WHERE userId = $userId";
		$result = mysqli_query($connection, $query);
			
		/* Confirm the query result */

		confirmQuery($result);
		
		return $result;
	}
	
	
	
?>