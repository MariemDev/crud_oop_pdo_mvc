<?php include_once '/../../inc/header.php'; ?>
<?php 
	if (isset($_GET['msg'])) {
		$msg = $_GET['msg'];
		echo "<div class='alert alert-success alert-dismissable'><a href='index.php' class='close' data-dismiss='alert' aria-label='close'>&times;</a><span class='glyphicon glyphicon-ok'></span> ".$msg."</div>";
	}
 ?>
<div class="row">
	<div class="col-md-12">
		<table class="table table-striped table-bordered">
			<tr>
				<th>Sl</th>
				<th>Title</th>
				<th>Actions</th>
			</tr>
			<?php
				$result = $bk->index();
				if ($result) {
					$i = 0;
					foreach ($result as $data) {
					$i++;
			 ?>
			<tr>
				<td><?php echo $i; ?></td>
				<td><?php echo $data['title']; ?></td>
				<td>
					<a href="view.php?id=<?php echo $data['id']; ?>"><button class="btn btn-info btn-sm">View</button></a>
				</td>
			</tr>
			<?php } } else { ?>
				<tr><td colspan="5" align="center"><b>Book Not Available !</b></td></tr>
			<?php } ?>
		</table>
	</div>
</div>
<?php include_once '/../../inc/footer.php'; ?>		