<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="bootstrap-3.3.7-dist/css/bootstrap.min.css">
	<link rel="stylesheet" href="css/main.css">

</head>
<body>
	<?php 
		require 'phpVariables.php';
	?>
	<!-- SUPER HEADER -->
	<div class="row super-header text-center">
		<h1>Funbee</h1>
	</div>


	<!-- NAV BAR -->
	<nav class="navbar navbar-bg-faded">
		<ul class="nav navbar-nav">
			<li><a href="#">Home</a></li>
			<li><a href="#">Life</a></li>
			<li><a href="#">College</a></li> 
			<li><a href="#">Hacks</a></li> 
		</ul>
		
		<form class="form-inline pull-xs-right text-right">
			<input class="form-control" type="text" placeholder="Search">
			<button class="btn btn-outline-success" type="submit">Search</button>
		</form>
	</nav>
		
	<div class="container-fluid">
	<!-- WEB CONTENT -->
		<div class="row"> 
			<!-- Articles -->
			<div class="col-xs-9">
				<?php 
					for ($i=0; $i<getNumberOfArticles(); $i++) {
						echo 
						'<div class=" article row">
							<div class="article-title col-xs-8">'.$titleArray[$i].'</div>
							<div class="article-date col-xs-4 text-right">'.$dateArray[$i].'</div>
							<div class="article-content col-xs-12">'.$contentArray[$i].'</div>
							<div class="article-fans col-xs-4">'.$likesArray[$i].' likes</div>
							<div class="article-author col-xs-8 text-right">'.$authorArray[$i].'</div>
					</div> ';
					}
				?>
			
			</div>
			
			<!-- Popular Feed -->
			<div class="col-xs-3">
				<h6 class="text-right">Popular Posts </h6>
				<ul class="nav text-right">
					<?php
						for ($i=0; $i<getNumberOfArticles(); $i++) {
							echo '<li><a href="#">'.$topPostTitle[$i].'</a></li>';
						}
					?>
				</ul>

				<footer>
					<nav class="footer navbar fixed-bottom">
						<ul class="nav navbar-nav">
							<li><a href="write_an_article.php">Write for us</a></li>
							<li><a href="#">Contact us</a></li>
						</ul>
					</nav>
				</footer>
			</div>

		</div>
	</div>


</body>
</html>