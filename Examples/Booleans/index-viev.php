<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<h1>Task For The Day</h1>
	
	<ul>
			<li>
				<strong>Name:</strong> <?= $task['title']; ?>
			</li>

			<li>
				<strong>Date:</strong> <?= $task['date']; ?>
			</li>


			<li>
				<strong>Person:</strong> <?= $task['assigned_to'];?>
			</li>

			<li>
				<strong>Status:</strong> <?= $task['status']? 'Complete': 'Incomplete'; ?>
			</li>
	</ul>
</body>
</html>