<?php require 'db.php'; ?>

<?php 


class Post{

	

//CREATE POST


//READ POST


	public function readAllPost($fetchType = PDO::FETCH_OBJ){

		global $pdo;

		$stmt = $pdo->prepare('SELECT * FROM posts ORDER BY id DESC');
		$stmt->execute();

		return $stmt->fetchAll($fetchType);

	}

	public function readPostById($id, $fetchType = PDO::FETCH_OBJ){

		global $pdo;

		$stmt = $pdo->prepare('SELECT * FROM posts WHERE id=?');
		
		$stmt->execute([$id]);

		return $stmt->fetch($fetchType);

	}


	//UPDATE POST


	public function updatePost($id,$author_name,$title,$content,$image,$content2,$image2){

global $pdo;

$stmt = $pdo->prepare('UPDATE posts SET title=?,image=?,content=? WHERE id=?');

$stmt->execute([

$id,
$author_name,
$title,
$content,
$image,
$content2,
$image2

]);


	}





public function deletePost($id){

	global $pdo;

	$stmt = $pdo->prepare("DELETE FROM posts WHERE id=?");

	$stmt->execute([$id]);
}






}