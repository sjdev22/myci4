<!DOCTYPE html>
<html>
<head>
	<title>Users List</title>
</head>
<body>
	<h1>UsersList</h1>
	<?php if(!empty($users)): ?>
		<table border="1">
			<th>Id</th>
			<th>Username</th>
			<th>Email</th>
			<th>Role</th>
		<?php foreach($users as $user): ?>
			<tr>
				<td><?=$user->id?></td>
				<td><?=$user->username?></td>
				<td><?=$user->email?></td>
				<td><?=$user->role?></td>
			</tr>
		<?php endforeach; ?>
		</table>
	<?php else: ?>
		<h1>Sorry! No Records Found.</h1>
	<?php endif; ?>

	
</body>
</html>