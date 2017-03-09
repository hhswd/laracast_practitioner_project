<?php
	require $_SERVER['DOCUMENT_ROOT'].'/partials/head.php';
	// set head:
	$title = "About";
	setHead($title);
	require $_SERVER['DOCUMENT_ROOT'].'/partials/nav.php';
?>
	<h1>About <?= $company; ?></h1>

<?php
require $_SERVER['DOCUMENT_ROOT'].'/partials/foot.php';
?>