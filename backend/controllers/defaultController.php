<?php
/**
 * Created by PhpStorm.
 * User: joey
 * Date: 20.02.19
 * Time: 09:26
 */

class defaultController
{
    //Pages must include viewable content to load.
    public function index()
    {
        include_once('../backend/views/defaultView.php');
    }
    public function error404()
    {
        include_once('../backend/views/404.php');
    }
}