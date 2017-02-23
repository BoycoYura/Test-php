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
				<strong>Status:</strong> 
				<?php 
					if ($task['status']) {
						echo 'Done';
					}
					else{
						echo 'Not done';
					}
				?>
			</li>

			<li>
				<strong>Status(two):</strong> 
				<?php if ($task['status']): ?>
					<span class="icon">&#9989;</span>
				<?php else: ?>
					<span class="icon">Incomplete</span>
				<?php endif ?>
				
			</li>
	</ul>
</body>
</html>