<!--    
    Teo Espero
    BS Cloud and Systems Administration
    Western Governors University

    #Web-Dev-Bootcamp-Lynda
-->

<?php
	// Assign file paths to PHP constants
	// __FILE__ returns the current path to this file
	// dirname() returns the path to the parent directory

	define("PRIVATE_PATH", dirname(__FILE__));
	define("PROJECT_PATH", dirname(PRIVATE_PATH));
	define("PUBLIC_PATH", PROJECT_PATH);
	define("SHARED_PATH", PRIVATE_PATH . '/shared');

	require_once('functions.php');
?>
