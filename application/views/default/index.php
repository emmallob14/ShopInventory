<?php
global $admin_user;

if($admin_user->logged_InControlled() == true):
	$token ="";
	//using the switch case to get the right file to display
	if(isset($SITEURL[0]) and $SITEURL[0] != "index"):
		//set a variable for the file
		$file = $SITEURL[0];
		
		if(file_exists("".$file.'.php'))
			include_once "{$file}.php";
		else
			include_once "dashboard.php";
	else:
		include_once "dashboard.php";
	endif;
else:
	require "login.php";
endif;
