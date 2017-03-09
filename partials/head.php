<?php

function setHead($title){
	$t;
	if(isset($title)){
		$t = $title;
	}
	echo
	'<!DOCTYPE html>
	<html>
	<head>
		<title>'.$t.'</title>
	</head>
	<body>';
}