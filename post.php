<?php

$post = $conn->fetchAssoc("SELECT * FROM posts WHERE id = :id  ", array(
	'id' => $_GET['id'],
	));

?>
		<a href="<?= $_SERVER['PHP_SELF']?>">back to blog</a>
		<h1><?= $post['heading']?></h1>
		<p><?= $post['content']?></p>
		

