<!DOCTYPE html>
<html>
<head>
	<title>FunBee</title>
	<link rel="stylesheet" href="bootstrap-3.3.7-dist/css/bootstrap.min.css">
	<link rel="stylesheet" href="css/main.css">

</head>

<body>
	<?php 
		require 'phpVariables.php';
	?>
	<!-- SUPER HEADER -->

	<div class="row super-header text-center">
		<h1>FunBee</h1>
	</div>
	<!-- NAV BAR -->
	<div class="navbar navbar-default fixed">
		<ul class="nav navbar-nav">
			<li class="active"><a href="#">Best</a></li>
			<li><a href="#">Cool</a></li>
			<li><a href="#">Story</a></li>
		</ul>
		<form role="search" class="navbar-form navbar-left">
			<div class="form-group">
				<input type="text" placeholder="Search" class="form-control">
			</div>
		</form>
	</div>


	<!-- WEB CONTENT -->
	<div class="container-fluid">
		<div class="row">
			<div class="col-xs-9">

				<?php 
					for ($i=0; $i<getNumberOfArticles(); $i++) {
						echo 
						'<div class="card">
							<div class=" article row card-block">
								<div class="article-title h4 card-title col-xs-8"><b>'.$titleArray[$i].'</b></div>
								<div class="article-date card-text col-xs-4 text-right">'.$dateArray[$i].'</div>
								<div class="article-content col-xs-12">'.$contentArray[$i].'</div>
								<div class="article-fans col-xs-4">'.$likesArray[$i].' likes</div>
								<div class="article-author col-xs-8 text-right">'.$authorArray[$i].'</div>
							</div><br>
						</div>';
					}
				?>

			</div>

			<!-- Popular Feed -->
			<div class="col-xs-3 popular-list">
				<h6 class="text-right">Popular Posts </h6>
				<div class="row">
					<ul class="nav text-right">
						<?php
						
							for ($i=0; $i<getNumberOfArticles(); $i++) {
								echo '<li><a href="#">'.$topPostTitle[$i].'</a></li>';
							}
						?>
					</ul>	
				</div>

			</div>
		</div>
	</div>
	
	<footer>
		<div class="footer">
			<a href="write_an_article.php">Write for us </a> |
			<a href="#"> Contact us</a>	
		</div>
		
	</footer>
</body>
</html>