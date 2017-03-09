<?php

	require $_SERVER['DOCUMENT_ROOT'].'/partials/head.php';
	// set head:
	$title = "UserList";
	setHead($title);
	require $_SERVER['DOCUMENT_ROOT'].'/partials/nav.php';
?>

<ul>
	<?php foreach ($users as $user): ?>
		<li><?= $user->name ?></li>
	<?php endforeach ?>

	<a href="/addUser">Add user</a>
</ul>

<?php
require $_SERVER['DOCUMENT_ROOT'].'/partials/foot.php';
?>