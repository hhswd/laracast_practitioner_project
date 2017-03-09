<?php
	require $_SERVER['DOCUMENT_ROOT'].'/partials/head.php';
	// set head:
	$title = "Task";
	setHead($title);
	require $_SERVER['DOCUMENT_ROOT'].'/partials/nav.php';
?>

<ul>
	<?php foreach ($tasks as $task): ?>
		<li>
		<?php if($task->completed == 1): ?>
			<del><?= $task->description ?></del>
		<?php else: ?>
			<?= $task->description ?>
		<?php endif ?>
		</li>
	<?php endforeach ?>
</ul>
	<a href="addUser">Add user</a>



<?php
require $_SERVER['DOCUMENT_ROOT'].'/partials/foot.php';
?>
