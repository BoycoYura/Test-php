<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>

<ul>

	<?php foreach ($var as $task): ?>
		<li>
			<?php if ($task->GetCompleted()): ?>
				<strike> <?= $task->GetDescription();?></strike>
			<?php else: ?>
				<?= $task->GetDescription();?>
			<?php endif ?>
		</li>	
	<?php endforeach ?>
	
</ul>
</body>
</html>