<?php

	if(!isset($_REQUEST["data"])) {
		die("You have to provide input!");
	}
	echo htmlentities($_REQUEST["data"]);

?>