<!DOCTYPE html>
<html>
<head>
	<title><?=$page_title?></title>
</head>
<body>
	<h1><?=$page_heading?></h1>
	<h3>Subjects List</h3>
	<ul>
		<?php
		if(count($subjects)>0):
			foreach ($subjects as $sub) :
			?>
			<li><?= $sub; ?></li>
			<?php
			endforeach;
		else:
			echo "<p>Sorry! No Records Found</p>";
		endif;
		?>
	</ul>
</body>
</html>