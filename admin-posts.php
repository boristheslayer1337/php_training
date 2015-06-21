<?php



$posts = $conn->fetchAll("SELECT * FROM posts ");

// var_dump($posts); die ;

?>
<h1>Posts</h1>
	<tr>
		<th>ID</th>
		<th>Heading</th>
		<th>Intro</th>
		<th>Actions</th>
	</tr>
<table>
<?php foreach ($posts as $post) : ?>
		<tr>
		<td><?= $post['heading']?></td>
		<td><?= $post['intro']?></td>
		<td>
			<a href="<?=  $request->server->get('SCRIPT_NAME')?>?id=<?= $post['id']?>">edit</a>
			<a href="<?=  $request->server->get('SCRIPT_NAME')?>?id=<?= $post['id']?>">show</a>
			<a href="<?=  $request->server->get('SCRIPT_NAME')?>?id=<?= $post['id']?>">edit</a>
		</td>
		<tr>
<?php endforeach?>
</table>


