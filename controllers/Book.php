<?php 
	include_once '/../database/DB.php';
	class Book
	{
		private $table = "books";
		private $title;
		private $author;
		private $language;

		public function index()
		{
			$query = "SELECT * FROM $this->table WHERE is_delete = 0 ORDER BY id DESC";
			$stmt  = DB::prepare($query);
			$stmt->execute();
			return $stmt->fetchAll();
		}

		public function getAllData($title, $author, $language)
		{
			$this->title    = $title;
			$this->author   = $author;
			$this->language = $language;
		}

		public function insert() 
		{
			$query = "INSERT INTO $this->table (title, author, language) VALUES (:title, :author, :language)";
			$stmt  = DB::prepare($query);
			$stmt->bindParam(':title', $this->title);
			$stmt->bindParam(':author', $this->author);
			$stmt->bindParam(':language', $this->language);
			return $stmt->execute();
		}

		public function readById($id) 
		{
			$query = "SELECT * FROM $this->table WHERE id = :id";
			$stmt  = DB::prepare($query);
			$stmt->bindParam(':id', $id);
			$stmt->execute();
			return $stmt->fetch(); 
		}

		public function update($id)
		{
			$query = "UPDATE $this->table 
					  SET title = :title, 
					      author = :author, 
					      language = :language
					  WHERE id = :id";
			$stmt  = DB::prepare($query);
			$stmt->bindParam(':title', $this->title);
			$stmt->bindParam(':author', $this->author);
			$stmt->bindParam(':language', $this->language);
			$stmt->bindParam(':id', $id);
			return $stmt->execute();		  
		}

		public function trash($id)
		{
			$query = "UPDATE $this->table SET is_delete = 1 WHERE id = :id";
			$stmt  = DB::prepare($query);
			$stmt->bindParam(':id', $id); 
			return $stmt->execute();
		}

		public function trashList()
		{
			$query = "SELECT * FROM $this->table WHERE is_delete = 1 ORDER BY id DESC";
			$stmt  = DB::prepare($query);
			$stmt->execute();
			return $stmt->fetchAll();
		}

		public function restore($id) 
		{
			$query = "UPDATE $this->table SET is_delete = 0 WHERE id = :id";
			$stmt  = DB::prepare($query);
			$stmt->bindParam(':id', $id); 
			return $stmt->execute();
		}

		public function delete($id) 
		{
			$query = "DELETE FROM $this->table WHERE id = :id";
			$stmt  = DB::prepare($query);
			$stmt->bindParam(':id', $id);
			return $stmt->execute();
		}
	}
 ?>