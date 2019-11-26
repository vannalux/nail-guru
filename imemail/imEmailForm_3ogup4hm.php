<?php
if(substr(basename($_SERVER['PHP_SELF']), 0, 11) == "imEmailForm") {
	include '../res/x5engine.php';
	$form = new ImForm();
	$form->setField('Имя', @$_POST['imObjectForm_2_1'], '', false);
	$form->setField('Телефон', @$_POST['imObjectForm_2_2'], '', false);
	$form->setField('Ваш город', @$_POST['imObjectForm_2_3'], '', false);

	if(@$_POST['action'] != 'check_answer') {
		if(!isset($_POST['imJsCheck']) || $_POST['imJsCheck'] != '25499D367F70FA15AF5D420029772550' || (isset($_POST['imSpProt']) && $_POST['imSpProt'] != ""))
			die(imPrintJsError());
		$form->mailToOwner('info@vannalux.ml', 'info@vannalux.ml', '', '', false);
		@header('Location: ../index.html');
		exit();
	} else {
		echo $form->checkAnswer(@$_POST['id'], @$_POST['answer']) ? 1 : 0;
	}
}

// End of file