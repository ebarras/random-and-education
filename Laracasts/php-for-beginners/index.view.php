<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
	<ul>
		<?php foreach ($person as $feature => $value) : ?>
			<li><strong><?= $feature ?></strong> <?= $value ?></li>
		<?php endforeach; ?>
	</ul>
</body>
</html>