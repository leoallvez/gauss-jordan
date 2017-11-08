<?php
	include 'class.gauss.php';
	$method = new Gauss($_POST['matriz']);
	$method->getGaussSolution();
?>