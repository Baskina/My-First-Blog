<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Блог моих рассказов</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="container">
		<h1>Блог моих рассказов</h1>
		<a href="admin">Панель администратора</a>
		<div>
			<?php foreach($articles as $a): ?>
				<div class="art_content">
					<h3><a href="article.php?id=<?=$a['id']?>"><?=$a['title']?></a></h3>
					<em>Опубликовано:<?=$a['date']?></em>
					<p><?=articles_intro($a['content'])?></p>
				</div>
			<?php endforeach ?>
		</div>
		<footer>
			<p>Блог моих рассказов <br>Copyright &copy; 2017</p>
		</footer>
	</div>
</body>
</html>
