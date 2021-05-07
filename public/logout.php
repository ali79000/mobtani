<?php
	include '__php__.php';
	
	
	Authentication :: logout();
			
	Alert::alerts('از همراهی شما متشکریم !', 'warning');
	redirect('login.php');
    ?>