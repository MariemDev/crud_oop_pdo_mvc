<?php include_once '/../../inc/header.php'; ?>
<?php 
	if (isset($_POST['submit'])) {
		$title    = $_POST['title'];
		$author   = $_POST['author'];
		$language = $_POST['language'];

		if ($title == "" || $author == "" || $language == "") {
			echo "<div class='alert alert-danger alert-dismissable'><a href='create.php' class='close' data-dismiss='alert' aria-label='close'>&times;</a><span class='glyphicon glyphicon-warning-sign'></span> Field must not be empty.</div>";
		} else {
			$bk->getAllData($title, $author, $language);
			if ($bk->insert()) {
				echo "<div class='alert alert-success alert-dismissable'><a href='create.php' class='close' data-dismiss='alert' aria-label='close'>&times;</a><span class='glyphicon glyphicon-ok'></span> Book Added Successfully.</div>";
			}
		}
	}
 ?>
<div class="row">
	<div class="col-md-12">
		<div class="panel panel-default">
			<div class="panel panel-heading">
				<h2>Add Book</h2>
			</div>
			<div class="panel-body">
				<form action="" method="post">
					<div class="form-group">
						<label for="title">Title:</label>
						<input type="text" name="title" id="title" class="form-control" placeholder="Enter book title">
					</div>
					<div class="form-group">
						<label for="author">Author:</label>
						<input type="text" name="author" id="author" class="form-control" placeholder="Enter author name">
					</div>
					<div class="form-group">
						<label for="language">Language</label>
						<select class="form-control" name="language" id="language">
							<option value="Bangla">Bangla</option>
							<option value="Hindi">Hindi</option>
							<option value="English">English</option>
						</select>
					</div>
					<button type="submit" name="submit" class="btn btn-success">Create</button>
				</form>
			</div>
		</div>
	</div>
</div>
<?php include_once '/../../inc/header.php'; ?>