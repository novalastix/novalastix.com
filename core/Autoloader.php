<?php
spl_autoload_register(function ($class)
{
     $core = ROOT . '/core/' . $class . '.php';
     $controller = ROOT . '/controllers/' . $class . '.php';
     $util = ROOT . '/util/' . $class . '.php';

    if (file_exists($core))
    {
        require_once $core;
    }
    else if (file_exists($controller))
    {
        require_once $controller;
    }
    else if (file_exists($util))
    {
        require_once $util;
    }
    else
    {
        return;
    }
});
?>