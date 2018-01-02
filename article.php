<?php
	require_once("database.php");
	require_once("models/articles.php");

	$link=db_connet();
	$article = articles_get($link, $_GET['id']);

	include("views/article.php");
?>