<?php
require_once 'controller/redireccionController.php';

$action = isset($_GET['action']) ? $_GET['action'] : 'inicio';
$controller = new redireccionController();

switch ($action){
    case 'inicio':
        $controller->verInicio();
}
?>