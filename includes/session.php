<?php session_start();

/**
 * returns message set by a previous page and unsets the message 
 * @return string message string set
 */
function message(){
	
	if(isset($_SESSION["message"])){
		$output = "<div class =\"message\">";
		$output.= htmlentities($_SESSION["message"]);
		$output.= "</div>";
		unset($_SESSION["message"]);
		return $output;
	}
}


/**
 *  
 * @return unknown
 */
function error(){
	if(isset($_SESSION["error"])){
		
		$error= $_SESSION["error"];
		unset($_SESSION["error"]);
		return $error;
	}
}
?>