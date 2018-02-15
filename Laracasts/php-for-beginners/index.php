<?php

$person = [
	'age' => 32,
	'hair' => 'brown',
	'career' => 'web developer'
];

$person['name'] = 'Erik';
unset($person['age']);


die(var_dump($person));


require 'index.view.php';