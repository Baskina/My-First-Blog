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
		<div class="art_content">
			<h3><?=$article['title']?></h3>
			<em>Опубликовано:<?=$article['date']?></em>
			<p><?=$article['content']?></p>
		</div>
		<footer>
			<p>Блог моих рассказов <br>Copyright &copy; 2017</p>
		</footer>
	</div>
</body>
</html>