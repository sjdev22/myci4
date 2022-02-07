<!DOCTYPE html>
<html lang="en">
<head>
	<title>Account Activation</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- Theme style -->
  <link rel="stylesheet" href="<?=base_url()?>/public/dist/css/adminlte.min.css">
</head>
<body>
	<h1>Account Acctivation</h1>
	<?php if(isset($error)) : ?>
		<div class="alert alert-danger">
			<?=$error?>
		</div>
	<?php endif; ?>
	<?php if(isset($success)) : ?>
		<div class="alert alert-success">
			<?=$success?>
		</div>
	<?php endif; ?>
</body>
</html>