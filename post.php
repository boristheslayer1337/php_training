<?php

$post = $conn->fetchAssoc("SELECT * FROM posts WHERE id = :id  ", array(
	 'id' =>$request->query->getInt('id'), // => $_GET['id'],
	));

?>
		<a href="<?= $request->server->get('SCRIPT_NAME') // $_SERVER['PHP_SELF']?>">back to blog</a>
		<a href="<?= $request->server->get('SCRIPT_NAME') // $_SERVER['PHP_SELF']?>/admin/post?id=<?= $post['id']?>">Edit</a>
		<h1><?= $post['heading']?></h1>
		<p><?= $post['content']?></p>
		

