<?php
	require "core.php";
	//$numberOfArticles = getNumberOfArticles();

	global $titleArray;
	global  $authorArray;
	global $contentArray;
	global $dateArray;
	global $likesArray;

	$query = "select * from article";
	
	if($query_run = mysqli_query($mysql_connect, $query)) {
		$query_run = mysqli_query($mysql_connect, $query);
			
		if(mysqli_num_rows($query_run)>0){
			$i=0;
			
			while($query_row = mysqli_fetch_assoc($query_run) ){
				
				if($query_row['isConfirmed'] == 1){
					$titleArray[$i] = $query_row['title'];
					$authorArray[$i] = $query_row['author'];
					$contentArray[$i] = $query_row['content'];
					$dateArray[$i] = $query_row['date'];
					$likesArray[$i] = $query_row['views'];
					$i++;
				}
			}
			$i=0;
		}
	}	
?>