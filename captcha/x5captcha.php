<?php
include("../res/x5engine.php");
$nameList = array("8cn","t4r","faw","hxe","ccs","6ln","rv2","kcp","pwv","wee");
$charList = array("C","7","C","Z","A","3","A","7","H","G");
$cpt = new X5Captcha($nameList, $charList);
//Check Captcha
if ($_GET["action"] == "check")
	echo $cpt->check($_GET["code"], $_GET["ans"]);
//Show Captcha chars
else if ($_GET["action"] == "show")
	echo $cpt->show($_GET['code']);
// End of file x5captcha.php
