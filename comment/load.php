<?
include("sql.php");
$start=intval($_GET['load']);
$loadNum=$start+20;

$result = mysql_query("SELECT * FROM comment1 ORDER BY id DESC LIMIT $start,$loadNum;");

if($result === FALSE) {
    die(mysql_error()); // TODO: better error handling
}
while($row = mysql_fetch_row($result)){
	echo 	"<div id=\"cmt\" class=\"cmt-$row[0]\"><div id=\"cmtauthor\">",	//id
			"<n>$row[1]</n>",												//name
			"<date>$row[3]</date></div>",									//time
			"<a id=\"reply\" onclick=\"\">reply</a>",						//reply <a>
			"<div id=\"text\">$row[2]</div></div>";							//text
			
}

?>
