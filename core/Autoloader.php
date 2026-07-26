<?php
spl_autoload_register(function ($class)
{
     $core = ROOT . '\\core\\' . $class . '.php';
     $controller = ROOT . '\\controllers\\' . $class . '.php';

    if (file_exists($core))
    {
        require_once $core;
    }
    else if (file_exists($controller))
    {
        require_once $controller;
    }
    else
    {
        return;
    }
});
?>