<?php
	session_start();
	if(isset($_SESSION['answer'])){
		echo '<meta http-equiv=REFRESH CONTENT=1;url=output.php>';
	}
	
	$ques=["学生之间对训导主任的称呼","公教中学校歌第一句的最后一个字"];
	$num=rand(0,1);
?>

<!--------------------------------------------------------------------------------国成作品----------------------------------------------------------------------->
<html>
<head>
<meta charset="UTF-8"> 
<link rel="stylesheet" href="style.css">
<title>公教村</title>
</head>

<body>	
<div id="container">
<link href="http://fonts.googleapis.com/css?family=Ubuntu:300" rel="stylesheet" type="text/css">
		
		<div id="full">
			<br><br><a style="font-size:50px;font-weight:bold;">回答问题:</a><br><h>
			<a style="font-size:40px;">
				<? echo $ques[$num]; ?> </a><br><br>
		<form method="post" action="check.php">
			<input name="answer" type="text" autofocus>
			<button class="button" type="submit" name="num" value="<? echo $num ;?>">提交</button><br>
		</form>
		
		</h></div>
		
</div>
</body>
</html>

<!----------------------------------------------------------------------------------------------------------------------------------------!>





