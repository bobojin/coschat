<?php
	
	echo "<html lang='zh-cn'>\n";
	echo "<head>\n";
	echo "\t<meta charset='UTF-8'>\n";
	echo "\t<meta content='IE=edge' http-equiv='X-UA-Compatible'>\n";
	echo "\t<title>CosChat</title>\n";
	echo "</head>\n";
	echo "<body>\n";
	
	include 'api/connect.php';
	
	$result = mysql_query("SELECT * FROM channel");
	while($row = mysql_fetch_array($result)){
		echo "\t\t\t<p>" . $row['channel_name'] . "</p>\n";
	}
	
	echo "</body>\n";
	echo "</html>\n";

?>