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
			<form method="post" action="index.php?action=<?=$_GET['action']?>&id=<?php 
			if(isset($_GET['id']))
				echo $_GET['id'];
			else echo ""?>">
				<label>Название</label>
				<input type="text" name="title" value="<?php
				if(isset($article['title']))
					echo $article['title'];
				else echo "";?>" class="form_item" autofocus required>

				<label>Дата</label>
				<input type="date" name="date" value="<?php
				if(isset($article['date']))
					echo $article['date'];
				else echo "";?>" class="form_item" required>

				<label>Содержимое</label>
				<textarea name="content" class="form_item" required><?php
				if(isset($article['content']))
					echo $article['content'];
				else echo "";?>
				</textarea>

				<input type="submit" value="Сохранить" class="button">
			</form>
		</div>
		<footer>
			<p>Блог моих рассказов <br>Copyright &copy; 2017</p>
		</footer>
	</div>
</body>
</html>
