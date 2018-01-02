<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Блог моих рассказов</title>
	<link rel="stylesheet" type="text/css" href="../style.css">
</head>
<body>
	<div class="container">
		<h1>Блог моих рассказов</h1>
		<div>
			<table class="admin_table">
				<tr>
					<th>Дата</th>
					<th>Заголовок</th>
					<th></th>
					<th></th>
				</tr>
			<?php foreach($articles as $a): ?>
				<tr>
					<td><?=$a['date']?></td>
					<td><?=$a['title']?></td>
					<td>
						<a href="index.php?action=edit&id=<?=$a['id']?>">Редактировать</a>
					</td>
					<td>
						<a href="index.php?action=delete&id=<?=$a['id']?>">Удалить</a>
					</td>
				</tr>
			<?php endforeach ?>
		</table>
		<a href="index.php?action=add">Добавить новый рассказ</a>
		</div>
		<footer>
			<p>Блог моих рассказов <br>Copyright &copy; 2017</p>
		</footer>
	</div>
</body>
</html>
