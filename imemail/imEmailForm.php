<?php
if(substr(basename($_SERVER['PHP_SELF']), 0, 11) == "imEmailForm") {
	include '../res/x5engine.php';
	$form = new ImForm();
	$form->setField('', @$_POST['imObjectForm_28_2'], '', true);
	$form->setField('Имя', @$_POST['imObjectForm_28_4'], '', false);
	$form->setField('Телефон', @$_POST['imObjectForm_28_5'], '', false);

	$errorMessage = '';
	if(@$_POST['action'] != 'check_answer') {
		if(!isset($_POST['imJsCheck']) || $_POST['imJsCheck'] != '87398CD01ABFE6AFB3D7EFC61B8E33F4' || (isset($_POST['imSpProt']) && $_POST['imSpProt'] != ""))
			$errorMessage = "Необходимо активировать JavaScript!";
		$form->mailToOwner('vannavam2015@gmail.com', '', 'vannavam2015@gmail.com', 'Запись на Маникюр/Педикюр/Дизайн', "", false);
		if ($errorMessage == '') {
			echo "{\"status\" : true}";
		}

		else {
			echo "{\"status\" : false, \"err\" : \"$errorMessage\"}";
		}
		exit();
	} else {
		echo $form->checkAnswer(@$_POST['id'], @$_POST['answer']) ? 1 : 0;
	}
}

// End of file