<?php
require_once "KendaraanController.php";

$controller = new KendaraanController();
$data = $controller->getData();

require_once "view.php";