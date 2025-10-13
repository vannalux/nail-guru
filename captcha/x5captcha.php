<?php
include("../res/x5engine.php");
$nameList = array("u73","m8t","t7m","d3m","pfk","2lr","vgu","2sx","5vr","6n8");
$charList = array("T","Z","V","C","J","X","H","T","7","A");
$cpt = new X5Captcha($nameList, $charList);
//Check Captcha
if ($_GET["action"] == "check")
	echo $cpt->check($_GET["code"], $_GET["ans"]);
//Show Captcha chars
else if ($_GET["action"] == "show")
	echo $cpt->show($_GET['code']);
// End of file x5captcha.php
