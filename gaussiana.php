<?php
	include 'class.gauss.php';
	$method = new Gauss($_POST['A']);
	$method->getGaussSolution();
?>