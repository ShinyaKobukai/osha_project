<?php  
	$food_name = "";
?>

<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<title>Buono</title>
	<link rel="stylesheet" href="buono.css" />
</head>
<body>
	<header>
		<h1>
			<a href="buono_main.php"><img src="image/logo.png" alt=""></a>
		</h1>
	</header>
	<div id="back">
		<div id="box"></div>
		<div id="search_box">
			<form action="search_result.php" method="post">
				<p><input type="text" name="food_name" placeholder="料理名を入力してください" size="40" maxlength="20"></p>
				<p><input type="submit" value="検索"></p>
			</form>
		</div>
		<div id="box"></div>
	</div>
	<div id="main">
			<a href="buono_main.php">投稿へ戻る</a>
	</div>
</body>
</html>