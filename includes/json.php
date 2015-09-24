<?php
/** 
 *  ONLY CHANGE THE DATE IN THIS QUERY. IF YOU CHANGE ANYTHING ELSE YOU ARE AT RISK OF BREAKING THE APP.
 */
include ('dbinfo.php');

/*$query = "SELECT * FROM sighting WHERE date > '2012-01-01 00:00:00' ORDER BY date DESC";*/
$query = "SELECT * FROM sighting WHERE date > DATE_SUB(now(), INTERVAL 6 MONTH) ORDER BY date DESC";
$result = mysql_query($query);

$rows = array();
while ($r = mysql_fetch_assoc($result)) {
	$rows[] = $r;
}

header("content-type: application/x-javascript");

echo "var data = {coyotes: ";
print json_encode($rows);
echo "};";

?>