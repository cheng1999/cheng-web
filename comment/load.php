<?
include("sql.php");
extract($_GET);

$start=intval($load);
$loadNum=20;

if($mode==1){
	$table='comment1';
	$cdn="ORDER BY id DESC LIMIT $start,$loadNum";			//$cdn is the abbreviation of 'condition' which will use for mysql command
	}
else if($mode==2){
	$table='reply1';
	$cdn="WHERE id BETWEEN $start AND $start+$loadNum" ;
	}

if(!$result = mysql_query("SELECT * FROM $table $cdn"))
    die(mysql_error()); // TODO: better error handling


if($mode==1){
while($row = mysql_fetch_row($result)){
	echo 	"<div class=\"cmt\" id=\"cmt-$row[0]\"><div id=\"cmtauthor\">",	//id
			"<n>$row[1]</n>",												//name
			"<date>$row[3]</date></div>",									//time
			"<a id=\"reply\">reply</a>",									//reply <a>
			"<div id=\"text\">$row[2]</div></div>";							//text			
}
}
else if($mode==2){
while($row = mysql_fetch_row($result)){
	echo 	"<div class=\"reply\" id=\"cmt-$row[0]\"><div id=\"cmtauthor\">",	//id
			"<n>$row[1]</n>",													//name
			"<date>$row[3]</date></div>",										//time
			"<div id=\"text\">$row[2]</div></div>";								//text		
}
}
?>
