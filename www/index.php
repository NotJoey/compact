<?php
/**
 * Created by PhpStorm.
 * User: joey
 * Date: 20.02.19
 * Time: 09:52
 */

require_once('../backend/controllers/defaultController.php');
require_once('../backend/models/defaultModel.php');
$defaultController = new defaultController();
$defaultModel = new defaultModel();

$uri = $defaultModel->escape($defaultModel->base($defaultModel->parse($_SERVER['REQUEST_URI'], PHP_URL_PATH)));

//Routing system
if($uri == basename(__DIR__))
{
    $defaultController->index();
}
//404 page
else
{
    $defaultController->error404();
}