<!--
----
reference:
	freebuf.com,
	sarawakmethodist.org
----
programmer:Lee Guo Cheng
	facebook:fb.com/detective1999
----
-->

<!DOCTYPE HTML>
<html>	
<head>
<meta http-equiv="Content-Type"content="text/html; charset=utf-8">
<meta name="viewport" content="width=device-width">
<title>village</title>
<link rel="stylesheet" href="comment.css">
<script src="//code.jquery.com/jquery-1.10.2.js"></script>
</head>

<body>
	<div id="container">
		<div id="left_con">
			<form id="commentbox" method="post" action="write.php">
<!-------------------><input type="hidden" value="1" name="Cid">
				<p>
				<label>nickname</label><input id="nameInput" name="name" type="text" placeholder="anonymous" maxlength="40" autofocus>
				</p>
				<br>
				<textarea id="textInput" name="text" placeholder="Write a comment..." 
				onkeydown="if(event.ctrlKey&&event.keyCode==13){
					document.getElementById('buttonSubmit').click();
					return false};
					"></textarea>
				<br>
				<input id="buttonSubmit" type="submit" value="Post (ctrl+enter)">
			</form>
			<div id="commentList">
			</div>
			<center><img src="loading.gif" id="loading"></img></center>
			
			<div id="hideCon">
				<div id=replyList></div>
					
					<div class="cmt">
					<form id="commentbox" class="cmt" method="post" action="write.php">
	<!-----------------><input id="Cid" type="hidden" value="" name="Cid">
						<p>
						<label>nickname</label><input id="nameInput" name="name" type="text" placeholder="anonymous" maxlength="40" autofocus>
						</p>
						<br>
						<textarea id="textInput" name="text" placeholder="Write a comment..." 
						onkeydown="if(event.ctrlKey&&event.keyCode==13){
							document.getElementById('buttonSubmit').click();
							return false};
							"></textarea>
						<br>
						<input id="buttonSubmit" type="submit" value="Post (ctrl+enter)">
					</form>
					</div>
				
			</div>
			
		</div>
		
		<div id="right_con">
			something here...
		</div>
	</div>


<script src="comment.js"></script>
</script>
</body>
</html>
