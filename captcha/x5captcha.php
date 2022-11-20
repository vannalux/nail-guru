<?php
include("../res/x5engine.php");
$nameList = array("rd5","lze","7vc","ljy","jld","75u","2yw","kxd","m57","k8s");
$charList = array("4","J","D","G","W","H","C","R","8","Y");
$cpt = new X5Captcha($nameList, $charList);
//Check Captcha
if ($_GET["action"] == "check")
	echo $cpt->check($_GET["code"], $_GET["ans"]);
//Show Captcha chars
else if ($_GET["action"] == "show")
	echo $cpt->show($_GET['code']);
// End of file x5captcha.php
