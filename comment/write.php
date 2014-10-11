
<?
include("sql.php");
extract($_POST);

//check and fix some requirement for comment----------------------------------------------

//filter
$name=addslashes(htmlspecialchars($name));
$text=addslashes(htmlspecialchars($text));
if (trim($name)==""){
	$name="Anonymous";
}
if (trim($text)==""){
}

//----------------------------------------------------------------------

//passed
else{
    $change = array("\n", "\r\n", "\r");
    
    $text = str_replace($change, '<br>', $text);
    
    $date=date("Y/n/j \a\\t g:ia");

//write into sql

if(!@mysql_query("INSERT INTO comment1 (name, text , date)VALUES( '$name', '$text', '$date')"))
		die( mysql_error ());
}

?>

<script>window.location.href='/comment'</script>
