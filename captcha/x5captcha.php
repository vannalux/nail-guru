<?php
include("../res/x5engine.php");
$nameList = array("ejr","txa","wnz","h6p","78g","2pm","xv4","7kh","hp2","zp4");
$charList = array("P","3","S","H","G","G","Z","K","T","3");
$cpt = new X5Captcha($nameList, $charList);
//Check Captcha
if ($_GET["action"] == "check")
	echo $cpt->check($_GET["code"], $_GET["ans"]);
//Show Captcha chars
else if ($_GET["action"] == "show")
	echo $cpt->show($_GET['code']);
// End of file x5captcha.php
