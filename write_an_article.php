<!DOCTYPE html>
<html lang="en">
<head>
	<title>Write an article</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

	<div class="container-fluid">
		<h2>Do you have something interesting?</h2>
		
		<form class="form-horizontal well">
			<div class="form-group">
				<label class="control-label col-sm-2" for="title">Title</label>
				<div class="col-sm-4">
					<input type="text" class="form-control" id="title" placeholder="Title of your article">
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-sm-2" for="author">Author</label>
				<div class="col-sm-4">
					<input type="text" class="form-control" id="author" placeholder="">
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-sm-2" for="category">Category</label>
				<div class="col-sm-4">
					<div class="input-group">
						<span class="input-group-addon">
							<input type="checkbox" aria-label="life"></input>
							<label class="control-label">Life</label>
						</span>
						<span class="input-group-addon">
							<input type="checkbox" aria-label="hacks"></input>
							<label class="control-label">hacks</label>
						</span>
						<span class="input-group-addon">
							<input type="checkbox" aria-label="health"></input>
							<label class="control-label">Health</label>
						</span>
						<span class="input-group-addon">
							<input type="checkbox" aria-label="fun"></input>
							<label class="control-label">Fun</label>
						</span>
						<span class="input-group-addon">
							<input type="checkbox" aria-label="others"></input>
							<label class="control-label">Others</label>
						</span>
					</div>
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-sm-2" for="content">Content</label>
				<div class="col-sm-4">
					<textarea class="form-control" rows="10" id="content"></textarea>
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-sm-2" for="title">MetaTags</label>
				<div class="col-sm-4">
					<input type="text" class="form-control" id="title" placeholder="Enter keywords in your article">
				</div>
			</div>
			
			<div class="form-group">
				<div class="col-sm-offset-2 col-sm-10">
					<button type="submit" class="btn btn-default">Submit</button>
				</div>
			</div>
		</form>
	</div>

</body>
</html>

