<!DOCTYPE html>
<html>
<head>
	<title>subjects list</title>
</head>
<body>
	<h1>Subjects List</h1>
	<?php foreach($subjects as $sub): ?>

	<ul>
		<li><?=$sub['subject']?>-<?=$sub['abbr']?></li>
	</ul>

	<?php endforeach; ?>
</body>
</html>