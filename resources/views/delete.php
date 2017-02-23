<?php 
	include_once '/../../controllers/Book.php';
	$bk = new Book();
	if (isset($_GET['id'])) {
		$id = $_GET['id'];
		$delete_data = $bk->delete($id);
		if ($delete_data) {
			header("location: trash_list.php?msg=".urlencode('Book Deleted Successfully.'));
		}
	}
 ?>