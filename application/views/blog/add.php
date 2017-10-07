<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Blog</title>
</head>
<body>
<h1>Blog Add</h1>
<table>
<?php
foreach($users as $user):?>
<tr>
<td><?php echo $user['first_name']; ?></td>
<td><?php echo $user['last_name']; ?></td>
</tr>
<?php endforeach; ?>
</table>
</body>
</html>