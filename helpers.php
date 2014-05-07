<?php
	
	// Declarando la funcions
	function view($template, $vars = array())
	{
		extract($vars);
		require "views/$template.tpl.php";
	}