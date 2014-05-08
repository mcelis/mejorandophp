<?php
// frondend controller
require 'config.php';
require 'helpers.php';

// llamar a los controladores individuales

//index.php
if (empty($_GET['url'])) 
{
	require "controllers/home.php";
}
//index.php?url=contactos
elseif ($_GET['url']== 'contactos') 
{
	require "controllers/contactos.php";
}
//index.php?url=hkdjahkd
else
{
	header("HTTP/1.0 404 Not Found");
	exit ("Pagina no encontreda");
}

var_dump($_GET);
