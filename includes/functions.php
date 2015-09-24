<?php
// Allow includes and include dbcon.php
ini_set('allow_url_include', '1');
include 'dbinfo.php';

/**
 * redirect($page)
 *
 * $page =	Relative link to the page for redirect.
 * $timeout	=	Time (in seconds) before redirect.
 *
 * Enables javascript redirect and prints link (in case JS isn't enabled)
 */
function redirect($page, $timeout) {
	// Print link
	echo "<p>If you are not redirected in $timeout seconds please <a href='$page'>click here</a>.</p>";
	
	// Convert to milliseconds
	$timeout = (int)$timeout*1000;

	// JS redirect
	echo '<script language="javascript">';
	echo "setTimeout(\"location='". $page ."'\", $timeout);";
	echo '</script>';
}

?>