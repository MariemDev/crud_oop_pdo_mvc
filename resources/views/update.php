<?php include_once '/../../inc/header.php'; ?>
<?php 
	if (isset($_POST['submit'])) {
		$id       = $_POST['id'];
		$title    = $_POST['title'];
		$author   = $_POST['author'];
		$language = $_POST['language'];

		if ($title == "" || $author == "" || $language == "") {
			echo "<div class='alert alert-danger alert-dismissable'><a href='create.php' class='close' data-dismiss='alert' aria-label='close'>&times;</a><span class='glyphicon glyphicon-warning-sign'></span> Field must not be empty.</div>";
		} else {
			$bk->getAllData($title, $author, $language);
			if ($bk->update($id)) {
				echo "<div class='alert alert-success alert-dismissable'><a href='create.php' class='close' data-dismiss='alert' aria-label='close'>&times;</a><span class='glyphicon glyphicon-ok'></span> Book Updated Successfully.</div>";
			}
		}
	}
	if (isset($_GET['id'])) {
		$id = $_GET['id'];
		$result = $bk->readById($id);
	}
 ?>
<div class="row">
	<div class="col-md-12">
		<div class="panel panel-default">
			<div class="panel panel-heading">
				<h2>Update Book</h2>
			</div>
			<div class="panel-body">
				<form action="" method="post">
					<input type="hidden" name="id" value="<?php echo $result['id']; ?>">
					<div class="form-group">
						<label for="title">Title:</label>
						<input type="text" name="title" id="title" class="form-control" value="<?php echo $result['title']; ?>">
					</div>
					<div class="form-group">
						<label for="author">Author:</label>
						<input type="text" name="author" id="author" class="form-control" value="<?php echo $result['author']; ?>">
					</div>
					<div class="form-group">
						<label for="language">Language</label>
						<select class="form-control" name="language" id="language">
							<option value="Bangla" <?php if ($result['language'] == 'Bangla') {echo "selected=selected"; } ?>>Bangla</option>
							<option value="Hindi" <?php if ($result['language'] == 'Hindi') {echo "selected=selected"; } ?>>Hindi</option>
							<option value="English" <?php if ($result['language'] == 'English') {echo "selected=selected"; } ?>>English</option>
						</select>
					</div>
					<button type="submit" name="submit" class="btn btn-success">Update</button>
				</form>
			</div>
		</div>
	</div>
</div>
<?php include_once '/../../inc/footer.php'; ?>		