<?php
/*PHP $_GET can also be used to collect form data after submitting an HTML form with method="get".

		$_GET can also collect data sent in the URL.
 * 
 * 
 */


echo "Study " . $_GET['subject'] . " at " . $_GET['web']."<br>";

foreach ($_GET as $isiget){
	echo $isiget."<br>";
}
?>