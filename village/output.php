<?php
	session_start();
	if(isset($_SESSION['answer'])){
		echo file_get_contents("/var/www2/index.html");
	}
	else{
		echo '<meta http-equiv=REFRESH CONTENT=1;url=index.php>';
	}
?>

