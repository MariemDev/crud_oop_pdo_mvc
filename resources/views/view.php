<?php include_once '/../../inc/header.php'; ?>
<div class="row">
	<div class="col-md-12">
		<table class="table table-striped table-bordered">
			<tr>
				<th>Title</th>
				<th>Author</th>
				<th>Language</th>
				<th>Actions</th>
			</tr>
			<?php
				if (isset($_GET['id'])) {
					$id = $_GET['id'];
					$result = $bk->readById($id);
			 ?>
			<tr>
				<td><?php echo $result['title']; ?></td>
				<td><?php echo $result['author']; ?></td>
				<td><?php echo $result['language']; ?></td>
				<td>
					<a href="update.php?id=<?php echo $result['id']; ?>"><button class="btn btn-primary btn-sm">Edit</button></a> 
					<a href="trash.php?id=<?php echo $result['id']; ?>" onclick="return confirm('Are you sure to trash book?');"><button class="btn btn-warning btn-sm">Trash</button></a> 
				</td>
			</tr>
			<?php }?>
		</table>
	</div>
</div>
<?php include_once '/../../inc/footer.php'; ?>		