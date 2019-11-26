<?php
include("../res/x5engine.php");
$nameList = array("mh2","sn8","v56","2dt","sup","a75","gc4","dwx","vaz","4lg");
$charList = array("2","7","X","G","T","V","7","J","3","L");
$cpt = new X5Captcha($nameList, $charList);
//Check Captcha
if ($_GET["action"] == "check")
	echo $cpt->check($_GET["code"], $_GET["ans"]);
//Show Captcha chars
else if ($_GET["action"] == "show")
	echo $cpt->show($_GET['code']);
// End of file x5captcha.php
