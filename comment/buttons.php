<?
	$result = mysql_query("SELECT * from comment1");
	$row = sizeof($result);
?>

<script>
	var i=0;
	var n= <? echo ($row-20) ;?>;
	if(n>0){
		document.write("<button onclick=fwd\(\)>上一页<\/button>");
		for(var n=n;n>0;n-=20){if(n>0){i++;document.write(("<button onclick=\gotopage\("+n+"\)\>"+i+"\<\/button\>"))}}
		document.write("<button onclick=rev\(\)>下一页<\/button>");
	}
</script>
