<?php
	
	require_once("inc_global.php");

	if($p3 !== ""){
		include_once("property.php");
	} else if($p2 !== "") {
		include_once("property-listing.php");
	} else {
		include_once("index.php");
	}

?>