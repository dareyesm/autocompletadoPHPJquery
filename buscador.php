<?php

include_once 'class/usuarios.php';
$objUser = new Usuarios();

echo json_encode($objUser->buscar($_GET['term']));
