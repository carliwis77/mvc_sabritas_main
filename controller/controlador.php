<?php
	require_once("../model/modelo.php");
	$menu = new Juego();
	$pd = $menu->lista_juegos();
	require_once("../view/vista.php");
?>