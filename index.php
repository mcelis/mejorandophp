<?php
/*
 * El frontend controller se encarga de
 * configurar nuestra aplicacion
 */
require 'config.php';
require 'helpers.php';

//Library
require 'library/Request.php';
require 'library/Inflector.php';
require 'library/Response.php';
require 'library/View.php';


//Llamar al controlador indicado
if (empty($_GET['url']))
{
	$url="";
}
else
{
	$url = $_GET['url'];
}

// instanciamos la clase
$request = new Request($url);
// valor del metodo que se creo getUrl es decir se llama al metodo
//var_dump($request->getParams());
$request->execute();