<meta http-equiv="Content-Type"content="text/html; charset=utf-8">

<?
session_start();
$num=$_POST['num'];
$ans=$_POST['answer'];
switch ($num){
	case 0:
		if($ans=="Ah Vong"||$ans=="ahvong"||$ans=="ah vong"){correct();}
		else{wrong();}
		break;
	case 1:
		if($ans=="洲"||$ans=="州"){correct();}
		else{wrong(); }
		break;
	default:
		wrong();
}

function correct(){
	$_SESSION['answer']=1;
	echo '<meta http-equiv=REFRESH CONTENT=1;url=output.php>';
}
function wrong(){
	echo "<script>alert(\"抱歉，错误答案！\")</script>"; 
	echo '<meta http-equiv=REFRESH CONTENT=1;url=index.php>';
}


?>
