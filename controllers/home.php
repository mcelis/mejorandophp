<?php 

	require 'config.php';
	require 'helpers.php';

	$confidencial = "muy confidencial";
	$languaje = "PHP";
	$titulo = 'MejorandoPHP';



	// llamando una funcion
	view('home', compact('languaje', 'titulo'));
	

