<?php

<?php

$posts = $conn->fetchAll("SELECT * FROM posts ");

// var_dump($posts); die ;

?>
<h1>Posts</h1>

<table>
	<tr>
		<th></th>
		<th></th>
		<th></th>
		<th></th>
	</tr>	
<?php foreach ($posts as $post) : ?>
		<tr>
		<td><?= $post['heading']?></td>
		<td><?= $post['intro']?></td>
		<td>
			<a href="<?=  $request->server->get('PHP_SELF')?>?id=<?= $post['id']?>">edit...</a>
			<a href="<?=  $request->server->get('PHP_SELF')?>?id=<?= $post['id']?>">show...</a>\
			<a href="<?=  $request->server->get('PHP_SELF')?>?id=<?= $post['id']?>">deli...</a>
		</td>
		<tr>
<?php endforeach?>
</table>


?>