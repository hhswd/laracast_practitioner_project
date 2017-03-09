 <?php

return [

	'database' => [
		'host' => '192.168.10.10',
		'dbname' => 'mytodo',
		'charset' => 'utf8',
		'user' => 'planner',
		'pwd' => '',
		'opt' => [
			PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
		]
	]
];