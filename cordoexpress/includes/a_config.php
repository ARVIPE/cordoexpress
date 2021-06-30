<?php
	switch ($_SERVER["SCRIPT_NAME"]) {
										
		default:
			$CURRENT_PAGE = "Index";
			$PAGE_TITLE = "CordoExpress";
	}

	

//start session on web page
session_start();

$login_button = '';
?>