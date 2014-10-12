
<?
include("sql.php");
extract($_POST);

/*
 * -----------------------check and fix some requirement for comment-----------------------
 */
//filtering the input
$name=addslashes(htmlspecialchars($name));
$text=addslashes(htmlspecialchars($text));

// Cid is the id of comments to reply (abbreviation of 'Comment id' 
// but if Cid==1 that means this is comment.
$Cid=intval($Cid);
if (trim($name)==""){
	$name="Anonymous";
}
if (trim($text)==""){
}

/*
 * -----------------------the requirement is passed, edit text and fill date----------------
 */
else{
    $change = array("\n", "\r\n", "\r");
    $text = str_replace($change, '<br>', $text);
    $date=	date("Y/n/j \a\\t g:ia"); //date format:	2014/12/25 at 2:00am
    
    
/*
 * -----------------------insert into sql---------------------------------------------------
 */
	//comment	(Cid==1)
	if($Cid==1){
		if(!@mysql_query("INSERT INTO comment1 (name, text , date)VALUES( '$name', '$text', '$date')"))
			die( mysql_error ());
	}
	
	//reply		(Cid!=1 && Cid is the id of comment to reply)
	else{
		if(!@mysql_query("INSERT INTO reply1 (id, name, text , date)VALUES( $Cid, '$name', '$text', '$date')"))
			die( mysql_error ());
	}

}
?>


<script>window.location.href='/comment'</script>
