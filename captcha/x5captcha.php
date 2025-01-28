<?php
include("../res/x5engine.php");
$nameList = array("k4z","ny5","ge6","ef4","w8h","m3u","atm","cwf","n5v","hjj");
$charList = array("L","T","X","G","M","R","U","L","G","L");
$cpt = new X5Captcha($nameList, $charList);
//Check Captcha
if ($_GET["action"] == "check")
	echo $cpt->check($_GET["code"], $_GET["ans"]);
//Show Captcha chars
else if ($_GET["action"] == "show")
	echo $cpt->show($_GET['code']);
// End of file x5captcha.php
