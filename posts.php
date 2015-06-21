<?php

$posts = $conn->fetchAll("SELECT * FROM posts ");

// var_dump($posts); die ;

?>
<h1>My blog</h1>

<?php foreach ($posts as $post) : ?>
		<h2><?= $post['heading']?></h2>
		<p><?= $post['intro']?></p>
		<div>
			<a href="<?=  $request->server->get('SCRIPT_NAME')?>?id=<?= $post['id']?>">read more...</a>
		</div>

<?php endforeach?>

