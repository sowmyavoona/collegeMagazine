<?php
require 'config.php';

ob_start();

$current_file = $_SERVER['SCRIPT_NAME'];

if(isset($_SERVER['HTTP_REFERER']) && !empty($_SERVER['HTTP_REFERER'])) {
	$http_referer = $_SERVER['HTTP_REFERER'];
}

function getNumberOfArticles() {
	global $mysql_connect;
	$query = "SELECT count(*) as numberOfArticles FROM article where isConfirmed = 1 ";
		
		if($query_run = mysqli_query($mysql_connect, $query)) {
			$query_run = mysqli_query($mysql_connect, $query);
			if(mysqli_num_rows($query_run)>0){
				$query_row = mysqli_fetch_assoc($query_run);
				$return_field = $query_row['numberOfArticles'];
				return $return_field;
			}
			
			else{
				return 'something went wrong';
			}
		}	
}



?>
