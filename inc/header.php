<?php 
	include_once '/../controllers/Book.php';
	$bk = new Book();
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>CRUD OOP PDO</title>
	<link rel="stylesheet" type="text/css" href="../../public/css/bootstrap.min.css">
	<script type="text/javascript" src="../../public/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="container">
		<nav class="navbar navbar-default">
			<div class="navbar-header">
				<a class="navbar-brand" href="index.php">CRUD OOP PDO</a>
			</div>
			<ul class="nav navbar-nav pull-right">
				<li><a href="create.php">Create</a></li>
				<li><a href="index.php">Display</a></li>
				<li><a href="trash_list.php">Trash List</a></li>
			</ul>
		</nav>