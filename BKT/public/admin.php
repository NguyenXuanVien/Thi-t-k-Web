<?php

$controllername = $_GET['controller'] ?? 'sv';
$action = $_GET['action'] ?? 'index';

$controllerclass = $controllername . 'Controller';
require_once __DIR__ . "/../controller/$controllerclass.php";

$controller = new $controllerclass();
$controller->$action();