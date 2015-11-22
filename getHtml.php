<?php
	extract($_GET);
	// switch(strtoupper($cmd)) {
	// 	case	"GOOGLEMAP"	:	fnGetGoogleMap();
	// 								break;

	// 	default					:	echo "INVALID COMMAND";
	// }
	// function fnGetGoogleMap() {
	// 	echo "https://www.google.com/maps/dir/"+ $_GET['sourceLat'] +","+ $_GET['sourceLon'] +"/@"+ $_GET['destinyLat'] +","+ $_GET['destinyLon'] +",12z/data=!3m1!4b1!4m8!4m7!1m0!1m5!1m1!1s0x3be7ce12e3824031:0x1ede8d0a9307952d!2m2!1d72.8183134!2d18.9623513";
	// 	exit()
	//echo $_GET['sourceLat'];
		echo ("//www.google.com/maps/dir/". $_GET['sourceLat'] .",". $_GET['sourceLon'] ."/@". $_GET['destinyLat'] .",". $_GET['destinyLon'] .",12z/data=!3m1!4b1!4m8!4m7!1m0!1m5!1m1!1s0x3be7ce12e3824031:0x1ede8d0a9307952d!2m2!1d72.8183134!2d18.9623513");
	// }
?>