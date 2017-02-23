<?php 
	include_once '/../../controllers/Book.php';
	$bk = new Book();
	if (isset($_GET['id'])) {
		$id = $_GET['id'];
		$restore_data = $bk->restore($id);
		if ($restore_data) {
			header("location: index.php?msg=".urlencode('Book Restored Successfully.'));
		}
	}
 ?>