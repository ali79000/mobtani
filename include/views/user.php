<?php
$main = '
			if( isset($alerts) )
				echo $alerts;
			echo "<section>";
				foreach($table as $row){
					get_template_part("showUsers", null, $row);
				}
			echo "</section>";
';
include 'templates/master.php';
?>