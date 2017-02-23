<?php 
	include_once '/../../controllers/Book.php';
	$bk = new Book();
	if (isset($_GET['id'])) {
		$id = $_GET['id'];
		$trash_data = $bk->trash($id);
		if ($trash_data) {
			header("location: trash_list.php?msg=".urlencode('Book Trashed Successfully.'));
		}
	}
 ?>