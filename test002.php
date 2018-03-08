<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>开启PHP模式的四对不同的开始和结束标记</title>
</head>
<body>
	<?php
		echo "1.这个标记是标准的PHP语言标记";
	?>
	<hr>
	<script language="php">
		echo "2.这个标记是脚本风格，是最长的标记.";
	</script>
	<hr>	
	<? echo "3.这个标记风格是最简单的简短风格" ?>
	<hr>
	<?=$expression ?>这也是一种简写方式，等价于 <? echo $expression ?>
	<hr>
	<% echo "4.这个标记风格类似于ASP标签的写法" %>
	<hr>
	<%=$expression %>这也是一种简写方式，等价于 <% echo $expression %>
</body>
</html>