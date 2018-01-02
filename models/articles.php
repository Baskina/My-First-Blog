<?php
	function articles_all($link){
		$query="SELECT * FROM stories ORDER BY id DESC";
		$result=mysqli_query($link, $query);

		if(!$result)
			die(mysqli_error($link));

		$num=mysqli_num_rows($result);

		$articles=array();
		for($i=0; $i<$num; $i++)
		{
			$row=mysqli_fetch_assoc($result);
			$articles[]=$row;
		}
		return $articles;

	}
	function articles_get($link, $id){
		$query=sprintf("SELECT * FROM stories WHERE id=%d", (int)$id);
		$result=mysqli_query($link, $query);
		if(!$result)
			die(mysqli_error($link));

		$article = mysqli_fetch_assoc($result);

		return $article;
	}
	function articles_new($link, $title, $date, $content){

		$title = trim($title);
		$content = trim($content);

		if($title == '')
			return false;

		$q = "INSERT INTO stories (title, date, content) VALUES ('%s', '%s', '%s')";
		$query=sprintf($q, mysqli_real_escape_string($link, $title), mysqli_real_escape_string($link, $date), mysqli_real_escape_string($link, $content));

		$result = mysqli_query($link, $query);

		if(!$result)
			die(mysqli_error($link));

		return true;

		
	}
	function articles_edit($link, $id, $title, $date, $content){
		
		$title = trim($title);
		$content = trim($content);
		$date = trim($date);
		$id = (int)$id;
		if($title == '')
			return false;

		$q = "UPDATE stories SET title='%s', date='%s', content='%s' WHERE id='%d'";
		$query = sprintf($q, mysqli_real_escape_string($link, $title), mysqli_real_escape_string($link, $date), mysqli_real_escape_string($link, $content), $id);
		$result = mysqli_query($link, $query);
		if(!$result)
			die(mysqli_error($link));
		return mysqli_affected_rows($link);

	}
	function articles_delete($link, $id){
		
		$id = (int)$id;
		if($id == 0)
			return false;

		$q = "DELETE FROM stories WHERE id='%d'";
		$query = sprintf($q, $id);
		$result = mysqli_query($link, $query);

		if(!$result)
			die(mysqli_error($link));

		return mysqli_affected_rows($link);
	}
	function articles_intro($text, $length = 500)
	{
		return mb_substr($text, 0, $length);
	}
?>