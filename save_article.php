<?php

require 'core.php';

function storeArticleDetails() {
	$title = $_POST['title'];
	$author = $_POST['author'];
	$category = $_POST['category'];
	$content = $_POST['content'];
	$metatags = $_POST['metatags'];

	echo $query = "INSERT INTO article(title, author, content, date, isConfirmed, views, category, metatags) VALUES ('$title', '$author', '$content', now(), 0, 0, '$category', '$metatags')";
	
	global $mysql_connect;

	$query_run = mysqli_query($mysql_connect, $query);
	if($query_run) {

		// Write smth marvelous
		header('Location: index.php');
	} else{
		// Give a sorry gift
		echo "Sorry for the trouble. Please try again";
	}

}

storeArticleDetails();


?>